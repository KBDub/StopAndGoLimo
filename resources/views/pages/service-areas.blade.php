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
        '/images/limo/stopandgo-sedan-ord-airport.jpg',
        '/images/limo/stopandgo-suv-midway-pickup.jpg',
        '/images/limo/stopandgo-fleet-new-lenox.jpg',
        '/images/limo/stopandgo-vehicle-joliet.jpg',
        '/images/limo/stopandgo-chicago-ohare-transfer.jpg',
    ];
@endphp

<x-layouts.page
    title="Service Areas | Airport Transfers, New Lenox, IL"
    metaDescription="Stop and Go Limo serves New Lenox, Joliet, Plainfield, Romeoville, Bolingbrook, Naperville, and communities across Will and DuPage County. Airport transfers to O'Hare and Midway. Serving since 2009."
    currentPage="about">

    {{-- Hero --}}
    <x-sections.category-hero
        preHeading="Serving Chicagoland Since 2009"
        heading="Service Areas"
        headingAccent="New Lenox & Chicagoland"
        description="Stop and Go Limo has provided professional airport transfers and luxury ground transportation to O'Hare (ORD) and Midway (MDW) for clients across Will and DuPage County and the greater Chicagoland area since 2009."
        primaryButtonText="Book a Ride"
        primaryButtonHref="/contact"
        secondaryButtonText="Call (815) 585-6922"
        secondaryButtonHref="tel:+18155856922"
        image="/images/limo/stopandgo-fleet-new-lenox.jpg"
    :compactButtons="true"
    />

    <x-ui.banner-medium-champagne />

    {{-- Company intro --}}
    <x-sections.card-image-with-text
        title="Proudly Serving New Lenox, Will and DuPage County, and Greater Chicagoland"
        image="/images/limo/stopandgo-fleet-new-lenox.jpg"
        alt="Stop and Go Limo fleet serving New Lenox and Chicagoland airport transfers"
        imagePosition="right"
    >
        <p>
            Since 2009, <a href="/" class="link-notification">Stop and Go Limo</a> has delivered safe, on-time <a href="/airport-transfers" class="link-notification">airport transportation</a> to businesses,
            travelers, and families throughout Will and DuPage County and greater Chicagoland.
            We are based in New Lenox, Illinois, at 400 E Lincoln Hwy Suite 101A, and we take pride in serving our
            local community with professional, punctual service, whether that is a single airport pickup or a
            recurring corporate account.
        </p>
        <p>
            We offer sedan, SUV, and stretch limousine transfers to O'Hare (ORD) and Midway (MDW), as well as
            corporate shuttles, event transportation, and point-to-point transfers throughout Chicagoland.
            Whether you need a ride for one person or a group, we have the right vehicle and the right team to
            get you there on time.
        </p>
        <p>
            We value our community ties in {{ $hq['city'] }},
            {{ implode(', ', $primaryNames) }},
            {{ implode(', ', $secondaryNames) }},
            and the greater Chicagoland area. If you are local, we are your ride.
        </p>
        <p>
            <a href="/contact" class="link-notification">Contact us</a> to confirm availability for your area.
            Call <a href="tel:+18155856922" class="text-azure hover:text-azure-dark underline decoration-azure/30 hover:decoration-azure transition-colors">(815) 585-6922</a>
            or book online. Your trip is our priority.
        </p>
    </x-sections.card-image-with-text>

    <x-ui.banner-thin-navy />

    {{-- Service Locations grid --}}
    <section class="py-14 bg-white">
        <div class="max-w-7xl mx-auto px-6">

            <div class="text-center mb-10">
                <h2 class="text-3xl md:text-4xl font-bold text-navy font-head">Our Service Locations</h2>
                <div class="h-1 w-16 bg-champagne mx-auto mt-3 mb-4"></div>
                <p class="text-slate max-w-2xl mx-auto">
                    We proudly serve communities across Will and DuPage County and greater Chicagoland.
                    Click any city to learn more about airport transfers in your area.
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
                    title="Airport transfers from {{ $city['city'] }}, {{ $city['state'] }}"
                    href="{{ $url }}"
                    image="{{ $img }}"
                    titleSize="text-sm"
                >
                    <div class="flex flex-col gap-2 mt-2">
                        <a
                            href="{{ $url }}"
                            class="block w-full text-center px-4 py-2.5 text-sm bg-navy text-champagne font-semibold hover:bg-navy-dark hover:shadow-lg transition-all hover:-translate-y-0.5 font-head"
                        >
                            Transfers from {{ $city['city'] }}
                        </a>
                        <button
                            type="button"
                            @click="window.dispatchEvent(new CustomEvent('open-contact-modal'))"
                            class="block w-full text-center px-4 py-2.5 text-sm bg-champagne text-navy font-semibold hover:shadow-champagne-lg transition-all hover:-translate-y-0.5 font-head"
                        >
                            Book a Ride
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
