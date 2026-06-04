@props([
    'currentPage' => null
])

{{-- ===================================================================
     Mega Menu Navigation, Style 1
     Each panel lives INSIDE its trigger div so hover is seamless:
       trigger div = relative container
       panel = absolute top-full, left or right offset per item position
     No close-timer needed, entering the panel never leaves the trigger.
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
        <div class="flex items-center gap-4 transition-all duration-300 h-14 lg:h-20" x-bind:class="scrolled ? 'h-12 lg:h-14' : 'h-14 lg:h-20'">

            {{-- Logo --}}
            <a href="/" class="flex items-center flex-shrink-0">
                <img
                    src="/images/logos/top5-logo.gif"
                    alt="Top 5 Percent, Custom Signage & Apparel Joliet IL"
                    class="transition-all duration-300 transform-gpu h-10 lg:h-16"
                    x-bind:class="scrolled ? 'h-8 lg:h-10' : 'h-10 lg:h-16'"
                >
            </a>

            {{-- Mobile social icons --}}
            <div class="flex-1 flex lg:hidden justify-center items-center gap-2">
                <a href="https://www.google.com/maps?cid=15797523837573086431" target="_blank" rel="noopener" aria-label="Google Maps" class="text-charcoal opacity-60 hover:opacity-100 hover:scale-125 hover:[color:var(--color-olive)] transition-all duration-200">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12.48 10.92v3.28h7.84c-.24 1.84-.853 3.187-1.787 4.133-1.147 1.147-2.933 2.4-6.053 2.4-4.827 0-8.6-3.893-8.6-8.72s3.773-8.72 8.6-8.72c2.6 0 4.507 1.027 5.907 2.347l2.307-2.307C18.747 1.44 16.133 0 12.48 0 5.867 0 .307 5.387.307 12s5.56 12 12.173 12c3.573 0 6.267-1.173 8.373-3.36 2.16-2.16 2.84-5.213 2.84-7.667 0-.76-.053-1.467-.173-2.053H12.48z"/></svg>
                </a>
                <a href="https://www.facebook.com/top5percent/" target="_blank" rel="noopener" aria-label="Facebook" class="text-charcoal opacity-60 hover:opacity-100 hover:scale-125 hover:[color:var(--color-olive)] transition-all duration-200">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                </a>
                <a href="https://www.instagram.com/top5percentllc/" target="_blank" rel="noopener" aria-label="Instagram" class="text-charcoal opacity-60 hover:opacity-100 hover:scale-125 hover:[color:var(--color-olive)] transition-all duration-200">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                </a>
                <a href="https://www.pinterest.com/top5percentllc/" target="_blank" rel="noopener" aria-label="Pinterest" class="text-charcoal opacity-60 hover:opacity-100 hover:scale-125 hover:[color:var(--color-olive)] transition-all duration-200">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 0C5.373 0 0 5.373 0 12c0 5.084 3.163 9.426 7.627 11.174-.105-.949-.2-2.405.042-3.441.218-.937 1.407-5.965 1.407-5.965s-.359-.719-.359-1.782c0-1.668.967-2.914 2.171-2.914 1.023 0 1.518.769 1.518 1.69 0 1.029-.655 2.568-.994 3.995-.283 1.194.599 2.169 1.777 2.169 2.133 0 3.772-2.249 3.772-5.495 0-2.873-2.064-4.882-5.012-4.882-3.414 0-5.418 2.561-5.418 5.207 0 1.031.397 2.138.893 2.738a.36.36 0 01.083.345l-.333 1.36c-.053.22-.174.267-.402.161-1.499-.698-2.436-2.889-2.436-4.649 0-3.785 2.75-7.262 7.929-7.262 4.163 0 7.398 2.967 7.398 6.931 0 4.136-2.607 7.464-6.227 7.464-1.216 0-2.359-.632-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0z"/></svg>
                </a>
                <a href="https://www.youtube.com/channel/UCAhLYjgb9745wv_yfmxSe6w/" target="_blank" rel="noopener" aria-label="YouTube" class="text-charcoal opacity-60 hover:opacity-100 hover:scale-125 hover:[color:var(--color-olive)] transition-all duration-200">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M23.495 6.205a3.007 3.007 0 00-2.088-2.088c-1.87-.501-9.396-.501-9.396-.501s-7.507-.01-9.396.501A3.007 3.007 0 00.527 6.205a31.247 31.247 0 00-.522 5.805 31.247 31.247 0 00.522 5.783 3.007 3.007 0 002.088 2.088c1.868.502 9.396.502 9.396.502s7.506 0 9.396-.502a3.007 3.007 0 002.088-2.088 31.247 31.247 0 00.5-5.783 31.247 31.247 0 00-.5-5.805zM9.609 15.601V8.408l6.264 3.602z"/></svg>
                </a>
                <a href="https://www.twitter.com/top5percentllc/" target="_blank" rel="noopener" aria-label="X (Twitter)" class="text-charcoal opacity-60 hover:opacity-100 hover:scale-125 hover:[color:var(--color-olive)] transition-all duration-200">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z"/></svg>
                </a>
                <a href="https://www.linkedin.com/in/top5percent/" target="_blank" rel="noopener" aria-label="LinkedIn" class="text-charcoal opacity-60 hover:opacity-100 hover:scale-125 hover:[color:var(--color-olive)] transition-all duration-200">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                </a>
            </div>

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

            {{-- ── Desktop Nav Links ────────────────────────────────────── --}}
            <div class="hidden lg:flex flex-1 self-stretch items-stretch justify-between relative z-50">

                {{-- Home (no dropdown) --}}
                <div class="relative self-stretch flex items-stretch">
                    <a href="/" class="px-2 h-full text-base font-semibold whitespace-nowrap inline-flex items-center {{ $currentPage === 'home' ? 'text-azure' : 'text-charcoal hover:text-sunburst' }} transition-colors">Home</a>
                </div>

                {{-- ══ Custom Apparel ═══════════════════════════════════════ --}}
                <div
                    class="self-stretch flex items-stretch"
                    @mouseenter="openMenu = 'apparel'"
                    @mouseleave="openMenu = null"
                >
                    <a href="/custom-apparel" class="px-2 h-full text-base font-semibold whitespace-nowrap inline-flex items-center gap-0.5 {{ $currentPage === 'custom-apparel' ? 'text-azure' : 'text-charcoal hover:text-sunburst' }} transition-colors">
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
                            <div class="flex-1 pl-5 pt-2 pb-5 min-w-0">
                                <a href="/custom-apparel" class="flex items-center justify-center gap-2 pb-2 mb-2 border-b border-linen-dark group">
                                    <span class="font-bold text-lg text-charcoal group-hover:text-sunburst transition-colors whitespace-nowrap">Custom Apparel</span>
                                    <span class="text-base text-charcoal-light">T-shirts, hoodies, caps & more, any print method, same day.</span>
                                    <svg class="w-4 h-4 text-sunburst shrink-0 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                </a>
                                <div class="space-y-2">
                                    {{-- Row 1: Printing Options --}}
                                    <div class="pb-2 border-b border-linen-dark">
                                        <p class="text-sm font-bold uppercase tracking-widest mb-2 text-center" style="color:var(--color-olive)">Printing Options</p>
                                        <div class="grid grid-cols-3 gap-x-4 gap-y-3">
                                            <div><a href="/custom-apparel/printing-options/dtf-printing" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors text-center">Direct to Film (DTF)</a><a href="/custom-apparel/printing-options/dtf-printing" class="block text-base text-charcoal-light leading-tight hover:text-sunburst transition-colors text-center">High-detail heat transfers</a></div>
                                            <div><a href="/custom-apparel/printing-options/dye-sublimation-printing" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors text-center">Dye-Sublimation</a><a href="/custom-apparel/printing-options/dye-sublimation-printing" class="block text-base text-charcoal-light leading-tight hover:text-sunburst transition-colors text-center">Edge-to-edge full color</a></div>
                                            <div><a href="/custom-apparel/printing-options/screen-printing" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors text-center">Screen Printing</a><a href="/custom-apparel/printing-options/screen-printing" class="block text-base text-charcoal-light leading-tight hover:text-sunburst transition-colors text-center">Classic bulk production</a></div>
                                            <div><a href="/custom-apparel/printing-options/embroidery" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors text-center">Embroidery</a><a href="/custom-apparel/printing-options/embroidery" class="block text-base text-charcoal-light leading-tight hover:text-sunburst transition-colors text-center">Premium stitched branding</a></div>
                                            <div><a href="/custom-apparel/printing-options/rhinestone-apparel" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors text-center">Rhinestone</a><a href="/custom-apparel/printing-options/rhinestone-apparel" class="block text-base text-charcoal-light leading-tight hover:text-sunburst transition-colors text-center">Crystal embellishments</a></div>
                                            <div><a href="/custom-apparel/printing-options/digital-vinyl" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors text-center">Digital Vinyl</a><a href="/custom-apparel/printing-options/digital-vinyl" class="block text-base text-charcoal-light leading-tight hover:text-sunburst transition-colors text-center">Full color printed vinyl</a></div>
                                        </div>
                                    </div>
                                    {{-- Row 2: Specialty Materials --}}
                                    <div class="pb-2 border-b border-linen-dark">
                                        <p class="text-sm font-bold uppercase tracking-widest mb-2 text-center" style="color:var(--color-olive)">Specialty Materials</p>
                                        <div class="grid grid-cols-3 gap-x-4 gap-y-3">
                                            <div><a href="/custom-apparel/specialty-materials/glitter-shirts" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors text-center">Glitter</a><a href="/custom-apparel/specialty-materials/glitter-shirts" class="block text-base text-charcoal-light leading-tight hover:text-sunburst transition-colors text-center">Shimmer and sparkle</a></div>
                                            <div><a href="/custom-apparel/specialty-materials/puff-shirts" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors text-center">Puff</a><a href="/custom-apparel/specialty-materials/puff-shirts" class="block text-base text-charcoal-light leading-tight hover:text-sunburst transition-colors text-center">Raised 3D texture</a></div>
                                            <div><a href="/custom-apparel/specialty-materials/glow-in-the-dark-shirts" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors text-center">Glow in the Dark</a><a href="/custom-apparel/specialty-materials/glow-in-the-dark-shirts" class="block text-base text-charcoal-light leading-tight hover:text-sunburst transition-colors text-center">Luminous night effects</a></div>
                                            <div><a href="/custom-apparel/specialty-materials/flock-shirts" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors text-center">Flock</a><a href="/custom-apparel/specialty-materials/flock-shirts" class="block text-base text-charcoal-light leading-tight hover:text-sunburst transition-colors text-center">Velvet-like soft feel</a></div>
                                            <div><a href="/custom-apparel/specialty-materials/brick-shirts" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors text-center">Brick</a><a href="/custom-apparel/specialty-materials/brick-shirts" class="block text-base text-charcoal-light leading-tight hover:text-sunburst transition-colors text-center">Extra thick, bold look</a></div>
                                            <div><a href="/custom-apparel/specialty-materials/holographic-shirts" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors text-center">Holographic</a><a href="/custom-apparel/specialty-materials/holographic-shirts" class="block text-base text-charcoal-light leading-tight hover:text-sunburst transition-colors text-center">Iridescent color shifting</a></div>
                                            <div><a href="/custom-apparel/specialty-materials/foil-shirts" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors text-center">Foil</a><a href="/custom-apparel/specialty-materials/foil-shirts" class="block text-base text-charcoal-light leading-tight hover:text-sunburst transition-colors text-center">Shiny metallic finish</a></div>
                                            <div><a href="/custom-apparel/specialty-materials/reflective-shirts" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors text-center">Reflective</a><a href="/custom-apparel/specialty-materials/reflective-shirts" class="block text-base text-charcoal-light leading-tight hover:text-sunburst transition-colors text-center">High-visibility safety</a></div>
                                            <div><a href="/custom-apparel/specialty-materials/vinyl" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors text-center">Vinyl</a><a href="/custom-apparel/specialty-materials/vinyl" class="block text-base text-charcoal-light leading-tight hover:text-sunburst transition-colors text-center">Heat press cut vinyl</a></div>
                                        </div>
                                    </div>
                                    {{-- Row 3: Group Shirts --}}
                                    <div>
                                        <p class="text-sm font-bold uppercase tracking-widest mb-2 text-center" style="color:var(--color-olive)">Group Shirts</p>
                                        <div class="grid grid-cols-3 gap-x-4 gap-y-3">
                                            <div><a href="/custom-apparel/group-wear/reunion-shirts" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors text-center">Family Reunion</a><a href="/custom-apparel/group-wear/reunion-shirts" class="block text-base text-charcoal-light leading-tight hover:text-sunburst transition-colors text-center">Custom matching apparel</a></div>
                                            <div><a href="/custom-apparel/group-wear/spirit-wear-shirts" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors text-center">Spirit Wear</a><a href="/custom-apparel/group-wear/spirit-wear-shirts" class="block text-base text-charcoal-light leading-tight hover:text-sunburst transition-colors text-center">School and sports fans</a></div>
                                            <div><a href="/custom-apparel/group-wear/corporate-wear-shirts" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors text-center">Corporate Wear</a><a href="/custom-apparel/group-wear/corporate-wear-shirts" class="block text-base text-charcoal-light leading-tight hover:text-sunburst transition-colors text-center">Branded staff uniforms</a></div>
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
                    <a href="/signs" class="px-2 h-full text-base font-semibold whitespace-nowrap inline-flex items-center gap-0.5 {{ $currentPage === 'signs' ? 'text-azure' : 'text-charcoal hover:text-sunburst' }} transition-colors">
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
                            <div class="flex-1 pl-5 pt-2 pb-5 min-w-0">
                                <a href="/signs" class="flex items-center justify-center gap-2 pb-2 mb-2 border-b border-linen-dark group">
                                    <span class="font-bold text-lg text-charcoal group-hover:text-sunburst transition-colors whitespace-nowrap">Select a Sign</span>
                                    <span class="text-base text-charcoal-light">Banners, window signs, yard signs & more, same day in Joliet, IL.</span>
                                    <svg class="w-4 h-4 text-sunburst shrink-0 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                </a>
                                <div class="space-y-2">
                                    {{-- Row 1: Business Signs --}}
                                    <div class="pb-2 border-b border-linen-dark">
                                        <p class="text-sm font-bold uppercase tracking-widest mb-2 text-center" style="color:var(--color-olive)">Business Signs</p>
                                        <div class="grid grid-cols-3 gap-x-4 gap-y-3">
                                            <div><a href="/signs/business-signs/banners" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors text-center">Banners</a><a href="/signs/business-signs/banners" class="block text-base text-charcoal-light leading-tight hover:text-sunburst transition-colors text-center">Custom vinyl banners</a></div>
                                            <div><a href="/signs/business-signs/window-signs" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors text-center">Window Signs</a><a href="/signs/business-signs/window-signs" class="block text-base text-charcoal-light leading-tight hover:text-sunburst transition-colors text-center">Storefront decals & perf</a></div>
                                            <div><a href="/signs/business-signs/wall-signs" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors text-center">Wall Signs</a><a href="/signs/business-signs/wall-signs" class="block text-base text-charcoal-light leading-tight hover:text-sunburst transition-colors text-center">Interior murals & graphics</a></div>
                                            <div><a href="/signs/business-signs/floor-signs" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors text-center">Floor Signs</a><a href="/signs/business-signs/floor-signs" class="block text-base text-charcoal-light leading-tight hover:text-sunburst transition-colors text-center">Durable surface branding</a></div>
                                            <div><a href="/signs/business-signs/door-signs" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors text-center">Door Signs</a><a href="/signs/business-signs/door-signs" class="block text-base text-charcoal-light leading-tight hover:text-sunburst transition-colors text-center">Hours & office identifiers</a></div>
                                            <div><a href="/signs/business-signs/posters" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors text-center">Posters</a><a href="/signs/business-signs/posters" class="block text-base text-charcoal-light leading-tight hover:text-sunburst transition-colors text-center">Large format printing</a></div>
                                        </div>
                                    </div>
                                    {{-- Row 2: Ground Signs --}}
                                    <div class="pb-2 border-b border-linen-dark">
                                        <p class="text-sm font-bold uppercase tracking-widest mb-2 text-center" style="color:var(--color-olive)">Ground Signs</p>
                                        <div class="grid grid-cols-3 gap-x-4 gap-y-3">
                                            <div><a href="/signs/ground-signs/yard-signs" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors text-center">Yard Signs</a><a href="/signs/ground-signs/yard-signs" class="block text-base text-charcoal-light leading-tight hover:text-sunburst transition-colors text-center">Corrugated wire-stake signs</a></div>
                                            <div><a href="/signs/ground-signs/sidewalk-signs" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors text-center">Sidewalk Signs</a><a href="/signs/ground-signs/sidewalk-signs" class="block text-base text-charcoal-light leading-tight hover:text-sunburst transition-colors text-center">Portable sandwich boards</a></div>
                                            <div><a href="/signs/ground-signs/sidewalk-signs-a-frame-signs" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors text-center">A-Frame Signs</a><a href="/signs/ground-signs/sidewalk-signs-a-frame-signs" class="block text-base text-charcoal-light leading-tight hover:text-sunburst transition-colors text-center">A-frame & sidewalk signs</a></div>
                                        </div>
                                    </div>
                                    {{-- Row 3: Table Signs --}}
                                    <div>
                                        <p class="text-sm font-bold uppercase tracking-widest mb-2 text-center" style="color:var(--color-olive)">Table Signs</p>
                                        <div class="grid grid-cols-3 gap-x-4 gap-y-3">
                                            <div><a href="/signs/table-signs/table-cloths" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors text-center">Table Cloths</a><a href="/signs/table-signs/table-cloths" class="block text-base text-charcoal-light leading-tight hover:text-sunburst transition-colors text-center">Full-color branded covers</a></div>
                                            <div><a href="/signs/table-signs/table-runners" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors text-center">Table Runners</a><a href="/signs/table-signs/table-runners" class="block text-base text-charcoal-light leading-tight hover:text-sunburst transition-colors text-center">Accent event branding</a></div>
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
                    <a href="/stickers" class="px-2 h-full text-base font-semibold whitespace-nowrap inline-flex items-center gap-0.5 {{ $currentPage === 'stickers' ? 'text-azure' : 'text-charcoal hover:text-sunburst' }} transition-colors">
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
                        style="width: 960px; max-width: calc(100vw - 20px);"
                    >
                        <div class="flex items-stretch bg-white shadow-gold-xl border-t-[6px] border-sunburst">
                            <div class="flex-1 pl-5 pt-2 pb-5 min-w-0">
                                <a href="/stickers" class="flex items-center justify-center gap-2 pb-2 mb-2 border-b border-linen-dark group">
                                    <span class="font-bold text-lg text-charcoal group-hover:text-sunburst transition-colors whitespace-nowrap">Stickers</span>
                                    <span class="text-base text-charcoal-light">Vinyl stickers & labels, any shape, no minimums, fast turnaround.</span>
                                    <svg class="w-4 h-4 text-sunburst shrink-0 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                </a>
                                <p class="text-sm font-bold uppercase tracking-widest mb-2 text-center" style="color:var(--color-olive)">Sticker Types</p>
                                <div class="grid grid-cols-3 gap-x-4 gap-y-3">
                                    <div><a href="/stickers/standard-stickers-decals" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors text-center">Standard</a><a href="/stickers/standard-stickers-decals" class="block text-base text-charcoal-light leading-tight hover:text-sunburst transition-colors text-center">Round, square, and rectangle</a></div>
                                    <div><a href="/stickers/custom-shaped-stickers-decals" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors text-center">Custom Shaped</a><a href="/stickers/custom-shaped-stickers-decals" class="block text-base text-charcoal-light leading-tight hover:text-sunburst transition-colors text-center">Die-cut to any shape</a></div>
                                </div>
                            </div>
                            <x-layout.mega-menu-ad
                                image="/images/stickers-decals/top5pct-stickers-decals-joliet-labels.jpg"
                                alt="Custom stickers and decals"
                                tag="No Minimums"
                                title="Stickers & Decals"
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
                    <a href="/vehicle-graphics" class="px-2 h-full text-base font-semibold whitespace-nowrap inline-flex items-center gap-0.5 {{ $currentPage === 'vehicle-graphics' ? 'text-azure' : 'text-charcoal hover:text-sunburst' }} transition-colors">
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
                        style="width: 960px; max-width: calc(100vw - 20px);"
                    >
                        <div class="flex items-stretch bg-white shadow-gold-xl border-t-[6px] border-sunburst">
                            <div class="flex-1 pl-5 pt-2 pb-5 min-w-0">
                                <a href="/vehicle-graphics" class="flex items-center justify-center gap-2 pb-2 mb-2 border-b border-linen-dark group">
                                    <span class="font-bold text-lg text-charcoal group-hover:text-sunburst transition-colors whitespace-nowrap">Vehicle Decals</span>
                                    <span class="text-base text-charcoal-light">Wraps, lettering & magnets for cars, trucks & fleets.</span>
                                    <svg class="w-4 h-4 text-sunburst shrink-0 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                </a>
                                <p class="text-sm font-bold uppercase tracking-widest mb-2 text-center" style="color:var(--color-olive)">Vehicle Products</p>
                                <div class="grid grid-cols-3 gap-x-4 gap-y-3">
                                    <div><a href="/vehicle-graphics/automobile-graphics" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors text-center">Automobile Graphics</a><a href="/vehicle-graphics/automobile-graphics" class="block text-base text-charcoal-light leading-tight hover:text-sunburst transition-colors text-center">Full wraps & vinyl lettering</a></div>
                                    <div><a href="/vehicle-graphics/vehicle-magnets" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors text-center">Vehicle Magnets</a><a href="/vehicle-graphics/vehicle-magnets" class="block text-base text-charcoal-light leading-tight hover:text-sunburst transition-colors text-center">Removable magnetic signs</a></div>
                                    <div><a href="/vehicle-graphics/dot-decals" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors text-center">DOT Decals</a><a href="/vehicle-graphics/dot-decals" class="block text-base text-charcoal-light leading-tight hover:text-sunburst transition-colors text-center">Compliant number lettering</a></div>
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
                    <a href="/promotional-items" class="px-2 h-full text-base font-semibold whitespace-nowrap inline-flex items-center gap-0.5 {{ $currentPage === 'promotional-items' ? 'text-azure' : 'text-charcoal hover:text-sunburst' }} transition-colors">
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
                        style="width: 960px; max-width: calc(100vw - 20px);"
                    >
                        <div class="flex items-stretch bg-white shadow-gold-xl border-t-[6px] border-sunburst">
                            <div class="flex-1 pl-5 pt-2 pb-5 min-w-0">
                                <a href="/promotional-items" class="flex items-center justify-center gap-2 pb-2 mb-2 border-b border-linen-dark group">
                                    <span class="font-bold text-lg text-charcoal group-hover:text-sunburst transition-colors whitespace-nowrap">Promo Items</span>
                                    <span class="text-base text-charcoal-light">Branded giveaways for events, offices & trade shows.</span>
                                    <svg class="w-4 h-4 text-sunburst shrink-0 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                </a>
                                <p class="text-sm font-bold uppercase tracking-widest mb-2 text-center" style="color:var(--color-olive)">Promo Products</p>
                                <div class="grid grid-cols-3 gap-x-4 gap-y-3">
                                    <div><a href="/promotional-items/mugs" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors text-center">Mugs</a><a href="/promotional-items/mugs" class="block text-base text-charcoal-light leading-tight hover:text-sunburst transition-colors text-center">Full color sublimation</a></div>
                                    <div><a href="/promotional-items/can-koozies" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors text-center">Can Koozies</a><a href="/promotional-items/can-koozies" class="block text-base text-charcoal-light leading-tight hover:text-sunburst transition-colors text-center">Branded foam & neoprene</a></div>
                                    <div><a href="/promotional-items/towels" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors text-center">Towels</a><a href="/promotional-items/towels" class="block text-base text-charcoal-light leading-tight hover:text-sunburst transition-colors text-center">Beach & sport towels</a></div>
                                    <div><a href="/promotional-items/drink-coasters" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors text-center">Drink Coasters</a><a href="/promotional-items/drink-coasters" class="block text-base text-charcoal-light leading-tight hover:text-sunburst transition-colors text-center">Ceramic, neoprene, board</a></div>
                                    <div><a href="/promotional-items/tote-bags" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors text-center">Drawstring/Tote Bags</a><a href="/promotional-items/tote-bags" class="block text-base text-charcoal-light leading-tight hover:text-sunburst transition-colors text-center">Branded canvas bags</a></div>
                                    <div><a href="/promotional-items/mouse-pads" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors text-center">Mouse Pads</a><a href="/promotional-items/mouse-pads" class="block text-base text-charcoal-light leading-tight hover:text-sunburst transition-colors text-center">Full-surface desk pads</a></div>
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

                {{-- Top 5% Merchandise, plain link, no dropdown --}}
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
                    <a href="/design-services" class="px-2 h-full text-base font-semibold whitespace-nowrap inline-flex items-center gap-0.5 {{ $currentPage === 'design-services' ? 'text-azure' : 'text-charcoal hover:text-sunburst' }} transition-colors">
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
                        style="width: 960px; max-width: calc(100vw - 20px);"
                    >
                        <div class="flex items-stretch bg-white shadow-gold-xl border-t-[6px] border-sunburst">
                            <div class="flex-1 pl-5 pt-2 pb-5 min-w-0">
                                <a href="/design-services" class="flex items-center justify-center gap-2 pb-2 mb-2 border-b border-linen-dark group">
                                    <span class="font-bold text-lg text-charcoal group-hover:text-sunburst transition-colors whitespace-nowrap">Design Services</span>
                                    <span class="text-base text-charcoal-light">Logos, layouts & print-ready artwork, concept to finished files.</span>
                                    <svg class="w-4 h-4 text-sunburst shrink-0 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                </a>
                                <p class="text-sm font-bold uppercase tracking-widest mb-2 text-center" style="color:var(--color-olive)">Service Options</p>
                                <div class="grid grid-cols-3 gap-x-4 gap-y-3">
                                    <div><a href="/design-services/logo-design" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors text-center">Logo Design</a><a href="/design-services/logo-design" class="block text-base text-charcoal-light leading-tight hover:text-sunburst transition-colors text-center">Concept to final files</a></div>
                                    <div><a href="/design-services/graphic-design" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors text-center">Layout/Graphic Design</a><a href="/design-services/graphic-design" class="block text-base text-charcoal-light leading-tight hover:text-sunburst transition-colors text-center">Print-ready layouts & artwork</a></div>
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
                    <a href="/about-us" class="px-2 h-full text-base font-semibold whitespace-nowrap inline-flex items-center gap-0.5 {{ $currentPage === 'about' ? 'text-azure' : 'text-charcoal hover:text-sunburst' }} transition-colors">
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
                        style="width: 960px; max-width: calc(100vw - 20px);"
                    >
                        <div class="flex items-stretch bg-white shadow-gold-xl border-t-[6px] border-sunburst">
                            <div class="flex-1 pl-5 pt-2 pb-5 min-w-0">
                                <a href="/about-us" class="flex items-center justify-center gap-2 pb-2 mb-2 border-b border-linen-dark group">
                                    <span class="font-bold text-lg text-charcoal group-hover:text-sunburst transition-colors whitespace-nowrap">About Us</span>
                                    <span class="text-base text-charcoal-light">Veteran-owned in Joliet, IL, quality custom printing since 2017.</span>
                                    <svg class="w-4 h-4 text-sunburst shrink-0 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                                </a>
                                <p class="text-sm font-bold uppercase tracking-widest mb-2 text-center" style="color:var(--color-olive)">Our Company</p>
                                <div class="grid grid-cols-3 gap-x-4 gap-y-3">
                                    <div><a href="/about-us" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors text-center">About Us</a><a href="/about-us" class="block text-base text-charcoal-light leading-tight hover:text-sunburst transition-colors text-center">Our mission & team</a></div>
                                    <div><a href="/portfolio" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors text-center">Portfolio</a><a href="/portfolio" class="block text-base text-charcoal-light leading-tight hover:text-sunburst transition-colors text-center">View our past work</a></div>
                                    <div><a href="/articles" class="block text-lg font-bold text-charcoal hover:text-sunburst transition-colors text-center">Articles</a><a href="/articles" class="block text-base text-charcoal-light leading-tight hover:text-sunburst transition-colors text-center">Tips & helpful guides</a></div>
                                </div>
                            </div>
                            <x-layout.mega-menu-ad
                                image="/images/about-preview.jpg"
                                alt="Veteran owned Joliet IL"
                                tag="Veteran Owned"
                                title="Top 5 Percent"
                                desc="Joliet, IL. Serving our community since 2017."
                                cta="Our Story"
                                href="/about-us"
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
         MOBILE MENU, Accordion
         ================================================================== --}}
    <div x-cloak x-show="mobileMenuOpen" x-transition class="lg:hidden border-t border-linen-dark overflow-y-auto max-h-[calc(100vh-7rem)]">
        <div class="max-w-7xl mx-auto px-4 py-4 space-y-1">

            <a href="/" class="block px-3 py-2.5 text-sm font-semibold text-charcoal hover:text-sunburst hover:bg-linen rounded transition-colors">Home</a>

            <div>
                <button @click="openMobile = openMobile === 'apparel' ? null : 'apparel'" class="w-full flex items-center justify-between px-3 py-2.5 text-sm font-semibold text-charcoal hover:text-sunburst hover:bg-linen rounded transition-colors">
                    <span>Custom Apparel</span>
                    <svg class="w-4 h-4 transition-transform duration-200" :class="openMobile === 'apparel' ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="openMobile === 'apparel'" x-transition class="pl-4 pt-1 pb-2 space-y-1 border-l-2 border-sunburst ml-3">
                    <a href="/custom-apparel" class="block px-3 py-1.5 text-sm font-bold text-sunburst">View All</a>
                    <a href="/custom-apparel/printing-options/dtf-printing" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Direct to Film (DTF)</a>
                    <a href="/custom-apparel/printing-options/dye-sublimation-printing" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Dye-Sublimation</a>
                    <a href="/custom-apparel/printing-options/screen-printing" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Screen Printing</a>
                    <a href="/custom-apparel/printing-options/embroidery" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Embroidery</a>
                    <a href="/custom-apparel/printing-options/rhinestone-apparel" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Rhinestone Apparel</a>
                    <a href="/custom-apparel/printing-options/digital-vinyl" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Digital Vinyl</a>
                    <a href="/custom-apparel/specialty-materials/glitter-shirts" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Glitter Shirts</a>
                    <a href="/custom-apparel/specialty-materials/puff-shirts" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Puff Shirts</a>
                    <a href="/custom-apparel/specialty-materials/foil-shirts" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Foil Shirts</a>
                    <a href="/custom-apparel/specialty-materials/glow-in-the-dark-shirts" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Glow in the Dark</a>
                    <a href="/custom-apparel/specialty-materials/flock-shirts" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Flock Shirts</a>
                    <a href="/custom-apparel/specialty-materials/reflective-shirts" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Reflective Shirts</a>
                    <a href="/custom-apparel/specialty-materials/vinyl" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Vinyl Shirts</a>
                    <a href="/custom-apparel/specialty-materials/holographic-shirts" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Holographic Shirts</a>
                    <a href="/custom-apparel/group-wear/corporate-wear-shirts" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Corporate Wear</a>
                    <a href="/custom-apparel/group-wear/spirit-wear-shirts" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Spirit Wear</a>
                    <a href="/custom-apparel/group-wear/reunion-shirts" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Reunion Shirts</a>
                </div>
            </div>

            <div>
                <button @click="openMobile = openMobile === 'signs' ? null : 'signs'" class="w-full flex items-center justify-between px-3 py-2.5 text-sm font-semibold text-charcoal hover:text-sunburst hover:bg-linen rounded transition-colors">
                    <span>Select a Sign</span>
                    <svg class="w-4 h-4 transition-transform duration-200" :class="openMobile === 'signs' ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="openMobile === 'signs'" x-transition class="pl-4 pt-1 pb-2 space-y-1 border-l-2 border-sunburst ml-3">
                    <a href="/signs" class="block px-3 py-1.5 text-sm font-bold text-sunburst">View All Signs</a>
                    <a href="/signs/business-signs/banners" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Banners</a>
                    <a href="/signs/ground-signs/yard-signs" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Yard Signs</a>
                    <a href="/signs/ground-signs/sidewalk-signs" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Sidewalk Signs</a>
                    <a href="/signs/ground-signs/sidewalk-signs-a-frame-signs" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">A-Frame Signs</a>
                    <a href="/signs/business-signs/window-signs" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Window Signs</a>
                    <a href="/signs/business-signs/wall-signs" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Wall Signs</a>
                    <a href="/signs/business-signs/floor-signs" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Floor Signs</a>
                    <a href="/signs/business-signs/door-signs" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Door Signs</a>
                    <a href="/signs/business-signs/posters" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Posters</a>
                    <a href="/signs/table-signs/table-runners" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Table Runners</a>
                    <a href="/signs/table-signs/table-cloths" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Table Cloths</a>
                </div>
            </div>

            <div>
                <button @click="openMobile = openMobile === 'stickers' ? null : 'stickers'" class="w-full flex items-center justify-between px-3 py-2.5 text-sm font-semibold text-charcoal hover:text-sunburst hover:bg-linen rounded transition-colors">
                    <span>Stickers</span>
                    <svg class="w-4 h-4 transition-transform duration-200" :class="openMobile === 'stickers' ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="openMobile === 'stickers'" x-transition class="pl-4 pt-1 pb-2 space-y-1 border-l-2 border-sunburst ml-3">
                    <a href="/stickers" class="block px-3 py-1.5 text-sm font-bold text-sunburst">View All Stickers</a>
                    <a href="/stickers/standard-stickers-decals" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Standard Stickers & Decals</a>
                    <a href="/stickers/custom-shaped-stickers-decals" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Custom Shaped Stickers & Decals</a>
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
                </div>
            </div>

            <div>
                <button @click="openMobile = openMobile === 'about' ? null : 'about'" class="w-full flex items-center justify-between px-3 py-2.5 text-sm font-semibold text-charcoal hover:text-sunburst hover:bg-linen rounded transition-colors">
                    <span>About Us</span>
                    <svg class="w-4 h-4 transition-transform duration-200" :class="openMobile === 'about' ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="openMobile === 'about'" x-transition class="pl-4 pt-1 pb-2 space-y-1 border-l-2 border-sunburst ml-3">
                    <a href="/about-us" class="block px-3 py-1.5 text-sm font-bold text-sunburst">About Us</a>
                    <a href="/portfolio" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Portfolio</a>
                    <a href="/articles" class="block px-3 py-1.5 text-sm text-charcoal hover:text-sunburst">Articles</a>
                </div>
            </div>

            <a href="/top5pct-merchandise" class="block px-3 py-2.5 text-sm font-semibold text-charcoal hover:text-sunburst hover:bg-linen rounded transition-colors">Top 5% Merchandise</a>
        </div>
    </div>
</nav>
