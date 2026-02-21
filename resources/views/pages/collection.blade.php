<x-layouts.page
    :title="'Shop ' . ($collectionName ?? 'Products')"
    :metaDescription="'Browse our ' . ($collectionName ?? 'products') . ' collection. Custom signage and apparel by Top 5 Percent in Joliet, IL. Veteran-owned business.'"
>
    @livewire('catalog.collection-page', [
        'collectionSlug' => $collectionSlug,
        'parentSlug' => $parentSlug ?? null,
    ])
</x-layouts.page>
