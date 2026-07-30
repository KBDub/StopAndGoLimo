@props([
    'title'           => 'Stop & Go Airport Shuttle Service, Inc.',
    'metaDescription' => 'Premium airport shuttle and limousine service in New Lenox, Naperville, Joliet, and all of Illinois. Serving O\'Hare and Midway airports. Available 24/7.',
    'currentPage'     => '',
    'ogImage'         => null,
    'ogImageAlt'      => null,
    'ogType'          => 'website',
    'canonical'       => null,
    'noIndex'         => false,
])
@php
    $resolvedOgImage    = $ogImage
        ? 'https://newlenoxlimoservice.com' . $ogImage
        : 'https://newlenoxlimoservice.com/images/og-tags/stopngo-og-home.jpg';
    $resolvedOgImageAlt = $ogImageAlt ?? 'Stop & Go Airport Shuttle Service, Inc. — Premium limousine and airport transportation in Illinois.';
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
    <title>{{ $title }}{{ str_contains($title, 'Stop & Go Airport Shuttle Service, Inc.') ? '' : ' – Stop & Go Airport Shuttle Service, Inc.' }}</title>
    <meta name="description" content="{{ $metaDescription }}">
    <meta name="robots" content="{{ $noIndex ? 'noindex,nofollow' : 'index,follow' }}">
    <link rel="canonical" href="{{ $resolvedCanonical }}">
    <meta name="author" content="Stop & Go Airport Shuttle Service, Inc.">
    <meta name="geo.region" content="US-IL">
    <meta name="geo.placename" content="New Lenox, IL">
    <meta name="geo.position" content="41.4977;-87.9573">
    <meta name="ICBM" content="41.4977, -87.9573">
    <meta name="theme-color" content="#DCB57E">
    <link rel="icon" href="/images/favicons/stop-and-go-airport-shuttle-service-favicon.png" type="image/x-icon">
    <meta property="og:title" content="{{ $title }}{{ str_contains($title, 'Stop & Go Airport Shuttle Service, Inc.') ? '' : ' – Stop & Go Airport Shuttle Service, Inc.' }}">
    <meta property="og:description" content="{{ $metaDescription }}">
    <meta property="og:type" content="{{ $ogType }}">
    <meta property="og:url" content="{{ $resolvedCanonical }}">
    <meta property="og:image" content="{{ $resolvedOgImage }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="{{ $resolvedOgImageAlt }}">
    <meta property="og:site_name" content="{{ $clientConfig->business_name_short }}">
    <meta property="og:locale" content="en_US">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title }}">
    <meta name="twitter:description" content="{{ $metaDescription }}">
    <meta name="twitter:image" content="{{ $resolvedOgImage }}">
    <meta name="twitter:image:alt" content="{{ $resolvedOgImageAlt }}">
    @php
        $manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);
        $cssFile = $manifest['resources/css/app.css']['file'] ?? null;
        $jsFile = $manifest['resources/js/app.js']['file'] ?? null;
    @endphp
    {{-- Google Fonts: preconnect + non-blocking stylesheet (replaces render-blocking @import chain in app.css) --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;400;600;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700;800&display=swap">
    @if($cssFile)
    <link rel="stylesheet" href="/build/{{ $cssFile }}">
    @endif
    @if($jsFile)
    <script type="module" src="/build/{{ $jsFile }}"></script>
    @endif
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "LocalBusiness",
        "name": "{!! $clientConfig->business_name !!}",
        "image": "https://newlenoxlimoservice.com/images/stopngo-logo.png",
        "@@id": "https://newlenoxlimoservice.com",
        "url": "https://newlenoxlimoservice.com",
        "telephone": "{!! $clientConfig->phone_raw !!}",
        "priceRange": "$$",
        "address": {
            "@@type": "PostalAddress",
            "streetAddress": "400 E Lincoln Hwy Suite 101A",
            "addressLocality": "New Lenox",
            "addressRegion": "IL",
            "postalCode": "60451",
            "addressCountry": "US"
        },
        "geo": {
            "@@type": "GeoCoordinates",
            "latitude": 41.4977,
            "longitude": -87.9573
        },
        "openingHoursSpecification": {
            "@@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
            "opens": "00:00",
            "closes": "23:59"
        },
        "areaServed": [
            { "@@type": "City", "name": "Aurora",      "addressRegion": "IL", "addressCountry": "US" },
            { "@@type": "City", "name": "Joliet",      "addressRegion": "IL", "addressCountry": "US" },
            { "@@type": "City", "name": "Mokena",      "addressRegion": "IL", "addressCountry": "US" },
            { "@@type": "City", "name": "Oswego",      "addressRegion": "IL", "addressCountry": "US" },
            { "@@type": "City", "name": "Chicago",     "addressRegion": "IL", "addressCountry": "US" },
            { "@@type": "City", "name": "Minooka",     "addressRegion": "IL", "addressCountry": "US" },
            { "@@type": "City", "name": "Lockport",    "addressRegion": "IL", "addressCountry": "US" },
            { "@@type": "City", "name": "Frankfort",   "addressRegion": "IL", "addressCountry": "US" },
            { "@@type": "City", "name": "New Lenox",   "addressRegion": "IL", "addressCountry": "US" },
            { "@@type": "City", "name": "Oak Brook",   "addressRegion": "IL", "addressCountry": "US" },
            { "@@type": "City", "name": "Shorewood",   "addressRegion": "IL", "addressCountry": "US" },
            { "@@type": "City", "name": "Crest Hill",  "addressRegion": "IL", "addressCountry": "US" },
            { "@@type": "City", "name": "Homer Glen",  "addressRegion": "IL", "addressCountry": "US" },
            { "@@type": "City", "name": "Naperville",  "addressRegion": "IL", "addressCountry": "US" },
            { "@@type": "City", "name": "Plainfield",  "addressRegion": "IL", "addressCountry": "US" },
            { "@@type": "City", "name": "Romeoville",  "addressRegion": "IL", "addressCountry": "US" },
            { "@@type": "City", "name": "Bolingbrook", "addressRegion": "IL", "addressCountry": "US" },
            { "@@type": "City", "name": "Orland Park", "addressRegion": "IL", "addressCountry": "US" },
            { "@@type": "City", "name": "Tinley Park", "addressRegion": "IL", "addressCountry": "US" },
            { "@@type": "City", "name": "Manhattan",   "addressRegion": "IL", "addressCountry": "US" }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "WebSite",
        "name": "{!! $clientConfig->business_name !!}",
        "url": "https://newlenoxlimoservice.com",
        "potentialAction": {
            "@@type": "SearchAction",
            "target": {
                "@@type": "EntryPoint",
                "urlTemplate": "https://newlenoxlimoservice.com/service-areas?q={search_term_string}"
            },
            "query-input": "required name=search_term_string"
        }
    }
    </script>
    @stack('structured-data')
    @if(config('services.recaptcha.site_key'))
    <script src="https://www.google.com/recaptcha/api.js?render=explicit" async defer></script>
    @endif
    @livewireStyles
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" referrerpolicy="no-referrer" media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" referrerpolicy="no-referrer"></noscript>
</head>
<body class="font-body antialiased bg-white text-navy overflow-x-clip">

    @if(config('services.gtm.id'))
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id={{ config('services.gtm.id') }}"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    @endif

    <x-nav.navbar />

    <main>
        {{ $slot }}
    </main>

    {{--<x-layout.footer />--}}

    {{-- Global quote modal — triggered by Book Now in the top notification bar --}}
    <x-ui.modal-quote />

    @livewireScripts
</body>
</html>
