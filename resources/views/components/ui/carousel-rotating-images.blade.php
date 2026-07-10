@props([
    'images'   => [],
    'visible'  => 3,
    'interval' => 3500,
    'chipNav'  => false,
])

{{--
    Image display standard: aspect-ratio 4/3 for all slots.
    Center slot: width:600px, aspect-ratio:4/3, max-width:100% (or 50%-gap for vis=2).
    Side slots (vis=3): width:300px, aspect-ratio:4/3, max-width:100%.
    On mobile (< 768px): always collapses to vis=1 regardless of prop.

    chipNav=false (default): side arrow buttons on image track + dot strip below.
    chipNav=true:            no side arrows; bottom row is [ ← Prev chip | dots | Next → chip ].
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
                            class="flex-none overflow-hidden bg-cloud transition-all duration-300 ease-out"
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
                        class="flex-none overflow-hidden bg-cloud transition-all duration-300 ease-out relative"
                        :class="fading ? 'opacity-0' : 'opacity-100'"
                        :style="vis === 2 ? 'width:600px; aspect-ratio:4/3; max-width:calc(50% - 6px);' : 'width:600px; aspect-ratio:4/3; max-width:100%;'"
                    >
                        <template x-if="vis >= 3">
                            <div class="absolute inset-0 ring-2 ring-champagne shadow-champagne-xl pointer-events-none z-10"></div>
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
                            class="flex-none overflow-hidden bg-cloud transition-all duration-300 ease-out"
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

                {{-- Side arrow buttons — default nav only (not chip-nav) --}}
                @if(!$chipNav)
                <template x-if="n > 1">
                    <div>
                        <button
                            x-on:click="prev()"
                            class="absolute left-2 top-1/2 -translate-y-1/2 z-20 w-10 h-10 bg-navy/80 hover:bg-champagne text-white flex items-center justify-center transition-colors duration-200"
                            aria-label="Previous image"
                        >
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                            </svg>
                        </button>
                        <button
                            x-on:click="next()"
                            class="absolute right-2 top-1/2 -translate-y-1/2 z-20 w-10 h-10 bg-navy/80 hover:bg-champagne text-white flex items-center justify-center transition-colors duration-200"
                            aria-label="Next image"
                        >
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </button>
                    </div>
                </template>
                @endif

            </div>

            {{-- ── Bottom controls ───────────────────────────────────── --}}
            @if($chipNav)

            {{-- Chip-nav: [ ← Prev chip ] [ dots ] [ Next → chip ] --}}
            <template x-if="n > 1">
                <div style="display: flex; justify-content: center; align-items: center; gap: 1.5rem; margin-top: 1.25rem;">

                    {{-- ← Prev chip --}}
                    <button
                        x-on:click="prev(); startTimer();"
                        class="font-head"
                        style="display: inline-flex; align-items: center; gap: 0.4rem;
                               background: color-mix(in srgb, var(--champagne) 14%, transparent);
                               color: var(--champagne);
                               border: 1px solid var(--champagne);
                               font-size: 0.8rem; font-weight: 600; letter-spacing: 0.4px;
                               padding: 0.4rem 1rem; cursor: pointer; line-height: 1;
                               transition: background 0.2s ease, color 0.2s ease;"
                        onmouseover="this.style.background='var(--champagne)'; this.style.color='var(--navy)';"
                        onmouseout="this.style.background='color-mix(in srgb, var(--champagne) 14%, transparent)'; this.style.color='var(--champagne)';"
                        aria-label="Previous image"
                    >&#8592; Prev</button>

                    {{-- Dot indicators --}}
                    <div style="display: flex; align-items: center; gap: 0.5rem;">
                        <template x-for="(img, idx) in images" :key="idx">
                            <button
                                x-on:click="jumpTo(idx)"
                                class="h-1.5 transition-all duration-300"
                                :class="idx === current ? 'w-6 bg-champagne' : 'w-1.5 bg-slate hover:bg-slate'"
                                :aria-label="'Go to image ' + (idx + 1)"
                            ></button>
                        </template>
                    </div>

                    {{-- Next → chip --}}
                    <button
                        x-on:click="next(); startTimer();"
                        class="font-head"
                        style="display: inline-flex; align-items: center; gap: 0.4rem;
                               background: color-mix(in srgb, var(--champagne) 14%, transparent);
                               color: var(--champagne);
                               border: 1px solid var(--champagne);
                               font-size: 0.8rem; font-weight: 600; letter-spacing: 0.4px;
                               padding: 0.4rem 1rem; cursor: pointer; line-height: 1;
                               transition: background 0.2s ease, color 0.2s ease;"
                        onmouseover="this.style.background='var(--champagne)'; this.style.color='var(--navy)';"
                        onmouseout="this.style.background='color-mix(in srgb, var(--champagne) 14%, transparent)'; this.style.color='var(--champagne)';"
                        aria-label="Next image"
                    >Next &#8594;</button>

                </div>
            </template>

            @else

            {{-- Default nav: dot strip only --}}
            <div class="flex justify-center gap-2 mt-4">
                <template x-for="(img, idx) in images" :key="idx">
                    <button
                        x-on:click="jumpTo(idx)"
                        class="h-1.5 transition-all duration-300"
                        :class="idx === current ? 'w-6 bg-champagne' : 'w-1.5 bg-slate hover:bg-slate'"
                        :aria-label="'Go to image ' + (idx + 1)"
                    ></button>
                </template>
            </div>

            @endif

        </div>
    </template>

</div>
