@props([
    'collectionSlug' => null,
    'parentSlug' => null,
    'alwaysShow' => false,
])

@if($alwaysShow || config('client.product_grid_enabled'))
<section id="all-products" class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        @livewire('catalog.collection-page', [
            'collectionSlug' => $collectionSlug,
            'parentSlug' => $parentSlug,
        ])
    </div>
</section>
@endif
