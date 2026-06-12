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

    <x-sections.info-strip
        headingPrefix="Travel in"
        headingBold="Style"
        body="At Stop & Go Airport Shuttle Service Inc., we understand that celebrations are meant to be memorable and fun. That is why we offer premier party bus rental services in Plainfield, IL, designed to elevate your event to the next level of enjoyment and luxury. With our years of experience in providing high-end transportation solutions, you can trust us to deliver an unparalleled travel experience for any occasion."
    />

    <x-sections.free-instant-quote
        defaultVehicle="Chartered Bus"
        formAction="/get-a-quote"
        submitLabel="Send Message"
        image="/images/heroes/hero-new-bus-rental-fiq.jpg"
        imageAlt="Luxury bus rental in Plainfield and New Lenox, Illinois"
        imageAspect="4/3"
        heading="Book Your New Bus"
        headingBold="Rental Today"
        body="Stop & Go Airport Shuttle Service offers late-model buses for groups of all sizes in Plainfield, New Lenox, and the southwest suburbs of Chicago. Whether you are planning a corporate outing, a school trip, or a special celebration, our modern fleet delivers comfort, reliability, and style. Book early to secure your preferred date and enjoy a stress-free group travel experience with a professional chauffeur from start to finish."
    />

</x-layouts.page>
