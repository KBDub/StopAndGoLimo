<div>
    <section class="py-10 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="text-center mb-8">
                <h2 class="font-heading text-3xl md:text-4xl font-bold text-charcoal mb-2">Shop Our Latest Products</h2>
                <p class="text-charcoal-light max-w-2xl mx-auto">Browse our newest custom products available for order. From custom shirts to business signage, find what you need.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($products as $product)
                    @php
                        $productUrl = $product->urls->first()?->slug ?? '';
                        $thumbnail = $product->thumbnail?->getUrl('small') ?? null;
                        $prices = $product->variants->flatMap(fn($v) => $v->prices->map(fn($p) => $p->price->value));
                        $minPrice = $prices->min();
                        $priceDisplay = $minPrice ? 'From $' . number_format($minPrice / 100, 2) : '';
                        $tags = $product->attr('tags') ?? '';
                    @endphp
                    <a href="/products/{{ $productUrl }}" class="block group">
                        <div class="relative rounded-xl shadow-lg hover:shadow-gold-lg transition-all hover:-translate-y-1 overflow-hidden">
                            <div class="relative bg-white rounded-xl">
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
                                        {{ \Illuminate\Support\Str::limit($product->translateAttribute('description'), 80) }}
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

            <div class="text-center mt-8">
                <x-ui.button-gold-gradient href="/shop">Browse All Products</x-ui.button-gold-gradient>
            </div>
        </div>
    </section>
</div>
