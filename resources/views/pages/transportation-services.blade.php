@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Transportation Services — New Lenox and Southwest Suburbs, IL",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": { "@type": "State", "name": "Illinois" },
    "description": "Point-to-point luxury transportation across the Southwest suburbs of Chicago. Serving New Lenox, Plainfield, Joliet, and beyond. Call (815) 585-6922."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",                   "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "Services",               "item": "https://www.newlenoxlimoservice.com/our-services" },
        { "@type": "ListItem", "position": 3, "name": "Transportation Services","item": "https://www.newlenoxlimoservice.com/transportation-services" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Transportation Services | Stop and Go Limo — New Lenox, IL"
    metaDescription="Point-to-point luxury transportation across the Southwest suburbs. Serving New Lenox, Plainfield, Joliet, and beyond. Call (815) 585-6922."
    currentPage="services"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Transportation services in New Lenox, Illinois"
>
    <x-sections.category-hero
        heading="Transportation"
        headingBold="Services"
        subtitle="Point-to-point rides across the Southwest suburbs"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/sections/corporate-service.jpg"
        imagePosition="center center"
    />
</x-layouts.page>
