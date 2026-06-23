@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Airport Shuttle — O'Hare and Midway Transfers",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": { "@type": "State", "name": "Illinois" },
    "description": "24/7 airport shuttle and limousine service to O'Hare International and Midway Airport from New Lenox, Plainfield, and the Southwest suburbs."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",           "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "Services",       "item": "https://www.newlenoxlimoservice.com/our-services" },
        { "@type": "ListItem", "position": 3, "name": "Airport Shuttle","item": "https://www.newlenoxlimoservice.com/airport-shuttle-ohare-midway" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Airport Shuttle"
    metaDescription="24/7 airport shuttle service to O'Hare and Midway from anywhere in Chicagoland. Flat rates, on-time pickup, professional chauffeurs. Call (815) 585-6922."
    currentPage="services"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Airport shuttle service to O'Hare and Midway from New Lenox, Illinois"
>
    <x-sections.category-hero
        heading="Airport Shuttle Service"
        headingBold="to O'Hare and Midway"
        :headingTwoLines="false"
        subtitle="Private door-to-door transfers, available 24 hours a day"
        description="Stop & Go Airport Shuttle Service, Inc. provides private transfers to O'Hare (ORD) and Midway (MDW) throughout Chicagoland. Flat-rate, door-to-door service with no surge pricing and no hidden fees. Every driver is background-checked, uniformed, and experienced at both airports. We monitor all flights in real time and adjust automatically if anything changes. We serve the southwest, western, north, and northwest suburbs and every Chicago neighborhood. Solo travelers, families, corporate groups, and large parties all welcome. Executive sedans, luxury SUVs, Sprinter vans, and coach buses available. Available 24 hours a day, 365 days a year."
        buttonText="Book a Ride"
        buttonHref="https://book.mylimobiz.com/v4/(S(1oixqymtpiatq43mylq5sucd))/stopngo"
        image="/images/heroes/airport-ohare-midway.jpg"
        imagePosition="center center"
    />

    <x-sections.info-strip
        headingPrefix="Enjoy Your Trip With Us! Experience a "
        headingBold="24/7 Service You Can Trust"
        heading=""
        body="Stop & Go offers 24/7 airport shuttle service from New Lenox, Plainfield, Naperville, Aurora, Joliet, and Chicago suburbs to O'Hare and Midway. Reliable, door-to-door service with professional drivers, flight monitoring, and luggage assistance ensures stress-free travel for individuals, families, and groups."
    />

    <x-sections.three-steps :inverted="true" />

    <x-sections.free-instant-quote
        rightVariant="description"
        defaultVehicle="Airport Transportation"
        formAction="/get-a-quote"
        submitLabel="Send Message"
        descHeading="Why Choose Us?"
        descSubheading="Complete Transportation Services"
        descBody="As a trusted provider of airport transportation, Stop & Go offers complete airport shuttle services throughout the Chicago suburbs:"
        :descBullets="[
            'Party bus rental for weddings, proms, birthdays, and nights out',
            'Limousine service for weddings, events, and special occasions',
            'Corporate group transportation for business meetings and outings',
            'Elegant Wedding vehicles for your special day',
            'Custom packages for concerts, sporting events, and private celebrations',
        ]"
        descClosing="Our professional drivers know Naperville, Aurora, Joliet, Plainfield, New Lenox, and surrounding areas, ensuring safe, reliable, and punctual airport shuttle experiences for every traveler."
    />
        
    <x-sections.review-slider />
            
    <x-sections.points-of-interest
        heading="Arrive with"
        headingBold="Ease,"
        headingTail=" Depart with"
        headingBold2="Peace"
        :columns="2"
        icon="plane"
        :points="[
            ['name' => 'Guaranteed On-Time Airport Pickup', 'href' => '#'],
            ['name' => 'Dependable and Punctual',           'href' => '#'],
            ['name' => 'Safety and Professionalism',        'href' => '#'],
            ['name' => 'Eco-Friendly and Community Minded', 'href' => '#'],
            ['name' => 'VIP Comfort Tailored to You',       'href' => '#'],
        ]"
    />

    <x-sections.image-slide-in
        headingPrefix="24/7 Airport Shuttle to"
        headingBold="O'Hare & Midway"
        body="Our New Lenox airport shuttle provides 24/7 service to O'Hare and Midway with on-time pickups. Serving downtown New Lenox, nearby neighborhoods, and suburbs, our shuttle ensures stress-free travel with luggage assistance, flight monitoring, and expert navigation for efficient New Lenox to O'Hare and Midway trips."
        buttonText="Book Airport Shuttle"
        buttonHref="/bookings-reservations"
        image="/images/sections/new-lenox-airport.png"
        imageAlt="Stop and Go Airport Shuttle vehicle ready for New Lenox airport pickup"
        imageAspect="3/2"
    />

    <x-sections.city-info-grid :boxes="[
        ['heading' => 'New Lenox Area',    'items' => ['Downtown New Lenox', 'New Lenox Industrial Parks', 'Route 30 Corridor', 'Country Club Estates', 'Local Shopping & Transit Hubs']],
        ['heading' => 'Plainfield Area',   'items' => ['Downtown Plainfield', 'Laraway Road & 127th Street Area', 'Settlers\' Park Neighborhood', 'Plainfield Central Business District', 'Local Schools & Community Centers']],
        ['heading' => 'Naperville Area',   'items' => ['Naperville City Center', 'Riverwalk District', 'Downtown Naperville', 'North Naperville', 'West Naperville']],
        ['heading' => 'Aurora Area',       'items' => ['Downtown Aurora', 'Fox Valley Area', 'North Aurora', 'West Aurora', 'Boulder Hill']],
        ['heading' => 'Joliet Area',       'items' => ['Downtown Joliet', 'Historic District', 'Cathedral Area', 'Rialto Square Theatre', 'Pilcher Park Area']],
        ['heading' => 'Chicago Suburbs',   'items' => ['Bolingbrook', 'Romeoville', 'Lockport', 'Homer Glen', 'Woodridge']],
    ]" />

    <x-sections.text-block-slide-in
        headingPrefix="Professional"
        headingBold="Transportation Solutions"
        body="As a trusted Chicago area transportation company, Stop & Go provides full-service airport shuttle service to O'Hare and Midway from New Lenox, Naperville, Aurora, Joliet, and all surrounding suburbs. Our professional drivers and modern fleet deliver safe, comfortable, and on-time service with convenient access to I‑88, I‑355, and I‑55 for smooth airport transfers every time."
        buttonText="Book Your Ride"
        buttonHref="/bookings-reservations"
        directions="Downtown Naperville to O'Hare: 25–40 minutes via I‑88 East to I‑294 North • Crossroads Area to Midway: 30–45 minutes • Naperville to airport terminals: 20–35 minutes via I‑88 East • All Naperville neighborhoods served for airport shuttle • Round-trip packages available for O'Hare and Midway"
    />

    <x-sections.share-your-experience />
    <x-sections.map-contact-section />
    <x-ui.banner-thin-cloud />
    <x-sections.base-footer />

</x-layouts.page>
