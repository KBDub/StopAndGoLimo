@props([
    'heading'       => 'Who are',
    'headingBold'   => 'we?',
    'stat'          => 'Over 15,000 happy customers',
    'image'         => '/images/sections/who-are-we.jpg',
    'imageAlt'      => 'Vincent Rover, founder of Stop & Go Airport Shuttle Service Inc., at the New Lenox Chamber ribbon cutting ceremony',
    'imagePosition' => 'left',
])

@php
    $imgOrder = $imagePosition === 'right' ? 'order-first lg:order-last' : 'order-first lg:order-first';
    $txtOrder = $imagePosition === 'right' ? 'order-last lg:order-first' : 'order-last lg:order-last';
@endphp

<section id="who-are-we" class="py-12 lg:py-[6.25rem]" style="background: var(--cloud-light); scroll-margin-top: 80px;">
    <div class="max-w-7xl mx-auto px-6">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">

            {{-- Image column --}}
            <div class="{{ $imgOrder }} w-full">
                <div class="overflow-hidden w-full aspect-[1/1]" style="box-shadow: var(--shadow-card);">
                    <img
                        src="{{ $image }}"
                        alt="{{ $imageAlt }}"
                        class="w-full h-full object-cover"
                        loading="lazy"
                    >
                </div>
            </div>

            {{-- Text column --}}
            <div class="{{ $txtOrder }} w-full">

                {{-- H2 with left-aligned champagne underbar --}}
                <div style="width: fit-content; margin-bottom: 2.5rem;">
                    <h2 class="font-head" style="font-size: clamp(1.75rem, 5vw, 3rem); line-height: 1.2; letter-spacing: 0.5px; color: var(--navy);">
                        <span style="font-weight: 400;">{{ $heading }} </span><span style="font-weight: 700; color: var(--champagne);">{{ $headingBold }}</span>
                    </h2>
                    <div style="height: 3px; background: var(--champagne); width: 116%; margin-top: 0.85rem;"></div>
                </div>

                {{-- Stat --}}
                <p class="font-head mb-6" style="font-size: 1.875rem; font-weight: 600; line-height: 1.3; color: var(--navy);">
                    {{ $stat }}
                </p>

                {{-- Body paragraphs --}}
                <p class="font-body mb-7" style="font-size: 1.25rem; line-height: 1.5; color: var(--slate);">
                    At Stop &amp; Go Airport Shuttle Service, we are dedicated to providing <strong>the most reliable limousine and transportation services in New Lenox</strong> and nearby areas. With years of experience, we focus on delivering punctual, safe, and comfortable rides every time.
                </p>

                <p class="font-body mb-7" style="font-size: 1.25rem; line-height: 1.5; color: var(--slate);">
                    Our fleet of well-maintained <strong>luxury vehicles and professional chauffeurs</strong> ensure you receive the highest quality service. Whether it's a special event, airport transfer, or business trip, you can trust us to be reliable and get you to your destination on time.
                </p>

                <p class="font-body" style="font-size: 1.25rem; line-height: 1.5; color: var(--slate);">
                    We know how important it is to have transportation you can count on. That's why our customers choose us for <strong>dependable and reliable service</strong>, day or night.
                </p>

            </div>

        </div>
    </div>
</section>
