Creating and managing "Facets" (filters like Price, Size, Availability) in Lunar is a two-step process: Data Modeling (creating the attributes) and Search Indexing (making them filterable).

To achieve the specific sidebar in your image (especially the yellow "counts" next to sizes like XL 8), you cannot just use standard Database queries. You must use a Search Engine driver (like Meilisearch or Algolia) integrated with Lunar.

Here is the step-by-step guide to rebuilding that sidebar.

1. The Concept: Attributes vs. Facets
Attribute: A piece of data attached to a product (e.g., "Size: XL"). You create these in the Lunar Admin.

Facet: An attribute that has been indexed so the search engine can count how many products have that value (e.g., "XL (8)").

2. Step 1: Create the Attributes (Admin Panel)
Go to your Lunar Admin Panel (/hub) -> Catalog -> Attributes.

Create "Size" Attribute:

Type: Select/Dropdown.

Handle: size (Important: remember this handle).

Filterable: Check "Yes" (This tells Lunar it's important).

Searchable: Check "Yes".

Create "Tags" Attribute:

Type: Text/Select (Multi-value).

Handle: tags.

Note on Price/Availability: These are "System Attributes" in Lunar. You don't need to create them; they exist on every ProductVariant.

3. Step 2: Configure Indexing (The "Hard" Part)
Lunar uses Laravel Scout. To get the "counts" (e.g., 2XL (8)), you need to tell the search engine to calculate them.

In your config/lunar/search.php (or scout.php depending on version): You must add your attribute handles to the filterable_attributes list.

PHP

// config/lunar/search.php

return [
    'models' => [
        // ...
        \Lunar\Models\Product::class => [
            'engine' => 'meilisearch', // Recommended for facets
            'filterable_attributes' => [
                'price',          // System attribute
                'stock',          // System attribute (for Availability)
                'size',           // Your custom attribute
                'tags',           // Your custom attribute
            ],
            'sortable_attributes' => ['price', 'created_at'],
        ],
    ],
];
After changing this, run php artisan lunar:search:index to rebuild your index.

4. Step 3: The Code (Livewire Component)
To replicate the image, we need a Livewire component that:

Takes the user's input (Price range 25-26).

Queries the Search Engine.

Returns the Products AND the Facet Distribution (the counts).

File: app/Livewire/CollectionPage.php

PHP

<?php

namespace App\Livewire;

use Livewire\Component;
use Lunar\Models\Product;

class CollectionPage extends Component
{
    // 1. The Filters (Bound to the UI)
    public array $filters = [
        'size' => [],   // ['XL', '2XL']
        'tags' => [],
        'min_price' => 0,
        'max_price' => 1000,
        'in_stock' => false,
    ];

    public function render()
    {
        // 2. The Search Query
        // We use Scout to search, adding filters based on our array
        $search = Product::search('*', function ($meilisearch, $query, $options) {

            // A. Construct the Filter String for Meilisearch
            $filterString = [];

            // Size Filter
            if (!empty($this->filters['size'])) {
                // Creates string like: size = "XL" OR size = "2XL"
                $filterString[] = '('.collect($this->filters['size'])
                    ->map(fn($val) => "size = \"$val\"")->join(' OR ').')';
            }

            // Price Filter (Range)
            $filterString[] = "prices.USD.price >= {$this->filters['min_price']}";
            $filterString[] = "prices.USD.price <= {$this->filters['max_price']}";

            // Availability
            if ($this->filters['in_stock']) {
                $filterString[] = 'stock > 0';
            }

            $options['filter'] = implode(' AND ', $filterString);

            // B. Ask for Facets (This gets the counts!)
            $options['facets'] = ['size', 'tags'];

            return $meilisearch->search($query, $options);
        });

        $products = $search->paginate(20);

        // 3. Extract Facets for the Sidebar
        // This array looks like: ['size' => ['XL' => 8, '2XL' => 8]]
        $facets = $search->raw()['facetDistribution'] ?? [];

        return view('livewire.collection-page', [
            'products' => $products,
            'facets' => $facets, // Pass counts to view
        ]);
    }
}
5. Step 4: The Frontend (Replicating the Image)
Here is how you render that specific sidebar using the $facets data we just passed.

File: resources/views/livewire/collection-page.blade.php

HTML

<div class="flex gap-8">

    <div class="w-64 space-y-8">

        <div>
            <h3 class="font-bold mb-4">PRICE</h3>
            <div class="flex items-center gap-2">
                $<input type="number" wire:model.live.debounce.500ms="filters.min_price" class="w-20 border p-1 rounded">
                <span>to</span>
                $<input type="number" wire:model.live.debounce.500ms="filters.max_price" class="w-20 border p-1 rounded">
            </div>
            </div>

        <div>
            <h3 class="font-bold mb-2">AVAILABILITY</h3>
            <label class="flex items-center gap-2 cursor-pointer">
                <input type="checkbox" wire:model.live="filters.in_stock" class="rounded border-gray-300">
                <span>In Stock</span>
            </label>
        </div>

        <div>
            <h3 class="font-bold mb-2">SIZE</h3>
            <div class="space-y-2">
                @foreach($facets['size'] ?? [] as $sizeName => $count)
                    <label class="flex items-center justify-between cursor-pointer">
                        <div class="flex items-center gap-2">
                            <input 
                                type="checkbox" 
                                value="{{ $sizeName }}" 
                                wire:model.live="filters.size"
                                class="rounded border-gray-300"
                            >
                            <span>{{ $sizeName }}</span>
                        </div>

                        <span class="bg-yellow-400 text-xs font-bold px-2 py-0.5 rounded-full">
                            {{ $count }}
                        </span>
                    </label>
                @endforeach
            </div>
        </div>

    </div>

    <div class="flex-1 grid grid-cols-3 gap-6">
        @foreach($products as $product)
            @endforeach
    </div>
</div>
Summary of "Gotchas"
Variants vs Products: The "Size" is usually on the Variant, not the main Product. In Lunar, you usually index the Product, but you "flatten" the variant options into the product index so searching "XL" finds the Parent Product.

Price Indexing: Lunar stores prices as integers (cents). Your filter logic needs to handle that (e.g., input 25 -> search 2500).

Livewire Debounce: Always use .debounce.500ms on price sliders, otherwise you will spam your search engine API with 50 requests while the user slides the bar.