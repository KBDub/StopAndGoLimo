@props([
    'heading'     => 'Airport Shuttle',
    'headingTail' => 'Service',
    'body'        => 'At Stop & Go Airport Shuttle Service Inc., we know that air travel does not start and stop at the airport. A peaceful travel experience can make or break your trip, which is why it\'s so important to get started the right way with a smooth, reliable, direct ride to the airport. We take care of everything you need so you can genuinely enjoy stress-free travel to and from any of Chicago\'s airports, including:',
    'image'       => 'https://newlenoxlimoservice.com/wp-content/uploads/2025/07/david-syphers-HL3gRIKJxT4-unsplash-1024x683.jpg',
    'imageAlt'    => 'Chicago O\'Hare International Airport terminal and control tower',
    'airports'    => [
        [
            'label' => 'Chicago O\'Hare International Airport',
            'href'  => 'https://www.flychicago.com/ohare/home/pages/default.aspx',
        ],
        [
            'label' => 'Chicago Midway International Airport',
            'href'  => 'https://www.flychicago.com/midway/home/pages/default.aspx',
        ],
        [
            'label' => 'Chicago Executive Airport, PWK',
            'href'  => 'https://flypwk.com/',
        ],
        [
            'label' => 'Gary/Chicago International Airport',
            'href'  => 'https://www.garychicagoairport.com/',
        ],
        [
            'label' => 'Chicago Rockford International Airport (RFD)',
            'href'  => 'https://flyrfd.com/',
        ],
        [
            'label' => 'Lewis University Airport',
            'href'  => 'https://www.lewisu.edu/administration/facilities/airport.htm',
        ],
    ],
])

<section id="airport-shuttle-service" style="background: var(--cloud-light); scroll-margin-top: 80px;" class="py-12 lg:py-[6.25rem]">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Top: heading/body left, photo right --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-16 items-start mb-12">

            {{-- Left: heading + rule + body --}}
            <div>
                <div style="width: fit-content; margin-bottom: 2rem;">
                    <h2 class="font-head" style="font-size: clamp(1.75rem, 5vw, 3rem); font-weight: 400; color: var(--navy); line-height: 1.2; letter-spacing: 0.5px;">
                        <strong style="font-weight: 700;">{{ $heading }}</strong> {{ $headingTail }}
                    </h2>
                    <div style="height: 3px; background: var(--champagne); width: 116%; margin-top: 0.85rem;"></div>
                </div>

                <p style="font-family: var(--font-body); font-size: 1.25rem; font-weight: 400; line-height: 1.5; color: var(--navy); margin-top: 6rem;">
                    {{ $body }}
                </p>
            </div>

            {{-- Right: airport photo (image container layout flagged for later) --}}
            <div class="flex justify-center md:justify-end">
                <div style="width: min(550px, 100%); aspect-ratio: 4/3; overflow: hidden;">
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
                <x-ui.rect-box
                    :label="$airport['label']"
                    :href="$airport['href']"
                />
            @endforeach
        </div>

    </div>
</section>
