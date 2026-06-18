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
        image="/images/sections/lockport-limo-transport.png"
        imageAlt="Limousine transport in Lockport, Illinois — Stop and Go Airport Shuttle"
        imageAspect="16/9"
        imageObjectPosition="center"
        rightVariant="description"
        descHeading="Why Choose Us?"
        descSubheading="Our Lockport limo service makes every ride safe, comfortable, and stress-free."
        descBody="Don't risk delays on your special day. Our chauffeur service in Lockport, IL guarantees safe, reliable, and comfortable rides for weddings, parties, and corporate events. Reserve your ride now with our quick online form and enjoy a hassle-free experience from start to finish."
        :descBullets="[]"
    />

    <x-sections.faq />
    <x-sections.share-your-experience />
    <x-sections.map-contact-section />
    <x-ui.banner-thin-cloud />
    <x-sections.base-footer />

</x-layouts.page>
