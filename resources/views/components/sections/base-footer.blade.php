@props([
    'year'        => date('Y'),
    'businessName' => 'Stop & Go Airport Shuttle Service, Inc.',
    'privacyHref' => '/privacy-policy',
    'termsHref'   => '/terms-conditions',
])

<footer id="base-footer" style="background: var(--navy-dark); border-top: 1px solid var(--navy-light); scroll-margin-top: 80px;" class="py-4">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 items-center">

            {{-- Left: copyright --}}
            <p style="font-family: var(--font-body); font-size: 0.8rem; color: var(--cloud-light); margin: 0; line-height: 1.5;">
                &copy; Copyright {{ $year }} {{ $businessName }} All Rights Reserved.
            </p>

            {{-- Right: legal links --}}
            <div style="display: flex; align-items: center; gap: 0.5rem; justify-content: flex-end;">
                <span style="font-family: var(--font-body); font-size: 0.8rem; color: var(--cloud-light); white-space: nowrap;">Privacy Policy</span>
                <span style="color: var(--cloud-light); font-size: 0.8rem;">|</span>
                <span style="font-family: var(--font-body); font-size: 0.8rem; color: var(--cloud-light); white-space: nowrap;">Terms &amp; Conditions</span>
            </div>

        </div>
    </div>
</footer>
