@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Bookings and Reservations | Stop and Go Limo — New Lenox, IL",
    "url": "https://www.newlenoxlimoservice.com/bookings-reservations",
    "description": "Reserve your airport shuttle or limousine today. Available 24/7, serving New Lenox, Plainfield, and the Southwest suburbs. Call (815) 585-6922."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",    "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "Booking", "item": "https://www.newlenoxlimoservice.com/bookings-reservations" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Bookings and Reservations | Stop and Go Limo — New Lenox, IL"
    metaDescription="Reserve your airport shuttle or limousine today. Available 24/7, serving New Lenox, Plainfield, and the Southwest suburbs. Call (815) 585-6922."
    currentPage="booking"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Book a luxury limo or airport shuttle with Stop and Go Airport Shuttle Service Inc."
>
    <x-sections.category-hero
        heading="Book"
        headingBold="Your Ride"
        :headingTwoLines="false"
        subtitle="Reserve your private car or bus in minutes"
        description="Booking with Stop & Go Airport Shuttle Service, Inc. is straightforward and takes just a few minutes. Whether you are reserving an airport transfer to O'Hare or Midway, securing a stretch limousine for your wedding day, booking a party bus for a bachelorette trip or quinceañera celebration, or arranging corporate car service for an upcoming business trip, our reservation system confirms everything quickly and accurately. We recommend booking at least 24 to 48 hours in advance for airport runs, and 2 to 4 weeks ahead for weddings, proms, and large group events. We do our best to accommodate last-minute requests as well. Once your reservation is confirmed, you will receive your driver's name, vehicle details, and pickup time. For airport pickups, we monitor your flight in real time and adjust if anything changes. No need to worry on your end. We handle it. We serve clients throughout all of Chicagoland, including the southwest, south, west, north, and northwest suburbs, and every neighborhood in the city of Chicago. For questions before you book, call us any time of day or night. We are always available."
        buttonText="Book a ride"
        buttonHref="/contact"
        image="/images/heroes/hero-home.jpg"
        imagePosition="center center"
    />

    <x-sections.three-steps />

    <x-sections.free-instant-quote
        :showInfoBox="true"
        image="/images/sections/vincent-in-limo.jpg"
        imageAlt="Vincent Rover, founder of Stop & Go Airport Shuttle Service Inc., in the driver seat"
        imageAspect="4/3"
        imageObjectPosition="top"
        heading=""
        body=""
    />

    <x-sections.areas-we-serve
        heading="Your"
        headingBold="Trusted Local Partner"
        background="dark"
    />

    <x-sections.four-box-info />

    <x-sections.faq />

    <x-sections.share-your-experience 
        :showSingleButton="true"
        singleButtonText="Leave a review"
        singleButtonHref="#"
    />

    <x-sections.map-contact-section />

    <x-ui.banner-thin-cloud />

    <x-sections.base-footer />    
</x-layouts.page>
