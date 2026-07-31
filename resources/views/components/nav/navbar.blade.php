{{--
  x-nav.navbar — Stop & Go Airport Shuttle Service, Inc. primary navigation (Twilight Luxe)
  Desktop: pure CSS hover dropdowns (app.css).
  Mobile (<lg): Alpine.js hamburger drawer.
--}}
<header class="sg-nav sticky top-0 z-50" x-data="{ open: false }">

    <x-layout.top-notification-bar />

    <nav class="nav-bar" aria-label="Primary">

        {{-- Col 1: Logo — stays full-size through md, steps down only on xs --}}
        <a href="/" class="nav-logo">
            <img src="/images/logos/stop-and-go-limo-logo.svg"
                 alt="Stop &amp; Go Airport Shuttle Service, Inc."
                 width="176" height="93"
                 class="nav-logo-img">
        </a>

        {{-- Col 2 (desktop): nav links — show/hide handled by CSS media queries --}}
        <div class="nav-links">

            <x-nav.link href="/" :active="request()->is('/')">Welcome</x-nav.link>

            <x-nav.dropdown label="About" href="/about-us">
                <x-nav.item href="/about-us"      title="About Us"       sub="Our story & chauffeurs" />
                <x-nav.item href="/rates"          title="Rates"          sub="Transparent flat pricing" />
                <x-nav.item href="/core-services"  title="Core Services"  sub="All 8 service pillars" />
                <x-nav.item href="/gallery"        title="Gallery"        sub="Our luxury fleet" />
            </x-nav.dropdown>

            <x-nav.link href="/bookings-reservations" :active="request()->is('bookings-reservations')">Reservations</x-nav.link>

            <x-nav.dropdown label="Services" panel="mega-three" href="/our-services">
                {{-- Row 1 --}}
                <x-nav.item href="/limousine-services"              title="Limousine Services"       sub="Classic luxury limos" />
                <x-nav.item href="/wedding-limousine-services"      title="Wedding Limousines"       sub="Elegant event transport" />
                <x-nav.item href="/special-event-limousine"         title="Special Event Limousines" sub="Any occasion" />
                {{-- Row 2 --}}
                <x-nav.item href="/town-car-services"               title="Town Car Services"        sub="Premium sedans" />
                <x-nav.item href="/corporate-car-services"          title="Corporate Car Services"   sub="Executive ground service" />
                <x-nav.item href="/transportation-services"         title="Transportation"           sub="Point-to-point rides" />
                {{-- Row 3 --}}
                <x-nav.item href="/chauffeurs"                      title="Chauffeurs"               sub="Professional drivers" />
                <x-nav.item href="/coach-buses"                     title="Coach Buses"              sub="Large-group charters" />
                <x-nav.flyout title="Party Buses" sub="Groups & celebrations" dir="left" href="/party-bus-rental-chicago">
                    <x-nav.item href="/party-bus-rental-chicago"    title="Chicago Party Bus" />
                    <x-nav.item href="/party-bus-aurora"            title="Aurora Party Bus" />
                    <x-nav.item href="/party-bus-rental-naperville" title="Naperville Party Bus" />
                </x-nav.flyout>
                {{-- Row 4 --}}
                <x-nav.item href="/airport-shuttle-ohare-midway"    title="Airport Shuttle Services" sub="O'Hare & Midway transfers" />
                <x-nav.item href="/new-bus-rental"                  title="New Bus Rentals"          sub="Latest-model coaches" />
                <x-nav.item href="/prom-party-bus-rental-illinois"  title="Prom Party Buses"         sub="Safe prom-night transport" />
                {{-- Row 5 --}}
                <x-nav.item href="/grad-day-transportation"         title="Graduation Day Limos"     sub="Graduation transport" />
            </x-nav.dropdown>

            <x-nav.dropdown label="Special Events" href="/special-event-limousine">
                <x-nav.item href="/six-flags-party-bus" title="Six Flags Party Bus" />
                <x-nav.flyout title="Concerts" sub="Live music & venue transport" dir="left" href="/services/events/concerts">
                    <x-nav.item href="/services/events/concerts/aragon-ballroom-chicago-limo-service"  title="Aragon Ballroom" />
                    <x-nav.item href="/services/events/concerts/chicago-concert-night-out"             title="Chicago Night Out" />
                    <x-nav.item href="/services/events/concerts/house-of-blues-chicago-limo-service"   title="House of Blues" />
                    <x-nav.item href="/services/events/concerts/ravinia-festival-limo-service"         title="Ravinia Festival" />
                    <x-nav.item href="/services/events/concerts/soldier-field-concert-limo-service"    title="Soldier Field" />
                    <x-nav.item href="/services/events/concerts/tinley-park-amphitheatre-limo-service" title="Tinley Park Amphitheatre" />
                    <x-nav.item href="/services/events/concerts/united-center-concert-limo-service"    title="United Center" />
                    <x-nav.item href="/services/events/concerts/wrigley-field-concert-limo-service"    title="Wrigley Field" />
                </x-nav.flyout>
                <x-nav.flyout title="Sporting Events" sub="Pro teams & game-day rides" dir="left" href="/services/events/chicago-cubs-limo-service">
                    <x-nav.item href="/chicago-bears-party-bus"                      title="Chicago Bears" />
                    <x-nav.item href="/chicago-bulls-party-bus"                      title="Chicago Bulls" />
                    <x-nav.item href="/chicago-blackhawks-party-bus"                 title="Chicago Blackhawks" />
                    <x-nav.item href="/services/events/chicago-cubs-limo-service"    title="Chicago Cubs" />
                    <x-nav.item href="/services/events/chicago-white-sox-limo-service" title="Chicago White Sox" />
                </x-nav.flyout>
                <x-nav.item href="/chicago-golf-party-bus" title="Golfing Party Bus" />
            </x-nav.dropdown>

            <x-nav.dropdown label="Service Areas" panel="areas" href="/service-areas" heading="Exceptional Service, Serving all of Chicagoland, 24/7, 365">
                <x-nav.item compact href="/aurora-limo-service"                      title="Aurora" />
                <x-nav.item compact href="/bolingbrook-airport-shuttle-ohare-midway" title="Bolingbrook" />
                <x-nav.item compact href="/24-7-channahon-il-limo-service"           title="Channahon" />
                <x-nav.item compact href="/24-7-elwood-il-limo-service"              title="Elwood" />
                <x-nav.item compact href="/24-7-frankfort-il-limo-service"           title="Frankfort" />
                <x-nav.item compact href="/24-7-homer-glen-limo-service"             title="Homer Glen" />
                <x-nav.item compact href="/24-7-joliet-il-limo-services"             title="Joliet" />
                <x-nav.item compact href="/24-7-lemont-il-limo-service"              title="Lemont" />
                <x-nav.item compact href="/24-7-lockport-il-limo-service"            title="Lockport" />
                <x-nav.item compact href="/24-7-manhattan-limo-service"              title="Manhattan" />
                <x-nav.item compact href="/24-7-minooka-il-limo-service"             title="Minooka" />
                <x-nav.item compact href="/24-7-mokena-il-limo-service"              title="Mokena" />
                <x-nav.item compact href="/24-7-monee-il-limo-service"               title="Monee" />
                <x-nav.item compact href="/24-7-montgomery-il-limo-service"          title="Montgomery" />
                <x-nav.item compact href="/morris-il-limo-service"                   title="Morris" />
                <x-nav.item compact href="/naperville-airport-shuttle-limo-service"  title="Naperville" />
                <x-nav.item compact href="/new-lenox-airport-shuttle-limo-service"   title="New Lenox" />
                <x-nav.item compact href="/24-7-north-aurora-il-limo-service"        title="North Aurora" />
                <x-nav.item compact href="/24-7-orland-park-il-limo-service"         title="Orland Park" />
                <x-nav.item compact href="/oswego-il-limo-service"                   title="Oswego" />
                <x-nav.item compact href="/plainfield-limousine-shuttle-service"     title="Plainfield" />
                <x-nav.item compact href="/romeoville-airport-shuttle-limo-service"  title="Romeoville" />
            </x-nav.dropdown>

        </div>

        {{-- Col 2 (mobile): centered CTA — show/hide handled by CSS media queries --}}
        <button type="button" class="nav-mobile-cta" onclick="window.dispatchEvent(new CustomEvent('open-modal-quote'))">Get A Free Quote</button>

        {{-- Col 3: desktop CTA + mobile hamburger — show/hide handled by CSS media queries --}}
        <div class="nav-actions">
            <button type="button" class="nav-cta-btn" onclick="window.dispatchEvent(new CustomEvent('open-modal-quote'))">Get A Free Quote</button>
            <button class="nav-hamburger"
                    @click="open = !open"
                    :aria-expanded="open.toString()"
                    aria-label="Toggle navigation menu">
                <svg x-show="!open" width="22" height="22" viewBox="0 0 22 22" fill="none" aria-hidden="true">
                    <rect y="3"  width="22" height="2.5" rx="1" fill="currentColor"/>
                    <rect y="10" width="22" height="2.5" rx="1" fill="currentColor"/>
                    <rect y="17" width="22" height="2.5" rx="1" fill="currentColor"/>
                </svg>
                <svg x-show="open" width="22" height="22" viewBox="0 0 22 22" fill="none" aria-hidden="true" x-cloak>
                    <line x1="2" y1="2" x2="20" y2="20" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                    <line x1="20" y1="2" x2="2" y2="20" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                </svg>
            </button>
        </div>

    </nav>

    {{-- Mobile drawer — visible below lg when open --}}
    <div class="nav-drawer lg:hidden"
         x-show="open"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-1"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-1"
         x-cloak>

        <nav class="nav-drawer-inner" aria-label="Mobile navigation">

            <a href="/" class="nav-drawer-link">Welcome</a>

            <div class="nav-drawer-group">
                <span class="nav-drawer-heading">About</span>
                <a href="/about-us"     class="nav-drawer-sub">About Us</a>
                <a href="/rates"        class="nav-drawer-sub">Rates</a>
                <a href="/core-services" class="nav-drawer-sub">Core Services</a>
                <a href="/gallery"      class="nav-drawer-sub">Gallery</a>
            </div>

            <a href="/bookings-reservations" class="nav-drawer-link">Reservations</a>

            <div class="nav-drawer-group">
                <span class="nav-drawer-heading">Services</span>
                <a href="/limousine-services"             class="nav-drawer-sub">Limousine Services</a>
                <a href="/wedding-limousine-services"     class="nav-drawer-sub">Wedding Limousines</a>
                <a href="/special-event-limousine"        class="nav-drawer-sub">Special Event Limousines</a>
                <a href="/town-car-services"              class="nav-drawer-sub">Town Car Services</a>
                <a href="/corporate-car-services"         class="nav-drawer-sub">Corporate Car Services</a>
                <a href="/transportation-services"        class="nav-drawer-sub">Transportation</a>
                <a href="/chauffeurs"                     class="nav-drawer-sub">Chauffeurs</a>
                <a href="/coach-buses"                    class="nav-drawer-sub">Coach Buses</a>
                <a href="/party-bus-rental-chicago"       class="nav-drawer-sub">Party Buses</a>
                <a href="/airport-shuttle-ohare-midway"   class="nav-drawer-sub">Airport Shuttle Services</a>
                <a href="/new-bus-rental"                 class="nav-drawer-sub">New Bus Rentals</a>
                <a href="/prom-party-bus-rental-illinois" class="nav-drawer-sub">Prom Party Buses</a>
                <a href="/grad-day-transportation"        class="nav-drawer-sub">Graduation Day Limos</a>
            </div>

            <div class="nav-drawer-group">
                <span class="nav-drawer-heading">Special Events</span>
                <a href="/six-flags-party-bus" class="nav-drawer-sub">Six Flags Party Bus</a>
                <a href="/services/events/concerts" class="nav-drawer-sub">Concerts</a>
                <a href="/services/events/concerts/aragon-ballroom-chicago-limo-service" class="nav-drawer-sub">Aragon Ballroom</a>
                <a href="/services/events/concerts/chicago-concert-night-out" class="nav-drawer-sub">Chicago Night Out</a>
                <a href="/services/events/concerts/house-of-blues-chicago-limo-service" class="nav-drawer-sub">House of Blues</a>
                <a href="/services/events/concerts/ravinia-festival-limo-service" class="nav-drawer-sub">Ravinia Festival</a>
                <a href="/services/events/concerts/soldier-field-concert-limo-service" class="nav-drawer-sub">Soldier Field</a>
                <a href="/services/events/concerts/tinley-park-amphitheatre-limo-service" class="nav-drawer-sub">Tinley Park Amphitheatre</a>
                <a href="/services/events/concerts/united-center-concert-limo-service" class="nav-drawer-sub">United Center</a>
                <a href="/services/events/concerts/wrigley-field-concert-limo-service" class="nav-drawer-sub">Wrigley Field</a>
                <a href="/special-event-limousine" class="nav-drawer-sub">Sporting Events</a>
                <a href="/chicago-bears-party-bus"                      class="nav-drawer-sub">Chicago Bears</a>
                <a href="/chicago-bulls-party-bus"                      class="nav-drawer-sub">Chicago Bulls</a>
                <a href="/chicago-blackhawks-party-bus"                 class="nav-drawer-sub">Chicago Blackhawks</a>
                <a href="/services/events/chicago-cubs-limo-service"   class="nav-drawer-sub">Chicago Cubs</a>
                <a href="/services/events/chicago-white-sox-limo-service" class="nav-drawer-sub">Chicago White Sox</a>
                <a href="/chicago-golf-party-bus" class="nav-drawer-sub">Golfing Party Bus</a>
            </div>

            <a href="/service-areas" class="nav-drawer-link">Service Areas</a>

            <button type="button" class="nav-drawer-cta" onclick="window.dispatchEvent(new CustomEvent('open-modal-quote'))">Get A Free Quote</button>

        </nav>
    </div>

</header>
