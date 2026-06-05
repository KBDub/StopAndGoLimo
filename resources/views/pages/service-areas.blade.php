@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "Stop and Go Airport Shuttle Service Inc",
    "url": "https://www.newlenoxlimoservice.com/service-areas",
    "telephone": "(815) 585-6922",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "400 E Lincoln Hwy Suite 101A",
        "addressLocality": "New Lenox",
        "addressRegion": "IL",
        "postalCode": "60451",
        "addressCountry": "US"
    },
    "areaServed": [
        { "@type": "City", "name": "New Lenox",   "addressRegion": "IL", "addressCountry": "US" },
        { "@type": "City", "name": "Plainfield",  "addressRegion": "IL", "addressCountry": "US" },
        { "@type": "City", "name": "Joliet",      "addressRegion": "IL", "addressCountry": "US" },
        { "@type": "City", "name": "Naperville",  "addressRegion": "IL", "addressCountry": "US" },
        { "@type": "City", "name": "Aurora",      "addressRegion": "IL", "addressCountry": "US" },
        { "@type": "City", "name": "Bolingbrook", "addressRegion": "IL", "addressCountry": "US" },
        { "@type": "City", "name": "Lockport",    "addressRegion": "IL", "addressCountry": "US" },
        { "@type": "City", "name": "Frankfort",   "addressRegion": "IL", "addressCountry": "US" },
        { "@type": "City", "name": "Mokena",      "addressRegion": "IL", "addressCountry": "US" },
        { "@type": "City", "name": "Orland Park", "addressRegion": "IL", "addressCountry": "US" }
    ],
    "description": "Stop and Go Airport Shuttle Service Inc provides 24/7 luxury limo and airport shuttle service across New Lenox, Plainfield, Joliet, Naperville, Aurora, and the greater Southwest suburbs of Chicago, Illinois."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Service Areas | Stop and Go Limo — Southwest Chicago Suburbs, IL",
    "url": "https://www.newlenoxlimoservice.com/service-areas",
    "description": "24/7 luxury limo and airport shuttle service in New Lenox, Plainfield, Joliet, Naperville, Aurora, and surrounding Southwest suburbs. Call (815) 585-6922."
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",          "item": "https://www.newlenoxlimoservice.com" },
        { "@type": "ListItem", "position": 2, "name": "Service Areas", "item": "https://www.newlenoxlimoservice.com/service-areas" }
    ]
}
</script>
@endverbatim
@endpush

<x-layouts.page
    title="Service Areas | Stop and Go Limo — Southwest Chicago Suburbs, IL"
    metaDescription="24/7 luxury limo and airport shuttle service in New Lenox, Plainfield, Joliet, Naperville, Aurora, and surrounding Southwest suburbs. Safe, comfortable, on-time. Call (815) 585-6922."
    currentPage="service-areas"
    ogImage="/images/heroes/hero-service-areas.jpg"
    ogImageAlt="Luxury limousine service across the Southwest suburbs of Chicago, Illinois"
