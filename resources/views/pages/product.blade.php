<x-layouts.page
    :title="$productName ?? 'Product Details'"
    :metaDescription="($productDescription ?? 'Custom product') . ' by Top 5 Percent in Joliet, IL. Veteran-owned custom signage and apparel.'"
>
    @livewire('catalog.product-detail', ['slug' => $slug])
</x-layouts.page>
