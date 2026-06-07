@php
    use App\Data\CityContent;
    $cityName  = $city['city'];
    $stateName = $city['state'];
    $cityState = $cityName . ', ' . $stateName;
    $content   = CityContent::for($slug);
@endphp

@push('structured-data')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Service",
    "name": "Airport Transfers in {{ $cityState }}",
    "provider": { "@@id": "https://www.stopandgolimo.com" },
    "areaServed": {
        "@@type": "City",
        "name": "{{ $cityName }}",
        "addressRegion": "IL",
        "addressCountry": "US"
    },
    "description": "Professional airport transfers to O'Hare and Midway serving {{ $cityState }}. Sedans, SUVs, and limousines available. Serving since 2009."
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        {
            "@@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "https://www.stopandgolimo.com"
        },
        {
            "@@type": "ListItem",
            "position": 2,
            "name": "Service Areas",
            "item": "https://www.stopandgolimo.com/service-areas"
        },
        {
            "@@type": "ListItem",
            "position": 3,
            "name": "{{ $cityState }}",
            "item": "https://www.stopandgolimo.com/service-areas/{{ $slug }}"
        }
    ]
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "WebPage",
    "name": "Airport Transfers in {{ $cityState }} | Stop and Go Limo",
    "url": "https://www.stopandgolimo.com/service-areas/{{ $slug }}",
    "description": "Stop and Go Limo provides professional airport transfers and luxury ground transportation serving {{ $cityState }}."
}
</script>
@if($content && !empty($content['review']))
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Review",
    "itemReviewed": { "@@id": "https://www.stopandgolimo.com" },
    "author": {
        "@@type": "Person",
        "name": "{{ $content['review']['author'] }}"
    },
    "reviewBody": {!! json_encode($content['review']['body']) !!}
}
</script>
@endif
@endpush

<x-layouts.page
    title="Airport Transfers in {{ $cityState }} | Stop and Go Limo"
    metaDescription="Professional airport transfers to O'Hare and Midway from {{ $cityState }}. Sedans, SUVs, and limousines. On-time guarantee. Serving since 2009. Call (815) 585-6922."
    currentPage="about">

    {{-- Hero --}}
    <x-sections.category-hero
        heading="Airport Transfers"
        :headingBold="'from ' . $cityName . ', ' . $stateName"
        :subtitle="'Serving ' . $cityState . ' since 2009'"
        description="Stop and Go Limo provides professional airport transportation to O'Hare (ORD) and Midway (MDW) from {{ $cityState }}. On time, every time."
        buttonText="Book a Ride"
        buttonHref="/contact"
        image="/images/heroes/hero-services.jpg"
        imagePosition="center 30%"
    />

    <x-ui.banner-medium-champagne />

</x-layouts.page>
