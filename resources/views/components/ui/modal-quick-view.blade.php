@props([
    'title' => '',
    'price' => '',
    'originalPrice' => null,
    'description' => '',
    'image' => null,
    'images' => [],
    'href' => '#',
    'variants' => [],
])

<div
    x-data="{
        open: false,
        currentImage: 0,
        selectedVariant: null,
        quantity: 1,
        get allImages() {
            const imgs = {{ Js::from($images ?: ($image ? [$image] : [])) }};
            return imgs.length ? imgs : [];
        }
    }"
    x-on:open-quick-view.window="if ($event.detail?.id === $el.id) { open = true; currentImage = 0; }"
    {{ $attributes }}
>
    <div
        x-show="open"
        x-cloak
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-50 flex items-center justify-center p-4"
    >
        <div class="absolute inset-0 bg-charcoal-dark/60 backdrop-blur-sm" x-on:click="open = false"></div>

        <div
            x-show="open"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="relative bg-white shadow-2xl w-full max-w-3xl max-h-[90vh] overflow-hidden z-10"
        >
            <button
                x-on:click="open = false"
                class="absolute top-4 right-4 z-20 w-8 h-8 flex items-center justify-center bg-white/90 hover:bg-white shadow text-charcoal hover:text-charcoal-dark transition-colors"
            >
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>

            <div class="grid grid-cols-1 md:grid-cols-5">
                <div class="md:col-span-3 relative bg-linen">
                    <div class="aspect-[3/4] relative overflow-hidden">
                        <template x-if="allImages.length > 0">
                            <img
                                x-bind:src="allImages[currentImage]"
                                x-bind:alt="'{{ $title }} image ' + (currentImage + 1)"
                                class="w-full h-full object-cover object-top"
                            >
                        </template>
                        <template x-if="allImages.length === 0">
                            <div class="w-full h-full flex flex-col items-center justify-center text-charcoal-lighter">
                                <svg class="w-16 h-16 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                <span class="text-sm">No image available</span>
                            </div>
                        </template>
                    </div>

                    <template x-if="allImages.length > 1">
                        <div class="absolute bottom-4 left-0 right-0 flex justify-center gap-2">
                            <template x-for="(img, idx) in allImages" x-bind:key="idx">
                                <button
                                    x-on:click="currentImage = idx"
                                    class="w-12 h-12 overflow-hidden border-2 transition-all"
                                    x-bind:class="currentImage === idx ? 'border-sunburst shadow-gold' : 'border-white/50 hover:border-white'"
                                >
                                    <img x-bind:src="img" class="w-full h-full object-cover" alt="">
                                </button>
                            </template>
                        </div>
                    </template>
                </div>

                <div class="md:col-span-2 p-6 flex flex-col">
                    <h3 class="text-xl font-bold text-charcoal mb-2">{{ $title }}</h3>

                    <div class="flex items-center gap-2 mb-4">
                        <span class="text-2xl font-bold text-charcoal">{{ $price }}</span>
                        @if($originalPrice)
                            <span class="text-base text-charcoal-light line-through">{{ $originalPrice }}</span>
                        @endif
                    </div>

                    @if($description)
                        <p class="text-sm text-charcoal-light mb-6 line-clamp-3">{{ $description }}</p>
                    @endif

                    @if(count($variants) > 0)
                        <div class="mb-4">
                            <h4 class="text-sm font-semibold text-charcoal mb-2">Select option</h4>
                            <div class="flex flex-wrap gap-2">
                                @foreach($variants as $variant)
                                    <button
                                        x-on:click="selectedVariant = '{{ $variant }}'"
                                        x-bind:class="selectedVariant === '{{ $variant }}' ? 'border-charcoal bg-charcoal text-white' : 'border-charcoal-lighter text-charcoal hover:border-charcoal'"
                                        class="px-4 py-2 text-sm font-medium border transition-all"
                                    >
                                        {{ $variant }}
                                    </button>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <div class="mb-6">
                        <h4 class="text-sm font-semibold text-charcoal mb-2">Quantity</h4>
                        <div class="inline-flex items-center border border-charcoal-lighter">
                            <button x-on:click="quantity = Math.max(1, quantity - 1)" class="px-3 py-2 text-charcoal hover:bg-linen transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/></svg>
                            </button>
                            <span x-text="quantity" class="px-4 py-2 text-sm font-semibold text-charcoal min-w-[3rem] text-center border-x border-charcoal-lighter"></span>
                            <button x-on:click="quantity = Math.min(99, quantity + 1)" class="px-3 py-2 text-charcoal hover:bg-linen transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                            </button>
                        </div>
                    </div>

                    <button
                        type="button"
                        class="w-full py-3 text-base font-semibold transition-all
                               bg-gradient-to-r from-sunburst-light via-sunburst to-sunburst-dark text-charcoal
                               hover:shadow-lg hover:scale-[1.02] active:scale-[0.98] mb-3"
                    >
                        Add to cart
                    </button>

                    <a href="{{ $href }}" class="text-sm text-azure hover:text-azure-dark text-center transition-colors font-medium">
                        View full details
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
