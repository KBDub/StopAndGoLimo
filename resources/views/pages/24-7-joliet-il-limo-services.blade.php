@push('structured-data')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "LocalBusiness",
    "name": "Stop and Go Airport Shuttle Service Inc — Joliet, IL",
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
    "areaServed": { "@@type": "City", "name": "Joliet", "addressRegion": "IL", "addressCountry": "US" },
    "description": "24/7 luxury limo and airport shuttle service in Joliet, IL. Airport transfers, weddings, corporate travel, and special events. Call (815) 585-6922."
}
</script>
@endpush

<x-layouts.page
    title="Joliet Limo & Airport Shuttle Service | Stop and Go Airport Shuttle"
    metaDescription="24/7 luxury limo and airport shuttle service in Joliet, IL. Airport transfers to O'Hare and Midway, weddings, corporate travel, and special events. Call (815) 585-6922."
    currentPage="service-areas"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Luxury limo service in Joliet, Illinois"
>
    <x-sections.category-hero
        heading="24/7 Joliet"
        headingBold="Limo & Airport Shuttle"
        subtitle="Reliable, professional transportation"
        subtitleIn="serving Joliet, Illinois"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/sections/joliet-il.png"
        imagePosition="center center"
    />

    <x-sections.info-strip
        headingBold="Reliable & Stylish"
        heading="Joliet Transportation"
        body="Stop & Go offers 24/7 Joliet airport shuttle service, limousine service for weddings and events, and party bus rentals for celebrations. Serving all Joliet neighborhoods, our professional chauffeurs provide reliable, comfortable transportation to O'Hare, Midway, and throughout the Chicago area."
    />

    <x-sections.travel-in-style
        heading="Reliable & Stylish"
        headingBold="Joliet Transportation"
        body="Stop & Go offers 24/7 Joliet airport shuttle service, limousine service for weddings and events, and party bus rentals for celebrations. Whether you need party bus rental for celebrations and group travel, corporate transportation for business meetings, or wedding vehicles to make your special day seamless, we have you covered. Our intimate knowledge of Joliet, from the downtown Historic District to the I-80 corridor, from Route 59 to I-55 access, ensures efficient and reliable transportation throughout this vibrant Will County community."
        image="/images/sections/joliet-limo.jpg"
        imageAlt="Rialto Square Theatre in Joliet, Illinois — Stop and Go Airport Shuttle"
        :inverted="true"
    />

    <x-sections.faq />
    <x-sections.share-your-experience />
    <x-sections.map-contact-section />
    <x-ui.banner-thin-cloud />
    <x-sections.base-footer />

</x-layouts.page>
