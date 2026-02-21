<?php

declare(strict_types=1);

namespace App\Actions\Cart;

use Lunar\Facades\CartSession;
use Lunar\Models\Cart;
use Lunar\Models\Currency;
use Lunar\Models\ProductVariant;

class AddToCart
{
    public function execute(int $variantId, int $quantity = 1): Cart
    {
        $quantity = max(1, min($quantity, 99));

        $variant = ProductVariant::findOrFail($variantId);

        if ($variant->stock !== null && $variant->stock < $quantity) {
            throw new \RuntimeException('Insufficient stock for this item.');
        }

        $cart = CartSession::current();

        if (! $cart) {
            $currency = Currency::getDefault();
            $cart = Cart::create([
                'currency_id' => $currency->id,
                'channel_id' => \Lunar\Models\Channel::getDefault()->id,
            ]);
            CartSession::use($cart);
        }

        $cart->add($variant, $quantity);

        return $cart->calculate();
    }
}
