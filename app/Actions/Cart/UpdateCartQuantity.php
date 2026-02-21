<?php

declare(strict_types=1);

namespace App\Actions\Cart;

use Lunar\Facades\CartSession;
use Lunar\Models\Cart;

class UpdateCartQuantity
{
    public function execute(int $cartLineId, int $quantity): ?Cart
    {
        $cart = CartSession::current();

        if (! $cart) {
            return null;
        }

        $line = $cart->lines()->find($cartLineId);

        if (! $line) {
            return null;
        }

        if ($quantity <= 0) {
            $line->delete();
        } else {
            $cart->updateLine($cartLineId, $quantity);
        }

        return $cart->refresh()->calculate();
    }
}
