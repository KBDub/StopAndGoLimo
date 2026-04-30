@php
    $cityName  = $city['city'];
    $stateName = $city['state'];
    $cityState = $cityName . ', ' . $stateName;
@endphp

<x-layouts.page
    title="Custom Signs & Apparel in {{ $cityState }} | Top 5 Percent"
    metaDescription="Top 5 Percent is a veteran-owned custom signage and apparel shop proudly serving {{ $cityState }}. Custom t-shirts, business signs, banners, vehicle graphics, and more. Fast turnaround, in-house production."
    currentPage="about">

    {{-- Hero --}}
    <x-sections.category-hero
        preHeading="Veteran Owned • Serving {{ $cityState }}"
        heading="Custom Signs & Apparel"
        headingAccent="in {{ $cityName }}, {{ $stateName }}"
        description="Top 5 Percent is a veteran-owned custom signage and apparel shop serving {{ $cityState }} and the surrounding communities. Same day service available on most orders."
        primaryButtonText="Get a Free Quote"
        primaryButtonHref="/contact"
        secondaryButtonText="Call (815) 349-8600"
        secondaryButtonHref="tel:+18153498600"
        image="/images/top5pct-banner-joliet.jpg"
    />

    <x-ui.banner-medium-sunburst />

    {{-- Local intro --}}
    <x-sections.card-image-with-text
        title="Top 5 Percent, proudly serving {{ $cityState }} since 2017"
        image="/images/business-signs/top5pct-banner-business-signs-joliet-plainfield-shorewood.jpg"
        alt="Custom business signs and apparel for {{ $cityState }} by Top 5 Percent"
        imagePosition="right"
    >
        <p>
            Since 2017, Top 5 Percent has been the go-to source for custom signage and apparel
            in {{ $cityName }} and throughout Will County and greater Chicagoland. We are a
            veteran-owned shop based in Joliet, Illinois, and we are proud to serve the
            {{ $cityName }} community with the same discipline and quality standards that
            military service instilled in us.
        </p>
        <p>
            Whether you are a small business looking for a new storefront sign, a school
            organization ordering custom hoodies, or an individual needing vehicle graphics,
            we handle every job in-house from artwork through production. That means fewer
            errors, faster turnaround, and a team that stands behind every order.
        </p>
        <p>
            {{ $cityName }} customers have access to our full range of services: custom t-shirts,
            embroidery, business signs, banners, yard signs, vehicle graphics, window decals,
            promotional items, and more. Same day service is available on most products.
        </p>
        <p>
            Stop in at our Joliet shop, or call us at
            <a href="tel:+18153498600" class="text-azure hover:text-azure-dark underline decoration-azure/30 hover:decoration-azure transition-colors">(815) 349-8600</a>
            to talk through your project. We also offer
            <a href="/contact" class="text-azure hover:text-azure-dark underline decoration-azure/30 hover:decoration-azure transition-colors">free quotes online</a>.
            Your brand is our business.
        </p>
    </x-sections.card-image-with-text>

    {{-- All services overview --}}
    <x-sections.top5pct-same-day-service
        serviceType="custom-signage-apparel"
        displayServiceType="Custom Signage & Apparel in {{ $cityName }}"
    />

    {{-- CTA above map --}}
    <x-sections.cta-quadruple-button-banner />

    {{-- Map + zip checker --}}
    <x-sections.map-section />

</x-layouts.page>
