@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Prom Party Bus Rental — Illinois",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": { "@type": "State", "name": "Illinois" },
    "description": "Safe, stylish prom night party bus transportation in Illinois. Book your prom party bus from New Lenox, Plainfield, and the Southwest suburbs."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",           "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "Services",       "item": "https://www.newlenoxlimoservice.com/our-services" },
        { "@type": "ListItem", "position": 3, "name": "Prom Party Bus", "item": "https://www.newlenoxlimoservice.com/prom-party-bus-rental-illinois" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Prom Party Bus"
    metaDescription="Safe, stylish prom night party bus service across Illinois and Chicagoland. Parents trust us, students love us. Call (815) 585-6922."
    currentPage="services"
    ogImage="/images/heroes/hero-prom-party-bus-rental-illinois.jpg"
    ogImageAlt="Prom party bus rental in Illinois"
>
    <x-sections.category-hero
        heading="Prom Party Bus"
        headingBold="Service Throughout Illinois"
        :headingTwoLines="false"
        subtitle="Safe, stylish, and parent-approved prom transportation"
        description="Stop & Go Airport Shuttle Service, Inc. makes prom night safe and unforgettable for students throughout Illinois. Our buses pick up groups from home, take everyone to dinner and the venue, and bring them safely back, with a professional, background-checked chauffeur behind the wheel. Premium LED lighting, great sound, and comfortable seating for any group size. We serve high schools throughout Chicagoland, including Lincoln-Way District, Plainfield North and South, Naperville North and Central, Schaumburg, Arlington Heights, and many more. Flat-rate, all-inclusive pricing. Prom buses book fast from March through June. Reserve early."
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/heroes/hero-prom-party-bus-rental-illinois.jpg"
        imagePosition="center center"
    />

    <x-sections.info-strip
        headingPrefix="Luxury Prom Party Bus"
        headingBold="Coverage Across Illinois"
        body="Stop & Go offers luxury prom party bus rentals from Romeoville, Naperville, Joliet, Plainfield, New Lenox, and surrounding suburbs to venues across Illinois. Professional chauffeurs, modern sound systems, and customizable lighting ensure a safe, stylish, and unforgettable prom experience for students and peace of mind for parents."
    />

    <x-sections.three-steps :inverted="true" />

    <x-sections.free-instant-quote
        heading="Book Your"
        headingBold="Prom Party Bus"
        headingTail=""
        rightVariant="description"
        :descImageTop="true"
        descImage="/images/sections/prom-night.jpg"
        descImageAlt="Students celebrating on a prom night party bus — Stop and Go Limo Illinois"
        descHeading="Why Choose Us?"
        descSubheading="Complete Transportation Services"
        descBody="As a trusted provider of prom transportation, Stop and Go delivers a high-end prom party bus experience throughout Illinois and the surrounding suburbs:"
        :descBullets="[
            'Party bus rentals for proms, birthdays, school events, and nights out',
            'Limousine service for proms, formal events, and special occasions',
            'Group transportation for school functions and private celebrations',
            'Elegant vehicles for prom night and milestone events',
            'Custom packages for concerts, sporting events, and private parties',
        ]"
        descClosing="Our professional drivers know Naperville, Aurora, Joliet, Plainfield, New Lenox, and surrounding areas, ensuring safe, reliable, and punctual prom party bus experiences for every student."
        formAction="/get-a-quote"
        submitLabel="Send Message"
    />

</x-layouts.page>
