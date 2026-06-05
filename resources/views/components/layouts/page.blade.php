@props([
    'title'          => 'Top 5 Percent - Custom Signage & Apparel',
    'metaDescription' => 'Premium custom signage and apparel in Joliet, IL. Veteran-owned business.',
    'currentPage'    => '',
    'ogImage'        => null,
    'ogImageAlt'     => null,
    'ogType'         => 'website',
    'canonical'      => null,
    'noIndex'        => false,
])
@php
    $resolvedOgImage    = $ogImage
        ? 'https://www.top5pct.com' . $ogImage
        : 'https://www.top5pct.com/images/og-tags/top5pct-og-home.jpg';
    $resolvedOgImageAlt = $ogImageAlt ?? 'Top 5 Percent, LLC, Custom Signs & Apparel in Joliet, IL';
    $resolvedCanonical  = $canonical ?? request()->url();
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @if(config('services.gtm.id'))
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','{{ config("services.gtm.id") }}');</script>
    @endif
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }} | Top 5 Percent, LLC</title>
    <meta name="description" content="{{ $metaDescription }}">
    <meta name="robots" content="{{ $noIndex ? 'noindex,nofollow' : 'index,follow' }}">
    <link rel="canonical" href="{{ $resolvedCanonical }}">
    <meta name="author" content="Top 5 Percent, LLC">
    <meta name="geo.region" content="US-IL">
    <meta name="geo.placename" content="Joliet, IL">
    <meta name="geo.position" content="41.5250;-88.0817">
    <meta name="ICBM" content="41.5250, -88.0817">
    <meta name="theme-color" content="#FFC20E">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <meta property="og:title" content="{{ $title }}">
    <meta property="og:description" content="{{ $metaDescription }}">
    <meta property="og:type" content="{{ $ogType }}">
    <meta property="og:url" content="{{ $resolvedCanonical }}">
    <meta property="og:image" content="{{ $resolvedOgImage }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="{{ $resolvedOgImageAlt }}">
    <meta property="og:site_name" content="Top 5 Percent">
    <meta property="og:locale" content="en_US">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@@top5pct">
    <meta name="twitter:title" content="{{ $title }}">
    <meta name="twitter:description" content="{{ $metaDescription }}">
    <meta name="twitter:image" content="{{ $resolvedOgImage }}">
    <meta name="twitter:image:alt" content="{{ $resolvedOgImageAlt }}">
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
    @verbatim
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "Top 5 Percent, LLC",
        "image": "https://www.top5pct.com/images/top5pct-logo.png",
        "@id": "https://www.top5pct.com",
        "url": "https://www.top5pct.com",
        "telephone": "815-349-8600",
        "priceRange": "$",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "121 Springfield Avenue, Suite 103",
            "addressLocality": "Joliet",
            "addressRegion": "IL",
            "postalCode": "60435",
            "addressCountry": "US"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 41.5250,
            "longitude": -88.0817
        },
        "founder": {
            "@type": "Person",
            "name": "Ezra",
            "jobTitle": "Owner & Founder"
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "5",
            "reviewCount": "100"
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],
            "opens": "08:30",
            "closes": "18:00"
        },
        "sameAs": [
            "https://www.facebook.com/top5percent/",
            "https://www.instagram.com/top5percentllc/",
            "https://www.twitter.com/top5percentllc/",
            "https://www.youtube.com/channel/UCAhLYjgb9745wv_yfmxSe6w/",
            "https://www.pinterest.com/top5percentllc/",
            "https://www.linkedin.com/in/top5percent/",
            "https://www.google.com/maps?cid=15797523837573086431"
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "Top 5 Percent",
        "url": "https://www.top5pct.com",
        "potentialAction": {
            "@type": "SearchAction",
            "target": {
                "@type": "EntryPoint",
                "urlTemplate": "https://www.top5pct.com/collections?q={search_term_string}"
            },
            "query-input": "required name=search_term_string"
        }
    }
    </script>
    @endverbatim
    @stack('structured-data')
</head>
<style>
    :root {
        --brand-primary:   #2C2C2C;
        --brand-secondary: #FFC20E;
        --brand-accent:    #3273DC;
    }
</style>
<body class="font-sans antialiased bg-linen text-charcoal overflow-x-hidden">

    @if(config('services.gtm.id'))
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id={{ config('services.gtm.id') }}"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    @endif

    <header class="sticky top-0 z-50">
        {{-- <x-layout.top-notification-bar /> --}}
        <x-layout.navigation-bar currentPage="{{ $currentPage ?? '' }}" />
    </header>

    <main>
        {{ $slot }}
    </main>

    {{--<x-layout.footer />--}}

</body>
</html>
