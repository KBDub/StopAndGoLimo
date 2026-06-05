<footer class="bg-cloud text-navy py-2 border-t border-cloud-dark">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Mobile footer (below md) --}}
        <div class="block md:hidden mb-6">

            {{-- Row 1: Services (top-level only) --}}
            <div class="mb-5">
                <h4 class="font-head font-semibold text-navy text-base mb-2 border-b border-cloud-dark pb-1 text-center">Services</h4>
                <div class="grid grid-cols-2 gap-x-6 gap-y-1.5 text-sm text-center">
                    <a href="/airport-transfers" class="link-notification font-medium">Airport Transfers</a>
                    <a href="/corporate-transportation" class="link-notification font-medium">Corporate Travel</a>
                    <a href="/special-events" class="link-notification font-medium">Special Events</a>
                    <a href="/group-transportation" class="link-notification font-medium">Group Transportation</a>
                    <a href="/long-distance" class="link-notification font-medium">Long Distance</a>
                    <a href="/hourly-charter" class="link-notification font-medium">Hourly Charter</a>
                </div>
            </div>

            {{-- Row 2: Quick Links --}}
            <div class="mb-5">
                <h4 class="font-head font-semibold text-navy text-base mb-2 border-b border-cloud-dark pb-1 text-center">Quick Links</h4>
                <div class="flex flex-wrap justify-center gap-x-6 gap-y-1.5 text-sm text-center">
                    <a href="/" class="link-notification">Home</a>
                    <a href="/about-us" class="link-notification">About Us</a>
                    <a href="/booking" class="link-notification">Book a Ride</a>
                    <a href="/service-areas" class="link-notification">Service Areas</a>
                    <a href="/reviews" class="link-notification">Reviews</a>
                    <a href="/privacy-policy" class="link-notification">Privacy Policy</a>
                    <a href="/terms-of-use" class="link-notification">Terms of Use</a>
                    <a href="#" onclick="event.preventDefault(); window.dispatchEvent(new CustomEvent('open-contact-modal'))" class="link-notification">Contact Us</a>
                </div>
            </div>

            {{-- Row 3: Contact (no title) --}}
            <div class="text-sm space-y-1 text-center">
                <p class="text-slate">400 E Lincoln Hwy Suite 101A, New Lenox, IL 60451</p>
                <p><a href="tel:+18155856922" class="link-notification font-semibold">(815) 585-6922</a></p>
                <p><a href="mailto:vincent@newlenoxlimoservice.com" class="link-notification">vincent@newlenoxlimoservice.com</a></p>
            </div>

        </div>

        {{-- Desktop footer (md and above) --}}
        <div class="hidden md:grid grid-cols-8 gap-x-4 mb-6 items-start">

            {{-- Logo --}}
            <div id="logo" class="col-span-1 text-center">
                <img src="/images/logos/stopngo-logo.png" alt="Stop & Go Limo" class="h-10 mb-3 mx-auto">
                <p class="text-sm text-slate leading-relaxed">Premium airport shuttle and limousine service. Serving O'Hare, Midway, and all of Illinois since 2009.</p>
            </div>

            {{-- Quick Links --}}
            <div id="quick-links" class="col-span-1">
                <h4 class="font-head font-semibold text-navy text-xl mb-3 text-center">Quick Links</h4>
                <ul class="space-y-1.5 text-sm text-center">
                    <li><a href="/" class="link-notification">Home</a></li>
                    <li><a href="/about-us" class="link-notification">About Us</a></li>
                    <li><a href="/booking" class="link-notification">Book a Ride</a></li>
                    <li><a href="/service-areas" class="link-notification">Service Areas</a></li>
                    <li><a href="/reviews" class="link-notification">Reviews</a></li>
                    <li><a href="/privacy-policy" class="link-notification">Privacy Policy</a></li>
                    <li><a href="/terms-of-use" class="link-notification">Terms of Use</a></li>
                    <li>
                        <a href="#"
                           onclick="event.preventDefault(); window.dispatchEvent(new CustomEvent('open-contact-modal'))"
                           class="link-notification">
                            Contact Us
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Services, 5-column layout --}}
            <div id="services" class="col-span-5">
                <h4 class="font-head font-semibold text-navy text-xl mb-3 text-center">Services</h4>
                <div class="columns-5 gap-x-2 text-sm">

                    {{-- Airport Transfers --}}
                    <h5 class="font-head font-semibold text-navy mb-1.5 break-after-avoid text-center text-sm">
                        <a href="/airport-transfers" class="text-navy hover:text-champagne transition-colors no-underline">Airport Transfers</a>
                    </h5>
                    <ul class="space-y-1 mb-4 text-center">
                        <li><a href="/airport-transfers/ohare" class="link-notification">O'Hare (ORD)</a></li>
                        <li><a href="/airport-transfers/midway" class="link-notification">Midway (MDW)</a></li>
                        <li><a href="/airport-transfers/rockford" class="link-notification">Rockford (RFD)</a></li>
                        <li><a href="/airport-transfers/milwaukee" class="link-notification">Milwaukee (MKE)</a></li>
                        <li><a href="/airport-transfers/private-charter" class="link-notification">Private Charter</a></li>
                    </ul>

                    {{-- Corporate --}}
                    <h5 class="font-head font-semibold text-navy mb-1.5 break-after-avoid text-center text-sm">
                        <a href="/corporate-transportation" class="text-navy hover:text-champagne transition-colors no-underline">Corporate Travel</a>
                    </h5>
                    <ul class="space-y-1 mb-4 text-center">
                        <li><a href="/corporate-transportation/executive-car" class="link-notification">Executive Car Service</a></li>
                        <li><a href="/corporate-transportation/group-shuttle" class="link-notification">Group Shuttles</a></li>
                        <li><a href="/corporate-transportation/road-shows" class="link-notification">Road Shows</a></li>
                    </ul>

                    {{-- Special Events --}}
                    <h5 class="font-head font-semibold text-navy mb-1.5 break-after-avoid text-center text-sm">
                        <a href="/special-events" class="text-navy hover:text-champagne transition-colors no-underline">Special Events</a>
                    </h5>
                    <ul class="space-y-1 mb-4 text-center">
                        <li><a href="/special-events/weddings" class="link-notification">Weddings</a></li>
                        <li><a href="/special-events/prom-homecoming" class="link-notification">Prom &amp; Homecoming</a></li>
                        <li><a href="/special-events/concerts" class="link-notification">Concerts</a></li>
                        <li><a href="/special-events/sporting-events" class="link-notification">Sporting Events</a></li>
                    </ul>

                    {{-- Group / Long Distance --}}
                    <h5 class="font-head font-semibold text-navy mb-1.5 break-after-avoid text-center text-sm">
                        <a href="/group-transportation" class="text-navy hover:text-champagne transition-colors no-underline">Group Travel</a>
                    </h5>
                    <ul class="space-y-1 mb-4 text-center">
                        <li><a href="/group-transportation/minibus" class="link-notification">Mini Bus</a></li>
                        <li><a href="/group-transportation/charter-bus" class="link-notification">Charter Bus</a></li>
                        <li><a href="/long-distance" class="link-notification">Long Distance</a></li>
                        <li><a href="/hourly-charter" class="link-notification">Hourly Charter</a></li>
                    </ul>

                    {{-- Fleet --}}
                    <h5 class="font-head font-semibold text-navy mb-1.5 break-after-avoid text-center text-sm">
                        <a href="/our-fleet" class="text-navy hover:text-champagne transition-colors no-underline">Our Fleet</a>
                    </h5>
                    <ul class="space-y-1 text-center">
                        <li><a href="/our-fleet/sedan" class="link-notification">Luxury Sedan</a></li>
                        <li><a href="/our-fleet/suv" class="link-notification">Premium SUV</a></li>
                        <li><a href="/our-fleet/stretch-limo" class="link-notification">Stretch Limo</a></li>
                        <li><a href="/our-fleet/sprinter-van" class="link-notification">Sprinter Van</a></li>
                        <li><a href="/our-fleet/coach-bus" class="link-notification">Coach Bus</a></li>
                    </ul>

                </div>
            </div>

            {{-- Contact --}}
            <div id="contact" class="col-span-1">
                <h4 class="font-head font-semibold text-navy text-xl mb-3 text-center">Contact</h4>
                <div class="text-sm space-y-2 text-center">
                    <p class="text-navy font-semibold">New Lenox, IL</p>
                    <p class="text-slate leading-relaxed">
                        400 E Lincoln Hwy<br>
                        Suite 101A<br>
                        New Lenox, IL 60451
                    </p>
                    <p>
                        <a href="tel:+18155856922" class="link-notification">
                            (815) 585-6922
                        </a>
                    </p>
                    <p>
                        <a href="mailto:vincent@newlenoxlimoservice.com" class="link-notification text-xs break-all">
                            vincent@newlenoxlimoservice.com
                        </a>
                    </p>
                </div>
            </div>

        </div>

        <div id="copywrite" class="pt-2 border-t border-cloud-dark text-center text-slate">
            <p class="text-xs pb-2">&copy; Copyright 2026 Stop &amp; Go Airport Shuttle Service Inc.</p>
            <p class="text-xs mt-1">Powered by <span class="font-medium">Dream Studio Solutions</span></p>
        </div>

    </div>
</footer>
