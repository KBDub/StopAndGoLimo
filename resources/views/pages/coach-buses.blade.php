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
    title="Coach Bus Rentals | Stop and Go Limo — New Lenox, IL"
    metaDescription="Charter coach bus rentals for groups of all sizes in New Lenox, Plainfield, and the Southwest suburbs. Professional drivers, pristine vehicles. Call (815) 585-6922."
    currentPage="services"
    ogImage="/images/coach-buses-hero.jpg"
    ogImageAlt="Charter coach bus available for group rentals at Stop and Go Airport Shuttle Service Inc."
>
    <x-sections.category-hero
        heading="Arrive in Unforgettable Style with"
        headingBold="Our Professional Chauffeurs"
        subtitle="Coach Buses"
        description="Spacious, comfortable charter coach buses for corporate events, sports teams, weddings, and group travel throughout the Southwest suburbs."
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/coach-buses-hero.jpg"
        imagePosition="center center"
    />

</x-layouts.page>
