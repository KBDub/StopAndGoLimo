<div>
    <section class="py-10 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="text-center mb-8">
                <h2 class="font-heading text-3xl md:text-4xl font-bold text-olive mb-2">Shop Our Latest Products</h2>
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
                    @endphp
                    <x-ui.card-product
                        title="{{ $product->translateAttribute('name') }}"
                        :href="'/products/' . $productUrl"
                        :image="$thumbnail"
                        price="{{ $priceDisplay }}"
                    >
                        <p class="text-sm text-charcoal-light mb-3 line-clamp-3">{{ \Illuminate\Support\Str::limit(strip_tags($product->translateAttribute('description') ?? ''), 100) }}</p>
                    </x-ui.card-product>
                @endforeach
            </div>

            <div class="text-center mt-8">
                <x-ui.button-gold-gradient href="/top5pct-merchandise">Browse All Products</x-ui.button-gold-gradient>
            </div>
        </div>
    </section>
</div>
