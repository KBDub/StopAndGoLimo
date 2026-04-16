<div>
    {{-- Search & Sort controls --}}
    <div class="flex flex-col sm:flex-row gap-4 mb-8">
        <div class="flex-1">
            <input
                type="search"
                wire:model.live.debounce.300ms="search"
                placeholder="Search products..."
                class="w-full border border-gray-300 px-4 py-2 text-sm focus:outline-none focus:border-brand-secondary"
            >
        </div>
        <div>
            <select
                wire:model.live="sort"
                class="border border-gray-300 px-4 py-2 text-sm focus:outline-none focus:border-brand-secondary"
            >
                <option value="name_asc">Name: A to Z</option>
                <option value="name_desc">Name: Z to A</option>
                <option value="price_asc">Price: Low to High</option>
                <option value="price_desc">Price: High to Low</option>
            </select>
        </div>
    </div>

    {{-- Loading state --}}
    <div wire:loading class="text-center py-8 text-sm text-gray-400">Loading...</div>

    {{-- Product grid --}}
    <div wire:loading.remove>
        @if($products->count())
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($products as $product)
                    @php
                        $name     = $product->translateAttribute('name');
                        $variant  = $product->variants->first();
                        $price    = $variant?->prices->first()?->price?->formatted() ?? '';
                        $image    = $product->thumbnail?->getUrl() ?? '/images/placeholder.jpg';
                        $slug     = $product->urls->first()?->slug ?? '';
                    @endphp
                    <a href="/product/{{ $slug }}" class="group block border border-gray-100 hover:border-brand-secondary transition-colors">
                        <div class="overflow-hidden bg-gray-50">
                            <img
                                src="{{ $image }}"
                                alt="{{ $name }}"
                                class="w-full object-cover group-hover:scale-105 transition-transform duration-300"
                                style="height:220px; max-width:100%;"
                            >
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold text-sm text-brand-primary group-hover:text-brand-secondary transition-colors">
                                {{ $name }}
                            </h3>
                            @if($price)
                                <p class="text-sm font-bold text-brand-accent mt-1">{{ $price }}</p>
                            @endif
                        </div>
                    </a>
                @endforeach
            </div>

            {{-- Pagination --}}
            <div class="mt-8">
                {{ $products->links() }}
            </div>
        @else
            <div class="text-center py-16 text-gray-400">
                <p class="text-lg font-semibold mb-2">No products found</p>
                @if($search)
                    <p class="text-sm">Try a different search term.</p>
                @endif
            </div>
        @endif
    </div>
</div>
