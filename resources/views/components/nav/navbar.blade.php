{{--
  x-nav.navbar — Stop & Go primary navigation (Twilight Luxe, pure CSS hover)
  Scoped to .sg-nav — all hover/dropdown behaviour driven by app.css, no JS.
--}}
<header class="sg-nav sticky top-0 z-50">

    <nav class="nav-bar" aria-label="Primary">

        <a href="/" class="nav-logo">
            <img src="/images/logos/stop-and-go-inverted-logo-large.svg"
                 alt="Stop &amp; Go Airport Shuttle Service, Inc."
                 class="h-10 lg:h-16 w-auto transition-all duration-300">
        </a>

        <div class="nav-links">

            <x-nav.link href="/" :active="request()->is('/')">Welcome</x-nav.link>

            <x-nav.dropdown label="About" href="/about-us">
                <x-nav.item href="/about-us" title="About Us"  sub="Our story & chauffeurs" />
                <x-nav.item href="/rates"    title="Rates"     sub="Transparent flat pricing" />
                <x-nav.item href="/gallery"  title="Gallery"   sub="Our luxury fleet" />
            </x-nav.dropdown>

            <x-nav.link href="/bookings-reservations" :active="request()->is('bookings-reservations')">Reservations</x-nav.link>

            <x-nav.dropdown label="Services" panel="mega" href="/our-services">
                <x-nav.item href="/airport-shuttle-ohare-midway"    title="Airport Shuttle"       sub="O'Hare & Midway transfers" />
                <x-nav.item href="/wedding-limousine-services"       title="Wedding Limousine"     sub="Elegant event transport" />
                <x-nav.flyout title="Party Bus" sub="Groups & celebrations">
                    <x-nav.item href="/party-bus-aurora"            title="Party Bus, Aurora" />
                    <x-nav.item href="/party-bus-rental-naperville" title="Party Bus, Naperville" />
                </x-nav.flyout>
                <x-nav.item href="/prom-party-bus-rental-illinois"  title="Prom Party Bus"        sub="Safe prom-night transport" />
                <x-nav.item href="/new-bus-rental"                  title="New Bus Rental"        sub="Latest-model coaches" />
                <x-nav.item href="/coach-buses"                     title="Coach Buses"           sub="Large-group charters" />
                <x-nav.item href="/limousine-services"              title="Limousine Services"    sub="Classic luxury limos" />
                <x-nav.item href="/corporate-car-services"          title="Corporate Car Service" sub="Executive ground service" />
                <x-nav.item href="/town-car-services"               title="Town Car Services"     sub="Premium sedans" />
                <x-nav.item href="/chauffeurs"                      title="Chauffeurs"            sub="Professional drivers" />
                <x-nav.item href="/special-event-limousine"         title="Special Event Limo"    sub="Any occasion" />
                <x-nav.item href="/transportation-services"         title="Transportation"        sub="Point-to-point rides" />
                <x-nav.item href="/grad-day-transportation"         title="Grad Day Transport"    sub="Graduation transport" />
            </x-nav.dropdown>

            <x-nav.dropdown label="Special Events" href="/special-event-limousine">
                <x-nav.item href="/six-flags-party-bus"              title="Six Flags Party Bus" />
                <x-nav.item href="/chicago-golf-party-bus"           title="Golfing Party Bus" />
                <x-nav.item href="/chicago-concert-party-bus-rental" title="Concert Party Bus Rental" />
                <x-nav.item href="/chicago-bears-party-bus"          title="Chicago Bears Party & Limo Bus" />
                <x-nav.item href="/chicago-bulls-party-bus"          title="Chicago Bulls Party Bus" />
                <x-nav.item href="/chicago-blackhawks-party-bus"     title="Chicago Blackhawks Party Bus" />
            </x-nav.dropdown>

            <x-nav.dropdown label="Service Areas" panel="areas" href="/service-areas" heading="All Chicagoland Suburbs, 24/7, Exceptional Service 365">
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

        <a href="/get-a-quote" class="nav-cta-btn">Get In Touch</a>

    </nav>
</header>
