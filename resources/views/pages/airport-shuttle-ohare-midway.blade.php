@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Airport Shuttle — O'Hare and Midway Transfers",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": { "@type": "State", "name": "Illinois" },
    "description": "24/7 airport shuttle and limousine service to O'Hare International and Midway Airport from New Lenox, Plainfield, and the Southwest suburbs."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",           "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "Services",       "item": "https://www.newlenoxlimoservice.com/our-services" },
        { "@type": "ListItem", "position": 3, "name": "Airport Shuttle","item": "https://www.newlenoxlimoservice.com/airport-shuttle-ohare-midway" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Airport Shuttle — O'Hare and Midway | Stop and Go Limo"
    metaDescription="24/7 airport shuttle and limousine service to O'Hare and Midway from New Lenox, Plainfield, and the Southwest suburbs. Flat rates, no surprises. Call (815) 585-6922."
    currentPage="services"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Airport shuttle service to O'Hare and Midway from New Lenox, Illinois"
>
    <x-sections.category-hero
        heading="24/7 Airport Shuttle Service"
        headingBold="New Lenox & Naperville"
        subtitle="Reliable Transportation for Every Flight"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/heroes/airport-ohare-midway.jpg"
        imagePosition="center center"
    />

    <x-sections.info-strip
        headingPrefix="Enjoy Your Trip With Us! Experience a "
        headingBold="24/7 Service You Can Trust"
        heading=""
        body="Stop & Go offers 24/7 airport shuttle service from New Lenox, Plainfield, Naperville, Aurora, Joliet, and Chicago suburbs to O'Hare and Midway. Reliable, door-to-door service with professional drivers, flight monitoring, and luggage assistance ensures stress-free travel for individuals, families, and groups."
    />

    <x-sections.free-instant-quote
        defaultVehicle="Airport Transportation"
        formAction="/get-a-quote"
        submitLabel="Send Message"
        image="/images/sections/airport-pickup.jpg"
        imageAlt="Professional limousine parked beside a private jet on the airport tarmac"
        imageAspect="16/9"
        heading="Arrive with Ease, Depart with"
        headingBold="Peace"
        body="Stop & Go provides premier airport shuttle service throughout the Chicago suburbs. From New Lenox and Plainfield to Naperville, Aurora, and Joliet, our professional drivers monitor your flight in real time, assist with luggage, and deliver you to the terminal with time to spare on every single trip."
    />

    <x-sections.points-of-interest
        heading="Our Commitment to"
        headingBold="Every Traveler"
        :points="[
            ['name' => 'Guaranteed On-Time Airport Pickup', 'href' => '#'],
            ['name' => 'Dependable and Punctual',           'href' => '#'],
            ['name' => 'Safety and Professionalism',        'href' => '#'],
            ['name' => 'Eco-Friendly and Community Minded', 'href' => '#'],
            ['name' => 'VIP Comfort Tailored to You',       'href' => '#'],
        ]"
    />

</x-layouts.page>
