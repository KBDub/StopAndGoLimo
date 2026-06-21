<footer class="bg-cloud text-navy py-2 border-t border-cloud-dark">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Mobile footer (below md) --}}
        <div class="block md:hidden mb-6">

            {{-- Row 1: Services (top-level only) --}}
            <div class="mb-5">
                <h4 class="font-head font-semibold text-navy text-base mb-2 border-b border-cloud-dark pb-1 text-center">Services</h4>
                <div class="grid grid-cols-2 gap-x-6 gap-y-1.5 text-sm text-center">
                    <a href="/airport-shuttle-ohare-midway" class="link-notification font-medium">Airport Shuttle</a>
                    <a href="/corporate-car-services" class="link-notification font-medium">Corporate Travel</a>
                    <a href="/special-event-limousine" class="link-notification font-medium">Special Events</a>
                    <a href="/party-bus-rental-chicago" class="link-notification font-medium">Party Buses</a>
                    <a href="/limousine-services" class="link-notification font-medium">Limousine Services</a>
                    <a href="/transportation-services" class="link-notification font-medium">Transportation</a>
                </div>
            </div>

            {{-- Row 2: Quick Links --}}
            <div class="mb-5">
                <h4 class="font-head font-semibold text-navy text-base mb-2 border-b border-cloud-dark pb-1 text-center">Quick Links</h4>
                <div class="flex flex-wrap justify-center gap-x-6 gap-y-1.5 text-sm text-center">
                    <a href="/" class="link-notification">Home</a>
                    <a href="/about-us" class="link-notification">About Us</a>
                    <a href="/bookings-reservations" class="link-notification">Book a Ride</a>
                    <a href="/service-areas" class="link-notification">Service Areas</a>
                    <span class="text-slate">Privacy Policy</span>
                    <span class="text-slate">Terms of Use</span>
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
                    <li><a href="/bookings-reservations" class="link-notification">Book a Ride</a></li>
                    <li><a href="/service-areas" class="link-notification">Service Areas</a></li>
                    <li><span class="text-slate">Privacy Policy</span></li>
                    <li><span class="text-slate">Terms of Use</span></li>
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

                    {{-- Airport Shuttle --}}
                    <h5 class="font-head font-semibold text-navy mb-1.5 break-after-avoid text-center text-sm">
                        <a href="/airport-shuttle-ohare-midway" class="text-navy hover:text-champagne transition-colors no-underline">Airport Shuttle</a>
                    </h5>
                    <ul class="space-y-1 mb-4 text-center">
                        <li><a href="/airport-shuttle-ohare-midway" class="link-notification">O'Hare &amp; Midway</a></li>
                    </ul>

                    {{-- Corporate --}}
                    <h5 class="font-head font-semibold text-navy mb-1.5 break-after-avoid text-center text-sm">
                        <a href="/corporate-car-services" class="text-navy hover:text-champagne transition-colors no-underline">Corporate Travel</a>
                    </h5>
                    <ul class="space-y-1 mb-4 text-center">
                        <li><a href="/corporate-car-services" class="link-notification">Executive Car Service</a></li>
                        <li><a href="/chauffeurs" class="link-notification">Chauffeurs</a></li>
                        <li><a href="/town-car-services" class="link-notification">Town Car Services</a></li>
                    </ul>

                    {{-- Special Events --}}
                    <h5 class="font-head font-semibold text-navy mb-1.5 break-after-avoid text-center text-sm">
                        <a href="/special-event-limousine" class="text-navy hover:text-champagne transition-colors no-underline">Special Events</a>
                    </h5>
                    <ul class="space-y-1 mb-4 text-center">
                        <li><a href="/wedding-limousine-services" class="link-notification">Weddings</a></li>
                        <li><a href="/prom-party-bus-rental-illinois" class="link-notification">Prom &amp; Homecoming</a></li>
                        <li><a href="/chicago-concert-party-bus-rental" class="link-notification">Concerts</a></li>
                        <li><a href="/grad-day-transportation" class="link-notification">Grad Day</a></li>
                    </ul>

                    {{-- Party Buses --}}
                    <h5 class="font-head font-semibold text-navy mb-1.5 break-after-avoid text-center text-sm">
                        <a href="/party-bus-rental-chicago" class="text-navy hover:text-champagne transition-colors no-underline">Party Buses</a>
                    </h5>
                    <ul class="space-y-1 mb-4 text-center">
                        <li><a href="/party-bus-rental-chicago" class="link-notification">Party Bus Chicago</a></li>
                        <li><a href="/party-bus-aurora" class="link-notification">Party Bus Aurora</a></li>
                        <li><a href="/party-bus-rental-naperville" class="link-notification">Party Bus Naperville</a></li>
                        <li><a href="/new-bus-rental" class="link-notification">New Bus Rental</a></li>
                        <li><a href="/coach-buses" class="link-notification">Coach Buses</a></li>
                    </ul>

                    {{-- Limousines --}}
                    <h5 class="font-head font-semibold text-navy mb-1.5 break-after-avoid text-center text-sm">
                        <a href="/limousine-services" class="text-navy hover:text-champagne transition-colors no-underline">Limousines</a>
                    </h5>
                    <ul class="space-y-1 text-center">
                        <li><a href="/limousine-services" class="link-notification">Limousine Services</a></li>
                        <li><a href="/transportation-services" class="link-notification">Transportation Services</a></li>
                        <li><a href="/our-services" class="link-notification">All Services</a></li>
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
