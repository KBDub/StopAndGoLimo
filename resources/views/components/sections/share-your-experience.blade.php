@props([
    'locations' => [
        [
            'city'        => 'Naperville',
            'address'     => '3420 Lacrosse Ln, Suite 116,',
            'addressLine2'=> 'Naperville, IL 60564',
            'phone'       => '(815) 585-6922',
            'reviewHref'  => '#',
        ],
        [
            'city'        => 'New Lenox',
            'address'     => '400 E. Lincoln Hwy,',
            'addressLine2'=> 'New Lenox, IL 60451',
            'phone'       => '(708) 315-4445',
            'reviewHref'  => '#',
        ],
    ],
    'showSingleButton'   => false,
    'singleButtonText'   => 'Leave a review',
    'singleButtonHref'   => '#',
])

<section style="background: var(--cloud-light);" class="py-12 lg:py-[6.25rem]">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Heading + champagne rule --}}
        <div style="width: fit-content; margin: 0 auto 1.5rem; text-align: center;">
            <h2 class="font-head" style="font-size: clamp(1.75rem, 5vw, 3rem); font-weight: 400; color: var(--navy); line-height: 1.2; letter-spacing: 0.5px;">
                Share <strong style="font-weight: 700;">Your Experience</strong> With Us
            </h2>
            <div style="height: 3px; background: var(--champagne); width: 116%; margin-left: -8%; margin-top: 0.85rem;"></div>
        </div>

        {{-- Body copy --}}
        <p class="font-body" style="text-align: center; color: var(--navy); font-size: 20px; font-weight: 400; letter-spacing: -0.9px; line-height: 30px; max-width: 56rem; margin: 0 auto 2.5rem;">
            We'd love to hear about your journey! Leave a review and let us know how we can make your future trips even better.
            Your feedback helps us improve and ensures we keep delivering exceptional service.
        </p>

        @if($showSingleButton)

            {{-- Single centered button variant --}}
            <div style="text-align: center; margin-top: 1rem;">
                <x-ui.button
                    variant="outline-light"
                    radius="soft"
                    href="{{ $singleButtonHref }}">
                    {{ $singleButtonText }}
                </x-ui.button>
            </div>

        @else

            {{-- Inner dark card: two location columns --}}
            <div style="background: var(--navy); padding: 2.5rem 3rem;">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-8 gap-y-12">
                    @foreach($locations as $location)
                        <div style="text-align: center;">

                            {{-- Inline SVG map pin --}}
                            <div class="mx-auto mb-4" style="width: 4rem; height: auto;">
                                <svg aria-hidden="true" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg"
                                     style="fill: var(--champagne); width: 4rem; height: auto; margin: 0 auto;">
                                    <path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path>
                                </svg>
                            </div>

                            {{-- City name — H5 spec: Poppins 20px / SemiBold 600 --}}
                            <h5 class="font-head" style="font-size: 1.25rem; font-weight: 600; color: var(--champagne); margin-bottom: 1rem;">
                                {{ $location['city'] }}
                            </h5>

                            {{-- Address --}}
                            <p class="font-body" style="color: var(--cloud-light); font-size: 1.25rem; line-height: 1.5; margin-bottom: 1.5rem;">
                                {{ $location['address'] }}<br>
                                {{ $location['addressLine2'] }}<br>
                                Phone: {{ $location['phone'] }}
                            </p>

                            {{-- Review button --}}
                            <x-ui.button
                                variant="champagne-solid"
                                radius="soft"
                                href="{{ $location['reviewHref'] }}">
                                Leave a Review
                            </x-ui.button>

                        </div>
                    @endforeach
                </div>
            </div>

        @endif

    </div>
</section>
