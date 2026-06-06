@props([
    'heading'     => 'Convenient Service Across',
    'headingBold' => 'Two Locations',
    'body'        => 'At Stop & Go Airport Shuttle Service Inc., we are proud to serve you from two distinct locations, making it easy for you to access our comprehensive transportation services. Whether you\'re in Plainfield or New Lenox, our team is ready to meet your needs with the same high level of service.',
    'locations'   => [
        [
            'city'    => 'Naperville',
            'address' => '3420 Lacrosse Ln, Suite 116, Naperville, IL 60564',
            'phone'   => '(815) 585-6922',
            'tel'     => '+18155856922',
        ],
        [
            'city'    => 'New Lenox',
            'address' => '400 E. Lincoln Hwy, New Lenox, IL 60451',
            'phone'   => '(708) 315-4445',
            'tel'     => '+17083154445',
        ],
    ],
])

<section style="background: var(--navy);" class="py-12 lg:py-16">
    <div class="max-w-7xl mx-auto px-6">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">

            {{-- Left: Heading + body --}}
            <div class="text-center lg:text-left">
                <h2 class="font-head mb-5" style="font-size: clamp(1.5rem, 3.5vw, 2.375rem); font-weight: 400; color: #ffffff; line-height: 1.25;">
                    {{ $heading }} <strong style="font-weight: 700; color: var(--champagne);">{{ $headingBold }}</strong>
                </h2>
                @if($body)
                    <p class="font-body" style="font-size: 1.0rem; line-height: 1.7; color: var(--cloud);">
                        {{ $body }}
                    </p>
                @endif
            </div>

            {{-- Right: Location cards --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                @foreach($locations as $loc)
                    <div class="text-center">

                        {{-- CSS-only map pin (no icon library) --}}
                        <div class="mx-auto mb-5" style="width: 2.25rem; height: 2.25rem; position: relative;">
                            <div style="
                                width: 2.25rem;
                                height: 2.25rem;
                                background: var(--champagne);
                                border-radius: 50% 50% 50% 0;
                                transform: rotate(-45deg);
                            "></div>
                        </div>

                        {{-- City name --}}
                        <h3 class="font-head mb-3" style="font-size: 1.25rem; font-weight: 600; color: var(--champagne);">
                            {{ $loc['city'] }}
                        </h3>

                        {{-- Address --}}
                        <p class="font-body mb-2" style="font-size: 0.9375rem; line-height: 1.6; color: var(--cloud);">
                            {{ $loc['address'] }}
                        </p>

                        {{-- Phone --}}
                        <p class="font-body" style="font-size: 0.9375rem; color: var(--cloud);">
                            Phone: <a href="tel:{{ $loc['tel'] }}" style="color: var(--cloud); text-decoration: none;" class="hover:underline">{{ $loc['phone'] }}</a>
                        </p>

                    </div>
                @endforeach
            </div>

        </div>
    </div>
</section>
