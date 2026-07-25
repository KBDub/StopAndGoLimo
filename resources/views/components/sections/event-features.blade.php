@props([
    'id'            => 'event-features',
    'heading'       => 'The Experience',
    'headingBold'   => 'Beyond the Ballpark',
    'intro'         => 'A great event outing is about more than the venue. The neighborhood, the tradition, and the city around it are all part of the story.',
    'leftHeading'   => 'The Destination Experience',
    'leftParagraphs' => [],
    'rightHeading'  => 'Every Chicago Occasion Deserves a Great Ride',
    'rightItems'    => [],
])

{{--
    x-sections.event-features
    ─────────────────────────────────────────────────────────────────────────────
    White background, centered H2 + champagne underbar, two-column layout.
    Left column: prose paragraphs about the event/destination experience.
    Right column: cross-sell list of other Stop & Go services.

    Props
      id             string   Section id attribute. Defaults to 'event-features'.
      heading        string   H2 first part (plain text). Font-weight 400.
      headingBold    string   H2 bold part (font-weight 700, champagne color).
      intro          string   Intro paragraph. Plain text, centered.
      leftHeading    string   H3 for the left prose column.
      leftParagraphs array    Strings — each is a <p> in the left column. Falls back to generic.
      rightHeading   string   H3 for the right cross-sell column.
      rightItems     array    [{service, description}, ...]. Falls back to generic Stop & Go services.
--}}

@php
$resolvedLeft = count($leftParagraphs) ? $leftParagraphs : [
    'The venue and the neighborhood around it are two separate experiences — and both are worth arriving to in style.',
    'Your chauffeur handles the logistics so your group can focus on the event, the atmosphere, and the company.',
    'Whether the occasion calls for a pre-event stop, a post-event dinner, or a direct route home, we build the itinerary around your plans.',
];

$resolvedRight = count($rightItems) ? $rightItems : [
    ['service' => 'Weddings',                   'description' => 'Elegant stretch limousines for ceremonies, receptions, and bridal party transportation across Chicagoland.'],
    ['service' => 'Concerts and Live Events',   'description' => 'Wintrust Arena, United Center, Gallagher Way, and every major Chicago venue — the same reliable ride.'],
    ['service' => 'Corporate Outings',          'description' => 'Client entertainment, company events, and executive group transportation for any occasion.'],
    ['service' => 'Prom and Homecoming',        'description' => 'Safe, professional party bus service for Illinois high school students throughout Chicagoland.'],
    ['service' => 'Bachelor and Bachelorette',  'description' => 'Multi-stop bar crawls and celebration rides designed around your group\'s night.'],
    ['service' => 'Airport Transfers',          'description' => 'O\'Hare and Midway, 24 hours a day, 7 days a week, with real-time flight tracking.'],
];
@endphp

<section id="{{ $id }}" style="background: var(--white); scroll-margin-top: 80px;">
    <div class="max-w-7xl mx-auto px-6 py-12 lg:py-[6.25rem]">

        {{-- H2 Heading --}}
        <div class="flex justify-center mb-6">
            <div style="width: fit-content;">
                <h2 class="font-head" style="font-size: var(--font-size-h2); font-weight: 400; color: var(--navy); letter-spacing: var(--letter-spacing-h2); line-height: 1.2;">
                    {{ $heading }} <strong style="font-weight: 700; color: var(--champagne);">{{ $headingBold }}</strong>
                </h2>
                <div style="height: 3px; background: var(--champagne); width: 116%; margin-top: 0.85rem;"></div>
            </div>
        </div>

        <p class="font-body max-w-2xl mx-auto mb-12 lg:mb-16 text-center"
           style="font-size: 1.125rem; color: var(--slate); line-height: 1.6;">
            {{ $intro }}
        </p>

        {{-- Two-column layout --}}
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16">

            {{-- Left: prose about the event/destination --}}
            <div class="lg:col-span-7">
                <h3 class="font-head mb-6" style="font-size: 1.35rem; font-weight: 600; color: var(--navy); line-height: 1.3;">
                    {{ $leftHeading }}
                </h3>
                <div style="height: 2px; background: var(--champagne); width: 3.5rem; margin-bottom: 1.5rem;"></div>

                @foreach($resolvedLeft as $para)
                <p class="font-body mb-5" style="font-size: 1rem; color: var(--slate); line-height: 1.7;">
                    {{ $para }}
                </p>
                @endforeach
            </div>

            {{-- Right: cross-sell services --}}
            <div class="lg:col-span-5">
                <h3 class="font-head mb-6" style="font-size: 1.35rem; font-weight: 600; color: var(--navy); line-height: 1.3;">
                    {{ $rightHeading }}
                </h3>
                <div style="height: 2px; background: var(--champagne); width: 3.5rem; margin-bottom: 1.5rem;"></div>

                <div class="flex flex-col gap-4">
                    @foreach($resolvedRight as $item)
                    <div style="border-left: 3px solid var(--champagne); padding-left: 1rem;">
                        <h4 class="font-head mb-1" style="font-size: 0.975rem; font-weight: 700; color: var(--navy); line-height: 1.3;">
                            {{ $item['service'] }}
                        </h4>
                        <p class="font-body" style="font-size: 0.9rem; color: var(--slate); line-height: 1.55;">
                            {{ $item['description'] }}
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>

    </div>
</section>
