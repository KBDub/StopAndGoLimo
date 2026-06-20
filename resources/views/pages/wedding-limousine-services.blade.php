@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "Wedding Limousine Services — New Lenox and Southwest Suburbs, IL",
    "provider": { "@id": "https://www.newlenoxlimoservice.com" },
    "areaServed": { "@type": "State", "name": "Illinois" },
    "description": "Elegant wedding limousine service in New Lenox, Plainfield, and the Southwest suburbs. Make your special day unforgettable with a luxury limo."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",              "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "Services",          "item": "https://www.newlenoxlimoservice.com/our-services" },
        { "@type": "ListItem", "position": 3, "name": "Wedding Limousine", "item": "https://www.newlenoxlimoservice.com/wedding-limousine-services" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Wedding Limousine Services | Stop and Go Limo — New Lenox, IL"
    metaDescription="Elegant wedding limousine service in New Lenox, Plainfield, and the Southwest suburbs. Make your special day unforgettable. Call (815) 585-6922."
    currentPage="services"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Wedding limousine service in New Lenox, Illinois"
>
    <x-sections.category-hero
        heading="Picture Perfect Wedding Day Transport"
        headingBold=""
        :headingTwoLines="false"
        subtitle="Elegant Wedding Limo"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/sections/wedding-hero.jpg"
        imagePosition="center center"
    />

    <x-sections.info-strip
        headingPrefix="Your"
        headingBold="Dream Wedding Ride"
        heading="Starts Here"
        body="Our diverse fleet of luxury vehicles is dedicated to providing exceptional transportation solutions for your wedding day. Whether you're envisioning an intimate ride or a grand procession, we offer a range of options to suit every preference."
    />

    <x-sections.free-instant-quote
        heading="Your"
        headingBold="Private Sanctuary"
        headingTail=""
        body="Our limousines are designed to offer a serene and luxurious environment, perfect for your special day. With spacious leather seating, ambient lighting, and thoughtful amenities, each ride becomes a memorable part of your wedding experience."
        image="/images/sections/wedding-limo-fleet.jpg"
        imageAlt="Luxury wedding limousine interior with leather seating and ambient lighting"
        imageAspect="16/10"
        rightVariant="image"
    />

    <x-sections.banner-image
        headingPrefix="Celebrate in"
        headingBold="Style"
        body="Every detail of your ride is thoughtfully planned to ensure a smooth and enjoyable experience. From the moment you step into our limousines, our professional chauffeurs are dedicated to providing attentive service, ensuring timely arrivals, and accommodating your needs, allowing you to focus on celebrating your special day."
        image="/images/sections/wedding-couple.jpg"
        imageAlt="Couple after their wedding using Stop and Go Limo transportation"
        imageAspect="730/460"
    />

</x-layouts.page>
