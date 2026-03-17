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

                <div class="flex flex-col gap-y-3">
                    @php
                        $benefits = [
                            'We carry a five star rating on Google',
                            'We offer same day service on most orders',
                            'Our pricing is always transparent and upfront',
                            'We have no minimums on custom shirts',
                            'Our in-house design team handles your artwork',
                            'We use top quality materials and premium inks',
                            'We produce every order in-house from start to finish',
                            'Our team brings 40+ years of combined experience',
                            'We send a free proof before any production',
                            'We welcome rush orders with fast turnaround',
                            'Our bulk pricing is available on all products',
                        ];
                    @endphp
                    @foreach($benefits as $benefit)
                        @if($loop->even)
                            <div class="flex items-center justify-end gap-2 whitespace-nowrap">
                                <span class="text-body-sm text-charcoal font-medium">{{ $benefit }}</span>
                                <div class="w-1 h-5 bg-sunburst shrink-0"></div>
                            </div>
                        @else
                            <div class="flex items-center gap-2 whitespace-nowrap">
                                <div class="w-1 h-5 bg-sunburst shrink-0"></div>
                                <span class="text-body-sm text-charcoal font-medium">{{ $benefit }}</span>
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

                <div class="flex flex-col gap-y-3 mb-6">
                    @php
                        $services = [
                            ['label' => 'Custom Shirts', 'detail' => 'DTF, screen print, embroidery, vinyl, no minimums'],
                            ['label' => 'Turnaround', 'detail' => 'Same day available, typical 1-3 business days'],
                            ['label' => 'Signs and Banners', 'detail' => 'Business signage, yard signs, banners'],
                            ['label' => 'Vehicle Graphics', 'detail' => 'Wraps, lettering, magnets, DOT decals'],
                            ['label' => 'Guarantee', 'detail' => 'Quality workmanship, satisfaction guaranteed'],
                        ];
                    @endphp
                    @foreach($services as $service)
                        @if($loop->even)
                            <div class="flex items-center justify-end gap-2 whitespace-nowrap">
                                <p class="text-body-sm text-charcoal">
                                    <span class="font-semibold">{{ $service['label'] }}:</span> {{ $service['detail'] }}
                                </p>
                                <div class="w-1 h-5 bg-azure shrink-0"></div>
                            </div>
                        @else
                            <div class="flex items-center gap-2 whitespace-nowrap">
                                <div class="w-1 h-5 bg-azure shrink-0"></div>
                                <p class="text-body-sm text-charcoal">
                                    <span class="font-semibold">{{ $service['label'] }}:</span> {{ $service['detail'] }}
                                </p>
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
                    <x-ui.button-gold-gradient href="/contact">
                        Schedule Same Day Service
                    </x-ui.button-gold-gradient>
                </div>
            </div>

        </div>
    </div>
</section>
