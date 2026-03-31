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
                    class="relative self-stretch flex items-stretch"
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
                        style="width: 960px; max-width: calc(100vw - 20px);"
                    >
                        <div class="flex items-stretch bg-white shadow-gold-xl border-t-[6px] border-sunburst">
                            {{-- Center content --}}
                            <div class="flex-1 px-6 py-6">
                                <a href="/custom-apparel" class="flex items-center gap-2 pb-3 mb-4 border-b border-linen-dark group">
                                    <span class="font-bold text-lg text-charcoal group-hover:text-sunburst transition-colors">Overview</span>
                                    <span class="text-sm text-charcoal-light truncate">All custom shirts, hoodies, caps & apparel</span>
                                    <svg class="w-4 h-4 ml-auto text-sunburst shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                </a>
                                <div class="grid grid-cols-3 gap-x-10">
                                    <div>
                                        <p class="text-sm font-bold uppercase tracking-widest mb-4" style="color:var(--color-olive)">Printing Options</p>
                                        <div class="space-y-4">
                                            <div><a href="/custom-apparel/dtf-transfers" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors">Direct to Film (DTF)</a><p class="text-sm text-charcoal-light">High-detail heat transfers</p></div>
                                            <div><a href="/custom-apparel/dye-sublimation" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors">Dye-Sublimation</a><p class="text-sm text-charcoal-light">Edge-to-edge full color</p></div>
                                            <div><a href="/custom-apparel/screen-printing" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors">Screen Printing</a><p class="text-sm text-charcoal-light">Classic bulk production</p></div>
                                            <div><a href="/custom-apparel/embroidery" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors">Embroidery</a><p class="text-sm text-charcoal-light">Premium stitched branding</p></div>
                                            <div><a href="/custom-apparel/rhinestone-shirts" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors">Rhinestone</a><p class="text-sm text-charcoal-light">Crystal embellishments</p></div>
                                            <div><a href="/custom-apparel/vinyl-shirts" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors">Digital Vinyl</a><p class="text-sm text-charcoal-light">Sharp, durable graphics</p></div>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold uppercase tracking-widest mb-4" style="color:var(--color-olive)">Specialty Materials</p>
                                        <div class="space-y-4">
                                            <div><a href="/custom-apparel/glitter-shirts" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors">Glitter</a><p class="text-sm text-charcoal-light">Shimmer and sparkle</p></div>
                                            <div><a href="/custom-apparel/puff-shirts" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors">Puff</a><p class="text-sm text-charcoal-light">Raised 3D texture</p></div>
                                            <div><a href="/custom-apparel/glow-in-the-dark-shirts" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors">Glow in the Dark</a><p class="text-sm text-charcoal-light">Luminous night effects</p></div>
                                            <div><a href="/custom-apparel/flock-shirts" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors">Flock</a><p class="text-sm text-charcoal-light">Velvet-like soft feel</p></div>
                                            <div><a href="/custom-apparel/brick-shirts" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors">Brick</a><p class="text-sm text-charcoal-light">Extra thick, bold look</p></div>
                                            <div><a href="/custom-apparel/holographic-shirts" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors">Holographic</a><p class="text-sm text-charcoal-light">Iridescent color shifting</p></div>
                                            <div><a href="/custom-apparel/foil-shirts" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors">Foil</a><p class="text-sm text-charcoal-light">Shiny metallic finish</p></div>
                                            <div><a href="/custom-apparel/reflective-shirts" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors">Reflective</a><p class="text-sm text-charcoal-light">High-visibility safety</p></div>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold uppercase tracking-widest mb-4" style="color:var(--color-olive)">Group Shirts</p>
                                        <div class="space-y-4">
                                            <div><a href="/custom-apparel/reunion-shirts" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors">Family Reunion</a><p class="text-sm text-charcoal-light">Custom matching apparel</p></div>
                                            <div><a href="/custom-apparel/spirit-wear-shirts" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors">Spirit Wear</a><p class="text-sm text-charcoal-light">School and sports fans</p></div>
                                            <div><a href="/custom-apparel/corporate-wear-shirts" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors">Corporate Wear</a><p class="text-sm text-charcoal-light">Branded staff uniforms</p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Right ad panel --}}
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
                    class="relative self-stretch flex items-stretch"
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
                        style="width: 960px; max-width: calc(100vw - 20px);"
                    >
                        <div class="flex items-stretch bg-white shadow-gold-xl border-t-[6px] border-sunburst">
                            <div class="flex-1 px-6 py-6">
                                <a href="/signs" class="flex items-center gap-2 pb-3 mb-4 border-b border-linen-dark group">
                                    <span class="font-bold text-lg text-charcoal group-hover:text-sunburst transition-colors">Overview</span>
                                    <span class="text-sm text-charcoal-light truncate">All banners, signs, and surface graphics</span>
                                    <svg class="w-4 h-4 ml-auto text-sunburst shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                </a>
                                <div class="grid grid-cols-3 gap-x-10">
                                    <div>
                                        <p class="text-sm font-bold uppercase tracking-widest mb-4" style="color:var(--color-olive)">Business Signs</p>
                                        <div class="space-y-4">
                                            <div><a href="/signs/banners" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors">Banners</a><p class="text-sm text-charcoal-light">Custom vinyl banners</p></div>
                                            <div><a href="/signs/window-signs" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors">Window Signs</a><p class="text-sm text-charcoal-light">Storefront decals & perf</p></div>
                                            <div><a href="/signs/wall-signs" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors">Wall Signs</a><p class="text-sm text-charcoal-light">Interior murals & graphics</p></div>
                                            <div><a href="/signs/floor-signs" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors">Floor Signs</a><p class="text-sm text-charcoal-light">Durable surface branding</p></div>
                                            <div><a href="/signs/door-signs" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors">Door Signs</a><p class="text-sm text-charcoal-light">Hours & office identifiers</p></div>
                                            <div><a href="/signs/posters" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors">Posters</a><p class="text-sm text-charcoal-light">Large format printing</p></div>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold uppercase tracking-widest mb-4" style="color:var(--color-olive)">Ground Signs</p>
                                        <div class="space-y-4">
                                            <div><a href="/signs/yard-signs" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors">Yard Signs</a><p class="text-sm text-charcoal-light">Corrugated wire-stake signs</p></div>
                                            <div><a href="/signs/sidewalk-signs" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors">A-Frame/Sidewalk Signs</a><p class="text-sm text-charcoal-light">Portable sandwich boards</p></div>
                                            <div><a href="/signs/parking-signs" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors">Parking Signs</a><p class="text-sm text-charcoal-light">Aluminum & compliance signs</p></div>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold uppercase tracking-widest mb-4" style="color:var(--color-olive)">Table Signs</p>
                                        <div class="space-y-4">
                                            <div><a href="/signs/table-cloths" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors">Table Cloths</a><p class="text-sm text-charcoal-light">Full-color branded covers</p></div>
                                            <div><a href="/signs/table-runners" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors">Table Runners</a><p class="text-sm text-charcoal-light">Accent event branding</p></div>
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
                    class="relative self-stretch flex items-stretch"
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
                        style="width: 700px; max-width: calc(100vw - 20px);"
                    >
                        <div class="flex items-stretch bg-white shadow-gold-xl border-t-[6px] border-sunburst">
                            <div class="flex-1 px-6 py-6">
                                <a href="/stickers" class="flex items-center gap-2 pb-3 mb-4 border-b border-linen-dark group">
                                    <span class="font-bold text-lg text-charcoal group-hover:text-sunburst transition-colors">Overview</span>
                                    <span class="text-sm text-charcoal-light truncate">All custom vinyl stickers and labels</span>
                                    <svg class="w-4 h-4 ml-auto text-sunburst shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                </a>
                                <div class="grid grid-cols-2 gap-x-8 gap-y-4">
                                    <div><a href="/stickers/standard-stickers" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors">Standard</a><p class="text-sm text-charcoal-light">Round, square, and rectangle</p></div>
                                    <div><a href="/stickers/custom-shaped-stickers" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors">Custom Shaped</a><p class="text-sm text-charcoal-light">Die cut to any design shape</p></div>
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
                    class="relative self-stretch flex items-stretch"
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
                        class="absolute top-full left-0 z-50 pt-2 -mt-2"
                        style="width: 700px; max-width: calc(100vw - 20px);"
                    >
                        <div class="flex items-stretch bg-white shadow-gold-xl border-t-[6px] border-sunburst">
                            <div class="flex-1 px-6 py-6">
                                <a href="/vehicle-graphics" class="flex items-center gap-2 pb-3 mb-4 border-b border-linen-dark group">
                                    <span class="font-bold text-lg text-charcoal group-hover:text-sunburst transition-colors">Overview</span>
                                    <span class="text-sm text-charcoal-light truncate">All vehicle graphics, wraps, and magnets</span>
                                    <svg class="w-4 h-4 ml-auto text-sunburst shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                </a>
                                <div class="grid grid-cols-2 gap-x-8 gap-y-4">
                                    <div><a href="/vehicle-graphics/automobile-graphics" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors">Automobile Graphics</a><p class="text-sm text-charcoal-light">Full wraps & vinyl lettering</p></div>
                                    <div><a href="/vehicle-graphics/vehicle-magnets" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors">Vehicle Magnets</a><p class="text-sm text-charcoal-light">Removable magnetic signs</p></div>
                                    <div><a href="/vehicle-graphics/dot-decals" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors">DOT Decals</a><p class="text-sm text-charcoal-light">Compliant number lettering</p></div>
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
                    class="relative self-stretch flex items-stretch"
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
                        style="width: 700px; max-width: calc(100vw - 20px);"
                    >
                        <div class="flex items-stretch bg-white shadow-gold-xl border-t-[6px] border-sunburst">
                            <div class="flex-1 px-6 py-6">
                                <a href="/promotional-items" class="flex items-center gap-2 pb-3 mb-4 border-b border-linen-dark group">
                                    <span class="font-bold text-lg text-charcoal group-hover:text-sunburst transition-colors">Overview</span>
                                    <span class="text-sm text-charcoal-light truncate">All branded promotional products</span>
                                    <svg class="w-4 h-4 ml-auto text-sunburst shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                </a>
                                <p class="text-xs font-bold uppercase tracking-widest mb-3" style="color:var(--color-olive)">Promo Products</p>
                                <div class="grid grid-cols-2 gap-x-8 gap-y-4">
                                    <div><a href="/promotional-items/mugs" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors">Mugs</a><p class="text-sm text-charcoal-light">Full color sublimation</p></div>
                                    <div><a href="/promotional-items/can-koozies" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors">Can Koozies</a><p class="text-sm text-charcoal-light">Branded foam & neoprene</p></div>
                                    <div><a href="/promotional-items/towels" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors">Towels</a><p class="text-sm text-charcoal-light">Beach & sport towels</p></div>
                                    <div><a href="/promotional-items/drink-coasters" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors">Drink Coasters</a><p class="text-sm text-charcoal-light">Ceramic, neoprene, board</p></div>
                                    <div><a href="/promotional-items/tote-bags" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors">Drawstring/Tote Bags</a><p class="text-sm text-charcoal-light">Branded canvas bags</p></div>
                                    <div><a href="/promotional-items/mouse-pads" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors">Mouse Pads</a><p class="text-sm text-charcoal-light">Full-surface desk pads</p></div>
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
                <div class="relative self-stretch flex items-stretch">
                    <a href="/top5pct-merchandise" class="px-2 h-full text-lg font-semibold whitespace-nowrap inline-flex items-center {{ $currentPage === 'merchandise' ? 'text-azure' : 'text-charcoal hover:text-sunburst' }} transition-colors">
                        Top 5% Merchandise
                    </a>
                </div>

                {{-- ══ Design Services — RIGHT-aligned panel ════════════════ --}}
                <div
                    class="relative self-stretch flex items-stretch"
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
                        style="width: 700px; max-width: calc(100vw - 20px);"
                    >
                        <div class="flex items-stretch bg-white shadow-gold-xl border-t-[6px] border-sunburst">
                            <div class="flex-1 px-6 py-6">
                                <a href="/design-services" class="flex items-center gap-2 pb-3 mb-4 border-b border-linen-dark group">
                                    <span class="font-bold text-lg text-charcoal group-hover:text-sunburst transition-colors">Overview</span>
                                    <span class="text-sm text-charcoal-light truncate">Design tools & professional services</span>
                                    <svg class="w-4 h-4 ml-auto text-sunburst shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                </a>
                                <div class="grid grid-cols-2 gap-x-8 gap-y-4">
                                    <div><a href="/design-services/logo-design" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors">Logo Design</a><p class="text-sm text-charcoal-light">Concept to final files</p></div>
                                    <div><a href="/design-services/graphic-design" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors">Layout/Graphic Design</a><p class="text-sm text-charcoal-light">Online designer & catalogs</p></div>
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

                {{-- ══ About Us — RIGHT-aligned panel ══════════════════════ --}}
                <div
                    class="relative self-stretch flex items-stretch"
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
                        style="width: 700px; max-width: calc(100vw - 20px);"
                    >
                        <div class="flex items-stretch bg-white shadow-gold-xl border-t-[6px] border-sunburst">
                            <div class="flex-1 px-6 py-6">
                                <a href="/company" class="flex items-center gap-2 pb-3 mb-4 border-b border-linen-dark group">
                                    <span class="font-bold text-lg text-charcoal group-hover:text-sunburst transition-colors">Overview</span>
                                    <span class="text-sm text-charcoal-light truncate">Learn about Top 5 Percent</span>
                                    <svg class="w-4 h-4 ml-auto text-sunburst shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                </a>
                                <div class="grid grid-cols-2 gap-x-8 gap-y-4">
                                    <div><a href="/about" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors">About Us</a><p class="text-sm text-charcoal-light">Our mission & team</p></div>
                                    <div><a href="/company" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors">Company</a><p class="text-sm text-charcoal-light">Veteran-owned story</p></div>
                                    <div><a href="/portfolio" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors">Portfolio</a><p class="text-sm text-charcoal-light">View our past work</p></div>
                                    <div><a href="/resources" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors">Resources</a><p class="text-sm text-charcoal-light">Tips & helpful guides</p></div>
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

            <a href="/top5pct-merchandise" class="block px-3 py-2.5 text-sm font-semibold text-charcoal hover:text-sunburst hover:bg-linen rounded transition-colors">Top 5% Merchandise</a>
        </div>
    </div>
</nav>
