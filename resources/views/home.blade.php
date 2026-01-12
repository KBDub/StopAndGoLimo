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
        <section class="bg-linen py-20 md:py-28">
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
                <div class="w-24 h-1 bg-sunburst mx-auto mb-12 rounded"></div>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-linen p-8 rounded-xl text-center hover:shadow-gold transition-all hover:-translate-y-1">
                        <div class="w-16 h-16 bg-sunburst rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8 text-charcoal" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Custom Apparel</h3>
                        <p class="text-charcoal-light mb-6">T-shirts, hoodies, hats, and more with vinyl, rhinestone, glitter, and embroidery options.</p>
                        <a href="/custom-shirts" class="text-azure hover:text-azure-dark font-semibold transition-colors">Learn More →</a>
                    </div>
                    <div class="bg-linen p-8 rounded-xl text-center hover:shadow-gold transition-all hover:-translate-y-1">
                        <div class="w-16 h-16 bg-sunburst rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8 text-charcoal" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Business Signs</h3>
                        <p class="text-charcoal-light mb-6">Banners, yard signs, posters, table runners, and professional business signage.</p>
                        <a href="/business-signs" class="text-azure hover:text-azure-dark font-semibold transition-colors">Learn More →</a>
                    </div>
                    <div class="bg-linen p-8 rounded-xl text-center hover:shadow-gold transition-all hover:-translate-y-1">
                        <div class="w-16 h-16 bg-sunburst rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8 text-charcoal" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-4">Vehicle Graphics</h3>
                        <p class="text-charcoal-light mb-6">Automobile graphics, vehicle magnets, DOT decals, and full vehicle wraps.</p>
                        <a href="/vehicle-graphics" class="text-azure hover:text-azure-dark font-semibold transition-colors">Learn More →</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-linen">
            <div class="max-w-6xl mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-4">Why Choose Top 5 Percent?</h2>
                <div class="w-24 h-1 bg-sunburst mx-auto mb-12 rounded"></div>
                <div class="grid md:grid-cols-4 gap-6">
                    <div class="bg-white p-6 rounded-xl text-center shadow-sm hover:shadow-gold transition-all">
                        <div class="w-12 h-12 bg-azure rounded-lg flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <h4 class="font-bold mb-2">Veteran Owned</h4>
                        <p class="text-charcoal-light text-sm">Proudly serving our community with honor and dedication.</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl text-center shadow-sm hover:shadow-gold transition-all">
                        <div class="w-12 h-12 bg-azure rounded-lg flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                            </svg>
                        </div>
                        <h4 class="font-bold mb-2">Premium Quality</h4>
                        <p class="text-charcoal-light text-sm">Only the finest materials and craftsmanship.</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl text-center shadow-sm hover:shadow-gold transition-all">
                        <div class="w-12 h-12 bg-azure rounded-lg flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h4 class="font-bold mb-2">Fast Turnaround</h4>
                        <p class="text-charcoal-light text-sm">Quick production without sacrificing quality.</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl text-center shadow-sm hover:shadow-gold transition-all">
                        <div class="w-12 h-12 bg-azure rounded-lg flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <h4 class="font-bold mb-2">Local Service</h4>
                        <p class="text-charcoal-light text-sm">Based in Joliet, IL serving the community.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-white">
            <div class="max-w-6xl mx-auto px-6">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h2 class="text-3xl font-bold mb-6">Design It Yourself</h2>
                        <p class="text-charcoal-light mb-6 text-lg">Use our easy online design tool to create custom t-shirts, signs, and more. Upload your own artwork or choose from thousands of templates.</p>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center gap-3">
                                <span class="w-6 h-6 bg-success rounded-full flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                </span>
                                <span class="text-charcoal">Easy-to-use design interface</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <span class="w-6 h-6 bg-success rounded-full flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                </span>
                                <span class="text-charcoal">Thousands of templates and clipart</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <span class="w-6 h-6 bg-success rounded-full flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                </span>
                                <span class="text-charcoal">Upload your own images and logos</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <span class="w-6 h-6 bg-success rounded-full flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                </span>
                                <span class="text-charcoal">Instant pricing as you design</span>
                            </li>
                        </ul>
                        <a href="/design-it-yourself" class="inline-block px-8 py-4 bg-azure text-white font-semibold rounded-lg hover:bg-azure-dark hover:shadow-lg transition-all hover:-translate-y-0.5">
                            Start Designing
                        </a>
                    </div>
                    <div class="bg-linen rounded-xl p-8 flex items-center justify-center min-h-[300px]">
                        <div class="text-center">
                            <div class="w-24 h-24 bg-sunburst rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-12 h-12 text-charcoal" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                </svg>
                            </div>
                            <p class="text-charcoal-light">Design Tool Preview</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-gold-gradient py-16">
            <div class="max-w-6xl mx-auto px-6 text-center">
                <h2 class="text-3xl font-bold text-charcoal mb-4">Ready to Get Started?</h2>
                <p class="text-charcoal/80 mb-8 text-lg max-w-2xl mx-auto">Contact us today for a free quote on your custom project. Veteran-owned and proudly serving Joliet, IL.</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/contact" class="inline-block px-8 py-4 bg-charcoal text-white font-semibold rounded-lg hover:shadow-lg transition-all hover:-translate-y-0.5">
                        Contact Us Today
                    </a>
                    <a href="tel:+18155551234" class="inline-block px-8 py-4 bg-white text-charcoal font-semibold rounded-lg border-2 border-charcoal hover:bg-linen transition-all hover:-translate-y-0.5">
                        Call (815) 555-1234
                    </a>
                </div>
            </div>
        </section>
    </main>

    <x-layout.footer />
</body>
</html>
