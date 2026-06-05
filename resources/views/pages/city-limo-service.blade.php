@push('structured-data')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "LocalBusiness",
    "name": "Stop and Go Airport Shuttle Service Inc — {{ $city }}, {{ $state }}",
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
    "areaServed": {
        "@@type": "City",
        "name": "{{ $city }}",
        "addressRegion": "{{ $state }}",
        "addressCountry": "US"
    },
    "description": "24/7 luxury limo and airport shuttle service in {{ $city }}, {{ $state }}. Airport transfers, weddings, corporate travel, and special events. Call (815) 585-6922."
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        { "@@type": "ListItem", "position": 1, "name": "Home",          "item": "https://www.newlenoxlimoservice.com" },
        { "@@type": "ListItem", "position": 2, "name": "Service Areas", "item": "https://www.newlenoxlimoservice.com/service-areas" },
        { "@@type": "ListItem", "position": 3, "name": "{{ $city }}",   "item": "{{ request()->url() }}" }
    ]
}
</script>
@endpush

<x-layouts.page
    :title="$city . ' Limo Service | Stop and Go Limo — ' . $city . ', ' . $state"
    :metaDescription="'24/7 luxury limo and airport shuttle service in ' . $city . ', ' . $state . '. Airport transfers, weddings, corporate travel, and special events. Call (815) 585-6922.'"
    currentPage="service-areas"
    ogImage="/images/heroes/hero-services.jpg"
    :ogImageAlt="'Luxury limo service in ' . $city . ', ' . $state"
>
    <x-sections.category-hero
        :heading="$city"
        headingBold="Limo Service"
        :subtitle="'24/7 luxury limo and airport shuttle service in ' . $city . ', Illinois'"
        buttonText="Book a Ride"
        buttonHref="/bookings-reservations"
        image="/images/heroes/hero-services.jpg"
        imagePosition="center center"
    />
</x-layouts.page>
