@props([
    'currentPage' => null
])

{{-- ===================================================================
     Mega Menu Navigation — Style 1
     Desktop: Full-width flyout panel with sub-links + right ad panel
     Mobile:  Accordion collapsible sections
     ================================================================== --}}

<nav
    class="bg-linen shadow-sm relative"
    x-data="{
        mobileMenuOpen: false,
        openMenu: null,
        scrolled: false,
        setMenu(name) { this.openMenu = this.openMenu === name ? null : name },
        openMobile: null
    }"
    x-on:scroll.window="if (window.scrollY > 50) { scrolled = true } else { scrolled = false; openMenu = null }"
    x-on:keydown.escape.window="openMenu = null; mobileMenuOpen = false"
>
    {{-- ── Top Bar ─────────────────────────────────────────────────────── --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex items-center justify-between transition-all duration-300" x-bind:class="scrolled ? 'py-1' : 'py-2'">

            {{-- Logo --}}
            <a href="/" class="flex items-center flex-shrink-0">
                <img
                    src="/images/logos/top5-logo.gif"
                    alt="Top 5 Percent — Custom Signage & Apparel Joliet IL"
                    class="transition-all duration-300"
                    x-bind:class="scrolled ? 'h-14' : 'h-24'"
                >
            </a>

            {{-- Mobile hamburger --}}
            <button
                @click="mobileMenuOpen = !mobileMenuOpen"
                class="lg:hidden p-2 text-charcoal hover:text-sunburst"
                aria-label="Toggle menu"
            >
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>

            {{-- ── Desktop Nav Links ───────────────────────────────────── --}}
            <div class="hidden lg:flex items-center gap-0">

                {{-- Home --}}
                <a href="/" class="px-2 py-2 text-sm font-semibold whitespace-nowrap {{ $currentPage === 'home' ? 'text-azure' : 'text-charcoal hover:text-sunburst' }} transition-colors">Home</a>

                {{-- Custom Apparel --}}
                <div
                    class="relative"
                    @mouseenter="openMenu = 'apparel'"
                    @mouseleave="openMenu = null"
                >
                    <a href="/custom-apparel" class="px-2 py-2 text-sm font-semibold whitespace-nowrap inline-flex items-center gap-0.5 {{ $currentPage === 'custom-apparel' ? 'text-azure' : 'text-charcoal hover:text-sunburst' }} transition-colors">
                        Custom Apparel
                        <svg class="w-3 h-3 shrink-0 transition-transform duration-200" :class="openMenu === 'apparel' ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                    </a>
                </div>

                {{-- Select a Sign --}}
                <div
                    class="relative"
                    @mouseenter="openMenu = 'signs'"
                    @mouseleave="openMenu = null"
                >
                    <a href="/signs" class="px-2 py-2 text-sm font-semibold whitespace-nowrap inline-flex items-center gap-0.5 {{ $currentPage === 'signs' ? 'text-azure' : 'text-charcoal hover:text-sunburst' }} transition-colors">
                        Select a Sign
                        <svg class="w-3 h-3 shrink-0 transition-transform duration-200" :class="openMenu === 'signs' ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                    </a>
                </div>

                {{-- Stickers --}}
                <div
                    class="relative"
                    @mouseenter="openMenu = 'stickers'"
                    @mouseleave="openMenu = null"
                >
                    <a href="/stickers" class="px-2 py-2 text-sm font-semibold whitespace-nowrap inline-flex items-center gap-0.5 {{ $currentPage === 'stickers' ? 'text-azure' : 'text-charcoal hover:text-sunburst' }} transition-colors">
                        Stickers
                        <svg class="w-3 h-3 shrink-0 transition-transform duration-200" :class="openMenu === 'stickers' ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                    </a>
                </div>

                {{-- Vehicle Decals --}}
                <div
                    class="relative"
                    @mouseenter="openMenu = 'vehicle'"
                    @mouseleave="openMenu = null"
                >
                    <a href="/vehicle-graphics" class="px-2 py-2 text-sm font-semibold whitespace-nowrap inline-flex items-center gap-0.5 {{ $currentPage === 'vehicle-graphics' ? 'text-azure' : 'text-charcoal hover:text-sunburst' }} transition-colors">
                        Vehicle Decals
                        <svg class="w-3 h-3 shrink-0 transition-transform duration-200" :class="openMenu === 'vehicle' ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                    </a>
                </div>

                {{-- Promotional Items --}}
                <div
                    class="relative"
                    @mouseenter="openMenu = 'promo'"
                    @mouseleave="openMenu = null"
                >
                    <a href="/promotional-items" class="px-2 py-2 text-sm font-semibold whitespace-nowrap inline-flex items-center gap-0.5 {{ $currentPage === 'promotional-items' ? 'text-azure' : 'text-charcoal hover:text-sunburst' }} transition-colors">
                        Promo Items
                        <svg class="w-3 h-3 shrink-0 transition-transform duration-200" :class="openMenu === 'promo' ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                    </a>
                </div>

                {{-- Design Services --}}
                <div
                    class="relative"
                    @mouseenter="openMenu = 'design'"
                    @mouseleave="openMenu = null"
                >
                    <a href="/design-services" class="px-2 py-2 text-sm font-semibold whitespace-nowrap inline-flex items-center gap-0.5 {{ $currentPage === 'design-services' ? 'text-azure' : 'text-charcoal hover:text-sunburst' }} transition-colors">
                        Design Services
                        <svg class="w-3 h-3 shrink-0 transition-transform duration-200" :class="openMenu === 'design' ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                    </a>
                </div>

                {{-- About --}}
                <div
                    class="relative"
                    @mouseenter="openMenu = 'about'"
                    @mouseleave="openMenu = null"
                >
                    <a href="/company" class="px-2 py-2 text-sm font-semibold whitespace-nowrap inline-flex items-center gap-0.5 {{ in_array($currentPage, ['about']) ? 'text-azure' : 'text-charcoal hover:text-sunburst' }} transition-colors">
                        About Us
                        <svg class="w-3 h-3 shrink-0 transition-transform duration-200" :class="openMenu === 'about' ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                    </a>
                </div>

                {{-- Contact CTA --}}
                <a href="/contact" class="ml-2 px-4 py-2 text-sm font-bold bg-sunburst text-charcoal hover:bg-sunburst-dark transition-colors whitespace-nowrap">
                    Free Quote
                </a>

            </div>
        </div>
    </div>

    {{-- ===================================================================
         MEGA MENU PANELS (Desktop)
         Full-width panels, anchored to nav, appear on hover
         Each panel: left = columns of links | right = ad panel
         ================================================================== --}}

    {{-- Overlay backdrop --}}
    <div
        x-cloak
        x-show="openMenu !== null"
        @click="openMenu = null"
        class="fixed inset-0 z-30"
        style="top: 0"
        x-transition:enter="transition-opacity ease-out duration-150"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition-opacity ease-in duration-100"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
    ></div>

    {{-- ── Custom Apparel Panel ────────────────────────────────────────── --}}
    <div
        x-cloak
        x-show="openMenu === 'apparel'"
        @mouseenter="openMenu = 'apparel'"
        @mouseleave="openMenu = null"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        class="absolute left-0 right-0 z-40 bg-white shadow-2xl border-t-2 border-sunburst"
    >
        <div class="max-w-7xl mx-auto px-6 py-8">
            <div class="flex gap-8">
                {{-- Left: sub-link columns --}}
                <div class="flex-1 grid grid-cols-3 gap-6">
                    <div>
                        <p class="text-xs font-bold text-charcoal-light uppercase tracking-widest mb-3 border-b border-linen-dark pb-2">Print Methods</p>
                        <ul class="space-y-2">
                            <li><a href="/custom-apparel/custom-shirts" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">Custom Shirts</a></li>
                            <li><a href="/custom-apparel/dtf-transfers" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">DTF Transfers</a></li>
                            <li><a href="/custom-apparel/dye-sublimation" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">Dye Sublimation</a></li>
                            <li><a href="/custom-apparel/screen-printing" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">Screen Printing</a></li>
                            <li><a href="/custom-apparel/embroidery" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">Embroidery</a></li>
                            <li><a href="/custom-apparel/puff-shirts" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">Puff Print Shirts</a></li>
                        </ul>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-charcoal-light uppercase tracking-widest mb-3 border-b border-linen-dark pb-2">Specialty Styles</p>
                        <ul class="space-y-2">
                            <li><a href="/custom-apparel/vinyl-shirts" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">Vinyl Shirts</a></li>
                            <li><a href="/custom-apparel/rhinestone-shirts" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">Rhinestone Shirts</a></li>
                            <li><a href="/custom-apparel/glitter-shirts" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">Glitter Shirts</a></li>
                            <li><a href="/custom-apparel/foil-shirts" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">Foil Shirts</a></li>
                            <li><a href="/custom-apparel/glow-in-the-dark-shirts" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">Glow in the Dark</a></li>
                            <li><a href="/custom-apparel/flock-shirts" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">Flock Shirts</a></li>
                            <li><a href="/custom-apparel/reflective-shirts" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">Reflective Shirts</a></li>
                            <li><a href="/custom-apparel/holographic-shirts" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">Holographic Shirts</a></li>
                            <li><a href="/custom-apparel/brick-shirts" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">Brick Print Shirts</a></li>
                            <li><a href="/custom-apparel/pattern-shirts" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">Pattern Shirts</a></li>
                            <li><a href="/custom-apparel/picture-shirts" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">Picture Shirts</a></li>
                        </ul>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-charcoal-light uppercase tracking-widest mb-3 border-b border-linen-dark pb-2">Teams & Organizations</p>
                        <ul class="space-y-2">
                            <li><a href="/custom-apparel/corporate-wear-shirts" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">Corporate Wear Shirts</a></li>
                            <li><a href="/custom-apparel/spirit-wear-shirts" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">Spirit Wear Shirts</a></li>
                            <li><a href="/custom-apparel/reunion-shirts" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">Reunion Shirts</a></li>
                        </ul>
                        <div class="mt-6">
                            <a href="/custom-apparel" class="inline-flex items-center gap-1 text-sm font-bold text-sunburst hover:text-sunburst-dark transition-colors">
                                View All Custom Apparel
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- Right: Ad panel --}}
                <div class="w-64 flex-shrink-0">
                    @include('components.layout.mega-menu-ad', [
                        'image' => '/images/custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg',
                        'alt'   => 'Custom shirts, hoodies, and caps in Joliet IL',
                        'tag'   => 'Same Day Available',
                        'title' => 'Custom Shirts & Apparel',
                        'desc'  => 'Any style. Any print method. Veteran owned in Joliet, IL.',
                        'cta'   => 'Shop Apparel',
                        'href'  => '/custom-apparel',
                    ])
                </div>
            </div>
        </div>
    </div>

    {{-- ── Select a Sign Panel ─────────────────────────────────────────── --}}
    <div
        x-cloak
        x-show="openMenu === 'signs'"
        @mouseenter="openMenu = 'signs'"
        @mouseleave="openMenu = null"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        class="absolute left-0 right-0 z-40 bg-white shadow-2xl border-t-2 border-sunburst"
    >
        <div class="max-w-7xl mx-auto px-6 py-8">
            <div class="flex gap-8">
                <div class="flex-1 grid grid-cols-3 gap-6">
                    <div>
                        <p class="text-xs font-bold text-charcoal-light uppercase tracking-widest mb-3 border-b border-linen-dark pb-2">Outdoor Signs</p>
                        <ul class="space-y-2">
                            <li><a href="/signs/banners" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">Banners</a></li>
                            <li><a href="/signs/yard-signs" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">Yard Signs</a></li>
                            <li><a href="/signs/sidewalk-signs" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">Sidewalk Signs</a></li>
                            <li><a href="/signs/parking-signs" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">Parking Signs</a></li>
                        </ul>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-charcoal-light uppercase tracking-widest mb-3 border-b border-linen-dark pb-2">Indoor Displays</p>
                        <ul class="space-y-2">
                            <li><a href="/signs/business-signs" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">Business Signs</a></li>
                            <li><a href="/signs/posters" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">Posters</a></li>
                            <li><a href="/signs/table-runners" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">Table Runners</a></li>
                            <li><a href="/signs/table-cloths" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">Table Cloths</a></li>
                        </ul>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-charcoal-light uppercase tracking-widest mb-3 border-b border-linen-dark pb-2">Surface Graphics</p>
                        <ul class="space-y-2">
                            <li><a href="/signs/window-signs" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">Window Signs</a></li>
                            <li><a href="/signs/wall-signs" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">Wall Signs & Murals</a></li>
                            <li><a href="/signs/floor-signs" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">Floor Signs</a></li>
                            <li><a href="/signs/door-signs" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">Door Signs</a></li>
                        </ul>
                        <div class="mt-6">
                            <a href="/signs" class="inline-flex items-center gap-1 text-sm font-bold text-sunburst hover:text-sunburst-dark transition-colors">
                                View All Signs
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-64 flex-shrink-0">
                    @include('components.layout.mega-menu-ad', [
                        'image' => '/images/window-wall-floor-decals/top5pct-banner-wall-decal-door-signs-joliet.jpg',
                        'alt'   => 'Custom business signs and wall decals in Joliet IL',
                        'tag'   => 'Indoor & Outdoor',
                        'title' => 'Signs for Every Space',
                        'desc'  => 'Banners, wall graphics, yard signs, and more.',
                        'cta'   => 'Browse Signs',
                        'href'  => '/signs',
                    ])
                </div>
            </div>
        </div>
    </div>

    {{-- ── Stickers Panel ──────────────────────────────────────────────── --}}
    <div
        x-cloak
        x-show="openMenu === 'stickers'"
        @mouseenter="openMenu = 'stickers'"
        @mouseleave="openMenu = null"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        class="absolute left-0 right-0 z-40 bg-white shadow-2xl border-t-2 border-sunburst"
    >
        <div class="max-w-7xl mx-auto px-6 py-8">
            <div class="flex gap-8">
                <div class="flex-1 grid grid-cols-2 gap-6">
                    <div>
                        <p class="text-xs font-bold text-charcoal-light uppercase tracking-widest mb-3 border-b border-linen-dark pb-2">Sticker Types</p>
                        <ul class="space-y-2">
                            <li><a href="/stickers/standard-stickers" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">Standard Stickers</a></li>
                            <li><a href="/stickers/custom-shaped-stickers" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">Custom Shaped Stickers</a></li>
                        </ul>
                        <div class="mt-6">
                            <a href="/stickers" class="inline-flex items-center gap-1 text-sm font-bold text-sunburst hover:text-sunburst-dark transition-colors">
                                View All Stickers
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                            </a>
                        </div>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-charcoal-light uppercase tracking-widest mb-3 border-b border-linen-dark pb-2">Why Top 5 Percent?</p>
                        <ul class="space-y-2 text-sm text-charcoal-light">
                            <li class="flex items-start gap-2"><span class="text-sunburst font-bold mt-0.5">✓</span> No minimum order quantity</li>
                            <li class="flex items-start gap-2"><span class="text-sunburst font-bold mt-0.5">✓</span> Weatherproof vinyl</li>
                            <li class="flex items-start gap-2"><span class="text-sunburst font-bold mt-0.5">✓</span> Full color printing</li>
                            <li class="flex items-start gap-2"><span class="text-sunburst font-bold mt-0.5">✓</span> Same day available</li>
                            <li class="flex items-start gap-2"><span class="text-sunburst font-bold mt-0.5">✓</span> Veteran owned & local</li>
                        </ul>
                    </div>
                </div>
                <div class="w-64 flex-shrink-0">
                    @include('components.layout.mega-menu-ad', [
                        'image' => '/images/stickers-decals/top5pct-banner-stickers-decals-joliet.jpg',
                        'alt'   => 'Custom stickers printed in Joliet IL',
                        'tag'   => 'No Minimums',
                        'title' => 'Custom Stickers',
                        'desc'  => 'Standard & die-cut custom shapes. Weatherproof vinyl.',
                        'cta'   => 'Shop Stickers',
                        'href'  => '/stickers',
                    ])
                </div>
            </div>
        </div>
    </div>

    {{-- ── Vehicle Decals Panel ────────────────────────────────────────── --}}
    <div
        x-cloak
        x-show="openMenu === 'vehicle'"
        @mouseenter="openMenu = 'vehicle'"
        @mouseleave="openMenu = null"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        class="absolute left-0 right-0 z-40 bg-white shadow-2xl border-t-2 border-sunburst"
    >
        <div class="max-w-7xl mx-auto px-6 py-8">
            <div class="flex gap-8">
                <div class="flex-1 grid grid-cols-2 gap-6">
                    <div>
                        <p class="text-xs font-bold text-charcoal-light uppercase tracking-widest mb-3 border-b border-linen-dark pb-2">Vehicle Products</p>
                        <ul class="space-y-2">
                            <li><a href="/vehicle-graphics/automobile-graphics" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">Automobile Graphics & Wraps</a></li>
                            <li><a href="/vehicle-graphics/vehicle-magnets" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">Vehicle Magnets</a></li>
                            <li><a href="/vehicle-graphics/dot-decals" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">DOT Decals</a></li>
                        </ul>
                        <div class="mt-6">
                            <a href="/vehicle-graphics" class="inline-flex items-center gap-1 text-sm font-bold text-sunburst hover:text-sunburst-dark transition-colors">
                                View All Vehicle Decals
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                            </a>
                        </div>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-charcoal-light uppercase tracking-widest mb-3 border-b border-linen-dark pb-2">Mobile Advertising</p>
                        <p class="text-sm text-charcoal-light leading-relaxed">Turn your vehicle into a moving billboard. Car wraps, vinyl lettering, and magnetic signs for businesses throughout Joliet and Will County.</p>
                    </div>
                </div>
                <div class="w-64 flex-shrink-0">
                    @include('components.layout.mega-menu-ad', [
                        'image' => '/images/automobile-graphics/top5pct-banner-vinyl-lettering-car-wraps-joliet.jpg',
                        'alt'   => 'Vehicle wraps and vinyl lettering in Joliet IL',
                        'tag'   => 'Mobile Advertising',
                        'title' => 'Vehicle Decals & Wraps',
                        'desc'  => 'Car wraps, vinyl lettering, magnets & DOT decals.',
                        'cta'   => 'Shop Vehicle Decals',
                        'href'  => '/vehicle-graphics',
                    ])
                </div>
            </div>
        </div>
    </div>

    {{-- ── Promotional Items Panel ─────────────────────────────────────── --}}
    <div
        x-cloak
        x-show="openMenu === 'promo'"
        @mouseenter="openMenu = 'promo'"
        @mouseleave="openMenu = null"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        class="absolute left-0 right-0 z-40 bg-white shadow-2xl border-t-2 border-sunburst"
    >
        <div class="max-w-7xl mx-auto px-6 py-8">
            <div class="flex gap-8">
                <div class="flex-1 grid grid-cols-2 gap-6">
                    <div>
                        <p class="text-xs font-bold text-charcoal-light uppercase tracking-widest mb-3 border-b border-linen-dark pb-2">Branded Products</p>
                        <ul class="space-y-2">
                            <li><a href="/promotional-items/mugs" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">Custom Mugs</a></li>
                            <li><a href="/promotional-items/can-koozies" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">Can Koozies</a></li>
                            <li><a href="/promotional-items/towels" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">Custom Towels</a></li>
                            <li><a href="/promotional-items/drink-coasters" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">Drink Coasters</a></li>
                            <li><a href="/promotional-items/tote-bags" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">Tote Bags</a></li>
                            <li><a href="/promotional-items/mouse-pads" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">Mouse Pads</a></li>
                        </ul>
                        <div class="mt-6">
                            <a href="/promotional-items" class="inline-flex items-center gap-1 text-sm font-bold text-sunburst hover:text-sunburst-dark transition-colors">
                                View All Promo Items
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                            </a>
                        </div>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-charcoal-light uppercase tracking-widest mb-3 border-b border-linen-dark pb-2">Perfect For</p>
                        <ul class="space-y-2 text-sm text-charcoal-light">
                            <li class="flex items-start gap-2"><span class="text-sunburst font-bold mt-0.5">✓</span> Corporate gifting</li>
                            <li class="flex items-start gap-2"><span class="text-sunburst font-bold mt-0.5">✓</span> Trade shows & events</li>
                            <li class="flex items-start gap-2"><span class="text-sunburst font-bold mt-0.5">✓</span> Employee recognition</li>
                            <li class="flex items-start gap-2"><span class="text-sunburst font-bold mt-0.5">✓</span> Fundraisers</li>
                            <li class="flex items-start gap-2"><span class="text-sunburst font-bold mt-0.5">✓</span> Brand giveaways</li>
                        </ul>
                    </div>
                </div>
                <div class="w-64 flex-shrink-0">
                    @include('components.layout.mega-menu-ad', [
                        'image' => '/images/stickers-decals/top5pct-stickers-decals-joliet-labels.jpg',
                        'alt'   => 'Branded promotional items from Top 5 Percent in Joliet IL',
                        'tag'   => 'Corporate Gifts',
                        'title' => 'Promotional Products',
                        'desc'  => 'Mugs, koozies, towels, bags & more branded items.',
                        'cta'   => 'Browse Promo Items',
                        'href'  => '/promotional-items',
                    ])
                </div>
            </div>
        </div>
    </div>

    {{-- ── Design Services Panel ───────────────────────────────────────── --}}
    <div
        x-cloak
        x-show="openMenu === 'design'"
        @mouseenter="openMenu = 'design'"
        @mouseleave="openMenu = null"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        class="absolute left-0 right-0 z-40 bg-white shadow-2xl border-t-2 border-sunburst"
    >
        <div class="max-w-7xl mx-auto px-6 py-8">
            <div class="flex gap-8">
                <div class="flex-1 grid grid-cols-2 gap-6">
                    <div>
                        <p class="text-xs font-bold text-charcoal-light uppercase tracking-widest mb-3 border-b border-linen-dark pb-2">Design Tools</p>
                        <ul class="space-y-2">
                            <li><a href="/design-services/online-designer" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">Free Online Designer</a></li>
                            <li><a href="/design-services/design-catalogs" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">Browse Design Catalogs</a></li>
                        </ul>
                        <p class="text-xs font-bold text-charcoal-light uppercase tracking-widest mb-3 border-b border-linen-dark pb-2 mt-6">Professional Design</p>
                        <ul class="space-y-2">
                            <li><a href="/design-services/logo-design" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">Logo Design</a></li>
                            <li><a href="/design-services/graphic-design" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">Layout & Graphic Design</a></li>
                        </ul>
                        <div class="mt-6">
                            <a href="/design-services" class="inline-flex items-center gap-1 text-sm font-bold text-sunburst hover:text-sunburst-dark transition-colors">
                                View All Design Services
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                            </a>
                        </div>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-charcoal-light uppercase tracking-widest mb-3 border-b border-linen-dark pb-2">Don't Have Artwork?</p>
                        <p class="text-sm text-charcoal-light leading-relaxed mb-4">No problem. Our in-house designers have over 20 years of professional experience. We can create logos, shirt graphics, sign layouts, and full-color designs from your idea or a rough sketch.</p>
                        <a href="/contact" class="inline-block px-4 py-2 text-sm font-bold bg-sunburst text-charcoal hover:bg-sunburst-dark transition-colors">Get a Design Quote</a>
                    </div>
                </div>
                <div class="w-64 flex-shrink-0">
                    @include('components.layout.mega-menu-ad', [
                        'image' => '/images/custom-shirts/top5pct-custom-embroidery-shops-near-me-joliet.jpg',
                        'alt'   => 'Professional design services in Joliet IL',
                        'tag'   => 'In-House Designers',
                        'title' => 'Design Services',
                        'desc'  => 'Logo design, layout, and free online design tools.',
                        'cta'   => 'Start Designing',
                        'href'  => '/design-services',
                    ])
                </div>
            </div>
        </div>
    </div>

    {{-- ── About Panel ─────────────────────────────────────────────────── --}}
    <div
        x-cloak
        x-show="openMenu === 'about'"
        @mouseenter="openMenu = 'about'"
        @mouseleave="openMenu = null"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        class="absolute left-0 right-0 z-40 bg-white shadow-2xl border-t-2 border-sunburst"
    >
        <div class="max-w-7xl mx-auto px-6 py-8">
            <div class="flex gap-8">
                <div class="flex-1 grid grid-cols-2 gap-6">
                    <div>
                        <p class="text-xs font-bold text-charcoal-light uppercase tracking-widest mb-3 border-b border-linen-dark pb-2">Company</p>
                        <ul class="space-y-2">
                            <li><a href="/company" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">About Our Company</a></li>
                            <li><a href="/resources" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">Resources & Articles</a></li>
                            <li><a href="/portfolio" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">Portfolio</a></li>
                            <li><a href="/contact" class="text-sm text-charcoal hover:text-sunburst font-medium transition-colors">Contact Us</a></li>
                        </ul>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-charcoal-light uppercase tracking-widest mb-3 border-b border-linen-dark pb-2">Veteran Owned Since 2017</p>
                        <p class="text-sm text-charcoal-light leading-relaxed mb-4">Top 5 Percent is a veteran-owned custom signage and apparel shop in Joliet, Illinois. We have proudly served businesses, teams, and organizations throughout Will County for nearly a decade.</p>
                        <a href="/company" class="inline-flex items-center gap-1 text-sm font-bold text-sunburst hover:text-sunburst-dark transition-colors">
                            Our Story
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                </div>
                <div class="w-64 flex-shrink-0">
                    @include('components.layout.mega-menu-ad', [
                        'image' => '/images/about-preview.jpg',
                        'alt'   => 'Top 5 Percent veteran owned custom signage shop in Joliet IL',
                        'tag'   => 'Veteran Owned',
                        'title' => 'Serving Will County Since 2017',
                        'desc'  => 'Quality craftsmanship. Community focused. Locally owned.',
                        'cta'   => 'Learn About Us',
                        'href'  => '/company',
                    ])
                </div>
            </div>
        </div>
    </div>

    {{-- ===================================================================
         MOBILE MENU
         Accordion style — each section collapsible
         ================================================================== --}}
    <div x-cloak x-show="mobileMenuOpen" x-transition class="lg:hidden border-t border-linen-dark">
        <div class="max-w-7xl mx-auto px-4 py-4 space-y-1">

            <a href="/" class="block px-3 py-2.5 text-sm font-semibold text-charcoal hover:text-sunburst hover:bg-linen rounded transition-colors">Home</a>

            {{-- Custom Apparel --}}
            <div>
                <button
                    @click="openMobile = openMobile === 'apparel' ? null : 'apparel'"
                    class="w-full flex items-center justify-between px-3 py-2.5 text-sm font-semibold text-charcoal hover:text-sunburst hover:bg-linen rounded transition-colors"
                >
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
                    <a href="/custom-apparel/vinyl-shirts" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Vinyl Shirts</a>
                    <a href="/custom-apparel/rhinestone-shirts" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Rhinestone Shirts</a>
                    <a href="/custom-apparel/glitter-shirts" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Glitter Shirts</a>
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

            {{-- Select a Sign --}}
            <div>
                <button
                    @click="openMobile = openMobile === 'signs' ? null : 'signs'"
                    class="w-full flex items-center justify-between px-3 py-2.5 text-sm font-semibold text-charcoal hover:text-sunburst hover:bg-linen rounded transition-colors"
                >
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

            {{-- Stickers --}}
            <div>
                <button
                    @click="openMobile = openMobile === 'stickers' ? null : 'stickers'"
                    class="w-full flex items-center justify-between px-3 py-2.5 text-sm font-semibold text-charcoal hover:text-sunburst hover:bg-linen rounded transition-colors"
                >
                    <span>Stickers</span>
                    <svg class="w-4 h-4 transition-transform duration-200" :class="openMobile === 'stickers' ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="openMobile === 'stickers'" x-transition class="pl-4 pt-1 pb-2 space-y-1 border-l-2 border-sunburst ml-3">
                    <a href="/stickers" class="block px-3 py-1.5 text-sm font-bold text-sunburst">View All Stickers</a>
                    <a href="/stickers/standard-stickers" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Standard Stickers</a>
                    <a href="/stickers/custom-shaped-stickers" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Custom Shaped Stickers</a>
                </div>
            </div>

            {{-- Vehicle Decals --}}
            <div>
                <button
                    @click="openMobile = openMobile === 'vehicle' ? null : 'vehicle'"
                    class="w-full flex items-center justify-between px-3 py-2.5 text-sm font-semibold text-charcoal hover:text-sunburst hover:bg-linen rounded transition-colors"
                >
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

            {{-- Promotional Items --}}
            <div>
                <button
                    @click="openMobile = openMobile === 'promo' ? null : 'promo'"
                    class="w-full flex items-center justify-between px-3 py-2.5 text-sm font-semibold text-charcoal hover:text-sunburst hover:bg-linen rounded transition-colors"
                >
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

            {{-- Design Services --}}
            <div>
                <button
                    @click="openMobile = openMobile === 'design' ? null : 'design'"
                    class="w-full flex items-center justify-between px-3 py-2.5 text-sm font-semibold text-charcoal hover:text-sunburst hover:bg-linen rounded transition-colors"
                >
                    <span>Design Services</span>
                    <svg class="w-4 h-4 transition-transform duration-200" :class="openMobile === 'design' ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="openMobile === 'design'" x-transition class="pl-4 pt-1 pb-2 space-y-1 border-l-2 border-sunburst ml-3">
                    <a href="/design-services" class="block px-3 py-1.5 text-sm font-bold text-sunburst">View All Design Services</a>
                    <a href="/design-services/online-designer" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Free Online Designer</a>
                    <a href="/design-services/design-catalogs" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Design Catalogs</a>
                    <a href="/design-services/logo-design" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Logo Design</a>
                    <a href="/design-services/graphic-design" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Graphic Design</a>
                </div>
            </div>

            {{-- About --}}
            <div>
                <button
                    @click="openMobile = openMobile === 'about' ? null : 'about'"
                    class="w-full flex items-center justify-between px-3 py-2.5 text-sm font-semibold text-charcoal hover:text-sunburst hover:bg-linen rounded transition-colors"
                >
                    <span>About Us</span>
                    <svg class="w-4 h-4 transition-transform duration-200" :class="openMobile === 'about' ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="openMobile === 'about'" x-transition class="pl-4 pt-1 pb-2 space-y-1 border-l-2 border-sunburst ml-3">
                    <a href="/company" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">About Our Company</a>
                    <a href="/resources" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Resources & Articles</a>
                    <a href="/portfolio" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Portfolio</a>
                    <a href="/contact" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Contact Us</a>
                </div>
            </div>

            <div class="pt-2 border-t border-linen-dark">
                <a href="/contact" class="block w-full text-center px-4 py-3 text-sm font-bold bg-sunburst text-charcoal hover:bg-sunburst-dark transition-colors">Get a Free Quote</a>
            </div>

        </div>
    </div>
</nav>
