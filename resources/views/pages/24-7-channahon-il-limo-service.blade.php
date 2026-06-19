@push('structured-data')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "LocalBusiness",
    "name": "Stop and Go Airport Shuttle Service Inc — Channahon, IL",
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
    "areaServed": { "@@type": "City", "name": "Channahon", "addressRegion": "IL", "addressCountry": "US" },
    "description": "24/7 luxury limo and airport shuttle service in Channahon, IL. Airport transfers, weddings, corporate travel, and special events. Call (815) 585-6922."
}
</script>
@endpush

<x-layouts.page
    title="Channahon Limo & Airport Shuttle Service | Stop and Go Airport Shuttle"
    metaDescription="24/7 luxury limo and airport shuttle service in Channahon, IL. Airport transfers to O'Hare and Midway, weddings, corporate travel, and special events. Call (815) 585-6922."
    currentPage="service-areas"
    ogImage="/images/heroes/hero-services.jpg"
    ogImageAlt="Luxury limo service in Channahon, Illinois"
>
    <x-sections.category-hero
        heading="24/7 Channahon"
        headingBold="Limo & Airport Shuttle"
        subtitle="Reliable, professional transportation"
        subtitleIn="serving Channahon, Illinois"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/sections/channahon-il.png"
        imagePosition="center center"
    />

    <x-sections.travel-in-style
        heading="Channahon IL"
        headingBold="Limo Service"
        body="Travel around Channahon with ease using our Channahon IL limo service. Whether you need a reliable Channahon airport limo service, a stylish wedding limo in Channahon IL, or a professional chauffeur service in Channahon IL, we provide safe, comfortable, and on-time transportation for every occasion. Our experienced drivers ensure each ride is smooth, stress-free, and tailored to your needs."
        image="/images/sections/channahon-limo.png"
        imageAlt="Happy clients in a limousine in Channahon, Illinois — Stop and Go Airport Shuttle"
        :inverted="true"
    />

    <x-sections.faq />
    <x-sections.share-your-experience />
    <x-sections.map-contact-section />
    <x-ui.banner-thin-cloud />
    <x-sections.base-footer />

</x-layouts.page>
