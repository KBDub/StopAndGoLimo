@push('structured-data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Product",
    "name": "{{ e($productName ?? 'Custom Product') }}",
    "description": "{{ e($productDescription ?? 'Custom product by Top 5 Percent in Joliet, IL.') }}",
    "url": "https://www.top5pct.com/products/{{ e($slug ?? '') }}",
    "image": "https://www.top5pct.com/images/og-tags/top5pct-og-home.jpg",
    "brand": {
        "@type": "Brand",
        "name": "Top 5 Percent, LLC"
    },
    "offers": {
        "@type": "Offer",
        "url": "https://www.top5pct.com/products/{{ e($slug ?? '') }}",
        "priceCurrency": "USD",
        "availability": "https://schema.org/InStock",
        "itemCondition": "https://schema.org/NewCondition",
        "seller": { "@id": "https://www.top5pct.com" }
    }
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.top5pct.com" },
        { "@type": "ListItem", "position": 2, "name": "Products", "item": "https://www.top5pct.com/collections" },
        { "@type": "ListItem", "position": 3, "name": "{{ e($productName ?? 'Product') }}", "item": "https://www.top5pct.com/products/{{ e($slug ?? '') }}" }
    ]
}
</script>
@endpush
<x-layouts.page
    :title="$productName ?? 'Product Details'"
    :metaDescription="\Illuminate\Support\Str::limit(($productDescription ?? 'Custom product') . ' by Top 5 Percent in Joliet, IL. Veteran-owned custom signage and apparel.', 155)"
>
    @livewire('catalog.product-detail', ['slug' => $slug])

    <x-ui.banner-medium-sunburst />

    <x-sections.top5pct-same-day-service />

    <x-sections.cta-quadruple-button-banner />

    <x-sections.why-choose-us />
    <x-ui.artwork-dropzone class="max-w-2xl mx-auto" />
    <x-ui.banner-thin-sunburst />
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
