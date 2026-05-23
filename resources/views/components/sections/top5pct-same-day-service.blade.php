@props([
    'serviceType' => 'custom-signage-apparel',
    'displayServiceType' => 'Custom Signage & Apparel',
])

<section class="py-10 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-8">

            {{-- Left card: brand differentiators --}}
            <div class="border-t-4 border-sunburst bg-white shadow-md p-8 overflow-hidden">
                <h2 class="text-h2 font-bold text-charcoal mb-3">
                    The <span class="text-sunburst">Top 5 Percent</span> Difference
                </h2>
                <p class="text-body-sm text-charcoal-light mb-6">
                    In-house manufacturing, experienced and professional.
                    Here is why businesses and residents across Chicagoland choose us:
                </p>

                <div class="flex flex-col gap-y-1.5">
                    @php
                        $benefits = [
                            'We carry a <a href="/reviews" class="link-notification"><strong>five star rating</strong></a> on Google',
                            'We offer <strong>same day service</strong> on most orders',
                            'Our pricing is <strong>always transparent</strong> and upfront',
                            'We have <strong>no minimums</strong> on <a href="/custom-apparel" class="link-notification">custom shirts</a>',
                            'Our <a href="/design-services" class="link-notification"><strong>in-house design team</strong></a> handles your artwork',
                            'We use <strong>top quality materials</strong> and premium inks',
                            'We produce every order <strong>in-house</strong> from start to finish',
                            'Our team brings <strong>40+ years</strong> of combined experience',
                            'We welcome <a href="/contact" class="link-notification"><strong>rush orders</strong></a> with fast turnaround',
                        ];
                    @endphp
                    @foreach($benefits as $benefit)
                        @if($loop->even)
                            <div class="flex items-center justify-end gap-2 whitespace-nowrap">
                                <span class="text-body-sm text-charcoal">{!! $benefit !!}</span>
                                <div class="w-1 h-5 bg-sunburst shrink-0"></div>
                            </div>
                        @else
                            <div class="flex items-center gap-2 whitespace-nowrap">
                                <div class="w-1 h-5 bg-sunburst shrink-0"></div>
                                <span class="text-body-sm text-charcoal">{!! $benefit !!}</span>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

            {{-- Right card: services overview --}}
            <div class="border-t-4 border-azure bg-linen-light shadow-md p-8 overflow-hidden">
                <h2 class="text-h2 font-bold text-charcoal mb-5">
                    <span class="text-sunburst">Top 5 Percent</span> Will Handle Your {{ $displayServiceType }} Needs, Same Day
                </h2>

                <h4 class="text-h4 font-semibold text-charcoal mb-3">Overview of Services:</h4>

                <div class="flex flex-col gap-y-1.5 mb-6">
                    @php
                        $services = [
                            'Custom shirts using <a href="/custom-apparel/printing-options/dtf-printing" class="link-notification">DTF</a>, <a href="/custom-apparel/printing-options/screen-printing" class="link-notification">screen print</a>, <a href="/custom-apparel/printing-options/embroidery" class="link-notification">embroidery</a>, and <a href="/custom-apparel/specialty-materials/vinyl" class="link-notification">vinyl</a>, no minimums',
                            'Same day turnaround available on most orders',
                            '<a href="/signs" class="link-notification">Business signage</a>, <a href="/signs/ground-signs/yard-signs" class="link-notification">yard signs</a>, and <a href="/signs/business-signs/banners" class="link-notification">banners</a> made in-house',
                            '<a href="/vehicle-graphics/automobile-graphics" class="link-notification">Wraps</a>, <a href="/vehicle-graphics/automobile-graphics" class="link-notification">lettering</a>, <a href="/vehicle-graphics/vehicle-magnets" class="link-notification">magnets</a>, and <a href="/vehicle-graphics/dot-decals" class="link-notification">DOT decals</a>',
                            'Quality workmanship and satisfaction guaranteed on every order',
                        ];
                    @endphp
                    @foreach($services as $service)
                        @if($loop->even)
                            <div class="flex items-center justify-end gap-2 whitespace-nowrap">
                                <span class="text-body-sm text-charcoal">{!! $service !!}</span>
                                <div class="w-1 h-5 bg-azure shrink-0"></div>
                            </div>
                        @else
                            <div class="flex items-center gap-2 whitespace-nowrap">
                                <div class="w-1 h-5 bg-azure shrink-0"></div>
                                <span class="text-body-sm text-charcoal">{!! $service !!}</span>
                            </div>
                        @endif
                    @endforeach
                </div>

                <p class="text-xs text-charcoal-light leading-relaxed text-center mb-6">
                    Founded in 2017, Top 5 Percent - Serving Joliet, Plainfield, Romeoville,
                    Bolingbrook, Lockport, Shorewood, Channahon, Minooka, New Lenox, Mokena,
                    Frankfort, Homer Glen, Lemont, Naperville, Aurora, Oswego, Yorkville,
                    Crest Hill, and the greater Chicagoland area.
                    Friendly, reliable service.
                    <a href="tel:+18153498600" class="text-azure hover:text-azure-dark transition-colors font-medium">(815) 349-8600</a>
                </p>

                <div class="text-center">
                    <x-ui.button-gold-gradient onclick="window.dispatchEvent(new CustomEvent('open-contact-modal'))">
                        Schedule Same Day Service
                    </x-ui.button-gold-gradient>
                </div>
            </div>

        </div>
    </div>
</section>
