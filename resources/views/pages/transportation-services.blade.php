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
    title="Transportation"
    metaDescription="Reliable private transportation across all of Chicagoland. Airport runs, corporate trips, special events, and point-to-point rides. Call (815) 585-6922."
    currentPage="services"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Transportation services in New Lenox, Illinois"
>
    <x-sections.category-hero
        heading="Private Transportation Services"
        headingBold="Across Chicagoland and Illinois"
        :headingTwoLines="false"
        subtitle="Point-to-point and hourly rides for every occasion"
        description="Stop & Go Airport Shuttle Service, Inc. offers private transportation for every need: airport runs to O'Hare and Midway, hourly charters, event shuttles, and long-haul transfers across Illinois. We serve corporate travelers, families, couples, and event groups throughout all of Chicagoland. Our fleet covers every group size: executive sedans, luxury SUVs, Mercedes Sprinter vans, stretch limousines, party buses, and coach buses. Every ride includes a background-checked chauffeur, flat-rate pricing, and real-time communication. We are available 24 hours a day, every day of the year."
        buttonText="Book a Ride"
        buttonHref="https://book.mylimobiz.com/v4/(S(1oixqymtpiatq43mylq5sucd))/stopngo"
        image="/images/sections/corporate-service.jpg"
        imagePosition="center center"
    />

    <x-sections.free-instant-quote
        heading="Book Your Next"
        headingBold="Transportation Ride"
        headingTail=""
        rightVariant="description"
        :descImageTop="true"
        descImage="/images/sections/limousine-couple.jpg"
        descImageAlt="Couple enjoying a luxury limousine ride — Stop and Go Airport Shuttle, New Lenox, Illinois"
        descHeading="Why Choose Us?"
        descSubheading="Complete Transportation Services"
        descBody="As a trusted Chicagoland transportation provider, Stop & Go Airport Shuttle Service, Inc. delivers safe, comfortable, and professional rides for every occasion:"
        :descBullets="[
            'Airport transfers to O\'Hare and Midway, available 24/7',
            'Corporate car service for executive and business travel',
            'Limousine service for weddings, events, and special occasions',
            'Party bus rental for celebrations and group outings',
            'Town car and chauffeur service for premium point-to-point rides',
        ]"
        descClosing="Serving New Lenox, Plainfield, Naperville, Joliet, Aurora, Romeoville, and every community in between, our professional chauffeurs are ready around the clock."
        formAction="/get-a-quote"
        submitLabel="Send Message"
    />

    <x-sections.review-slider />

    <x-sections.faq />
    <x-sections.share-your-experience />
    <x-sections.map-contact-section />
    <x-ui.banner-thin-cloud />
    <x-sections.base-footer />

</x-layouts.page>
