@push('structured-data')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "LocalBusiness",
    "name": "Stop and Go Airport Shuttle Service Inc — Aurora, IL",
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
    "areaServed": { "@@type": "City", "name": "Aurora", "addressRegion": "IL", "addressCountry": "US" },
    "description": "24/7 luxury limo and airport shuttle service in Aurora, IL. Airport transfers, weddings, corporate travel, and special events. Call (815) 585-6922."
}
</script>
@endpush

<x-layouts.page
    title="Aurora Limo & Airport Shuttle Service | Stop and Go Airport Shuttle"
    metaDescription="24/7 luxury limo and airport shuttle service in Aurora, IL. Airport transfers to O'Hare and Midway, weddings, corporate travel, and special events. Call (815) 585-6922."
    currentPage="service-areas"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Luxury limo service in Aurora, Illinois"
>
    <x-sections.category-hero
        heading="Aurora Airport Shuttle,"
        headingBold="Limo & Party Bus"
        subtitle="Local & trusted rides"
        subtitleIn="Aurora Airport & Event Transport"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/sections/aurora-hero.jpg"
        imagePosition="center center"
    />

    <x-sections.info-strip
        headingPrefix="Reliable & Stylish"
        headingBold="Aurora Transportation"
        heading=""
        body="Stop & Go provides 24/7 airport shuttle service to O'Hare and Midway, luxury limo service for weddings and events, and party bus rentals. With professional drivers and modern vehicles, we ensure punctual, comfortable service for early morning airport rides, weddings, or parties throughout Chicago, Naperville, Aurora, Joliet, Plainfield, New Lenox, and surrounding suburbs."
    />

    <x-sections.faq />
    <x-sections.share-your-experience />
    <x-sections.map-contact-section />
    <x-ui.banner-thin-cloud />
    <x-sections.base-footer />

</x-layouts.page>
