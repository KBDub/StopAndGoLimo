@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Party Bus Rental — Chicago, IL",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": { "@type": "City", "name": "Chicago", "addressRegion": "IL", "addressCountry": "US" },
    "description": "Luxury party bus and limo rental serving Chicago and the surrounding suburbs. Perfect for weddings, proms, birthdays, and every celebration. Call (815) 585-6922."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",                    "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "Services",                "item": "https://www.newlenoxlimoservice.com/our-services" },
        { "@type": "ListItem", "position": 3, "name": "Party Bus Chicago",       "item": "https://www.newlenoxlimoservice.com/party-bus-rental-chicago" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Party Bus Rental Chicago, IL | Stop and Go Limo"
    metaDescription="Luxury party bus and limo rental serving Chicago and the surrounding suburbs. Perfect for weddings, proms, birthdays, and every celebration. Call (815) 585-6922."
    currentPage="services"
    ogImage="/images/heroes/hero-party-bus-chicago.webp"
    ogImageAlt="Party bus rental serving Chicago, Illinois"
>
    <x-sections.category-hero
        heading="Reliable & Stylish"
        headingBold="Party Bus and Limo Transportation"
        description="Stop & Go delivers luxury party bus experiences for weddings, proms, birthdays, and every celebration."
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/heroes/hero-party-bus-chicago.webp"
        imagePosition="center center"
    />

    <x-sections.travel-in-style
        heading="Every Occasion"
        headingBold="Covered"
        subtitle="Driven by certified drivers you can trust"
        body="Stop & Go delivers luxury party bus experiences for weddings, proms, birthdays, and every celebration."
        buttonText="About Us"
        buttonHref="/about-us"
        image="/images/heroes/hero-party-bus-interior.png"
        imageAlt="Vibrant party bus interior with luxury seating, colorful lights, and entertainment system"
        imagePosition="left"
        background="navy"
        slideIn="left"
    />

    <x-sections.info-strip
        headingPrefix=""
        headingBold="Reliable & Stylish"
        heading="Party Bus and Limo Transportation"
        body="Stop & Go Party Bus Rental Chicago offers luxury limo party buses for weddings, proms, birthdays, and nights out. With sound systems, LED lights, full bars, and seating for 10–40, we provide unforgettable transportation from Joliet, Plainfield, New Lenox, Naperville, Aurora, and Chicago suburbs."
    />

    <x-sections.three-steps 
        :whiteBackground="true"
    />

    
</x-layouts.page>
