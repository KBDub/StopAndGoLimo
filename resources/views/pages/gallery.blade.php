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
    title="Fleet Gallery"
    metaDescription="Browse our luxury fleet of limousines, party buses, coach buses, and shuttle vehicles serving Chicagoland. Pristine vehicles for every occasion."
    currentPage="gallery"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Luxury fleet gallery at Stop and Go Airport Shuttle Service Inc."
>
    <x-sections.category-hero
        heading="Our"
        headingBold="Fleet and Service Gallery"
        :headingTwoLines="false"
        subtitle="See every vehicle we offer, inside and out"
        description="Stop & Go Airport Shuttle Service, Inc. operates one of the most well-maintained private transportation fleets in the Chicago metropolitan area. Browse executive sedans and full-size luxury SUVs for airport and corporate travel, Mercedes Sprinter vans for wedding guests and teams, stretch limousines for proms and quinceañeras, and party buses and coach buses for large group celebrations. Every vehicle in our gallery is inspected and detailed before every trip. Our uniformed chauffeurs take pride in presenting a vehicle that reflects the quality of our service. Browse our fleet and find the right match for your next occasion."
        buttonText="Book a Ride"
        buttonHref="https://book.mylimobiz.com/v4/(S(1oixqymtpiatq43mylq5sucd))/stopngo"
        image="/images/sections/gallery-hero.jpg"
        imagePosition="center center"
    />
</x-layouts.page>
