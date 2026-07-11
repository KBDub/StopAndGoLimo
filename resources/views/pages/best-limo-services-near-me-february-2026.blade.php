@push('structured-data')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Service",
    "name": "Limo Service Near Me — Chicagoland",
    "provider": {
        "@@type": "LocalBusiness",
        "name": "Stop & Go Airport Shuttle Service Inc.",
        "telephone": "",
        "address": {
            "@@type": "PostalAddress",
            "streetAddress": "400 E Lincoln Hwy Suite 101A",
            "addressLocality": "New Lenox",
            "addressRegion": "IL",
            "postalCode": "60451",
            "addressCountry": "US"
        }
    },
    "areaServed": "Illinois",
    "description": "Professional limo service near you in New Lenox and throughout Chicagoland. Airport transfers, weddings, corporate travel, and more."
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        { "@@type": "ListItem", "position": 1, "name": "Home",         "item": "https://newlenoxlimoservice.com" },
        { "@@type": "ListItem", "position": 2, "name": "Our Services", "item": "https://newlenoxlimoservice.com/our-services" },
        { "@@type": "ListItem", "position": 3, "name": "Limo Service Near Me", "item": "{{ request()->url() }}" }
    ]
}
</script>
@endpush

<x-layouts.page
    title="Limo Service Near Me in New Lenox and Chicagoland"
    metaDescription="Professional limo service near you in New Lenox and throughout Chicagoland. Airport transfers, weddings, corporate travel, party buses, and more."
    currentPage="our-services"
    ogImage="/images/heroes/best-limo-services-hero.png"
    ogImageAlt="Professional limo service near you, Stop and Go Airport Shuttle Service"
