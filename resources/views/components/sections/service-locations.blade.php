@props([
    'heading'     => 'Convenient Service Across',
    'headingBold' => 'All of Chicagoland',
    'body'        => 'Stop & Go Airport Shuttle Service, Inc. provides 24/7 flat-rate chauffeured transportation across all of Chicagoland. Our drivers cover every suburb from Will County north to Lake County, and from DuPage County into the city. Need a flat-rate ride to O\'Hare or Midway? We track your flight in real time and meet you at arrivals. Planning a big night out at a concert, a Bears or Cubs game, a wedding, or a prom? We have executive sedans, luxury SUVs, stretch limousines, Mercedes Sprinter vans, and party buses ready for your group. Every vehicle is clean, insured, and driven by a uniformed, background-checked chauffeur.',
    'chambers'    => ['Naperville', 'Bolingbrook', 'Orland Park'],
])

<section id="service-locations" style="background: var(--navy); scroll-margin-top: 80px;" class="py-12 lg:py-[6.25rem]">
    <div class="max-w-7xl mx-auto px-6">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">

            {{-- Left: Heading + body --}}
            <div>
                <div style="width: fit-content; margin: 0 auto 1.5rem; text-align: center;">
                    <h2 class="font-head" style="font-size: var(--font-size-h2); font-weight: 400; color: var(--cloud-light); line-height: 1.2; letter-spacing: var(--letter-spacing-h2);">
                        {{ $heading }}<br>
                        <strong style="font-weight: 700; color: var(--champagne);">{{ $headingBold }}</strong>
                    </h2>
                    <div style="height: 3px; background: var(--champagne); width: 116%; margin-left: -8%; margin-top: 0.85rem;"></div>
                </div>

                @if($body)
                    <p class="font-body" style="font-size: 1.1rem; line-height: 1.75; color: var(--cloud); text-align: center;">
                        {{ $body }}
                    </p>
                @endif
            </div>

            {{-- Right: Chamber of Commerce section --}}
            <div style="text-align: center;">

                {{-- Single community icon --}}
                <div style="margin: 0 auto 1.5rem;">
                    <img
                        src="/icons/community-people2.svg"
                        alt="Stop and Go Limo chamber of commerce community members icon"
                        style="width: 5rem; height: auto; display: block; margin: 0 auto;"
                    >
                </div>

                {{-- Chamber heading --}}
                <h4 class="font-head" style="font-size: 1.25rem; font-weight: 600; color: var(--champagne); letter-spacing: 0.04em; margin-bottom: 0.5rem;">
                    Proud Chamber of Commerce Member
                </h4>

                {{-- Champagne rule (H4 fixed-width style) --}}
                <div style="height: 3px; background: var(--champagne); width: 4rem; margin: 0 auto 1.25rem;"></div>

                {{-- Chamber cities --}}
                <p class="font-body" style="font-size: 1rem; color: var(--cloud-light); font-weight: 600; letter-spacing: 0.05em; margin-bottom: 1.25rem;">
                    {{ implode(' · ', $chambers) }}
                </p>

                {{-- SEO community copy --}}
                <p class="font-body" style="font-size: 1rem; line-height: 1.75; color: var(--cloud);">
                    As an active chamber member in Naperville, Bolingbrook, and Orland Park, Stop &amp; Go is deeply rooted in the communities we serve. We believe outstanding Chicagoland transportation starts with local knowledge, neighborhood accountability, and a genuine commitment to every rider. From the southwest suburbs to the North Shore, we are your neighbors and your dedicated chauffeured transportation provider across the entire metro area.
                </p>

            </div>

        </div>
    </div>
</section>
