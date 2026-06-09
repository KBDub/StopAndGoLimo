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
        heading="Booking &"
        headingBold="Reservations"
        :headingTwoLines="false"
        subtitle="Reserve your"
        subtitleIn="trusted transportation service"
        description="Our booking and reservations, made simple. Our trusted transportation services are backed by a streamlined system that ensures quick and accurate confirmations. Whether you're scheduling in advance or need last-minute arrangements, we're committed to delivering a seamless and reliable experience."
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
