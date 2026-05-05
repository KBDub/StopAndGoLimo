@php
    use App\Data\PrimaryLocations;
    $mapLocations   = PrimaryLocations::forMap();
    $zips           = PrimaryLocations::zips();
    $primaryCities  = PrimaryLocations::primaryCityNames();
    $secondaryCities = PrimaryLocations::secondaryCityNames();
    $hqCity         = PrimaryLocations::HQ['city'];
@endphp

<section id="map-section" class="py-10 bg-charcoal relative overflow-hidden isolate">
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-0 left-1/4 w-64 h-64 bg-sunburst-full blur-3xl"></div>
        <div class="absolute bottom-0 right-1/3 w-48 h-48 bg-azure rounded-full blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="grid lg:grid-cols-2 gap-10 items-start">

            <div>
                <h5 class="text-sunburst font-semibold tracking-wide mb-3">
                    Our Service Area
                </h5>
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-6 leading-tight">
                    Premium Custom Signage & Apparel Across Joliet, Chicago & Surrounding Areas
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
                            class="flex-1 px-4 py-3 border-2 border-r-0 border-sunburst/30 bg-charcoal-dark text-white placeholder-white/40 focus:border-sunburst focus:outline-none transition-colors"
                        >
                        <button
                            @click="checkZip()"
                            class="px-5 py-3 bg-gold-gradient text-charcoal font-bold hover:shadow-gold-lg transition-all"
                            aria-label="Check zip code"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>

                    {{-- Zip result modal --}}
                    <x-ui.modal name="zip-result" size="md">

                        <x-slot:header>
                            <div class="h-2 flex-shrink-0 bg-gold-gradient-horizontal" aria-hidden="true"></div>
                            <div class="flex items-start gap-3 px-5 py-4 bg-charcoal border-b-2 border-sunburst">
                                <div class="flex items-center justify-center w-12 h-12 flex-shrink-0"
                                    :class="$store.zipResult.inRange ? 'bg-green-500/15' : 'bg-sunburst/15'">
                                    <svg x-show="$store.zipResult.inRange"
                                        class="w-6 h-6 text-green-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round"
                                        aria-hidden="true">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>
                                    <svg x-show="!$store.zipResult.inRange"
                                        class="w-6 h-6 text-sunburst" fill="currentColor"
                                        viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h2 class="text-lg font-bold text-white leading-tight"
                                        x-text="$store.zipResult.inRange ? 'Great, you are in zip code range!' : 'Shipping &amp; local pickup available'">
                                    </h2>
                                    <p class="text-white/60 text-xs mt-0.5"
                                        x-text="$store.zipResult.inRange ? 'We serve ZIP ' + $store.zipResult.zip + ' directly.' : 'ZIP ' + $store.zipResult.zip + ' is eligible for shipping or local pickup.'">
                                    </p>
                                </div>
                                <x-ui.modal-trigger modal="zip-result" as="close"
                                    class="flex items-center justify-center w-8 h-8 text-white/50 hover:text-white hover:bg-white/10 transition-colors flex-shrink-0 mt-0.5">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                         stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="M18 6 6 18M6 6l12 12"/>
                                    </svg>
                                </x-ui.modal-trigger>
                            </div>
                        </x-slot:header>

                        <p class="text-charcoal-light text-sm leading-relaxed">
                            Would you like to send in a custom request for your project?
                        </p>

                        <x-slot:footer>
                            <x-ui.button-modal-cancel modal="zip-result">No, thanks</x-ui.button-modal-cancel>
                            <x-ui.button-modal-primary
                                @click="$dispatch('close-modal', { name: 'zip-result' }); $nextTick(() => window.dispatchEvent(new CustomEvent('open-contact-modal')))"
                            >Yes →</x-ui.button-modal-primary>
                        </x-slot:footer>

                    </x-ui.modal>

                </div>

                <div class="border-t border-white/10 pt-6">
                    <p id="city-list" class="text-white/50 text-sm leading-relaxed">
                        Veteran-owned since 2015, Top 5 Percent proudly serves
                        {{ $hqCity }},
                        {{ implode(', ', $primaryCities) }},
                        {{ implode(', ', $secondaryCities) }},
                        and the greater Chicagoland area.
                        Friendly, reliable service.
                    </p>
                    <p class="text-white/50 text-sm mt-3">
                        <a href="tel:+18153498600" class="text-sunburst hover:text-sunburst-light transition-colors">
                            (815) 349-8600
                        </a>
                    </p>
                </div>
            </div>

            <div>
                <div
                    id="service-map"
                    class="w-full h-[400px] md:h-[480px] border-2 border-sunburst/20 shadow-lg"
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
            const map = L.map('service-map', {
                scrollWheelZoom: false
            }).setView([41.525, -88.08], 10);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
                maxZoom: 18,
            }).addTo(map);

            const goldIcon = L.divIcon({
                className: 'custom-marker',
                html: '<div style="width:14px;height:14px;background:#FFC20E;border:2px solid #2C2C2C;border-radius:50%;box-shadow:0 0 6px rgba(255,194,14,0.5);"></div>',
                iconSize: [14, 14],
                iconAnchor: [7, 7],
            });

            const locations = {!! Js::from($mapLocations) !!};

            locations.forEach(function (loc) {
                const marker = L.marker([loc.lat, loc.lng], { icon: goldIcon }).addTo(map);
                if (loc.main) {
                    const hqIcon = L.divIcon({
                        className: 'custom-marker-hq',
                        html: '<div style="width:20px;height:20px;background:#FFC20E;border:3px solid #2C2C2C;border-radius:50%;box-shadow:0 0 10px rgba(255,194,14,0.7);"></div>',
                        iconSize: [20, 20],
                        iconAnchor: [10, 10],
                    });
                    marker.setIcon(hqIcon);
                    marker.bindPopup('<strong style="color:#2C2C2C;">' + loc.name + '</strong>').openPopup();
                } else {
                    marker.bindPopup('<span style="color:#2C2C2C;">' + loc.city + '</span>');
                }
            });
        });
    </script>
</section>
