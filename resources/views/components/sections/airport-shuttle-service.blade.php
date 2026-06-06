@props([
    'heading'     => 'Airport Shuttle',
    'headingTail' => 'Service',
    'body'        => 'At Stop & Go Airport Shuttle Service Inc., we know that air travel does not start and stop at the airport. A peaceful travel experience can make or break your trip, which is why it\'s so important to get started the right way with a smooth, reliable, direct ride to the airport. We take care of everything you need so you can genuinely enjoy stress-free travel to and from any of Chicago\'s airports, including:',
    'image'       => '/images/sections/airport-shuttle.png',
    'imageAlt'    => 'Chicago O\'Hare International Airport terminal and control tower',
    'airports'    => [
        'Chicago O\'Hare International Airport',
        'Chicago Midway International Airport',
        'Chicago Executive Airport, PWK',
        'Gary/Chicago International Airport',
        'Chicago Rockford International Airport (RFD)',
        'Lewis University Airport',
    ],
])

<section style="background: var(--cloud-light);" class="py-16">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Top: heading/body left, photo right --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-16 items-start mb-12">

            {{-- Left: heading + rule + body --}}
            <div>
                <div style="width: fit-content; margin-bottom: 2rem;">
                    <h2 class="font-head" style="font-size: clamp(1.6rem, 3.5vw, 2.4rem); font-weight: 400; color: var(--navy); line-height: 1.2;">
                        <strong style="font-weight: 700;">{{ $heading }}</strong> {{ $headingTail }}
                    </h2>
                    <div style="height: 3px; background: var(--champagne); width: 116%; margin-top: 0.85rem;"></div>
                </div>

                <p style="font-size: clamp(0.9rem, 1.4vw, 1rem); color: var(--navy); line-height: 1.8;">
                    {{ $body }}
                </p>
            </div>

            {{-- Right: airport photo --}}
            <div>
                <div style="aspect-ratio: 4/3; overflow: hidden;">
                    <img
                        src="{{ $image }}"
                        alt="{{ $imageAlt }}"
                        style="width: 100%; height: 100%; object-fit: cover; display: block;"
                    >
                </div>
            </div>

        </div>

        {{-- Airport cards grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach ($airports as $airport)
            <div style="background: var(--navy); padding: 2rem 1.5rem 1.75rem; text-align: center;">

                {{-- Champagne map-pin SVG --}}
                <div style="margin-bottom: 1.25rem; display: flex; justify-content: center;">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="width: 2.25rem; height: 2.25rem; fill: var(--champagne);" aria-hidden="true">
                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z"/>
                    </svg>
                </div>

                <p class="font-head" style="font-size: clamp(0.95rem, 1.5vw, 1.1rem); color: var(--cloud-light); font-weight: 400; line-height: 1.4; margin: 0;">
                    {{ $airport }}
                </p>

            </div>
            @endforeach
        </div>

    </div>
</section>
