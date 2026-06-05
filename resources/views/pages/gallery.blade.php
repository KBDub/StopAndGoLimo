@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Gallery | Stop and Go Limo — New Lenox, IL",
    "url": "https://www.newlenoxlimoservice.com/gallery",
    "description": "Browse our luxury fleet of limousines, party buses, and shuttle vehicles. Serving New Lenox, Plainfield, and the Southwest suburbs."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",    "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "Gallery", "item": "https://www.newlenoxlimoservice.com/gallery" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Gallery | Stop and Go Limo — New Lenox, IL"
    metaDescription="Browse our luxury fleet of limousines, party buses, and shuttle vehicles. Serving New Lenox, Plainfield, and the Southwest suburbs."
    currentPage="gallery"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Luxury fleet gallery at Stop and Go Airport Shuttle Service Inc."
>
    <x-sections.category-hero
        heading="Our"
        headingBold="Gallery"
        subtitle="A look at our luxury fleet and service"
        buttonText="Book a Ride"
        buttonHref="/contact"
        image="/images/heroes/hero-services.jpg"
        imagePosition="center center"
    />
</x-layouts.page>