>

    {{-- ── Hero ──────────────────────────────────────────────────────────────── --}}
    <x-sections.category-hero
        heading="Service"
        headingBold="Areas"
        subtitle="24/7 luxury limo and airport shuttle service across the Southwest suburbs"
        buttonText="Book a Ride"
        buttonHref="/contact"
        image="/images/heroes/hero-service-areas.jpg"
        imagePosition="center center"
    />

    {{-- ── Intro: New Lenox Limo Service ────────────────────────────────────── --}}
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-12 items-center">

                <div>
                    <p class="text-champagne font-head font-semibold mb-3">
                        New Lenox, IL Limo Service
                    </p>
                    <div class="inline-block mb-6">
                        <h2 class="text-h2 font-bold text-navy font-head mb-2">
                            Stop &amp; Go Airport Shuttle Service
                        </h2>
                        <div class="h-1 bg-champagne"></div>
                    </div>
                    <p class="text-slate mb-4 leading-relaxed">
                        Travel around the Southwest suburbs with ease. Whether you need an airport
                        shuttle, a wedding limo, a party bus rental, or a corporate car service,
                        we provide safe, comfortable, and on-time transportation for any occasion.
                        Our experienced drivers make every ride smooth and stress-free.
                    </p>
                    <p class="text-slate mb-6 leading-relaxed">
                        From elegant wedding limos to timely airport shuttles, fun party bus
                        rentals, and professional corporate car services, we deliver dependable
                        service every time. Our team focuses on safety, punctuality, and customer
                        satisfaction so your travel experience is always effortless.
                    </p>
                    <a
                        href="/about-us"
                        class="text-azure font-semibold hover:underline underline-offset-4"
                    >
                        About us &rarr;
                    </a>
                </div>

                <div class="rounded-xl overflow-hidden shadow-lg">
                    <img
                        src="/images/content/airport-transfer.png"
                        alt="Professional airport shuttle service in New Lenox, Illinois"
                        class="w-full h-auto object-cover"
                        loading="lazy"
                    />
                </div>

            </div>
        </div>
    </section>

    {{-- ── Why Choose Us ─────────────────────────────────────────────────────── --}}
    <x-sections.why-choose-us />

    {{-- ── What We Offer ─────────────────────────────────────────────────────── --}}
    <section class="py-16 bg-navy">
        <div class="max-w-7xl mx-auto px-6">

            <div class="text-center mb-12">
                <p class="text-champagne font-head font-semibold mb-3">
                    Our fleet, your occasion
                </p>
                <div class="inline-block">
                    <h2 class="text-h2 font-bold text-white font-head mb-2">What We Offer</h2>
                    <div class="h-1 bg-champagne"></div>
                </div>
            </div>

            @php
                $services = [
                    ['label' => 'Party Bus',                'href' => '/our-services'],
                    ['label' => 'Bus Rental',               'href' => '/our-services'],
                    ['label' => 'Airport Shuttle',          'href' => '/our-services'],
                    ['label' => 'Coach Buses',              'href' => '/our-services'],
                    ['label' => 'Chauffeur',                'href' => '/our-services'],
                    ['label' => 'Corporate Car',            'href' => '/our-services'],
                    ['label' => 'Town Car Rental',          'href' => '/our-services'],
                    ['label' => 'Wedding Limo',             'href' => '/our-services'],
                    ['label' => 'Special Events',           'href' => '/special-event-limousine'],
                ];
            @endphp

            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-3 gap-4">
                @foreach ($services as $service)
                    <a
                        href="{{ $service['href'] }}"
                        class="group block rounded-lg border border-white/20 bg-navy-light/30 hover:bg-champagne/10 hover:border-champagne/50 transition-all duration-200 px-6 py-5 text-center"
                    >
                        <span class="text-white font-head font-semibold text-base group-hover:text-champagne transition-colors">
                            {{ $service['label'] }}
                        </span>
                    </a>
                @endforeach
            </div>

        </div>
    </section>

    {{-- ── FAQ ──────────────────────────────────────────────────────────────── --}}
    <x-sections.page-faq
        heading="Frequently Asked Questions"
        label="FAQ"
        image="/images/content/elegant-wedding-rides.png"
        imageAlt="Elegant wedding limousine service in the Southwest suburbs of Chicago"
        :items="[
            [
                'question' => 'Can I book a limo for wine tours or sightseeing trips?',
                'answer'   => 'Yes! We offer hourly rentals for sightseeing, wine tours, or city tours, letting you explore the Southwest suburbs and nearby attractions in comfort and style.',
            ],
            [
                'question' => 'Do you have vehicles for group travel?',
                'answer'   => 'Absolutely. We offer luxury SUVs, stretch limousines, and party buses, perfect for small groups or large parties traveling together.',
            ],
            [
                'question' => 'Are your limousines pet-friendly?',
                'answer'   => 'Yes! We welcome well-behaved pets in our vehicles. Please let us know when booking so we can prepare your ride.',
            ],
            [
                'question' => 'Can I customize my limo experience?',
                'answer'   => 'Definitely. From music playlists and onboard refreshments to decorations for special events, we tailor every ride to your preferences.',
            ],
            [
                'question' => 'Do you offer last-minute bookings?',
                'answer'   => 'Yes, depending on availability. Contact us directly and we will do our best to accommodate last-minute requests for luxury transportation.',
            ],
            [
                'question' => 'Is your service safe during nighttime travel?',
                'answer'   => 'Absolutely. All vehicles are regularly maintained and our professional drivers are trained for safe night and early morning travel, giving you complete peace of mind.',
            ],
        ]"
    />

    {{-- ── Areas We Proudly Serve ────────────────────────────────────────────── --}}
    <section class="py-16 bg-cloud-light">
        <div class="max-w-7xl mx-auto px-6">

            <div class="text-center mb-12">
                <p class="text-champagne font-head font-semibold mb-3">
                    Southwest Chicago suburbs
                </p>
                <div class="inline-block">
                    <h2 class="text-h2 font-bold text-navy font-head mb-2">Areas We Proudly Serve</h2>
                    <div class="h-1 bg-champagne"></div>
                </div>
                <p class="text-slate mt-4 max-w-2xl mx-auto">
                    We provide door-to-door service throughout the Southwest and West suburbs of Chicago.
                    Don't see your city? Call us — we likely serve it.
                </p>
            </div>

            @php
                $cities = array_merge(
                    \App\Data\PrimaryLocations::PRIMARY,
                    \App\Data\PrimaryLocations::SECONDARY
                );
                usort($cities, fn ($a, $b) => strcmp($a['city'], $b['city']));
            @endphp

            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-3">
                @foreach ($cities as $city)
                    @php
                        $slug = \Illuminate\Support\Str::slug($city['city'] . '-' . $city['state']);
                    @endphp
                    <a
                        href="{{ route('service-areas.show', $slug) }}"
                        class="block text-center rounded-lg bg-white border border-cloud hover:border-champagne hover:shadow-md transition-all duration-200 px-4 py-3"
                    >
                        <span class="text-navy font-head font-semibold text-sm hover:text-champagne transition-colors">
                            {{ $city['city'] }}, {{ $city['state'] }}
                        </span>
                    </a>
                @endforeach
            </div>

        </div>
    </section>

    {{-- ── CTA ───────────────────────────────────────────────────────────────── --}}
    <x-sections.cta-ready-to-get-started />

</x-layouts.page>
