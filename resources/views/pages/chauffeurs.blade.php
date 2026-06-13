@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Professional Chauffeurs — New Lenox and Southwest Suburbs, IL",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": { "@type": "State", "name": "Illinois" },
    "description": "Licensed, insured, and background-checked professional chauffeurs serving New Lenox, Plainfield, and the Southwest suburbs. Call (815) 585-6922."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",        "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "Services",    "item": "https://www.newlenoxlimoservice.com/our-services" },
        { "@type": "ListItem", "position": 3, "name": "Chauffeurs",  "item": "https://www.newlenoxlimoservice.com/chauffeurs" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Professional Chauffeurs | Stop and Go Limo — New Lenox, IL"
    metaDescription="Licensed, insured, and background-checked professional chauffeurs serving New Lenox, Plainfield, and the Southwest suburbs. Call (815) 585-6922."
    currentPage="services"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Professional chauffeurs at Stop and Go Airport Shuttle Service Inc."
>
    <x-sections.category-hero
        heading="Professional Chauffeur Service in"
        headingBold="New Lenox &amp; Plainfield, Illinois"
        subtitle="Chauffeurs"
        description="Professional chauffeur services for any event or personal need, offering a luxurious and stress-free ride."
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/sections/chauffeur-hero.jpg"
        imagePosition="center center"
    />

    <x-sections.info-strip
        headingBold="Safety Measures"
        heading="and Regulations"
        body="We want our clients to have the best time no matter what occasion they celebrate. Stop &amp; Go Airport Shuttle Service Inc. provides clean and safe transportation services so everyone can enjoy the experience. We prioritize your enjoyment by ensuring that your celebrations are safe and fun, adhering to all safety regulations while providing a clean environment so you can focus on having a fantastic time. Our vehicles are well-maintained and always road-ready, and we always abide by laws and regulations."
    />

</x-layouts.page>
