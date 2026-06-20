@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "Stop and Go Airport Shuttle Service Inc",
    "url": "https://www.newlenoxlimoservice.com/service-areas",
    "telephone": "(815) 585-6922",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "400 E Lincoln Hwy Suite 101A",
        "addressLocality": "New Lenox",
        "addressRegion": "IL",
        "postalCode": "60451",
        "addressCountry": "US"
    },
    "areaServed": [
        { "@type": "City", "name": "New Lenox",   "addressRegion": "IL", "addressCountry": "US" },
        { "@type": "City", "name": "Plainfield",  "addressRegion": "IL", "addressCountry": "US" },
        { "@type": "City", "name": "Joliet",      "addressRegion": "IL", "addressCountry": "US" },
        { "@type": "City", "name": "Naperville",  "addressRegion": "IL", "addressCountry": "US" },
        { "@type": "City", "name": "Aurora",      "addressRegion": "IL", "addressCountry": "US" },
        { "@type": "City", "name": "Bolingbrook", "addressRegion": "IL", "addressCountry": "US" },
        { "@type": "City", "name": "Lockport",    "addressRegion": "IL", "addressCountry": "US" },
        { "@type": "City", "name": "Frankfort",   "addressRegion": "IL", "addressCountry": "US" },
        { "@type": "City", "name": "Mokena",      "addressRegion": "IL", "addressCountry": "US" },
        { "@type": "City", "name": "Orland Park", "addressRegion": "IL", "addressCountry": "US" }
    ],
    "description": "Stop and Go Airport Shuttle Service Inc provides 24/7 luxury limo and airport shuttle service across New Lenox, Plainfield, Joliet, Naperville, Aurora, and the greater Southwest suburbs of Chicago, Illinois."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Service Areas | Stop and Go Limo — Southwest Chicago Suburbs, IL",
    "url": "https://www.newlenoxlimoservice.com/service-areas",
    "description": "24/7 luxury limo and airport shuttle service in New Lenox, Plainfield, Joliet, Naperville, Aurora, and surrounding Southwest suburbs. Call (815) 585-6922."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",          "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "Service Areas", "item": "https://www.newlenoxlimoservice.com/service-areas" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Service Areas | Stop and Go Limo — Southwest Chicago Suburbs, IL"
    metaDescription="24/7 luxury limo and airport shuttle service in New Lenox, Plainfield, Joliet, Naperville, Aurora, and surrounding Southwest suburbs. Safe, comfortable, on-time. Call (815) 585-6922."
    currentPage="service-areas"
    ogImage="/images/heroes/hero-service-areas.jpg"
    ogImageAlt="Luxury limousine service across the Southwest suburbs of Chicago, Illinois"
>
    <x-sections.category-hero
        heading="Our Service Areas"
        headingBold="Across Chicagoland and Illinois"
        :headingTwoLines="false"
        subtitle="Private chauffeured transportation, wherever you need us"
        description="Stop & Go Airport Shuttle Service, Inc. covers all of Chicagoland and Illinois. Our dual hubs in New Lenox and Naperville give us fast response times across the entire Chicago metropolitan area. We serve southwest suburban communities including Joliet, Plainfield, Frankfort, Mokena, Lockport, Homer Glen, and Orland Park. We also serve the western suburbs including Aurora, Elgin, Schaumburg, Bolingbrook, Downers Grove, and Elmhurst. Our coverage extends north through Des Plaines, Arlington Heights, Palatine, and Waukegan, and into all Chicago neighborhoods. No matter which direction your trip takes you, we are ready. Whether you need a private airport transfer to O'Hare (ORD) or Midway (MDW), a stretch limousine for a wedding, a party bus for a birthday or bachelorette group, a corporate Sprinter for a business roadshow, or a coach bus for a large group event, we operate wherever our clients need us. We also serve private aviation terminals at Chicago Executive Airport and other regional FBOs. Distance is never a barrier."
        buttonText="Book a Ride"
        buttonHref="/contact"
        image="/images/heroes/hero-service-areas.jpg"
        imagePosition="center center"
    />

    <x-sections.info-strip
        headingPrefix="Covering the"
        headingBold="Southwest Suburbs"
        heading=""
        body="We serve New Lenox, Naperville, Aurora, Joliet, and more than 20 communities across the southwest suburbs of Chicago. Whether you need a ride to O'Hare, Midway, or a local event, our drivers are ready around the clock."
    />

    <x-sections.travel-in-style
        heading="Every Area"
        headingBold="Covered"
        subtitle="Driven by certified drivers you can trust"
        body="Stop & Go serves the greater Chicago and Chicagoland area with professional 24/7 airport shuttle service to O'Hare and Midway, luxury limousine service for weddings and special events, party bus rentals for group celebrations, and corporate car service for business travel. From downtown Chicago to the Southwest suburbs, including New Lenox, Naperville, Joliet, and Hinsdale, our certified drivers know every route and are ready around the clock."
        image="/images/sections/limousine-professional.jpg"
        imageAlt="Professional chauffeur providing luxury transportation across Chicago and the Southwest suburbs"
        imagePosition="right"
    />

    <x-sections.areas-we-serve
        heading="Areas We"
        headingBold="Proudly Serve"
        background="light"
    />

    <x-sections.free-instant-quote
        rightVariant="description"
        :descImageTop="true"
        descImage="/images/sections/chicago-skyline.jpg"
        descImageAlt="Stop and Go Airport Shuttle Service covering the Southwest suburbs of Chicago"
        descHeading="Why Choose Us?"
        descSubheading="Complete Southwest Suburbs Transportation"
        descBody="As the Southwest suburbs' locally-based transportation provider, Stop & Go offers complete luxury transportation services across 20+ communities:"
        :descBullets="[
            'Airport shuttle to O\'Hare and Midway, available 24/7',
            'Limousine service for weddings, events, and special occasions',
            'Party bus rental for celebrations and group travel',
            'Corporate car service for business meetings and executive travel',
            'Town car and chauffeur service for premium point-to-point rides',
        ]"
        descClosing="Serving New Lenox, Plainfield, Naperville, Joliet, Aurora, Romeoville, and every community in between, our drivers know every route and are ready around the clock."
        formAction="/get-a-quote"
        submitLabel="Send Message"
    />

    {{-- standard sections for all --}}
    <x-sections.faq />

    <x-sections.share-your-experience />

    <x-sections.map-contact-section />

    <x-ui.banner-thin-cloud />

    <x-sections.base-footer />

</x-layouts.page>
