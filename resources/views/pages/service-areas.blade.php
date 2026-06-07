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

</x-layouts.page>
