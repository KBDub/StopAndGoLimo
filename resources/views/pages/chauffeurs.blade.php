@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Professional Chauffeurs — New Lenox and Southwest Suburbs, IL",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": { "@type": "State", "name": "Illinois" },
    "description": "Licensed, insured, and background-checked professional chauffeurs serving New Lenox, Plainfield, and the Southwest suburbs. Call (815) 585-6922."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",        "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "Services",    "item": "https://www.newlenoxlimoservice.com/our-services" },
        { "@type": "ListItem", "position": 3, "name": "Chauffeurs",  "item": "https://www.newlenoxlimoservice.com/chauffeurs" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Professional Chauffeurs | Stop and Go Limo — New Lenox, IL"
    metaDescription="Licensed, insured, and background-checked professional chauffeurs serving New Lenox, Plainfield, and the Southwest suburbs. Call (815) 585-6922."
    currentPage="services"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Professional chauffeurs at Stop and Go Airport Shuttle Service Inc."
>
    <x-sections.category-hero
        heading="Professional"
        headingBold="Chauffeurs"
        subtitle="Experienced, licensed drivers at your service"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/heroes/hero-services.jpg"
        imagePosition="center center"
    />
</x-layouts.page>
