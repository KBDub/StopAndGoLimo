@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Concert Party Bus Rental — Chicago and Southwest Suburbs, IL",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": { "@type": "State", "name": "Illinois" },
    "description": "Ride together to the biggest shows in Chicago from New Lenox, Plainfield, and the Southwest suburbs. Concert party bus rental. Call (815) 585-6922."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",              "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "Special Events",    "item": "https://www.newlenoxlimoservice.com/our-services" },
        { "@type": "ListItem", "position": 3, "name": "Concert Party Bus", "item": "https://www.newlenoxlimoservice.com/chicago-concert-party-bus-rental" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Concert Party Bus Rental Chicago | Stop and Go Limo"
    metaDescription="Ride together to the biggest shows in Chicago from New Lenox, Plainfield, and the Southwest suburbs. Call (815) 585-6922."
    currentPage="special-events"
    ogImage="/images/heroes/hero-chicago-concert-party-bus.jpg"
    ogImageAlt="Concert party bus rental from New Lenox, Illinois"
>
    <x-sections.category-hero
        heading="Chicago Concert"
        headingBold="Party Bus"
        subtitle="Discover the Joy of Seamless Journeys"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/heroes/hero-chicago-concert-party-bus.jpg"
        imagePosition="center center"
    />

    <x-sections.info-strip
        headingPrefix="Discover Chicago's Finest"
        headingBold="Concert Party Bus"
        heading="Rentals"
        body="Experience luxury and style on your way to the next big show with a Chicago Concert Party Bus from Stop & Go Airport Shuttle Service. Choose a concert party bus rental in Chicago or a party bus rental for concerts in Chicago to accommodate any group size and enjoy a fun, hassle-free night out."
    />

    <x-sections.points-of-interest
        heading="Concert Venues We"
        headingBold="Serve in Chicago"
        :points="[
            ['name' => 'Jay Pritzker Pavilion',                    'href' => '#'],
            ['name' => 'Millennium Park',                          'href' => '#'],
            ['name' => 'City Winery',                              'href' => '#'],
            ['name' => 'The United Center',                        'href' => '#'],
            ['name' => 'Huntington Bank Pavilion',                 'href' => '#'],
            ['name' => 'The Vic Theatre',                          'href' => '#'],
            ['name' => 'The Chicago Theatre',                      'href' => '#'],
            ['name' => 'Symphony Center (Chicago Symphony Orchestra)', 'href' => '#'],
            ['name' => 'Lincoln Hall',                             'href' => '#'],
            ['name' => 'House of Blues',                           'href' => '#'],
            ['name' => 'Soldier Field',                            'href' => '#'],
            ['name' => 'Metro',                                    'href' => '#'],
        ]"
    />

    <x-sections.free-instant-quote
        defaultVehicle="Party Bus"
        formAction="/get-a-quote"
        submitLabel="Send Message"
        image="/images/heroes/hero-chicago-concert-fiq.jpg"
        imageAlt="Concert crowd with stage lights at a Chicago live music venue"
        imageAspect="4/3"
        heading="Experience Concert-Going Like a Rock Star with"
        headingBold="Chicago's Premier Party Bus"
        headingTail="Rentals"
        body="When you rent a party bus for a concert in Chicago with Stop & Go, you will experience the ultimate Chicago Concert Party Bus service, with top-notch customer care that makes you feel like a rock star as you head to the show. Enjoy a luxury concert transportation party bus with a professional chauffeur, so you can relax and focus on the night's excitement. Our Chicago concert party bus service is designed for convenience and fun, and we recommend booking early due to high demand, especially for buses with restrooms. Bring all your friends on a group concert party bus in Chicago and make your concert experience unforgettable."
    />

    <x-sections.faq />

    <x-sections.share-your-experience />

    <x-sections.map-contact-section />

    <x-ui.banner-thin-cloud />

    <x-sections.base-footer />
        
</x-layouts.page>
