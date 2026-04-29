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
<style>
    :root {
        --brand-primary:   #2C2C2C;
        --brand-secondary: #FFC20E;
        --brand-accent:    #3273DC;
    }
</style>
<body class="font-sans antialiased bg-linen text-charcoal">

    <header class="sticky top-0 z-50">
        <x-layout.top-notification-bar />
        <x-ui.banner-thin-sunburst />
        <x-ui.banner-thin-charcoal />
        <x-layout.navigation-bar currentPage="{{ $currentPage ?? '' }}" />
        <x-ui.banner-thin-sunburst />
        <x-ui.banner-thin-charcoal />
    </header>

    <main>
        {{ $slot }}
    </main>

    @livewire('cart.cart-drawer')

    <x-layout.footer />

    @if(!in_array($currentPage ?? '', ['cart', 'checkout', 'order-confirmation']))
        <x-ui.contact-modal />
        <x-ui.custom-request-wizard />
    @endif
</body>
</html>
