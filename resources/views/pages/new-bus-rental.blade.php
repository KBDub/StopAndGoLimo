@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Bus Rental — New Lenox and Southwest Suburbs, IL",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": { "@type": "State", "name": "Illinois" },
    "description": "Latest-model bus rental for any group occasion in New Lenox, Plainfield, and the Southwest suburbs of Chicago, Illinois."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",       "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "Services",   "item": "https://www.newlenoxlimoservice.com/our-services" },
        { "@type": "ListItem", "position": 3, "name": "Bus Rental", "item": "https://www.newlenoxlimoservice.com/new-bus-rental" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Bus Rental | Stop and Go Limo — New Lenox, IL"
    metaDescription="Latest-model bus rental for any group occasion in New Lenox, Plainfield, and the Southwest suburbs. Call (815) 585-6922."
    currentPage="services"
    ogImage="/images/heroes/hero-new-bus-rental.jpg"
    ogImageAlt="Bus rental in New Lenox, Illinois"
>
    <x-sections.category-hero
        heading="New Bus"
        headingBold="Rental"
        subtitle="Luxury Party Bus Rental in Plainfield & New Lenox, Illinois"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/heroes/hero-new-bus-rental.jpg"
        imagePosition="center center"
    />
</x-layouts.page>
