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
        <section class="bg-gold-gradient py-20">
            <div class="max-w-6xl mx-auto px-6 text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-charcoal mb-6">
                    Custom Signage & Apparel
                </h1>
                <h2 class="text-xl md:text-2xl text-charcoal/80 mb-8">
                    Premium Quality. Veteran Owned. Joliet, IL.
                </h2>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/custom-shirts" class="inline-block px-8 py-4 bg-charcoal text-white font-semibold rounded-lg hover:shadow-lg transition-all hover:-translate-y-0.5">
                        Shop Custom Apparel
                    </a>
                    <a href="/business-signs" class="inline-block px-8 py-4 bg-white text-charcoal font-semibold rounded-lg border-2 border-charcoal hover:bg-linen transition-all hover:-translate-y-0.5">
                        View Our Signs
                    </a>
                </div>
            </div>
        </section>

        <section class="py-16 bg-white">
            <div class="max-w-6xl mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-4">Our Services</h2>
                <div class="w-24 h-1 bg-gold-gradient mx-auto mb-12 rounded"></div>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-linen p-8 rounded-xl text-center hover:shadow-gold transition-all hover:-translate-y-1">
                        <div class="w-16 h-16 bg-sunburst rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8 text-charcoal" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Custom Apparel</h3>
                        <p class="text-slate">T-shirts, hoodies, hats, and more with vinyl, rhinestone, glitter, and embroidery options.</p>
                    </div>
                    <div class="bg-linen p-8 rounded-xl text-center hover:shadow-gold transition-all hover:-translate-y-1">
                        <div class="w-16 h-16 bg-sunburst rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8 text-charcoal" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Business Signs</h3>
                        <p class="text-slate">Banners, yard signs, posters, table runners, and professional business signage.</p>
                    </div>
                    <div class="bg-linen p-8 rounded-xl text-center hover:shadow-gold transition-all hover:-translate-y-1">
                        <div class="w-16 h-16 bg-sunburst rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8 text-charcoal" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Vehicle Graphics</h3>
                        <p class="text-slate">Automobile graphics, vehicle magnets, DOT decals, and full vehicle wraps.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-gold-gradient py-16">
            <div class="max-w-6xl mx-auto px-6 text-center">
                <h2 class="text-3xl font-bold text-charcoal mb-4">Ready to Get Started?</h2>
                <p class="text-charcoal/80 mb-8 text-lg max-w-2xl mx-auto">Contact us today for a free quote on your custom project. Veteran-owned and proudly serving Joliet, IL.</p>
                <a href="/contact" class="inline-block px-8 py-4 bg-charcoal text-white font-semibold rounded-lg hover:shadow-lg transition-all hover:-translate-y-0.5">
                    Contact Us Today
                </a>
            </div>
        </section>
    </main>

    <x-layout.footer />
</body>
</html>
