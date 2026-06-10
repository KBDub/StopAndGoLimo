@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Party Bus Rental — Aurora, IL",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": { "@type": "City", "name": "Aurora", "addressRegion": "IL", "addressCountry": "US" },
    "description": "Fun, safe party bus rental in Aurora, Illinois. Perfect for birthdays, bachelorette parties, and group celebrations. Call (815) 585-6922."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",            "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "Services",        "item": "https://www.newlenoxlimoservice.com/our-services" },
        { "@type": "ListItem", "position": 3, "name": "Party Bus Aurora","item": "https://www.newlenoxlimoservice.com/party-bus-aurora" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Party Bus Rental Aurora, IL | Stop and Go Limo"
    metaDescription="Fun, safe party bus rental in Aurora, Illinois. Perfect for birthdays, bachelorette parties, and group celebrations. Call (815) 585-6922."
    currentPage="services"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Party bus rental in Aurora, Illinois"
>
    <x-sections.category-hero
        heading=""
        headingBold="Party Bus Aurora"
        subtitle="your local Party Buses for every occasion"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/heroes/hero-party-bus-aurora.png"
        imagePosition="center center"
    />
</x-layouts.page>
