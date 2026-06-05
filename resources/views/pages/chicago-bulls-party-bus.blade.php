@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Chicago Bulls Party Bus — New Lenox and Southwest Suburbs, IL",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": { "@type": "State", "name": "Illinois" },
    "description": "Group rides to the United Center for Bulls games from New Lenox, Plainfield, and the Southwest suburbs. Chicago Bulls party bus. Call (815) 585-6922."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",                    "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "Special Events",          "item": "https://www.newlenoxlimoservice.com/our-services" },
        { "@type": "ListItem", "position": 3, "name": "Chicago Bulls Party Bus", "item": "https://www.newlenoxlimoservice.com/chicago-bulls-party-bus" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Chicago Bulls Party Bus | Stop and Go Limo — New Lenox, IL"
    metaDescription="Group rides to the United Center for Bulls games from New Lenox, Plainfield, and the Southwest suburbs. Call (815) 585-6922."
    currentPage="special-events"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Chicago Bulls party bus from New Lenox, Illinois"
>
    <x-sections.category-hero
        heading="Chicago Bulls"
        headingBold="Party Bus"
        subtitle="Group rides to the United Center for Bulls games"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/heroes/hero-services.jpg"
        imagePosition="center center"
    />
</x-layouts.page>
