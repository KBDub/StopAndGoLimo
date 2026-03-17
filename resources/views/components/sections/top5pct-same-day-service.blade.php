@props([
    'serviceType' => 'custom-signage-apparel',
    'displayServiceType' => 'Custom Signage & Apparel',
])

<section class="py-10 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-8">

            {{-- Left card: brand differentiators --}}
            <div class="border-t-4 border-sunburst bg-white shadow-md p-8 overflow-hidden">
                <h2 class="text-h2 font-bold text-charcoal mb-3">The Top 5 Percent Difference</h2>
                <p class="text-body-sm text-charcoal-light mb-6">
                    Veteran owned, in-house manufacturing, experienced and professional.
                    Local businesses and residents choose Top 5 Percent for:
                </p>

                <div class="flex flex-col gap-y-2">
                    @php
                        $benefits = [
                            'Five Star Rating on Google',
                            'Same Day Service Available',
                            'Transparent, Upfront Pricing',
                            'No Minimum Orders on Custom Shirts',
                            'In-House Graphic Design Team',
                            'Top Quality Materials and Premium Inks',
                            'Veteran and Minority Owned Business',
                            '40+ Years Combined Experience',
                            'Free Artwork Proof Before Production',
                            'Rush Orders Welcome',
                            'Bulk Pricing Available on All Products',
                        ];
                    @endphp
                    @foreach($benefits as $benefit)
                        @if($loop->even)
                            <div class="flex items-center gap-2 whitespace-nowrap ml-10">
                        @else
                            <div class="flex items-center gap-2 whitespace-nowrap ml-0">
                        @endif
                            <div class="w-3 h-3 bg-sunburst shrink-0 rotate-45"></div>
                            <span class="text-body-sm text-charcoal font-medium">{{ $benefit }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Right card: services overview --}}
            <div class="border-t-4 border-azure bg-linen-light shadow-md p-8 overflow-hidden">
                <h2 class="text-h2 font-bold text-charcoal mb-5">
                    <span class="text-sunburst">Top 5 Percent</span> Will Handle Your {{ $displayServiceType }} Needs, Same Day
                </h2>

                <h4 class="text-h4 font-semibold text-charcoal mb-3">Overview of Services:</h4>

                <div class="flex flex-col gap-y-2 mb-6">
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
                            <div class="flex items-center gap-2 whitespace-nowrap ml-10">
                        @else
                            <div class="flex items-center gap-2 whitespace-nowrap ml-0">
                        @endif
                            <div class="w-3 h-3 bg-sunburst shrink-0 rotate-45"></div>
                            <p class="text-body-sm text-charcoal">
                                <span class="font-semibold">{{ $service['label'] }}:</span> {{ $service['detail'] }}
                            </p>
                        </div>
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
