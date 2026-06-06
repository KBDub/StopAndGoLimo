@props(['banners' => [], 'id' => null])

<section class="py-10 bg-white" @if($id) id="{{ $id }}" @endif>
    <div class="max-w-7xl mx-auto px-6">
        <x-ui.card-lp-banner-images :banners="$banners" />
    </div>
</section>
