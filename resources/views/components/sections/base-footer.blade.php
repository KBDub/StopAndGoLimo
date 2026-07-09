@props([
    'year'        => date('Y'),
    'businessName' => 'Stop & Go Airport Shuttle Service, Inc.',
    'privacyHref' => '/privacy-policy',
    'termsHref'   => '/terms-conditions',
])

<footer id="base-footer" style="background: var(--navy-dark); border-top: 1px solid var(--navy-light); scroll-margin-top: 80px;" class="py-4">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 items-center">

            {{-- Left: copyright --}}
            <p style="font-family: var(--font-body); font-size: 0.8rem; color: var(--cloud-light); margin: 0; line-height: 1.5;">
                &copy; Copyright {{ $year }} {{ $businessName }} All Rights Reserved.
            </p>

            {{-- Center: social icons --}}
            <div style="display: flex; align-items: center; gap: 1rem; justify-content: center;">

                {{-- Facebook --}}
                <a href="https://www.facebook.com/p/Stop-Go-Airport-Shuttle-Service-61566415887805/"
                   target="_blank"
                   rel="noopener noreferrer"
                   aria-label="Stop &amp; Go Limo on Facebook"
                   style="color: var(--cloud-light); transition: color 0.2s;"
                   onmouseenter="this.style.color='var(--champagne)'"
                   onmouseleave="this.style.color='var(--cloud-light)'">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M22 12c0-5.522-4.477-10-10-10S2 6.478 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987H7.898V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/>
                    </svg>
                </a>

                {{-- Instagram --}}
                <a href="https://www.instagram.com/stopngo_airportshuttle/"
                   target="_blank"
                   rel="noopener noreferrer"
                   aria-label="Stop &amp; Go Limo on Instagram"
                   style="color: var(--cloud-light); transition: color 0.2s;"
                   onmouseenter="this.style.color='var(--champagne)'"
                   onmouseleave="this.style.color='var(--cloud-light)'">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                </a>

            </div>

            {{-- Right: legal links --}}
            <div style="display: flex; align-items: center; gap: 0.5rem; justify-content: flex-end;">
                <span style="font-family: var(--font-body); font-size: 0.8rem; color: var(--cloud-light); white-space: nowrap;">Privacy Policy</span>
                <span style="color: var(--cloud-light); font-size: 0.8rem;">|</span>
                <span style="font-family: var(--font-body); font-size: 0.8rem; color: var(--cloud-light); white-space: nowrap;">Terms &amp; Conditions</span>
            </div>

        </div>
    </div>
</footer>
