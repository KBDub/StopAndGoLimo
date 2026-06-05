<div
    x-data="{ scrolled: false }"
    x-on:scroll.window="if (!scrolled && window.scrollY > 50) scrolled = true; else if (scrolled && window.scrollY < 10) scrolled = false"
    class="bg-navy text-cloud font-semibold sticky-header-part transition-all duration-300 py-0.5 text-xs"
    x-bind:class="scrolled ? 'py-0 text-xs' : 'py-0.5 text-xs'"
>
    <div class="max-w-7xl mx-auto px-4 flex items-center gap-4">

        {{-- LEFT: Phone --}}
        <div class="flex-1 flex items-center gap-3 whitespace-nowrap">

            {{-- Primary phone --}}
            <div class="flex items-center gap-1.5 shrink-0">
                <a href="tel:+18155856922" class="font-semibold text-champagne hover:text-champagne-light transition-colors">(815) 585-6922</a>
            </div>

            {{-- Social icons, desktop only --}}
            <div class="hidden lg:flex items-center gap-1.5 mx-auto shrink-0">

                <a href="https://www.google.com/maps/search/Stop+and+Go+Limo+New+Lenox+IL" target="_blank" rel="noopener" aria-label="Google Maps" class="text-cloud opacity-60 hover:opacity-100 hover:scale-125 hover:text-champagne transition-all duration-200">
                    <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M12.48 10.92v3.28h7.84c-.24 1.84-.853 3.187-1.787 4.133-1.147 1.147-2.933 2.4-6.053 2.4-4.827 0-8.6-3.893-8.6-8.72s3.773-8.72 8.6-8.72c2.6 0 4.507 1.027 5.907 2.347l2.307-2.307C18.747 1.44 16.133 0 12.48 0 5.867 0 .307 5.387.307 12s5.56 12 12.173 12c3.573 0 6.267-1.173 8.373-3.36 2.16-2.16 2.84-5.213 2.84-7.667 0-.76-.053-1.467-.173-2.053H12.48z"/>
                    </svg>
                </a>

                <a href="https://www.facebook.com/stopandgoairportshuttle" target="_blank" rel="noopener" aria-label="Facebook" class="text-cloud opacity-60 hover:opacity-100 hover:scale-125 hover:text-champagne transition-all duration-200">
                    <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                </a>

                <a href="https://www.instagram.com/stopandgolimo" target="_blank" rel="noopener" aria-label="Instagram" class="text-cloud opacity-60 hover:opacity-100 hover:scale-125 hover:text-champagne transition-all duration-200">
                    <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
                    </svg>
                </a>

                <a href="https://www.linkedin.com/company/stopandgolimo" target="_blank" rel="noopener" aria-label="LinkedIn" class="text-cloud opacity-60 hover:opacity-100 hover:scale-125 hover:text-champagne transition-all duration-200">
                    <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                    </svg>
                </a>
            </div>

        </div>

        {{-- MIDDLE: Tagline (desktop) / Book a Ride (mobile) --}}
        <span class="hidden md:block shrink-0 font-semibold text-cloud/80 whitespace-nowrap">
            Available 24/7 &nbsp;&middot;&nbsp; O'Hare &amp; Midway &nbsp;&middot;&nbsp; New Lenox, IL
        </span>
        <a href="#"
           onclick="event.preventDefault(); window.dispatchEvent(new CustomEvent('open-contact-modal'))"
           class="md:hidden text-champagne hover:text-champagne-light font-semibold whitespace-nowrap shrink-0 transition-colors">
            Book a Ride
        </a>

        {{-- RIGHT: Reviews + Service Areas --}}
        <div class="flex-1 flex items-center whitespace-nowrap">

            <div class="flex items-center gap-6 mx-auto shrink-0">
                <a href="/reviews" class="hidden md:flex items-center gap-1 font-semibold text-cloud/80 hover:text-champagne transition-colors">
                    Reviews
                </a>
                <a href="/service-areas" class="hidden md:flex items-center gap-1 font-semibold text-cloud/80 hover:text-champagne transition-colors">
                    Service Areas
                </a>
            </div>

            {{-- Cart at far right (kept for Lunar e-commerce compatibility) --}}
            <div class="shrink-0">
                @livewire('cart.cart-icon')
            </div>

        </div>

    </div>
</div>