>
    <x-sections.category-hero
        heading="Limo Service"
        headingBold="Near You"
        :headingTwoLines="false"
        subtitle="Professional chauffeured transportation throughout Chicagoland since 2009"
        description="When you need quality limo service near you in New Lenox or anywhere in the southwest Chicago suburbs, Stop & Go Airport Shuttle Service, Inc. is ready. We have been providing professional chauffeured transportation throughout Will County and Chicagoland since 2009. Our flat-rate limo service covers airport transfers to O'Hare and Midway, corporate travel, wedding limousines, party bus rentals, prom transportation, quinceañera vehicles, and special event service for any occasion. Every vehicle in our fleet is professionally maintained. Every chauffeur is background-checked, uniformed, and trained to the highest professional standard. We serve New Lenox, Naperville, Aurora, Joliet, Frankfort, Mokena, Homer Glen, Orland Park, and communities throughout the region. Transparent pricing means no surprises, no surge fees, and no last-minute cancellations. Whether you are booking an airport run for tomorrow morning or planning transportation for a wedding six months away, we are here to help. or book online anytime."
        buttonText="Book Now"
        buttonHref="/bookings-reservations"
        image="/images/heroes/best-limo-services-hero.png"
        imagePosition="center center"
    />

    <x-sections.travel-in-style
        heading="Local Expertise,"
        headingBold="Chicagoland-Wide Service"
        subtitle="Based in New Lenox. Serving the entire region."
        body="Stop & Go is headquartered at 400 E Lincoln Hwy in New Lenox, which puts us in an ideal position to serve Will, DuPage, Kane, Cook, and Lake counties efficiently. Whether your pickup is in a southwest suburb, a north suburb, or downtown Chicago, our chauffeurs know the routes, the traffic patterns, and the best ways to get you where you need to go on time."
        buttonText="See Our Service Area"
        buttonHref="/service-areas"
        image="/images/sections/driver-classy.jpg"
        imageAlt="Professional chauffeur ready to serve throughout Chicagoland"
        :inverted="true"
    />

    <x-sections.info-strip
        headingBold="What Sets a Professional"
        heading="Limo Service Apart"
        body="Not all transportation services are the same. A professional limo service means a guaranteed pickup, not a hoped-for match. It means a chauffeur who knows your destination and arrives early. It means a vehicle that has been inspected and detailed before your ride. It means flat-rate pricing so you never get a surprise charge at the end. Stop & Go has delivered that standard to Chicagoland clients since 2009."
    />

    <section id="services-near-me" style="background: var(--cloud-light); scroll-margin-top: 80px;">
        <div class="max-w-7xl mx-auto px-6 py-12 lg:py-[6.25rem]">
            <div class="text-center mb-12">
                <h2 style="font-family: var(--font-head); font-size: var(--font-size-h2); color: var(--navy); letter-spacing: var(--letter-spacing-h2); line-height: 1.2;" class="mb-4">
                    Every Service, <strong>Right Near You</strong>
                </h2>
                <p style="font-family: var(--font-body); font-size: 1.25rem; color: var(--slate); line-height: 1.5;" class="max-w-2xl mx-auto">
                    Stop & Go provides the full range of chauffeured transportation services throughout the Chicagoland area.
                </p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach([
                    ['title' => 'Airport Transfers',     'desc' => 'Flat-rate pickups and drop-offs to O\'Hare, Midway, Rockford, Milwaukee, and Gary airports.',              'href' => '/airport-shuttle-ohare-midway'],
                    ['title' => 'Wedding Limousine',     'desc' => 'Elegant vehicles for brides, grooms, and wedding parties. Pre-confirmed itineraries, always on time.',     'href' => '/wedding-limousine-services'],
                    ['title' => 'Corporate Travel',      'desc' => 'Executive transportation for meetings, airport runs, and client entertainment throughout the region.',      'href' => '/corporate-car-services'],
                    ['title' => 'Party Bus Rental',      'desc' => 'Luxury party buses for birthdays, bachelorettes, proms, and group events of any size.',                   'href' => '/party-bus-rental-chicago'],
                    ['title' => 'Special Events',        'desc' => 'Quinceañeras, galas, concerts, sporting events, and any celebration worth arriving in style.',            'href' => '/special-event-limousine'],
                    ['title' => 'Prom Transportation',   'desc' => 'Safe, stylish prom and graduation transportation for students and peace of mind for families.',           'href' => '/prom-party-bus-rental-illinois'],
                ] as $s)
                <a href="{{ $s['href'] }}" style="text-decoration: none;">
                    <div style="background: var(--navy); padding: 1.75rem; height: 100%; transition: background 0.2s;" onmouseover="this.style.background='var(--navy-light)'" onmouseout="this.style.background='var(--navy)'">
                        <h3 style="font-family: var(--font-head); font-size: 1.1rem; font-weight: 600; color: var(--champagne); line-height: 1.3;" class="mb-3">{{ $s['title'] }}</h3>
                        <p style="font-family: var(--font-body); color: var(--cloud); font-size: 1rem; line-height: 1.5;">{{ $s['desc'] }}</p>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>

    <x-sections.limo-vs-rideshare />

    <x-sections.three-steps :inverted="true" />

    <x-sections.free-instant-quote
        heading="Why choose"
        headingBold="us?"
        headingTail=""
        image="/images/sections/special-event-limo.png"
        imageAlt="Special event limousine service, Stop and Go Airport Shuttle Service"
        imageAspect="4/3"
        imageObjectPosition="center"
        rightVariant="description"
        descHeading="What to Look for in a Local Limo Service"
        descSubheading="Stop & Go checks every box"
        descBody="When evaluating any chauffeured transportation provider, ask these questions. Here is how Stop & Go answers each one:"
        :descBullets="[
            'Are chauffeurs background-checked and professionally licensed? Yes, every one of them.',
            'Is pricing flat-rate or does it vary by mileage? Flat-rate, always.',
            'Is the vehicle inspected and cleaned before every ride? Yes, without exception.',
            'Do they track flights for airport pickups? Yes, in real time.',
            'Are they available 24 hours a day? Yes, every day of the year.',
            'Do they serve your suburb or neighborhood? Yes, all of Chicagoland.',
        ]"
        descClosing="Call or book online. We are ready when you need us."
        descImage="/images/sections/special-event-limo.png"
        descImageAlt="Special event limousine service throughout Chicagoland"
        :descImageTop="true"
    />

    <x-sections.review-slider />

    <x-sections.our-services />

    <x-sections.faq preset="general" />

    <x-sections.share-your-experience />

    <x-sections.map-contact-section />

    <x-ui.banner-thin-cloud />

    <x-sections.base-footer />

</x-layouts.page>
