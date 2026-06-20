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
        heading="Service"
        headingBold="Areas"
        :headingTwoLines="false"
        subtitle="24/7 luxury limo and airport shuttle service across the Southwest suburbs"
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

    <x-sections.areas-we-serve
        heading="Areas We"
        headingBold="Proudly Serve"
        background="light"
    />

    <x-sections.free-instant-quote
        heading="Get Your"
        headingBold="Free Instant Quote"
        headingTail=""
        body="Tell us your pickup location, destination, and date. We'll match you with the right vehicle and confirm your booking fast."
        image="/images/sections/chauffeurs.jpg"
        imageAlt="Professional chauffeur ready to serve, Stop and Go Airport Shuttle"
        imageAspect="4/3"
        imageObjectPosition="center top"
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
