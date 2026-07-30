@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Chicagoland Limousine & Airport Shuttle Service",
    "provider": { "@type": "LocalBusiness", "@id": "https://newlenoxlimoservice.com" },
    "areaServed": { "@type": "State", "name": "Illinois" },
    "description": "Premium limousine, airport shuttle, party bus, and charter transportation across Chicagoland. Flat-rate, 24/7/365, professional background-checked chauffeurs serving O'Hare, Midway, and all Chicagoland communities."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Stop & Go Airport Shuttle Service, Inc. | Chicagoland Limo & Airport Shuttle",
    "url": "https://newlenoxlimoservice.com",
    "description": "Premium limousine and airport shuttle across Chicagoland. Professional chauffeurs, flat rates, and 24/7 service to O'Hare and Midway."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://newlenoxlimoservice.com" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Chicagoland Limo"
    metaDescription="Premium limousine and airport shuttle across Chicagoland. Professional chauffeurs, flat rates, and 24/7 service to O'Hare and Midway."
    currentPage="home"
    ogImage=""
    ogImageAlt="Luxury Limo Service in Joliet, IL serving Chicagoland"
>
    <x-sections.category-hero
        heading="Elevate Your Travel Experience"
        headingBold="With Luxury and Comfort"
        subtitle="Discover the joy of seamless journeys"
        description="Stop & Go Airport Shuttle Service, Inc. has served Chicagoland since 2015. Headquartered in New Lenox and Naperville, we cover the entire metro area, from Joliet and Plainfield through Aurora and Elgin, north to Arlington Heights and Waukegan, and into downtown Chicago. Our fleet includes executive sedans, luxury SUVs, Mercedes Sprinter vans, stretch limousines, party buses, and coach buses. Every driver is background-checked, uniformed, and trained. We monitor every flight in real time. Flat-rate pricing, no surge fees, no surprises. Whatever your occasion, we are ready around the clock, 365 days a year."
        buttonText="Book a Ride"
        buttonHref="https://book.mylimobiz.com/v4/(S(1oixqymtpiatq43mylq5sucd))/stopngo"
        image="/images/gallery/fleet-mercedes-sprinter-black-chicago-skyline.jpg"
    />

    <x-sections.travel-in-style
        heading="Travel in"
        headingBold="Style"
        body="Stop & Go Airport Shuttle Service, Inc. is your premier provider of luxury limo service in New Lenox, IL. With years of experience and a commitment to quality, we offer reliable rides for any occasion, from elegant weddings to special events like proms."
        buttonText="About Us"
        buttonHref="/about-us"
        image="/images/sections/travel-in-style.jpg"
        imageAlt="Friends celebrating inside a Stop & Go Airport Shuttle Service, Inc."
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
