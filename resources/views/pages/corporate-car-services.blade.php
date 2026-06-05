@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Corporate Car Service — New Lenox and Southwest Suburbs, IL",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": { "@type": "State", "name": "Illinois" },
    "description": "Executive ground transportation for business travel in New Lenox, Plainfield, and the Southwest suburbs of Chicago. Call (815) 585-6922."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",                 "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "Services",             "item": "https://www.newlenoxlimoservice.com/our-services" },
        { "@type": "ListItem", "position": 3, "name": "Corporate Car Service","item": "https://www.newlenoxlimoservice.com/corporate-car-services" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Corporate Car Service | Stop and Go Limo — New Lenox, IL"
    metaDescription="Executive ground transportation for business travel in New Lenox, Plainfield, and the Southwest suburbs. Call (815) 585-6922."
    currentPage="services"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Corporate car service in New Lenox, Illinois"
>
    <x-sections.category-hero
        heading="Corporate"
        headingBold="Car Service"
        subtitle="Executive ground transportation for business travel"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/heroes/hero-services.jpg"
        imagePosition="center center"
    />
</x-layouts.page>
