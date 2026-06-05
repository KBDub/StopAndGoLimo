@props(['currentPage' => ''])

<div class="sg-nav" x-data="{ mobileOpen: false }" @keydown.escape.window="mobileOpen = false">

    <div class="nav-bar">

        {{-- Logo --}}
        <a href="/" class="nav-logo">Stop &amp; Go <span>Limo</span></a>

        {{-- Desktop: Welcome --}}
        <div class="nav-item hidden md:block">
            <a href="/" class="nav-link {{ $currentPage === 'home' ? 'active' : '' }}">Welcome</a>
        </div>

        {{-- Desktop: About --}}
        <div class="nav-item hidden md:block">
            <a href="#" class="nav-link">About <span class="caret">&#9660;</span></a>
            <div class="dropdown">
                <a href="/about">
                    <span class="d-title">About Us</span>
                    <span class="d-sub">Our story &amp; chauffeurs</span>
                </a>
                <a href="/rates">
                    <span class="d-title">Rates</span>
                    <span class="d-sub">Transparent flat-rate pricing</span>
                </a>
                <a href="/gallery">
                    <span class="d-title">Gallery</span>
                    <span class="d-sub">Our luxury fleet</span>
                </a>
            </div>
        </div>

        {{-- Desktop: Booking --}}
        <div class="nav-item hidden md:block">
            <a href="/booking" class="nav-link {{ $currentPage === 'booking' ? 'active' : '' }}">Booking</a>
        </div>

        {{-- Desktop: Services --}}
        <div class="nav-item hidden md:block">
            <a href="#" class="nav-link">Services <span class="caret">&#9660;</span></a>
            <div class="dropdown dropdown-mega">
                <a href="/services/airport-shuttle">
                    <span class="d-title">Airport Shuttle</span>
                    <span class="d-sub">O'Hare &amp; Midway transfers</span>
                </a>
                <a href="/services/wedding-limousine">
                    <span class="d-title">Wedding Limousine</span>
                    <span class="d-sub">Elegant event transport</span>
                </a>
                <div class="has-flyout">
                    <a href="/services/party-bus">
                        <span class="d-title">Party Bus</span>
                        <span class="d-sub">Groups &amp; celebrations</span>
                        <span class="fcaret">&#9654;</span>
                    </a>
                    <div class="flyout">
                        <a href="/services/party-bus/aurora">
                            <span class="d-title">Party Bus &mdash; Aurora</span>
                        </a>
                        <a href="/services/party-bus/naperville">
                            <span class="d-title">Party Bus &mdash; Naperville</span>
                        </a>
                    </div>
                </div>
                <a href="/services/prom-party-bus">
                    <span class="d-title">Prom Party Bus</span>
                    <span class="d-sub">Safe prom-night transport</span>
                </a>
                <a href="/services/new-bus-rental">
                    <span class="d-title">New Bus Rental</span>
                    <span class="d-sub">Latest-model coaches</span>
                </a>
                <a href="/services/coach-buses">
                    <span class="d-title">Coach Buses</span>
                    <span class="d-sub">Large-group charters</span>
                </a>
                <a href="/services/limousine-services">
                    <span class="d-title">Limousine Services</span>
                    <span class="d-sub">Classic luxury limos</span>
                </a>
                <a href="/services/corporate-car-service">
                    <span class="d-title">Corporate Car Service</span>
                    <span class="d-sub">Executive ground service</span>
                </a>
                <a href="/services/town-car-services">
                    <span class="d-title">Town Car Services</span>
                    <span class="d-sub">Premium sedans</span>
                </a>
                <a href="/services/chauffeurs">
                    <span class="d-title">Chauffeurs</span>
                    <span class="d-sub">Professional drivers</span>
                </a>
                <a href="/services/special-event-limousine">
                    <span class="d-title">Special Event Limousine</span>
                    <span class="d-sub">Any occasion</span>
                </a>
                <a href="/services/transportation-services">
                    <span class="d-title">Transportation Services</span>
                    <span class="d-sub">Point-to-point rides</span>
                </a>
                <a href="/services/grad-day-transportation">
                    <span class="d-title">Grad Day Transportation</span>
                    <span class="d-sub">Graduation transport</span>
                </a>
            </div>
        </div>

        {{-- Desktop: Special Events --}}
        <div class="nav-item hidden md:block">
            <a href="#" class="nav-link">Special Events <span class="caret">&#9660;</span></a>
            <div class="dropdown">
                <a href="/special-events/six-flags-party-bus">
                    <span class="d-title">Six Flags Party Bus</span>
                </a>
                <a href="/special-events/golfing-party-bus">
                    <span class="d-title">Golfing Party Bus</span>
                </a>
                <a href="/special-events/concert-party-bus">
                    <span class="d-title">Concert Party Bus Rental</span>
                </a>
                <a href="/special-events/chicago-bears">
                    <span class="d-title">Chicago Bears Party &amp; Limo Bus</span>
                </a>
                <a href="/special-events/chicago-bulls">
                    <span class="d-title">Chicago Bulls Party Bus</span>
                </a>
                <a href="/special-events/chicago-blackhawks">
                    <span class="d-title">Chicago Blackhawks Party Bus</span>
                </a>
            </div>
        </div>

        {{-- Desktop: Service Areas --}}
        <div class="nav-item hidden md:block">
            <a href="/service-areas" class="nav-link {{ $currentPage === 'service-areas' ? 'active' : '' }}">
                Service Areas <span class="caret">&#9660;</span>
            </a>
            <div class="dropdown dropdown-areas">
                <div class="areas-head">22 Chicagoland Southwest Suburbs &mdash; 24/7</div>
                <a href="/service-areas/new-lenox"><span class="d-title">New Lenox</span></a>
                <a href="/service-areas/naperville"><span class="d-title">Naperville</span></a>
                <a href="/service-areas/aurora"><span class="d-title">Aurora</span></a>
                <a href="/service-areas/north-aurora"><span class="d-title">North Aurora</span></a>
                <a href="/service-areas/plainfield"><span class="d-title">Plainfield</span></a>
                <a href="/service-areas/joliet"><span class="d-title">Joliet</span></a>
                <a href="/service-areas/morris"><span class="d-title">Morris</span></a>
                <a href="/service-areas/minooka"><span class="d-title">Minooka</span></a>
                <a href="/service-areas/channahon"><span class="d-title">Channahon</span></a>
                <a href="/service-areas/elwood"><span class="d-title">Elwood</span></a>
                <a href="/service-areas/romeoville"><span class="d-title">Romeoville</span></a>
                <a href="/service-areas/lockport"><span class="d-title">Lockport</span></a>
                <a href="/service-areas/frankfort"><span class="d-title">Frankfort</span></a>
                <a href="/service-areas/mokena"><span class="d-title">Mokena</span></a>
                <a href="/service-areas/orland-park"><span class="d-title">Orland Park</span></a>
                <a href="/service-areas/manhattan"><span class="d-title">Manhattan</span></a>
                <a href="/service-areas/homer-glen"><span class="d-title">Homer Glen</span></a>
                <a href="/service-areas/lemont"><span class="d-title">Lemont</span></a>
                <a href="/service-areas/monee"><span class="d-title">Monee</span></a>
                <a href="/service-areas/bolingbrook"><span class="d-title">Bolingbrook</span></a>
                <a href="/service-areas/oswego"><span class="d-title">Oswego</span></a>
                <a href="/service-areas/montgomery"><span class="d-title">Montgomery</span></a>
            </div>
        </div>

        {{-- Desktop: Contact --}}
        <div class="nav-item hidden md:block">
            <a href="/contact" class="nav-link {{ $currentPage === 'contact' ? 'active' : '' }}">Contact</a>
        </div>

        {{-- Mobile: Hamburger toggle --}}
        <button
            class="md:hidden ml-auto px-4 py-5 text-cloud hover:text-champagne transition-colors"
            @click="mobileOpen = !mobileOpen"
            :aria-expanded="mobileOpen.toString()"
            aria-label="Toggle navigation"
        >
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path x-show="!mobileOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                <path x-show="mobileOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>

    </div>

    {{-- Mobile drawer --}}
    <div
        x-show="mobileOpen"
        x-cloak
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-1"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-1"
        class="md:hidden border-t border-champagne/20"
        style="background:var(--color-navy-dark)"
    >
        <nav class="px-4 py-3 space-y-0">
            <a href="/" class="block font-head font-semibold text-cloud hover:text-champagne py-3 border-b border-white/8 transition-colors">Welcome</a>
            <a href="/about" class="block font-head font-semibold text-cloud hover:text-champagne py-3 border-b border-white/8 transition-colors">About Us</a>
            <a href="/rates" class="block font-head font-semibold text-cloud hover:text-champagne py-3 border-b border-white/8 transition-colors">Rates</a>
            <a href="/booking" class="block font-head font-semibold text-cloud hover:text-champagne py-3 border-b border-white/8 transition-colors">Booking</a>
            <a href="/services/airport-shuttle" class="block font-head font-semibold text-cloud hover:text-champagne py-3 border-b border-white/8 transition-colors">Airport Shuttle</a>
            <a href="/services/wedding-limousine" class="block font-head font-semibold text-cloud hover:text-champagne py-3 border-b border-white/8 transition-colors">Wedding Limousine</a>
            <a href="/services/party-bus" class="block font-head font-semibold text-cloud hover:text-champagne py-3 border-b border-white/8 transition-colors">Party Bus</a>
            <a href="/services/corporate-car-service" class="block font-head font-semibold text-cloud hover:text-champagne py-3 border-b border-white/8 transition-colors">Corporate Car Service</a>
            <a href="/service-areas" class="block font-head font-semibold text-cloud hover:text-champagne py-3 border-b border-white/8 transition-colors">Service Areas</a>
            <a href="/contact" class="block font-head font-semibold text-cloud hover:text-champagne py-3 border-b border-white/8 transition-colors">Contact</a>
            <div class="pt-4 pb-3">
                <a href="/booking" class="inline-block font-head font-semibold px-8 py-3 transition-colors hover:-translate-y-0.5 transform-gpu"
                   style="background:var(--color-champagne-dark);color:var(--color-navy)">Book a Ride &rarr;</a>
            </div>
        </nav>
    </div>

</div>
