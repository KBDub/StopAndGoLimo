<?php

declare(strict_types=1);

namespace App\Actions\Cart;

use Lunar\Facades\CartSession;
use Lunar\Models\Cart;

class RemoveFromCart
{
    public function execute(int $cartLineId): ?Cart
    {
        $cart = CartSession::current();

        if (! $cart) {
            return null;
        }

        $cart->remove($cartLineId);

        return $cart->refresh()->calculate();
    }
}
