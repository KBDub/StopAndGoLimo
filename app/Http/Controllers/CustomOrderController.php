<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Actions\Cart\AddToCart;
use App\Models\CustomOrderRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
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
     * Resolves DTF transfer variants from the wizard payload, adds them to the
     * Lunar cart via the existing AddToCart action, and records the submission.
     *
     * Accepts action = 'cart' | 'checkout'.
     * Redirect to /checkout is handled client-side after this endpoint confirms success.
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

        $addToCart  = app(AddToCart::class);
        $addedCount = 0;

        foreach ($request->input('dtfItems', []) as $item) {
            $sku = $this->resolveDtfSku(
                (string) ($item['type'] ?? ''),
                (string) ($item['size'] ?? '')
            );

            if (! $sku) {
                continue;
            }

            $variant = ProductVariant::where('sku', $sku)->first();

            if (! $variant) {
                logger()->warning("DTF cart: variant SKU not found — {$sku}");
                continue;
            }

            $qty = max(1, (int) ($item['quantity'] ?? $this->tierMinQuantity((string) ($item['tier'] ?? ''))));

            $addToCart->execute($variant->id, $qty);
            $addedCount++;
        }

        return response()->json([
            'success'    => true,
            'reference'  => $reference,
            'addedCount' => $addedCount,
        ]);
    }

    // ── Private helpers ──────────────────────────────────────────────────────

    /**
     * Derives the canonical DTF variant SKU from a human-readable type + size pair.
     *
     * Mapping matches the SKUs written by DtfProductSeeder:
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
     * Returns the minimum quantity for a given tier label string.
     * Used as a sensible fallback when no explicit quantity is passed.
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
