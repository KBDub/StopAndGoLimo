<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Top 5 Percent - Custom Signage & Apparel | Joliet, IL</title>
    <meta name="description" content="Premium custom signage and apparel in Joliet, IL. Veteran-owned business specializing in custom shirts, signs, decals, and vehicle graphics.">
    <meta property="og:title" content="Top 5 Percent - Custom Signage & Apparel">
    <meta property="og:description" content="Premium custom signage and apparel in Joliet, IL.">
    <meta name="theme-color" content="#CDBF2B">
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
<body class="font-sans antialiased bg-white text-black">
    <header class="bg-gray-dark text-white">
        <nav class="container-custom flex items-center justify-between py-4">
            <a href="/" class="flex items-center">
                <img src="/images/logos/top5-logo.gif" alt="Top 5 Percent" class="h-12">
            </a>
            <div class="hidden md:flex items-center space-x-6 text-sm font-semibold">
                <a href="#" class="text-white hover:text-primary transition-colors">Home</a>
                <a href="#" class="text-white hover:text-primary transition-colors">About Us</a>
                <a href="#" class="text-white hover:text-primary transition-colors">Custom Apparel</a>
                <a href="#" class="text-white hover:text-primary transition-colors">Signs</a>
                <a href="#" class="text-white hover:text-primary transition-colors">Decals</a>
                <a href="#" class="text-white hover:text-primary transition-colors">Vehicle Graphics</a>
                <a href="#" class="text-white hover:text-primary transition-colors">Contact Us</a>
            </div>
        </nav>
    </header>

    <main>
        <section class="bg-gray-dark text-white py-20">
            <div class="container-custom text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">
                    Custom Signage & Apparel
                </h1>
                <h2 class="text-xl md:text-2xl text-gray-300 mb-8">
                    Premium Quality. Veteran Owned. Joliet, IL.
                </h2>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#" class="btn btn-primary">
                        Shop Custom Apparel
                    </a>
                    <a href="#" class="btn btn-secondary text-white border-white hover:bg-white/10">
                        View Our Signs
                    </a>
                </div>
            </div>
        </section>

        <section class="py-16">
            <div class="container-custom">
                <h2 class="text-center mb-12">Our Services</h2>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-gray-light p-8 rounded-sm text-center">
                        <h3 class="mb-4">Custom Apparel</h3>
                        <p class="text-gray-medium">T-shirts, hoodies, hats, and more with vinyl, rhinestone, glitter, and embroidery options.</p>
                    </div>
                    <div class="bg-gray-light p-8 rounded-sm text-center">
                        <h3 class="mb-4">Business Signs</h3>
                        <p class="text-gray-medium">Banners, yard signs, posters, table runners, and professional business signage.</p>
                    </div>
                    <div class="bg-gray-light p-8 rounded-sm text-center">
                        <h3 class="mb-4">Vehicle Graphics</h3>
                        <p class="text-gray-medium">Automobile graphics, vehicle magnets, DOT decals, and full vehicle wraps.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-primary py-16">
            <div class="container-custom text-center">
                <h2 class="text-black mb-4">Ready to Get Started?</h2>
                <p class="text-black/80 mb-8 text-lg">Contact us today for a free quote on your custom project.</p>
                <a href="#" class="btn bg-black text-white hover:bg-gray-dark">
                    Contact Us
                </a>
            </div>
        </section>
    </main>

    <footer class="bg-gray-dark text-white py-12">
        <div class="container-custom">
            <div class="grid md:grid-cols-3 gap-8">
                <div>
                    <img src="/images/logos/top5-logo.gif" alt="Top 5 Percent" class="h-10 mb-4">
                    <p class="text-gray-400 text-sm">Veteran-owned custom signage and apparel business serving Joliet, IL and surrounding areas.</p>
                </div>
                <div>
                    <h5 class="text-primary mb-4">Quick Links</h5>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-primary transition-colors">Custom Apparel</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors">Signs & Banners</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors">Vehicle Graphics</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors">Portfolio</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="text-primary mb-4">Contact</h5>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li>Joliet, IL</li>
                        <li>info@top5pct.com</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-medium/30 mt-8 pt-8 text-center text-sm text-gray-400">
                <p>&copy; {{ date('Y') }} Top 5 Percent, LLC. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
