<?php

declare(strict_types=1);

namespace App\Livewire\Cart;

use Livewire\Component;
use Lunar\Models\Order;

class OrderConfirmation extends Component
{
    public int $orderId;

    public function mount(int $orderId): void
    {
        $this->orderId = $orderId;
    }

    public function getOrderProperty(): Order
    {
        return Order::with([
            'lines',
            'shippingAddress',
            'billingAddress',
        ])->findOrFail($this->orderId);
    }

    public function render()
    {
        return view('livewire.cart.order-confirmation', [
            'order' => $this->order,
        ]);
    }
}
