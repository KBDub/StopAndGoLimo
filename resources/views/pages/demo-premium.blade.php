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
        <section class="bg-white py-16 shadow-gold">
            <div class="max-w-6xl mx-auto px-6 text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-charcoal mb-4">Premium components</h2>
                <div class="w-24 h-1 bg-gold-gradient mx-auto mb-6 rounded"></div>
                <p class="text-lg text-charcoal-light max-w-2xl mx-auto">Phase 3.5 premium UI components: hover product cards, full-bleed hero CTAs, category grids, sticky add-to-cart, quick-view modal, and product image carousel.</p>
            </div>
        </section>

        @include('pages.demo-premium.section-full-bleed-banners')
        @include('pages.demo-premium.section-hero-full-bleed')
        @include('pages.demo-premium.section-product-cards')
        @include('pages.demo-premium.section-category-grid')
        @include('pages.demo-premium.section-carousel')
        @include('pages.demo-premium.section-sticky-cart')
        @include('pages.demo-premium.section-quick-view')

        <section class="py-16 bg-gold-gradient">
            <div class="max-w-6xl mx-auto px-6 text-center">
                <h2 class="text-3xl font-bold mb-4 text-charcoal">Premium components complete</h2>
                <p class="text-lg text-charcoal/80 mb-8 max-w-2xl mx-auto">These components form the foundation of a premium e-commerce experience, ready for integration with Spatie Media Library image pipeline.</p>
                <a href="/demo" class="inline-block px-8 py-4 bg-charcoal text-white font-semibold rounded-lg hover:shadow-lg transition-all hover:-translate-y-0.5">View brand style guide</a>
            </div>
        </section>
    </main>

    <x-layout.footer />
</body>
</html>
