@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Party Bus Rental — Naperville, IL",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": { "@type": "City", "name": "Naperville", "addressRegion": "IL", "addressCountry": "US" },
    "description": "Party bus rental in Naperville, Illinois. Perfect for birthdays, bachelorette parties, and group celebrations. Call (815) 585-6922."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",               "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "Services",           "item": "https://www.newlenoxlimoservice.com/our-services" },
        { "@type": "ListItem", "position": 3, "name": "Party Bus Naperville","item": "https://www.newlenoxlimoservice.com/party-bus-rental-naperville" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Party Bus Rental Naperville, IL | Stop and Go Limo"
    metaDescription="Party bus rental in Naperville, Illinois. Perfect for birthdays, bachelorette parties, and group celebrations. Call (815) 585-6922."
    currentPage="services"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Party bus rental in Naperville, Illinois"
>
    <x-sections.category-hero
        heading="Party Bus"
        headingBold="Naperville"
        subtitle="Group rides and celebrations in Naperville, Illinois"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/heroes/hero-services.jpg"
        imagePosition="center center"
    />
</x-layouts.page>
