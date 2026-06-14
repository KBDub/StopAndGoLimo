@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Grad Day Transportation — Illinois",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": { "@type": "State", "name": "Illinois" },
    "description": "Safe, on-time graduation day transportation in New Lenox, Plainfield, and the Southwest suburbs of Chicago. Call (815) 585-6922."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",                  "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "Services",              "item": "https://www.newlenoxlimoservice.com/our-services" },
        { "@type": "ListItem", "position": 3, "name": "Grad Day Transportation","item": "https://www.newlenoxlimoservice.com/grad-day-transportation" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Grad Day Transportation | Stop and Go Limo — New Lenox, IL"
    metaDescription="Safe, on-time graduation day transportation in New Lenox, Plainfield, and the Southwest suburbs. Call (815) 585-6922."
    currentPage="services"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Graduation day transportation in New Lenox, Illinois"
>
    <x-sections.category-hero
        heading="Grad Day"
        headingBold="Transportation"
        subtitle="Safe, on-time rides for your graduation celebration"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/sections/graduation-day-hats-in-air.png"
        imagePosition="center center"
    />
</x-layouts.page>
