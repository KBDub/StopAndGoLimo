<div>
    <section class="py-10 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">

            <nav class="text-sm text-charcoal-light mb-6" aria-label="Breadcrumb">
                <ol class="flex items-center gap-1 flex-wrap">
                    @foreach($breadcrumbs as $crumb)
                        @if($crumb['url'])
                            <li class="flex items-center gap-1">
                                <a href="{{ $crumb['url'] }}" class="hover:text-azure">{{ $crumb['label'] }}</a>
                                <span>/</span>
                            </li>
                        @else
                            <li class="text-charcoal font-medium">{{ $crumb['label'] }}</li>
                        @endif
                    @endforeach
                </ol>
            </nav>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">

                <div>
                    @php
                        $mainImage = $product->thumbnail?->getUrl() ?? null;
                        $allImages = $product->images ?? collect();
                    @endphp

                    @if($mainImage)
                        <div class="rounded-xl overflow-hidden bg-linen mb-4">
                            <img src="{{ $mainImage }}" alt="{{ $product->translateAttribute('name') }}"
                                 class="w-full h-auto object-contain max-h-[500px]">
                        </div>
                    @else
                        <div class="rounded-xl bg-linen flex items-center justify-center h-[400px] mb-4">
                            <div class="text-center">
                                <svg class="mx-auto w-16 h-16 text-charcoal-lighter mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                <p class="text-charcoal-lighter text-sm">Product image coming soon</p>
                            </div>
                        </div>
                    @endif

                    @if($allImages->count() > 1)
                        <div class="grid grid-cols-4 gap-2">
                            @foreach($allImages->take(4) as $image)
                                <div class="rounded-lg overflow-hidden bg-linen cursor-pointer hover:ring-2 hover:ring-sunburst transition-all">
                                    <img src="{{ $image->getUrl('small') }}" alt="" class="w-full h-20 object-cover">
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>

                <div>
                    <div class="mb-4">
                        <span class="text-sm text-charcoal-light uppercase tracking-wider">{{ $product->productType->name }}</span>
                    </div>

                    <h1 class="font-heading text-3xl font-bold text-charcoal mb-4">
                        {{ $product->translateAttribute('name') }}
                    </h1>

                    <div class="text-3xl font-bold text-charcoal mb-6">
                        {{ $formattedPrice }}
                    </div>

                    @php
                        $tags = $product->attr('tags') ?? '';
                    @endphp
                    @if($tags)
                        <div class="flex flex-wrap gap-2 mb-6">
                            @foreach(explode(', ', $tags) as $tag)
                                @if($tag === 'Best Seller')
                                    <span class="bg-sunburst text-charcoal text-xs font-bold px-3 py-1 rounded-full">{{ $tag }}</span>
                                @elseif($tag === 'New')
                                    <span class="bg-azure text-white text-xs font-bold px-3 py-1 rounded-full">{{ $tag }}</span>
                                @elseif($tag === 'Rush Available')
                                    <span class="bg-olive text-white text-xs font-bold px-3 py-1 rounded-full">{{ $tag }}</span>
                                @else
                                    <span class="bg-linen text-charcoal text-xs font-bold px-3 py-1 rounded-full">{{ $tag }}</span>
                                @endif
                            @endforeach
                        </div>
                    @endif

                    @if($product->variants->count() > 1)
                        <div class="mb-6">
                            <h3 class="font-heading font-bold text-sm uppercase tracking-wider mb-3 text-charcoal">Select Option</h3>
                            <div class="flex flex-wrap gap-2">
                                @foreach($product->variants as $variant)
                                    <button wire:click="selectVariant({{ $variant->id }})"
                                            class="px-4 py-2 rounded-lg border-2 text-sm font-medium transition-all
                                                   {{ $selectedVariant && $selectedVariant->id === $variant->id
                                                      ? 'border-sunburst bg-sunburst/10 text-charcoal'
                                                      : 'border-charcoal-lighter text-charcoal-light hover:border-charcoal' }}">
                                        {{ $variant->sku ? last(explode('-', $variant->sku)) : 'Option ' . $loop->iteration }}
                                        @php
                                            $vPrice = $variant->prices->first()?->price;
                                        @endphp
                                        @if($vPrice)
                                            <span class="text-xs ml-1">{{ $vPrice->formatted() }}</span>
                                        @endif
                                    </button>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <div class="mb-6">
                        <h3 class="font-heading font-bold text-sm uppercase tracking-wider mb-3 text-charcoal">Quantity</h3>
                        <div class="flex items-center gap-3">
                            <button wire:click="decrementQuantity"
                                    class="w-10 h-10 rounded-lg border border-charcoal-lighter flex items-center justify-center hover:bg-linen transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
                                </svg>
                            </button>
                            <span class="w-12 text-center font-bold text-lg">{{ $quantity }}</span>
                            <button wire:click="incrementQuantity"
                                    class="w-10 h-10 rounded-lg border border-charcoal-lighter flex items-center justify-center hover:bg-linen transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                    @if($selectedVariant && $selectedVariant->stock > 0)
                        <div class="flex items-center gap-2 text-sm text-olive mb-4">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>In Stock ({{ $selectedVariant->stock }} available)</span>
                        </div>
                    @endif

                    <div class="space-y-3 mb-8">
                        <x-ui.button-gold-gradient class="w-full text-center justify-center py-3 text-lg">
                            Add to Cart
                        </x-ui.button-gold-gradient>
                        <x-ui.button-outline-charcoal href="/contact" class="w-full text-center justify-center py-3">
                            Request Custom Quote
                        </x-ui.button-outline-charcoal>
                    </div>

                    <div class="border-t border-charcoal-lighter pt-6">
                        <h3 class="font-heading font-bold text-lg mb-3 text-charcoal">Description</h3>
                        <div class="prose prose-sm text-charcoal-light max-w-none">
                            {!! $product->translateAttribute('description') !!}
                        </div>
                    </div>

                    @php
                        $specs = [];
                        $attrHandles = ['garment_type', 'print_method', 'material_type', 'fit', 'use_case',
                                       'sign_type', 'substrate', 'placement', 'mounting', 'finish',
                                       'decal_type', 'adhesive', 'decal_shape', 'application',
                                       'vehicle_product', 'coverage', 'vehicle_type', 'wrap_finish', 'compliance',
                                       'promo_item_type', 'imprint_method'];
                        $attrLabels = [
                            'garment_type' => 'Garment Type', 'print_method' => 'Print Method',
                            'material_type' => 'Material', 'fit' => 'Fit', 'use_case' => 'Use Case',
                            'sign_type' => 'Sign Type', 'substrate' => 'Substrate', 'placement' => 'Placement',
                            'mounting' => 'Mounting', 'finish' => 'Finish',
                            'decal_type' => 'Decal Type', 'adhesive' => 'Adhesive', 'decal_shape' => 'Shape',
                            'application' => 'Application',
                            'vehicle_product' => 'Product Type', 'coverage' => 'Coverage',
                            'vehicle_type' => 'Vehicle Type', 'wrap_finish' => 'Wrap Finish',
                            'compliance' => 'Compliance',
                            'promo_item_type' => 'Item Type', 'imprint_method' => 'Imprint Method',
                        ];
                        foreach ($attrHandles as $h) {
                            $val = $product->attr($h);
                            if ($val && $val !== 'None') {
                                $specs[$attrLabels[$h]] = $val;
                            }
                        }
                    @endphp

                    @if(!empty($specs))
                        <div class="border-t border-charcoal-lighter pt-6 mt-6">
                            <h3 class="font-heading font-bold text-lg mb-3 text-charcoal">Specifications</h3>
                            <dl class="grid grid-cols-2 gap-x-4 gap-y-2">
                                @foreach($specs as $label => $value)
                                    <dt class="text-sm text-charcoal-light">{{ $label }}</dt>
                                    <dd class="text-sm font-medium text-charcoal">{{ $value }}</dd>
                                @endforeach
                            </dl>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    @if($relatedProducts->isNotEmpty())
        <section class="py-10 bg-linen">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <h2 class="font-heading text-2xl font-bold text-charcoal mb-6">Related Products</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach($relatedProducts as $related)
                        @php
                            $relUrl = $related->urls->first()?->slug ?? '';
                            $relThumb = $related->thumbnail?->getUrl('small') ?? null;
                            $relPrice = $related->variants->flatMap(fn($v) => $v->prices->map(fn($p) => $p->price->value))->min();
                        @endphp
                        <a href="/products/{{ $relUrl }}" class="block group">
                            <div class="bg-white rounded-xl shadow hover:shadow-lg transition-all overflow-hidden">
                                @if($relThumb)
                                    <img src="{{ $relThumb }}" alt="{{ $related->translateAttribute('name') }}"
                                         class="w-full h-40 object-cover" loading="lazy">
                                @else
                                    <div class="w-full h-40 bg-linen flex items-center justify-center">
                                        <svg class="w-10 h-10 text-charcoal-lighter" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                @endif
                                <div class="p-4">
                                    <h3 class="font-semibold text-sm text-olive group-hover:text-azure transition-colors mb-1">
                                        {{ $related->translateAttribute('name') }}
                                    </h3>
                                    @if($relPrice)
                                        <span class="font-bold text-sm text-charcoal">From ${{ number_format($relPrice / 100, 2) }}</span>

                                    @endif
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
</div>
