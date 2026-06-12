@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Chicago Blackhawks Party Bus — New Lenox and Southwest Suburbs, IL",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": { "@type": "State", "name": "Illinois" },
    "description": "Group rides to the United Center for Blackhawks games from New Lenox, Plainfield, and the Southwest suburbs. Chicago Blackhawks party bus. Call (815) 585-6922."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",                         "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "Special Events",               "item": "https://www.newlenoxlimoservice.com/our-services" },
        { "@type": "ListItem", "position": 3, "name": "Chicago Blackhawks Party Bus", "item": "https://www.newlenoxlimoservice.com/chicago-blackhawks-party-bus" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Chicago Blackhawks Party Bus | Stop and Go Limo — New Lenox, IL"
    metaDescription="Group rides to the United Center for Blackhawks games from New Lenox, Plainfield, and the Southwest suburbs. Call (815) 585-6922."
    currentPage="special-events"
    ogImage="/images/heroes/hero-chicago-blackhawks-party-bus.jpg"
    ogImageAlt="Chicago Blackhawks party bus from New Lenox, Illinois"
>
    <x-sections.category-hero
        heading="Chicago Blackhawks"
        headingBold="Party Bus"
        subtitle="Discover the Joy of Seamless Journeys"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/heroes/hero-chicago-blackhawks-party-bus.jpg"
        imagePosition="center center"
    />

    <x-sections.free-instant-quote
        defaultVehicle="Party Bus"
        formAction="/get-a-quote"
        submitLabel="Send Message"
        image="/images/heroes/hero-chicago-blackhawks-fiq.png"
        imageAlt="Chicago Blackhawks party bus at the United Center"
        imageAspect="4/3"
        heading="The Best Games Need"
        headingBold="the Best Rides"
        bodyHtml="Transform your trip to a Chicago Blackhawks game at the United Center into an unforgettable night with our Chicago Blackhawks <a href='/bookings-reservations/' style='color: var(--champagne); text-decoration: underline; text-decoration-color: var(--champagne); text-underline-offset: 3px;'>party bus service</a>. Enjoy the ultimate Chicago Blackhawks party bus rental and make every game day special. Skip the hassle of traffic and parking with a party bus to United Center Blackhawks game, and celebrate in style with a Luxury <a href='/rates/' style='color: var(--champagne); text-decoration: underline; text-decoration-color: var(--champagne); text-underline-offset: 3px;'>Blackhawks Party Bus</a> in Chicago. When the Blackhawks clinch a victory, continue the fun by turning the bus into your personal party venue."
    />

</x-layouts.page>
