@props([
    'currentPage' => null
])

<nav class="bg-linen text-white" x-data="{ mobileMenuOpen: false, openDropdown: null }">
    <div class="max-w-6xl mx-auto px-6">
        <div class="flex items-center justify-between py-4">
            <a href="/" class="flex items-center flex-shrink-0">
                <img src="/images/logos/top5-logo.gif" alt="Top 5 Percent" class="h-24">
            </a>

            <button 
                @click="mobileMenuOpen = !mobileMenuOpen" 
                class="lg:hidden p-2 text-charcoal hover:text-sunburst"
                aria-label="Toggle menu"
            >
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>

            <div class="hidden lg:flex items-center space-x-1">
                <a href="/" class="px-3 py-2 text-sm font-semibold {{ $currentPage === 'home' ? 'text-azure' : 'text-charcoal hover:text-sunburst' }} transition-colors">
                    Home
                </a>
                
                <div class="relative" @mouseenter="openDropdown = 'apparel'" @mouseleave="openDropdown = null">
                    <a href="/collections/custom-apparel" class="px-3 py-2 text-sm font-semibold {{ $currentPage === 'custom-apparel' ? 'text-azure' : 'text-charcoal hover:text-sunburst' }} transition-colors flex items-center gap-1">
                        Custom Apparel
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </a>
                    <div x-cloak x-show="openDropdown === 'apparel'" x-transition class="absolute top-full left-0 mt-1 w-56 bg-white rounded-sm shadow-lg border border-linen-dark py-2 z-50">
                        <a href="/collections/custom-apparel" class="block px-4 py-2 text-sm font-semibold text-sunburst hover:bg-linen">View All Custom Apparel</a>
                        <div class="border-t border-linen-dark my-1"></div>
                        <a href="/collections/custom-apparel/custom-shirts" class="block px-4 py-2 text-sm text-charcoal hover:bg-linen hover:text-sunburst">Custom Shirts</a>
                        <a href="/collections/custom-apparel/dtf-transfers" class="block px-4 py-2 text-sm text-charcoal hover:bg-linen hover:text-sunburst">DTF Transfers</a>
                        <a href="/collections/custom-apparel/reunion-shirts" class="block px-4 py-2 text-sm text-charcoal hover:bg-linen hover:text-sunburst">Reunion Shirts</a>
                        <a href="/collections/custom-apparel/corporate-wear" class="block px-4 py-2 text-sm text-charcoal hover:bg-linen hover:text-sunburst">Corporate Wear</a>
                        <a href="/collections/custom-apparel/spirit-wear" class="block px-4 py-2 text-sm text-charcoal hover:bg-linen hover:text-sunburst">Spirit Wear</a>
                    </div>
                </div>

                <div class="relative" @mouseenter="openDropdown = 'design'" @mouseleave="openDropdown = null">
                    <a href="/design-it-yourself" class="px-3 py-2 text-sm font-semibold {{ $currentPage === 'design-it-yourself' ? 'text-azure' : 'text-charcoal hover:text-sunburst' }} transition-colors flex items-center gap-1">
                        Design It Yourself
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </a>
                    <div x-cloak x-show="openDropdown === 'design'" x-transition class="absolute top-full left-0 mt-1 w-64 bg-white rounded-sm shadow-lg border border-linen-dark py-2 z-50">
                        <a href="/design-it-yourself" class="block px-4 py-2 text-sm font-semibold text-sunburst hover:bg-linen">View All Design Options</a>
                        <div class="border-t border-linen-dark my-1"></div>
                        <a href="/design-it-yourself/online-designer" class="block px-4 py-2 text-sm text-charcoal hover:bg-linen hover:text-sunburst">Use Our Free Online Designer</a>
                        <a href="/design-it-yourself/design-catalogs" class="block px-4 py-2 text-sm text-charcoal hover:bg-linen hover:text-sunburst">Browse Our Design Idea Catalogs</a>
                    </div>
                </div>

                <div class="relative" @mouseenter="openDropdown = 'signs'" @mouseleave="openDropdown = null">
                    <a href="/collections/signs" class="px-3 py-2 text-sm font-semibold {{ $currentPage === 'signs' ? 'text-azure' : 'text-charcoal hover:text-sunburst' }} transition-colors flex items-center gap-1">
                        Signs
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </a>
                    <div x-cloak x-show="openDropdown === 'signs'" x-transition class="absolute top-full left-0 mt-1 w-48 bg-white rounded-sm shadow-lg border border-linen-dark py-2 z-50">
                        <a href="/collections/signs" class="block px-4 py-2 text-sm font-semibold text-sunburst hover:bg-linen">View All Signs</a>
                        <div class="border-t border-linen-dark my-1"></div>
                        <a href="/collections/signs/business-signs" class="block px-4 py-2 text-sm text-charcoal hover:bg-linen hover:text-sunburst">Business Signs</a>
                        <a href="/collections/signs/banners" class="block px-4 py-2 text-sm text-charcoal hover:bg-linen hover:text-sunburst">Banners</a>
                        <a href="/collections/signs/posters" class="block px-4 py-2 text-sm text-charcoal hover:bg-linen hover:text-sunburst">Posters</a>
                        <a href="/collections/signs/table-runners" class="block px-4 py-2 text-sm text-charcoal hover:bg-linen hover:text-sunburst">Table Runners</a>
                        <a href="/collections/signs/sidewalk-signs" class="block px-4 py-2 text-sm text-charcoal hover:bg-linen hover:text-sunburst">Sidewalk Signs</a>
                        <a href="/collections/signs/yard-signs" class="block px-4 py-2 text-sm text-charcoal hover:bg-linen hover:text-sunburst">Yard Signs</a>
                    </div>
                </div>

                <div class="relative" @mouseenter="openDropdown = 'decals'" @mouseleave="openDropdown = null">
                    <a href="/collections/decals" class="px-3 py-2 text-sm font-semibold {{ $currentPage === 'decals' ? 'text-azure' : 'text-charcoal hover:text-sunburst' }} transition-colors flex items-center gap-1">
                        Decals
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </a>
                    <div x-cloak x-show="openDropdown === 'decals'" x-transition class="absolute top-full left-0 mt-1 w-56 bg-white rounded-sm shadow-lg border border-linen-dark py-2 z-50">
                        <a href="/collections/decals" class="block px-4 py-2 text-sm font-semibold text-sunburst hover:bg-linen">View All Decals</a>
                        <div class="border-t border-linen-dark my-1"></div>
                        <a href="/collections/decals/stickers" class="block px-4 py-2 text-sm text-charcoal hover:bg-linen hover:text-sunburst">Stickers</a>
                        <a href="/collections/decals/window-decals" class="block px-4 py-2 text-sm text-charcoal hover:bg-linen hover:text-sunburst">Window Decals</a>
                        <a href="/collections/decals/wall-floor-decals" class="block px-4 py-2 text-sm text-charcoal hover:bg-linen hover:text-sunburst">Wall & Floor Decals</a>
                    </div>
                </div>

                <div class="relative" @mouseenter="openDropdown = 'vehicle'" @mouseleave="openDropdown = null">
                    <a href="/collections/vehicle-graphics" class="px-3 py-2 text-sm font-semibold {{ $currentPage === 'vehicle-graphics' ? 'text-azure' : 'text-charcoal hover:text-sunburst' }} transition-colors flex items-center gap-1">
                        Vehicle Graphics
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </a>
                    <div x-cloak x-show="openDropdown === 'vehicle'" x-transition class="absolute top-full left-0 mt-1 w-52 bg-white rounded-sm shadow-lg border border-linen-dark py-2 z-50">
                        <a href="/collections/vehicle-graphics" class="block px-4 py-2 text-sm font-semibold text-sunburst hover:bg-linen">View All Vehicle Graphics</a>
                        <div class="border-t border-linen-dark my-1"></div>
                        <a href="/collections/vehicle-graphics/vehicle-wraps" class="block px-4 py-2 text-sm text-charcoal hover:bg-linen hover:text-sunburst">Vehicle Wraps</a>
                        <a href="/collections/vehicle-graphics/vehicle-magnets" class="block px-4 py-2 text-sm text-charcoal hover:bg-linen hover:text-sunburst">Vehicle Magnets</a>
                        <a href="/collections/vehicle-graphics/dot-decals" class="block px-4 py-2 text-sm text-charcoal hover:bg-linen hover:text-sunburst">DOT Decals</a>
                        <a href="/collections/vehicle-graphics/fleet-graphics" class="block px-4 py-2 text-sm text-charcoal hover:bg-linen hover:text-sunburst">Fleet Graphics</a>
                    </div>
                </div>

                <a href="/collections/promotional-items" class="px-3 py-2 text-sm font-semibold {{ $currentPage === 'promotional' ? 'text-azure' : 'text-charcoal hover:text-sunburst' }} transition-colors">
                    Promotional Items
                </a>

                <a href="/black-doll-apparel" class="px-3 py-2 text-sm font-semibold {{ $currentPage === 'black-doll-apparel' ? 'text-azure' : 'text-charcoal hover:text-sunburst' }} transition-colors">
                    Black Doll Apparel
                </a>

                <a href="/portfolio" class="px-3 py-2 text-sm font-semibold {{ $currentPage === 'portfolio' ? 'text-azure' : 'text-charcoal hover:text-sunburst' }} transition-colors">
                    Portfolio
                </a>

                <!-- TODO make About be a dropdown, with About Us link and Team link and contact link -->
                <div class="relative" @mouseenter="openDropdown = 'about'" @mouseleave="openDropdown = null">
                    <button class="px-3 py-2 text-sm font-semibold text-charcoal hover:text-sunburst transition-colors flex items-center gap-1">
                        About
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-cloak x-show="openDropdown === 'about'" x-transition class="absolute top-full left-0 mt-1 w-48 bg-white rounded-sm shadow-lg border border-linen-dark py-2 z-50">
                        <a href="/about" class="block px-4 py-2 text-sm text-charcoal hover:bg-linen hover:text-sunburst">About Us</a>
                        <a href="/team" class="block px-4 py-2 text-sm text-charcoal hover:bg-linen hover:text-sunburst">Our Team</a>
                        <a href="/contact" class="block px-4 py-2 text-sm text-charcoal hover:bg-linen hover:text-sunburst">Contact Us</a>
                    </div>
                </div>

                <div class="ml-2">
                    @livewire('cart.cart-icon')
                </div>
            </div>
        </div>

        <div x-cloak x-show="mobileMenuOpen" x-transition class="lg:hidden pb-4 border-t border-charcoal-light pt-4">
            <div class="space-y-2">
                <a href="/" class="block px-3 py-2 text-sm font-semibold text-charcoal hover:text-sunburst">Home</a>
                <a href="/about" class="block px-3 py-2 text-sm font-semibold text-charcoal hover:text-sunburst">About Us</a>
                <a href="/shop" class="block px-3 py-2 text-sm font-semibold text-charcoal hover:text-sunburst">Shop All</a>
                <a href="/collections/custom-apparel" class="block px-3 py-2 text-sm font-semibold text-charcoal hover:text-sunburst">Custom Apparel</a>
                <a href="/collections/signs" class="block px-3 py-2 text-sm font-semibold text-charcoal hover:text-sunburst">Signs</a>
                <a href="/collections/decals" class="block px-3 py-2 text-sm font-semibold text-charcoal hover:text-sunburst">Decals</a>
                <a href="/collections/vehicle-graphics" class="block px-3 py-2 text-sm font-semibold text-charcoal hover:text-sunburst">Vehicle Graphics</a>
                <a href="/collections/promotional-items" class="block px-3 py-2 text-sm font-semibold text-charcoal hover:text-sunburst">Promotional Items</a>
                <a href="/design-it-yourself" class="block px-3 py-2 text-sm font-semibold text-charcoal hover:text-sunburst">Design It Yourself</a>
                <a href="/stores" class="block px-3 py-2 text-sm font-semibold text-charcoal hover:text-sunburst">Stores</a>
                <a href="/portfolio" class="block px-3 py-2 text-sm font-semibold text-charcoal hover:text-sunburst">Portfolio</a>
                <a href="/contact" class="block px-3 py-2 text-sm font-semibold text-charcoal hover:text-sunburst">Contact Us</a>
                <a href="/cart" class="block px-3 py-2 text-sm font-semibold text-charcoal hover:text-sunburst">Cart</a>
            </div>
        </div>
    </div>
</nav>
