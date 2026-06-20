@push('structured-data')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "LocalBusiness",
    "name": "Stop and Go Airport Shuttle Service Inc — New Lenox, IL",
    "url": "{{ request()->url() }}",
    "telephone": "(815) 585-6922",
    "address": {
        "@@type": "PostalAddress",
        "streetAddress": "400 E Lincoln Hwy Suite 101A",
        "addressLocality": "New Lenox",
        "addressRegion": "IL",
        "postalCode": "60451",
        "addressCountry": "US"
    },
    "areaServed": {
        "@@type": "City",
        "name": "New Lenox",
        "addressRegion": "IL",
        "addressCountry": "US"
    },
    "description": "24/7 luxury limo and airport shuttle service in New Lenox, IL. Airport transfers, weddings, corporate travel, and special events. Call (815) 585-6922."
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        { "@@type": "ListItem", "position": 1, "name": "Home",          "item": "https://www.stopandgoairportshuttle.com" },
        { "@@type": "ListItem", "position": 2, "name": "Service Areas", "item": "https://www.stopandgoairportshuttle.com/service-areas" },
        { "@@type": "ListItem", "position": 3, "name": "New Lenox",     "item": "{{ request()->url() }}" }
    ]
}
</script>
@endpush

<x-layouts.page
    title="New Lenox Limo & Airport Shuttle Service | Stop and Go Airport Shuttle"
    metaDescription="24/7 luxury limo and airport shuttle service in New Lenox, IL. Airport transfers to O'Hare and Midway, weddings, corporate travel, and special events. Call (815) 585-6922."
    currentPage="service-areas"
    ogImage="/images/heroes/hero-new-lenox.png"
    ogImageAlt="Luxury limo service in New Lenox, Illinois"
