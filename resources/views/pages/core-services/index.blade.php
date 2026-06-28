@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": ["LocalBusiness", "LimousineService"],
    "@id": "https://newlenoxlimoservice.com/#business",
    "name": "Stop & Go Airport Shuttle Service Inc.",
    "alternateName": "Stop & Go Limo",
    "url": "https://newlenoxlimoservice.com",
    "telephone": "(815) 585-6922",
    "priceRange": "$$",
    "image": "https://newlenoxlimoservice.com/images/heroes/hero-services.jpg",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "400 E Lincoln Hwy Suite 101A",
        "addressLocality": "New Lenox",
        "addressRegion": "IL",
        "postalCode": "60451",
        "addressCountry": "US"
    },
    "geo": {
        "@type": "GeoCoordinates",
        "latitude": 41.5126,
        "longitude": -87.9756
    },
    "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
        "opens": "00:00",
        "closes": "23:59"
    },
    "hasMap": "https://maps.google.com/?cid=Stop+Go+Airport+Shuttle+Service",
    "areaServed": [
        { "@type": "City", "name": "New Lenox" },
        { "@type": "City", "name": "Joliet" },
        { "@type": "City", "name": "Naperville" },
        { "@type": "City", "name": "Frankfort" },
        { "@type": "City", "name": "Mokena" },
        { "@type": "City", "name": "Orland Park" },
        { "@type": "City", "name": "Tinley Park" },
        { "@type": "City", "name": "Plainfield" },
        { "@type": "City", "name": "Bolingbrook" },
        { "@type": "City", "name": "Romeoville" },
        { "@type": "AdministrativeArea", "name": "Will County" },
        { "@type": "State", "name": "Illinois" }
    ]
}
</script>
@endverbatim
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        { "@@type": "ListItem", "position": 1, "name": "Home",         "item": "https://newlenoxlimoservice.com" },
        { "@@type": "ListItem", "position": 2, "name": "Core Services","item": "{{ request()->url() }}" }
    ]
}
</script>
@endpush

<x-layouts.page
    title="Core Service Pillars | Stop & Go Airport Shuttle &amp; Limo"
    metaDescription="Seven professional transportation services under one roof. Airport shuttles, chauffeurs, limousines, bus charters, wedding transport, and more. Chicagoland. (815) 585-6922."
    currentPage="our-services"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Core transportation services from Stop and Go Airport Shuttle Service in New Lenox Illinois"
>

    <x-sections.category-hero
        heading="Our Core"
        headingBold="Service Pillars"
        :headingTwoLines="false"
        subtitle="Seven professional services. One trusted local team."
        description="Stop & Go Airport Shuttle Service, Inc. has been serving Will County and Chicagoland from our New Lenox headquarters since 2015. Over more than a decade, we have grown our operation to cover seven distinct categories of professional chauffeured transportation, each one backed by the same commitment to reliability, flat-rate pricing, and background-checked professionals that built our reputation in the Southwest Suburbs. From a 4 a.m. airport run to O'Hare, to a 100-person wedding guest shuttle, to an executive convoy for a visiting board, to door-to-door transport for a parent heading to Silver Cross Hospital. We handle all of it. One company, one dispatch line open 24 hours a day, and one standard of service across every vehicle type and every occasion. Whether you are a corporate travel manager booking recurring rides for your executive team, a bride coordinating transportation for 200 wedding guests, a family sending a parent to Midway for the first time, or a senior needing a professional driver for a medical appointment. This is the right place. Explore all seven of our core service categories below and find the right fit for your need."
        buttonText="Get a Free Quote"
        buttonHref="/get-a-quote"
        image="/images/heroes/hero-services.jpg"
        imagePosition="center center"
    />

    <x-sections.info-strip
        headingBold="Seven Services."
        heading="One Standard of Service."
        body="Every service on this page is backed by the same four guarantees: a flat rate that locks at booking with no surge pricing ever, a background-checked and uniformed chauffeur, a vehicle inspected and detailed before your pickup, and a dispatch team that answers 24 hours a day. We do not have a luxury tier and a budget tier. Every client, whether booking an airport sedan or a 50-passenger charter bus for a corporate event, gets the same preparation, the same professionalism, and the same commitment to being there on time. That consistency is why corporate accounts, wedding planners, and individual travelers across Chicagoland keep coming back."
    />

    <x-sections.core-services-pillar-grid />

    <x-sections.core-services-differentiator-band />

    <x-sections.our-story />

    <x-sections.review-slider />

    <x-sections.faq preset="general" />

    <x-sections.share-your-experience />

    <x-sections.map-contact-section />

    <x-ui.banner-thin-cloud />

    <x-sections.base-footer />

</x-layouts.page>
