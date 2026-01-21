@props([
    'currentPage' => null
])

<nav class="bg-charcoal text-white" x-data="{ mobileMenuOpen: false, openDropdown: null }">
    <div class="max-w-6xl mx-auto px-6">
        <div class="flex items-center justify-between py-4">
            <a href="/" class="flex items-center flex-shrink-0">
                <img src="/images/logos/top5-logo.gif" alt="Top 5 Percent" class="h-24">
            </a>

            <button 
                @click="mobileMenuOpen = !mobileMenuOpen" 
                class="lg:hidden p-2 text-white hover:text-sunburst"
                aria-label="Toggle menu"
            >
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>

            <div class="hidden lg:flex items-center space-x-1">
                <a href="/" class="px-3 py-2 text-sm font-semibold {{ $currentPage === 'home' ? 'text-sunburst' : 'text-white hover:text-sunburst-light' }} transition-colors">
                    Home
                </a>
                
                <a href="/about" class="px-3 py-2 text-sm font-semibold {{ $currentPage === 'about' ? 'text-sunburst' : 'text-white hover:text-sunburst-light' }} transition-colors">
                    About Us
                </a>

                <div class="relative" @mouseenter="openDropdown = 'apparel'" @mouseleave="openDropdown = null">
                    <button class="px-3 py-2 text-sm font-semibold text-white hover:text-sunburst-light transition-colors flex items-center gap-1">
                        Custom Apparel
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-cloak x-show="openDropdown === 'apparel'" x-transition class="absolute top-full left-0 mt-1 w-56 bg-white rounded-sm shadow-lg border border-linen-dark py-2 z-50">
                        <a href="/custom-shirts" class="block px-4 py-2 text-sm text-charcoal hover:bg-linen hover:text-sunburst">Custom Shirts</a>
                        <a href="/dtf-transfers" class="block px-4 py-2 text-sm text-charcoal hover:bg-linen hover:text-sunburst">DTF Transfers</a>
                        <a href="/reunion-shirts" class="block px-4 py-2 text-sm text-charcoal hover:bg-linen hover:text-sunburst">Reunion Shirts</a>
                        <a href="/corporate-wear" class="block px-4 py-2 text-sm text-charcoal hover:bg-linen hover:text-sunburst">Corporate Wear</a>
                        <a href="/spirit-wear" class="block px-4 py-2 text-sm text-charcoal hover:bg-linen hover:text-sunburst">Spirit Wear</a>
                    </div>
                </div>

                <div class="relative" @mouseenter="openDropdown = 'design'" @mouseleave="openDropdown = null">
                    <button class="px-3 py-2 text-sm font-semibold text-white hover:text-sunburst-light transition-colors flex items-center gap-1">
                        Design It Yourself
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-cloak x-show="openDropdown === 'design'" x-transition class="absolute top-full left-0 mt-1 w-64 bg-white rounded-sm shadow-lg border border-linen-dark py-2 z-50">
                        <a href="/online-designer" class="block px-4 py-2 text-sm text-charcoal hover:bg-linen hover:text-sunburst">Use Our Free Online Designer</a>
                        <a href="/design-catalogs" class="block px-4 py-2 text-sm text-charcoal hover:bg-linen hover:text-sunburst">Browse Our Design Idea Catalogs</a>
                    </div>
                </div>

                <div class="relative" @mouseenter="openDropdown = 'signs'" @mouseleave="openDropdown = null">
                    <button class="px-3 py-2 text-sm font-semibold text-white hover:text-sunburst-light transition-colors flex items-center gap-1">
                        Signs
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-cloak x-show="openDropdown === 'signs'" x-transition class="absolute top-full left-0 mt-1 w-48 bg-white rounded-sm shadow-lg border border-linen-dark py-2 z-50">
                        <a href="/coronavirus-signs" class="block px-4 py-2 text-sm text-charcoal hover:bg-linen hover:text-sunburst">Coronavirus Signs</a>
                        <a href="/business-signs" class="block px-4 py-2 text-sm text-charcoal hover:bg-linen hover:text-sunburst">Business Signs</a>
                        <a href="/banners" class="block px-4 py-2 text-sm text-charcoal hover:bg-linen hover:text-sunburst">Banners</a>
                        <a href="/posters" class="block px-4 py-2 text-sm text-charcoal hover:bg-linen hover:text-sunburst">Posters</a>
                        <a href="/table-runners" class="block px-4 py-2 text-sm text-charcoal hover:bg-linen hover:text-sunburst">Table Runners</a>
                        <a href="/sidewalk-signs" class="block px-4 py-2 text-sm text-charcoal hover:bg-linen hover:text-sunburst">Sidewalk Signs</a>
                        <a href="/yard-signs" class="block px-4 py-2 text-sm text-charcoal hover:bg-linen hover:text-sunburst">Yard Signs</a>
                    </div>
                </div>

                <div class="relative" @mouseenter="openDropdown = 'decals'" @mouseleave="openDropdown = null">
                    <button class="px-3 py-2 text-sm font-semibold text-white hover:text-sunburst-light transition-colors flex items-center gap-1">
                        Decals
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-cloak x-show="openDropdown === 'decals'" x-transition class="absolute top-full left-0 mt-1 w-56 bg-white rounded-sm shadow-lg border border-linen-dark py-2 z-50">
                        <a href="/coronavirus-decals" class="block px-4 py-2 text-sm text-charcoal hover:bg-linen hover:text-sunburst">Coronavirus Decals</a>
                        <a href="/stickers" class="block px-4 py-2 text-sm text-charcoal hover:bg-linen hover:text-sunburst">Stickers</a>
                        <a href="/window-wall-floor-decals" class="block px-4 py-2 text-sm text-charcoal hover:bg-linen hover:text-sunburst">Window/Wall/Floor Decals</a>
                    </div>
                </div>

                <div class="relative" @mouseenter="openDropdown = 'vehicle'" @mouseleave="openDropdown = null">
                    <button class="px-3 py-2 text-sm font-semibold text-white hover:text-sunburst-light transition-colors flex items-center gap-1">
                        Vehicle Graphics
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-cloak x-show="openDropdown === 'vehicle'" x-transition class="absolute top-full left-0 mt-1 w-48 bg-white rounded-sm shadow-lg border border-linen-dark py-2 z-50">
                        <a href="/automobile-graphics" class="block px-4 py-2 text-sm text-charcoal hover:bg-linen hover:text-sunburst">Automobile Graphics</a>
                        <a href="/vehicle-magnets" class="block px-4 py-2 text-sm text-charcoal hover:bg-linen hover:text-sunburst">Vehicle Magnets</a>
                        <a href="/dot-decals" class="block px-4 py-2 text-sm text-charcoal hover:bg-linen hover:text-sunburst">DOT Decals</a>
                    </div>
                </div>

                <a href="/promotional-items" class="px-3 py-2 text-sm font-semibold {{ $currentPage === 'promotional' ? 'text-sunburst' : 'text-white hover:text-sunburst-light' }} transition-colors">
                    Promotional Items
                </a>

                <div class="relative" @mouseenter="openDropdown = 'stores'" @mouseleave="openDropdown = null">
                    <button class="px-3 py-2 text-sm font-semibold text-white hover:text-sunburst-light transition-colors flex items-center gap-1">
                        Stores
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-cloak x-show="openDropdown === 'stores'" x-transition class="absolute top-full right-0 mt-1 w-48 bg-white rounded-sm shadow-lg border border-linen-dark py-2 z-50">
                        <a href="/stores" class="block px-4 py-2 text-sm text-charcoal hover:bg-linen hover:text-sunburst">View All Stores</a>
                    </div>
                </div>

                <a href="/portfolio" class="px-3 py-2 text-sm font-semibold {{ $currentPage === 'portfolio' ? 'text-sunburst' : 'text-white hover:text-sunburst-light' }} transition-colors">
                    Portfolio
                </a>

                <a href="/contact" class="px-3 py-2 text-sm font-semibold {{ $currentPage === 'contact' ? 'text-sunburst' : 'text-white hover:text-sunburst-light' }} transition-colors">
                    Contact Us
                </a>

                <a href="/cart" class="ml-2 p-2 text-white hover:text-sunburst-light transition-colors relative">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </a>
            </div>
        </div>

        <div x-cloak x-show="mobileMenuOpen" x-transition class="lg:hidden pb-4 border-t border-charcoal-light pt-4">
            <div class="space-y-2">
                <a href="/" class="block px-3 py-2 text-sm font-semibold text-white hover:text-sunburst">Home</a>
                <a href="/about" class="block px-3 py-2 text-sm font-semibold text-white hover:text-sunburst">About Us</a>
                <a href="/custom-shirts" class="block px-3 py-2 text-sm font-semibold text-white hover:text-sunburst">Custom Apparel</a>
                <a href="/online-designer" class="block px-3 py-2 text-sm font-semibold text-white hover:text-sunburst">Design It Yourself</a>
                <a href="/business-signs" class="block px-3 py-2 text-sm font-semibold text-white hover:text-sunburst">Signs</a>
                <a href="/stickers" class="block px-3 py-2 text-sm font-semibold text-white hover:text-sunburst">Decals</a>
                <a href="/automobile-graphics" class="block px-3 py-2 text-sm font-semibold text-white hover:text-sunburst">Vehicle Graphics</a>
                <a href="/promotional-items" class="block px-3 py-2 text-sm font-semibold text-white hover:text-sunburst">Promotional Items</a>
                <a href="/stores" class="block px-3 py-2 text-sm font-semibold text-white hover:text-sunburst">Stores</a>
                <a href="/portfolio" class="block px-3 py-2 text-sm font-semibold text-white hover:text-sunburst">Portfolio</a>
                <a href="/contact" class="block px-3 py-2 text-sm font-semibold text-white hover:text-sunburst">Contact Us</a>
                <a href="/cart" class="block px-3 py-2 text-sm font-semibold text-white hover:text-sunburst">Cart</a>
            </div>
        </div>
    </div>
</nav>