>
    <x-sections.category-hero
        heading="New Lenox Airport Shuttle,"
        headingBold="Limo & Party Bus Service"
        :headingTwoLines="false"
        subtitle="Your hometown transportation company, available 24 hours a day"
        subtitleIn="based in New Lenox since 2009"
        description="Stop & Go Airport Shuttle Service, Inc. is proud to call New Lenox home. Our primary location at 400 E Lincoln Hwy puts us right in the heart of the community, ready to serve our neighbors around the clock, every day of the year. We provide private airport transfers to O'Hare (ORD) and Midway (MDW) with flat-rate pricing and real-time flight tracking. No matter when your flight lands or departs, we are ready. Beyond airport runs, we serve the full range of New Lenox life: wedding limousines for couples celebrating at local venues, party buses for prom groups from Lincoln-Way District schools, corporate car service for executives heading to Chicago or the western business corridors, quinceañera and birthday group transportation, and more. We serve families throughout all New Lenox neighborhoods, near Silver Cross Hospital, along Lincoln Highway (Route 30), and throughout Will County. From New Lenox, we also connect clients to communities across all of Chicagoland, including the north, northwest, and western suburbs. Our chauffeurs are background-checked, uniformed, and trained to deliver a seamless experience every time. We are your neighbors and we take that seriously. Call us any time or book online."
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/heroes/hero-new-lenox.png"
        imagePosition="center center"
    />

    <x-sections.travel-in-style
        heading="Every Occasion"
        headingBold="Covered"
        subtitle="Driven by certified drivers you can trust"
        body="Stop & Go provides reliable transportation throughout New Lenox. We offer a professional 24/7 New Lenox airport shuttle to O'Hare and Midway."
        buttonText="About Us"
        buttonHref="/about-us"
        image="/images/sections/new-lenox-limo.png"
        imageAlt="White luxury limousine in New Lenox, Illinois, Stop and Go Airport Shuttle"
        inverted=true
    />

    <x-sections.info-strip
        headingBold="Reliable & Stylish"
        heading="New Lenox Transportation"
        body="Stop & Go provides professional transportation in New Lenox with 24/7 airport shuttle service to O'Hare and Midway, luxury limousine service for weddings and events, and party bus rentals. Based at 400 E Lincoln Hwy, we serve all New Lenox neighborhoods with reliable local expertise. Whether you need a New Lenox airport shuttle, limo service, or party bus, our experienced local chauffeurs deliver exceptional service across the suburb."
    />

    <x-sections.three-steps
        :inverted="true"    
    />

    <x-sections.free-instant-quote
        heading="Why choose"
        headingBold="us?"
        headingTail=""
        image="/images/sections/black-limousine-new-lenox.png"
        imageAlt="Black limousine in New Lenox, Illinois, Stop and Go Airport Shuttle"
        imageAspect="16/9"
        imageObjectPosition="center"
        rightVariant="description"
        descHeading="Why choose us?"
        descSubheading="Complete Plainfield Transportation Services"
        descBody="As New Lenox's locally-based transportation provider since 2009, Stop & Go offers complete luxury transportation services:"
        :descBullets="[
            'New Lenox airport shuttle for timely arrivals and departures',
            'Limousine service for weddings, events, and special occasions',
            'Party bus rental for celebrations and group travel',
            'Corporate transportation for business meetings and executive travel',
            'Wedding vehicles to make your special day seamless',
        ]"
        descClosing="Our intimate knowledge of New Lenox, from downtown to the Route 30 corridor, from LaGrange Road to I-80 access, ensures efficient and reliable transportation throughout our hometown."
        descImage="/images/sections/black-limousine-new-lenox.png"
        descImageAlt="Black limousine in New Lenox, Illinois, Stop and Go Airport Shuttle"
        :descImageTop="true"
    />

    <x-sections.image-slide-in
        headingPrefix="24/7 New Lenox Airport Shuttle"
        headingBold="to O'Hare & Midway"
        body="Our New Lenox airport shuttle provides round-the-clock service to O'Hare and Midway with on-time pickups from anywhere in New Lenox. Serving downtown, Spencer Crossing, Fox Hill, Hickory Creek, and other neighborhoods, we ensure stress-free travel with flight monitoring, luggage assistance, and expert I-80 and I-55 navigation for efficient New Lenox to O'Hare and New Lenox to Midway trips."
        buttonText="Book Airport Shuttle"
        buttonHref="/bookings-reservations"
        image="/images/sections/new-lenox-airport.png"
        imageAlt="Aerial view of O'Hare airport, served by Stop and Go New Lenox Airport Shuttle"
        imageAspect="3/2"
    />

    <x-sections.our-services />

    <x-sections.city-info-grid :boxes="[
        ['heading' => 'North New Lenox',              'items' => ['Spencer Crossing', 'Fox Hill', 'North subdivisions', 'Route 30 corridor', 'LaGrange Road North areas']],
        ['heading' => 'South New Lenox',              'items' => ['Hickory Creek', 'South New Lenox neighborhoods', 'East side New Lenox', 'Route 52 areas', 'Near Frankfort border']],
        ['heading' => 'West New Lenox',               'items' => ['West New Lenox neighborhoods', 'Lincoln-Woodridge corridor', 'Near Joliet border', 'Residential subdivisions', 'Local shopping areas']],
        ['heading' => 'Downtown & Central New Lenox', 'items' => ['Downtown New Lenox', 'Historic downtown area', 'Lincoln Highway corridor', 'Central business district', 'Near Village Hall']],
        ['heading' => 'Nearby Communities',           'items' => ['Frankfort border areas', 'Mokena border areas', 'Joliet adjacent neighborhoods', 'Homer Glen areas', 'Tinley Park nearby zones']],
        ['heading' => 'New Lenox High Schools',       'items' => ['Lincoln-Way East High School area', 'Lincoln-Way Central High School area', 'Lincoln-Way West High School area', 'New Lenox Elementary areas', 'Local middle schools']],
    ]" 
    />

    <x-sections.text-block-slide-in
        headingPrefix="Professional Transportation Solutions"
        headingBold="Throughout New Lenox"
        body="As New Lenox's trusted transportation provider since 2009, Stop & Go offers complete luxury transportation services including New Lenox airport shuttle, New Lenox limo service, New Lenox party bus, corporate transportation, and wedding vehicles. Our intimate knowledge of New Lenox, from downtown to Spencer Crossing, Fox Hill, and Hickory Creek, with easy access to Route 30 and I-80, ensures efficient, reliable transportation throughout this thriving Will County community and for New Lenox to O'Hare trips."
        buttonText="Contact"
        buttonHref="/get-a-quote"
        directions="• Downtown New Lenox to O'Hare: 45 to 55 minutes via I-80 East to I-55 North • West New Lenox to O'Hare: 50 to 60 minutes • New Lenox to Midway Airport: 40 to 50 minutes via I-80 East to I-55 North • New Lenox I-80/I-55 corridor to both airports"
    />

    <x-sections.faq />

    <x-sections.share-your-experience />

    <x-sections.map-contact-section />

    <x-ui.banner-thin-cloud />

    <x-sections.base-footer />

</x-layouts.page>
