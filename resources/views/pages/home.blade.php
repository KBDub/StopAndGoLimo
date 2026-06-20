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
    title="Luxury Limo Service in Joliet, IL | Stop & Go Airport Shuttle Service, Inc."
    metaDescription=""
    currentPage="home"
    ogImage=""
    ogImageAlt="Luxury Limo Service in Joliet, IL serving Chicagoland"
>
    <x-sections.category-hero
        heading="Elevate Your Travel Experience"
        headingBold="With Luxury and Comfort"
        subtitle="Discover the joy of seamless journeys"
        description="Stop & Go Airport Shuttle Service, Inc. has served the greater Chicago area since 2009. We are headquartered in New Lenox and Naperville, giving us fast coverage across all of Chicagoland, from Joliet and Plainfield south to Aurora and Elgin in the west, north through Arlington Heights and Waukegan, and into the heart of downtown Chicago. Whether you are a corporate executive catching an early flight out of O'Hare, a family heading to Midway, a wedding party in need of a stretch limousine, or a group ready to celebrate a quinceañera, birthday, bachelorette party, or prom night, we have the right vehicle and the right chauffeur for you. Our fleet includes executive sedans, luxury SUVs, Mercedes Sprinter vans, stretch limousines, party buses, and full-size coach buses. Every driver is background-checked, uniformed, and trained to deliver a seamless experience. We monitor every flight in real time, so if your departure or arrival changes, your driver already knows. Our pricing is always flat-rate, with no surge fees and no surprises. Whatever your occasion, we are ready around the clock, 365 days a year."
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
