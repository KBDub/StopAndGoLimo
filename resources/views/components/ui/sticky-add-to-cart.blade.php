@props([
    'productName' => '',
    'price' => '',
    'variantLabel' => null,
])

<div
    x-data="{ visible: false }"
    x-on:sticky-cart-show.window="visible = true"
    x-on:sticky-cart-hide.window="visible = false"
    x-show="visible"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="translate-y-full"
    x-transition:enter-end="translate-y-0"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="translate-y-0"
    x-transition:leave-end="translate-y-full"
    class="fixed bottom-0 left-0 right-0 z-40 bg-white border-t border-linen-dark shadow-lg"
    style="display: none;"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between gap-4 py-3">
            <div class="flex items-center gap-4 min-w-0 flex-1">
                <div class="min-w-0">
                    <h4 class="text-sm font-semibold text-charcoal truncate">{{ $productName }}</h4>
                    <div class="flex items-center gap-2">
                        <span class="text-base font-bold text-charcoal">{{ $price }}</span>
                        @if($variantLabel)
                            <span class="text-xs text-charcoal-light">{{ $variantLabel }}</span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="flex items-center gap-3 flex-shrink-0">
                {{ $slot }}

                <button
                    type="button"
                    class="inline-flex items-center gap-2 px-6 py-2.5 text-sm font-semibold rounded-lg transition-all
                           bg-gradient-to-r from-sunburst-light via-sunburst to-sunburst-dark text-charcoal
                           hover:shadow-lg hover:scale-[1.02] active:scale-[0.98]"
                >
                    Add to cart
                </button>
            </div>
        </div>
    </div>
</div>
