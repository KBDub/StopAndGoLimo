@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Town Car Services — New Lenox and Southwest Suburbs, IL",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": { "@type": "State", "name": "Illinois" },
    "description": "Premium sedan and town car service for any occasion in New Lenox, Plainfield, and the Southwest suburbs of Chicago. Call (815) 585-6922."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",             "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "Services",         "item": "https://www.newlenoxlimoservice.com/our-services" },
        { "@type": "ListItem", "position": 3, "name": "Town Car Services","item": "https://www.newlenoxlimoservice.com/town-car-services" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Town Car Services | Stop and Go Limo — New Lenox, IL"
    metaDescription="Premium sedan and town car service for any occasion in New Lenox, Plainfield, and the Southwest suburbs. Call (815) 585-6922."
    currentPage="services"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Town car service in New Lenox, Illinois"
>
    <x-sections.category-hero
        heading="Town Car"
        headingBold="Services"
        subtitle="Premium sedan service for any occasion"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/sections/driver-classy.jpg"
        imagePosition="center center"
    />
</x-layouts.page>
