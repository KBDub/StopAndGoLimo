<footer class="bg-linen text-charcoal py-2 border-t border-linen-dark">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Mobile footer (below md) --}}
        <div class="block md:hidden mb-6">

            {{-- Row 1: Services (top-level only) --}}
            <div class="mb-5">
                <h4 class="font-semibold text-charcoal text-base mb-2 border-b border-linen-dark pb-1 text-center">Services</h4>
                <div class="grid grid-cols-2 gap-x-6 gap-y-1.5 text-sm text-center">
                    <a href="/custom-apparel" class="link-notification font-medium">Custom Apparel</a>
                    <a href="/signs" class="link-notification font-medium">Signs &amp; Banners</a>
                    <a href="/vehicle-graphics" class="link-notification font-medium">Vehicle Graphics</a>
                    <a href="/stickers" class="link-notification font-medium">Decals &amp; Stickers</a>
                    <a href="/promotional-items" class="link-notification font-medium">Promotional Items</a>
                    <a href="/design-services" class="link-notification font-medium">Design Services</a>
                </div>
            </div>

            {{-- Row 2: Quick Links --}}
            <div class="mb-5">
                <h4 class="font-semibold text-charcoal text-base mb-2 border-b border-linen-dark pb-1 text-center">Quick Links</h4>
                <div class="flex flex-wrap justify-center gap-x-6 gap-y-1.5 text-sm text-center">
                    <a href="/" class="link-notification">Home</a>
                    <a href="/about-us" class="link-notification">About Us</a>
                    <a href="/articles" class="link-notification">Articles</a>
                    <a href="/service-areas" class="link-notification">Service Areas</a>
                    <a href="/reviews" class="link-notification">Reviews</a>
                    <a href="/privacy-policy" class="link-notification">Privacy Policy</a>
                    <a href="/terms-of-use" class="link-notification">Terms of Use</a>
                    <a href="#" onclick="event.preventDefault(); window.dispatchEvent(new CustomEvent('open-contact-modal'))" class="link-notification">Contact Us</a>
                </div>
            </div>

            {{-- Row 3: Contact (no title) --}}
            <div class="text-sm space-y-1 text-center">
                <p class="text-charcoal-light">121 Springfield Avenue, Suite 103, Joliet, IL 60435</p>
                <p><a href="tel:+18153498600" class="link-notification font-semibold">(815) 349-8600</a></p>
            </div>

        </div>

        {{-- Desktop footer (md and above) --}}
        <div class="hidden md:grid grid-cols-8 gap-x-4 mb-6 items-start">

            {{-- Logo --}}
            <div id="logo" class="col-span-1 text-center">
                <img src="/images/logos/top5-logo.gif" alt="Top 5 Percent" class="h-10 mb-3 mx-auto">
                <p class="text-sm text-charcoal-light leading-relaxed">Premium Custom Signage & Apparel. Veteran-owned, proudly serving & headquartered in Joliet, IL since 2017.</p>
            </div>

            {{-- Quick Links --}}
            <div id="quick-links" class="col-span-1">
                <h4 class="font-semibold text-charcoal text-xl mb-3 text-center">Quick Links</h4>
                <ul class="space-y-1.5 text-sm text-center">
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

            {{-- Services, 5-column newspaper spill --}}
            <div id="services" class="col-span-5">
                <h4 class="font-semibold text-charcoal text-xl mb-3 text-center">Services</h4>
                <div class="columns-5 gap-x-2 text-sm">

                    {{-- Custom Apparel --}}
                    <h5 class="font-semibold text-charcoal uppercase mb-1.5 break-after-avoid text-center text-sm">
                        <a href="/custom-apparel" class="text-charcoal hover:text-sunburst transition-colors no-underline">Custom Apparel</a>
                    </h5>
                    <ul class="space-y-1 mb-4 text-center">
                        <li><a href="/custom-apparel/printing-options/screen-printing"              class="link-notification">Screen Printing</a></li>
                        <li><a href="/custom-apparel/printing-options/embroidery"                   class="link-notification">Embroidery</a></li>
                        <li><a href="/custom-apparel/printing-options/dtf-printing"                class="link-notification">DTF Printing</a></li>
                        <li><a href="/custom-apparel/printing-options/dye-sublimation-printing"    class="link-notification">Dye Sublimation</a></li>
                        <li><a href="/custom-apparel/printing-options/rhinestone-apparel"           class="link-notification">Rhinestone Apparel</a></li>
                        <li><a href="/custom-apparel/specialty-materials/glitter-shirts"           class="link-notification">Glitter Shirts</a></li>
                        <li><a href="/custom-apparel/specialty-materials/foil-shirts"              class="link-notification">Foil Shirts</a></li>
                        <li><a href="/custom-apparel/specialty-materials/holographic-shirts"       class="link-notification">Holographic Shirts</a></li>
                        <li><a href="/custom-apparel/specialty-materials/puff-shirts"              class="link-notification">Puff Shirts</a></li>
                        <li><a href="/custom-apparel/group-wear/spirit-wear-shirts"              class="link-notification">Spirit Wear</a></li>
                        <li><a href="/custom-apparel/group-wear/corporate-wear-shirts"           class="link-notification">Corporate Wear</a></li>
                        <li><a href="/custom-apparel/group-wear/reunion-shirts"                  class="link-notification">Reunion Shirts</a></li>
                    </ul>

                    {{-- Signs & Banners --}}
                    <h5 class="font-semibold text-charcoal uppercase mb-1.5 break-after-avoid text-center text-sm">
                        <a href="/signs" class="text-charcoal hover:text-sunburst transition-colors no-underline">Signs & Banners</a>
                    </h5>
                    <ul class="space-y-1 mb-4 text-center">
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
                        <li><a href="/signs/ground-signs/sidewalk-signs-a-frame-signs"   class="link-notification">A-Frame Signs</a></li>
                    </ul>

                    {{-- Vehicle Graphics --}}
                    <h5 class="font-semibold text-charcoal uppercase mb-1.5 break-after-avoid text-center text-sm">
                        <a href="/vehicle-graphics" class="text-charcoal hover:text-sunburst transition-colors no-underline">Vehicle Graphics</a>
                    </h5>
                    <ul class="space-y-1 mb-4 text-center">
                        <li><a href="/vehicle-graphics/automobile-graphics" class="link-notification">Automobile Graphics</a></li>
                        <li><a href="/vehicle-graphics/vehicle-magnets"     class="link-notification">Vehicle Magnets</a></li>
                        <li><a href="/vehicle-graphics/dot-decals"          class="link-notification">DOT Decals</a></li>
                    </ul>

                    {{-- Decals & Stickers --}}
                    <h5 class="font-semibold text-charcoal uppercase mb-1.5 break-after-avoid text-center text-sm">
                        <a href="/stickers" class="text-charcoal hover:text-sunburst transition-colors no-underline">Decals & Stickers</a>
                    </h5>
                    <ul class="space-y-1 mb-4 text-center">
                        <li><a href="/stickers/standard-stickers-decals"      class="link-notification">Standard Stickers & Decals</a></li>
                        <li><a href="/stickers/custom-shaped-stickers-decals" class="link-notification">Custom-Shaped Stickers & Decals</a></li>
                    </ul>

                    {{-- Promotional Items --}}
                    <h5 class="font-semibold text-charcoal uppercase mb-1.5 break-after-avoid text-center text-sm">
                        <a href="/promotional-items" class="text-charcoal hover:text-sunburst transition-colors no-underline">Promotional Items</a>
                    </h5>
                    <ul class="space-y-1 mb-4 text-center">
                        <li><a href="/promotional-items/mugs"           class="link-notification">Mugs</a></li>
                        <li><a href="/promotional-items/can-koozies"    class="link-notification">Can Koozies</a></li>
                        <li><a href="/promotional-items/tote-bags"      class="link-notification">Tote Bags</a></li>
                        <li><a href="/promotional-items/towels"         class="link-notification">Towels</a></li>
                        <li><a href="/promotional-items/mouse-pads"     class="link-notification">Mouse Pads</a></li>
                        <li><a href="/promotional-items/drink-coasters" class="link-notification">Drink Coasters</a></li>
                    </ul>

                    {{-- Design Services --}}
                    <h5 class="font-semibold text-charcoal uppercase mb-1.5 break-after-avoid text-center text-sm">
                        <a href="/design-services" class="text-charcoal hover:text-sunburst transition-colors no-underline">Design Services</a>
                    </h5>
                    <ul class="space-y-1 text-center">
                        <li><a href="/design-services/graphic-design" class="link-notification">Graphic Design</a></li>
                        <li><a href="/design-services/logo-design"    class="link-notification">Logo Design</a></li>
                    </ul>

                </div>
            </div>

            {{-- Contact --}}
            <div id="contact" class="col-span-1">
                <h4 class="font-semibold text-charcoal text-xl mb-3 text-center">Contact</h4>
                <div class="text-sm space-y-2 text-center">
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
