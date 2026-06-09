@props([
    'heading'     => 'The Stop & Go',
    'headingBold' => 'Story',
])

@php
$entries = [
    [
        'title' => 'March 26, 2015 — Vincent Rover',
        'body'  => 'Stop & Go Airport Shuttle Service was established more than ten years ago with a vision to provide <strong>trustworthy</strong> transportation solutions to the New Lenox community. From our modest beginnings with just a few vehicles, we quickly built a reputation for <strong>professional</strong> and courteous service, earning the trust of our growing clientele.',
    ],
    [
        'title' => 'Our Journey',
        'body'  => 'As demand increased, we expanded both our fleet and service offerings, investing in top-quality vehicles and ongoing training for our chauffeurs. Our team\'s <strong>experience</strong> and dedication have allowed us to deliver consistent, high-standard rides for every occasion, whether it\'s a wedding, corporate event, or airport transfer.',
    ],
    [
        'title' => 'Our Roots and Growth',
        'body'  => 'From humble beginnings serving the New Lenox community, we have grown steadily by focusing on dependable service and customer satisfaction. Our commitment to safety, professionalism, and timely transportation has allowed us to expand our fleet and service areas while maintaining the personal touch that keeps clients coming back.',
    ],
    [
        'title' => 'Today and Beyond',
        'body'  => 'Today, Stop & Go continues to uphold a commitment to <strong>quality</strong> and <strong>dedication</strong> in every trip. Our focus on safety, <strong>timeliness</strong>, and customer satisfaction has made us a preferred transportation provider in the region. Moving forward, we remain committed to growing our fleet and expanding our service areas to serve you better.',
    ],
];
@endphp

<section class="py-12 lg:py-[6.25rem]" style="background: var(--navy);">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Section heading with left-aligned champagne underbar --}}
        <div style="width: fit-content; margin-bottom: 3rem;">
            <h2 class="font-head" style="font-size: clamp(1.75rem, 5vw, 3rem); line-height: 1.2; letter-spacing: 0.5px; color: var(--white);">
                <span style="font-weight: 400;">{{ $heading }} </span><span style="font-weight: 700; color: var(--champagne);">{{ $headingBold }}</span>
            </h2>
            <div style="height: 3px; background: var(--champagne); width: 116%; margin-top: 0.85rem;"></div>
        </div>

        {{-- Story entries --}}
        <div class="grid grid-cols-1" style="gap: 3rem; max-width: 56rem;">

            @foreach($entries as $entry)
                <div>

                    {{-- Entry title — sits above the border, not inside it --}}
                    <h3 class="font-head" style="font-size: 1.5rem; font-weight: 600; font-style: italic; color: var(--champagne); line-height: 1.3; margin-bottom: 0.75rem;">
                        {{ $entry['title'] }}
                    </h3>

                    {{-- Entry body — border starts here --}}
                    <p class="font-body mb-7" style="font-size: 1.25rem; font-weight: 400; line-height: 1.5; color: var(--cloud); border-left: 8px solid var(--white); padding-left: 2rem;">
                        {!! $entry['body'] !!}
                    </p>

                </div>
            @endforeach

        </div>

    </div>
</section>
