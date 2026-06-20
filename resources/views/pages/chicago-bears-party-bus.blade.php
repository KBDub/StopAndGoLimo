@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Chicago Bears Party Bus — New Lenox and Southwest Suburbs, IL",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": { "@type": "State", "name": "Illinois" },
    "description": "Game day group transportation to Soldier Field from New Lenox, Plainfield, and the Southwest suburbs. Chicago Bears party bus. Call (815) 585-6922."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",                    "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "Special Events",          "item": "https://www.newlenoxlimoservice.com/our-services" },
        { "@type": "ListItem", "position": 3, "name": "Chicago Bears Party Bus", "item": "https://www.newlenoxlimoservice.com/chicago-bears-party-bus" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Chicago Bears Party Bus | Stop and Go Limo — New Lenox, IL"
    metaDescription="Game day group transportation to Soldier Field from New Lenox, Plainfield, and the Southwest suburbs. Call (815) 585-6922."
    currentPage="special-events"
    ogImage="/images/heroes/hero-chicago-bears-party-bus.jpg"
    ogImageAlt="Chicago Bears party bus from New Lenox, Illinois"
>
    <x-sections.category-hero
        heading="Chicago Bears Party Bus"
        headingBold="to Soldier Field"
        :headingTwoLines="false"
        subtitle="Travel to the game together, no parking, no hassle"
        description="Stop & Go Airport Shuttle Service, Inc. makes Bears game day easy for groups throughout Chicagoland. Our Chicago Bears party bus service picks up your crew from communities across the southwest, west, north, and northwest suburbs and takes everyone straight to Soldier Field and back. Forget the parking fees and the postgame traffic. We handle all of that so your group can focus on the game. Our party buses come with premium sound systems, LED lighting, and comfortable seating for groups of all sizes, from 20 to 40-plus passengers. Our professional, background-checked chauffeurs know the routes and handle all the logistics. Whether it is a regular season game, a playoff run, or a tailgate gathering, we are ready. Our pricing is flat-rate, with a clear all-inclusive quote before you book. Groups of coworkers, families, birthday parties, and lifelong Bears fans all ride with us. Book your Bears game day party bus early. Game days fill fast, especially for big matchups and playoff weekends. Call us or request your group quote online today."
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/heroes/hero-chicago-bears-party-bus.jpg"
        imagePosition="center center"
    />

    <x-sections.info-strip
        headingPrefix="Prepare for the Game the"
        headingBold="Right Way"
        body="Book a Chicago Bears Party Bus for the ultimate game day experience! Our Chicago Bears party bus rental offers luxury, comfort, and convenience, making every trip unforgettable. Enjoy top-tier service with our Chicago Bears Party Bus service and arrive in style as the Bears take on rivals like the Green Bay Packers at Soldier Field."
    />

    <x-sections.free-instant-quote
        defaultVehicle="Party Bus"
        formAction="/get-a-quote"
        submitLabel="Send Message"
        image="/images/heroes/hero-chicago-bears-fiq.jpg"
        imageAlt="Soldier Field lit up on game day in Chicago"
        imageAspect="4/3"
        heading="Enjoy"
        headingBold="Both the Game & the Ride"
        bodyHtml="Located in Chicago&#8217;s Near South Side, Soldier Field draws massive crowds for Bears games, soccer, rugby matches, and concerts. Make your trip effortless by riding on a <a href='/rates/' style='color: var(--champagne); text-decoration: underline; text-decoration-color: var(--champagne); text-underline-offset: 3px;'>Chicago Bears Party Bus</a>, perfect for groups of up to 36 passengers.<br><br>Choose a Game Day party bus to <a href='/get-a-quote/' style='color: var(--champagne); text-decoration: underline; text-decoration-color: var(--champagne); text-underline-offset: 3px;'>Chicago Bears</a> or a party bus to Soldier Field Bears game and enjoy a hassle-free, luxurious experience.<br><br>Celebrate in style with a <a href='/rates/' style='color: var(--champagne); text-decoration: underline; text-decoration-color: var(--champagne); text-underline-offset: 3px;'>Luxury Bears party bus in Chicago</a>, featuring premium music systems, LED lighting, and four fully stocked bars. Turn every trip to the stadium into an unforgettable game day party!"
    />

    <x-sections.faq />

    <x-sections.share-your-experience />

    <x-sections.map-contact-section />

    <x-ui.banner-thin-cloud />

    <x-sections.base-footer />

</x-layouts.page>
