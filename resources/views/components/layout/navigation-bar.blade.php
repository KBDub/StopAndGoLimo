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
                            <div class="flex-1 px-5 py-5 min-w-0">
                                <a href="/custom-apparel" class="flex items-center gap-2 pb-3 mb-4 border-b border-linen-dark group">
                                    <span class="font-bold text-base text-charcoal group-hover:text-sunburst transition-colors">Overview</span>
                                    <span class="text-sm text-charcoal-light truncate">All custom shirts, hoodies, caps & apparel</span>
                                    <svg class="w-4 h-4 ml-auto text-sunburst shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                </a>
                                <div class="space-y-4">
                                    {{-- Row 1 --}}
                                    <div class="grid grid-cols-2 gap-x-6 pb-4 border-b border-linen-dark">
                                        <div>
                                            <p class="text-xs font-bold uppercase tracking-widest mb-2" style="color:var(--color-olive)">Printing Options</p>
                                            <div class="flex flex-wrap gap-x-3 gap-y-1">
                                                <a href="/custom-apparel/dtf-transfers" class="text-sm font-semibold text-charcoal hover:text-sunburst transition-colors whitespace-nowrap">Direct to Film (DTF)</a>
                                                <a href="/custom-apparel/dye-sublimation" class="text-sm font-semibold text-charcoal hover:text-sunburst transition-colors whitespace-nowrap">Dye-Sublimation</a>
                                                <a href="/custom-apparel/screen-printing" class="text-sm font-semibold text-charcoal hover:text-sunburst transition-colors whitespace-nowrap">Screen Printing</a>
                                                <a href="/custom-apparel/embroidery" class="text-sm font-semibold text-charcoal hover:text-sunburst transition-colors whitespace-nowrap">Embroidery</a>
                                                <a href="/custom-apparel/rhinestone-shirts" class="text-sm font-semibold text-charcoal hover:text-sunburst transition-colors whitespace-nowrap">Rhinestone</a>
                                                <a href="/custom-apparel/vinyl-shirts" class="text-sm font-semibold text-charcoal hover:text-sunburst transition-colors whitespace-nowrap">Digital Vinyl</a>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="text-xs font-bold uppercase tracking-widest mb-2" style="color:var(--color-olive)">Specialty Materials</p>
                                            <div class="flex flex-wrap gap-x-3 gap-y-1">
                                                <a href="/custom-apparel/glitter-shirts" class="text-sm font-semibold text-charcoal hover:text-sunburst transition-colors whitespace-nowrap">Glitter</a>
                                                <a href="/custom-apparel/puff-shirts" class="text-sm font-semibold text-charcoal hover:text-sunburst transition-colors whitespace-nowrap">Puff</a>
                                                <a href="/custom-apparel/glow-in-the-dark-shirts" class="text-sm font-semibold text-charcoal hover:text-sunburst transition-colors whitespace-nowrap">Glow in the Dark</a>
                                                <a href="/custom-apparel/flock-shirts" class="text-sm font-semibold text-charcoal hover:text-sunburst transition-colors whitespace-nowrap">Flock</a>
                                                <a href="/custom-apparel/brick-shirts" class="text-sm font-semibold text-charcoal hover:text-sunburst transition-colors whitespace-nowrap">Brick</a>
                                                <a href="/custom-apparel/holographic-shirts" class="text-sm font-semibold text-charcoal hover:text-sunburst transition-colors whitespace-nowrap">Holographic</a>
                                                <a href="/custom-apparel/foil-shirts" class="text-sm font-semibold text-charcoal hover:text-sunburst transition-colors whitespace-nowrap">Foil</a>
                                                <a href="/custom-apparel/reflective-shirts" class="text-sm font-semibold text-charcoal hover:text-sunburst transition-colors whitespace-nowrap">Reflective</a>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Row 2 --}}
                                    <div class="grid grid-cols-2 gap-x-6">
                                        <div>
                                            <p class="text-xs font-bold uppercase tracking-widest mb-2" style="color:var(--color-olive)">Group Shirts</p>
                                            <div class="flex flex-wrap gap-x-3 gap-y-1">
                                                <a href="/custom-apparel/reunion-shirts" class="text-sm font-semibold text-charcoal hover:text-sunburst transition-colors whitespace-nowrap">Family Reunion</a>
                                                <a href="/custom-apparel/spirit-wear-shirts" class="text-sm font-semibold text-charcoal hover:text-sunburst transition-colors whitespace-nowrap">Spirit Wear</a>
                                                <a href="/custom-apparel/corporate-wear-shirts" class="text-sm font-semibold text-charcoal hover:text-sunburst transition-colors whitespace-nowrap">Corporate Wear</a>
                                            </div>
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
                            <div class="flex-1 px-5 py-5 min-w-0">
                                <a href="/signs" class="flex items-center gap-2 pb-3 mb-4 border-b border-linen-dark group">
                                    <span class="font-bold text-base text-charcoal group-hover:text-sunburst transition-colors">Overview</span>
                                    <span class="text-sm text-charcoal-light truncate">All banners, signs, and surface graphics</span>
                                    <svg class="w-4 h-4 ml-auto text-sunburst shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                </a>
                                <div class="space-y-4">
                                    {{-- Row 1 --}}
                                    <div class="grid grid-cols-2 gap-x-6 pb-4 border-b border-linen-dark">
                                        <div>
                                            <p class="text-xs font-bold uppercase tracking-widest mb-2" style="color:var(--color-olive)">Business Signs</p>
                                            <div class="flex flex-wrap gap-x-3 gap-y-1">
                                                <a href="/signs/banners" class="text-sm font-semibold text-charcoal hover:text-sunburst transition-colors whitespace-nowrap">Banners</a>
                                                <a href="/signs/window-signs" class="text-sm font-semibold text-charcoal hover:text-sunburst transition-colors whitespace-nowrap">Window Signs</a>
                                                <a href="/signs/wall-signs" class="text-sm font-semibold text-charcoal hover:text-sunburst transition-colors whitespace-nowrap">Wall Signs</a>
                                                <a href="/signs/floor-signs" class="text-sm font-semibold text-charcoal hover:text-sunburst transition-colors whitespace-nowrap">Floor Signs</a>
                                                <a href="/signs/door-signs" class="text-sm font-semibold text-charcoal hover:text-sunburst transition-colors whitespace-nowrap">Door Signs</a>
                                                <a href="/signs/posters" class="text-sm font-semibold text-charcoal hover:text-sunburst transition-colors whitespace-nowrap">Posters</a>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="text-xs font-bold uppercase tracking-widest mb-2" style="color:var(--color-olive)">Ground Signs</p>
                                            <div class="flex flex-wrap gap-x-3 gap-y-1">
                                                <a href="/signs/yard-signs" class="text-sm font-semibold text-charcoal hover:text-sunburst transition-colors whitespace-nowrap">Yard Signs</a>
                                                <a href="/signs/sidewalk-signs" class="text-sm font-semibold text-charcoal hover:text-sunburst transition-colors whitespace-nowrap">A-Frame/Sidewalk Signs</a>
                                                <a href="/signs/parking-signs" class="text-sm font-semibold text-charcoal hover:text-sunburst transition-colors whitespace-nowrap">Parking Signs</a>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Row 2 --}}
                                    <div class="grid grid-cols-2 gap-x-6">
                                        <div>
                                            <p class="text-xs font-bold uppercase tracking-widest mb-2" style="color:var(--color-olive)">Table Signs</p>
                                            <div class="flex flex-wrap gap-x-3 gap-y-1">
                                                <a href="/signs/table-cloths" class="text-sm font-semibold text-charcoal hover:text-sunburst transition-colors whitespace-nowrap">Table Cloths</a>
                                                <a href="/signs/table-runners" class="text-sm font-semibold text-charcoal hover:text-sunburst transition-colors whitespace-nowrap">Table Runners</a>
                                            </div>
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
                            <div class="flex-1 px-5 py-5 min-w-0">
                                <a href="/stickers" class="flex items-center gap-2 pb-3 mb-4 border-b border-linen-dark group">
                                    <span class="font-bold text-base text-charcoal group-hover:text-sunburst transition-colors">Overview</span>
                                    <span class="text-sm text-charcoal-light truncate">All custom vinyl stickers and labels</span>
                                    <svg class="w-4 h-4 ml-auto text-sunburst shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                </a>
                                <div class="flex flex-wrap gap-x-4 gap-y-1.5">
                                    <a href="/stickers/standard-stickers" class="text-sm font-semibold text-charcoal hover:text-sunburst transition-colors whitespace-nowrap">Standard</a>
                                    <a href="/stickers/custom-shaped-stickers" class="text-sm font-semibold text-charcoal hover:text-sunburst transition-colors whitespace-nowrap">Custom Shaped</a>
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
                            <div class="flex-1 px-5 py-5 min-w-0">
                                <a href="/vehicle-graphics" class="flex items-center gap-2 pb-3 mb-4 border-b border-linen-dark group">
                                    <span class="font-bold text-base text-charcoal group-hover:text-sunburst transition-colors">Overview</span>
                                    <span class="text-sm text-charcoal-light truncate">All vehicle graphics, wraps, and magnets</span>
                                    <svg class="w-4 h-4 ml-auto text-sunburst shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                </a>
                                <div class="flex flex-wrap gap-x-4 gap-y-1.5">
                                    <a href="/vehicle-graphics/automobile-graphics" class="text-sm font-semibold text-charcoal hover:text-sunburst transition-colors whitespace-nowrap">Automobile Graphics</a>
                                    <a href="/vehicle-graphics/vehicle-magnets" class="text-sm font-semibold text-charcoal hover:text-sunburst transition-colors whitespace-nowrap">Vehicle Magnets</a>
                                    <a href="/vehicle-graphics/dot-decals" class="text-sm font-semibold text-charcoal hover:text-sunburst transition-colors whitespace-nowrap">DOT Decals</a>
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
                            <div class="flex-1 px-5 py-5 min-w-0">
                                <a href="/promotional-items" class="flex items-center gap-2 pb-3 mb-4 border-b border-linen-dark group">
                                    <span class="font-bold text-base text-charcoal group-hover:text-sunburst transition-colors">Overview</span>
                                    <span class="text-sm text-charcoal-light truncate">All branded promotional products</span>
                                    <svg class="w-4 h-4 ml-auto text-sunburst shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                </a>
                                <p class="text-xs font-bold uppercase tracking-widest mb-2" style="color:var(--color-olive)">Promo Products</p>
                                <div class="flex flex-wrap gap-x-4 gap-y-1.5">
                                    <a href="/promotional-items/mugs" class="text-sm font-semibold text-charcoal hover:text-sunburst transition-colors whitespace-nowrap">Mugs</a>
                                    <a href="/promotional-items/can-koozies" class="text-sm font-semibold text-charcoal hover:text-sunburst transition-colors whitespace-nowrap">Can Koozies</a>
                                    <a href="/promotional-items/towels" class="text-sm font-semibold text-charcoal hover:text-sunburst transition-colors whitespace-nowrap">Towels</a>
                                    <a href="/promotional-items/drink-coasters" class="text-sm font-semibold text-charcoal hover:text-sunburst transition-colors whitespace-nowrap">Drink Coasters</a>
                                    <a href="/promotional-items/tote-bags" class="text-sm font-semibold text-charcoal hover:text-sunburst transition-colors whitespace-nowrap">Drawstring/Tote Bags</a>
                                    <a href="/promotional-items/mouse-pads" class="text-sm font-semibold text-charcoal hover:text-sunburst transition-colors whitespace-nowrap">Mouse Pads</a>
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
                            <div class="flex-1 px-5 py-5 min-w-0">
                                <a href="/design-services" class="flex items-center gap-2 pb-3 mb-4 border-b border-linen-dark group">
                                    <span class="font-bold text-base text-charcoal group-hover:text-sunburst transition-colors">Overview</span>
                                    <span class="text-sm text-charcoal-light truncate">Design tools & professional services</span>
                                    <svg class="w-4 h-4 ml-auto text-sunburst shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                </a>
                                <div class="flex flex-wrap gap-x-4 gap-y-1.5">
                                    <a href="/design-services/logo-design" class="text-sm font-semibold text-charcoal hover:text-sunburst transition-colors whitespace-nowrap">Logo Design</a>
                                    <a href="/design-services/graphic-design" class="text-sm font-semibold text-charcoal hover:text-sunburst transition-colors whitespace-nowrap">Layout/Graphic Design</a>
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
                            <div class="flex-1 px-5 py-5 min-w-0">
                                <a href="/company" class="flex items-center gap-2 pb-3 mb-4 border-b border-linen-dark group">
                                    <span class="font-bold text-base text-charcoal group-hover:text-sunburst transition-colors">Overview</span>
                                    <span class="text-sm text-charcoal-light truncate">Learn about Top 5 Percent</span>
                                    <svg class="w-4 h-4 ml-auto text-sunburst shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                </a>
                                <div class="flex flex-wrap gap-x-4 gap-y-1.5">
                                    <a href="/about" class="text-sm font-semibold text-charcoal hover:text-sunburst transition-colors whitespace-nowrap">About Us</a>
                                    <a href="/company" class="text-sm font-semibold text-charcoal hover:text-sunburst transition-colors whitespace-nowrap">Company</a>
                                    <a href="/portfolio" class="text-sm font-semibold text-charcoal hover:text-sunburst transition-colors whitespace-nowrap">Portfolio</a>
                                    <a href="/resources" class="text-sm font-semibold text-charcoal hover:text-sunburst transition-colors whitespace-nowrap">Resources</a>
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
