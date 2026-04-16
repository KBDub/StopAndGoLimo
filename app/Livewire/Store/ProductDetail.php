<?php

declare(strict_types=1);

namespace App\Livewire\Store;

use Livewire\Component;
use Lunar\Models\Product;

class ProductDetail extends Component
{
    public string $slug;
    public int $quantity = 1;
    public ?int $selectedVariantId = null;

    public function mount(string $slug): void
    {
        $this->slug = $slug;
    }

    public function addToCart(): void
    {
        if (! $this->selectedVariantId) {
            return;
        }

        $variant = \Lunar\Models\ProductVariant::findOrFail($this->selectedVariantId);

        app(\App\Actions\Cart\AddToCart::class)->execute(
            $variant->id,
            $this->quantity
        );

        $this->dispatch('cart-updated');
        session()->flash('cart_message', 'Item added to cart.');
    }

    public function render()
    {
        $product = Product::whereHas('urls', function ($q) {
            $q->where('slug', $this->slug);
        })->where('status', 'published')->firstOrFail();

        return view('livewire.store.product-detail', ['product' => $product]);
    }
}
