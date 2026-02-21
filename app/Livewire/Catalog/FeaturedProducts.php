<?php

declare(strict_types=1);

namespace App\Livewire\Catalog;

use Livewire\Component;
use Lunar\Models\Product;

class FeaturedProducts extends Component
{
    public int $limit = 6;

    public function render()
    {
        $products = Product::where('status', 'published')
            ->with(['thumbnail', 'variants.prices', 'urls'])
            ->whereHas('variants', function ($q) {
                $q->where('stock', '>', 0);
            })
            ->latest()
            ->limit($this->limit)
            ->get();

        return view('livewire.catalog.featured-products', [
            'products' => $products,
        ]);
    }
}
