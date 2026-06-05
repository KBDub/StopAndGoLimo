@php
    use App\Data\PrimaryLocations;
    use Illuminate\Support\Str;
    $mapLocations    = PrimaryLocations::forMap();
    $zips            = PrimaryLocations::zips();
    $primaryCities   = PrimaryLocations::primaryCityNames();
    $secondaryCities = PrimaryLocations::secondaryCityNames();
    $hqCity          = PrimaryLocations::HQ['city'];
@endphp

<section id="map-section" class="py-10 bg-navy relative overflow-hidden isolate">
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-0 left-1/4 w-64 h-64 bg-champagne blur-3xl"></div>
        <div class="absolute bottom-0 right-1/3 w-48 h-48 bg-azure blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="grid lg:grid-cols-2 gap-10 items-start">

            <div>
                <h5 class="text-champagne font-head font-semibold tracking-wide mb-3">
                    Our Service Area
                </h5>
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-6 leading-tight font-head">
                    Premium Airport Shuttle &amp; Limousine Service Across Illinois
                </h2>

                <div
                    x-data="{
                        zip: '',
                        inRange: false,
                        served: {{ Js::from($zips) }},
                        checkZip() {
                            if (this.zip.length === 5) {
                                this.inRange = this.served.includes(this.zip);
                                this.$store.zipResult.inRange = this.inRange;
                                this.$store.zipResult.zip = this.zip;
                                this.$dispatch('open-modal', { name: 'zip-result' });
                            }
                        }
                    }"
                    class="mb-8"
                >
                    <label for="zip-check" class="text-white/70 text-sm mb-2 block">
                        Enter your zip code to confirm service availability
                    </label>
                    <div class="flex max-w-md">
                        <input
                            id="zip-check"
                            type="text"
                            :value="zip"
                            @input="zip = $el.value.replace(/\D/g,'').substring(0,5); $el.value = zip"
                            @keyup.enter="checkZip()"
                            inputmode="numeric"
                            maxlength="5"
                            placeholder="Enter zip code"
                            class="flex-1 px-4 py-3 border-2 border-r-0 border-champagne/30 bg-navy-dark text-white placeholder-white/40 focus:border-champagne focus:outline-none transition-colors"
                        >
                        <button
                            @click="checkZip()"
                            class="px-5 py-3 bg-champagne text-navy font-bold hover:shadow-champagne-lg transition-all"
                            aria-label="Check zip code"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>

                    {{-- Zip result modal --}}
                    <x-ui.modal name="zip-result" size="md" variant="champagne">

                        <x-slot:header>
                            <div class="h-2 flex-shrink-0 bg-grad-champagne-rule" aria-hidden="true"></div>
                            <div class="flex items-start gap-3 px-5 py-4 bg-cloud border-b-2 border-champagne">
                                <div class="flex items-center justify-center w-12 h-12 flex-shrink-0"
                                    :class="$store.zipResult.inRange ? 'bg-stopngo-success/15' : 'bg-champagne/15'">
                                    <svg x-show="$store.zipResult.inRange"
                                        class="w-6 h-6 text-stopngo-success" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"
                                        aria-hidden="true">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>
                                    <svg x-show="!$store.zipResult.inRange"
                                        class="w-6 h-6 text-champagne" fill="currentColor"
                                        viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h2 class="text-lg font-bold text-navy leading-tight font-head"
                                        x-text="$store.zipResult.inRange ? 'Great, we serve your area!' : 'We may still be able to help'">
                                    </h2>
                                    <p class="text-slate text-xs mt-0.5"
                                        x-text="$store.zipResult.inRange ? 'We serve ZIP ' + $store.zipResult.zip + ' directly.' : 'ZIP ' + $store.zipResult.zip + ' may be reachable. Contact us to confirm.'">
                                    </p>
                                </div>
                                <x-ui.modal-trigger modal="zip-result" as="close"
                                    class="flex items-center justify-center w-8 h-8 text-slate hover:text-navy hover:bg-cloud-dark transition-colors flex-shrink-0 mt-0.5">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                         stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="M18 6 6 18M6 6l12 12"/>
                                    </svg>
                                </x-ui.modal-trigger>
                            </div>
                        </x-slot:header>

                        <p class="text-slate text-sm leading-relaxed">
                            Would you like to book a ride or request a quote?
                        </p>

                        <x-slot:footer>
                            <x-ui.button-modal-cancel modal="zip-result">No, thanks</x-ui.button-modal-cancel>
                            <x-ui.button-modal-primary
                                @click="$dispatch('close-modal', { name: 'zip-result' }); $nextTick(() => window.dispatchEvent(new CustomEvent('open-contact-modal')))"
                            >Book a Ride &rarr;</x-ui.button-modal-primary>
                        </x-slot:footer>

                    </x-ui.modal>

                </div>

                <div class="border-t border-white/10 pt-6">
                    @php $allCities = array_merge([$hqCity], $primaryCities, $secondaryCities); @endphp
                    <p id="city-list" class="text-white/50 text-sm leading-relaxed">
                        Serving Illinois since 2009, Stop &amp; Go Limo proudly serves
                        @foreach($allCities as $city)<a href="/service-areas/{{ Str::slug($city . '-IL') }}" class="link-city text-sm">{{ $city }}</a>, @endforeach
                        and the greater Chicagoland area.
                    </p>
                    <p class="text-white/50 text-sm mt-3">
                        <a href="tel:+18155856922" class="text-champagne hover:text-champagne-light transition-colors">
                            (815) 585-6922
                        </a>
                    </p>
                </div>
            </div>

            <div>
                <div
                    id="service-map"
                    class="w-full h-[400px] md:h-[480px] border-2 border-champagne/20 shadow-lg"
                ></div>
                <p class="text-white/40 text-xs text-center mt-3">
                    We proudly serve the highlighted areas and surrounding communities
                </p>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const root       = document.documentElement;
            const champagne  = getComputedStyle(root).getPropertyValue('--champagne').trim() || '#DCB57E';
            const navy       = getComputedStyle(root).getPropertyValue('--navy').trim()      || '#15152C';

            const map = L.map('service-map', {
                scrollWheelZoom: false
            }).setView([41.525, -88.08], 10);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
                maxZoom: 18,
            }).addTo(map);

            const markerStyle  = 'width:14px;height:14px;background:' + champagne + ';border:2px solid ' + navy + ';border-radius:50%;box-shadow:0 0 6px ' + champagne + '80;';
            const hqMarkerStyle = 'width:20px;height:20px;background:' + champagne + ';border:3px solid ' + navy + ';border-radius:50%;box-shadow:0 0 10px ' + champagne + 'B3;';

            const goldIcon = L.divIcon({
                className: 'custom-marker',
                html: '<div style="' + markerStyle + '"></div>',
                iconSize: [14, 14],
                iconAnchor: [7, 7],
            });

            const locations = {!! Js::from($mapLocations) !!};

            locations.forEach(function (loc) {
                const marker = L.marker([loc.lat, loc.lng], { icon: goldIcon }).addTo(map);
                if (loc.main) {
                    const hqIcon = L.divIcon({
                        className: 'custom-marker-hq',
                        html: '<div style="' + hqMarkerStyle + '"></div>',
                        iconSize: [20, 20],
                        iconAnchor: [10, 10],
                    });
                    marker.setIcon(hqIcon);
                    marker.bindPopup('<a href="/service-areas/' + loc.slug + '" style="color:' + navy + ';font-weight:bold;">' + loc.name + '</a>').openPopup();
                } else {
                    marker.bindPopup('<a href="/service-areas/' + loc.slug + '" style="color:' + navy + ';">' + loc.city + '</a>');
                }
            });
        });
    </script>
</section>
