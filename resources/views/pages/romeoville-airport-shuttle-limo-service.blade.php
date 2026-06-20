@push('structured-data')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "LocalBusiness",
    "name": "Stop and Go Airport Shuttle Service Inc — Romeoville, IL",
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
    "areaServed": { "@@type": "City", "name": "Romeoville", "addressRegion": "IL", "addressCountry": "US" },
    "description": "24/7 luxury limo and airport shuttle service in Romeoville, IL. Airport transfers, weddings, corporate travel, and special events. Call (815) 585-6922."
}
</script>
@endpush

<x-layouts.page
    title="Romeoville Limo & Airport Shuttle Service | Stop and Go Airport Shuttle"
    metaDescription="24/7 luxury limo and airport shuttle service in Romeoville, IL. Airport transfers to O'Hare and Midway, weddings, corporate travel, and special events. Call (815) 585-6922."
    currentPage="service-areas"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Luxury limo service in Romeoville, Illinois"
>
    <x-sections.category-hero
        heading="24/7 Romeoville Airport Shuttle,"
        headingBold="Limo & Party Bus"
        :headingTwoLines="false"
        subtitle="Reliable transportation services throughout"
        subtitleIn="Romeoville, Illinois"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/sections/romeoville-il.png"
        imagePosition="center center"
    />

    <x-sections.travel-in-style
        heading="Every Occasion"
        headingBold="Covered"
        subtitle="Driven by certified drivers you can trust"
        body="Stop & Go provides reliable transportation throughout Romeoville. We offer a professional 24/7 Romeoville airport shuttle to O'Hare and Midway, luxury limousine service for weddings and events, and party bus rentals for celebrations. Serving all Romeoville neighborhoods, we deliver reliable, professional transportation throughout the Chicago area."
        image="/images/sections/romeoville-airport-shuttle.png"
        imageAlt="Airport shuttle service in Romeoville, Illinois — Stop and Go Airport Shuttle"
        :inverted="true"
    />

    <x-sections.info-strip
        headingBold="Reliable & Stylish"
        heading="Romeoville Transportation"
        body="Stop & Go provides 24/7 Romeoville airport shuttle service, luxury limousine service for weddings and events, and party bus rentals for celebrations. Serving all Romeoville neighborhoods, we offer reliable, professional transportation to O'Hare, Midway, and throughout the Chicago area."
    />

    <x-sections.three-steps :inverted="true" />

    <x-sections.free-instant-quote
        rightVariant="description"
        :inverted="true"
        :descImageTop="true"
        descImage="/images/sections/romeoville-wedding-transport.png"
        descImageAlt="Wedding transportation in Romeoville, Illinois — Stop and Go Airport Shuttle"
        descHeading="Why choose us?"
        descSubheading="Complete Romeoville Transportation Services"
        descBody="As Romeoville's locally-based transportation provider, Stop & Go offers complete luxury transportation services:"
        :descBullets="[
            'Romeoville airport shuttle for timely arrivals and departures',
            'Limousine service for weddings, events, and special occasions',
            'Party bus rental for celebrations and group travel',
            'Corporate transportation for business meetings and executive travel',
            'Wedding vehicles to make your special day seamless',
        ]"
        descClosing="Our intimate knowledge of Romeoville, from Highpoint to Montego Bay, from Independence Grove to the I-55 corridor, ensures efficient and reliable transportation throughout our southwest suburb."
    />

    <x-sections.travel-in-style
        heading="24/7 Romeoville Airport Shuttle to"
        headingBold="O'Hare & Midway"
        body="Our Romeoville airport shuttle provides round-the-clock service to O'Hare and Midway with on-time pickups from anywhere in Romeoville. Serving Highpoint, Montego Bay, Independence Grove, Weber Road, and other neighborhoods, we ensure stress-free travel with flight monitoring, luggage assistance, and expert I-55 and Route 53 navigation for efficient Romeoville to O'Hare and Romeoville to Midway trips."
        image="/images/sections/romeoville-airport.png"
        imageAlt="Airport shuttle service from Romeoville, Illinois to O'Hare and Midway — Stop and Go"
        imagePosition="right"
        :inverted="true"
    />

    <x-sections.our-services />

    <x-sections.city-info-grid
        :boxes="[
            [
                'heading' => 'North Romeoville',
                'items'   => ['Highpoint', 'Montego Bay', 'Independence Grove', 'North subdivisions', 'Near Bolingbrook border'],
            ],
            [
                'heading' => 'South Romeoville',
                'items'   => ['South Romeoville neighborhoods', 'I-55 corridor businesses', 'Near Plainfield border', 'Near Lockport border', 'Route 53 areas (south)'],
            ],
            [
                'heading' => 'East Romeoville',
                'items'   => ['Independence Grove (east side)', 'Montego Bay (east side)', 'North subdivisions (east)', 'Near Naperville border', 'Route 53 corridor'],
            ],
            [
                'heading' => 'Central Romeoville',
                'items'   => ['Downtown Romeoville', 'Village Hall area', 'Romeo Road neighborhoods', 'Historic Romeoville', 'Weber Road central'],
            ],
            [
                'heading' => 'West Romeoville',
                'items'   => ['Weber Road corridor (west)', 'Montego Bay (west)', 'Highpoint (west)', 'West Romeoville neighborhoods', 'I-55 corridor access'],
            ],
            [
                'heading' => 'I-55 Corridor Areas',
                'items'   => ['Weber Road corridor', 'I-55 access points', 'Route 53 intersections', 'Business and commercial zones', 'Central, North, South Romeoville'],
            ],
        ]"
    />

    <x-sections.text-block-slide-in
        headingPrefix="Professional Transportation Solutions"
        headingBold="Throughout Romeoville"
        body="As Romeoville's trusted transportation provider since 2009, Stop & Go offers complete luxury transportation services including Romeoville airport shuttle, Romeoville limo service, Romeoville party bus, corporate transportation, and wedding vehicles. Our intimate knowledge of Romeoville, from Highpoint to Montego Bay, Independence Grove, and Weber Road, with easy access to I-55 and Route 53, ensures efficient, reliable transportation throughout this growing southwest suburb and for Romeoville to O'Hare trips."
        buttonText="Contact"
        buttonHref="/get-in-touch"
        directions="• Downtown Romeoville to O'Hare: 40–50 minutes via I-55 North  • West Romeoville to O'Hare: 45–55 minutes  • Romeoville to Midway Airport: 30–40 minutes via I-55 North  • Romeoville I-55 corridor to both airports"
    />

    <x-sections.faq />
    <x-sections.share-your-experience />
    <x-sections.map-contact-section />
    <x-ui.banner-thin-cloud />
    <x-sections.base-footer />

</x-layouts.page>
