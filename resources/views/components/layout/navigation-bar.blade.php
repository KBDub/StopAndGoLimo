@props([
    'currentPage' => null
])

{{-- ===================================================================
     Mega Menu Navigation — Style 1
     Desktop: Left dark image panel + right content (overview + 2-col groups)
     Mobile:  Accordion collapsible sections

     Hover-quiver fix: closeTimer delays panel close so the cursor can
     travel from the trigger to the panel without it snapping shut.
     ================================================================== --}}

<nav
    class="bg-linen shadow-sm relative"
    x-data="{
        mobileMenuOpen: false,
        openMenu: null,
        scrolled: false,
        openMobile: null,
        closeTimer: null,
        open(name) {
            clearTimeout(this.closeTimer);
            this.openMenu = name;
        },
        startClose() {
            this.closeTimer = setTimeout(() => { this.openMenu = null; }, 120);
        },
        cancelClose() {
            clearTimeout(this.closeTimer);
        }
    }"
    x-on:scroll.window="if (window.scrollY > 50) { scrolled = true } else { scrolled = false; openMenu = null }"
    x-on:keydown.escape.window="openMenu = null; mobileMenuOpen = false"
>
    {{-- ── Top Bar ─────────────────────────────────────────────────────── --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex items-center gap-4 transition-all duration-300" x-bind:class="scrolled ? 'py-1' : 'py-2'">

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
                class="lg:hidden ml-auto p-2 text-charcoal hover:text-sunburst"
                aria-label="Toggle menu"
            >
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>

            {{-- ── Desktop Nav Links ───────────────────────────────────────
                 flex-1 + justify-between spreads items evenly across the
                 remaining header width, matching the old design alignment.
                 ─────────────────────────────────────────────────────────── --}}
            <div class="hidden lg:flex flex-1 items-center justify-between">

                {{-- Home --}}
                <a href="/" class="px-2 py-2 text-sm font-semibold whitespace-nowrap {{ $currentPage === 'home' ? 'text-azure' : 'text-charcoal hover:text-sunburst' }} transition-colors">Home</a>

                {{-- Custom Apparel --}}
                <div class="relative" @mouseenter="open('apparel')" @mouseleave="startClose()">
                    <a href="/custom-apparel" class="px-2 py-2 text-sm font-semibold whitespace-nowrap inline-flex items-center gap-0.5 {{ $currentPage === 'custom-apparel' ? 'text-azure' : 'text-charcoal hover:text-sunburst' }} transition-colors">
                        Custom Apparel
                        <svg class="w-3 h-3 shrink-0 transition-transform duration-200" :class="openMenu === 'apparel' ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                    </a>
                </div>

                {{-- Select a Sign --}}
                <div class="relative" @mouseenter="open('signs')" @mouseleave="startClose()">
                    <a href="/signs" class="px-2 py-2 text-sm font-semibold whitespace-nowrap inline-flex items-center gap-0.5 {{ $currentPage === 'signs' ? 'text-azure' : 'text-charcoal hover:text-sunburst' }} transition-colors">
                        Select a Sign
                        <svg class="w-3 h-3 shrink-0 transition-transform duration-200" :class="openMenu === 'signs' ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                    </a>
                </div>

                {{-- Stickers --}}
                <div class="relative" @mouseenter="open('stickers')" @mouseleave="startClose()">
                    <a href="/stickers" class="px-2 py-2 text-sm font-semibold whitespace-nowrap inline-flex items-center gap-0.5 {{ $currentPage === 'stickers' ? 'text-azure' : 'text-charcoal hover:text-sunburst' }} transition-colors">
                        Stickers
                        <svg class="w-3 h-3 shrink-0 transition-transform duration-200" :class="openMenu === 'stickers' ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                    </a>
                </div>

                {{-- Vehicle Decals --}}
                <div class="relative" @mouseenter="open('vehicle')" @mouseleave="startClose()">
                    <a href="/vehicle-graphics" class="px-2 py-2 text-sm font-semibold whitespace-nowrap inline-flex items-center gap-0.5 {{ $currentPage === 'vehicle-graphics' ? 'text-azure' : 'text-charcoal hover:text-sunburst' }} transition-colors">
                        Vehicle Decals
                        <svg class="w-3 h-3 shrink-0 transition-transform duration-200" :class="openMenu === 'vehicle' ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                    </a>
                </div>

                {{-- Promotional Items --}}
                <div class="relative" @mouseenter="open('promo')" @mouseleave="startClose()">
                    <a href="/promotional-items" class="px-2 py-2 text-sm font-semibold whitespace-nowrap inline-flex items-center gap-0.5 {{ $currentPage === 'promotional-items' ? 'text-azure' : 'text-charcoal hover:text-sunburst' }} transition-colors">
                        Promo Items
                        <svg class="w-3 h-3 shrink-0 transition-transform duration-200" :class="openMenu === 'promo' ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                    </a>
                </div>

                {{-- Top 5% Merchandise — plain link, no dropdown --}}
                <a href="/top5pct-merchandise" class="px-2 py-2 text-sm font-semibold whitespace-nowrap {{ $currentPage === 'merchandise' ? 'text-azure' : 'text-charcoal hover:text-sunburst' }} transition-colors">
                    Top 5% Merchandise
                </a>

                {{-- Design Services --}}
                <div class="relative" @mouseenter="open('design')" @mouseleave="startClose()">
                    <a href="/design-services" class="px-2 py-2 text-sm font-semibold whitespace-nowrap inline-flex items-center gap-0.5 {{ $currentPage === 'design-services' ? 'text-azure' : 'text-charcoal hover:text-sunburst' }} transition-colors">
                        Design Services
                        <svg class="w-3 h-3 shrink-0 transition-transform duration-200" :class="openMenu === 'design' ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                    </a>
                </div>

                {{-- About Us --}}
                <div class="relative" @mouseenter="open('about')" @mouseleave="startClose()">
                    <a href="/company" class="px-2 py-2 text-sm font-semibold whitespace-nowrap inline-flex items-center gap-0.5 {{ $currentPage === 'about' ? 'text-azure' : 'text-charcoal hover:text-sunburst' }} transition-colors">
                        About Us
                        <svg class="w-3 h-3 shrink-0 transition-transform duration-200" :class="openMenu === 'about' ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                    </a>
                </div>

                {{-- Contact CTA --}}
                <a href="/contact" class="px-4 py-2 text-sm font-bold bg-sunburst text-charcoal hover:bg-sunburst-dark transition-colors whitespace-nowrap">
                    Free Quote
                </a>

            </div>
        </div>
    </div>

    {{-- ===================================================================
         MEGA MENU PANELS
         ─────────────────────────────────────────────────────────────────
         Each panel uses a two-div approach to avoid full-width backgrounds:
           outer  — absolute left-0 right-0, pointer-events-none (invisible)
           inner  — max-w-7xl mx-auto aligns to content; pointer-events-auto
                    bg-white shadow only wraps the visible panel width
         ================================================================== --}}

    {{-- Backdrop --}}
    <div
        x-cloak
        x-show="openMenu !== null"
        @click="openMenu = null"
        class="fixed inset-0 z-30"
        x-transition:enter="transition-opacity ease-out duration-150"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition-opacity ease-in duration-100"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
    ></div>

    {{-- ═══════════════════════════════════════════════════════════════════
         CUSTOM APPAREL
         ═══════════════════════════════════════════════════════════════════ --}}
    <div
        x-cloak x-show="openMenu === 'apparel'"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-1"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-1"
        class="absolute left-0 right-0 z-40 pointer-events-none"
    >
        <div
            @mouseenter="cancelClose()"
            @mouseleave="startClose()"
            class="max-w-7xl mx-auto px-4 sm:px-6 pointer-events-auto"
        >
            <div class="flex items-stretch bg-white shadow-2xl border-t-2 border-sunburst w-fit max-w-full">
                {{-- Left dark image panel --}}
                <div class="relative w-52 flex-shrink-0 overflow-hidden" style="min-height:260px; background-color:var(--color-charcoal)">
                    <img src="/images/custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg" alt="Custom apparel Joliet IL" class="absolute inset-0 w-full h-full object-cover opacity-40" loading="lazy">
                    <div class="absolute inset-0 flex flex-col justify-end p-5">
                        <p class="text-xs font-bold uppercase tracking-widest mb-1" style="color:var(--color-sunburst)">Veteran Owned • Joliet, IL</p>
                        <h3 class="text-white font-bold text-xl leading-tight">Custom Apparel</h3>
                    </div>
                </div>
                {{-- Right content --}}
                <div class="px-8 py-6" style="width:640px">
                    <a href="/custom-apparel" class="flex items-center gap-3 pb-4 mb-5 border-b border-linen-dark group">
                        <span class="font-bold text-base text-charcoal group-hover:text-sunburst transition-colors">Overview</span>
                        <span class="text-sm text-charcoal-light">All custom shirts, hoodies, caps, and apparel</span>
                        <svg class="w-4 h-4 ml-auto text-sunburst shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                    <div class="grid grid-cols-2 gap-x-8">
                        <div>
                            <p class="text-xs font-bold uppercase tracking-widest mb-3" style="color:var(--color-olive)">Print Methods</p>
                            <div class="space-y-3">
                                <div><a href="/custom-apparel/custom-shirts" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Custom Shirts</a><p class="text-xs text-charcoal-light mt-0.5">Full color digital print, any design</p></div>
                                <div><a href="/custom-apparel/dtf-transfers" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">DTF Transfers</a><p class="text-xs text-charcoal-light mt-0.5">High-detail heat transfers for any fabric</p></div>
                            </div>
                        </div>
                        <div>
                            <p class="text-xs font-bold uppercase tracking-widest mb-3" style="color:var(--color-olive)">Specialty Styles</p>
                            <div class="space-y-3">
                                <div><a href="/custom-apparel/glitter-shirts" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Glitter Shirts</a><p class="text-xs text-charcoal-light mt-0.5">Shimmer and sparkle custom effects</p></div>
                                <div><a href="/custom-apparel/rhinestone-shirts" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Rhinestone Shirts</a><p class="text-xs text-charcoal-light mt-0.5">Premium crystal embellishments</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="border-t border-linen-dark my-5"></div>
                    <div class="grid grid-cols-2 gap-x-8">
                        <div>
                            <p class="text-xs font-bold uppercase tracking-widest mb-3" style="color:var(--color-olive)">All-Over & Stitch</p>
                            <div class="space-y-3">
                                <div><a href="/custom-apparel/dye-sublimation" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Dye Sublimation</a><p class="text-xs text-charcoal-light mt-0.5">Edge-to-edge full color all-over printing</p></div>
                                <div><a href="/custom-apparel/embroidery" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Embroidery</a><p class="text-xs text-charcoal-light mt-0.5">Classic stitched logo branding</p></div>
                            </div>
                        </div>
                        <div>
                            <p class="text-xs font-bold uppercase tracking-widest mb-3" style="color:var(--color-olive)">Team Apparel</p>
                            <div class="space-y-3">
                                <div><a href="/custom-apparel/corporate-wear-shirts" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Corporate Wear Shirts</a><p class="text-xs text-charcoal-light mt-0.5">Branded uniforms and business shirts</p></div>
                                <div><a href="/custom-apparel/spirit-wear-shirts" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Spirit Wear Shirts</a><p class="text-xs text-charcoal-light mt-0.5">School, sports, and fan apparel</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ═══════════════════════════════════════════════════════════════════
         SELECT A SIGN
         ═══════════════════════════════════════════════════════════════════ --}}
    <div
        x-cloak x-show="openMenu === 'signs'"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-1"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-1"
        class="absolute left-0 right-0 z-40 pointer-events-none"
    >
        <div @mouseenter="cancelClose()" @mouseleave="startClose()" class="max-w-7xl mx-auto px-4 sm:px-6 pointer-events-auto">
            <div class="flex items-stretch bg-white shadow-2xl border-t-2 border-sunburst w-fit max-w-full">
                <div class="relative w-52 flex-shrink-0 overflow-hidden" style="min-height:260px; background-color:var(--color-charcoal)">
                    <img src="/images/window-wall-floor-decals/top5pct-banner-wall-decal-door-signs-joliet.jpg" alt="Custom signs Joliet IL" class="absolute inset-0 w-full h-full object-cover opacity-40" loading="lazy">
                    <div class="absolute inset-0 flex flex-col justify-end p-5">
                        <p class="text-xs font-bold uppercase tracking-widest mb-1" style="color:var(--color-sunburst)">Indoor & Outdoor</p>
                        <h3 class="text-white font-bold text-xl leading-tight">Select a Sign</h3>
                    </div>
                </div>
                <div class="px-8 py-6" style="width:640px">
                    <a href="/signs" class="flex items-center gap-3 pb-4 mb-5 border-b border-linen-dark group">
                        <span class="font-bold text-base text-charcoal group-hover:text-sunburst transition-colors">Overview</span>
                        <span class="text-sm text-charcoal-light">All banners, signs, and surface graphics</span>
                        <svg class="w-4 h-4 ml-auto text-sunburst shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                    <div class="grid grid-cols-2 gap-x-8">
                        <div>
                            <p class="text-xs font-bold uppercase tracking-widest mb-3" style="color:var(--color-olive)">Outdoor Signs</p>
                            <div class="space-y-3">
                                <div><a href="/signs/banners" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Banners</a><p class="text-xs text-charcoal-light mt-0.5">Custom vinyl banners, any size</p></div>
                                <div><a href="/signs/yard-signs" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Yard Signs</a><p class="text-xs text-charcoal-light mt-0.5">Wire-stake and corrugated signs</p></div>
                            </div>
                        </div>
                        <div>
                            <p class="text-xs font-bold uppercase tracking-widest mb-3" style="color:var(--color-olive)">Surface Graphics</p>
                            <div class="space-y-3">
                                <div><a href="/signs/window-signs" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Window Signs</a><p class="text-xs text-charcoal-light mt-0.5">Perforated vinyl and window decals</p></div>
                                <div><a href="/signs/wall-signs" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Wall Signs & Murals</a><p class="text-xs text-charcoal-light mt-0.5">Interior murals and wall graphics</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="border-t border-linen-dark my-5"></div>
                    <div class="grid grid-cols-2 gap-x-8">
                        <div>
                            <p class="text-xs font-bold uppercase tracking-widest mb-3" style="color:var(--color-olive)">Indoor Displays</p>
                            <div class="space-y-3">
                                <div><a href="/signs/business-signs" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Business Signs</a><p class="text-xs text-charcoal-light mt-0.5">Aluminum, foam board, and mounted</p></div>
                                <div><a href="/signs/posters" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Posters</a><p class="text-xs text-charcoal-light mt-0.5">Large format full-color printing</p></div>
                            </div>
                        </div>
                        <div>
                            <p class="text-xs font-bold uppercase tracking-widest mb-3" style="color:var(--color-olive)">Event Displays</p>
                            <div class="space-y-3">
                                <div><a href="/signs/table-cloths" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Table Cloths</a><p class="text-xs text-charcoal-light mt-0.5">Full-color branded event table covers</p></div>
                                <div><a href="/signs/sidewalk-signs" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Sidewalk Signs</a><p class="text-xs text-charcoal-light mt-0.5">A-frame and sidewalk displays</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ═══════════════════════════════════════════════════════════════════
         STICKERS
         ═══════════════════════════════════════════════════════════════════ --}}
    <div
        x-cloak x-show="openMenu === 'stickers'"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-1"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-1"
        class="absolute left-0 right-0 z-40 pointer-events-none"
    >
        <div @mouseenter="cancelClose()" @mouseleave="startClose()" class="max-w-7xl mx-auto px-4 sm:px-6 pointer-events-auto">
            <div class="flex items-stretch bg-white shadow-2xl border-t-2 border-sunburst w-fit max-w-full">
                <div class="relative w-52 flex-shrink-0 overflow-hidden" style="min-height:220px; background-color:var(--color-charcoal)">
                    <img src="/images/stickers-decals/top5pct-banner-stickers-decals-joliet.jpg" alt="Custom stickers Joliet IL" class="absolute inset-0 w-full h-full object-cover opacity-40" loading="lazy">
                    <div class="absolute inset-0 flex flex-col justify-end p-5">
                        <p class="text-xs font-bold uppercase tracking-widest mb-1" style="color:var(--color-sunburst)">No Minimums</p>
                        <h3 class="text-white font-bold text-xl leading-tight">Custom Stickers</h3>
                    </div>
                </div>
                <div class="px-8 py-6" style="width:580px">
                    <a href="/stickers" class="flex items-center gap-3 pb-4 mb-5 border-b border-linen-dark group">
                        <span class="font-bold text-base text-charcoal group-hover:text-sunburst transition-colors">Overview</span>
                        <span class="text-sm text-charcoal-light">All custom vinyl stickers and labels</span>
                        <svg class="w-4 h-4 ml-auto text-sunburst shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                    <div class="grid grid-cols-2 gap-x-8">
                        <div>
                            <p class="text-xs font-bold uppercase tracking-widest mb-3" style="color:var(--color-olive)">Sticker Types</p>
                            <div class="space-y-3">
                                <div><a href="/stickers/standard-stickers" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Standard Stickers</a><p class="text-xs text-charcoal-light mt-0.5">Round, square, rectangle, and oval shapes</p></div>
                                <div><a href="/stickers/custom-shaped-stickers" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Custom Shaped Stickers</a><p class="text-xs text-charcoal-light mt-0.5">Die cut to any shape you design</p></div>
                            </div>
                        </div>
                        <div>
                            <p class="text-xs font-bold uppercase tracking-widest mb-3" style="color:var(--color-olive)">Why Top 5 Percent</p>
                            <div class="space-y-3">
                                <div><p class="text-sm font-bold text-charcoal">No Minimum Order</p><p class="text-xs text-charcoal-light mt-0.5">Order exactly what you need, 1 or 1,000</p></div>
                                <div><p class="text-sm font-bold text-charcoal">Weatherproof Vinyl</p><p class="text-xs text-charcoal-light mt-0.5">UV-resistant and waterproof, built to last</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ═══════════════════════════════════════════════════════════════════
         VEHICLE DECALS
         ═══════════════════════════════════════════════════════════════════ --}}
    <div
        x-cloak x-show="openMenu === 'vehicle'"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-1"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-1"
        class="absolute left-0 right-0 z-40 pointer-events-none"
    >
        <div @mouseenter="cancelClose()" @mouseleave="startClose()" class="max-w-7xl mx-auto px-4 sm:px-6 pointer-events-auto">
            <div class="flex items-stretch bg-white shadow-2xl border-t-2 border-sunburst w-fit max-w-full">
                <div class="relative w-52 flex-shrink-0 overflow-hidden" style="min-height:220px; background-color:var(--color-charcoal)">
                    <img src="/images/automobile-graphics/top5pct-banner-vinyl-lettering-car-wraps-joliet.jpg" alt="Vehicle wraps and decals Joliet IL" class="absolute inset-0 w-full h-full object-cover opacity-40" loading="lazy">
                    <div class="absolute inset-0 flex flex-col justify-end p-5">
                        <p class="text-xs font-bold uppercase tracking-widest mb-1" style="color:var(--color-sunburst)">Mobile Advertising</p>
                        <h3 class="text-white font-bold text-xl leading-tight">Vehicle Decals</h3>
                    </div>
                </div>
                <div class="px-8 py-6" style="width:580px">
                    <a href="/vehicle-graphics" class="flex items-center gap-3 pb-4 mb-5 border-b border-linen-dark group">
                        <span class="font-bold text-base text-charcoal group-hover:text-sunburst transition-colors">Overview</span>
                        <span class="text-sm text-charcoal-light">All vehicle graphics, wraps, and magnets</span>
                        <svg class="w-4 h-4 ml-auto text-sunburst shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                    <div class="grid grid-cols-2 gap-x-8">
                        <div>
                            <p class="text-xs font-bold uppercase tracking-widest mb-3" style="color:var(--color-olive)">Vehicle Products</p>
                            <div class="space-y-3">
                                <div><a href="/vehicle-graphics/automobile-graphics" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Automobile Graphics & Wraps</a><p class="text-xs text-charcoal-light mt-0.5">Full wraps and vinyl lettering</p></div>
                                <div><a href="/vehicle-graphics/vehicle-magnets" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Vehicle Magnets</a><p class="text-xs text-charcoal-light mt-0.5">Removable magnetic door signs</p></div>
                            </div>
                        </div>
                        <div>
                            <p class="text-xs font-bold uppercase tracking-widest mb-3" style="color:var(--color-olive)">Fleet & Compliance</p>
                            <div class="space-y-3">
                                <div><a href="/vehicle-graphics/dot-decals" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">DOT Decals</a><p class="text-xs text-charcoal-light mt-0.5">Compliant DOT number lettering for trucks</p></div>
                                <div><a href="/contact" class="block text-sm font-bold text-sunburst hover:text-sunburst-dark transition-colors">Get a Free Vehicle Quote →</a><p class="text-xs text-charcoal-light mt-0.5">Custom pricing for any vehicle project</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ═══════════════════════════════════════════════════════════════════
         PROMOTIONAL ITEMS
         ═══════════════════════════════════════════════════════════════════ --}}
    <div
        x-cloak x-show="openMenu === 'promo'"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-1"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-1"
        class="absolute left-0 right-0 z-40 pointer-events-none"
    >
        <div @mouseenter="cancelClose()" @mouseleave="startClose()" class="max-w-7xl mx-auto px-4 sm:px-6 pointer-events-auto">
            <div class="flex items-stretch bg-white shadow-2xl border-t-2 border-sunburst w-fit max-w-full">
                <div class="relative w-52 flex-shrink-0 overflow-hidden" style="min-height:260px; background-color:var(--color-charcoal)">
                    <img src="/images/stickers-decals/top5pct-stickers-decals-joliet-labels.jpg" alt="Branded promo products Joliet IL" class="absolute inset-0 w-full h-full object-cover opacity-40" loading="lazy">
                    <div class="absolute inset-0 flex flex-col justify-end p-5">
                        <p class="text-xs font-bold uppercase tracking-widest mb-1" style="color:var(--color-sunburst)">Corporate Gifts</p>
                        <h3 class="text-white font-bold text-xl leading-tight">Promo Items</h3>
                    </div>
                </div>
                <div class="px-8 py-6" style="width:640px">
                    <a href="/promotional-items" class="flex items-center gap-3 pb-4 mb-5 border-b border-linen-dark group">
                        <span class="font-bold text-base text-charcoal group-hover:text-sunburst transition-colors">Overview</span>
                        <span class="text-sm text-charcoal-light">All branded promotional and corporate gift products</span>
                        <svg class="w-4 h-4 ml-auto text-sunburst shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                    <div class="grid grid-cols-2 gap-x-8">
                        <div>
                            <p class="text-xs font-bold uppercase tracking-widest mb-3" style="color:var(--color-olive)">Drinkware</p>
                            <div class="space-y-3">
                                <div><a href="/promotional-items/mugs" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Custom Mugs</a><p class="text-xs text-charcoal-light mt-0.5">Full color sublimation coffee mugs</p></div>
                                <div><a href="/promotional-items/can-koozies" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Can Koozies</a><p class="text-xs text-charcoal-light mt-0.5">Branded foam and neoprene koozies</p></div>
                            </div>
                        </div>
                        <div>
                            <p class="text-xs font-bold uppercase tracking-widest mb-3" style="color:var(--color-olive)">Bags & Textiles</p>
                            <div class="space-y-3">
                                <div><a href="/promotional-items/tote-bags" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Tote Bags</a><p class="text-xs text-charcoal-light mt-0.5">Branded drawstring and canvas bags</p></div>
                                <div><a href="/promotional-items/towels" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Custom Towels</a><p class="text-xs text-charcoal-light mt-0.5">Sublimation beach and sport towels</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="border-t border-linen-dark my-5"></div>
                    <div class="grid grid-cols-2 gap-x-8">
                        <div>
                            <p class="text-xs font-bold uppercase tracking-widest mb-3" style="color:var(--color-olive)">Office & Desk</p>
                            <div class="space-y-3">
                                <div><a href="/promotional-items/mouse-pads" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Mouse Pads</a><p class="text-xs text-charcoal-light mt-0.5">Full-surface branded desk accessories</p></div>
                                <div><a href="/promotional-items/drink-coasters" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Drink Coasters</a><p class="text-xs text-charcoal-light mt-0.5">Ceramic, neoprene, and hardboard</p></div>
                            </div>
                        </div>
                        <div>
                            <p class="text-xs font-bold uppercase tracking-widest mb-3" style="color:var(--color-olive)">Perfect For</p>
                            <div class="space-y-3">
                                <div><p class="text-sm font-bold text-charcoal">Corporate Gifting</p><p class="text-xs text-charcoal-light mt-0.5">Employee recognition and client gifts</p></div>
                                <div><p class="text-sm font-bold text-charcoal">Events & Trade Shows</p><p class="text-xs text-charcoal-light mt-0.5">Giveaways that keep your brand visible</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ═══════════════════════════════════════════════════════════════════
         DESIGN SERVICES
         ═══════════════════════════════════════════════════════════════════ --}}
    <div
        x-cloak x-show="openMenu === 'design'"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-1"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-1"
        class="absolute left-0 right-0 z-40 pointer-events-none"
    >
        <div @mouseenter="cancelClose()" @mouseleave="startClose()" class="max-w-7xl mx-auto px-4 sm:px-6 pointer-events-auto">
            <div class="flex items-stretch bg-white shadow-2xl border-t-2 border-sunburst w-fit max-w-full">
                <div class="relative w-52 flex-shrink-0 overflow-hidden" style="min-height:220px; background-color:var(--color-charcoal)">
                    <img src="/images/custom-shirts/top5pct-custom-embroidery-shops-near-me-joliet.jpg" alt="Design services Joliet IL" class="absolute inset-0 w-full h-full object-cover opacity-40" loading="lazy">
                    <div class="absolute inset-0 flex flex-col justify-end p-5">
                        <p class="text-xs font-bold uppercase tracking-widest mb-1" style="color:var(--color-sunburst)">In-House Designers</p>
                        <h3 class="text-white font-bold text-xl leading-tight">Design Services</h3>
                    </div>
                </div>
                <div class="px-8 py-6" style="width:580px">
                    <a href="/design-services" class="flex items-center gap-3 pb-4 mb-5 border-b border-linen-dark group">
                        <span class="font-bold text-base text-charcoal group-hover:text-sunburst transition-colors">Overview</span>
                        <span class="text-sm text-charcoal-light">All design tools and professional design services</span>
                        <svg class="w-4 h-4 ml-auto text-sunburst shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                    <div class="grid grid-cols-2 gap-x-8">
                        <div>
                            <p class="text-xs font-bold uppercase tracking-widest mb-3" style="color:var(--color-olive)">Online Design Tools</p>
                            <div class="space-y-3">
                                <div><a href="/design-services/online-designer" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Free Online Designer</a><p class="text-xs text-charcoal-light mt-0.5">Create your design right now online</p></div>
                                <div><a href="/design-services/design-catalogs" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Browse Design Catalogs</a><p class="text-xs text-charcoal-light mt-0.5">Thousands of design ideas to inspire you</p></div>
                            </div>
                        </div>
                        <div>
                            <p class="text-xs font-bold uppercase tracking-widest mb-3" style="color:var(--color-olive)">Professional Design</p>
                            <div class="space-y-3">
                                <div><a href="/design-services/logo-design" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Logo Design</a><p class="text-xs text-charcoal-light mt-0.5">Custom logos from concept to final files</p></div>
                                <div><a href="/design-services/graphic-design" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Layout & Graphic Design</a><p class="text-xs text-charcoal-light mt-0.5">Print-ready layout and artwork prep</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ═══════════════════════════════════════════════════════════════════
         ABOUT US
         ═══════════════════════════════════════════════════════════════════ --}}
    <div
        x-cloak x-show="openMenu === 'about'"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-1"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-1"
        class="absolute left-0 right-0 z-40 pointer-events-none"
    >
        <div @mouseenter="cancelClose()" @mouseleave="startClose()" class="max-w-7xl mx-auto px-4 sm:px-6 pointer-events-auto">
            <div class="flex items-stretch bg-white shadow-2xl border-t-2 border-sunburst w-fit max-w-full">
                <div class="relative w-52 flex-shrink-0 overflow-hidden" style="min-height:220px; background-color:var(--color-charcoal)">
                    <img src="/images/about-preview.jpg" alt="Top 5 Percent veteran owned shop Joliet IL" class="absolute inset-0 w-full h-full object-cover opacity-40" loading="lazy">
                    <div class="absolute inset-0 flex flex-col justify-end p-5">
                        <p class="text-xs font-bold uppercase tracking-widest mb-1" style="color:var(--color-sunburst)">Veteran Owned Since 2017</p>
                        <h3 class="text-white font-bold text-xl leading-tight">About Us</h3>
                    </div>
                </div>
                <div class="px-8 py-6" style="width:540px">
                    <a href="/company" class="flex items-center gap-3 pb-4 mb-5 border-b border-linen-dark group">
                        <span class="font-bold text-base text-charcoal group-hover:text-sunburst transition-colors">Overview</span>
                        <span class="text-sm text-charcoal-light">Learn about Top 5 Percent and our team</span>
                        <svg class="w-4 h-4 ml-auto text-sunburst shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                    <div class="grid grid-cols-2 gap-x-8">
                        <div>
                            <p class="text-xs font-bold uppercase tracking-widest mb-3" style="color:var(--color-olive)">Company</p>
                            <div class="space-y-3">
                                <div><a href="/resources" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Resources & Articles</a><p class="text-xs text-charcoal-light mt-0.5">Tips, guides, and helpful articles</p></div>
                                <div><a href="/portfolio" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Portfolio</a><p class="text-xs text-charcoal-light mt-0.5">View our past work and projects</p></div>
                            </div>
                        </div>
                        <div>
                            <p class="text-xs font-bold uppercase tracking-widest mb-3" style="color:var(--color-olive)">Connect</p>
                            <div class="space-y-3">
                                <div><a href="/contact" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Contact Us</a><p class="text-xs text-charcoal-light mt-0.5">Get a free quote or visit our Joliet shop</p></div>
                                <div><a href="/stores" class="block text-sm font-bold text-charcoal hover:text-sunburst transition-colors">Store Location</a><p class="text-xs text-charcoal-light mt-0.5">121 Springfield Avenue, Joliet, IL</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ===================================================================
         MOBILE MENU — Accordion
         ================================================================== --}}
    <div x-cloak x-show="mobileMenuOpen" x-transition class="lg:hidden border-t border-linen-dark">
        <div class="max-w-7xl mx-auto px-4 py-4 space-y-1">

            <a href="/" class="block px-3 py-2.5 text-sm font-semibold text-charcoal hover:text-sunburst hover:bg-linen rounded transition-colors">Home</a>

            {{-- Custom Apparel --}}
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

            {{-- Select a Sign --}}
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

            {{-- Stickers --}}
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

            {{-- Vehicle Decals --}}
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

            {{-- Promo Items --}}
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

            {{-- Top 5% Merchandise — plain link --}}
            <a href="/top5pct-merchandise" class="block px-3 py-2.5 text-sm font-semibold text-charcoal hover:text-sunburst hover:bg-linen rounded transition-colors">Top 5% Merchandise</a>

            {{-- Design Services --}}
            <div>
                <button @click="openMobile = openMobile === 'design' ? null : 'design'" class="w-full flex items-center justify-between px-3 py-2.5 text-sm font-semibold text-charcoal hover:text-sunburst hover:bg-linen rounded transition-colors">
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

            {{-- About Us --}}
            <div>
                <button @click="openMobile = openMobile === 'about' ? null : 'about'" class="w-full flex items-center justify-between px-3 py-2.5 text-sm font-semibold text-charcoal hover:text-sunburst hover:bg-linen rounded transition-colors">
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
