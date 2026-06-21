@props([
    'headingPlain' => 'Our',
    'headingBold'  => 'Key Offers',
    'para1'        => 'At Stop & Go Airport Shuttle Service Inc., we know how hard it can be to find a reliable ride. That\'s why we work hard to offer clean vehicles, fast customer support, and respectful service every time. Our goal is to give you a smooth, worry-free travel experience that exceeds your expectations.',
    'para2'        => 'Stop & Go Airport Shuttle Service Inc. offers premium transportation for weddings, parties, sports events, and concerts across New Lenox and Plainfield, IL. We have years of experience providing quality service for any occasion. Whether you need a ride to a lavish wedding, a special prom night, a big party, or a major sporting event, our locally owned business is proud to serve you.',
    'ctaLabel'     => 'Book a ride',
    'ctaHref'      => '/bookings-reservations',
])

@php
// FA5 Solid icon SVG strings for service cards (full <svg> tag required by x-ui.service-thin-rect-card)
$svgPlane = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" fill="currentColor" aria-hidden="true"><path d="M476 3.2L12.5 270.6c-18.1 10.4-15.8 35.6 2.2 43.2L121 358.4l287.3-253.2c5.5-4.9 13.3 2.6 8.6 8.3L176 407v80.5c0 23.6 28.5 32.9 42.5 15.8L282 426l124.6 52.2c14.2 6 30.4-2.9 33-18.2l72-432C515 7.8 493.3-6.8 476 3.2z"/></svg>';

$svgUser = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="currentColor" aria-hidden="true"><path d="M313.6 304c-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0 80 64.5 80 144s64.5 144 144 144z"/></svg>';

$svgBus = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" aria-hidden="true"><path d="M488 128h-8V80c0-44.8-99.2-80-224-80S32 35.2 32 80v48h-8c-13.25 0-24 10.74-24 24v80c0 13.25 10.75 24 24 24h8v160c0 17.67 14.33 32 32 32v32c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32v-32h192v32c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32v-32c17.67 0 32-14.33 32-32V256h8c13.25 0 24-10.75 24-24v-80c0-13.26-10.75-24-24-24zM128 400c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 32zm256 0c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 32zm32-160H128V128h288v112z"/></svg>';

$svgBriefcase = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" aria-hidden="true"><path d="M320 336c0 8.84-7.16 16-16 16h-96c-8.84 0-16-7.16-16-16v-48H0v144c0 25.6 22.4 48 48 48h416c25.6 0 48-22.4 48-48V288H320v48zm144-208h-80V80c0-25.6-22.4-48-48-48H176c-25.6 0-48 22.4-48 48v48H48c-25.6 0-48 22.4-48 48v80h512v-80c0-25.6-22.4-48-48-48zm-144 0H192V96h128v32z"/></svg>';

$svgMusic = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" aria-hidden="true"><path d="M470.38 1.51L150.41 96A32 32 0 0 0 128 126.51v261.41A139 139 0 0 0 96 384c-53 0-96 28.66-96 64s43 64 96 64 96-28.66 96-64V214.32l256-75v184.61a138.4 138.4 0 0 0-32-3.93c-53 0-96 28.66-96 64s43 64 96 64 96-28.65 96-64V32a32 32 0 0 0-41.62-30.49z"/></svg>';

$svgCar = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" aria-hidden="true"><path d="M499.99 176h-59.87l-16.64-41.6C406.38 91.63 365.57 64 319.5 64h-127c-46.06 0-86.88 27.63-103.99 70.4L71.87 176H12.01C4.2 176-1.53 183.34.37 190.91l6 24C7.7 220.25 12.5 224 18.01 224h20.07C24.65 235.73 16 252.78 16 272v48c0 16.12 6.16 30.67 16 41.93V416c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32v-32h256v32c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32v-54.07c9.84-11.25 16-25.8 16-41.93v-48c0-19.22-8.65-36.27-22.07-48H494c5.51 0 10.31-3.75 11.64-9.09l6-24c1.89-7.57-3.84-14.91-11.65-14.91z"/></svg>';

