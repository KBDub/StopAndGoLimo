@props(['id' => 'limo-process-steps'])

{{--
    x-sections.limo-process-steps
    ─────────────────────────────────────────────────────────────────────────────
    White-background 6-card (2×3 grid, numbered) process transparency section.
    Covers what happens from booking to drop-off — the chauffeur prep, vehicle
    inspection, flight tracking, and arrival protocol.

    No other page on the site describes the operational process in this detail.
    Targets informational "what is included in a limo service" queries.

    H2  — "Six Things That Happen Before You Arrive"
      6 numbered cards: Book, Confirm, Prepare, Arrive Early, The Ride, Drop-Off
    ─────────────────────────────────────────────────────────────────────────────
    Props
      id  string  Section anchor. Defaults to 'limo-process-steps'.
--}}

<section id="{{ $id }}" style="background: var(--white); scroll-margin-top: 80px;">
    <div class="max-w-7xl mx-auto px-6 py-16 lg:py-24">

        <div class="text-center mb-12">
            <h2 style="font-family: var(--font-head); font-size: var(--font-size-h2); color: var(--navy); letter-spacing: var(--letter-spacing-h2); line-height: 1.2; font-weight: 700;" class="mb-4">
                Six Things That Happen <strong>Before You Arrive</strong>
            </h2>
            <p style="font-family: var(--font-body); font-size: 1.2rem; color: var(--slate); line-height: 1.6;" class="max-w-2xl mx-auto">
                A professional limo service is not just a car that shows up. Here is every step that happens on our end from the moment you book to the moment you reach your destination.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach([
                [
                    'num'   => '01',
                    'title' => 'You book and the rate locks',
                    'body'  => 'Online or by phone. Takes about two minutes. The moment you confirm your reservation, your flat rate is locked. No meter. No surge pricing. No adjustment for traffic or time of day. That number is final.',
                ],
                [
                    'num'   => '02',
                    'title' => 'We confirm every detail',
                    'body'  => 'The day before your ride, our team reviews your pickup address, timing, and any special instructions. For airport rides, we pull up your flight number and monitor it in real time from that point forward.',
                ],
                [
                    'num'   => '03',
                    'title' => 'Your vehicle is prepared',
                    'body'  => 'The assigned vehicle goes through a pre-trip inspection and a full detail before your pickup. Climate is set. Amenities are stocked if applicable. The vehicle is ready before your chauffeur leaves our lot.',
                ],
                [
                    'num'   => '04',
                    'title' => 'Your chauffeur arrives early',
                    'body'  => 'Our standard is 10 to 15 minutes ahead of your scheduled pickup. For airport arrivals, your chauffeur is at the terminal before your flight lands, holding a sign with your name at baggage claim.',
                ],
                [
                    'num'   => '05',
                    'title' => 'The ride runs on your schedule',
                    'body'  => 'Your chauffeur handles the route, the traffic, and any timing adjustments. Multi-stop itineraries are tracked. If your plans shift mid-ride, communicate with your chauffeur directly — we adapt.',
                ],
                [
                    'num'   => '06',
                    'title' => 'Drop-off and confirmation',
                    'body'  => 'Luggage is handled. Doors are opened. You are confirmed at your destination before your chauffeur leaves. If you have a return trip or a follow-on booking, those details are confirmed at drop-off.',
                ],
            ] as $step)
            <div style="background: var(--cloud-light); padding: 2rem; position: relative;">
                <div style="font-family: var(--font-head); font-size: 2.5rem; font-weight: 800; color: var(--champagne); opacity: 0.35; line-height: 1; margin-bottom: 0.75rem;">
                    {{ $step['num'] }}
                </div>
                <h3 style="font-family: var(--font-head); font-size: 1.05rem; font-weight: 700; color: var(--navy); line-height: 1.35;" class="mb-3">
                    {{ $step['title'] }}
                </h3>
                <p style="font-family: var(--font-body); color: var(--slate); font-size: 0.95rem; line-height: 1.65;">
                    {{ $step['body'] }}
                </p>
            </div>
            @endforeach
        </div>

    </div>
</section>
