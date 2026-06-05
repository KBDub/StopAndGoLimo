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
        preHeading="Serving {{ $cityState }} Since 2009"
        heading="Airport Transfers"
        headingAccent="from {{ $cityName }}, {{ $stateName }}"
        description="Stop and Go Limo provides professional airport transportation to O'Hare (ORD) and Midway (MDW) from {{ $cityState }}. On-time, every time."
        primaryButtonText="Book a Ride"
        primaryButtonHref="/contact"
        secondaryButtonText="Call (815) 585-6922"
        secondaryButtonHref="tel:+18155856922"
        image="/images/limo/stopandgo-fleet-new-lenox.jpg"
    :compactButtons="true"
    />

    <x-ui.banner-medium-champagne />

    @if($content)

        {{-- Paragraphs 1 + 2 --}}
        <x-sections.city-localized-content
            heading="Serving {{ $cityState }} Since 2009"
            label="Local Service"
            image="/images/limo/stopandgo-suv-midway-pickup.jpg"
            alt="Stop and Go Limo airport transfer from {{ $cityState }}"
            imagePosition="left"
        >
            <p>{{ $content['p1'] }}</p>
            <p>{{ $content['p2'] }}</p>
        </x-sections.city-localized-content>

        {{-- Paragraphs 3 + 4 --}}
        <x-sections.city-vehicle-and-brand
            vehicleHeading="Airport Rides from {{ $cityName }}"
            brandHeading="Professional Service, {{ $cityName }}-Focused"
        >
            <x-slot name="vehicleContent">
                <p>{{ $content['p3'] }}</p>
            </x-slot>
            <x-slot name="brandContent">
                <p>{{ $content['p4'] }}</p>
            </x-slot>
        </x-sections.city-vehicle-and-brand>

    @else

        {{-- Fallback generic intro --}}
        <x-sections.card-image-with-text
            title="Stop and Go Limo, proudly serving {{ $cityState }} since 2009"
            image="/images/limo/stopandgo-fleet-new-lenox.jpg"
            alt="Stop and Go Limo serving {{ $cityState }} with airport transfers"
            imagePosition="right"
        >
            <p>
                Since 2009, <a href="/" class="link-notification">Stop and Go Limo</a> has been the trusted choice for
                <a href="/airport-transfers" class="link-notification">airport transfers</a>
                in {{ $cityName }} and throughout Will and DuPage County and greater Chicagoland. We are based in
                New Lenox, Illinois, and we are proud to serve the {{ $cityName }} community with the same
                professionalism and reliability our clients have come to expect, whether that means a single airport
                pickup or a recurring corporate account.
            </p>
            <p>
                Whether you are a business traveler heading to O'Hare, a family flying out of Midway, or a group
                needing coordinated event transportation, we handle every booking with care and precision.
                Our fleet includes sedans, SUVs, and stretch limousines, all driven by licensed, background-checked
                chauffeurs.
            </p>
            <p>
                {{ $cityName }} clients have access to our full range of services: O'Hare (ORD) and Midway (MDW)
                airport transfers, corporate shuttles, event rides, and point-to-point transfers across Chicagoland.
                Same-day service is available on most routes.
            </p>
            <p>
                Call us at
                <a href="tel:+18155856922" class="text-azure hover:text-azure-dark underline decoration-azure/30 hover:decoration-azure transition-colors">(815) 585-6922</a>
                to talk through your trip. You can also
                <a href="/contact" class="text-azure hover:text-azure-dark underline decoration-azure/30 hover:decoration-azure transition-colors">book a ride online</a>.
                Your trip is our priority.
            </p>
        </x-sections.card-image-with-text>

    @endif

    {{-- Services overview --}}
    <x-sections.top5pct-same-day-service
        serviceType="airport-transfers"
        displayServiceType="Airport Transfers from {{ $cityName }}"
    />

    @if($content && !empty($content['faqs']))
        {{-- City FAQ --}}
        <x-sections.faq
            heading="Frequently Asked Questions, {{ $cityName }}, IL"
            label="Local FAQs"
            :faqs="$content['faqs']"
        />
    @endif

    {{-- CTA above map --}}
    <x-sections.cta-quadruple-button-banner />

    {{-- Map + zip checker --}}
    <x-sections.map-section />

</x-layouts.page>
