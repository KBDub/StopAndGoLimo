@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Wedding Limousine Services — New Lenox and Southwest Suburbs, IL",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": { "@type": "State", "name": "Illinois" },
    "description": "Elegant wedding limousine service in New Lenox, Plainfield, and the Southwest suburbs. Make your special day unforgettable with a luxury limo."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",              "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "Services",          "item": "https://www.newlenoxlimoservice.com/our-services" },
        { "@type": "ListItem", "position": 3, "name": "Wedding Limousine", "item": "https://www.newlenoxlimoservice.com/wedding-limousine-services" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Wedding Limousine Services | Stop and Go Limo — New Lenox, IL"
    metaDescription="Elegant wedding limousine service in New Lenox, Plainfield, and the Southwest suburbs. Make your special day unforgettable. Call (815) 585-6922."
    currentPage="services"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Wedding limousine service in New Lenox, Illinois"
>
    <x-sections.category-hero
        heading="Wedding"
        headingBold="Limousine"
        subtitle="Elegant transportation for your perfect day"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/heroes/hero-services.jpg"
        imagePosition="center center"
    />
</x-layouts.page>
