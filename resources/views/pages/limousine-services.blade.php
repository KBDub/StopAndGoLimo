@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Limousine Services — New Lenox and Southwest Suburbs, IL",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": { "@type": "State", "name": "Illinois" },
    "description": "Classic luxury limousine service for any occasion in New Lenox, Plainfield, and the Southwest suburbs of Chicago. Call (815) 585-6922."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",               "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "Services",           "item": "https://www.newlenoxlimoservice.com/our-services" },
        { "@type": "ListItem", "position": 3, "name": "Limousine Services", "item": "https://www.newlenoxlimoservice.com/limousine-services" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Limousine Services | Stop and Go Limo — New Lenox, IL"
    metaDescription="Classic luxury limousine service for any occasion in New Lenox, Plainfield, and the Southwest suburbs. Call (815) 585-6922."
    currentPage="services"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Luxury limousine services in New Lenox, Illinois"
>
    <x-sections.category-hero
        heading="The Essence of"
        headingBold="Luxury Transportation"
        subtitle="24/7 Limo, Airport Shuttle & Party Bus Services"
        description="Professional Chauffeur Service Throughout New Lenox, Plainfield & All Chicago Suburbs"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/sections/limousine-professional.jpg"
        imagePosition="center center"
    />

    <x-sections.travel-in-style
        heading="Experienced Chauffeurs"
        headingBold="Committed to Excellence"
        body="Our limousine service stands out through exceptional chauffeur service. Every driver is trained in safety and customer care. Our chauffeurs ensure timely arrivals, handle your luggage, open doors, and hold the highest standard of professionalism on every ride."
        image="/images/sections/limousine-services-tis.png"
        imageAlt="Professional Stop and Go limousine chauffeur ready to assist a client"
        :imageLeft="false"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
    />

    <x-sections.free-instant-quote
        heading="Book Your Next"
        headingBold="Limousine"
        headingTail="Today"
        body="Our professional chauffeurs are skilled and courteous, ensuring you enjoy a seamless and pleasant journey. Relax knowing your transportation is handled with care and precision, making every ride a truly exceptional experience."
        rightVariant="description"
        defaultVehicle="Limousine Service"
        descHeading="Why Choose Us?"
        descSubheading="Complete Transportation Services"
        descBody="As your trusted transportation provider for over 15 years, Stop & Go offers complete luxury transportation services:"
        :descBullets="[
            'Airport shuttle for timely arrivals and departures',
            'Limousine service for weddings, events, and special occasions',
            'Party bus rental for celebrations and group travel',
            'Corporate transportation for business meetings and executive travel',
            'Wedding vehicles to make your special day seamless',
        ]"
        descClosing="Our intimate knowledge of New Lenox, Plainfield, and all Chicago suburbs ensures efficient and reliable transportation throughout the region."
        descImage="/images/sections/limousine-interior.png"
        descImageAlt="Luxurious limousine interior with premium leather seating and ambient lighting"
    />

    <x-sections.city-info-grid
        :boxes="[
            [
                'heading' => 'Primary Cities',
                'items'   => [
                    'New Lenox limousine service',
                    'Plainfield luxury limo service',
                    'Naperville limousine services',
                    'Aurora limo service Chicago',
                    'Joliet limousine service',
                ],
            ],
            [
                'heading' => 'Nearby Suburbs',
                'items'   => [
                    'Bolingbrook luxury limousine',
                    'Romeoville limo service',
                    'Orland Park limousine services',
                    'Frankfort limo service',
                    'Mokena luxury limousine',
                ],
            ],
            [
                'heading' => 'Extended Suburbs',
                'items'   => [
                    'Tinley Park limo service',
                    'Homer Glen luxury limo',
                    'Lockport limousine services',
                    'Lemont limo service',
                    'Downers Grove luxury limo',
                ],
            ],
        ]"
    />

    <x-sections.image-slide-in
        headingPrefix="Professional Transportation"
        headingBold="Solutions"
        body="As New Lenox's trusted transportation provider for over 15 years, Stop & Go offers complete luxury transportation services, including airport shuttles, limousine service, party bus rentals, corporate transportation, and wedding vehicles. Our knowledge of New Lenox, Plainfield, and the entire Chicago Southwest suburbs ensures efficient and reliable service throughout the region, including direct trips to O'Hare and Midway airports."
        buttonText="Contact Us"
        buttonHref="/bookings-reservations"
        image="/images/sections/limousine-professional.jpg"
        imageAlt="Professional Stop and Go limousine ready for client service in New Lenox, Illinois"
        imageAspect="16/9"
    />

</x-layouts.page>
