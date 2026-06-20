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
        heading="Our"
        headingBold="Professional Chauffeurs"
        :headingTwoLines="false"
        subtitle="Vetted, uniformed, and trained for every occasion"
        description="At Stop & Go Airport Shuttle Service, Inc., our chauffeurs are the foundation of everything we do. Every driver on our team is background-checked, IDOT-compliant, and professionally trained before their first trip. We require clean driving records, safety certifications, and ongoing service standards that reflect the level of care our clients expect. Our chauffeurs arrive in uniform, on time, and ready to assist with luggage, open doors, and make your experience seamless from start to finish. We serve corporate executives heading to O'Hare or Midway, wedding parties arriving in style, prom groups celebrating a milestone, bachelorette and birthday guests ready to enjoy the night, quinceañera courts making a grand entrance, and families who simply want a safe, comfortable ride. Our service area covers all of Chicagoland, from the southwest suburbs through the western and north corridors, and into the city of Chicago. We monitor all flights in real time, so our drivers are always prepared for early arrivals or late departures. When you ride with us, you are in the hands of a professional who takes pride in getting you there safely, on time, and in comfort."
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/sections/chauffeur-hero.jpg"
        imagePosition="center center"
    />

    <x-sections.free-instant-quote
        heading="Your"
        headingBold="Personal Chauffeur"
        headingTail="Awaits"
        body="Our chauffeurs are licensed, insured, and background-checked for your peace of mind. From business meetings to special events, we deliver a smooth, on-time experience every time. Sit back, relax, and let us handle the drive while you focus on what matters most."
        image="/images/sections/chauffeur-suit-pickup.jpg"
        imageAlt="Stop and Go professional chauffeur in suit ready for client pickup"
        imageAspect="16/9"
        rightVariant="image"
    />

    <x-sections.info-strip
        headingBold="Safety Measures"
        heading="and Regulations"
        body="We want our clients to have the best time no matter what occasion they celebrate. Stop & Go Airport Shuttle Service Inc. provides clean and safe transportation services so everyone can enjoy the experience. We prioritize your enjoyment by ensuring that your celebrations are safe and fun, adhering to all safety regulations while providing a clean environment so you can focus on having a fantastic time. Our vehicles are well-maintained and always road-ready, and we always abide by laws and regulations."
    />

    <x-sections.company-highlight
        heading="Our"
        headingBold="Commitment to You"
        :items="[
            ['icon' => 'car',      'heading' => 'Pristine Cars',        'body' => 'Meticulously maintained and clean for a luxurious ride.'],
            ['icon' => 'user-tie', 'heading' => 'Professional Drivers', 'body' => 'Skilled and respectful, ensuring a great experience.'],
        ]"
    />

</x-layouts.page>
