@props(['banners' => []])

<section class="py-10 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <x-ui.card-lp-banner-images :banners="$banners" />
    </div>
</section>
