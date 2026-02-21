<x-layouts.page
    :title="'Shop ' . ($collectionName ?? 'Products')"
    :metaDescription="'Browse our ' . ($collectionName ?? 'products') . ' collection. Custom signage and apparel by Top 5 Percent in Joliet, IL. Veteran-owned business.'"
>
    <x-sections.category-hero
        preHeading="Veteran Owned • Joliet, IL"
        :heading="$collectionName ?? 'Shop Our Products'"
        headingAccent=""
        :description="$collectionDescription ?? 'Premium quality custom products designed and produced right here in Joliet.'"
        primaryButtonText="Get a Free Quote"
        primaryButtonHref="/contact"
        secondaryButtonText="Call Us Today"
        secondaryButtonHref="tel:+18153498600"
    />

    <x-ui.banner-medium-sunburst />

    <x-sections.top5pct-same-day-service
        :displayServiceType="$collectionName ?? 'Custom Signage & Apparel'"
    />

    @if(!empty($categoryItems))
        <x-sections.top-level-category-section
            :heading="$collectionName"
            headingAccent="Services"
            :description="'Explore our full range of ' . strtolower($collectionName ?? '') . ' services for businesses, teams, events, and personal wear in Joliet and Will County.'"
            :items="$categoryItems"
        />
    @endif

    @livewire('catalog.collection-page', [
        'collectionSlug' => $collectionSlug,
        'parentSlug' => $parentSlug ?? null,
    ])

    <x-sections.why-choose-us />
    <x-sections.cta-free-quote />
    <x-sections.cta-ready-to-get-started />
    <x-sections.review-banner />
    <x-sections.map-section />
</x-layouts.page>
