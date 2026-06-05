@props([
    'title'           => 'Stop & Go Airport Shuttle Service Inc.',
    'metaDescription' => 'Premium limousine and airport shuttle service. Open 24/7 in New Lenox, Naperville, Joliet, Chicago and all of Illinois.',
    'currentPage'     => '',
    'ogImage'         => null,
    'ogImageAlt'      => null,
    'ogType'          => 'website',
    'canonical'       => null,
    'noIndex'         => false,
])
@php
    $resolvedOgImage    = $ogImage
        ? 'https://www.stopandgolimo.com' . $ogImage
        : 'https://www.stopandgolimo.com/images/og-tags/stopngo-og-home.jpg';
    $resolvedOgImageAlt = $ogImageAlt ?? 'Stop & Go Airport Shuttle Service Inc. — Premium Limousine & Airport Shuttle';
    $resolvedCanonical  = $canonical ?? request()->url();
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }} | Stop & Go Limo</title>
    <meta name="description" content="{{ $metaDescription }}">
    <meta name="robots" content="{{ $noIndex ? 'noindex,nofollow' : 'index,follow' }}">
    <link rel="canonical" href="{{ $resolvedCanonical }}">
    <meta name="author" content="Stop & Go Airport Shuttle Service Inc.">
    <meta name="geo.region" content="US-IL">
    <meta name="geo.placename" content="New Lenox, IL">
    <meta name="geo.position" content="41.5138;-87.9828">
    <meta name="ICBM" content="41.5138, -87.9828">
    <meta name="theme-color" content="#15162C">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <meta property="og:title" content="{{ $title }}">
    <meta property="og:description" content="{{ $metaDescription }}">
    <meta property="og:type" content="{{ $ogType }}">
    <meta property="og:url" content="{{ $resolvedCanonical }}">
    <meta property="og:image" content="{{ $resolvedOgImage }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="{{ $resolvedOgImageAlt }}">
    <meta property="og:site_name" content="Stop &amp; Go Limo">
    <meta property="og:locale" content="en_US">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title }}">
    <meta name="twitter:description" content="{{ $metaDescription }}">
    <meta name="twitter:image" content="{{ $resolvedOgImage }}">
    <meta name="twitter:image:alt" content="{{ $resolvedOgImageAlt }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">
    @php
        $manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);
        $cssFile  = $manifest['resources/css/app.css']['file'] ?? null;
        $jsFile   = $manifest['resources/js/app.js']['file'] ?? null;
    @endphp
    @if($cssFile)
    <link rel="stylesheet" href="/build/{{ $cssFile }}">
    @endif
    @if($jsFile)
    <script type="module" src="/build/{{ $jsFile }}"></script>
    @endif
    @verbatim
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "Stop & Go Airport Shuttle Service Inc.",
        "alternateName": "Stop & Go Limo",
        "@id": "https://www.stopandgolimo.com",
        "url": "https://www.stopandgolimo.com",
        "telephone": "(815) 585-6922",
        "priceRange": "$$",
        "description": "Premium limousine and airport shuttle service serving New Lenox, Naperville, Joliet, Chicago and all of Illinois. Open 24/7.",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "New Lenox",
            "addressRegion": "IL",
            "addressCountry": "US"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 41.5138,
            "longitude": -87.9828
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
            "opens": "00:00",
            "closes": "23:59"
        },
        "areaServed": [
            {"@type": "City", "name": "New Lenox", "addressRegion": "IL"},
            {"@type": "City", "name": "Naperville", "addressRegion": "IL"},
            {"@type": "City", "name": "Joliet", "addressRegion": "IL"},
            {"@type": "City", "name": "Chicago", "addressRegion": "IL"}
        ]
    }
    </script>
    @endverbatim
    @stack('structured-data')
</head>
<body class="font-body antialiased bg-navy text-cloud">

    <header class="sticky top-0 z-50">
        <x-layout.notification-bar-stopngo />
        <x-ui.banner-thin-champagne />
        <x-layout.navigation-bar-stopngo :currentPage="$currentPage" />
    </header>

    <main>
        {{ $slot }}
    </main>

    <x-layout.footer-stopngo />

    @stack('modals')
</body>
</html>
