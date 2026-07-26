@props([
    'title'           => 'Stop & Go Airport Shuttle Service, Inc.',
    'metaDescription' => 'Premium limousine and party bus service for Chicago sports events and special occasions. Flat-rate pricing. 24/7 service across Chicagoland.',
    'ogImage'         => null,
    'ogImageAlt'      => null,
    'canonical'       => null,
])
@php
    $resolvedOgImage    = $ogImage
        ? 'https://newlenoxlimoservice.com' . $ogImage
        : 'https://newlenoxlimoservice.com/images/og-tags/stopngo-og-home.jpg';
    $resolvedOgImageAlt = $ogImageAlt ?? 'Stop & Go Airport Shuttle Service, Inc. — Premium limousine and airport transportation in Illinois.';
    $resolvedCanonical  = $canonical ?? request()->url();
    $manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);
    $cssFile  = $manifest['resources/css/app.css']['file'] ?? null;
    $jsFile   = $manifest['resources/js/app.js']['file'] ?? null;
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
    <title>{{ $title }} – Stop & Go Airport Shuttle Service, Inc.</title>
    <meta name="description" content="{{ $metaDescription }}">
    <meta name="robots" content="noindex,nofollow">
    <link rel="canonical" href="{{ $resolvedCanonical }}">
    <meta name="author" content="Stop & Go Airport Shuttle Service, Inc.">
    <meta name="geo.region" content="US-IL">
    <meta name="geo.placename" content="New Lenox, IL">
    <meta name="theme-color" content="#DCB57E">
    <link rel="icon" href="/images/favicons/stop-and-go-airport-shuttle-service-favicon.png" type="image/x-icon">
    <meta property="og:title" content="{{ $title }} – Stop & Go Airport Shuttle Service, Inc.">
    <meta property="og:description" content="{{ $metaDescription }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ $resolvedCanonical }}">
    <meta property="og:image" content="{{ $resolvedOgImage }}">
    <meta property="og:image:alt" content="{{ $resolvedOgImageAlt }}">
    <meta property="og:site_name" content="Stop & Go Airport Shuttle Service, Inc.">
    <meta property="og:locale" content="en_US">
    @if($cssFile)
    <link rel="stylesheet" href="/build/{{ $cssFile }}">
    @endif
    @if($jsFile)
    <script type="module" src="/build/{{ $jsFile }}"></script>
    @endif
    @stack('structured-data')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" referrerpolicy="no-referrer">
    @livewireStyles
</head>
<body class="font-body antialiased" style="background: var(--white); color: var(--navy); overflow-x: clip;">

    @if(config('services.gtm.id'))
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id={{ config('services.gtm.id') }}"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    @endif

    {{-- LP Sticky Header — logo + phone + single CTA. No nav links by design. --}}
    <header style="position: sticky; top: 0; z-index: 100; background: var(--navy); border-bottom: 3px solid var(--champagne);">
        <div style="max-width: 1280px; margin: 0 auto; padding: 0.65rem 1.5rem; display: flex; align-items: center; justify-content: space-between; gap: 1rem;">
            <a href="/"
               aria-label="Stop & Go Airport Shuttle Service, Inc. — Return to main site"
               style="display: flex; align-items: center; text-decoration: none; flex-shrink: 0;">
                <img src="/images/logos/stop-and-go-inverted-logo-large.svg"
                     alt="Stop & Go Airport Shuttle Service, Inc."
                     style="height: 46px; width: auto;">
            </a>
            <div style="display: flex; align-items: center; gap: 0.75rem; flex-wrap: wrap; justify-content: flex-end;">
                <a href="tel:+17083154445"
                   class="font-head"
                   style="font-size: clamp(0.85rem, 2.5vw, 1.05rem); font-weight: 700; color: var(--champagne); text-decoration: none; white-space: nowrap;">
                    <i class="fa fa-phone" style="margin-right: 0.35rem; font-size: 0.9em;"></i>(708) 315-4445
                </a>
                <button onclick="window.dispatchEvent(new Event('open-modal-quote'))"
                        class="font-head"
                        style="background: var(--champagne); color: var(--navy); border: none; padding: 0.55rem 1.2rem; font-size: 0.875rem; font-weight: 700; cursor: pointer; white-space: nowrap; line-height: 1.4; flex-shrink: 0;">
                    Get Free Quote
                </button>
            </div>
        </div>
    </header>

    <main>
        {{ $slot }}
    </main>

    {{-- LP Footer — address, phone, copyright only. No nav links. --}}
    <footer style="background: var(--navy); border-top: 3px solid var(--champagne); padding: 2.5rem 1.5rem; text-align: center;">
        <div style="max-width: 820px; margin: 0 auto;">
            <a href="/" style="display: inline-block; margin-bottom: 1.25rem;">
                <img src="/images/logos/stop-and-go-inverted-logo-large.svg"
                     alt="Stop & Go Airport Shuttle Service, Inc."
                     style="height: 56px; width: auto;">
            </a>
            <p class="font-body"
               style="color: var(--cloud); font-size: 0.9rem; margin-bottom: 0.5rem; line-height: 1.6;">
                Stop &amp; Go Airport Shuttle Service, Inc.
                <span style="color: var(--slate); margin: 0 0.4rem;">|</span>
                400 E Lincoln Hwy Suite 101A, New Lenox, IL 60451
            </p>
            <p class="font-body" style="margin-bottom: 1.25rem; line-height: 1.6;">
                <a href="tel:+17083154445"
                   style="color: var(--champagne); text-decoration: none; font-weight: 700; font-size: 1rem;">
                    (708) 315-4445
                </a>
                <span style="color: var(--slate); margin: 0 0.5rem;">|</span>
                <a href="/"
                   style="color: var(--cloud); text-decoration: underline; text-decoration-color: var(--cloud); text-underline-offset: 3px; font-size: 0.875rem;">
                    Visit Our Main Site
                </a>
            </p>
            <p class="font-body" style="color: var(--slate); font-size: 0.78rem; line-height: 1.5;">
                &copy; {{ date('Y') }} Stop &amp; Go Airport Shuttle Service, Inc. All rights reserved.
                Licensed &amp; Insured. Serving all of Chicagoland.
            </p>
        </div>
    </footer>

    <x-ui.modal-quote />
    @livewireScripts
</body>
</html>
