@push('structured-data')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "LocalBusiness",
    "name": "Stop and Go Airport Shuttle Service Inc — Oswego, IL",
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
    "areaServed": { "@@type": "City", "name": "Oswego", "addressRegion": "IL", "addressCountry": "US" },
    "description": "24/7 luxury limo and airport shuttle service in Oswego, IL. Airport transfers, weddings, corporate travel, and special events. Call (815) 585-6922."
}
</script>
@endpush

<x-layouts.page
    title="Oswego Limo & Airport Shuttle Service | Stop and Go Airport Shuttle"
    metaDescription="24/7 luxury limo and airport shuttle service in Oswego, IL. Airport transfers to O'Hare and Midway, weddings, corporate travel, and special events. Call (815) 585-6922."
    currentPage="service-areas"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Luxury limo service in Oswego, Illinois"
>
    <x-sections.category-hero
        heading="24/7 Limo & Airport Shuttle"
        headingBold="Service in Oswego IL"
        subtitle="Reliable Oswego limo and shuttle service"
        subtitleIn="for all occasions"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/sections/oswego-il.png"
        imagePosition="center center"
    />

    <x-sections.travel-in-style
        heading="Oswego IL"
        headingBold="Limo Service"
        body="Travel smarter and ride with confidence using our 24/7 Oswego IL limo service, designed for reliability and comfort at any hour. Whether you need a dependable airport shuttle in Oswego IL or a fun, spacious party bus rental in Oswego IL for a night out or group event, we deliver clean vehicles, professional drivers, and on-time service that makes every trip smooth and stress-free from start to finish."
        image="/images/sections/oswego-happy-clients.png"
        imageAlt="Happy clients using Stop and Go limo service in Oswego, Illinois"
        :inverted="true"
    />

    <x-sections.faq />
    <x-sections.share-your-experience />
    <x-sections.map-contact-section />
    <x-ui.banner-thin-cloud />
    <x-sections.base-footer />

</x-layouts.page>