$svgStar = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" fill="currentColor" aria-hidden="true"><path d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"/></svg>';

$svgRoad = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" fill="currentColor" aria-hidden="true"><path d="M573.19 402.67l-139.79-320C428.43 71.29 417.6 64 405.68 64h-97.59l2.45 23.16c.5 4.72-3.21 8.84-7.96 8.84h-49.16c-4.75 0-8.46-4.12-7.96-8.84L247.91 64h-97.59c-11.93 0-22.76 7.29-27.73 18.67L2.8 402.67C-6.45 423.86 8.31 448 30.54 448H195.9c10.16 0 19.76-5.16 25.44-13.73L256 384l34.66 50.27C296.34 442.84 305.94 448 316.1 448h165.36c22.23 0 36.99-24.14 27.73-45.33z"/></svg>';

$svgHeart = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" aria-hidden="true"><path d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 13 32.8 13 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z"/></svg>';
@endphp

<style>
    .sg-key-offers-body {
        display: grid;
        grid-template-columns: 1fr;
        gap: 2rem;
        align-items: start;
    }
    @@media (min-width: 1024px) {
        .sg-key-offers-body {
            grid-template-columns: 75fr 25fr;
        }
    }
</style>

{{-- ═══════════════════════════════════════════════════════════
     x-sections.our-key-offers
     Layer 1: section (full-width cloud-light bg)
     Layer 2: max-w-7xl constrained container
     ═══════════════════════════════════════════════════════════ --}}
