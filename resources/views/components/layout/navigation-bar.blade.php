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
    class="bg-navy shadow-sm relative z-50"
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
                    src="/images/logos/stop-and-go-inverted-logo-large.svg"
                    alt="Stop & Go Airport Shuttle Service, Inc"
                    class="transition-all duration-300 transform-gpu h-10 lg:h-16"
                    x-bind:class="scrolled ? 'h-8 lg:h-10' : 'h-10 lg:h-16'"
                >
            </a>

            {{-- Mobile social icons --}}
            <div class="flex-1 flex md:hidden justify-center items-center gap-2">
                <a href="https://www.google.com/maps/search/Stop+and+Go+Limo+New+Lenox+IL" target="_blank" rel="noopener" aria-label="Google Maps" class="text-cloud opacity-60 hover:opacity-100 hover:scale-125 hover:text-champagne transition-all duration-200">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12.48 10.92v3.28h7.84c-.24 1.84-.853 3.187-1.787 4.133-1.147 1.147-2.933 2.4-6.053 2.4-4.827 0-8.6-3.893-8.6-8.72s3.773-8.72 8.6-8.72c2.6 0 4.507 1.027 5.907 2.347l2.307-2.307C18.747 1.44 16.133 0 12.48 0 5.867 0 .307 5.387.307 12s5.56 12 12.173 12c3.573 0 6.267-1.173 8.373-3.36 2.16-2.16 2.84-5.213 2.84-7.667 0-.76-.053-1.467-.173-2.053H12.48z"/></svg>
                </a>
                <a href="https://www.facebook.com/stopandgoairportshuttle" target="_blank" rel="noopener" aria-label="Facebook" class="text-cloud opacity-60 hover:opacity-100 hover:scale-125 hover:text-champagne transition-all duration-200">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                </a>
                <a href="https://www.instagram.com/stopandgolimo" target="_blank" rel="noopener" aria-label="Instagram" class="text-cloud opacity-60 hover:opacity-100 hover:scale-125 hover:text-champagne transition-all duration-200">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                </a>
                <a href="https://www.linkedin.com/company/stopandgolimo" target="_blank" rel="noopener" aria-label="LinkedIn" class="text-cloud opacity-60 hover:opacity-100 hover:scale-125 hover:text-champagne transition-all duration-200">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                </a>
            </div>

            {{-- Mobile hamburger --}}
            <button
                @click="mobileMenuOpen = !mobileMenuOpen"
                class="md:hidden p-2 text-cloud hover:text-champagne"
                aria-label="Toggle menu"
            >
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>

            {{-- ── Desktop Nav Links ────────────────────────────────────── --}}
            <div class="hidden md:flex flex-1 self-stretch items-stretch justify-between relative z-50">

                {{-- Welcome (no dropdown) --}}
                <div class="relative self-stretch flex items-stretch">
                    <a href="/" class="px-2 h-full text-base font-semibold leading-tight text-center inline-flex items-center {{ $currentPage === 'home' ? 'text-champagne border-b-[3px] border-champagne' : 'text-cloud hover:text-champagne hover:border-b-[3px] hover:border-champagne' }} transition-colors">Welcome</a>
                </div>

                {{-- ══ About ════════════════════════════════════════════════ --}}
                <div
                    class="self-stretch flex items-stretch"
                    @mouseenter="openMenu = 'about'"
                    @mouseleave="openMenu = null"
                >
                    <a href="/about" class="px-2 h-full text-base font-semibold leading-tight text-center inline-flex items-center gap-0.5 {{ $currentPage === 'about' ? 'text-champagne border-b-[3px] border-champagne' : 'text-cloud hover:text-champagne hover:border-b-[3px] hover:border-champagne' }} transition-colors">
                        About
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
                        class="absolute top-full left-0 z-50 pt-2 -mt-2"
                        style="width: 300px; max-width: calc(100vw - 20px);"
                    >
                        <div class="bg-navy-dark border-t-[3px] border-champagne shadow-champagne-lg">
                            <a href="/about" class="flex flex-col px-5 py-3 border-b border-white/8 hover:bg-white/5 transition-colors group">
                                <span class="font-head font-semibold text-cloud group-hover:text-champagne transition-colors">About Us</span>
                                <span class="text-sm text-muted mt-0.5">Our story and chauffeurs</span>
                            </a>
                            <a href="/rates" class="flex flex-col px-5 py-3 border-b border-white/8 hover:bg-white/5 transition-colors group">
                                <span class="font-head font-semibold text-cloud group-hover:text-champagne transition-colors">Rates</span>
                                <span class="text-sm text-muted mt-0.5">Transparent flat pricing</span>
                            </a>
                            <a href="/gallery" class="flex flex-col px-5 py-3 hover:bg-white/5 transition-colors group">
                                <span class="font-head font-semibold text-cloud group-hover:text-champagne transition-colors">Gallery</span>
                                <span class="text-sm text-muted mt-0.5">Our luxury fleet</span>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Booking (no dropdown) --}}
                <div class="relative self-stretch flex items-stretch">
                    <a href="/bookings-reservations" class="px-2 h-full text-base font-semibold leading-tight text-center inline-flex items-center {{ $currentPage === 'booking' ? 'text-champagne border-b-[3px] border-champagne' : 'text-cloud hover:text-champagne hover:border-b-[3px] hover:border-champagne' }} transition-colors">Booking</a>
                </div>

                {{-- ══ Services (mega, three-col with Party Bus flyout left) ════ --}}
                <div
                    class="relative self-stretch flex items-stretch"
                    @mouseenter="openMenu = 'services'"
                    @mouseleave="openMenu = null"
                >
                    <a href="/our-services" class="px-2 h-full text-base font-semibold leading-tight text-center inline-flex items-center gap-0.5 {{ $currentPage === 'services' ? 'text-champagne border-b-[3px] border-champagne' : 'text-cloud hover:text-champagne hover:border-b-[3px] hover:border-champagne' }} transition-colors">
                        Services
                        <svg class="w-3 h-3 shrink-0 transition-transform duration-200 transform-gpu pointer-events-none" :class="openMenu === 'services' ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                    </a>
                    <div
                        x-cloak x-show="openMenu === 'services'"
                        x-transition:enter="transition ease-out duration-150"
                        x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        class="absolute top-full z-50 pt-2 -mt-2"
                        style="width: 720px; max-width: calc(100vw - 20px); left: 50%; transform: translateX(-50%);"
                    >
                        <div class="bg-navy-dark border-t-[3px] border-champagne shadow-champagne-lg">
                            {{-- Three-column grid of services --}}
                            <div class="grid grid-cols-3">

                                {{-- Row 1 --}}
                                <a href="/limousine-services" class="flex flex-col px-5 py-3 border-b border-r border-white/8 hover:bg-white/5 transition-colors group">
                                    <span class="font-head font-semibold text-cloud group-hover:text-champagne transition-colors">Limousine Services</span>
                                    <span class="text-sm text-muted mt-0.5">Classic luxury limos</span>
                                </a>
                                <a href="/wedding-limousine-services" class="flex flex-col px-5 py-3 border-b border-r border-white/8 hover:bg-white/5 transition-colors group">
                                    <span class="font-head font-semibold text-cloud group-hover:text-champagne transition-colors">Wedding Limousines</span>
                                    <span class="text-sm text-muted mt-0.5">Elegant event transport</span>
                                </a>
                                {{-- Party Buses — col 3, flyout opens LEFT (right-full) --}}
                                <div
                                    class="relative border-b border-white/8"
                                    @mouseenter="openMenu = 'services-partybus'"
                                    @mouseleave="openMenu = 'services'"
                                >
                                    <a href="/party-bus-rental-chicago" class="flex flex-col px-5 py-3 hover:bg-white/5 transition-colors group h-full">
                                        <span class="font-head font-semibold text-cloud group-hover:text-champagne transition-colors">Party Buses <span class="text-champagne/60 text-xs ml-1">&#9664;</span></span>
                                        <span class="text-sm text-muted mt-0.5">Groups and celebrations</span>
                                    </a>
                                    <div
                                        x-cloak x-show="openMenu === 'services-partybus'"
                                        x-transition:enter="transition ease-out duration-100"
                                        x-transition:enter-start="opacity-0"
                                        x-transition:enter-end="opacity-100"
                                        x-transition:leave="transition ease-in duration-75"
                                        x-transition:leave-start="opacity-100"
                                        x-transition:leave-end="opacity-0"
                                        class="absolute top-0 right-full z-50"
                                        style="width: 240px;"
                                    >
                                        <div class="bg-navy-dark border border-champagne/20 border-r-[3px] border-r-champagne shadow-champagne-lg">
                                            <a href="/party-bus-aurora" class="flex flex-col px-5 py-3 border-b border-white/8 hover:bg-white/5 transition-colors group">
                                                <span class="font-head font-semibold text-cloud group-hover:text-champagne transition-colors">Party Bus, Aurora</span>
                                            </a>
                                            <a href="/party-bus-rental-naperville" class="flex flex-col px-5 py-3 hover:bg-white/5 transition-colors group">
                                                <span class="font-head font-semibold text-cloud group-hover:text-champagne transition-colors">Party Bus, Naperville</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                {{-- Row 2 --}}
                                <a href="/town-car-services" class="flex flex-col px-5 py-3 border-b border-r border-white/8 hover:bg-white/5 transition-colors group">
                                    <span class="font-head font-semibold text-cloud group-hover:text-champagne transition-colors">Town Car Services</span>
                                    <span class="text-sm text-muted mt-0.5">Premium sedans</span>
                                </a>
                                <a href="/corporate-car-services" class="flex flex-col px-5 py-3 border-b border-r border-white/8 hover:bg-white/5 transition-colors group">
                                    <span class="font-head font-semibold text-cloud group-hover:text-champagne transition-colors">Corporate Car Services</span>
                                    <span class="text-sm text-muted mt-0.5">Executive ground service</span>
                                </a>
                                <a href="/transportation-services" class="flex flex-col px-5 py-3 border-b border-white/8 hover:bg-white/5 transition-colors group">
                                    <span class="font-head font-semibold text-cloud group-hover:text-champagne transition-colors">Transportation</span>
                                    <span class="text-sm text-muted mt-0.5">Point-to-point rides</span>
                                </a>

                                {{-- Row 3 --}}
                                <a href="/chauffeurs" class="flex flex-col px-5 py-3 border-b border-r border-white/8 hover:bg-white/5 transition-colors group">
                                    <span class="font-head font-semibold text-cloud group-hover:text-champagne transition-colors">Chauffeurs</span>
                                    <span class="text-sm text-muted mt-0.5">Professional drivers</span>
                                </a>
                                <a href="/coach-buses" class="flex flex-col px-5 py-3 border-b border-r border-white/8 hover:bg-white/5 transition-colors group">
                                    <span class="font-head font-semibold text-cloud group-hover:text-champagne transition-colors">Coach Buses</span>
                                    <span class="text-sm text-muted mt-0.5">Large-group charters</span>
                                </a>
                                <a href="/special-event-limousine" class="flex flex-col px-5 py-3 border-b border-white/8 hover:bg-white/5 transition-colors group">
                                    <span class="font-head font-semibold text-cloud group-hover:text-champagne transition-colors">Special Event Limousines</span>
                                    <span class="text-sm text-muted mt-0.5">Any occasion</span>
                                </a>

                                {{-- Row 4 (2 items) --}}
                                <a href="/airport-shuttle-ohare-midway" class="flex flex-col px-5 py-3 border-b border-r border-white/8 hover:bg-white/5 transition-colors group">
                                    <span class="font-head font-semibold text-cloud group-hover:text-champagne transition-colors">Airport Shuttle Services</span>
                                    <span class="text-sm text-muted mt-0.5">O'Hare and Midway transfers</span>
                                </a>
                                <a href="/new-bus-rental" class="flex flex-col px-5 py-3 border-b border-r border-white/8 hover:bg-white/5 transition-colors group">
                                    <span class="font-head font-semibold text-cloud group-hover:text-champagne transition-colors">New Bus Rentals</span>
                                    <span class="text-sm text-muted mt-0.5">Latest-model coaches</span>
                                </a>
                                <div class="border-b border-white/8"></div>

                                {{-- Row 5 (2 items, last row — no border-b) --}}
                                <a href="/grad-day-transportation" class="flex flex-col px-5 py-3 border-r border-white/8 hover:bg-white/5 transition-colors group">
                                    <span class="font-head font-semibold text-cloud group-hover:text-champagne transition-colors">Graduation Day Limos</span>
                                    <span class="text-sm text-muted mt-0.5">Graduation transport</span>
                                </a>
                                <a href="/prom-party-bus-rental-illinois" class="flex flex-col px-5 py-3 border-r border-white/8 hover:bg-white/5 transition-colors group">
                                    <span class="font-head font-semibold text-cloud group-hover:text-champagne transition-colors">Prom Party Buses</span>
                                    <span class="text-sm text-muted mt-0.5">Safe prom-night transport</span>
                                </a>
                                <div></div>

                            </div>
                        </div>
                    </div>
                </div>

                {{-- ══ Special Events ═══════════════════════════════════════ --}}
                <div
                    class="self-stretch flex items-stretch"
                    @mouseenter="openMenu = 'events'"
                    @mouseleave="openMenu = null"
                >
                    <a href="/special-event-limousine" class="px-2 h-full text-base font-semibold leading-tight text-center inline-flex items-center gap-0.5 {{ $currentPage === 'special-events' ? 'text-champagne border-b-[3px] border-champagne' : 'text-cloud hover:text-champagne hover:border-b-[3px] hover:border-champagne' }} transition-colors">
                        Special Events
                        <svg class="w-3 h-3 shrink-0 transition-transform duration-200 transform-gpu pointer-events-none" :class="openMenu === 'events' ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                    </a>
                    <div
                        x-cloak x-show="openMenu === 'events'"
                        x-transition:enter="transition ease-out duration-150"
                        x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        class="absolute top-full left-0 z-50 pt-2 -mt-2"
                        style="width: 320px; max-width: calc(100vw - 20px);"
                    >
                        <div class="bg-navy-dark border-t-[3px] border-champagne shadow-champagne-lg">
                            <a href="/six-flags-party-bus" class="flex flex-col px-5 py-3 border-b border-white/8 hover:bg-white/5 transition-colors group">
                                <span class="font-head font-semibold text-cloud group-hover:text-champagne transition-colors">Six Flags Party Bus</span>
                            </a>
                            <a href="/chicago-golf-party-bus" class="flex flex-col px-5 py-3 border-b border-white/8 hover:bg-white/5 transition-colors group">
                                <span class="font-head font-semibold text-cloud group-hover:text-champagne transition-colors">Golfing Party Bus</span>
                            </a>
                            <a href="/chicago-concert-party-bus-rental" class="flex flex-col px-5 py-3 border-b border-white/8 hover:bg-white/5 transition-colors group">
                                <span class="font-head font-semibold text-cloud group-hover:text-champagne transition-colors">Concert Party Bus Rental</span>
                            </a>
                            <a href="/chicago-bears-party-bus" class="flex flex-col px-5 py-3 border-b border-white/8 hover:bg-white/5 transition-colors group">
                                <span class="font-head font-semibold text-cloud group-hover:text-champagne transition-colors">Chicago Bears Party and Limo Bus</span>
                            </a>
                            <a href="/chicago-bulls-party-bus" class="flex flex-col px-5 py-3 border-b border-white/8 hover:bg-white/5 transition-colors group">
                                <span class="font-head font-semibold text-cloud group-hover:text-champagne transition-colors">Chicago Bulls Party Bus</span>
                            </a>
                            <a href="/chicago-blackhawks-party-bus" class="flex flex-col px-5 py-3 hover:bg-white/5 transition-colors group">
                                <span class="font-head font-semibold text-cloud group-hover:text-champagne transition-colors">Chicago Blackhawks Party Bus</span>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- ══ Service Areas (4-col grid of 22 cities) ══════════════ --}}
                <div
                    class="self-stretch flex items-stretch"
                    @mouseenter="openMenu = 'areas'"
                    @mouseleave="openMenu = null"
                >
                    <a href="/service-areas" class="px-2 h-full text-base font-semibold leading-tight text-center inline-flex items-center gap-0.5 {{ $currentPage === 'service-areas' ? 'text-champagne border-b-[3px] border-champagne' : 'text-cloud hover:text-champagne hover:border-b-[3px] hover:border-champagne' }} transition-colors">
                        Service Areas
                        <svg class="w-3 h-3 shrink-0 transition-transform duration-200 transform-gpu pointer-events-none" :class="openMenu === 'areas' ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                    </a>
                    <div
                        x-cloak x-show="openMenu === 'areas'"
                        x-transition:enter="transition ease-out duration-150"
                        x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        class="absolute top-full right-0 z-50 pt-2 -mt-2"
                        style="width: 560px; max-width: calc(100vw - 20px);"
                    >
                        <div class="bg-navy-dark border-t-[3px] border-champagne shadow-champagne-lg">
                            <p class="px-5 pt-4 pb-2 font-head font-semibold text-xs tracking-widest text-champagne/70">Chicagoland Suburbs, 24/7</p>
                            @php
                                $areaLinks = [
                                    'Aurora'       => '/aurora-limo-service',
                                    'Bolingbrook'  => '/bolingbrook-airport-shuttle-ohare-midway',
                                    'Channahon'    => '/24-7-channahon-il-limo-service',
                                    'Elwood'       => '/24-7-elwood-il-limo-service',
                                    'Frankfort'    => '/24-7-frankfort-il-limo-service',
                                    'Homer Glen'   => '/24-7-homer-glen-limo-service',
                                    'Joliet'       => '/24-7-joliet-il-limo-services',
                                    'Lemont'       => '/24-7-lemont-il-limo-service',
                                    'Lockport'     => '/24-7-lockport-il-limo-service',
                                    'Manhattan'    => '/24-7-manhattan-limo-service',
                                    'Minooka'      => '/24-7-minooka-il-limo-service',
                                    'Mokena'       => '/24-7-mokena-il-limo-service',
                                    'Monee'        => '/24-7-monee-il-limo-service',
                                    'Montgomery'   => '/24-7-montgomery-il-limo-service',
                                    'Morris'       => '/morris-il-limo-service',
                                    'Naperville'   => '/naperville-airport-shuttle-limo-service',
                                    'New Lenox'    => '/new-lenox-airport-shuttle-limo-service',
                                    'North Aurora' => '/24-7-north-aurora-il-limo-service',
                                    'Orland Park'  => '/24-7-orland-park-il-limo-service',
                                    'Oswego'       => '/oswego-il-limo-service',
                                    'Plainfield'   => '/plainfield-limousine-shuttle-service',
                                    'Romeoville'   => '/romeoville-airport-shuttle-limo-service',
                                ];
                            @endphp
                            <div class="grid grid-cols-4 gap-0 pb-3">
                                @foreach($areaLinks as $city => $href)
                                <a href="{{ $href }}" class="px-4 py-2 font-head text-sm text-cloud hover:text-champagne hover:bg-white/5 transition-colors">{{ $city }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Contact (no dropdown) --}}
                <div class="relative self-stretch flex items-stretch">
                    <a href="/get-a-quote" class="px-2 h-full text-base font-semibold leading-tight text-center inline-flex items-center {{ $currentPage === 'contact' ? 'text-champagne border-b-[3px] border-champagne' : 'text-cloud hover:text-champagne hover:border-b-[3px] hover:border-champagne' }} transition-colors">Contact</a>
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
    <div x-cloak x-show="mobileMenuOpen" x-transition class="md:hidden border-t border-champagne/20 max-h-[calc(100vh-6.5rem)] overflow-y-auto bg-navy-dark">
        <div class="max-w-7xl mx-auto px-4 py-4 space-y-1">

            <a href="/" class="block px-3 py-2.5 text-sm font-semibold text-cloud hover:text-champagne hover:bg-white/5 transition-colors">Welcome</a>

            <div>
                <button @click="openMobile = openMobile === 'about' ? null : 'about'" class="w-full flex items-center justify-between px-3 py-2.5 text-sm font-semibold text-cloud hover:text-champagne hover:bg-white/5 transition-colors">
                    <span>About</span>
                    <svg class="w-4 h-4 transition-transform duration-200" :class="openMobile === 'about' ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="openMobile === 'about'" x-transition class="pl-4 pt-1 pb-2 space-y-1 border-l-2 border-champagne ml-3">
                    <a href="/about" class="block px-3 py-1.5 text-sm font-semibold text-champagne">About Us</a>
                    <a href="/rates" class="block px-3 py-1.5 text-sm text-cloud/80 hover:text-champagne">Rates</a>
                    <a href="/gallery" class="block px-3 py-1.5 text-sm text-cloud/80 hover:text-champagne">Gallery</a>
                </div>
            </div>

            <a href="/bookings-reservations" class="block px-3 py-2.5 text-sm font-semibold text-cloud hover:text-champagne hover:bg-white/5 transition-colors">Booking</a>

            <div>
                <button @click="openMobile = openMobile === 'services' ? null : 'services'" class="w-full flex items-center justify-between px-3 py-2.5 text-sm font-semibold text-cloud hover:text-champagne hover:bg-white/5 transition-colors">
                    <span>Services</span>
                    <svg class="w-4 h-4 transition-transform duration-200" :class="openMobile === 'services' ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="openMobile === 'services'" x-transition class="pl-4 pt-1 pb-2 space-y-1 border-l-2 border-champagne ml-3">
                    <a href="/airport-shuttle-ohare-midway" class="block px-3 py-1.5 text-sm text-cloud/80 hover:text-champagne">Airport Shuttle</a>
                    <a href="/wedding-limousine-services" class="block px-3 py-1.5 text-sm text-cloud/80 hover:text-champagne">Wedding Limousine</a>
                    <a href="/party-bus-rental-chicago" class="block px-3 py-1.5 text-sm text-cloud/80 hover:text-champagne">Party Bus</a>
                    <a href="/party-bus-aurora" class="block px-3 py-1.5 text-sm text-cloud/60 hover:text-champagne pl-6">Party Bus, Aurora</a>
                    <a href="/party-bus-rental-naperville" class="block px-3 py-1.5 text-sm text-cloud/60 hover:text-champagne pl-6">Party Bus, Naperville</a>
                    <a href="/prom-party-bus-rental-illinois" class="block px-3 py-1.5 text-sm text-cloud/80 hover:text-champagne">Prom Party Bus</a>
                    <a href="/new-bus-rental" class="block px-3 py-1.5 text-sm text-cloud/80 hover:text-champagne">New Bus Rental</a>
                    <a href="/coach-buses" class="block px-3 py-1.5 text-sm text-cloud/80 hover:text-champagne">Coach Buses</a>
                    <a href="/limousine-services" class="block px-3 py-1.5 text-sm text-cloud/80 hover:text-champagne">Limousine Services</a>
                    <a href="/corporate-car-services" class="block px-3 py-1.5 text-sm text-cloud/80 hover:text-champagne">Corporate Car Service</a>
                    <a href="/town-car-services" class="block px-3 py-1.5 text-sm text-cloud/80 hover:text-champagne">Town Car Services</a>
                    <a href="/chauffeurs" class="block px-3 py-1.5 text-sm text-cloud/80 hover:text-champagne">Chauffeurs</a>
                    <a href="/special-event-limousine" class="block px-3 py-1.5 text-sm text-cloud/80 hover:text-champagne">Special Event Limousine</a>
                    <a href="/transportation-services" class="block px-3 py-1.5 text-sm text-cloud/80 hover:text-champagne">Transportation Services</a>
                    <a href="/grad-day-transportation" class="block px-3 py-1.5 text-sm text-cloud/80 hover:text-champagne">Grad Day Transportation</a>
                </div>
            </div>

            <div>
                <button @click="openMobile = openMobile === 'events' ? null : 'events'" class="w-full flex items-center justify-between px-3 py-2.5 text-sm font-semibold text-cloud hover:text-champagne hover:bg-white/5 transition-colors">
                    <span>Special Events</span>
                    <svg class="w-4 h-4 transition-transform duration-200" :class="openMobile === 'events' ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="openMobile === 'events'" x-transition class="pl-4 pt-1 pb-2 space-y-1 border-l-2 border-champagne ml-3">
                    <a href="/six-flags-party-bus" class="block px-3 py-1.5 text-sm text-cloud/80 hover:text-champagne">Six Flags Party Bus</a>
                    <a href="/chicago-golf-party-bus" class="block px-3 py-1.5 text-sm text-cloud/80 hover:text-champagne">Golfing Party Bus</a>
                    <a href="/chicago-concert-party-bus-rental" class="block px-3 py-1.5 text-sm text-cloud/80 hover:text-champagne">Concert Party Bus Rental</a>
                    <a href="/chicago-bears-party-bus" class="block px-3 py-1.5 text-sm text-cloud/80 hover:text-champagne">Chicago Bears Party and Limo Bus</a>
                    <a href="/chicago-bulls-party-bus" class="block px-3 py-1.5 text-sm text-cloud/80 hover:text-champagne">Chicago Bulls Party Bus</a>
                    <a href="/chicago-blackhawks-party-bus" class="block px-3 py-1.5 text-sm text-cloud/80 hover:text-champagne">Chicago Blackhawks Party Bus</a>
                </div>
            </div>

            <div>
                <button @click="openMobile = openMobile === 'areas' ? null : 'areas'" class="w-full flex items-center justify-between px-3 py-2.5 text-sm font-semibold text-cloud hover:text-champagne hover:bg-white/5 transition-colors">
                    <span>Service Areas</span>
                    <svg class="w-4 h-4 transition-transform duration-200" :class="openMobile === 'areas' ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="openMobile === 'areas'" x-transition class="pl-4 pt-1 pb-2 space-y-1 border-l-2 border-champagne ml-3">
                    @foreach($areaLinks as $city => $href)
                    <a href="{{ $href }}" class="block px-3 py-1.5 text-sm text-cloud/80 hover:text-champagne">{{ $city }}</a>
                    @endforeach
                </div>
            </div>

            <a href="/get-a-quote" class="block px-3 py-2.5 text-sm font-semibold text-cloud hover:text-champagne hover:bg-white/5 transition-colors">Contact</a>

        </div>
    </div>
</nav>
