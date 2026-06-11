@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Party Bus Rental — Chicago, IL",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": { "@type": "City", "name": "Chicago", "addressRegion": "IL", "addressCountry": "US" },
    "description": "Luxury party bus and limo rental serving Chicago and the surrounding suburbs. Perfect for weddings, proms, birthdays, and every celebration. Call (815) 585-6922."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",                    "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "Services",                "item": "https://www.newlenoxlimoservice.com/our-services" },
        { "@type": "ListItem", "position": 3, "name": "Party Bus Chicago",       "item": "https://www.newlenoxlimoservice.com/party-bus-rental-chicago" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Party Bus Rental Chicago, IL | Stop and Go Limo"
    metaDescription="Luxury party bus and limo rental serving Chicago and the surrounding suburbs. Perfect for weddings, proms, birthdays, and every celebration. Call (815) 585-6922."
    currentPage="services"
    ogImage="/images/heroes/hero-party-bus-chicago.webp"
    ogImageAlt="Party bus rental serving Chicago, Illinois"
>
    <x-sections.category-hero
        heading="Reliable & Stylish"
        headingBold="Party Bus and Limo Transportation"
        description="Stop & Go delivers luxury party bus experiences for weddings, proms, birthdays, and every celebration."
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/heroes/hero-party-bus-chicago.webp"
        imagePosition="center center"
    />

</x-layouts.page>
