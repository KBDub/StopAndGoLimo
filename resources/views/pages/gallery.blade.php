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
        headingBold="Fleet and Service Gallery"
        :headingTwoLines="false"
        subtitle="See every vehicle we offer, inside and out"
        description="Stop & Go Airport Shuttle Service, Inc. is proud to operate one of the most well-maintained private transportation fleets serving the Chicago metropolitan area. Our gallery gives you an inside look at every vehicle we offer: sleek executive sedans and full-size luxury SUVs for private airport transfers and corporate travel, Mercedes Sprinter vans for wedding guests and corporate teams, stretch limousines for proms and quinceañeras, and party buses and full-size coach buses for large group celebrations. See the plush leather interiors, ambient lighting, and spacious cabins that our clients experience on every ride. Whether a corporate executive heading quietly to O'Hare, a wedding party making a glamorous entrance, a bachelorette group ready for a night in Chicago, or a family setting out on vacation, every client sees the same level of care and attention to detail in our vehicles. Every car and bus in our gallery is inspected and detailed before every trip. Our uniformed chauffeurs take pride in presenting a vehicle that reflects the quality of our service. Browse our fleet and find the right match for your next occasion."
        buttonText="Book a Ride"
        buttonHref="/contact"
        image="/images/sections/gallery-hero.jpg"
        imagePosition="center center"
    />
</x-layouts.page>
