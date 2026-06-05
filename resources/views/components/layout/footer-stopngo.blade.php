<footer style="background:var(--color-navy-dark);border-top:1px solid rgba(220,181,126,.2)">
    <x-ui.banner-thin-champagne />

    <div class="max-w-7xl mx-auto px-6 py-14">

        {{-- Four-column grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 mb-12">

            {{-- Brand --}}
            <div class="lg:col-span-1">
                <p class="font-head font-bold text-xl text-white mb-3">
                    Stop &amp; Go <span style="color:var(--color-champagne)">Limo</span>
                </p>
                <p class="text-sm leading-relaxed mb-5" style="color:var(--color-muted)">
                    Premium airport shuttle and limousine service. Open 24 hours a day, 7 days a week throughout the greater Chicago area.
                </p>
                <a href="tel:+18155856922"
                   class="font-head font-semibold text-lg transition-colors"
                   style="color:var(--color-champagne)"
                   onmouseover="this.style.color='var(--color-champagne-light)'"
                   onmouseout="this.style.color='var(--color-champagne)'">(815) 585-6922</a>
            </div>

            {{-- Services --}}
            <div>
                <h4 class="font-head font-semibold text-white text-sm mb-5" style="letter-spacing:.08em">Services</h4>
                <ul class="space-y-2.5">
                    <li><a href="/services/airport-shuttle" class="text-sm transition-colors" style="color:var(--color-muted)" onmouseover="this.style.color='var(--color-champagne)'" onmouseout="this.style.color='var(--color-muted)'">Airport Shuttle</a></li>
                    <li><a href="/services/wedding-limousine" class="text-sm transition-colors" style="color:var(--color-muted)" onmouseover="this.style.color='var(--color-champagne)'" onmouseout="this.style.color='var(--color-muted)'">Wedding Limousine</a></li>
                    <li><a href="/services/party-bus" class="text-sm transition-colors" style="color:var(--color-muted)" onmouseover="this.style.color='var(--color-champagne)'" onmouseout="this.style.color='var(--color-muted)'">Party Bus</a></li>
                    <li><a href="/services/corporate-car-service" class="text-sm transition-colors" style="color:var(--color-muted)" onmouseover="this.style.color='var(--color-champagne)'" onmouseout="this.style.color='var(--color-muted)'">Corporate Car Service</a></li>
                    <li><a href="/services/town-car-services" class="text-sm transition-colors" style="color:var(--color-muted)" onmouseover="this.style.color='var(--color-champagne)'" onmouseout="this.style.color='var(--color-muted)'">Town Car Services</a></li>
                    <li><a href="/services/limousine-services" class="text-sm transition-colors" style="color:var(--color-muted)" onmouseover="this.style.color='var(--color-champagne)'" onmouseout="this.style.color='var(--color-muted)'">Limousine Services</a></li>
                </ul>
            </div>

            {{-- Service Areas --}}
            <div>
                <h4 class="font-head font-semibold text-white text-sm mb-5" style="letter-spacing:.08em">Service Areas</h4>
                <ul class="space-y-2.5">
                    <li><a href="/service-areas/new-lenox" class="text-sm transition-colors" style="color:var(--color-muted)" onmouseover="this.style.color='var(--color-champagne)'" onmouseout="this.style.color='var(--color-muted)'">New Lenox</a></li>
                    <li><a href="/service-areas/naperville" class="text-sm transition-colors" style="color:var(--color-muted)" onmouseover="this.style.color='var(--color-champagne)'" onmouseout="this.style.color='var(--color-muted)'">Naperville</a></li>
                    <li><a href="/service-areas/joliet" class="text-sm transition-colors" style="color:var(--color-muted)" onmouseover="this.style.color='var(--color-champagne)'" onmouseout="this.style.color='var(--color-muted)'">Joliet</a></li>
                    <li><a href="/service-areas/aurora" class="text-sm transition-colors" style="color:var(--color-muted)" onmouseover="this.style.color='var(--color-champagne)'" onmouseout="this.style.color='var(--color-muted)'">Aurora</a></li>
                    <li><a href="/service-areas/plainfield" class="text-sm transition-colors" style="color:var(--color-muted)" onmouseover="this.style.color='var(--color-champagne)'" onmouseout="this.style.color='var(--color-muted)'">Plainfield</a></li>
                    <li><a href="/service-areas" class="text-sm font-semibold font-head transition-colors" style="color:var(--color-champagne)" onmouseover="this.style.color='var(--color-champagne-light)'" onmouseout="this.style.color='var(--color-champagne)'">All 22 Areas &rarr;</a></li>
                </ul>
            </div>

            {{-- Company --}}
            <div>
                <h4 class="font-head font-semibold text-white text-sm mb-5" style="letter-spacing:.08em">Company</h4>
                <ul class="space-y-2.5">
                    <li><a href="/about" class="text-sm transition-colors" style="color:var(--color-muted)" onmouseover="this.style.color='var(--color-champagne)'" onmouseout="this.style.color='var(--color-muted)'">About Us</a></li>
                    <li><a href="/rates" class="text-sm transition-colors" style="color:var(--color-muted)" onmouseover="this.style.color='var(--color-champagne)'" onmouseout="this.style.color='var(--color-muted)'">Rates</a></li>
                    <li><a href="/gallery" class="text-sm transition-colors" style="color:var(--color-muted)" onmouseover="this.style.color='var(--color-champagne)'" onmouseout="this.style.color='var(--color-muted)'">Gallery</a></li>
                    <li><a href="/contact" class="text-sm transition-colors" style="color:var(--color-muted)" onmouseover="this.style.color='var(--color-champagne)'" onmouseout="this.style.color='var(--color-muted)'">Contact</a></li>
                    <li>
                        <a href="/booking"
                           class="text-sm font-head font-semibold transition-colors"
                           style="color:var(--color-champagne)"
                           onmouseover="this.style.color='var(--color-champagne-light)'"
                           onmouseout="this.style.color='var(--color-champagne)'">Book a Ride &rarr;</a>
                    </li>
                </ul>
            </div>

        </div>

        {{-- Divider --}}
        <div class="h-px mb-8" style="background:rgba(220,181,126,.15)"></div>

        {{-- Bottom row --}}
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 text-xs" style="color:var(--color-muted)">
            <p>&copy; {{ date('Y') }} Stop &amp; Go Airport Shuttle Service Inc. All rights reserved.</p>
            <p>Serving New Lenox, Naperville, Joliet, Chicago and all of Illinois</p>
        </div>

    </div>

    <x-ui.banner-thin-champagne />
</footer>
