@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "AboutPage",
    "name": "About Us | Stop and Go Limo — New Lenox, IL",
    "url": "https://www.newlenoxlimoservice.com/about-us",
    "description": "Learn about Stop and Go Airport Shuttle Service Inc. Professional chauffeurs serving New Lenox, Plainfield, and the Southwest suburbs since 2009."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",     "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "About Us", "item": "https://www.newlenoxlimoservice.com/about-us" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="About Us | Stop and Go Limo — New Lenox, IL"
    metaDescription="Learn about Stop and Go Airport Shuttle Service Inc. Professional chauffeurs serving New Lenox, Plainfield, and the Southwest suburbs since 2009."
    currentPage="about"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Professional chauffeurs at Stop and Go Airport Shuttle Service Inc."
>
    <x-sections.category-hero
        heading="About"
        headingBold="Us"
        subtitle="Professional chauffeurs serving the Southwest suburbs since 2009"
        buttonText="Book a Ride"
        buttonHref="/contact"
        image="/images/heroes/hero-services.jpg"
        imagePosition="center center"
    />
</x-layouts.page>
