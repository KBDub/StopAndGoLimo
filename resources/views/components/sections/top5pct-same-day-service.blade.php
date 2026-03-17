@props([
    'serviceType' => 'custom-signage-apparel',
    'displayServiceType' => 'Custom Signage & Apparel',
])

<section class="py-10 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-8">

            {{-- Left card: brand differentiators --}}
            <div class="border-t-4 border-sunburst bg-white shadow-md p-8">
                <div class="inline-block mb-4">
                    <h2 class="text-h2 font-bold text-charcoal mb-2">The Top 5 Percent Difference</h2>
                    <div class="h-1 bg-sunburst"></div>
                </div>
                <p class="text-body-sm text-charcoal-light mb-6">
                    Veteran owned, in-house manufacturing, experienced and professional.
                    Local businesses and residents choose Top 5 Percent for:
                </p>

                <div class="grid sm:grid-cols-2 gap-x-8 gap-y-3">
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
                        <div class="flex items-center gap-1.5">
                            <svg class="w-5 h-5 shrink-0" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="20" height="20" fill="#FFC20E"/>
                                <path d="M5 10.5L8.5 14L15 7" stroke="white" stroke-width="2.2" stroke-linecap="square" stroke-linejoin="miter"/>
                            </svg>
                            <span class="text-body-sm text-charcoal font-medium">{{ $benefit }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Right card: services overview --}}
            <div class="border-t-4 border-azure bg-linen-light shadow-md p-8">
                <div class="inline-block mb-5">
                    <h2 class="text-h2 font-bold text-charcoal mb-2">
                        <span class="text-sunburst">Top 5 Percent</span> Will Handle Your {{ $displayServiceType }} Needs, Same Day
                    </h2>
                    <div class="h-1 bg-sunburst"></div>
                </div>

                <h4 class="text-h4 font-semibold text-charcoal mb-3">Overview of Services:</h4>

                <div class="space-y-3 mb-6">
                    @php
                        $services = [
                            ['label' => 'Custom Shirts', 'detail' => 'DTF, screen print, embroidery, vinyl - no minimums'],
                            ['label' => 'Turnaround', 'detail' => 'Same day available, typical 1-3 business days'],
                            ['label' => 'Signs & Banners', 'detail' => 'Business signage, yard signs, banners, trade show displays'],
                            ['label' => 'Vehicle Graphics', 'detail' => 'Wraps, lettering, magnets, DOT compliance decals'],
                            ['label' => 'Guarantee', 'detail' => 'Quality workmanship backed by our satisfaction promise'],
                        ];
                    @endphp
                    @foreach($services as $service)
                        <div class="flex items-center gap-1.5">
                            <svg class="w-5 h-5 shrink-0" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="20" height="20" fill="#FFC20E"/>
                                <path d="M5 10.5L8.5 14L15 7" stroke="white" stroke-width="2.2" stroke-linecap="square" stroke-linejoin="miter"/>
                            </svg>
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
