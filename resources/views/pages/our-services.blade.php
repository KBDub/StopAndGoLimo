@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Professional Luxury Transportation in Plainfield and New Lenox, Illinois",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": [
        { "@type": "City", "name": "Plainfield", "addressRegion": "IL", "addressCountry": "US" },
        { "@type": "City", "name": "New Lenox", "addressRegion": "IL", "addressCountry": "US" }
    ],
    "description": "Stop and Go Limo provides professional airport transfers, corporate travel, wedding limousines, and special event transportation to O'Hare and Midway. Serving Plainfield, New Lenox, and greater Chicagoland since 2009."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Our Services | Stop and Go Limo — Plainfield and New Lenox, IL",
    "url": "https://www.newlenoxlimoservice.com/our-services",
    "description": "Professional luxury transportation in Plainfield and New Lenox, Illinois. Airport transfers, corporate travel, weddings, and special events. Call (815) 585-6922."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "Our Services", "item": "https://www.newlenoxlimoservice.com/our-services" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Our Services"
    metaDescription="Professional luxury transportation in Plainfield and New Lenox, Illinois. Airport transfers to O'Hare and Midway, corporate travel, weddings, and special events. Serving since 2009. Call (815) 585-6922."
    currentPage="services"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Professional luxury limousine service in Plainfield and New Lenox, Illinois"
>
    <x-sections.category-hero
        heading="Our"
        headingBold="Chauffeured Transportation Services"
        :headingTwoLines="false"
        subtitle="Airport transfers, limousines, party buses, and more"
        description="Stop & Go Airport Shuttle Service, Inc. offers a full range of private transportation throughout Chicagoland. Flat-rate airport transfers to O'Hare and Midway with real-time flight tracking. Stretch limousines and Sprinter vans for weddings. Party buses for bachelorette parties, quinceañeras, birthdays, and prom groups. Executive car service and multi-stop charters for corporate travelers along the I-88 corridor, the Loop, and the north shore. Coach buses for large group events and corporate gatherings. Sports fan shuttles to Soldier Field and the United Center. Whatever the occasion, we get you there safely and in style."
        buttonText="Book a Ride"
        buttonHref="/contact"
        image="/images/heroes/hero-services.jpg"
        imagePosition="center 40%"
    />

    <x-sections.info-strip />

    <x-sections.our-key-offers />

    {{-- standard sections for all --}}
    <x-sections.faq />

    <x-sections.share-your-experience />

    <x-sections.map-contact-section />

    <x-ui.banner-thin-cloud />

    <x-sections.base-footer />

</x-layouts.page>
