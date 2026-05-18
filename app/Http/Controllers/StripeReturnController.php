<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Lunar\Facades\CartSession;
use Lunar\Facades\Payments;
use Lunar\Stripe\Models\StripePaymentIntent;

class StripeReturnController extends Controller
{
    public function __invoke(Request $request): RedirectResponse
    {
        $paymentIntentId = (string) $request->query('payment_intent', '');
        $redirectStatus  = (string) $request->query('redirect_status', '');

        if ($redirectStatus !== 'succeeded' || $paymentIntentId === '') {
            return redirect()->route('checkout')
                ->with('stripe_error', 'Payment was not completed. Please try again.');
        }

        $intentModel = StripePaymentIntent::where('intent_id', $paymentIntentId)->first();

        if (! $intentModel) {
            return redirect()->route('checkout')
                ->with('stripe_error', 'Payment session not found. Please contact us if you were charged.');
        }

        $cart = $intentModel->cart->calculate();

        $payment = Payments::driver('stripe')
            ->cart($cart)
            ->withData(['payment_intent' => $paymentIntentId])
            ->authorize();

        if (! $payment->success) {
            return redirect()->route('checkout')
                ->with('stripe_error', $payment->message ?? 'Payment authorization failed. Please try again.');
        }

        $order = $payment->order ?? $cart->orders()->latest()->first();

        if (! $order) {
            $order = $cart->createOrder();
        }

        CartSession::forget();

        return redirect()->route('order-confirmation', ['orderId' => $order->id]);
    }
}
