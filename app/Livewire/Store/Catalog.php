<?php

declare(strict_types=1);

namespace App\Livewire\Store;

use Livewire\Component;
use Livewire\WithPagination;
use Lunar\Models\Product;

class Catalog extends Component
{
    use WithPagination;

    public string $search = '';
    public string $sort   = 'name_asc';

    // Persisted across Livewire AJAX updates so product links stay correct
    // even when searching / paginating under the /storefront-preview/ route.
    public string $productUrlBase = '/product/';

    public function mount(): void
    {
        $this->productUrlBase = $this->resolveProductUrlBase();
    }

    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    public function updatingSort(): void
    {
        $this->resetPage();
    }

    public function render()
    {
        $store   = app('current_store');
        $channel = $store->channel;

        $query = Product::status('published')
            ->when($channel, function ($q) use ($channel) {
                $q->whereHas('channels', function ($q2) use ($channel) {
                    $q2->where('lunar_channels.id', $channel->id);
                });
            })
            ->when($this->search, function ($q) {
                $term = '%'.mb_strtolower($this->search).'%';
                $q->whereRaw(
                    "LOWER(attribute_data->'name'->'value'->>'en') LIKE ?",
                    [$term]
                );
            });

        match (true) {
            str_starts_with($this->sort, 'name') => $query->orderByRaw(
                "attribute_data->'name'->'value'->>'en' ".
                (str_ends_with($this->sort, 'desc') ? 'DESC' : 'ASC')
            ),
            default => $query->orderBy('id', 'asc'),
        };

        $products = $query->paginate(12);

        return view('livewire.store.catalog', [
            'products'       => $products,
            'productUrlBase' => $this->productUrlBase,
        ]);
    }

    private function resolveProductUrlBase(): string
    {
        if (! app()->isLocal()) {
            return '/product/';
        }

        // On initial page load: route param is available via the middleware
        if (request()->route('previewSubdomain')) {
            $subdomain = request()->route('previewSubdomain');
            return '/storefront-preview/' . $subdomain . '/product/';
        }

        // On Livewire AJAX re-renders: check the Referer header
        $referer = request()->header('Referer', '');
        if (preg_match('#/storefront-preview/([^/]+)#', $referer, $m)) {
            return '/storefront-preview/' . $m[1] . '/product/';
        }

        return '/product/';
    }
}
