@props([
    'collectionSlug' => null,
    'parentSlug' => null,
    'alwaysShow' => false,
])

<div id="all-products"></div>
@if($alwaysShow || config('client.product_grid_enabled'))
<section class="py-10 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        @livewire('catalog.collection-page', [
            'collectionSlug' => $collectionSlug,
            'parentSlug' => $parentSlug,
        ])
    </div>
</section>
@endif
