<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\CustomOrderRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Lunar\Models\Cart;
use Lunar\Models\Channel;
use Lunar\Models\Currency;
use Lunar\Models\ProductVariant;

class CustomOrderController extends Controller
{
    // ── Apparel quote submission ─────────────────────────────────────────────

    /**
     * Saves a custom apparel quote request to the database.
     * No Lunar cart involvement — the team follows up with a quote.
     */
    public function submit(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'orderType'    => 'required|in:apparel',
            'contactName'  => 'required|string|max:255',
            'contactEmail' => 'required|email|max:255',
            'contactPhone' => 'required|string|max:50',
        ]);

        $reference = 'T5P-' . strtoupper(Str::random(8));

        CustomOrderRequest::create([
            'reference'    => $reference,
            'order_type'   => 'apparel',
            'contact_name' => $validated['contactName'],
            'contact_email'=> $validated['contactEmail'],
            'contact_phone'=> $validated['contactPhone'],
            'payload'      => $request->all(),
            'status'       => 'pending',
            'submitted_at' => now(),
        ]);

        return response()->json([
            'success'   => true,
            'reference' => $reference,
        ]);
    }

    // ── DTF cart submission ──────────────────────────────────────────────────

    /**
     * Resolves DTF transfer variants, adds them to the Lunar cart, and records
     * the submission. Uses $request->session() directly to avoid Octane singleton
     * pollution in Lunar's CartSessionManager.
     *
     * Two payload shapes:
     *
     *  A. Pricing-table flow — dtfItems populated:
     *     Each item carries { type, size, tier, price, quantity }.
     *     SKU resolved from type + size via resolveDtfSku().
     *
     *  B. Manual wizard flow — dtfItems empty, dtfTypes/dtfQuantities present:
     *     dtfTypes:      { neckTag: bool, chestImage: bool, imageSize: bool }
     *     dtfQuantities: { neckTag: { tier: '15 – 49 pcs' }, … }
     *     SKU resolved to the default size per type via defaultSkuForType().
     *     Quantity from tier label via tierMinQuantity().
     */
    public function dtfCart(Request $request): JsonResponse
    {
        $request->validate([
            'action'              => 'required|in:cart,checkout',
            'contactName'         => 'required|string|max:255',
            'contactEmail'        => 'required|email|max:255',
            'contactPhone'        => 'required|string|max:50',
            'dtfItems'            => 'nullable|array',
            'dtfItems.*.type'     => 'nullable|string|max:100',
            'dtfItems.*.size'     => 'nullable|string|max:50',
            'dtfItems.*.tier'     => 'nullable|string|max:50',
            'dtfItems.*.price'    => 'nullable|string|max:20',
            'dtfItems.*.fileName' => 'nullable|string|max:255',
            'dtfItems.*.quantity' => 'nullable|integer|min:1',
        ]);

        // ── Save order record ────────────────────────────────────────────────
        $reference = 'T5P-DTF-' . strtoupper(Str::random(8));

        CustomOrderRequest::create([
            'reference'    => $reference,
            'order_type'   => 'dtf',
            'contact_name' => $request->input('contactName'),
            'contact_email'=> $request->input('contactEmail'),
            'contact_phone'=> $request->input('contactPhone'),
            'payload'      => $request->all(),
            'status'       => 'pending',
            'submitted_at' => now(),
        ]);

        // ── Resolve items to add ─────────────────────────────────────────────
        $itemsToAdd = [];   // [ [variantId, qty], … ]
        $dtfItems   = $request->input('dtfItems', []);

        if (count($dtfItems) > 0) {
            // Path A: user came from pricing table with specific sizes
            foreach ($dtfItems as $item) {
                $sku = $this->resolveDtfSku(
                    (string) ($item['type'] ?? ''),
                    (string) ($item['size'] ?? '')
                );
                if (! $sku) {
                    continue;
                }
                $variant = ProductVariant::where('sku', $sku)->first();
                if (! $variant) {
                    logger()->warning("DTF cart (A): SKU not found — {$sku}");
                    continue;
                }
                $qty = max(1, (int) ($item['quantity'] ?? $this->tierMinQuantity((string) ($item['tier'] ?? ''))));
                $itemsToAdd[] = [$variant->id, $qty];
            }
        } else {
            // Path B: manual wizard flow — type + tier selected, no specific size
            $dtfTypes      = $request->input('dtfTypes', []);
            $dtfQuantities = $request->input('dtfQuantities', []);

            foreach (['neckTag', 'chestImage', 'imageSize'] as $key) {
                if (empty($dtfTypes[$key])) {
                    continue;
                }
                $sku = $this->defaultSkuForType($key);
                if (! $sku) {
                    continue;
                }
                $variant = ProductVariant::where('sku', $sku)->first();
                if (! $variant) {
                    logger()->warning("DTF cart (B): default SKU not found — {$sku}");
                    continue;
                }
                $tier = (string) ($dtfQuantities[$key]['tier'] ?? '');
                $itemsToAdd[] = [$variant->id, $this->tierMinQuantity($tier)];
            }
        }

        // ── Get / create Lunar cart via request session directly ─────────────
        // We intentionally bypass CartSession (Lunar's singleton manager) here
        // because in Octane/FrankenPHP the singleton's cached $this->cart and
        // injected SessionManager can be stale from a previous worker request,
        // causing the wrong session to be written or the session write to be
        // silently dropped. Using $request->session() is always bound to the
        // current HTTP request's session regardless of worker state.
        $cartId = $request->session()->get('lunar_cart');
        $cart   = $cartId ? Cart::with([])->find($cartId) : null;

        if (! $cart || $cart->hasCompletedOrders()) {
            $cart = Cart::create([
                'currency_id' => Currency::getDefault()->id,
                'channel_id'  => Channel::getDefault()->id,
            ]);
        }

        // ── Add items ────────────────────────────────────────────────────────
        $addedCount = 0;

        foreach ($itemsToAdd as [$variantId, $qty]) {
            $variant = ProductVariant::find($variantId);
            if ($variant) {
                $cart->add($variant, max(1, min($qty, 9999)));
                $addedCount++;
            }
        }

        // ── Persist cart ID to session ───────────────────────────────────────
        $request->session()->put('lunar_cart', $cart->id);
        $request->session()->save();

        return response()->json([
            'success'    => true,
            'reference'  => $reference,
            'addedCount' => $addedCount,
        ]);
    }

    // ── Private helpers ──────────────────────────────────────────────────────

    /**
     * Derives the canonical DTF variant SKU from a human-readable type + size pair.
     * Used for Path A where the user selected a specific size from the pricing table.
     *
     *   'Neck Tags'          + '2″ × 2″'         → 'DTF-NECK-2X2'
     *   'Left / Right Chest' + '4″ × 3″'         → 'DTF-CHEST-4X3'
     *   'Image Sizes'        + '10″ × 10″ (lg)'  → 'DTF-IMG-10X10LG'
     */
    private function resolveDtfSku(string $type, string $size): string
    {
        $prefix = match (true) {
            str_contains($type, 'Neck')  => 'DTF-NECK',
            str_contains($type, 'Chest') => 'DTF-CHEST',
            default                      => 'DTF-IMG',
        };

        $isLarge = str_contains($size, 'lg') || str_contains($size, '(lg)');

        $normalized = preg_replace('/[″"\'"]/', '', $size) ?? $size;
        $normalized = preg_replace('/\s*[×xX]\s*/', 'X', $normalized) ?? $normalized;
        $normalized = preg_replace('/\([^)]*\)/', '', $normalized) ?? $normalized;
        $normalized = preg_replace('/[^a-zA-Z0-9X]/', '', $normalized) ?? $normalized;
        $normalized = strtoupper(trim($normalized));

        if ($isLarge) {
            $normalized .= 'LG';
        }

        return $prefix . '-' . $normalized;
    }

    /**
     * Returns the default (smallest/most common) variant SKU for a DTF type key.
     * Used for Path B where no specific size was chosen during the wizard.
     * The team confirms exact sizes when fulfilling the CustomOrderRequest record.
     */
    private function defaultSkuForType(string $key): string
    {
        return match ($key) {
            'neckTag'    => 'DTF-NECK-2X2',
            'chestImage' => 'DTF-CHEST-4X3',
            'imageSize'  => 'DTF-IMG-5X5',
            default      => '',
        };
    }

    /**
     * Returns the minimum quantity for a tier label string.
     * Used as cart quantity when no explicit per-item count is present.
     */
    private function tierMinQuantity(string $tier): int
    {
        return match (true) {
            str_starts_with($tier, '250') => 250,
            str_starts_with($tier, '100') => 100,
            str_starts_with($tier, '50')  => 50,
            str_starts_with($tier, '15')  => 15,
            default                       => 1,
        };
    }
}