<section id="our-key-offers" style="background: var(--cloud-light); scroll-margin-top: 80px;" class="py-12 lg:py-20">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Heading + champagne rule --}}
        <div style="width: fit-content; margin-bottom: 2rem;">
            <h2 class="font-head" style="font-size: var(--font-size-h2); font-weight: 400; color: var(--navy); line-height: 1.2; letter-spacing: var(--letter-spacing-h2);">
                {{ $headingPlain }} <strong style="font-weight: 700;">{{ $headingBold }}</strong>
            </h2>
            <div style="height: 3px; background: var(--champagne); width: 116%; margin-top: 0.85rem;"></div>
        </div>

        {{-- Key-offer strip: full inner width ─────────────────── --}}
        <div class="mb-10" style="display: flex; flex-wrap: wrap; align-items: stretch;">
            <x-ui.key-offer-item
                label="1-15 Passengers"
                viewBox="0 0 448 512"
                icon='<path d="M313.6 304c-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0 80 64.5 80 144s64.5 144 144 144z"/>'
            />
            <x-ui.key-offer-item
                label="Any Occasion"
                viewBox="0 0 512 512"
                icon='<path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"/>'
            />
            <x-ui.key-offer-item
                label="Music System"
                viewBox="0 0 512 512"
                icon='<path d="M470.38 1.51L150.41 96A32 32 0 0 0 128 126.51v261.41A139 139 0 0 0 96 384c-53 0-96 28.66-96 64s43 64 96 64 96-28.66 96-64V214.32l256-75v184.61a138.4 138.4 0 0 0-32-3.93c-53 0-96 28.66-96 64s43 64 96 64 96-28.65 96-64V32a32 32 0 0 0-41.62-30.49z"/>'
            />
            <x-ui.key-offer-item
                label="Various Brands"
                viewBox="0 0 512 512"
                :divider="false"
                icon='<path d="M499.99 176h-59.87l-16.64-41.6C406.38 91.63 365.57 64 319.5 64h-127c-46.06 0-86.88 27.63-103.99 70.4L71.87 176H12.01C4.2 176-1.53 183.34.37 190.91l6 24C7.7 220.25 12.5 224 18.01 224h20.07C24.65 235.73 16 252.78 16 272v48c0 16.12 6.16 30.67 16 41.93V416c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32v-32h256v32c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32v-54.07c9.84-11.25 16-25.8 16-41.93v-48c0-19.22-8.65-36.27-22.07-48H494c5.51 0 10.31-3.75 11.64-9.09l6-24c1.89-7.57-3.84-14.91-11.65-14.91z"/>'
            />
        </div>

        {{-- Body: 65/35 two-column grid ────────────────────────── --}}
        <div class="sg-key-offers-body">

            {{-- Left column: text, images, text, cta ──────────── --}}
            <div>
                <p class="font-body" style="font-size: 1.25rem; font-weight: 400; color: var(--slate); line-height: 1.5;">
                    {{ $para1 }}
                </p>

                {{-- 2×2 image grid (16:9 aspect) — 2rem margin above + below per §7 content-image spec --}}
                <div class="grid grid-cols-2 gap-3" style="margin-top: 2rem; margin-bottom: 2rem;">
                    <img
                        src="/images/services/walking-to-vehicle.jpg"
                        alt="Chauffeur walking a client to a black luxury SUV"
                        class="w-full object-cover"
                        style="aspect-ratio: 16 / 9;"
                        loading="lazy"
                    />
                    <img
                        src="/images/services/toyota-vehicles.jpg"
                        alt="Fleet of black Toyota SUVs ready for airport transfers"
                        class="w-full object-cover"
                        style="aspect-ratio: 16 / 9;"
                        loading="lazy"
                    />
                    <img
                        src="/images/services/meet-and-greet.jpg"
                        alt="Driver greeting a client at the airport terminal"
                        class="w-full object-cover"
                        style="aspect-ratio: 16 / 9;"
                        loading="lazy"
                    />
                    <img
                        src="/images/services/assistance-getting-out.jpg"
                        alt="Chauffeur helping a passenger step out of a luxury vehicle"
                        class="w-full object-cover"
                        style="aspect-ratio: 16 / 9;"
                        loading="lazy"
                    />
                </div>

                <p class="font-body" style="font-size: 1.25rem; font-weight: 400; color: var(--slate); line-height: 1.5;">
                    {{ $para2 }}
                </p>

                {{-- CTA: center-aligned, soft radius (10px) per §6.1 --}}
                <div style="text-align: center; margin-top: 2rem;">
                    <x-ui.button-navy-gold :href="$ctaHref" size="md" radius="soft">
                        {{ $ctaLabel }}
                    </x-ui.button-navy-gold>
                </div>
            </div>

            {{-- Right column: service navigation cards ─────────── --}}
            <div class="flex flex-col gap-2">
                <x-ui.service-thin-rect-card
                    label="Airport Shuttle Service"
                    href="/airport-shuttle-ohare-midway"
                    :icon="$svgPlane"
                />
                <x-ui.service-thin-rect-card
                    label="Chauffeur"
                    href="/chauffeurs"
                    :icon="$svgUser"
                />
                <x-ui.service-thin-rect-card
                    label="Coach Buses"
                    href="/coach-buses"
                    :icon="$svgBus"
                />
                <x-ui.service-thin-rect-card
                    label="Corporate Car Services"
                    href="/corporate-car-services"
                    :icon="$svgBriefcase"
                />
                <x-ui.service-thin-rect-card
                    label="Party Bus"
                    href="/party-bus-rental-chicago"
                    :icon="$svgMusic"
                />
                <x-ui.service-thin-rect-card
                    label="Limousine Services"
                    href="/limousine-services"
                    :icon="$svgCar"
                />
                <x-ui.service-thin-rect-card
                    label="Special Event Limousine"
                    href="/special-event-limousine"
                    :icon="$svgStar"
                />
                <x-ui.service-thin-rect-card
                    label="Town Car Services"
                    href="/town-car-services"
                    :icon="$svgCar"
                />
                <x-ui.service-thin-rect-card
                    label="Transportation Services"
                    href="/transportation-services"
                    :icon="$svgRoad"
                />
                <x-ui.service-thin-rect-card
                    label="Wedding Limousine Services"
                    href="/wedding-limousine-services"
                    :icon="$svgHeart"
                />
            </div>

        </div>

    </div>
</section>
