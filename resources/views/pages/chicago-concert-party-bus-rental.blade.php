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
</x-layouts.page>
