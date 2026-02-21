<?php

declare(strict_types=1);

namespace App\Livewire\Catalog;

use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\Component;
use Lunar\Models\Collection;
use Lunar\Models\Product;
use Meilisearch\Client;

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
        'max_price' => 100000,
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
            'max_price' => 100000,
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

        return Collection::whereHas('urls', function ($q) {
            $q->where('slug', $this->collectionSlug);
        })->with('children.urls')->first();
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

        $filterParts = [];
        $filterParts[] = 'status = "published"';

        if (! empty($collectionSlugs)) {
            $collFilters = collect($collectionSlugs)
                ->map(fn ($s) => "collections = \"{$s}\"")
                ->join(' OR ');
            $filterParts[] = "({$collFilters})";
        }

        if ($this->filters['in_stock']) {
            $filterParts[] = 'in_stock = true';
        }

        if ($this->filters['min_price'] > 0) {
            $minCents = (int) ($this->filters['min_price'] * 100);
            $filterParts[] = "min_price >= {$minCents}";
        }
        if ($this->filters['max_price'] > 0 && $this->filters['max_price'] < 100000) {
            $maxCents = (int) ($this->filters['max_price'] * 100);
            $filterParts[] = "max_price <= {$maxCents}";
        }

        $arrayFilters = ['garment_type', 'print_method', 'material_type', 'sign_type', 'placement', 'decal_type', 'vehicle_product'];
        foreach ($arrayFilters as $field) {
            if (! empty($this->filters[$field])) {
                $orParts = collect($this->filters[$field])
                    ->map(fn ($v) => "{$field} = \"{$v}\"")
                    ->join(' OR ');
                $filterParts[] = "({$orParts})";
            }
        }

        $facetFields = $this->getRelevantFacetFields();

        $sortAttr = match ($this->sortBy) {
            'price_asc' => ['min_price:asc'],
            'price_desc' => ['min_price:desc'],
            default => ['created_at:desc'],
        };

        $offset = ($this->page - 1) * $this->perPage;

        $client = new Client(config('scout.meilisearch.host'), config('scout.meilisearch.key'));
        $searchResult = $client->index('products')->search($this->searchQuery ?: '', [
            'filter' => implode(' AND ', $filterParts),
            'facets' => $facetFields,
            'sort' => $sortAttr,
            'limit' => $this->perPage,
            'offset' => $offset,
        ]);

        $rawResult = $searchResult->getRaw();
        $hits = $rawResult['hits'] ?? [];
        $totalHits = $rawResult['nbHits'] ?? $rawResult['estimatedTotalHits'] ?? count($hits);
        $facets = $rawResult['facetDistribution'] ?? [];

        $productIds = collect($hits)->pluck('id')->toArray();
        $productsQuery = Product::with(['thumbnail', 'variants.prices', 'urls'])
            ->whereIn('id', $productIds);

        $productsMap = $productsQuery->get()->keyBy('id');

        $orderedProducts = collect($productIds)->map(fn ($id) => $productsMap[$id] ?? null)->filter();

        $products = new LengthAwarePaginator(
            $orderedProducts,
            $totalHits,
            $this->perPage,
            $this->page,
            ['path' => request()->url()]
        );

        $childCollections = $collection?->children?->map(function ($child) {
            return [
                'name' => $child->translateAttribute('name'),
                'slug' => $child->urls->first()?->slug,
            ];
        })?->filter(fn ($c) => $c['slug']) ?? collect();

        $collectionName = $collection?->translateAttribute('name') ?? 'All Products';

        $parentCollection = null;
        if ($this->parentSlug) {
            $parentCollection = Collection::whereHas('urls', function ($q) {
                $q->where('slug', $this->parentSlug);
            })->first();
        }

        return view('livewire.catalog.collection-page', [
            'products' => $products,
            'facets' => $facets,
            'collectionName' => $collectionName,
            'childCollections' => $childCollections,
            'parentCollection' => $parentCollection,
            'totalProducts' => $totalHits,
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
