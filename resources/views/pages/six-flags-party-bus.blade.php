@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Six Flags Party Bus — New Lenox and Southwest Suburbs, IL",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": { "@type": "State", "name": "Illinois" },
    "description": "Group party bus rides to Six Flags Great America from New Lenox, Plainfield, and the Southwest suburbs of Chicago. Call (815) 585-6922."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",              "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "Special Events",    "item": "https://www.newlenoxlimoservice.com/our-services" },
        { "@type": "ListItem", "position": 3, "name": "Six Flags Party Bus","item": "https://www.newlenoxlimoservice.com/six-flags-party-bus" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Six Flags Party Bus | Stop and Go Limo — New Lenox, IL"
    metaDescription="Group party bus rides to Six Flags Great America from New Lenox, Plainfield, and the Southwest suburbs. Call (815) 585-6922."
    currentPage="special-events"
    ogImage="/images/heroes/hero-six-flags-party-bus.jpg"
    ogImageAlt="Six Flags party bus from New Lenox, Illinois"
>
    <x-sections.category-hero
        heading="Six Flags"
        headingBold="Party Bus"
        subtitle="Discover the Joy of Seamless Journeys"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/heroes/hero-six-flags-party-bus.jpg"
        imagePosition="center center"
    />
</x-layouts.page>
