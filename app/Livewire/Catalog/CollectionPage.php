<?php

declare(strict_types=1);

namespace App\Livewire\Catalog;

use Illuminate\Support\Facades\Cache;
use Livewire\Component;
use Lunar\Models\Collection;
use Lunar\Models\Product;

class CollectionPage extends Component
{
    public ?string $collectionSlug = null;
    public ?string $parentSlug = null;
    public string $searchQuery = '';
    public string $sortBy = 'newest';
    public int $page = 1;
    public int $perPage = 12;

    public array $filters = [
        'min_price' => 0,
        'max_price' => 3000,
        'in_stock' => false,
        'garment_type' => [],
        'print_method' => [],
        'material_type' => [],
        'sign_type' => [],
        'placement' => [],
        'decal_type' => [],
        'vehicle_product' => [],
        'tags' => [],
    ];

    protected $queryString = [
        'searchQuery' => ['as' => 'q', 'except' => ''],
        'sortBy' => ['as' => 'sort', 'except' => 'newest'],
        'page' => ['except' => 1],
    ];

    public function updatedFilters(): void
    {
        $this->page = 1;
    }

    public function updatedSearchQuery(): void
    {
        $this->page = 1;
    }

    public function updatedSortBy(): void
    {
        $this->page = 1;
    }

    public function goToPage(int $p): void
    {
        $this->page = $p;
    }

    public function clearFilters(): void
    {
        $this->filters = [
            'min_price' => 0,
            'max_price' => 3000,
            'in_stock' => false,
            'garment_type' => [],
            'print_method' => [],
            'material_type' => [],
            'sign_type' => [],
            'placement' => [],
            'decal_type' => [],
            'vehicle_product' => [],
            'tags' => [],
        ];
        $this->page = 1;
    }

    public function getCollectionProperty(): ?Collection
    {
        if (! $this->collectionSlug) {
            return null;
        }

        $cacheKey = 'collection-model-' . $this->collectionSlug;

        return Cache::store('file')->remember($cacheKey, 60 * 60 * 8, function () {
            return Collection::whereHas('urls', function ($q) {
                $q->where('slug', $this->collectionSlug);
            })->with('children.urls')->first();
        });
    }

    public function render()
    {
        $collection = $this->collection;

        $collectionSlugs = [];
        if ($collection) {
            $collectionSlugs[] = $this->collectionSlug;
            foreach ($collection->children as $child) {
                $slug = $child->urls->first()?->slug;
                if ($slug) {
                    $collectionSlugs[] = $slug;
                }
            }
        }

        $query = Product::query()
            ->with(['thumbnail', 'variants.prices', 'urls'])
            ->where('status', 'published');

        if (! empty($collectionSlugs)) {
            $query->whereHas('collections', function ($q) use ($collectionSlugs) {
                $q->whereHas('urls', fn ($u) => $u->whereIn('slug', $collectionSlugs));
            });
        }

        if ($this->filters['in_stock']) {
            $query->whereHas('variants', fn ($q) => $q->where('stock', '>', 0));
        }

        if ($this->filters['min_price'] > 0) {
            $minCents = (int) ($this->filters['min_price'] * 100);
            $query->whereHas('variants.prices', fn ($q) => $q->where('price', '>=', $minCents));
        }

        if ($this->filters['max_price'] > 0 && $this->filters['max_price'] < 3000) {
            $maxCents = (int) ($this->filters['max_price'] * 100);
            $query->whereHas('variants.prices', fn ($q) => $q->where('price', '<=', $maxCents));
        }

        if ($this->searchQuery !== '') {
            $term = $this->searchQuery;
            $query->whereHas('translations', fn ($q) => $q->where('name', 'LIKE', "%{$term}%"));
        }

        match ($this->sortBy) {
            'price_asc', 'price_desc' => $query->orderBy('id', $this->sortBy === 'price_asc' ? 'asc' : 'desc'),
            default => $query->latest(),
        };

        $products = $query->paginate($this->perPage, ['*'], 'page', $this->page);

        $childCollections = $collection?->children?->map(function ($child) {
            return [
                'name' => $child->translateAttribute('name'),
                'slug' => $child->urls->first()?->slug,
            ];
        })?->filter(fn ($c) => $c['slug']) ?? collect();

        $collectionName = $collection?->translateAttribute('name') ?? 'All Products';

        $parentCollectionCacheKey = 'parent-collection-' . ($this->parentSlug ?? 'none');
        $parentCollection = Cache::store('file')->remember($parentCollectionCacheKey, 60 * 60 * 8, function () {
            if (! $this->parentSlug) {
                return null;
            }

            return Collection::whereHas('urls', function ($q) {
                $q->where('slug', $this->parentSlug);
            })->first();
        });

        return view('livewire.catalog.collection-page', [
            'products'         => $products,
            'facets'           => [],
            'collectionName'   => $collectionName,
            'childCollections' => $childCollections,
            'parentCollection' => $parentCollection,
            'totalProducts'    => $products->total(),
        ]);
    }

    public function getFacetSections(array $facets): array
    {
        $sections = [
            ['label' => 'Product Type', 'field' => 'product_type', 'values' => $facets['product_type'] ?? []],
            ['label' => 'Garment Type', 'field' => 'garment_type', 'values' => $facets['garment_type'] ?? []],
            ['label' => 'Print Method', 'field' => 'print_method', 'values' => $facets['print_method'] ?? []],
            ['label' => 'Material', 'field' => 'material_type', 'values' => $facets['material_type'] ?? []],
            ['label' => 'Sign Type', 'field' => 'sign_type', 'values' => $facets['sign_type'] ?? []],
            ['label' => 'Placement', 'field' => 'placement', 'values' => $facets['placement'] ?? []],
            ['label' => 'Decal Type', 'field' => 'decal_type', 'values' => $facets['decal_type'] ?? []],
            ['label' => 'Vehicle Products', 'field' => 'vehicle_product', 'values' => $facets['vehicle_product'] ?? []],
        ];

        return array_filter($sections, fn ($s) => ! empty($s['values']));
    }

    private function getRelevantFacetFields(): array
    {
        $base = ['product_type', 'in_stock', 'tags'];

        return array_merge($base, [
            'garment_type', 'print_method', 'material_type',
            'sign_type', 'placement',
            'decal_type',
            'vehicle_product',
        ]);
    }
}
