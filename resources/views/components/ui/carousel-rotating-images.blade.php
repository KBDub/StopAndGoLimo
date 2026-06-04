@props([
    'images'   => [],
    'visible'  => 3,
    'interval' => 3500,
])

{{--
    Image display standard: aspect-ratio 4/3 for all slots.
    Center slot: width:600px, aspect-ratio:4/3, max-width:100% (or 50%-gap for vis=2).
    Side slots (vis=3): width:300px, aspect-ratio:4/3, max-width:100%.
    On mobile (< 768px): always collapses to vis=1 regardless of prop.
--}}

<div
    x-data="{
        images: @js($images),
        vis: {{ (int) $visible }},
        current: 0,
        fading: false,
        timer: null,

        get n()    { return this.images.length; },
        get li()   { return (this.current - 1 + this.n) % this.n; },
        get ri()   { return (this.current + 1) % this.n; },
        get lImg() { return this.images[this.li]; },
        get cImg() { return this.images[this.current]; },
        get rImg() { return this.images[this.ri]; },

        go(dir) {
            if (this.fading) return;
            this.fading = true;
            setTimeout(() => {
                this.current = (this.current + dir + this.n) % this.n;
                this.fading = false;
            }, 280);
        },
        next() { this.go(1); },
        prev() { this.go(-1); },
        jumpTo(idx) {
            if (idx === this.current) return;
            this.fading = true;
            setTimeout(() => { this.current = idx; this.fading = false; }, 280);
        },
        startTimer() {
            this.stopTimer();
            this.timer = setInterval(() => this.next(), {{ (int) $interval }});
        },
        stopTimer() {
            if (this.timer) { clearInterval(this.timer); this.timer = null; }
        },
        applyResponsive() {
            if (window.innerWidth < 768) {
                this.vis = 1;
            } else {
                this.vis = {{ (int) $visible }};
            }
        }
    }"
    x-init="applyResponsive(); startTimer(); window.addEventListener('resize', () => applyResponsive())"
    {{ $attributes->merge(['class' => 'w-full']) }}
>
    <template x-if="images.length > 0">
        <div>

            <div class="relative overflow-hidden">

                {{-- Image track --}}
                <div class="flex items-center justify-center gap-3">

                    {{-- Left slot, visible=3 only --}}
                    <template x-if="vis >= 3">
                        <div
                            class="flex-none overflow-hidden bg-linen transition-all duration-300 ease-out"
                            style="width:300px; aspect-ratio:4/3; max-width:100%;"
                            :class="fading ? 'opacity-0' : 'opacity-60'"
                        >
                            <img
                                :src="lImg.src"
                                :alt="lImg.alt"
                                class="w-full h-full object-cover"
                                loading="lazy"
                            >
                        </div>
                    </template>

                    {{-- Center slot --}}
                    <div
                        class="flex-none overflow-hidden bg-linen transition-all duration-300 ease-out relative"
                        :class="fading ? 'opacity-0' : 'opacity-100'"
                        :style="vis === 2 ? 'width:600px; aspect-ratio:4/3; max-width:calc(50% - 6px);' : 'width:600px; aspect-ratio:4/3; max-width:100%;'"
                    >
                        <template x-if="vis >= 3">
                            <div class="absolute inset-0 ring-2 ring-sunburst shadow-gold-xl pointer-events-none z-10"></div>
                        </template>
                        <img
                            :src="cImg.src"
                            :alt="cImg.alt"
                            class="w-full h-full object-cover"
                            loading="lazy"
                        >
                    </div>

                    {{-- Right slot, visible >= 2 --}}
                    <template x-if="vis >= 2">
                        <div
                            class="flex-none overflow-hidden bg-linen transition-all duration-300 ease-out"
                            :class="fading ? 'opacity-0' : vis >= 3 ? 'opacity-60' : 'opacity-100'"
                            :style="vis === 2 ? 'width:600px; aspect-ratio:4/3; max-width:calc(50% - 6px);' : 'width:300px; aspect-ratio:4/3; max-width:100%;'"
                        >
                            <img
                                :src="rImg.src"
                                :alt="rImg.alt"
                                class="w-full h-full object-cover"
                                loading="lazy"
                            >
                        </div>
                    </template>

                </div>

                {{-- Prev / Next arrows --}}
                <template x-if="n > 1">
                    <div>
                        <button
                            x-on:click="prev()"
                            class="absolute left-2 top-1/2 -translate-y-1/2 z-20 w-10 h-10 bg-charcoal/80 hover:bg-sunburst text-white flex items-center justify-center transition-colors duration-200"
                            aria-label="Previous image"
                        >
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                            </svg>
                        </button>
                        <button
                            x-on:click="next()"
                            class="absolute right-2 top-1/2 -translate-y-1/2 z-20 w-10 h-10 bg-charcoal/80 hover:bg-sunburst text-white flex items-center justify-center transition-colors duration-200"
                            aria-label="Next image"
                        >
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </button>
                    </div>
                </template>

            </div>

            {{-- Dot indicators --}}
            <div class="flex justify-center gap-2 mt-4">
                <template x-for="(img, idx) in images" :key="idx">
                    <button
                        x-on:click="jumpTo(idx)"
                        class="h-1.5 transition-all duration-300"
                        :class="idx === current ? 'w-6 bg-sunburst' : 'w-1.5 bg-charcoal-lighter hover:bg-charcoal-light'"
                        :aria-label="'Go to image ' + (idx + 1)"
                    ></button>
                </template>
            </div>

        </div>
    </template>

</div>
