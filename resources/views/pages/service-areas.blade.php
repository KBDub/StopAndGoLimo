@php
    use App\Data\PrimaryLocations;
    use Illuminate\Support\Str;

    $hq              = PrimaryLocations::HQ;
    $primaryCities   = PrimaryLocations::PRIMARY;
    $secondaryCities = PrimaryLocations::SECONDARY;
    $allCities       = array_merge($primaryCities, $secondaryCities);

    $primaryNames    = array_column($primaryCities, 'city');
    $secondaryNames  = array_column($secondaryCities, 'city');

    $cardImages = [
        '/images/business-signs/top5pct-banner-business-signs-joliet-plainfield-shorewood.jpg',
        '/images/custom-shirts/top5pct-banner-custom-apparel-custom-shirts-custom-hoodies-custom-caps.jpg',
        '/images/business-signs/top5pct-business-signs-joliet-plainfield-romeoville.jpg',
        '/images/business-signs/top5pct-business-signs-joliet-shorewood-channahon.jpg',
        '/images/business-signs/top5pct-business-signs-joliet-shorewood-crest-hill.jpg',
    ];
@endphp

<x-layouts.page
    title="Service Areas | Joliet, IL"
    metaDescription="Top 5 Percent serves Joliet, Plainfield, Romeoville, Bolingbrook, Naperville, Aurora, and communities across Will and DuPage County and the greater Chicagoland area. Veteran-owned."
    currentPage="about">

    {{-- Hero --}}
    <x-sections.category-hero
        preHeading="Veteran Owned • Joliet, IL"
        heading="Service Areas"
        headingAccent="Joliet & Chicagoland"
        description="Veteran-owned since 2017, Top 5 Percent delivers premium custom signage and apparel to businesses, schools, teams, and organizations throughout Will and DuPage County and the greater Chicagoland area."
        primaryButtonText="Get a Free Quote"
        primaryButtonHref="/contact"
        secondaryButtonText="Call (815) 349-8600"
        secondaryButtonHref="tel:+18153498600"
        image="/images/top5pct-banner-joliet.jpg"
    :compactButtons="true"
    />

    <x-ui.banner-medium-champagne />

    {{-- Company intro, branded card with float image --}}
    <x-sections.card-image-with-text
        title="Proudly Serving Joliet, Will and DuPage County, and Greater Chicagoland"
        image="/images/business-signs/top5pct-banner-business-signs-joliet-plainfield-shorewood.jpg"
        alt="Custom business signs and apparel produced by Top 5 Percent in Joliet Illinois"
        imagePosition="right"
    >
        <p>
            Since 2017, <a href="/" class="link-notification">Top 5 Percent</a> has delivered high-quality <a href="/custom-apparel" class="link-notification">custom apparel</a> and signage to businesses,
            schools, sports teams, and organizations throughout Will and DuPage County and greater Chicagoland.
            We are a veteran-owned shop based in Joliet, Illinois, and we take pride in serving our
            local community with fast turnaround and personal service on everything from a single <a href="/signs" class="link-notification">business sign</a> to a full multi-piece print order.
        </p>
        <p>
            We offer custom t-shirts, hoodies, <a href="/custom-apparel/printing-options/embroidery" class="link-notification">embroidery</a>, business signs, banners, vehicle graphics,
            promotional products, and white-label storefronts. Whether you need five shirts or five hundred
            signs, we have the equipment and the team to deliver on time, every time.
        </p>
        <p>
            We value our community ties in {{ $hq['city'] }},
            {{ implode(', ', $primaryNames) }},
            {{ implode(', ', $secondaryNames) }},
            and the greater Chicagoland area. If you are nearby, stop in. If not, we ship.
        </p>
        <p class="mb-4">
            We also produce <a href="/promotional-items" class="link-notification">promotional items</a> and <a href="/vehicle-graphics" class="link-notification">vehicle graphics</a> for businesses across every city we serve, from branded mugs and tote bags for trade shows to vehicle wraps and DOT decals for commercial fleets.
        </p>
        <p>
            <a href="/contact" class="link-notification">Contact us</a> to discuss your project and confirm same-day availability for your area. Call us at <a href="tel:+18153498600" class="text-azure hover:text-azure-dark underline decoration-azure/30 hover:decoration-azure transition-colors">(815) 349-8600</a>
            or request a free quote online. Your brand is our business.
        </p>
    </x-sections.card-image-with-text>

    <x-ui.banner-thin-navy />

    {{-- Our Service Locations, 3-column responsive card grid --}}
    <section class="py-14 bg-white">
        <div class="max-w-7xl mx-auto px-6">

            <div class="text-center mb-10">
                <h2 class="text-3xl md:text-4xl font-bold text-charcoal">Our Service Locations</h2>
                <div class="h-1 w-16 bg-sunburst mx-auto mt-3 mb-4"></div>
                <p class="text-charcoal-light max-w-2xl mx-auto">
                    We proudly serve communities across Will and DuPage County and greater Chicagoland.
                    Click any city to learn more about our services in your area.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($allCities as $index => $city)
                @php
                    $img  = $cardImages[$index % count($cardImages)];
                    $slug = Str::slug($city['city'] . '-' . $city['state']);
                    $url  = '/service-areas/' . $slug;
                @endphp

                <x-ui.card-product
                    title="Proudly serving {{ $city['city'] }}, {{ $city['state'] }}"
                    href="{{ $url }}"
                    image="{{ $img }}"
                    titleSize="text-sm"
                >
                    <div class="flex flex-col gap-2 mt-2">
                        <a
                            href="{{ $url }}"
                            class="block w-full text-center px-4 py-2.5 text-sm bg-charcoal text-sunburst font-semibold hover:bg-charcoal-dark hover:shadow-lg transition-all hover:-translate-y-0.5"
                        >
                            Custom Signage in {{ $city['city'] }}
                        </a>
                        <button
                            type="button"
                            @click="window.dispatchEvent(new CustomEvent('open-contact-modal'))"
                            class="block w-full text-center px-4 py-2.5 text-sm bg-sunburst text-charcoal font-semibold hover:bg-sunburst-dark hover:shadow-gold-lg transition-all hover:-translate-y-0.5"
                        >
                            Get a Free Quote
                        </button>
                    </div>
                </x-ui.card-product>

                @endforeach
            </div>

        </div>
    </section>

    <x-ui.banner-thin-navy />

    {{-- CTA above the map --}}
    <x-sections.cta-quadruple-button-banner />

    {{-- Map + zip checker --}}
    <x-sections.map-section />

</x-layouts.page>
