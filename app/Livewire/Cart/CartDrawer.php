<?php

declare(strict_types=1);

namespace App\Livewire\Cart;

use App\Actions\Cart\RemoveFromCart;
use App\Actions\Cart\UpdateCartQuantity;
use Livewire\Attributes\On;
use Livewire\Component;
use Lunar\Facades\CartSession;
use Lunar\Models\Cart;

class CartDrawer extends Component
{
    public bool   $open        = false;
    public string $cartUrl     = '/cart';
    public string $checkoutUrl = '/checkout';
    public string $shopUrl     = '/top5pct-merchandise';

    public function mount(): void
    {
        $this->cartUrl     = view()->shared('storefrontCartUrl',     '/cart');
        $this->checkoutUrl = view()->shared('storefrontCheckoutUrl', '/checkout');
        $this->shopUrl     = view()->shared('storefrontHomeUrl',     '/top5pct-merchandise');
    }

    #[On('open-cart-drawer')]
    public function openDrawer(): void
    {
        $this->open = true;
    }

    public function closeDrawer(): void
    {
        $this->open = false;
    }

    public function updateQuantity(int $lineId, int $quantity): void
    {
        (new UpdateCartQuantity())->execute($lineId, $quantity);
        $this->dispatch('cart-updated');
    }

    public function removeLine(int $lineId): void
    {
        (new RemoveFromCart())->execute($lineId);
        $this->dispatch('cart-updated');
    }

    public function getCartProperty(): ?Cart
    {
        try {
            $cart = CartSession::current();

            if ($cart && $cart->lines->isNotEmpty()) {
                return $cart->calculate();
            }

            return $cart;
        } catch (\Lunar\Exceptions\MissingCurrencyPriceException $e) {
            return null;
        }
    }

    public function render()
    {
        return view('livewire.cart.cart-drawer', [
            'cart' => $this->cart,
        ]);
    }
}
