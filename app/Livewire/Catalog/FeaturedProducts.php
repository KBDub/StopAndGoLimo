<?php

declare(strict_types=1);

namespace App\Livewire\Catalog;

use Illuminate\Support\Facades\Cache;
use Livewire\Component;
use Lunar\Models\Product;

class FeaturedProducts extends Component
{
    public int $limit = 6;

    public function render()
    {
        $cacheKey = 'featured-products-' . $this->limit;

        $products = Cache::store('file')->remember($cacheKey, 60 * 60 * 8, function () {
            return Product::where('status', 'published')
                ->with(['thumbnail', 'variants.prices', 'urls'])
                ->whereHas('variants', function ($q) {
                    $q->where('stock', '>', 0);
                })
                ->latest()
                ->limit($this->limit)
                ->get();
        });

        return view('livewire.catalog.featured-products', [
            'products' => $products,
        ]);
    }
}
