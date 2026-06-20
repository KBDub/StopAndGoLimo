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
    title="Get a Quote | Stop and Go Limo — New Lenox, IL"
    metaDescription="Get a free, instant quote for airport shuttle or limousine service in New Lenox, Plainfield, and the Southwest suburbs. Call (815) 585-6922."
    currentPage="contact"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Get a free limo quote from Stop and Go Airport Shuttle Service Inc."
>
    <x-sections.category-hero
        heading="Get"
        headingBold="a Quote"
        :headingTwoLines="false"
        subtitle="Fast, free quotes for any trip across the Southwest suburbs"
        buttonText="Call (815) 585-6922"
        buttonHref="tel:+18155856922"
        image="/images/heroes/hero-services.jpg"
        imagePosition="center center"
    />
</x-layouts.page>
