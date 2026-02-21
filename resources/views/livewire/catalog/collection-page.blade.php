<div>
    <section class="py-10 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">

            <div class="mb-6">
                <nav class="text-sm text-charcoal-light" aria-label="Breadcrumb">
                    <ol class="flex items-center gap-1">
                        <li><a href="/" class="hover:text-azure">Home</a></li>
                        @if($parentCollection)
                            <li class="flex items-center gap-1">
                                <span>/</span>
                                <a href="/collections/{{ $parentCollection->urls->first()?->slug }}" class="hover:text-azure">
                                    {{ $parentCollection->translateAttribute('name') }}
                                </a>
                            </li>
                        @endif
                        <li class="flex items-center gap-1">
                            <span>/</span>
                            <span class="text-charcoal font-medium">{{ $collectionName }}</span>
                        </li>
                    </ol>
                </nav>
            </div>

            <div class="mb-8">
                <h1 class="font-heading text-3xl md:text-4xl font-bold text-charcoal">{{ $collectionName }}</h1>
            </div>

            @if($childCollections->isNotEmpty())
                <div class="flex flex-wrap gap-3 mb-8">
                    @foreach($childCollections as $child)
                        <a href="/collections/{{ $collectionSlug }}/{{ $child['slug'] }}"
                           class="px-4 py-2 rounded-full border border-charcoal-light text-sm hover:bg-sunburst hover:border-sunburst hover:text-charcoal transition-colors">
                            {{ $child['name'] }}
                        </a>
                    @endforeach
                </div>
            @endif

            <div class="flex flex-col lg:flex-row gap-8">

                <aside class="w-full lg:w-64 lg:min-w-[16rem] flex-shrink-0" x-data="{ open: false }">
                    <button @click="open = !open" class="lg:hidden w-full flex items-center justify-between py-3 px-4 bg-linen rounded-lg mb-4">
                        <span class="font-semibold text-charcoal">Filters</span>
                        <svg class="w-5 h-5 transform transition-transform" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>

                    <div class="hidden lg:block space-y-6" :class="{ '!block': open }">

                        <div>
                            <h3 class="font-heading font-bold text-sm uppercase tracking-wider mb-3 text-charcoal">Price Range</h3>
                            <div class="flex items-center gap-2">
                                <span class="text-sm">$</span>
                                <input type="number" wire:model.live.debounce.500ms="filters.min_price" min="0"
                                       class="w-20 border border-charcoal-lighter rounded px-2 py-1 text-sm focus:ring-sunburst focus:border-sunburst"
                                       placeholder="Min">
                                <span class="text-sm text-charcoal-light">to</span>
                                <span class="text-sm">$</span>
                                <input type="number" wire:model.live.debounce.500ms="filters.max_price" min="0"
                                       class="w-20 border border-charcoal-lighter rounded px-2 py-1 text-sm focus:ring-sunburst focus:border-sunburst"
                                       placeholder="Max">
                            </div>
                        </div>

                        <div>
                            <h3 class="font-heading font-bold text-sm uppercase tracking-wider mb-3 text-charcoal">Availability</h3>
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="checkbox" wire:model.live="filters.in_stock"
                                       class="rounded border-charcoal-lighter text-sunburst focus:ring-sunburst">
                                <span class="text-sm">In Stock Only</span>
                            </label>
                        </div>

                        @foreach($this->getFacetSections($facets) as $section)
                            @if(!empty($section['values']))
                                <div>
                                    <h3 class="font-heading font-bold text-sm uppercase tracking-wider mb-3 text-charcoal">{{ $section['label'] }}</h3>
                                    <div class="space-y-2 max-h-48 overflow-y-auto">
                                        @foreach($section['values'] as $value => $count)
                                            <label class="flex items-center justify-between cursor-pointer group">
                                                <div class="flex items-center gap-2">
                                                    <input type="checkbox"
                                                           value="{{ $value }}"
                                                           wire:model.live="filters.{{ $section['field'] }}"
                                                           class="rounded border-charcoal-lighter text-sunburst focus:ring-sunburst">
                                                    <span class="text-sm group-hover:text-azure">{{ $value }}</span>
                                                </div>
                                                <span class="bg-sunburst text-charcoal text-xs font-bold px-2 py-0.5 rounded-full">
                                                    {{ $count }}
                                                </span>
                                            </label>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        @endforeach

                        <button wire:click="clearFilters" class="text-sm text-azure hover:underline">
                            Clear All Filters
                        </button>
                    </div>
                </aside>

                <div class="flex-1 min-w-0">

                    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-6">
                        <div class="relative flex-1 max-w-md">
                            <input type="text" wire:model.live.debounce.300ms="searchQuery"
                                   placeholder="Search products..."
                                   class="w-full border border-charcoal-lighter rounded-lg pl-10 pr-4 py-2 text-sm focus:ring-sunburst focus:border-sunburst">
                            <svg class="absolute left-3 top-2.5 w-4 h-4 text-charcoal-light" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </div>

                        <div class="flex items-center gap-2">
                            <span class="text-sm text-charcoal-light">Sort:</span>
                            <select wire:model.live="sortBy"
                                    class="border border-charcoal-lighter rounded-lg px-3 py-2 text-sm focus:ring-sunburst focus:border-sunburst">
                                <option value="newest">Newest</option>
                                <option value="price_asc">Price: Low to High</option>
                                <option value="price_desc">Price: High to Low</option>
                            </select>
                        </div>
                    </div>

                    <div class="text-sm text-charcoal-light mb-4">
                        {{ $products->total() }} {{ $products->total() === 1 ? 'product' : 'products' }} found
                    </div>

                    @if($products->isEmpty())
                        <div class="text-center py-16 bg-linen rounded-xl">
                            <svg class="mx-auto w-12 h-12 text-charcoal-light mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                            </svg>
                            <p class="text-charcoal-light font-medium">No products found matching your criteria.</p>
                            <button wire:click="clearFilters" class="mt-4 text-azure hover:underline text-sm">Clear filters</button>
                        </div>
                    @else
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach($products as $product)
                                @php
                                    $productUrl = $product->urls->first()?->slug ?? '';
                                    $thumbnail = $product->thumbnail?->getUrl('small') ?? null;
                                    $prices = $product->variants->flatMap(fn($v) => $v->prices->map(fn($p) => $p->price->value));
                                    $minPrice = $prices->min();
                                    $maxPrice = $prices->max();
                                    $priceDisplay = $minPrice ? '$' . number_format($minPrice / 100, 2) : '';
                                    if ($minPrice && $maxPrice && $minPrice !== $maxPrice) {
                                        $priceDisplay = 'From ' . $priceDisplay;
                                    }
                                    $tags = $product->attr('tags') ?? '';
                                @endphp
                                <a href="/products/{{ $productUrl }}" class="block group">
                                    <div class="relative rounded-xl shadow-lg hover:shadow-gold-lg transition-all hover:-translate-y-1 overflow-hidden">
                                        <div class="absolute inset-0 rounded-xl bg-gold-gradient-dark opacity-0 group-hover:opacity-100 transition-opacity"
                                             style="-webkit-mask: radial-gradient(circle at 100% 0%, black 0%, transparent 70%) top right / 50% 50% no-repeat, radial-gradient(circle at 0% 100%, black 0%, transparent 70%) bottom left / 50% 50% no-repeat;
                                                    mask: radial-gradient(circle at 100% 0%, black 0%, transparent 70%) top right / 50% 50% no-repeat, radial-gradient(circle at 0% 100%, black 0%, transparent 70%) bottom left / 50% 50% no-repeat;">
                                        </div>
                                        <div class="relative bg-white rounded-xl m-[2px]">
                                            @if($thumbnail)
                                                <img src="{{ $thumbnail }}" alt="{{ $product->translateAttribute('name') }}"
                                                     class="w-full h-48 object-cover rounded-t-xl" loading="lazy">
                                            @else
                                                <div class="w-full h-48 bg-linen rounded-t-xl flex items-center justify-center">
                                                    <svg class="w-12 h-12 text-charcoal-lighter" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                                    </svg>
                                                </div>
                                            @endif

                                            @if(str_contains($tags, 'Best Seller'))
                                                <span class="absolute top-3 left-3 bg-sunburst text-charcoal text-xs font-bold px-2 py-1 rounded-full">Best Seller</span>
                                            @elseif(str_contains($tags, 'New'))
                                                <span class="absolute top-3 left-3 bg-azure text-white text-xs font-bold px-2 py-1 rounded-full">New</span>
                                            @endif

                                            <div class="p-4">
                                                <h3 class="font-semibold text-olive group-hover:text-azure transition-colors mb-1">
                                                    {{ $product->translateAttribute('name') }}
                                                </h3>
                                                <p class="text-sm text-charcoal-light mb-2 line-clamp-2">
                                                    {{ \Illuminate\Support\Str::limit(strip_tags($product->translateAttribute('description') ?? ''), 80) }}
                                                </p>
                                                <div class="flex items-center justify-between">
                                                    <span class="font-bold text-charcoal">{{ $priceDisplay }}</span>
                                                    <span class="text-xs text-azure group-hover:underline">View Details &rarr;</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>

                        @if($products->lastPage() > 1)
                            <div class="mt-8 flex justify-center items-center gap-2">
                                @if($page > 1)
                                    <button wire:click="goToPage({{ $page - 1 }})" class="px-3 py-2 bg-white border border-charcoal-lighter rounded-lg text-sm hover:bg-linen transition-colors">&laquo; Prev</button>
                                @endif

                                @for($p = max(1, $page - 2); $p <= min($products->lastPage(), $page + 2); $p++)
                                    <button wire:click="goToPage({{ $p }})" class="px-3 py-2 border rounded-lg text-sm transition-colors {{ $p === $page ? 'bg-charcoal text-white border-charcoal' : 'bg-white border-charcoal-lighter hover:bg-linen' }}">{{ $p }}</button>
                                @endfor

                                @if($page < $products->lastPage())
                                    <button wire:click="goToPage({{ $page + 1 }})" class="px-3 py-2 bg-white border border-charcoal-lighter rounded-lg text-sm hover:bg-linen transition-colors">Next &raquo;</button>
                                @endif
                            </div>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </section>
</div>
