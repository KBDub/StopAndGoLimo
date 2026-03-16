@props([
    'serviceType' => 'custom-signage-apparel',
    'displayServiceType' => 'Custom Signage & Apparel',
])

<section class="py-10 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-8">

            <div class="border-t-4 border-sunburst bg-white shadow-md p-8">
                <h2 class="text-2xl md:text-3xl font-bold text-charcoal mb-3">
                    {{ $displayServiceType }} Services for Joliet Area Residents
                </h2>
                <p class="text-charcoal-light mb-6">
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
                            'Top-Quality Materials & Premium Inks',
                            'Veteran & Minority Owned Business',
                            '40+ Years Combined Experience',
                        ];
                    @endphp
                    @foreach($benefits as $benefit)
                        <div class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-sunburst shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-charcoal font-medium text-sm">{{ $benefit }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="border-t-4 border-azure bg-linen-light shadow-md p-8">
                <h2 class="text-2xl md:text-3xl font-bold text-charcoal mb-5">
                    <span class="text-sunburst">Top 5 Percent</span> Will Handle Your {{ $displayServiceType }} Needs, Same Day
                </h2>

                <h4 class="font-semibold text-charcoal mb-3">Overview of Services:</h4>

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
                        <div class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-sunburst shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                            <p class="text-sm text-charcoal">
                                <span class="font-semibold">{{ $service['label'] }}:</span> {{ $service['detail'] }}
                            </p>
                        </div>
                    @endforeach
                </div>

                <p class="text-charcoal-light text-xs leading-relaxed text-center mb-6">
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
