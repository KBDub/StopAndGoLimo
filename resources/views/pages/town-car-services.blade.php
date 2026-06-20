@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Town Car Services — New Lenox and Southwest Suburbs, IL",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": { "@type": "State", "name": "Illinois" },
    "description": "Premium sedan and town car service for any occasion in New Lenox, Plainfield, and the Southwest suburbs of Chicago. Call (815) 585-6922."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",             "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "Services",         "item": "https://www.newlenoxlimoservice.com/our-services" },
        { "@type": "ListItem", "position": 3, "name": "Town Car Services","item": "https://www.newlenoxlimoservice.com/town-car-services" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Town Car Services | Stop and Go Limo — New Lenox, IL"
    metaDescription="Premium sedan and town car service for any occasion in New Lenox, Plainfield, and the Southwest suburbs. Call (815) 585-6922."
    currentPage="services"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Town car service in New Lenox, Illinois"
>
    <x-sections.category-hero
        heading="Town Car"
        headingBold="Services"
        :headingTwoLines="false"
        subtitle="Premium sedan service for any occasion"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/sections/driver-classy.jpg"
        imagePosition="center center"
    />

    <x-sections.info-strip
        headingPrefix="More Than a Ride."
        headingBold="A Refined Journey"
        heading=""
        body="Our town car service offers an elegant blend of luxury, comfort, and professionalism for both personal and business travel. Slide into plush leather seats and enjoy climate-controlled interiors. Expect punctual, courteous chauffeurs who handle every detail, from luggage assistance to navigating traffic with local expertise."
    />

    <x-sections.free-instant-quote
        heading="Reserve Your"
        headingBold="Town Car"
        headingTail="Today"
        body="Whether you need a ride to the airport, a corporate transfer, or a comfortable trip across town, our town car service is ready when you are. Tell us your pickup location, date, and group size, and we will handle the rest with care and professionalism."
        image="/images/sections/elderly-relaxing-corporate.jpg"
        imageAlt="Passenger relaxing in a luxury town car — Stop and Go Airport Shuttle, New Lenox, Illinois"
        imageAspect="16/9"
        imageObjectPosition="center"
        formAction="/get-a-quote"
        submitLabel="Send Message"
        defaultVehicle="Limousine Service"
        rightVariant="image"
    />

    <x-sections.party-limo-image
        heading="Arrive in Comfort,"
        headingBold="Every Time"
        headingTail=""
        body="Our town cars make a statement the moment they pull up. Clean, polished, and driven by a professional chauffeur, every arrival is smooth and on time. From airport pickups to corporate drop-offs, we take the stress out of getting there so you can focus on what matters."
        image="/images/sections/limousine-arrival.jpg"
        imageAlt="Luxury limousine arriving for a client pickup — Stop and Go Airport Shuttle, New Lenox, Illinois"
        imageAspect="16/9"
        imageObjectPosition="center"
    />
</x-layouts.page>
