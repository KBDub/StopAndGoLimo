<footer class="bg-linen text-charcoal py-2 border-t border-linen-dark">
    <div class="max-w-7xl mx-auto px-6">

        <div class="grid grid-cols-8 gap-x-4 mb-6 items-start">

            {{-- Logo --}}
            <div id="logo" class="col-span-1">
                <img src="/images/logos/top5-logo.gif" alt="Top 5 Percent" class="h-10 mb-3">
                <p class="text-sm text-charcoal-light leading-relaxed">Premium Custom Signage & Apparel. Veteran-owned and proudly serving Joliet, IL.</p>
            </div>

            {{-- Quick Links --}}
            <div id="quick-links" class="col-span-1">
                <ul class="space-y-1.5 text-sm">
                    <li><a href="/" class="link-notification">Home</a></li>
                    <li><a href="/about-us" class="link-notification">About Us</a></li>
                    <li><a href="/articles" class="link-notification">Articles</a></li>
                    <li><a href="/service-areas" class="link-notification">Service Areas</a></li>
                    <li><a href="/service-areas" class="link-notification">Reviews</a></li>
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

            {{-- Services — 5-column newspaper spill --}}
            <div id="services" class="col-span-5">
                <div class="columns-5 gap-x-2 text-sm">

                    {{-- Custom Apparel --}}
                    {{-- <h5 class="font-semibold text-charcoal uppercase mb-1.5 break-after-avoid">
                        <a href="/custom-apparel" class="link-nav">Custom Apparel</a>
                    </h5> --}}
                    <ul class="space-y-1 mb-4">
                        <li><a href="/custom-apparel/screen-printing"                              class="link-notification">Screen Printing</a></li>
                        <li><a href="/custom-apparel/embroidery"                                    class="link-notification">Embroidery</a></li>
                        <li><a href="/custom-apparel/printing-options/dtf-printing"                class="link-notification">DTF Printing</a></li>
                        <li><a href="/custom-apparel/printing-options/dye-sublimation-printing"    class="link-notification">Dye Sublimation</a></li>
                        <li><a href="/custom-apparel/rhinestone-apparel"                            class="link-notification">Rhinestone Apparel</a></li>
                        <li><a href="/custom-apparel/specialty-materials/glitter-shirts"           class="link-notification">Glitter Shirts</a></li>
                        <li><a href="/custom-apparel/specialty-materials/foil-shirts"              class="link-notification">Foil Shirts</a></li>
                        <li><a href="/custom-apparel/specialty-materials/holographic-shirts"       class="link-notification">Holographic Shirts</a></li>
                        <li><a href="/custom-apparel/specialty-materials/puff-shirts"              class="link-notification">Puff Shirts</a></li>
                        <li><a href="/custom-apparel/group-shirts/spirit-wear-shirts"              class="link-notification">Spirit Wear</a></li>
                        <li><a href="/custom-apparel/group-shirts/corporate-wear-shirts"           class="link-notification">Corporate Wear</a></li>
                        <li><a href="/custom-apparel/group-shirts/reunion-shirts"                  class="link-notification">Reunion Shirts</a></li>
                    </ul>

                    {{-- Signs & Banners --}}
                    {{-- <h5 class="font-semibold text-charcoal uppercase mb-1.5 break-after-avoid">
                        <a href="/signs" class="link-nav">Signs & Banners</a>
                    </h5> --}}
                    <ul class="space-y-1 mb-4">
                        <li><a href="/signs/business-signs/banners"       class="link-notification">Banners</a></li>
                        <li><a href="/signs/ground-signs/yard-signs"       class="link-notification">Yard Signs</a></li>
                        <li><a href="/signs/business-signs/window-signs"  class="link-notification">Window Signs</a></li>
                        <li><a href="/signs/business-signs/wall-signs"    class="link-notification">Wall Signs</a></li>
                        <li><a href="/signs/business-signs/door-signs"    class="link-notification">Door Signs</a></li>
                        <li><a href="/signs/business-signs/floor-signs"   class="link-notification">Floor Signs</a></li>
                        <li><a href="/signs/business-signs/posters"       class="link-notification">Posters</a></li>
                        <li><a href="/signs/table-signs/table-cloths"     class="link-notification">Table Cloths</a></li>
                        <li><a href="/signs/table-signs/table-runners"    class="link-notification">Table Runners</a></li>
                        <li><a href="/signs/ground-signs/sidewalk-signs"  class="link-notification">Sidewalk Signs</a></li>
                        <li><a href="/signs/ground-signs/parking-signs"   class="link-notification">Parking Signs</a></li>
                    </ul>

                    {{-- Vehicle Graphics --}}
                    {{-- <h5 class="font-semibold text-charcoal uppercase mb-1.5 break-after-avoid">
                        <a href="/vehicle-graphics" class="link-nav">Vehicle Graphics</a>
                    </h5> --}}
                    <ul class="space-y-1 mb-4">
                        <li><a href="/vehicle-graphics/automobile-graphics" class="link-notification">Automobile Graphics</a></li>
                        <li><a href="/vehicle-graphics/vehicle-magnets"     class="link-notification">Vehicle Magnets</a></li>
                        <li><a href="/vehicle-graphics/dot-decals"          class="link-notification">DOT Decals</a></li>
                    </ul>

                    {{-- Decals & Stickers --}}
                    {{-- <h5 class="font-semibold text-charcoal uppercase mb-1.5 break-after-avoid">
                        <a href="/stickers" class="link-nav">Decals & Stickers</a>
                    </h5> --}}
                    <ul class="space-y-1 mb-4">
                        <li><a href="/stickers/standard-stickers-decals"      class="link-notification">Standard Stickers & Decals</a></li>
                        <li><a href="/stickers/custom-shaped-stickers-decals" class="link-notification">Custom-Shaped Stickers & Decals</a></li>
                    </ul>

                    {{-- Promotional Items --}}
                    {{-- <h5 class="font-semibold text-charcoal uppercase mb-1.5 break-after-avoid">
                        <a href="/promotional-items" class="link-nav">Promotional Items</a>
                    </h5> --}}
                    <ul class="space-y-1 mb-4">
                        <li><a href="/promotional-items/mugs"           class="link-notification">Mugs</a></li>
                        <li><a href="/promotional-items/can-koozies"    class="link-notification">Can Koozies</a></li>
                        <li><a href="/promotional-items/tote-bags"      class="link-notification">Tote Bags</a></li>
                        <li><a href="/promotional-items/towels"         class="link-notification">Towels</a></li>
                        <li><a href="/promotional-items/mouse-pads"     class="link-notification">Mouse Pads</a></li>
                        <li><a href="/promotional-items/drink-coasters" class="link-notification">Drink Coasters</a></li>
                    </ul>

                    {{-- Design Services --}}
                    {{-- <h5 class="font-semibold text-charcoal uppercase mb-1.5 break-after-avoid">
                        <a href="/design-services" class="link-nav">Design Services</a>
                    </h5> --}}
                    <ul class="space-y-1">
                        <li><a href="/design-services/graphic-design" class="link-notification">Graphic Design</a></li>
                        <li><a href="/design-services/logo-design"    class="link-notification">Logo Design</a></li>
                    </ul>

                </div>
            </div>

            {{-- Contact --}}
            <div id="contact" class="col-span-1">
                <div class="text-sm space-y-2">
                    <p class="text-charcoal">Joliet, IL</p>
                    <p class="text-charcoal-light leading-relaxed">
                        121 Springfield Avenue<br>
                        Suite 103<br>
                        Joliet, IL 60435
                    </p>
                    <p>
                        <a href="tel:+18153498600" class="link-notification">
                            (815) 349-8600
                        </a>
                    </p>
                </div>
            </div>

        </div>

        <div id="copywrite" class="pt-2 border-t border-linen-dark text-center text-charcoal-light">
            <p class="text-xs pb-2">&copy;Copyright 2026 Top 5%, LLC (Top 5 Percent, LLC) &nbsp;&nbsp;|&nbsp;&nbsp; Top 5%, LLC (Top 5 Percent, LLC) is a Registered Trademark</p>
            <p class="text-xs mt-1">Powered by <span class="font-medium">Dream Studio Solutions</span></p>
        </div>

    </div>
</footer>
