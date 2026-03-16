@props([
    'images' => [],
    'alt' => 'Product image',
])

<div
    x-data="{
        images: {{ Js::from($images) }},
        current: 0,
        zooming: false,
        zoomX: 50,
        zoomY: 50,
        next() { this.current = (this.current + 1) % this.images.length; },
        prev() { this.current = (this.current - 1 + this.images.length) % this.images.length; },
        goTo(idx) { this.current = idx; },
        handleZoom(e) {
            const rect = e.target.getBoundingClientRect();
            this.zoomX = ((e.clientX - rect.left) / rect.width) * 100;
            this.zoomY = ((e.clientY - rect.top) / rect.height) * 100;
        }
    }"
    {{ $attributes->merge(['class' => 'w-full']) }}
>
    <template x-if="images.length > 0">
        <div>
            <div class="md:hidden">
                <div class="relative">
                    <div class="flex overflow-x-auto snap-x snap-mandatory hide-scrollbar w-full" x-ref="mobileCarousel">
                        <template x-for="(img, idx) in images" x-bind:key="'mobile-' + idx">
                            <div class="w-[90vw] shrink-0 snap-center px-1">
                                <div class="aspect-[3/4] overflow-hidden bg-linen">
                                    <img
                                        x-bind:src="img"
                                        x-bind:alt="'{{ $alt }} ' + (idx + 1)"
                                        loading="lazy"
                                        class="w-full h-full object-cover object-top"
                                    >
                                </div>
                            </div>
                        </template>
                    </div>

                    <div class="flex justify-center gap-2 mt-3">
                        <template x-for="(img, idx) in images" x-bind:key="'dot-' + idx">
                            <button
                                x-on:click="goTo(idx)"
                                class="w-2.5 h-2.5 rounded-full transition-all"
                                x-bind:class="current === idx ? 'bg-charcoal w-6' : 'bg-charcoal-lighter hover:bg-charcoal-light'"
                            ></button>
                        </template>
                    </div>
                </div>
            </div>

            <div class="hidden md:flex gap-4">
                <div class="flex flex-col gap-2 w-20 shrink-0 max-h-[600px] overflow-y-auto">
                    <template x-for="(img, idx) in images" x-bind:key="'thumb-' + idx">
                        <button
                            x-on:click="goTo(idx)"
                            class="w-20 h-24 overflow-hidden border-2 transition-all shrink-0"
                            x-bind:class="current === idx ? 'border-sunburst shadow-gold' : 'border-transparent hover:border-charcoal-lighter'"
                        >
                            <img x-bind:src="img" class="w-full h-full object-cover object-top" alt="">
                        </button>
                    </template>
                </div>

                <div class="flex-1 relative">
                    <div
                        class="aspect-[3/4] overflow-hidden bg-linen cursor-crosshair relative"
                        x-on:mouseenter="zooming = true"
                        x-on:mouseleave="zooming = false"
                        x-on:mousemove="handleZoom($event)"
                    >
                        <img
                            x-bind:src="images[current]"
                            x-bind:alt="'{{ $alt }} ' + (current + 1)"
                            class="w-full h-full object-cover object-top transition-opacity duration-300"
                            x-bind:class="zooming ? 'opacity-0' : 'opacity-100'"
                        >

                        <div
                            x-show="zooming"
                            class="absolute inset-0"
                            x-bind:style="'background-image: url(' + images[current] + '); background-size: 250%; background-position: ' + zoomX + '% ' + zoomY + '%;'"
                        ></div>
                    </div>

                    <template x-if="images.length > 1">
                        <div>
                            <button
                                x-on:click="prev()"
                                class="absolute left-3 top-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-white/90 hover:bg-white shadow flex items-center justify-center text-charcoal hover:text-charcoal-dark transition-all"
                            >
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                            </button>
                            <button
                                x-on:click="next()"
                                class="absolute right-3 top-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-white/90 hover:bg-white shadow flex items-center justify-center text-charcoal hover:text-charcoal-dark transition-all"
                            >
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                            </button>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </template>

    <template x-if="images.length === 0">
        <div class="aspect-[3/4] overflow-hidden bg-linen flex flex-col items-center justify-center text-charcoal-lighter">
            <svg class="w-16 h-16 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            </svg>
            <span class="text-sm">Product image coming soon</span>
        </div>
    </template>
</div>
