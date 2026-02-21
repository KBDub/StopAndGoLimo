<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Top 5 Percent - Custom Signage & Apparel' }} | Top 5 Percent</title>
    <meta name="description" content="{{ $metaDescription ?? 'Premium custom signage and apparel in Joliet, IL. Veteran-owned business.' }}">
    <meta property="og:title" content="{{ $title ?? 'Top 5 Percent' }}">
    <meta property="og:description" content="{{ $metaDescription ?? 'Premium custom signage and apparel in Joliet, IL.' }}">
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

    <header class="sticky top-0 z-50">
        <x-layout.top-notification-bar
            message="{{ $notificationMessage ?? 'Free Shipping on Orders Over $50!' }}"
            link="{{ $notificationLink ?? '/collections/custom-apparel/custom-shirts' }}"
            linkText="{{ $notificationLinkText ?? 'Shop Now' }}"
        />
        <x-ui.banner-thin-sunburst />
        <x-ui.banner-thin-charcoal />
        <x-layout.navigation-bar currentPage="{{ $currentPage ?? '' }}" />
        <x-ui.banner-thin-sunburst />
        <x-ui.banner-thin-charcoal />
    </header>

    <main>
        {{ $slot }}
    </main>

    <x-layout.footer />
</body>
</html>
