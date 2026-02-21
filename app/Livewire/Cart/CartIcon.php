<?php

declare(strict_types=1);

namespace App\Livewire\Cart;

use Livewire\Attributes\On;
use Livewire\Component;
use Lunar\Facades\CartSession;

class CartIcon extends Component
{
    public int $cartCount = 0;

    public function mount(): void
    {
        $this->updateCount();
    }

    #[On('cart-updated')]
    public function updateCount(): void
    {
        $cart = CartSession::current();
        $this->cartCount = $cart ? $cart->lines->sum('quantity') : 0;
    }

    public function render()
    {
        return view('livewire.cart.cart-icon');
    }
}
