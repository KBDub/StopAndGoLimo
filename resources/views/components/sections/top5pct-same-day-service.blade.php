{{--
 | Component  : x-sections.top5pct-same-day-service
 | Repurposed : Was "Top 5 Percent Same Day Service" — now "Stop & Go Availability" trust section.
--}}

@props([
    'serviceType'        => 'airport-shuttle',
    'displayServiceType' => 'Airport Shuttle & Limousine Service',
])

<section class="py-10 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-8">

            {{-- Left card: brand differentiators --}}
            <div class="border-t-4 border-champagne bg-white shadow-md p-8 overflow-hidden">
                <h2 class="text-h2 font-bold text-navy mb-3 font-head">
                    The <span class="text-champagne">Stop &amp; Go</span> Difference
                </h2>
                <p class="text-body-sm text-slate mb-6">
                    Professional, licensed, and locally owned.
                    Here is why Chicagoland residents choose us for every ride:
                </p>

                <div class="flex flex-col gap-y-1.5">
                    @php
                        $benefits = [
                            'We carry a <a href="/reviews" class="text-azure hover:text-azure-dark transition-colors"><strong>five-star rating</strong></a> on Google',
                            'We offer <strong>24/7 availability</strong> including holidays',
                            'Our pricing is <strong>always flat rate</strong> with no surge fees',
                            'We track your <strong>flight in real time</strong> for airport pickups',
                            'Our <a href="/chauffeurs" class="text-azure hover:text-azure-dark transition-colors"><strong>professional chauffeurs</strong></a> are background-checked',
                            'We use <strong>luxury, well-maintained</strong> vehicles',
                            'We handle <strong>individual rides</strong> and large group charters',
                            'Our team has <strong>15+ years</strong> of combined experience',
                            'We accept <a href="/contact" class="text-azure hover:text-azure-dark transition-colors"><strong>last-minute bookings</strong></a> whenever possible',
                        ];
                    @endphp
                    @foreach($benefits as $benefit)
                        @if($loop->even)
                            <div class="flex items-center justify-end gap-2 whitespace-nowrap">
                                <span class="text-body-sm text-navy">{!! $benefit !!}</span>
                                <div class="w-1 h-5 bg-champagne shrink-0"></div>
                            </div>
                        @else
                            <div class="flex items-center gap-2 whitespace-nowrap">
                                <div class="w-1 h-5 bg-champagne shrink-0"></div>
                                <span class="text-body-sm text-navy">{!! $benefit !!}</span>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

            {{-- Right card: services overview --}}
            <div class="border-t-4 border-navy bg-cloud shadow-md p-8 overflow-hidden">
                <h2 class="text-h2 font-bold text-navy mb-5 font-head">
                    <span class="text-champagne">Stop &amp; Go</span> Handles Your {{ $displayServiceType }} Needs
                </h2>

                <h4 class="text-h4 font-semibold text-navy mb-3 font-head">Overview of Services:</h4>

                <div class="flex flex-col gap-y-1.5 mb-6">
                    @php
                        $services = [
                            '<a href="/airport-shuttle" class="text-azure hover:text-azure-dark transition-colors">Airport transfers</a> to <a href="/airport-shuttle" class="text-azure hover:text-azure-dark transition-colors">O\'Hare and Midway</a> with flight tracking',
                            '24/7 availability for early departures and late arrivals',
                            '<a href="/wedding-limousine" class="text-azure hover:text-azure-dark transition-colors">Wedding limousines</a>, <a href="/party-bus" class="text-azure hover:text-azure-dark transition-colors">party buses</a>, and <a href="/corporate-car-service" class="text-azure hover:text-azure-dark transition-colors">corporate car service</a>',
                            '<a href="/coach-buses" class="text-azure hover:text-azure-dark transition-colors">Coach buses</a> and group shuttles for any size event',
                            'Transparent flat-rate pricing and satisfaction guaranteed on every ride',
                        ];
                    @endphp
                    @foreach($services as $service)
                        @if($loop->even)
                            <div class="flex items-center justify-end gap-2 whitespace-nowrap">
                                <span class="text-body-sm text-navy">{!! $service !!}</span>
                                <div class="w-1 h-5 bg-navy shrink-0"></div>
                            </div>
                        @else
                            <div class="flex items-center gap-2 whitespace-nowrap">
                                <div class="w-1 h-5 bg-navy shrink-0"></div>
                                <span class="text-body-sm text-navy">{!! $service !!}</span>
                            </div>
                        @endif
                    @endforeach
                </div>

                <p class="text-xs text-slate leading-relaxed text-center mb-6">
                    Serving New Lenox, Naperville, Joliet, Plainfield, Romeoville,
                    Bolingbrook, Lockport, Shorewood, Channahon, Minooka, Mokena,
                    Frankfort, Homer Glen, Lemont, Aurora, Oswego, and the greater Chicagoland area.
                    <a href="tel:+18155856922" class="text-azure hover:text-azure-dark transition-colors font-medium">(815) 585-6922</a>
                </p>

                <div class="text-center">
                    <x-ui.button-champagne-solid onclick="window.dispatchEvent(new CustomEvent('open-contact-modal'))">
                        Book Your Ride
                    </x-ui.button-champagne-solid>
                </div>
            </div>

        </div>
    </div>
</section>
