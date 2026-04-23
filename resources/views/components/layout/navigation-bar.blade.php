@props([
    'currentPage' => null
])

{{-- ===================================================================
     Mega Menu Navigation — Style 1
     Each panel lives INSIDE its trigger div so hover is seamless:
       trigger div = relative container
       panel = absolute top-full, left or right offset per item position
     No close-timer needed — entering the panel never leaves the trigger.
     ================================================================== --}}

<nav
    class="bg-linen shadow-sm relative z-50"
    x-data="{
        mobileMenuOpen: false,
        openMenu: null,
        scrolled: false,
        openMobile: null,
        menuTimeout: null
    }"
    x-on:scroll.window="if (window.scrollY > 50) { scrolled = true } else { scrolled = false; openMenu = null }"
    x-on:keydown.escape.window="openMenu = null; mobileMenuOpen = false"
>
    {{-- ── Top Bar ─────────────────────────────────────────────────────── --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex items-center gap-4 transition-all duration-300 h-24" x-bind:class="scrolled ? 'h-16' : 'h-24'">

            {{-- Logo --}}
            <a href="/" class="flex items-center flex-shrink-0">
                <img
                    src="/images/logos/top5-logo.gif"
                    alt="Top 5 Percent — Custom Signage & Apparel Joliet IL"
                    class="transition-all duration-300 transform-gpu"
                    x-bind:class="scrolled ? 'h-12' : 'h-20'"
                >
            </a>

            {{-- Mobile hamburger --}}
            <button
                @click="mobileMenuOpen = !mobileMenuOpen"
                class="lg:hidden ml-auto p-2 text-charcoal hover:text-sunburst"
                aria-label="Toggle menu"
            >
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>

            {{-- ── Desktop Nav Links ────────────────────────────────────── --}}
            <div class="hidden lg:flex flex-1 self-stretch items-stretch justify-between relative z-50">

                {{-- Home (no dropdown) --}}
                <div class="relative self-stretch flex items-stretch">
                    <a href="/" class="px-2 h-full text-lg font-semibold whitespace-nowrap inline-flex items-center {{ $currentPage === 'home' ? 'text-azure' : 'text-charcoal hover:text-sunburst' }} transition-colors">Home</a>
                </div>

                {{-- ══ Custom Apparel ═══════════════════════════════════════ --}}
                <div
                    class="self-stretch flex items-stretch"
                    @mouseenter="openMenu = 'apparel'"
                    @mouseleave="openMenu = null"
                >
                    <a href="/custom-apparel" class="px-2 h-full text-lg font-semibold whitespace-nowrap inline-flex items-center gap-0.5 {{ $currentPage === 'custom-apparel' ? 'text-azure' : 'text-charcoal hover:text-sunburst' }} transition-colors">
                        Custom Apparel
                        <svg class="w-3 h-3 shrink-0 transition-transform duration-200 transform-gpu pointer-events-none" :class="openMenu === 'apparel' ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                    </a>
                    <div
                        x-cloak x-show="openMenu === 'apparel'"
                        x-transition:enter="transition ease-out duration-150"
                        x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        class="absolute top-full left-0 z-50 pt-2 -mt-2"
                        style="width: 760px; max-width: calc(100vw - 20px);"
                    >
                        <div class="flex items-stretch bg-white shadow-gold-xl border-t-[6px] border-sunburst">
                            <div class="flex-1 pl-5 py-5 min-w-0">
                                <a href="/custom-apparel" class="flex items-center gap-2 pb-2 mb-2 border-b border-linen-dark group">
                                    <span class="font-bold text-lg text-charcoal group-hover:text-sunburst transition-colors whitespace-nowrap">Custom Apparel</span>
                                    <span class="text-sm text-charcoal-light">T-shirts, hoodies, caps & more — any print method, same day.</span>
                                    <svg class="w-4 h-4 text-sunburst shrink-0 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                </a>
                                <div class="space-y-2">
                                    {{-- Row 1: Printing Options --}}
                                    <div class="pb-2 border-b border-linen-dark">
                                        <p class="text-xs font-bold uppercase tracking-widest mb-2 text-center" style="color:var(--color-olive)">Printing Options</p>
                                        <div class="grid grid-cols-2 gap-x-4 gap-y-3">
                                            <div><a href="/custom-apparel/dtf-transfers" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Direct to Film (DTF)</a><a href="/custom-apparel/dtf-transfers" class="block text-sm text-charcoal-light leading-tight hover:text-sunburst transition-colors">High-detail heat transfers</a></div>
                                            <div><a href="/custom-apparel/dye-sublimation" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Dye-Sublimation</a><a href="/custom-apparel/dye-sublimation" class="block text-sm text-charcoal-light leading-tight hover:text-sunburst transition-colors">Edge-to-edge full color</a></div>
                                            <div><a href="/custom-apparel/screen-printing" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Screen Printing</a><a href="/custom-apparel/screen-printing" class="block text-sm text-charcoal-light leading-tight hover:text-sunburst transition-colors">Classic bulk production</a></div>
                                            <div><a href="/custom-apparel/embroidery" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Embroidery</a><a href="/custom-apparel/embroidery" class="block text-sm text-charcoal-light leading-tight hover:text-sunburst transition-colors">Premium stitched branding</a></div>
                                            <div><a href="/custom-apparel/rhinestone-shirts" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Rhinestone</a><a href="/custom-apparel/rhinestone-shirts" class="block text-sm text-charcoal-light leading-tight hover:text-sunburst transition-colors">Crystal embellishments</a></div>
                                            <div><a href="/custom-apparel/vinyl-shirts" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Digital Vinyl</a><a href="/custom-apparel/vinyl-shirts" class="block text-sm text-charcoal-light leading-tight hover:text-sunburst transition-colors">Sharp, durable graphics</a></div>
                                        </div>
                                    </div>
                                    {{-- Row 2: Specialty Materials --}}
                                    <div class="pb-2 border-b border-linen-dark">
                                        <p class="text-xs font-bold uppercase tracking-widest mb-2 text-center" style="color:var(--color-olive)">Specialty Materials</p>
                                        <div class="grid grid-cols-2 gap-x-4 gap-y-3">
                                            <div><a href="/custom-apparel/glitter-shirts" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Glitter</a><a href="/custom-apparel/glitter-shirts" class="block text-sm text-charcoal-light leading-tight hover:text-sunburst transition-colors">Shimmer and sparkle</a></div>
                                            <div><a href="/custom-apparel/puff-shirts" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Puff</a><a href="/custom-apparel/puff-shirts" class="block text-sm text-charcoal-light leading-tight hover:text-sunburst transition-colors">Raised 3D texture</a></div>
                                            <div><a href="/custom-apparel/glow-in-the-dark-shirts" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Glow in the Dark</a><a href="/custom-apparel/glow-in-the-dark-shirts" class="block text-sm text-charcoal-light leading-tight hover:text-sunburst transition-colors">Luminous night effects</a></div>
                                            <div><a href="/custom-apparel/flock-shirts" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Flock</a><a href="/custom-apparel/flock-shirts" class="block text-sm text-charcoal-light leading-tight hover:text-sunburst transition-colors">Velvet-like soft feel</a></div>
                                            <div><a href="/custom-apparel/brick-shirts" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Brick</a><a href="/custom-apparel/brick-shirts" class="block text-sm text-charcoal-light leading-tight hover:text-sunburst transition-colors">Extra thick, bold look</a></div>
                                            <div><a href="/custom-apparel/holographic-shirts" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Holographic</a><a href="/custom-apparel/holographic-shirts" class="block text-sm text-charcoal-light leading-tight hover:text-sunburst transition-colors">Iridescent color shifting</a></div>
                                            <div><a href="/custom-apparel/foil-shirts" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Foil</a><a href="/custom-apparel/foil-shirts" class="block text-sm text-charcoal-light leading-tight hover:text-sunburst transition-colors">Shiny metallic finish</a></div>
                                            <div><a href="/custom-apparel/reflective-shirts" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Reflective</a><a href="/custom-apparel/reflective-shirts" class="block text-sm text-charcoal-light leading-tight hover:text-sunburst transition-colors">High-visibility safety</a></div>
                                        </div>
                                    </div>
                                    {{-- Row 3: Group Shirts --}}
                                    <div>
                                        <p class="text-xs font-bold uppercase tracking-widest mb-2 text-center" style="color:var(--color-olive)">Group Shirts</p>
                                        <div class="grid grid-cols-2 gap-x-4 gap-y-3">
                                            <div><a href="/custom-apparel/reunion-shirts" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Family Reunion</a><a href="/custom-apparel/reunion-shirts" class="block text-sm text-charcoal-light leading-tight hover:text-sunburst transition-colors">Custom matching apparel</a></div>
                                            <div><a href="/custom-apparel/spirit-wear-shirts" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Spirit Wear</a><a href="/custom-apparel/spirit-wear-shirts" class="block text-sm text-charcoal-light leading-tight hover:text-sunburst transition-colors">School and sports fans</a></div>
                                            <div><a href="/custom-apparel/corporate-wear-shirts" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Corporate Wear</a><a href="/custom-apparel/corporate-wear-shirts" class="block text-sm text-charcoal-light leading-tight hover:text-sunburst transition-colors">Branded staff uniforms</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <x-layout.mega-menu-ad
                                image="/images/custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg"
                                alt="Custom apparel same day"
                                tag="Same Day Available"
                                title="Custom Shirts & Apparel"
                                desc="Any style. Any print method. Veteran owned in Joliet, IL."
                                cta="Shop Apparel"
                                href="/custom-apparel"
                            />
                        </div>
                    </div>
                </div>

                {{-- ══ Select a Sign ════════════════════════════════════════ --}}
                <div
                    class="self-stretch flex items-stretch"
                    @mouseenter="openMenu = 'signs'"
                    @mouseleave="openMenu = null"
                >
                    <a href="/signs" class="px-2 h-full text-lg font-semibold whitespace-nowrap inline-flex items-center gap-0.5 {{ $currentPage === 'signs' ? 'text-azure' : 'text-charcoal hover:text-sunburst' }} transition-colors">
                        Select a Sign
                        <svg class="w-3 h-3 shrink-0 transition-transform duration-200 transform-gpu pointer-events-none" :class="openMenu === 'signs' ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                    </a>
                    <div
                        x-cloak x-show="openMenu === 'signs'"
                        x-transition:enter="transition ease-out duration-150"
                        x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        class="absolute top-full left-0 z-50 pt-2 -mt-2"
                        style="width: 760px; max-width: calc(100vw - 20px);"
                    >
                        <div class="flex items-stretch bg-white shadow-gold-xl border-t-[6px] border-sunburst">
                            <div class="flex-1 pl-5 py-5 min-w-0">
                                <a href="/signs" class="flex items-center gap-2 pb-2 mb-2 border-b border-linen-dark group">
                                    <span class="font-bold text-lg text-charcoal group-hover:text-sunburst transition-colors whitespace-nowrap">Select a Sign</span>
                                    <span class="text-sm text-charcoal-light">Banners, window signs, yard signs & more — same day in Joliet, IL.</span>
                                    <svg class="w-4 h-4 text-sunburst shrink-0 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                </a>
                                <div class="space-y-2">
                                    {{-- Row 1: Business Signs --}}
                                    <div class="pb-2 border-b border-linen-dark">
                                        <p class="text-xs font-bold uppercase tracking-widest mb-2 text-center" style="color:var(--color-olive)">Business Signs</p>
                                        <div class="grid grid-cols-2 gap-x-4 gap-y-3">
                                            <div><a href="/signs/banners" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Banners</a><a href="/signs/banners" class="block text-sm text-charcoal-light leading-tight hover:text-sunburst transition-colors">Custom vinyl banners</a></div>
                                            <div><a href="/signs/window-signs" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Window Signs</a><a href="/signs/window-signs" class="block text-sm text-charcoal-light leading-tight hover:text-sunburst transition-colors">Storefront decals & perf</a></div>
                                            <div><a href="/signs/wall-signs" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Wall Signs</a><a href="/signs/wall-signs" class="block text-sm text-charcoal-light leading-tight hover:text-sunburst transition-colors">Interior murals & graphics</a></div>
                                            <div><a href="/signs/floor-signs" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Floor Signs</a><a href="/signs/floor-signs" class="block text-sm text-charcoal-light leading-tight hover:text-sunburst transition-colors">Durable surface branding</a></div>
                                            <div><a href="/signs/door-signs" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Door Signs</a><a href="/signs/door-signs" class="block text-sm text-charcoal-light leading-tight hover:text-sunburst transition-colors">Hours & office identifiers</a></div>
                                            <div><a href="/signs/posters" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Posters</a><a href="/signs/posters" class="block text-sm text-charcoal-light leading-tight hover:text-sunburst transition-colors">Large format printing</a></div>
                                        </div>
                                    </div>
                                    {{-- Row 2: Ground Signs --}}
                                    <div class="pb-2 border-b border-linen-dark">
                                        <p class="text-xs font-bold uppercase tracking-widest mb-2 text-center" style="color:var(--color-olive)">Ground Signs</p>
                                        <div class="grid grid-cols-2 gap-x-4 gap-y-3">
                                            <div><a href="/signs/yard-signs" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Yard Signs</a><a href="/signs/yard-signs" class="block text-sm text-charcoal-light leading-tight hover:text-sunburst transition-colors">Corrugated wire-stake signs</a></div>
                                            <div><a href="/signs/sidewalk-signs" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">A-Frame/Sidewalk Signs</a><a href="/signs/sidewalk-signs" class="block text-sm text-charcoal-light leading-tight hover:text-sunburst transition-colors">Portable sandwich boards</a></div>
                                            <div><a href="/signs/parking-signs" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Parking Signs</a><a href="/signs/parking-signs" class="block text-sm text-charcoal-light leading-tight hover:text-sunburst transition-colors">Aluminum & compliance signs</a></div>
                                        </div>
                                    </div>
                                    {{-- Row 3: Table Signs --}}
                                    <div>
                                        <p class="text-xs font-bold uppercase tracking-widest mb-2 text-center" style="color:var(--color-olive)">Table Signs</p>
                                        <div class="grid grid-cols-2 gap-x-4 gap-y-3">
                                            <div><a href="/signs/table-cloths" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Table Cloths</a><a href="/signs/table-cloths" class="block text-sm text-charcoal-light leading-tight hover:text-sunburst transition-colors">Full-color branded covers</a></div>
                                            <div><a href="/signs/table-runners" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Table Runners</a><a href="/signs/table-runners" class="block text-sm text-charcoal-light leading-tight hover:text-sunburst transition-colors">Accent event branding</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <x-layout.mega-menu-ad
                                image="/images/window-wall-floor-decals/top5pct-banner-wall-decal-door-signs-joliet.jpg"
                                alt="Same day signs"
                                tag="Same Day Available"
                                title="Custom Signs & Banners"
                                desc="Indoor & outdoor. Any size. Fast turnaround in Joliet, IL."
                                cta="Get a Sign"
                                href="/signs"
                            />
                        </div>
                    </div>
                </div>

                {{-- ══ Stickers ═════════════════════════════════════════════ --}}
                <div
                    class="self-stretch flex items-stretch"
                    @mouseenter="openMenu = 'stickers'"
                    @mouseleave="openMenu = null"
                >
                    <a href="/stickers" class="px-2 h-full text-lg font-semibold whitespace-nowrap inline-flex items-center gap-0.5 {{ $currentPage === 'stickers' ? 'text-azure' : 'text-charcoal hover:text-sunburst' }} transition-colors">
                        Stickers
                        <svg class="w-3 h-3 shrink-0 transition-transform duration-200 transform-gpu pointer-events-none" :class="openMenu === 'stickers' ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                    </a>
                    <div
                        x-cloak x-show="openMenu === 'stickers'"
                        x-transition:enter="transition ease-out duration-150"
                        x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        class="absolute top-full left-0 z-50 pt-2 -mt-2"
                        style="width: 760px; max-width: calc(100vw - 20px);"
                    >
                        <div class="flex items-stretch bg-white shadow-gold-xl border-t-[6px] border-sunburst">
                            <div class="flex-1 pl-5 py-5 min-w-0">
                                <a href="/stickers" class="flex items-center gap-2 pb-2 mb-2 border-b border-linen-dark group">
                                    <span class="font-bold text-lg text-charcoal group-hover:text-sunburst transition-colors whitespace-nowrap">Stickers</span>
                                    <span class="text-sm text-charcoal-light">Vinyl stickers & labels — any shape, no minimums, fast turnaround.</span>
                                    <svg class="w-4 h-4 text-sunburst shrink-0 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                </a>
                                <p class="text-xs font-bold uppercase tracking-widest mb-2 text-center" style="color:var(--color-olive)">Sticker Types</p>
                                <div class="grid grid-cols-2 gap-x-4 gap-y-3">
                                    <div><a href="/stickers/standard-stickers" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Standard</a><a href="/stickers/standard-stickers" class="block text-sm text-charcoal-light leading-tight hover:text-sunburst transition-colors">Round, square, and rectangle</a></div>
                                    <div><a href="/stickers/custom-shaped-stickers" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Custom Shaped</a><a href="/stickers/custom-shaped-stickers" class="block text-sm text-charcoal-light leading-tight hover:text-sunburst transition-colors">Die cut to any design shape</a></div>
                                </div>
                            </div>
                            <x-layout.mega-menu-ad
                                image="/images/stickers-decals/top5pct-stickers-decals-joliet-labels.jpg"
                                alt="Custom stickers same day"
                                tag="Fast Turnaround"
                                title="Custom Stickers"
                                desc="Vinyl, weatherproof, any shape. No minimums in Joliet, IL."
                                cta="Order Now"
                                href="/stickers"
                            />
                        </div>
                    </div>
                </div>

                {{-- ══ Vehicle Decals ═══════════════════════════════════════ --}}
                <div
                    class="self-stretch flex items-stretch"
                    @mouseenter="openMenu = 'vehicle'"
                    @mouseleave="openMenu = null"
                >
                    <a href="/vehicle-graphics" class="px-2 h-full text-lg font-semibold whitespace-nowrap inline-flex items-center gap-0.5 {{ $currentPage === 'vehicle-graphics' ? 'text-azure' : 'text-charcoal hover:text-sunburst' }} transition-colors">
                        Vehicle Decals
                        <svg class="w-3 h-3 shrink-0 transition-transform duration-200 transform-gpu pointer-events-none" :class="openMenu === 'vehicle' ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                    </a>
                    <div
                        x-cloak x-show="openMenu === 'vehicle'"
                        x-transition:enter="transition ease-out duration-150"
                        x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        class="absolute top-full right-0 z-50 pt-2 -mt-2"
                        style="width: 760px; max-width: calc(100vw - 20px);"
                    >
                        <div class="flex items-stretch bg-white shadow-gold-xl border-t-[6px] border-sunburst">
                            <div class="flex-1 pl-5 py-5 min-w-0">
                                <a href="/vehicle-graphics" class="flex items-center gap-2 pb-2 mb-2 border-b border-linen-dark group">
                                    <span class="font-bold text-lg text-charcoal group-hover:text-sunburst transition-colors whitespace-nowrap">Vehicle Decals</span>
                                    <span class="text-sm text-charcoal-light">Wraps, lettering & magnets for cars, trucks & fleets.</span>
                                    <svg class="w-4 h-4 text-sunburst shrink-0 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                </a>
                                <p class="text-xs font-bold uppercase tracking-widest mb-2 text-center" style="color:var(--color-olive)">Vehicle Products</p>
                                <div class="grid grid-cols-2 gap-x-4 gap-y-3">
                                    <div><a href="/vehicle-graphics/automobile-graphics" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Automobile Graphics</a><a href="/vehicle-graphics/automobile-graphics" class="block text-sm text-charcoal-light leading-tight hover:text-sunburst transition-colors">Full wraps & vinyl lettering</a></div>
                                    <div><a href="/vehicle-graphics/vehicle-magnets" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Vehicle Magnets</a><a href="/vehicle-graphics/vehicle-magnets" class="block text-sm text-charcoal-light leading-tight hover:text-sunburst transition-colors">Removable magnetic signs</a></div>
                                    <div><a href="/vehicle-graphics/dot-decals" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">DOT Decals</a><a href="/vehicle-graphics/dot-decals" class="block text-sm text-charcoal-light leading-tight hover:text-sunburst transition-colors">Compliant number lettering</a></div>
                                </div>
                            </div>
                            <x-layout.mega-menu-ad
                                image="/images/automobile-graphics/top5pct-banner-vinyl-lettering-car-wraps-joliet.jpg"
                                alt="Vehicle decals same day"
                                tag="Same Day Available"
                                title="Vehicle Graphics & Wraps"
                                desc="Mobile advertising that pays for itself. Joliet, IL."
                                cta="Get a Quote"
                                href="/vehicle-graphics"
                            />
                        </div>
                    </div>
                </div>

                {{-- ══ Promotional Items ════════════════════════════════════ --}}
                <div
                    class="self-stretch flex items-stretch"
                    @mouseenter="openMenu = 'promo'"
                    @mouseleave="openMenu = null"
                >
                    <a href="/promotional-items" class="px-2 h-full text-lg font-semibold whitespace-nowrap inline-flex items-center gap-0.5 {{ $currentPage === 'promotional-items' ? 'text-azure' : 'text-charcoal hover:text-sunburst' }} transition-colors">
                        Promo Items
                        <svg class="w-3 h-3 shrink-0 transition-transform duration-200 transform-gpu pointer-events-none" :class="openMenu === 'promo' ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                    </a>
                    <div
                        x-cloak x-show="openMenu === 'promo'"
                        x-transition:enter="transition ease-out duration-150"
                        x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        class="absolute top-full right-0 z-50 pt-2 -mt-2"
                        style="width: 760px; max-width: calc(100vw - 20px);"
                    >
                        <div class="flex items-stretch bg-white shadow-gold-xl border-t-[6px] border-sunburst">
                            <div class="flex-1 pl-5 py-5 min-w-0">
                                <a href="/promotional-items" class="flex items-center gap-2 pb-2 mb-2 border-b border-linen-dark group">
                                    <span class="font-bold text-lg text-charcoal group-hover:text-sunburst transition-colors whitespace-nowrap">Promo Items</span>
                                    <span class="text-sm text-charcoal-light">Branded giveaways for events, offices & trade shows.</span>
                                    <svg class="w-4 h-4 text-sunburst shrink-0 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                </a>
                                <p class="text-xs font-bold uppercase tracking-widest mb-2 text-center" style="color:var(--color-olive)">Promo Products</p>
                                <div class="grid grid-cols-2 gap-x-4 gap-y-3">
                                    <div><a href="/promotional-items/mugs" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Mugs</a><a href="/promotional-items/mugs" class="block text-sm text-charcoal-light leading-tight hover:text-sunburst transition-colors">Full color sublimation</a></div>
                                    <div><a href="/promotional-items/can-koozies" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Can Koozies</a><a href="/promotional-items/can-koozies" class="block text-sm text-charcoal-light leading-tight hover:text-sunburst transition-colors">Branded foam & neoprene</a></div>
                                    <div><a href="/promotional-items/towels" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Towels</a><a href="/promotional-items/towels" class="block text-sm text-charcoal-light leading-tight hover:text-sunburst transition-colors">Beach & sport towels</a></div>
                                    <div><a href="/promotional-items/drink-coasters" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Drink Coasters</a><a href="/promotional-items/drink-coasters" class="block text-sm text-charcoal-light leading-tight hover:text-sunburst transition-colors">Ceramic, neoprene, board</a></div>
                                    <div><a href="/promotional-items/tote-bags" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Drawstring/Tote Bags</a><a href="/promotional-items/tote-bags" class="block text-sm text-charcoal-light leading-tight hover:text-sunburst transition-colors">Branded canvas bags</a></div>
                                    <div><a href="/promotional-items/mouse-pads" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Mouse Pads</a><a href="/promotional-items/mouse-pads" class="block text-sm text-charcoal-light leading-tight hover:text-sunburst transition-colors">Full-surface desk pads</a></div>
                                </div>
                            </div>
                            <x-layout.mega-menu-ad
                                image="/images/stickers-decals/top5pct-stickers-decals-joliet-labels.jpg"
                                alt="Promo items same day"
                                tag="In Stock & Ready"
                                title="Promo Products"
                                desc="Branded gifts for events, offices & trade shows."
                                cta="Shop Promo"
                                href="/promotional-items"
                            />
                        </div>
                    </div>
                </div>

                {{-- Top 5% Merchandise — plain link, no dropdown --}}
                <div class="self-stretch flex items-stretch">
                    <a href="/top5pct-merchandise" class="px-2 h-full text-lg font-semibold whitespace-nowrap inline-flex items-center {{ $currentPage === 'merchandise' ? 'text-azure' : 'text-charcoal hover:text-sunburst' }} transition-colors">
                        Top 5% Merchandise
                    </a>
                </div>

                {{-- ══ Design Services ══════════════════════════════════════ --}}
                <div
                    class="self-stretch flex items-stretch"
                    @mouseenter="openMenu = 'design'"
                    @mouseleave="openMenu = null"
                >
                    <a href="/design-services" class="px-2 h-full text-lg font-semibold whitespace-nowrap inline-flex items-center gap-0.5 {{ $currentPage === 'design-services' ? 'text-azure' : 'text-charcoal hover:text-sunburst' }} transition-colors">
                        Design Services
                        <svg class="w-3 h-3 shrink-0 transition-transform duration-200 transform-gpu pointer-events-none" :class="openMenu === 'design' ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                    </a>
                    <div
                        x-cloak x-show="openMenu === 'design'"
                        x-transition:enter="transition ease-out duration-150"
                        x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        class="absolute top-full right-0 z-50 pt-2 -mt-2"
                        style="width: 760px; max-width: calc(100vw - 20px);"
                    >
                        <div class="flex items-stretch bg-white shadow-gold-xl border-t-[6px] border-sunburst">
                            <div class="flex-1 pl-5 py-5 min-w-0">
                                <a href="/design-services" class="flex items-center gap-2 pb-2 mb-2 border-b border-linen-dark group">
                                    <span class="font-bold text-lg text-charcoal group-hover:text-sunburst transition-colors whitespace-nowrap">Design Services</span>
                                    <span class="text-sm text-charcoal-light">Logos, layouts & print-ready artwork — concept to finished files.</span>
                                    <svg class="w-4 h-4 text-sunburst shrink-0 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                </a>
                                <p class="text-xs font-bold uppercase tracking-widest mb-2 text-center" style="color:var(--color-olive)">Service Options</p>
                                <div class="grid grid-cols-2 gap-x-4 gap-y-3">
                                    <div><a href="/design-services/logo-design" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Logo Design</a><a href="/design-services/logo-design" class="block text-sm text-charcoal-light leading-tight hover:text-sunburst transition-colors">Concept to final files</a></div>
                                    <div><a href="/design-services/graphic-design" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Layout/Graphic Design</a><a href="/design-services/graphic-design" class="block text-sm text-charcoal-light leading-tight hover:text-sunburst transition-colors">Online designer & catalogs</a></div>
                                    <div><a href="/design-services/custom-storefronts" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Custom Storefronts</a><a href="/design-services/custom-storefronts" class="block text-sm text-charcoal-light leading-tight hover:text-sunburst transition-colors">Branded stores for schools & businesses</a></div>
                                </div>
                            </div>
                            <x-layout.mega-menu-ad
                                image="/images/custom-shirts/top5pct-custom-embroidery-shops-near-me-joliet.jpg"
                                alt="Professional design services"
                                tag="Print-Ready Files"
                                title="Pro Design Team"
                                desc="Logos, layouts, and custom artwork. Fast turnaround."
                                cta="Get Designed"
                                href="/design-services"
                            />
                        </div>
                    </div>
                </div>

                {{-- ══ About Us ══════════════════════════════════════════════ --}}
                <div
                    class="self-stretch flex items-stretch"
                    @mouseenter="openMenu = 'about'"
                    @mouseleave="openMenu = null"
                >
                    <a href="/company" class="px-2 h-full text-lg font-semibold whitespace-nowrap inline-flex items-center gap-0.5 {{ $currentPage === 'about' ? 'text-azure' : 'text-charcoal hover:text-sunburst' }} transition-colors">
                        About Us
                        <svg class="w-3 h-3 shrink-0 transition-transform duration-200 transform-gpu pointer-events-none" :class="openMenu === 'about' ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                    </a>
                    <div
                        x-cloak x-show="openMenu === 'about'"
                        x-transition:enter="transition ease-out duration-150"
                        x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        class="absolute top-full right-0 z-50 pt-2 -mt-2"
                        style="width: 760px; max-width: calc(100vw - 20px);"
                    >
                        <div class="flex items-stretch bg-white shadow-gold-xl border-t-[6px] border-sunburst">
                            <div class="flex-1 pl-5 py-5 min-w-0">
                                <a href="/company" class="flex items-center gap-2 pb-2 mb-2 border-b border-linen-dark group">
                                    <span class="font-bold text-lg text-charcoal group-hover:text-sunburst transition-colors whitespace-nowrap">About Us</span>
                                    <span class="text-sm text-charcoal-light">Veteran-owned in Joliet, IL — quality custom printing since 2017.</span>
                                    <svg class="w-4 h-4 text-sunburst shrink-0 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                </a>
                                <p class="text-xs font-bold uppercase tracking-widest mb-2 text-center" style="color:var(--color-olive)">Our Company</p>
                                <div class="grid grid-cols-2 gap-x-4 gap-y-3">
                                    <div><a href="/about" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">About Us</a><a href="/about" class="block text-sm text-charcoal-light leading-tight hover:text-sunburst transition-colors">Our mission & team</a></div>
                                    <div><a href="/company" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Company</a><a href="/company" class="block text-sm text-charcoal-light leading-tight hover:text-sunburst transition-colors">Veteran-owned story</a></div>
                                    <div><a href="/portfolio" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Portfolio</a><a href="/portfolio" class="block text-sm text-charcoal-light leading-tight hover:text-sunburst transition-colors">View our past work</a></div>
                                    <div><a href="/resources" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Resources</a><a href="/resources" class="block text-sm text-charcoal-light leading-tight hover:text-sunburst transition-colors">Tips & helpful guides</a></div>
                                </div>
                            </div>
                            <x-layout.mega-menu-ad
                                image="/images/about-preview.jpg"
                                alt="Veteran owned Joliet IL"
                                tag="Veteran Owned"
                                title="Top 5 Percent"
                                desc="Joliet, IL. Serving our community since 2017."
                                cta="Our Story"
                                href="/company"
                            />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- Backdrop (click-outside to close) --}}
    <div
        x-cloak
        x-show="openMenu !== null"
        @click="openMenu = null"
        class="fixed inset-0 z-40"
        x-transition:enter="transition-opacity ease-out duration-150"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition-opacity ease-in duration-100"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
    ></div>

    {{-- ===================================================================
         MOBILE MENU — Accordion
         ================================================================== --}}
    <div x-cloak x-show="mobileMenuOpen" x-transition class="lg:hidden border-t border-linen-dark">
        <div class="max-w-7xl mx-auto px-4 py-4 space-y-1">

            <a href="/" class="block px-3 py-2.5 text-sm font-semibold text-charcoal hover:text-sunburst hover:bg-linen rounded transition-colors">Home</a>

            <div>
                <button @click="openMobile = openMobile === 'apparel' ? null : 'apparel'" class="w-full flex items-center justify-between px-3 py-2.5 text-sm font-semibold text-charcoal hover:text-sunburst hover:bg-linen rounded transition-colors">
                    <span>Custom Apparel</span>
                    <svg class="w-4 h-4 transition-transform duration-200" :class="openMobile === 'apparel' ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="openMobile === 'apparel'" x-transition class="pl-4 pt-1 pb-2 space-y-1 border-l-2 border-sunburst ml-3">
                    <a href="/custom-apparel" class="block px-3 py-1.5 text-sm font-bold text-sunburst">View All</a>
                    <a href="/custom-apparel/custom-shirts" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Custom Shirts</a>
                    <a href="/custom-apparel/dtf-transfers" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">DTF Transfers</a>
                    <a href="/custom-apparel/dye-sublimation" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Dye Sublimation</a>
                    <a href="/custom-apparel/screen-printing" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Screen Printing</a>
                    <a href="/custom-apparel/embroidery" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Embroidery</a>
                    <a href="/custom-apparel/puff-shirts" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Puff Print Shirts</a>
                    <a href="/custom-apparel/glitter-shirts" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Glitter Shirts</a>
                    <a href="/custom-apparel/rhinestone-shirts" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Rhinestone Shirts</a>
                    <a href="/custom-apparel/vinyl-shirts" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Vinyl Shirts</a>
                    <a href="/custom-apparel/foil-shirts" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Foil Shirts</a>
                    <a href="/custom-apparel/glow-in-the-dark-shirts" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Glow in the Dark</a>
                    <a href="/custom-apparel/flock-shirts" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Flock Shirts</a>
                    <a href="/custom-apparel/reflective-shirts" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Reflective Shirts</a>
                    <a href="/custom-apparel/holographic-shirts" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Holographic Shirts</a>
                    <a href="/custom-apparel/corporate-wear-shirts" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Corporate Wear</a>
                    <a href="/custom-apparel/spirit-wear-shirts" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Spirit Wear</a>
                    <a href="/custom-apparel/reunion-shirts" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Reunion Shirts</a>
                </div>
            </div>

            <div>
                <button @click="openMobile = openMobile === 'signs' ? null : 'signs'" class="w-full flex items-center justify-between px-3 py-2.5 text-sm font-semibold text-charcoal hover:text-sunburst hover:bg-linen rounded transition-colors">
                    <span>Select a Sign</span>
                    <svg class="w-4 h-4 transition-transform duration-200" :class="openMobile === 'signs' ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="openMobile === 'signs'" x-transition class="pl-4 pt-1 pb-2 space-y-1 border-l-2 border-sunburst ml-3">
                    <a href="/signs" class="block px-3 py-1.5 text-sm font-bold text-sunburst">View All Signs</a>
                    <a href="/signs/banners" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Banners</a>
                    <a href="/signs/business-signs" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Business Signs</a>
                    <a href="/signs/yard-signs" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Yard Signs</a>
                    <a href="/signs/sidewalk-signs" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Sidewalk Signs</a>
                    <a href="/signs/parking-signs" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Parking Signs</a>
                    <a href="/signs/window-signs" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Window Signs</a>
                    <a href="/signs/wall-signs" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Wall Signs</a>
                    <a href="/signs/floor-signs" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Floor Signs</a>
                    <a href="/signs/door-signs" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Door Signs</a>
                    <a href="/signs/posters" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Posters</a>
                    <a href="/signs/table-runners" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Table Runners</a>
                    <a href="/signs/table-cloths" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Table Cloths</a>
                </div>
            </div>

            <div>
                <button @click="openMobile = openMobile === 'stickers' ? null : 'stickers'" class="w-full flex items-center justify-between px-3 py-2.5 text-sm font-semibold text-charcoal hover:text-sunburst hover:bg-linen rounded transition-colors">
                    <span>Stickers</span>
                    <svg class="w-4 h-4 transition-transform duration-200" :class="openMobile === 'stickers' ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="openMobile === 'stickers'" x-transition class="pl-4 pt-1 pb-2 space-y-1 border-l-2 border-sunburst ml-3">
                    <a href="/stickers" class="block px-3 py-1.5 text-sm font-bold text-sunburst">View All Stickers</a>
                    <a href="/stickers/standard-stickers" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Standard Stickers</a>
                    <a href="/stickers/custom-shaped-stickers" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Custom Shaped Stickers</a>
                </div>
            </div>

            <div>
                <button @click="openMobile = openMobile === 'vehicle' ? null : 'vehicle'" class="w-full flex items-center justify-between px-3 py-2.5 text-sm font-semibold text-charcoal hover:text-sunburst hover:bg-linen rounded transition-colors">
                    <span>Vehicle Decals</span>
                    <svg class="w-4 h-4 transition-transform duration-200" :class="openMobile === 'vehicle' ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="openMobile === 'vehicle'" x-transition class="pl-4 pt-1 pb-2 space-y-1 border-l-2 border-sunburst ml-3">
                    <a href="/vehicle-graphics" class="block px-3 py-1.5 text-sm font-bold text-sunburst">View All Vehicle Decals</a>
                    <a href="/vehicle-graphics/automobile-graphics" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Automobile Graphics</a>
                    <a href="/vehicle-graphics/vehicle-magnets" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Vehicle Magnets</a>
                    <a href="/vehicle-graphics/dot-decals" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">DOT Decals</a>
                </div>
            </div>

            <div>
                <button @click="openMobile = openMobile === 'promo' ? null : 'promo'" class="w-full flex items-center justify-between px-3 py-2.5 text-sm font-semibold text-charcoal hover:text-sunburst hover:bg-linen rounded transition-colors">
                    <span>Promo Items</span>
                    <svg class="w-4 h-4 transition-transform duration-200" :class="openMobile === 'promo' ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="openMobile === 'promo'" x-transition class="pl-4 pt-1 pb-2 space-y-1 border-l-2 border-sunburst ml-3">
                    <a href="/promotional-items" class="block px-3 py-1.5 text-sm font-bold text-sunburst">View All Promo Items</a>
                    <a href="/promotional-items/mugs" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Custom Mugs</a>
                    <a href="/promotional-items/can-koozies" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Can Koozies</a>
                    <a href="/promotional-items/towels" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Towels</a>
                    <a href="/promotional-items/drink-coasters" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Drink Coasters</a>
                    <a href="/promotional-items/tote-bags" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Tote Bags</a>
                    <a href="/promotional-items/mouse-pads" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Mouse Pads</a>
                </div>
            </div>

            <div>
                <button @click="openMobile = openMobile === 'design' ? null : 'design'" class="w-full flex items-center justify-between px-3 py-2.5 text-sm font-semibold text-charcoal hover:text-sunburst hover:bg-linen rounded transition-colors">
                    <span>Design Services</span>
                    <svg class="w-4 h-4 transition-transform duration-200" :class="openMobile === 'design' ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="openMobile === 'design'" x-transition class="pl-4 pt-1 pb-2 space-y-1 border-l-2 border-sunburst ml-3">
                    <a href="/design-services" class="block px-3 py-1.5 text-sm font-bold text-sunburst">View All Design Services</a>
                    <a href="/design-services/logo-design" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Logo Design</a>
                    <a href="/design-services/graphic-design" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Layout / Graphic Design</a>
                    <a href="/design-services/custom-storefronts" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Custom Storefronts</a>
                </div>
            </div>

            <a href="/top5pct-merchandise" class="block px-3 py-2.5 text-sm font-semibold text-charcoal hover:text-sunburst hover:bg-linen rounded transition-colors">Top 5% Merchandise</a>
        </div>
    </div>
</nav>
