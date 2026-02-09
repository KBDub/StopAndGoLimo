<section class="py-10 bg-charcoal relative overflow-hidden">
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-0 left-1/4 w-64 h-64 bg-sunburst rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-1/3 w-48 h-48 bg-azure rounded-full blur-3xl"></div>
    </div>

    <div class="max-w-6xl mx-auto px-6 relative z-10">
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
                        result: null,
                        served: [
                            '60431','60432','60433','60434','60435','60436',
                            '60440','60441','60442','60446','60447','60448',
                            '60451','60490','60491','60544','60564','60565',
                            '60585','60586','60601','60602','60603','60604',
                            '60605','60606','60607','60608','60609','60610',
                            '60611','60612','60613','60614','60615','60616',
                            '60617','60618','60619','60620','60621','60622',
                            '60623','60624','60625','60626','60439','60439',
                            '60504','60505','60506','60507','60540','60563',
                            '60404','60408','60410','60481','60484','60468'
                        ],
                        checkZip() {
                            if (this.zip.length === 5 && /^\d{5}$/.test(this.zip)) {
                                this.result = this.served.includes(this.zip) ? 'yes' : 'no';
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
                            x-model="zip"
                            @keyup.enter="checkZip()"
                            maxlength="5"
                            placeholder="Enter zip code"
                            class="flex-1 px-4 py-3 rounded-l-lg border-2 border-r-0 border-sunburst/30 bg-charcoal-dark text-white placeholder-white/40 focus:border-sunburst focus:outline-none transition-colors"
                        >
                        <button
                            @click="checkZip()"
                            class="px-5 py-3 bg-gold-gradient text-charcoal font-bold rounded-r-lg hover:shadow-gold-lg transition-all"
                            aria-label="Check zip code"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                    <p x-show="result === 'yes'" x-cloak class="mt-3 text-green-400 text-sm font-medium">
                        Great news! We serve your area. Contact us for a free quote!
                    </p>
                    <p x-show="result === 'no'" x-cloak class="mt-3 text-sunburst text-sm font-medium">
                        We may still be able to help! Give us a call to discuss your project.
                    </p>
                </div>

                <div class="border-t border-white/10 pt-6">
                    <p class="text-white/50 text-sm leading-relaxed">
                        Veteran-owned since 2015, Top 5 Percent proudly serves
                        Joliet, Plainfield, Romeoville, Bolingbrook, Lockport,
                        Shorewood, Channahon, Minooka, New Lenox, Mokena,
                        Frankfort, Homer Glen, Lemont, Woodridge, Naperville,
                        Aurora, Oswego, Yorkville, Morris, Wilmington,
                        Crest Hill, Elwood, Manhattan, Braidwood,
                        and the greater Chicagoland area.
                        Friendly, reliable service.
                    </p>
                    <p class="text-white/50 text-sm mt-3">
                        <a href="tel:+18155551234" class="text-sunburst hover:text-sunburst-light transition-colors">
                            (815) 555-1234
                        </a>
                    </p>
                </div>
            </div>

            <div>
                <div
                    id="service-map"
                    class="w-full h-[400px] md:h-[480px] rounded-lg border-2 border-sunburst/20 shadow-lg"
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

            const locations = [
                { name: 'Top 5 Percent HQ - Joliet', lat: 41.5250, lng: -88.0817, main: true },
                { name: 'Plainfield', lat: 41.6270, lng: -88.2037 },
                { name: 'Romeoville', lat: 41.6475, lng: -88.0895 },
                { name: 'Bolingbrook', lat: 41.6986, lng: -88.0684 },
                { name: 'Lockport', lat: 41.5895, lng: -88.0573 },
                { name: 'Shorewood', lat: 41.5200, lng: -88.2017 },
                { name: 'Channahon', lat: 41.4286, lng: -88.2284 },
                { name: 'Minooka', lat: 41.4553, lng: -88.2615 },
                { name: 'New Lenox', lat: 41.5120, lng: -87.9656 },
                { name: 'Mokena', lat: 41.5267, lng: -87.8892 },
                { name: 'Frankfort', lat: 41.4958, lng: -87.8487 },
                { name: 'Homer Glen', lat: 41.5987, lng: -87.9370 },
                { name: 'Lemont', lat: 41.6736, lng: -88.0017 },
                { name: 'Naperville', lat: 41.7508, lng: -88.1535 },
                { name: 'Aurora', lat: 41.7606, lng: -88.3201 },
                { name: 'Woodridge', lat: 41.7470, lng: -88.0506 },
                { name: 'Crest Hill', lat: 41.5548, lng: -88.0987 },
                { name: 'Oswego', lat: 41.6831, lng: -88.3515 },
                { name: 'Yorkville', lat: 41.6414, lng: -88.4473 },
                { name: 'Manhattan', lat: 41.4217, lng: -87.9856 },
                { name: 'Wilmington', lat: 41.3078, lng: -88.1468 },
                { name: 'Morris', lat: 41.3572, lng: -88.4212 },
                { name: 'Elwood', lat: 41.4039, lng: -88.1112 },
                { name: 'Chicago (Downtown)', lat: 41.8781, lng: -87.6298 },
            ];

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
                    marker.bindPopup('<span style="color:#2C2C2C;">' + loc.name + '</span>');
                }
            });
        });
    </script>
</section>
