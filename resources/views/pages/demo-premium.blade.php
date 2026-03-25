<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Premium Components - Top 5 Percent</title>
    <meta name="description" content="Premium UI component showcase for Top 5 Percent Custom Signage & Apparel.">
    <meta name="theme-color" content="#FFC20E">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    @php
        $manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);
        $cssFile = $manifest['resources/css/app.css']['file'] ?? null;
        $jsFile = $manifest['resources/js/app.js']['file'] ?? null;
    @endphp
    @if($cssFile)
    <link rel="stylesheet" href="/build/{{ $cssFile }}">
    @endif
    @if($jsFile)
    <script type="module" src="/build/{{ $jsFile }}"></script>
    @endif
</head>
<body class="font-sans antialiased bg-linen text-charcoal">
    <x-layout.top-notification-bar message="Deal of the Day: 20% Off Custom T-Shirts!" link="/custom-shirts" linkText="Shop Now" />
    <x-ui.banner-thin-sunburst />
    <x-ui.banner-thin-charcoal />
    <x-layout.navigation-bar currentPage="demo" />
    <x-ui.banner-thin-sunburst />
    <x-ui.banner-thin-charcoal />

    <main>
        <section class="bg-white py-24 shadow-gold">
            <div class="max-w-7xl mx-auto px-6 text-center">
                <div class="inline-block mb-6">
                    <h2 class="text-3xl md:text-4xl font-bold text-charcoal mb-2">Premium components</h2>
                    <div class="h-1 bg-sunburst"></div>
                </div>
                <p class="text-lg text-charcoal-light max-w-2xl mx-auto">Phase 3.5 premium UI components: hover product cards, full-bleed hero CTAs, category grids, sticky add-to-cart, quick-view modal, and product image carousel.</p>
            </div>
        </section>

        <div class="bg-linen py-48 flex flex-col items-center justify-center gap-3">
            <p class="text-charcoal-light text-sm tracking-widest">Scroll down to preview each component</p>
            <svg class="w-6 h-6 text-sunburst animate-bounce" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
        </div>

        @include('partials.demo-premium.section-lp-banner-images')
        @include('partials.demo-premium.section-banner-slide-in')
        @include('partials.demo-premium.section-carousel-rotating-images')
        @include('partials.demo-premium.section-full-bleed-banners')
        @include('partials.demo-premium.section-hero-full-bleed')
        @include('partials.demo-premium.section-product-cards')
        @include('partials.demo-premium.section-category-grid')
        @include('partials.demo-premium.section-carousel')
        @include('partials.demo-premium.section-sticky-cart')
        @include('partials.demo-premium.section-quick-view')

        <section class="py-16 bg-gold-gradient">
            <div class="max-w-7xl mx-auto px-6 text-center">
                <h2 class="text-3xl font-bold mb-4 text-charcoal">Premium components complete</h2>
                <p class="text-lg text-charcoal/80 mb-8 max-w-2xl mx-auto">These components form the foundation of a premium e-commerce experience, ready for integration with Spatie Media Library image pipeline.</p>
                <x-ui.button-charcoal-gold href="/demo">View brand style guide</x-ui.button-charcoal-gold>
            </div>
        </section>
    </main>

    <x-layout.footer />
</body>
</html>
