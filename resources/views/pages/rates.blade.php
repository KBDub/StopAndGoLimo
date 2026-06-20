@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Rates | Stop and Go Limo — New Lenox, IL",
    "url": "https://www.newlenoxlimoservice.com/rates",
    "description": "Transparent flat-rate limo and shuttle pricing. No surprises. Serving New Lenox, Plainfield, and the Southwest suburbs. Call (815) 585-6922."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",  "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "Rates", "item": "https://www.newlenoxlimoservice.com/rates" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Rates | Stop and Go Limo — New Lenox, IL"
    metaDescription="Transparent flat-rate limo and shuttle pricing with no surprises. Serving New Lenox, Plainfield, and the Southwest suburbs. Call (815) 585-6922."
    currentPage="rates"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Luxury limousine rates at Stop and Go Airport Shuttle Service Inc."
>
    <x-sections.category-hero
        heading="Our Rates and"
        headingBold="Flat-Rate Pricing"
        :headingTwoLines="false"
        subtitle="All-inclusive pricing with no hidden fees, ever"
        description="At Stop & Go Airport Shuttle Service, Inc., we believe you should know exactly what your ride costs before you book. No surge fees, no hidden charges, no surprises when the trip ends. Our pricing is flat-rate for all airport transfers to O'Hare and Midway from communities throughout Chicagoland, including the southwest suburbs, western suburbs, north suburbs, and the city of Chicago. We offer competitive rates across our full fleet: executive sedans, luxury SUVs, Mercedes Sprinter vans, stretch limousines, party buses, and coach buses. Wedding couples, corporate executives, prom groups, bachelorette parties, quinceañera courts, birthday groups, sports fans, and concert-goers all receive the same transparent, all-inclusive pricing. Our rates cover your chauffeur, fuel, and standard tolls. Gratuity is always straightforward. We never charge extra when your flight is delayed, because we monitor every flight in real time and adjust automatically. Request a free quote online or call us any time for a custom rate on your specific trip."
        buttonText="Book a Ride"
        buttonHref="/contact"
        image="/images/sections/rates-hero.jpg"
        imagePosition="center center"
    />

    <x-sections.info-strip
        headingBold="Glide to Your Destination"
        heading="With Prestige and Comfort"
        body="We are dedicated to putting the customer first. Our goal is to deliver exceptional service that exceeds your expectations. Our team goes the extra mile to ensure you receive the quality experience you deserve."
    />

    <x-sections.rates-table />

</x-layouts.page>
