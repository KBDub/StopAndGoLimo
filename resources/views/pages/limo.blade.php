@push('structured-data')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Service",
    "name": "Professional Limo Service — Chicagoland",
    "provider": {
        "@@type": "LocalBusiness",
        "name": "Stop & Go Airport Shuttle Service, Inc.",
        "telephone": "",
        "address": {
            "@@type": "PostalAddress",
            "streetAddress": "400 E Lincoln Hwy Suite 101A",
            "addressLocality": "New Lenox",
            "addressRegion": "IL",
            "postalCode": "60451",
            "addressCountry": "US"
        }
    },
    "areaServed": { "@@type": "State", "name": "Illinois" },
    "description": "From booking to drop-off, Stop & Go Airport Shuttle Service, Inc. delivers professional limo service across Chicagoland. Flat-rate pricing, uniformed chauffeurs, real-time flight tracking, and pre-inspected vehicles on every ride."
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        { "@@type": "ListItem", "position": 1, "name": "Home",         "item": "https://newlenoxlimoservice.com" },
        { "@@type": "ListItem", "position": 2, "name": "Our Services", "item": "https://newlenoxlimoservice.com/our-services" },
        { "@@type": "ListItem", "position": 3, "name": "Limo Service", "item": "{{ request()->url() }}" }
    ]
}
</script>
@endpush

<x-layouts.page
    title="What a Professional Limo Service Includes | Stop & Go Airport Shuttle Service, Inc. Chicagoland"
    metaDescription="From booking to drop-off — here is what a professional limo service actually delivers. Flat-rate pricing, uniformed chauffeurs, real-time flight tracking."
    currentPage="our-services"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Professional limo service throughout Chicagoland, Stop & Go Airport Shuttle Service, Inc."
>
    <x-sections.category-hero
        heading="What a Professional"
        headingBold="Limo Service Includes"
        :headingTwoLines="false"
        subtitle="From booking to drop-off, every detail is handled before you see the car"
        description="Most people have never booked a professional limo service before. They know it is a step above a regular car, but they are not sure what they are actually getting. Stop & Go Airport Shuttle Service, Inc. has been running chauffeured transportation throughout Chicagoland since 2015, and we believe you should know exactly what you are paying for before you pay for it. A professional limo service is not just a nicer vehicle. It is a flat rate that locks at booking. It is a chauffeur who arrives 10 minutes early. It is a vehicle that is detailed and inspected before your pickup. It is real-time flight tracking for airport rides. It is a named sign at baggage claim. It is luggage handled at both ends. On this page we explain what every single one of those things means in practice, and how to know when to book for your particular occasion."
        buttonText="Get a Free Quote"
        buttonHref="/get-a-quote"
        image="/images/heroes/hero-services.jpg"
        imagePosition="center center"
    />

    <x-sections.travel-in-style
        heading="Your Chauffeur"
        headingBold="Arrives Ready"
        subtitle="The work that happens on our end before you see the vehicle"
        body="When your chauffeur pulls up, everything is already done. The vehicle has been through a pre-trip inspection and a full detail. The route is planned, accounting for current traffic and any construction on your corridor. If your trip involves a flight, that flight number has been pulled and is being tracked. Climate is set to a comfortable default. For airport arrivals, your chauffeur is positioned at the correct terminal before your wheels touch the runway. None of this happens by accident. It is a preparation checklist that runs before every single pickup."
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/sections/corporate-limo.jpg"
        imageAlt="Professional chauffeur preparing for a limo service pickup in Chicagoland"
        :inverted="true"
    />

    <x-sections.info-strip
        headingBold="No Meter. No Surge."
        heading="One Rate, From the Start."
        body="Flat-rate pricing means your fare is locked the moment you confirm your reservation. Traffic adds nothing to your bill. Peak-hour demand adds nothing. Weather adds nothing. You see the number before you book, and that is the number on your receipt. No recalculations at drop-off. No mystery line items. Just the rate you agreed to."
    />

    <x-sections.limo-process-steps />

    <x-sections.limo-booking-timeline />

    <x-sections.three-steps :inverted="true" />

    <x-sections.free-instant-quote
        heading="Ready to"
        headingBold="book your limo?"
        headingTail=""
        image="/images/sections/driver-classy.jpg"
        imageAlt="Professional uniformed chauffeur ready for a limo service pickup"
        imageAspect="16/9"
        imageObjectPosition="center top"
        rightVariant="description"
        descHeading="What Every Stop & Go Airport Shuttle Service, Inc. Ride Guarantees"
        descSubheading="The same standard on every trip, every time"
        descBody="Whether it is your first ride or your fiftieth, here is what you can count on:"
        :descBullets="[
            'Flat-rate price locked at booking, no adjustments at drop-off',
            'Uniformed, background-checked chauffeur on every ride',
            'Vehicle detailed and inspected before your pickup',
            'Chauffeur on-site 10 to 15 minutes before your scheduled time',
            'Real-time flight tracking for every airport pickup',
            'Available 24 hours a day, 365 days a year',
        ]"
        descClosing="Call or get a free quote online. We cover all of Chicagoland."
        descImage="/images/sections/driver-classy.jpg"
        descImageAlt="Professional chauffeur ready to provide limo service"
        :descImageTop="true"
    />

    <x-sections.review-slider />

    <x-sections.faq preset="general" />

    <x-sections.share-your-experience />

    <x-sections.map-contact-section />

    <x-ui.banner-thin-cloud />

    <x-sections.base-footer />

</x-layouts.page>
