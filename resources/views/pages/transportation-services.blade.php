@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Transportation Services — New Lenox and Southwest Suburbs, IL",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": { "@type": "State", "name": "Illinois" },
    "description": "Point-to-point luxury transportation across the Southwest suburbs of Chicago. Serving New Lenox, Plainfield, Joliet, and beyond. Call (815) 585-6922."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",                   "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "Services",               "item": "https://www.newlenoxlimoservice.com/our-services" },
        { "@type": "ListItem", "position": 3, "name": "Transportation Services","item": "https://www.newlenoxlimoservice.com/transportation-services" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Transportation Services | Stop and Go Limo — New Lenox, IL"
    metaDescription="Point-to-point luxury transportation across the Southwest suburbs. Serving New Lenox, Plainfield, Joliet, and beyond. Call (815) 585-6922."
    currentPage="services"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Transportation services in New Lenox, Illinois"
>
    <x-sections.category-hero
        heading="Transportation"
        headingBold="Services"
        :headingTwoLines="false"
        subtitle="Point-to-point rides across the Southwest suburbs"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/sections/corporate-service.jpg"
        imagePosition="center center"
    />

    <x-sections.free-instant-quote
        heading="Book Your Next"
        headingBold="Transportation Ride"
        headingTail="With Us!"
        body="Getting from point A to point B should be simple, comfortable, and stress-free. Our transportation service covers airport pickups, corporate transfers, special events, and everyday rides across the Southwest suburbs. Tell us your details and we will have the right vehicle ready for you."
        image="/images/sections/limousine-couple.jpg"
        imageAlt="Couple enjoying a luxury limousine ride — Stop and Go Airport Shuttle, New Lenox, Illinois"
        imageAspect="16/9"
        imageObjectPosition="center"
        formAction="/get-a-quote"
        submitLabel="Send Message"
        rightVariant="image"
    />
</x-layouts.page>
