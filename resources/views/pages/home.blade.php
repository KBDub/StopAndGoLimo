@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Luxury Limo Service in Joliet, IL serving Chicagoland",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": { "@type": "City", "name": "Joliet", "addressRegion": "IL", "addressCountry": "US" },
    "description": ""
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Luxury Limo Service in Joliet, IL | Stop & Go Airport Shuttle Service, Inc.",
    "url": "https://www.newlenoxlimoservice.com/",
    "description": ""
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.newlenoxlimoservice.com" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Chicagoland Limo"
    metaDescription=""
    currentPage="home"
    ogImage=""
    ogImageAlt="Luxury Limo Service in Joliet, IL serving Chicagoland"
>
    <x-sections.category-hero
        heading="Elevate Your Travel Experience"
        headingBold="With Luxury and Comfort"
        subtitle="Discover the joy of seamless journeys"
        description="Stop & Go Airport Shuttle Service, Inc. has served Chicagoland since 2009. Headquartered in New Lenox and Naperville, we cover the entire metro area, from Joliet and Plainfield through Aurora and Elgin, north to Arlington Heights and Waukegan, and into downtown Chicago. Our fleet includes executive sedans, luxury SUVs, Mercedes Sprinter vans, stretch limousines, party buses, and coach buses. Every driver is background-checked, uniformed, and trained. We monitor every flight in real time. Flat-rate pricing, no surge fees, no surprises. Whatever your occasion, we are ready around the clock, 365 days a year."
        buttonText="Book a Ride"
        buttonHref="/contact"
        image="/images/heroes/hero-home.jpg"
    />

    <x-sections.travel-in-style
        heading="Travel in"
        headingBold="Style"
        body="Stop & Go Airport Shuttle Service Inc. is your premier provider of luxury limo service in New Lenox, IL. With years of experience and a commitment to quality, we offer reliable rides for any occasion, from elegant weddings to special events like proms."
        buttonText="About Us"
        buttonHref="/about-us"
        image="/images/sections/travel-in-style.jpg"
        imageAlt="Friends celebrating inside a Stop and Go Limo"
        inverted=true
    />


    <x-sections.free-instant-quote />

    <x-sections.service-locations />

    <x-sections.areas-we-serve />

    <x-sections.why-choose-us />

    <x-sections.airport-shuttle-service />

    <x-sections.our-services />

    <x-sections.faq />

    <x-sections.share-your-experience />

    <x-sections.map-contact-section />

    <x-ui.banner-thin-cloud />

    <x-sections.base-footer />

</x-layouts.page>
