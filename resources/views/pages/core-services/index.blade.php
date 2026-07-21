@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": ["LocalBusiness", "LimousineService"],
    "@id": "https://newlenoxlimoservice.com/#business",
    "name": "Stop & Go Airport Shuttle Service, Inc.",
    "alternateName": "Stop & Go Limo",
    "url": "https://newlenoxlimoservice.com",
    "telephone": "",
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
    title="Core Service Pillars | Stop & Go Airport Shuttle Service, Inc."
    metaDescription="Eight professional transportation services under one roof. Airport shuttles, chauffeurs, limousines, bus charters, wedding transport, special events, and more. Chicagoland."
    currentPage="our-services"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Core transportation services from Stop & Go Airport Shuttle Service, Inc. in New Lenox Illinois"
>

    <x-sections.category-hero
        heading="Our Core"
        headingBold="Service Pillars"
        :headingTwoLines="false"
        subtitle="Eight professional services. One trusted local team."
        description="Stop & Go Airport Shuttle Service, Inc. has been serving Will County and Chicagoland from our New Lenox headquarters since 2015. Over more than a decade, we have grown our operation to cover eight distinct categories of professional chauffeured transportation, each one backed by the same commitment to reliability, flat-rate pricing, and background-checked professionals that built our reputation in the Southwest Suburbs. From a 4 a.m. airport run to O'Hare, to a 100-person wedding guest shuttle, to an executive convoy for a visiting board, to door-to-door transport for a parent heading to Silver Cross Hospital, to a group riding together to a sold-out Chicago concert with a return pickup locked at the same flat rate. We handle all of it. One company, one dispatch line open 24 hours a day, and one standard of service across every vehicle type and every occasion. Whether you are a corporate travel manager booking recurring rides for your executive team, a bride coordinating transportation for 200 wedding guests, a family sending a parent to Midway for the first time, or a group heading to a gala with no one willing to drive. This is the right place. Explore all eight of our core service categories below and find the right fit for your need."
        buttonText="Get a Free Quote"
        buttonHref="/get-a-quote"
        image="/images/heroes/hero-services.jpg"
        imagePosition="center center"
    />

    <x-sections.info-strip
        headingBold="Eight Services."
        heading="One Standard of Service."
        body="Every service on this page is backed by the same four guarantees: a flat rate that locks at booking with no surge pricing ever, a background-checked and uniformed chauffeur, a vehicle inspected and detailed before your pickup, and a dispatch team that answers 24 hours a day. We do not have a luxury tier and a budget tier. Every client, whether booking an airport sedan or a 50-passenger charter bus for a corporate event, gets the same preparation, the same professionalism, and the same commitment to being there on time. That consistency is why corporate accounts, wedding planners, and individual travelers across Chicagoland keep coming back."
    />

    <x-sections.core-services-pillar-grid />

    <x-sections.core-services-differentiator-band />

    <x-sections.our-story
        :entries="[
            [
                'title' => 'How We Started: Airport Transfers From Will County, 2015',
                'body'  => 'Stop &amp; Go Airport Shuttle Service, Inc. was founded in New Lenox on March 26, 2015, with a single mission: give Will County families and business travelers a reliable, professional alternative to leaving a car at the long-term lot. Our first bookings were airport transfers to O\'Hare and Midway from New Lenox, Frankfort, Mokena, and Joliet. We ran them on flat-rate pricing from day one, because we believed the traveler deserved to know the full cost before they confirmed. That commitment has not changed. Every service on this page still runs on the same principle.',
            ],
            [
                'title' => 'Building the Corporate Ground Account Program',
                'body'  => 'Within the first two years, law firms, financial firms, and manufacturing companies along the I-80 and I-88 corridors began booking recurring executive airport runs. They needed more than a car service. They needed a single vendor who showed up every time, invoiced consistently, and required no last-minute scrambling from their travel managers. We built a corporate account program around exactly that. Today, businesses across the I-88 Innovation Corridor in Oak Brook, Downers Grove, and Naperville use Stop &amp; Go Airport Shuttle Service, Inc. as their exclusive ground transportation vendor for O\'Hare and Midway transfers.',
            ],
            [
                'title' => 'Expanding Into Weddings, Limousines, and Special Events',
                'body'  => 'As our airport reputation grew, wedding planners and families began asking us to handle event transportation. We added stretch limousines, luxury SUVs, and coordinated multi-vehicle bookings for ceremonies, receptions, and bridal parties across Will County. Today our wedding service covers everything from the getaway car to the 200-person guest shuttle loop between the hotel, the ceremony, and the reception. We still run the same flat-rate model. One price, confirmed at booking, covering every vehicle in your wedding plan.',
            ],
            [
                'title' => 'Charter Buses, Transportation Escort, and Full-Coverage Service',
                'body'  => 'Clients who trusted us for airport transfers and weddings began asking for larger vehicles: charter buses for corporate team outings, convention shuttles, church group trips, and quinceañera courts. We added a charter bus fleet to meet the demand. Alongside it, we built out our transportation escort capability for multi-vehicle VIP convoys, dignitary arrivals, and large event coordination. From a single airport sedan to a 12-vehicle wedding fleet managed by one dispatcher, we now cover the full spectrum of ground transportation across Chicagoland.',
            ],
            [
                'title' => 'Eight Pillars Today, One Standard Across All of Them',
                'body'  => 'Stop &amp; Go Airport Shuttle Service, Inc. now operates across eight core service categories: airport shuttle, bus charter, chauffeur service, limousine service, transportation escort, transportation service, wedding service, and special events. Every single one of them runs on the same operating standard we set on day one in 2015. Background-checked chauffeur on every booking. Vehicle inspected and detailed before every pickup. Flat rate locked at confirmation. Dispatch staffed 24 hours a day, 365 days a year. The service area has grown to cover all of Chicagoland, but the standard has not changed from the first Will County airport run.',
            ],
        ]"
    />

    <x-sections.review-slider />

    <x-sections.faq preset="general" />

    <x-sections.share-your-experience />

    <x-sections.map-contact-section />

    <x-ui.banner-thin-cloud />

    <x-sections.base-footer />

</x-layouts.page>
