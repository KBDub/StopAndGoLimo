<div
    x-data="{ scrolled: false }"
    x-on:scroll.window="if (!scrolled && window.scrollY > 50) scrolled = true; else if (scrolled && window.scrollY < 10) scrolled = false"
    class="bg-sunburst text-charcoal font-semibold sticky-header-part transition-all duration-300"
    x-bind:class="scrolled ? 'py-0.5 text-xs' : 'py-1 text-sm'"
>
    <div class="max-w-7xl mx-auto px-4 flex items-center gap-4">

        {{-- LEFT: Phones (far left) · SM icons (near center) --}}
        <div class="flex-1 flex items-center gap-3 whitespace-nowrap">

            {{-- Phone numbers at far left --}}
            <div class="flex items-center gap-1.5 shrink-0">
                <a href="tel:+18153498600" class="font-semibold hover:underline" style="color:var(--color-azure)">(815) 349-8600</a>
                <span class="font-normal text-charcoal opacity-60">or</span>
                <a href="tel:+18153498600" class="font-semibold hover:underline" style="color:var(--color-azure)">(815) 349-TOP5</a>
            </div>

            {{-- Social media icons centered between phones and Free Shipping --}}
            <div class="flex items-center gap-1.5 mx-auto shrink-0">

                {{-- Google Maps --}}
                <a href="https://www.google.com/maps?cid=15797523837573086431" target="_blank" rel="noopener" aria-label="Google Maps" class="opacity-60 hover:opacity-100 transition-opacity">
                    <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M12.48 10.92v3.28h7.84c-.24 1.84-.853 3.187-1.787 4.133-1.147 1.147-2.933 2.4-6.053 2.4-4.827 0-8.6-3.893-8.6-8.72s3.773-8.72 8.6-8.72c2.6 0 4.507 1.027 5.907 2.347l2.307-2.307C18.747 1.44 16.133 0 12.48 0 5.867 0 .307 5.387.307 12s5.56 12 12.173 12c3.573 0 6.267-1.173 8.373-3.36 2.16-2.16 2.84-5.213 2.84-7.667 0-.76-.053-1.467-.173-2.053H12.48z"/>
                    </svg>
                </a>

                {{-- Facebook --}}
                <a href="https://www.facebook.com/top5percent/" target="_blank" rel="noopener" aria-label="Facebook" class="opacity-60 hover:opacity-100 transition-opacity">
                    <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                </a>

                {{-- Instagram --}}
                <a href="https://www.instagram.com/top5percentllc/" target="_blank" rel="noopener" aria-label="Instagram" class="opacity-60 hover:opacity-100 transition-opacity">
                    <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
                    </svg>
                </a>

                {{-- Pinterest --}}
                <a href="https://www.pinterest.com/top5percentllc/" target="_blank" rel="noopener" aria-label="Pinterest" class="opacity-60 hover:opacity-100 transition-opacity">
                    <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M12 0C5.373 0 0 5.373 0 12c0 5.084 3.163 9.426 7.627 11.174-.105-.949-.2-2.405.042-3.441.218-.937 1.407-5.965 1.407-5.965s-.359-.719-.359-1.782c0-1.668.967-2.914 2.171-2.914 1.023 0 1.518.769 1.518 1.69 0 1.029-.655 2.568-.994 3.995-.283 1.194.599 2.169 1.777 2.169 2.133 0 3.772-2.249 3.772-5.495 0-2.873-2.064-4.882-5.012-4.882-3.414 0-5.418 2.561-5.418 5.207 0 1.031.397 2.138.893 2.738a.36.36 0 01.083.345l-.333 1.36c-.053.22-.174.267-.402.161-1.499-.698-2.436-2.889-2.436-4.649 0-3.785 2.75-7.262 7.929-7.262 4.163 0 7.398 2.967 7.398 6.931 0 4.136-2.607 7.464-6.227 7.464-1.216 0-2.359-.632-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24 12 24c6.627 0 12-5.373 12-12S18.627 0 12 0z"/>
                    </svg>
                </a>

                {{-- YouTube --}}
                <a href="https://www.youtube.com/channel/UCAhLYjgb9745wv_yfmxSe6w/" target="_blank" rel="noopener" aria-label="YouTube" class="opacity-60 hover:opacity-100 transition-opacity">
                    <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M23.495 6.205a3.007 3.007 0 00-2.088-2.088c-1.87-.501-9.396-.501-9.396-.501s-7.507-.01-9.396.501A3.007 3.007 0 00.527 6.205a31.247 31.247 0 00-.522 5.805 31.247 31.247 0 00.522 5.783 3.007 3.007 0 002.088 2.088c1.868.502 9.396.502 9.396.502s7.506 0 9.396-.502a3.007 3.007 0 002.088-2.088 31.247 31.247 0 00.5-5.783 31.247 31.247 0 00-.5-5.805zM9.609 15.601V8.408l6.264 3.602z"/>
                    </svg>
                </a>

                {{-- X (Twitter) --}}
                <a href="https://www.twitter.com/top5percentllc/" target="_blank" rel="noopener" aria-label="X (Twitter)" class="opacity-60 hover:opacity-100 transition-opacity">
                    <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z"/>
                    </svg>
                </a>

                {{-- LinkedIn --}}
                <a href="https://www.linkedin.com/in/top5percent/" target="_blank" rel="noopener" aria-label="LinkedIn" class="opacity-60 hover:opacity-100 transition-opacity">
                    <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                    </svg>
                </a>
            </div>

        </div>

        {{-- MIDDLE: Free Shipping — centered because both sides are flex-1 --}}
        <a href="/top5pct-merchandise" class="shrink-0 font-semibold text-charcoal hover:underline whitespace-nowrap">
            Free Shipping on Orders Over $50!
        </a>

        {{-- RIGHT: Reviews · Service Areas (centered between Free Shipping and cart) · Cart (far right) --}}
        <div class="flex-1 flex items-center whitespace-nowrap">

            {{-- Reviews and Service Areas centered between Free Shipping and Cart --}}
            <div class="flex items-center gap-6 mx-auto shrink-0">

                {{-- Reviews --}}
                <a href="/reviews" class="flex items-center gap-1 font-semibold hover:underline" style="color:var(--color-azure)">
                    <svg class="w-3.5 h-3.5 shrink-0" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                    </svg>
                    Reviews
                </a>

                {{-- Service Areas --}}
                <a href="/service-area" class="flex items-center gap-1 font-semibold hover:underline" style="color:var(--color-azure)">
                    <svg class="w-3.5 h-3.5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/>
                        <circle cx="12" cy="10" r="3"/>
                    </svg>
                    Service Areas
                </a>

            </div>

            {{-- Cart at far right --}}
            <div class="shrink-0">
                @livewire('cart.cart-icon')
            </div>

        </div>

    </div>
</div>
