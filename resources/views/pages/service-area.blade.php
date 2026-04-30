@php
    use App\Data\PrimaryLocations;

    $hq             = PrimaryLocations::HQ;
    $primaryCities  = PrimaryLocations::PRIMARY;
    $secondaryCities = PrimaryLocations::SECONDARY;
    $allCities      = array_merge($primaryCities, $secondaryCities);

    $primaryNames   = array_column($primaryCities, 'city');
    $secondaryNames = array_column($secondaryCities, 'city');

    $cardImages = [
        '/images/business-signs/top5pct-banner-business-signs-joliet-plainfield-shorewood.jpg',
        '/images/custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg',
        '/images/business-signs/top5pct-business-signs-joliet-plainfield-romeoville.jpg',
        '/images/business-signs/top5pct-business-signs-joliet-shorewood-channahon.jpg',
        '/images/business-signs/top5pct-business-signs-joliet-shorewood-crest-hill.jpg',
    ];
@endphp

<x-layouts.page
    title="Service Areas | Top 5 Percent Custom Signage & Apparel | Joliet IL"
    metaDescription="Top 5 Percent serves Joliet, Plainfield, Romeoville, Bolingbrook, Naperville, Aurora, and communities across Will County and greater Chicagoland. Veteran-owned custom signage and apparel."
    currentPage="about">

    {{-- Hero --}}
    <x-sections.category-hero
        preHeading="Veteran Owned • Joliet, IL"
        heading="Service Areas"
        headingAccent="Joliet & Chicagoland"
        description="Veteran-owned since 2017, Top 5 Percent delivers premium custom signage and apparel to businesses, schools, teams, and organizations throughout Will County and the greater Chicagoland area."
        primaryButtonText="Get a Free Quote"
        primaryButtonHref="/contact"
        secondaryButtonText="Call (815) 349-8600"
        secondaryButtonHref="tel:+18153498600"
        image="/images/top5pct-banner-joliet.jpg"
    />

    <x-ui.banner-medium-sunburst />

    {{-- Company intro: centered headline + 2-column body copy / image --}}
    <section class="py-14 bg-linen">
        <div class="max-w-7xl mx-auto px-6">

            <h2 class="text-2xl md:text-3xl font-bold text-center mb-10 leading-snug" style="color:var(--color-sunburst)">
                Top 5 Percent, providing premium custom signage and apparel across<br class="hidden md:block"> Joliet, Will County, and the greater Chicagoland area.
            </h2>

            <div class="grid lg:grid-cols-2 gap-12 items-center">

                {{-- Left: body copy --}}
                <div class="space-y-4 text-charcoal-light leading-relaxed">
                    <p>
                        Since 2017, Top 5 Percent has delivered high-quality custom signage and apparel to businesses,
                        schools, sports teams, and organizations throughout Will County and greater Chicagoland.
                        We are a veteran-owned shop based in Joliet, Illinois, and we take pride in serving
                        our local community with fast turnaround and personal service.
                    </p>
                    <p>
                        We offer custom t-shirts, hoodies, embroidery, business signs, banners, vehicle graphics,
                        promotional products, and white-label storefronts. Whether you need five shirts or five
                        hundred signs, we have the equipment and the team to deliver on time.
                    </p>
                    <p>
                        We value our community ties in {{ $hq['city'] }},
                        {{ implode(', ', $primaryNames) }},
                        {{ implode(', ', $secondaryNames) }},
                        and the greater Chicagoland area.
                        If you are nearby, stop in. If not, we ship.
                    </p>
                    <p>
                        Call us at
                        <a href="tel:+18153498600" class="font-semibold hover:underline" style="color:var(--color-sunburst)">(815) 349-8600</a>
                        or
                        <a href="/contact" class="font-semibold hover:underline" style="color:var(--color-sunburst)">request a free quote online</a>.
                        Your brand is our business.
                    </p>
                </div>

                {{-- Right: image --}}
                <div class="overflow-hidden shadow-lg">
                    <img
                        src="/images/business-signs/top5pct-banner-business-signs-joliet-plainfield-shorewood.jpg"
                        alt="Custom business signs and apparel produced by Top 5 Percent in Joliet Illinois"
                        class="w-full h-full object-cover"
                    />
                </div>

            </div>
        </div>
    </section>

    <x-ui.banner-thin-charcoal />

    {{-- Our Service Locations — 3-column responsive card grid --}}
    <section class="py-14 bg-white">
        <div class="max-w-7xl mx-auto px-6">

            <div class="text-center mb-10">
                <h2 class="text-3xl md:text-4xl font-bold text-charcoal">Our Service Locations</h2>
                <div class="h-1 w-16 bg-sunburst mx-auto mt-3 mb-4"></div>
                <p class="text-charcoal-light max-w-2xl mx-auto">
                    We proudly serve communities across Will County and greater Chicagoland.
                    Click any city to start your custom order.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($allCities as $index => $city)
                @php $img = $cardImages[$index % count($cardImages)]; @endphp
                <div class="flex flex-col bg-white border border-charcoal/10 shadow-sm hover:shadow-gold-lg hover:-translate-y-1 transition-all overflow-hidden">

                    {{-- Card image --}}
                    <div class="overflow-hidden h-48">
                        <img
                            src="{{ $img }}"
                            alt="Custom signage and apparel in {{ $city['city'] }}, {{ $city['state'] }}"
                            class="w-full h-full object-cover hover:scale-105 transition-transform duration-500"
                            loading="lazy"
                        />
                    </div>

                    {{-- Card body --}}
                    <div class="flex flex-col flex-1 p-5">
                        <h3 class="text-xl font-bold text-charcoal mb-4">
                            {{ $city['city'] }}, {{ $city['state'] }}
                        </h3>
                        <div class="flex flex-col gap-2 mt-auto">
                            <a
                                href="/contact?city={{ urlencode($city['city']) }}"
                                class="block text-center py-2.5 px-4 bg-charcoal text-white font-semibold text-sm hover:bg-charcoal/80 transition-colors"
                            >
                                Custom Signage in {{ $city['city'] }}
                            </a>
                            <a
                                href="/contact?service=quote&city={{ urlencode($city['city']) }}"
                                class="block text-center py-2.5 px-4 font-semibold text-sm text-charcoal hover:opacity-90 transition-opacity bg-sunburst"
                            >
                                Get a Free Quote
                            </a>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>

        </div>
    </section>

    <x-ui.banner-thin-charcoal />

    {{-- Map + zip checker --}}
    <x-sections.map-section />

    {{-- CTA --}}
    <x-sections.cta-quadruple-button-banner />

</x-layouts.page>
