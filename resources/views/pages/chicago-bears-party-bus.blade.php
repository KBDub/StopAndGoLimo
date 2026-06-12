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
        heading="Chicago Bears"
        headingBold="Party Bus"
        subtitle="Game day group transportation to Soldier Field"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/heroes/hero-chicago-bears-party-bus.jpg"
        imagePosition="center center"
    />
</x-layouts.page>
