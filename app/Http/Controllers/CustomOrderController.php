<?php

namespace App\Http\Controllers;

use App\Models\CustomOrderRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Stripe\Checkout\Session as StripeSession;
use Stripe\Stripe;

class CustomOrderController extends Controller
{
    public function submit(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'orderType'    => 'required|in:dtf,apparel',
            'contactName'  => 'required|string|max:255',
            'contactEmail' => 'required|email|max:255',
            'contactPhone' => 'required|string|max:50',
        ]);

        $reference = 'T5P-' . strtoupper(Str::random(8));

        $order = CustomOrderRequest::create([
            'reference'    => $reference,
            'order_type'   => $validated['orderType'],
            'contact_name' => $validated['contactName'],
            'contact_email'=> $validated['contactEmail'],
            'contact_phone'=> $validated['contactPhone'],
            'payload'      => $request->all(),
            'status'       => 'pending',
            'submitted_at' => now(),
        ]);

        $checkoutUrl = null;

        $stripeKey = config('services.stripe.secret');

        if ($stripeKey) {
            try {
                Stripe::setApiKey($stripeKey);

                $orderLabel = $validated['orderType'] === 'dtf'
                    ? 'DTF Transfer Order — ' . $reference
                    : 'Custom Apparel Order — ' . $reference;

                $session = StripeSession::create([
                    'payment_method_types' => ['card'],
                    'line_items'           => [[
                        'price_data' => [
                            'currency'     => 'usd',
                            'unit_amount'  => 100,
                            'product_data' => [
                                'name'        => $orderLabel,
                                'description' => 'Custom order deposit — ref: ' . $reference,
                            ],
                        ],
                        'quantity' => 1,
                    ]],
                    'mode'           => 'payment',
                    'success_url'    => url('/order-confirmation?ref=' . $reference . '&session_id={CHECKOUT_SESSION_ID}'),
                    'cancel_url'     => url('/'),
                    'customer_email' => $validated['contactEmail'],
                    'metadata'       => [
                        'reference'  => $reference,
                        'order_type' => $validated['orderType'],
                    ],
                ]);

                $checkoutUrl = $session->url;

                $order->update([
                    'stripe_session_id'   => $session->id,
                    'stripe_checkout_url' => $checkoutUrl,
                ]);
            } catch (\Throwable $e) {
                logger()->error('Stripe session creation failed: ' . $e->getMessage());
            }
        }

        return response()->json([
            'success'     => true,
            'reference'   => $reference,
            'checkoutUrl' => $checkoutUrl,
        ]);
    }
}
