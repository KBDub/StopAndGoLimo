@props(['id' => 'wedding-transport-guide'])

{{--
    x-sections.wedding-transport-guide
    ─────────────────────────────────────────────────────────────────────────────
    White-background 4-card (2×2) section covering the four distinct wedding-day
    rider segments. Uses navy-card pattern matching #wedding-packages for
    visual consistency, but on a white background for contrast.

    H2  — "Four Ways We Serve Your Wedding Day"
      H3 — Card titles: Bridal Party, Groomsmen, Wedding Guest Shuttle,
            Airport Arrivals for Out-of-Town Family

    Local SEO: names O'Hare, Midway, Chicagoland venues context, Will County,
    Fox Valley, Chicago area — answers "wedding party bus near me Chicagoland."
    ─────────────────────────────────────────────────────────────────────────────
    Props
      id  string  Section anchor id. Defaults to 'wedding-transport-guide'.
--}}

<section id="{{ $id }}" style="background: var(--white); scroll-margin-top: 80px;">
    <div class="max-w-7xl mx-auto px-6 py-16 lg:py-24">

        <div class="text-center mb-12">
            <h2 style="font-family: var(--font-head); font-size: var(--font-size-h2); color: var(--navy); letter-spacing: var(--letter-spacing-h2); line-height: 1.2; font-weight: 700;" class="mb-4">
                Four Ways We Serve Your <strong>Wedding Day</strong>
            </h2>
            <p style="font-family: var(--font-body); font-size: 1.2rem; color: var(--slate); line-height: 1.6;" class="max-w-2xl mx-auto">
                A single wedding can involve multiple groups moving at different times. We coordinate all of it so you do not have to.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach([
                [
                    'title' => 'Bridal Party Transport',
                    'tag'   => 'Ceremony to reception and every stop between',
                    'body'  => 'We pick up the bridal party at the hotel or home, arrive at the ceremony venue on schedule, and then move the group to the reception, photo locations, and any other stops your timeline calls for. Everyone rides together. No one misses a moment.',
                ],
                [
                    'title' => 'Groomsmen Pickup',
                    'tag'   => 'Hotel or home to ceremony, together and on time',
                    'body'  => 'Getting the guys there is the job. We handle pickup at the hotel, home, or designated meeting point, deliver the groomsmen to the venue before the ceremony begins, and keep the morning stress-free for everyone involved.',
                ],
                [
                    'title' => 'Wedding Guest Shuttle',
                    'tag'   => 'Round trips between hotel and venue all evening',
                    'body'  => 'Give your guests a safe ride to and from the reception without asking anyone to drive. We run round trips on a schedule between the hotel and venue throughout the evening, so guests can celebrate without worrying about getting home.',
                ],
                [
                    'title' => 'Airport Arrivals',
                    'tag'   => 'O\'Hare, Midway, and Rockford pickups',
                    'body'  => 'Out-of-town family and friends flying in deserve the same professional experience as your wedding party. We handle airport pickups at O\'Hare, Midway, and Rockford and transport guests directly to your venue, hotel, or any Chicagoland destination.',
                ],
            ] as $segment)
            <div style="background: var(--navy); padding: 2rem; display: flex; flex-direction: column; gap: 0.75rem;">
                <div>
                    <h3 style="font-family: var(--font-head); font-size: 1.2rem; font-weight: 700; color: var(--champagne); line-height: 1.3;" class="mb-1">
                        {{ $segment['title'] }}
                    </h3>
                    <p style="font-family: var(--font-head); font-size: 0.85rem; font-weight: 500; color: var(--azure); letter-spacing: 0.04em; text-transform: none; line-height: 1.3;">
                        {{ $segment['tag'] }}
                    </p>
                </div>
                <p style="font-family: var(--font-body); color: var(--cloud); font-size: 1rem; line-height: 1.65;">
                    {{ $segment['body'] }}
                </p>
            </div>
            @endforeach
        </div>

        <div class="mt-10 text-center">
            <p style="font-family: var(--font-body); font-size: 1rem; color: var(--slate); line-height: 1.7;" class="mb-6 max-w-2xl mx-auto">
                Popular wedding weekends book up months in advance across Chicagoland. If you have a date in mind, contact us now to check availability and lock in your vehicles before they are gone.
            </p>
            <x-ui.button-champagne-gradient href="/get-a-quote" size="md" radius="soft">
                Get a Free Wedding Quote
            </x-ui.button-champagne-gradient>
        </div>

    </div>
</section>
