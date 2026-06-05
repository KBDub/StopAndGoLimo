@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Coach Bus Charters — New Lenox and Southwest Suburbs, IL",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": { "@type": "State", "name": "Illinois" },
    "description": "Large-group coach bus charters for Illinois and beyond. Serving New Lenox, Plainfield, Joliet, and the Southwest suburbs. Call (815) 585-6922."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",        "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "Services",    "item": "https://www.newlenoxlimoservice.com/our-services" },
        { "@type": "ListItem", "position": 3, "name": "Coach Buses", "item": "https://www.newlenoxlimoservice.com/coach-buses" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Coach Buses | Stop and Go Limo — New Lenox, IL"
    metaDescription="Large-group coach bus charters for Illinois and beyond. Serving New Lenox, Plainfield, and the Southwest suburbs. Call (815) 585-6922."
    currentPage="services"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Coach bus charters in New Lenox, Illinois"
>
    <x-sections.category-hero
        heading="Coach"
        headingBold="Buses"
        subtitle="Large-group charters for Illinois and beyond"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/heroes/hero-services.jpg"
        imagePosition="center center"
    />
</x-layouts.page>
