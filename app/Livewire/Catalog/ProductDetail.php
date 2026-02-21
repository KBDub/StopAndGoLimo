<?php

declare(strict_types=1);

namespace App\Livewire\Catalog;

use Livewire\Component;
use Lunar\Models\Product;

class ProductDetail extends Component
{
    public ?Product $product = null;
    public ?int $selectedVariantId = null;
    public int $quantity = 1;

    public function mount(string $slug): void
    {
        $this->product = Product::whereHas('urls', function ($q) use ($slug) {
            $q->where('slug', $slug);
        })->with([
            'variants.prices.currency',
            'images',
            'thumbnail',
            'collections.urls',
            'productType',
        ])->where('status', 'published')->firstOrFail();

        $this->selectedVariantId = $this->product->variants->first()?->id;
    }

    public function selectVariant(int $variantId): void
    {
        $this->selectedVariantId = $variantId;
    }

    public function incrementQuantity(): void
    {
        $this->quantity = min($this->quantity + 1, 99);
    }

    public function decrementQuantity(): void
    {
        $this->quantity = max($this->quantity - 1, 1);
    }

    public function getSelectedVariantProperty()
    {
        if (! $this->selectedVariantId || ! $this->product) {
            return null;
        }

        return $this->product->variants->firstWhere('id', $this->selectedVariantId);
    }

    public function getFormattedPriceProperty(): string
    {
        $variant = $this->selectedVariant;
        if (! $variant) {
            return '';
        }

        $price = $variant->prices->first();
        if (! $price) {
            return '';
        }

        return $price->price->formatted();
    }

    public function getRelatedProductsProperty()
    {
        if (! $this->product) {
            return collect();
        }

        $collectionIds = $this->product->collections->pluck('id');

        if ($collectionIds->isEmpty()) {
            return collect();
        }

        return Product::whereHas('collections', function ($q) use ($collectionIds) {
            $q->whereIn('lunar_collections.id', $collectionIds);
        })
            ->where('id', '!=', $this->product->id)
            ->where('status', 'published')
            ->with(['thumbnail', 'variants.prices', 'urls'])
            ->limit(4)
            ->get();
    }

    public function render()
    {
        $breadcrumbs = $this->buildBreadcrumbs();

        return view('livewire.catalog.product-detail', [
            'selectedVariant' => $this->selectedVariant,
            'formattedPrice' => $this->formattedPrice,
            'relatedProducts' => $this->relatedProducts,
            'breadcrumbs' => $breadcrumbs,
        ]);
    }

    private function buildBreadcrumbs(): array
    {
        $crumbs = [['label' => 'Home', 'url' => '/']];

        $collection = $this->product->collections->first();
        if ($collection) {
            $parentSlug = null;
            if ($collection->parent) {
                $parentUrl = $collection->parent->urls->first();
                if ($parentUrl) {
                    $crumbs[] = [
                        'label' => $collection->parent->translateAttribute('name'),
                        'url' => '/collections/' . $parentUrl->slug,
                    ];
                    $parentSlug = $parentUrl->slug;
                }
            }

            $collUrl = $collection->urls->first();
            if ($collUrl) {
                $prefix = $parentSlug ? "/collections/{$parentSlug}/" : '/collections/';
                $crumbs[] = [
                    'label' => $collection->translateAttribute('name'),
                    'url' => $prefix . $collUrl->slug,
                ];
            }
        }

        $crumbs[] = [
            'label' => $this->product->translateAttribute('name'),
            'url' => null,
        ];

        return $crumbs;
    }
}
