@push('structured-data')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "LocalBusiness",
    "name": "Stop and Go Airport Shuttle Service Inc — Lockport, IL",
    "url": "{{ request()->url() }}",
    "telephone": "(815) 585-6922",
    "address": {
        "@@type": "PostalAddress",
        "streetAddress": "400 E Lincoln Hwy Suite 101A",
        "addressLocality": "New Lenox",
        "addressRegion": "IL",
        "postalCode": "60451",
        "addressCountry": "US"
    },
    "areaServed": { "@@type": "City", "name": "Lockport", "addressRegion": "IL", "addressCountry": "US" },
    "description": "24/7 luxury limo and airport shuttle service in Lockport, IL. Airport transfers, weddings, corporate travel, and special events. Call (815) 585-6922."
}
</script>
@endpush

<x-layouts.page
    title="Lockport Limo & Airport Shuttle Service | Stop and Go Airport Shuttle"
    metaDescription="24/7 luxury limo and airport shuttle service in Lockport, IL. Airport transfers to O'Hare and Midway, weddings, corporate travel, and special events. Call (815) 585-6922."
    currentPage="service-areas"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Luxury limo service in Lockport, Illinois"
>
    <x-sections.category-hero
        heading="24/7 Lockport"
        headingBold="Limo & Airport Shuttle"
        subtitle="Reliable, professional transportation"
        subtitleIn="serving Lockport, Illinois"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/sections/lockport-illinois.png"
        imagePosition="center center"
    />

    <x-sections.travel-in-style
        heading="Travel with Confidence"
        headingBold="and Sophistication"
        body="Whether you need a ride for a special evening in historic downtown Lockport or a critical business meeting, the quality of your ride matters. Our Lockport limo service pairs you with a professional driver who handles every detail, so you can relax in a quiet, high-end cabin. Skip the parking headaches and focus on what matters most. We serve clients who value safety, punctuality, and superior service on every trip."
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/sections/lockport-limo-transport.png"
        imageAlt="Limousine service in Lockport, Illinois — Stop and Go Airport Shuttle"
        imagePosition="left"
    />

    <x-sections.free-instant-quote
        heading="Why choose"
        headingBold="us?"
        headingTail=""
        image="/images/sections/lockport-airport-transportation.png"
        imageAlt="Airport transportation in Lockport, Illinois — Stop and Go Airport Shuttle"
        imageAspect="16/9"
        imageObjectPosition="center"
        rightVariant="description"
        descHeading="Why Choose Us?"
        descSubheading="Our Lockport limo service makes every ride safe, comfortable, and stress-free."
        descBody="As Lockport's trusted transportation provider, Stop & Go offers complete luxury transportation services:"
        :descBullets="[
            'Lockport airport shuttle for timely arrivals and departures',
            'Limousine service for weddings, events, and special occasions',
            'Party bus rental for celebrations and group travel',
            'Corporate transportation for business meetings and executive travel',
            'Wedding vehicles to make your special day seamless',
        ]"
        descClosing="Our knowledge of Lockport, from the historic downtown canal district to Route 7, Route 171, and I-355 access, ensures efficient and reliable transportation throughout Will County."
        descImage="/images/sections/lockport-airport-transportation.png"
        descImageAlt="Airport transportation in Lockport, Illinois — Stop and Go Airport Shuttle"
        :descImageTop="true"
    />

    <x-sections.image-info-card
        id="image-info-card-confidence"
        heading="Travel with Confidence and Sophistication"
        headingBold="Across the City"
        body="Whether you are planning a special evening in historic downtown Lockport or heading to a critical business meeting, the quality of your ride defines your entire day. Our Lockport limo service provides a dedicated professional driver who manages every logistical detail while you relax in a quiet, high-end cabin. By choosing a Lockport wedding limo rental, you bypass the typical stresses of event parking and navigation to focus entirely on your personal priorities. Our local fleet delivers a sophisticated travel solution for clients who value safety, punctuality, and superior service standards."
        image="/images/sections/lockport-travel-confidence.png"
        imageAlt="Travel with confidence across Lockport, Illinois — Stop and Go Airport Shuttle"
        imageAspect="16/9"
        imagePosition="right"
    />

    <x-sections.image-info-card
        id="image-info-card-flexible"
        heading="Flexible Transportation Options for"
        headingBold="Active Illinois Residents"
        body="For passengers who need more versatility during their travels, our hourly chauffeur rentals provide the perfect answer for a demanding daily schedule. This flexible service lets you visit multiple local destinations at your own pace, with a private driver standing by for your immediate departure. Our reliable Lockport to O'Hare airport car service guarantees you arrive at your terminal without the unpredictable wait times of standard ride-sharing apps. Whether you are attending several corporate appointments or touring regional landmarks, having a private vehicle at your disposal keeps your schedule fluid."
        image="/images/sections/lockport-flexible-transport.png"
        imageAlt="Flexible transportation options in Lockport, Illinois — Stop and Go Airport Shuttle"
        imageAspect="16/9"
        imagePosition="left"
        :inverted="true"
    />

    <x-sections.faq />
    <x-sections.share-your-experience />
    <x-sections.map-contact-section />
    <x-ui.banner-thin-cloud />
    <x-sections.base-footer />

</x-layouts.page>
