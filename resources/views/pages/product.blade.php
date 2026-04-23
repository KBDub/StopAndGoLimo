<x-layouts.page
    :title="$productName ?? 'Product Details'"
    :metaDescription="($productDescription ?? 'Custom product') . ' by Top 5 Percent in Joliet, IL. Veteran-owned custom signage and apparel.'"
>
    @livewire('catalog.product-detail', ['slug' => $slug])

    <x-ui.banner-medium-sunburst />

    <x-sections.top5pct-same-day-service />

    <x-sections.cta-quadruple-button-banner />

    <x-sections.why-choose-us />
    <x-sections.cta-free-quote-banner />
    <x-sections.video-banner
        videoId="F3J9nyiM3So"
        heading="Quality Made to Order"
        label="Custom Product Details"
        subheading="Every product we make is produced to your exact specifications. See how Top 5 Percent delivers quality custom apparel, signage, and promotional products — right here in Joliet, Illinois."
    />
    <x-sections.cta-ready-to-get-started />
    <x-sections.review-banner />
    <x-sections.map-section />
</x-layouts.page>
