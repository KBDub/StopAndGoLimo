@push('structured-data')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "LocalBusiness",
    "name": "Stop and Go Airport Shuttle Service Inc — Bolingbrook, IL",
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
    "areaServed": { "@@type": "City", "name": "Bolingbrook", "addressRegion": "IL", "addressCountry": "US" },
    "description": "24/7 luxury limo and airport shuttle service in Bolingbrook, IL. Airport transfers, weddings, corporate travel, and special events. Call (815) 585-6922."
}
</script>
@endpush

<x-layouts.page
    title="Bolingbrook Limo & Airport Shuttle to O'Hare & Midway | Stop and Go Airport Shuttle"
    metaDescription="24/7 luxury limo and airport shuttle service in Bolingbrook, IL. Airport transfers to O'Hare and Midway, weddings, corporate travel, and special events. Call (815) 585-6922."
    currentPage="service-areas"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Luxury limo service in Bolingbrook, Illinois"
>
    <x-sections.category-hero
        heading="24/7 Bolingbrook"
        headingBold="Limo & Airport Shuttle"
        subtitle="Reliable, professional transportation"
        subtitleIn="serving Bolingbrook, Illinois"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/sections/bolingbrook-il.png"
        imagePosition="center center"
    />

    <x-sections.travel-in-style
        heading="Every Occasion Covered"
        headingBold="Driven by certified drivers you can trust"
        body="Stop &amp; Go provides reliable transportation throughout Bolingbrook. We offer a professional 24/7 Bolingbrook airport shuttle to O'Hare and Midway."
        image="/images/sections/bolingbrook-limo.png"
        imageAlt="Happy clients in a limousine in Bolingbrook, Illinois — Stop and Go Airport Shuttle"
        :inverted="true"
    />

    <x-sections.info-strip
        headingBold="Reliable & Stylish"
        heading="Bolingbrook Transportation"
        body="Stop &amp; Go provides 24/7 airport shuttle service to O'Hare and Midway, luxury limo service for weddings and events, and party bus rentals in Bolingbrook. With direct I-55 access and close proximity to both Chicago airports, we deliver reliable, professional transportation for business travel and celebrations throughout this southwest suburb."
    />

    <x-sections.faq />
    <x-sections.share-your-experience />
    <x-sections.map-contact-section />
    <x-ui.banner-thin-cloud />
    <x-sections.base-footer />

</x-layouts.page>
