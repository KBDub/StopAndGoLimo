@props([
    'image'        => '/images/sections/car.jpg',
    'imageAlt'     => 'Stop & Go Airport Shuttle Service luxury vehicle',
    'heading'      => 'Follow Us On',
    'headingBold'  => 'Social Media',
    'facebook'     => 'https://www.facebook.com/',
    'twitter'      => 'https://twitter.com/',
    'mapSrc'       => 'https://maps.google.com/maps?q=Stop+%26+Go+Airport+Shuttle+Service&ll=41.67,-87.91&output=embed&z=9',
    'address'      => '400 E Lincoln Hwy, Suite 101A, New Lenox, IL 60451',
    'businessName' => 'Stop & Go Airport Shuttle Service, Inc.',
    'hours'        => 'Open 24/7 for your convenience. Reliable service, anytime you need it.',
    'phone'        => '(815) 585-6922',
    'phoneRaw'     => '+18155856922',
    'phoneAlt'     => '(708) 315-4445',
    'phoneAltRaw'  => '+17083154445',
    'email'        => 'vincent@newlenoxlimoservice.com',
])

{{-- Outer wrapper: position relative + overflow hidden so map clips at bottom --}}
<div style="position: relative; overflow: hidden;">

    {{-- ── Row 1: full-width car image with social content ── --}}
    <div style="position: relative; overflow: hidden;">
        <img
            src="{{ $image }}"
            alt="{{ $imageAlt }}"
            style="position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; display: block;"
        >
        <div style="position: absolute; inset: 0; background: rgba(10, 14, 35, 0.62);"></div>

        {{-- Content restricted to left ~60% so map has room on the right --}}
        <div style="position: relative; z-index: 1; padding: 3rem 2.5rem; max-width: 60%; display: flex; flex-direction: column; justify-content: flex-end; gap: 1.75rem; min-height: 320px;">

            <h2 class="font-head" style="font-size: clamp(1.5rem, 2.5vw, 2rem); font-weight: 400; color: var(--cloud-light); line-height: 1.25; margin: 0;">
                {{ $heading }}<br>
                <strong style="font-weight: 700;">{{ $headingBold }}</strong>
            </h2>

            <div style="display: flex; gap: 0.75rem;">
                <x-ui.facebook-chip :href="$facebook" />
                <x-ui.twitter-chip  :href="$twitter" />
                <x-ui.email-chip    href="mailto:{{ $email }}" />
            </div>
        </div>
    </div>

    {{-- ── Row 2: full-width navy contact strip ── --}}
    <div style="background: var(--navy);" class="py-10">
        <div style="max-width: 60%; padding-left: 2.5rem;">
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-8" style="max-width: 52rem;">

                {{-- Address --}}
                <div>
                    <div style="display:flex;align-items:center;gap:0.65rem;margin-bottom:0.6rem;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" style="width:1.1rem;fill:var(--cloud-light);" aria-hidden="true">
                            <path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.5c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V288H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/>
                        </svg>
                        <span style="font-family:var(--font-head);font-size:0.85rem;font-weight:600;letter-spacing:0.08em;color:var(--cloud-light);">Address</span>
                    </div>
                    <div style="height:2px;background:var(--champagne);width:3rem;margin-bottom:1rem;"></div>
                    <p style="font-family:var(--font-body);font-size:0.9rem;color:var(--cloud-light);line-height:1.7;margin:0;">
                        <strong style="display:block;margin-bottom:0.25rem;">{{ $businessName }}</strong>
                        {{ $address }}
                    </p>
                </div>

                {{-- Hours --}}
                <div>
                    <div style="display:flex;align-items:center;gap:0.65rem;margin-bottom:0.6rem;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="width:1.1rem;fill:var(--cloud-light);" aria-hidden="true">
                            <path d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/>
                        </svg>
                        <span style="font-family:var(--font-head);font-size:0.85rem;font-weight:600;letter-spacing:0.08em;color:var(--cloud-light);">Hours</span>
                    </div>
                    <div style="height:2px;background:var(--champagne);width:3rem;margin-bottom:1rem;"></div>
                    <p style="font-family:var(--font-body);font-size:0.9rem;color:var(--cloud-light);line-height:1.7;margin:0;">{{ $hours }}</p>
                </div>

                {{-- Phone & Email --}}
                <div>
                    <div style="display:flex;align-items:center;gap:0.65rem;margin-bottom:0.6rem;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="width:1.1rem;fill:var(--cloud-light);" aria-hidden="true">
                            <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/>
                        </svg>
                        <span style="font-family:var(--font-head);font-size:0.85rem;font-weight:600;letter-spacing:0.08em;color:var(--cloud-light);">Phone & Email</span>
                    </div>
                    <div style="height:2px;background:var(--champagne);width:3rem;margin-bottom:1rem;"></div>
                    <div style="font-family:var(--font-body);font-size:0.9rem;line-height:2;margin:0;">
                        <a href="tel:{{ $phoneRaw }}" style="display:block;color:var(--champagne);text-decoration:none;">{{ $phone }}</a>
                        @if($phoneAlt)
                        <a href="tel:{{ $phoneAltRaw }}" style="display:block;color:var(--champagne);text-decoration:none;">{{ $phoneAlt }}</a>
                        @endif
                        <a href="mailto:{{ $email }}" style="display:block;color:var(--cloud-light);text-decoration:none;margin-top:0.25rem;">{{ $email }}</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- ── Map: absolutely positioned over right ~45%, spanning both rows ── --}}
    <div class="hidden md:block" style="position:absolute;top:1.5rem;right:3rem;width:30%;aspect-ratio:1/1;z-index:10;border:0;border-left:4px solid var(--champagne);">
        <iframe
            src="{{ $mapSrc }}"
            width="100%"
            height="100%"
            style="display:block;border:0;width:100%;height:100%;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="Stop &amp; Go Airport Shuttle Service location map"
        ></iframe>
    </div>

    {{-- Map shown below on mobile (not overlaid) --}}
    <div class="block md:hidden" style="height:300px;">
        <iframe
            src="{{ $mapSrc }}"
            width="100%"
            height="300"
            style="display:block;border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="Stop &amp; Go Airport Shuttle Service location map"
        ></iframe>
    </div>

</div>
