@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Bookings and Reservations | Stop and Go Limo — New Lenox, IL",
    "url": "https://www.newlenoxlimoservice.com/bookings-reservations",
    "description": "Reserve your airport shuttle or limousine today. Available 24/7, serving New Lenox, Plainfield, and the Southwest suburbs. Call (815) 585-6922."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",    "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "Booking", "item": "https://www.newlenoxlimoservice.com/bookings-reservations" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Bookings and Reservations | Stop and Go Limo — New Lenox, IL"
    metaDescription="Reserve your airport shuttle or limousine today. Available 24/7, serving New Lenox, Plainfield, and the Southwest suburbs. Call (815) 585-6922."
    currentPage="booking"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Book a luxury limo or airport shuttle with Stop and Go Airport Shuttle Service Inc."
>
    <x-sections.category-hero
        heading="Book"
        headingBold="Your Ride"
        subtitle="Reserve your airport shuttle or limousine today, available 24/7"
        buttonText="Get a Quote"
        buttonHref="/get-a-quote"
        image="/images/heroes/hero-services.jpg"
        imagePosition="center center"
    />
</x-layouts.page>
