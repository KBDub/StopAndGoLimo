<?php

declare(strict_types=1);

namespace App\Livewire\Cart;

use Livewire\Component;
use Lunar\Models\Order;

class OrderConfirmation extends Component
{
    public ?Order $order = null;

    public function mount(int $orderId): void
    {
        $this->order = Order::with([
            'lines.purchasable.product',
            'shippingAddress',
            'billingAddress',
        ])->findOrFail($orderId);
    }

    public function render()
    {
        return view('livewire.cart.order-confirmation');
    }
}
