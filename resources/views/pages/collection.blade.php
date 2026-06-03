<x-layouts.page
    :title="'Shop ' . ($collectionName ?? 'Products')"
    :metaDescription="'Browse our ' . ($collectionName ?? 'products') . ' collection. Custom signage and apparel by Top 5 Percent in Joliet, IL. Veteran-owned business.'"
>
    <x-sections.category-hero
        preHeading="Veteran Owned • Joliet, IL"
        :heading="$collectionName ?? 'Shop Our Products'"
        headingAccent=""
        :description="$collectionDescription ?? 'Top 5 Percent designs and produces premium custom products right here in Joliet, IL. Veteran-owned with free design help and fast turnaround.'"
        primaryButtonText="Get a Free Quote"
        primaryButtonHref="/contact"
        secondaryButtonText="Call Us Today"
        secondaryButtonHref="tel:+18153498600"
    :compactButtons="true"
    />

    <x-ui.banner-medium-sunburst />

    <x-sections.top5pct-same-day-service
        :displayServiceType="$collectionName ?? 'Custom Signage & Apparel'"
    />

    @livewire('catalog.collection-page', [
        'collectionSlug' => $collectionSlug,
        'parentSlug' => $parentSlug ?? null,
    ])

    <x-sections.cta-quadruple-button-banner />

    <x-sections.why-choose-us />
    <x-ui.banner-thin-sunburst />
    <x-ui.artwork-dropzone class="max-w-2xl mx-auto" />
    <x-ui.banner-thin-sunburst />
    <x-sections.cta-free-quote-banner />
    <x-sections.video-banner
        videoId="F3J9nyiM3So"
        heading="Find the Right Product for Your Project"
        label="Custom Product Collections"
        subheading="Browse the Top 5 Percent product collection to find the right custom apparel, signage, or promotional item for your next project. Veteran-owned and proudly serving Joliet, Illinois."
    />
    <x-sections.cta-ready-to-get-started />
    <x-sections.review-banner />
    <x-sections.map-section />
</x-layouts.page>
