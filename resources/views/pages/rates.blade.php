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
    title="Rates &amp; Pricing"
    metaDescription="Clear, flat-rate pricing for every trip, no surprises. Limo, shuttle, and party bus rates for Chicagoland. Call (815) 585-6922."
    currentPage="rates"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Luxury limousine rates at Stop and Go Airport Shuttle Service Inc."
>
    <x-sections.category-hero
        heading="Our Rates and"
        headingBold="Flat-Rate Pricing"
        :headingTwoLines="false"
        subtitle="All-inclusive pricing with no hidden fees, ever"
        description="At Stop & Go Airport Shuttle Service, Inc., you know exactly what your ride costs before you book. No surge fees, no hidden charges, no surprises at the end of the trip. Our flat-rate pricing covers airport transfers to O'Hare and Midway from anywhere in Chicagoland, plus weddings, proms, corporate charters, party buses, and coach bus events. Every rate includes your chauffeur, fuel, and standard tolls. We monitor every flight in real time and never charge extra for delays. Request a free quote online or call us any time for a custom rate."
        buttonText="Book a Ride"
        buttonHref="https://book.mylimobiz.com/v4/(S(1oixqymtpiatq43mylq5sucd))/stopngo"
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
