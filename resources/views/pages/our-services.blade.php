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
    title="Our Services | Stop and Go Limo — Plainfield and New Lenox, IL"
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
        description="At Stop & Go Airport Shuttle Service, Inc., we offer a full range of private transportation services for every occasion throughout Chicagoland and all of Illinois. Need a smooth, on-time ride to O'Hare or Midway? We provide flat-rate, door-to-door service with real-time flight tracking. Planning a wedding and need a stretch limousine for the bridal party or a Sprinter van for guests? We handle that. Looking for a party bus for a bachelorette party, a quinceañera, a birthday, a prom group, or a night out in Chicago? We have the right bus for your crew. Corporate executives can count on us for private car service, hourly charter, and multi-stop roadshows throughout the Chicago metropolitan area, from the Loop to the western tech corridor along I-88, to the north shore, and all points between. Sports fans travel with us to Soldier Field, the United Center, and beyond. We also provide full-size coach buses for large group events, school outings, and corporate gatherings. Whatever brings your group together, we provide the professional chauffeured transportation to get you there safely and in style."
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
