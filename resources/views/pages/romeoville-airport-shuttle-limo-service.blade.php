@push('structured-data')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "LocalBusiness",
    "name": "Stop and Go Airport Shuttle Service Inc — Romeoville, IL",
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
    "areaServed": { "@@type": "City", "name": "Romeoville", "addressRegion": "IL", "addressCountry": "US" },
    "description": "24/7 luxury limo and airport shuttle service in Romeoville, IL. Airport transfers, weddings, corporate travel, and special events. Call (815) 585-6922."
}
</script>
@endpush

<x-layouts.page
    title="Romeoville Limo & Airport Shuttle Service | Stop and Go Airport Shuttle"
    metaDescription="24/7 luxury limo and airport shuttle service in Romeoville, IL. Airport transfers to O'Hare and Midway, weddings, corporate travel, and special events. Call (815) 585-6922."
    currentPage="service-areas"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Luxury limo service in Romeoville, Illinois"
>
    <x-sections.category-hero
        heading="24/7 Romeoville Airport Shuttle,"
        headingBold="Limo & Party Bus"
        subtitle="Reliable transportation services throughout"
        subtitleIn="Romeoville, Illinois"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/sections/romeoville-il.png"
        imagePosition="center center"
    />

    <x-sections.travel-in-style
        heading="Every Occasion"
        headingBold="Covered"
        subtitle="Driven by certified drivers you can trust"
        body="Stop & Go provides reliable transportation throughout Romeoville. We offer a professional 24/7 Romeoville airport shuttle to O'Hare and Midway, luxury limousine service for weddings and events, and party bus rentals for celebrations. Serving all Romeoville neighborhoods, we deliver reliable, professional transportation throughout the Chicago area."
        image="/images/sections/romeoville-airport-shuttle.png"
        imageAlt="Airport shuttle service in Romeoville, Illinois — Stop and Go Airport Shuttle"
        :inverted="true"
    />

    <x-sections.faq />
    <x-sections.share-your-experience />
    <x-sections.map-contact-section />
    <x-ui.banner-thin-cloud />
    <x-sections.base-footer />

</x-layouts.page>
