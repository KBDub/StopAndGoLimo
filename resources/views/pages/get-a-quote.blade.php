@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "ContactPage",
    "name": "Get a Quote | Stop and Go Limo — New Lenox, IL",
    "url": "https://www.newlenoxlimoservice.com/get-a-quote",
    "description": "Get a free, instant quote for airport shuttle or limousine service in New Lenox, Plainfield, and the Southwest suburbs. Call (815) 585-6922."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",         "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "Get a Quote",  "item": "https://www.newlenoxlimoservice.com/get-a-quote" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Get a Quote"
    metaDescription="Get a free quote for airport shuttle or limousine service anywhere in Chicagoland. Flat rates, fast response, no hidden fees. Call (815) 585-6922."
    currentPage="contact"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Get a free limo quote from Stop and Go Airport Shuttle Service Inc."
>
    <x-sections.category-hero
        heading="Get"
        headingBold="a Free Quote"
        :headingTwoLines="false"
        subtitle="Fast answers for airport runs, events, and every occasion"
        description="Getting a quote from Stop & Go Airport Shuttle Service, Inc. is fast, easy, and completely free. Tell us your pickup location, destination, date, time, and group size. We will reply with a clear, all-inclusive flat-rate price. We quote every type of trip: airport transfers to O'Hare and Midway, corporate car service, wedding limousines, prom party buses, bachelorette transportation, quinceañera packages, sports shuttles, and concert buses. No hidden fees, no commitments. Fill out the form, call us, or send a message and we will get your rate to you quickly."
        buttonText="Call (815) 585-6922"
        buttonHref="tel:+18155856922"
        image="/images/heroes/hero-services.jpg"
        imagePosition="center center"
    />
</x-layouts.page>
