<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Top 5 Percent - Custom Signage & Apparel | Joliet, IL</title>
    <meta name="description" content="Premium custom signage and apparel in Joliet, IL. Veteran-owned business specializing in custom shirts, signs, decals, and vehicle graphics.">
    <meta property="og:title" content="Top 5 Percent - Custom Signage & Apparel">
    <meta property="og:description" content="Premium custom signage and apparel in Joliet, IL.">
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

    <x-layout.top-notification-bar message="Free Shipping on Orders Over $50!" link="/custom-shirts" linkText="Shop Now" />

    <x-layout.navigation-bar currentPage="home" />

    <main>
        <x-sections.hero />
        <x-sections.our-services />
        <x-sections.why-choose-us />
        <x-sections.design-it-yourself />
        <x-sections.cta-ready-to-get-started />
    </main>

    <x-layout.footer />
</body>
</html>
