<x-layouts.page
    :title="$productName ?? 'Product Details'"
    :metaDescription="($productDescription ?? 'Custom product') . ' by Top 5 Percent in Joliet, IL. Veteran-owned custom signage and apparel.'"
>
    @livewire('catalog.product-detail', ['slug' => $slug])

    <x-ui.banner-medium-sunburst />

    <x-sections.top5pct-same-day-service />

    <x-sections.why-choose-us />
    <x-sections.cta-free-quote />
    <x-sections.cta-ready-to-get-started />
    <x-sections.review-banner />
    <x-sections.map-section />
</x-layouts.page>
