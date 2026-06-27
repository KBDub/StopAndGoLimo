@props(['id' => 'limo-services'])

{{--
    x-sections.limo-services-grid
    ─────────────────────────────────────────────────────────────────────────────
    Six-card service-type grid on a cloud-light background.

    H2  — "Limo Services We Provide in New Lenox"
      H3 — "Services for Every Occasion" (6 cards, 3-col desktop)
    Each card: champagne left border, H4 service name, hyper-local copy.

    Voice-search SEO: answers "what limo services are available in New Lenox?"
    and "what occasions can I hire a limo for near me?"
    ─────────────────────────────────────────────────────────────────────────────
    Props
      id  string  Section id attribute. Defaults to 'limo-services'.
--}}

<section id="{{ $id }}" style="background: var(--cloud-light); scroll-margin-top: 80px;">
    <div class="max-w-7xl mx-auto px-6 py-16 lg:py-24">

        <div class="max-w-3xl mb-12">
            <h2 style="font-family: var(--font-head); font-size: var(--font-size-h2); color: var(--navy); letter-spacing: var(--letter-spacing-h2); line-height: 1.2; font-weight: 700;" class="mb-5">
                Limo Services We Provide in New Lenox
            </h2>
            <p style="font-family: var(--font-body); font-size: 1.2rem; color: var(--slate); line-height: 1.7;">
                Stop &amp; Go has been providing professional chauffeured transportation in New Lenox since 2009. We serve every occasion with the same commitment: the right vehicle, the right chauffeur, and a flat rate with no surprises. Below is a look at the services our New Lenox neighbors count on most.
            </p>
        </div>

        <h3 style="font-family: var(--font-head); font-size: var(--font-size-h3); color: var(--navy); font-weight: 600; letter-spacing: 0.01em;" class="mb-8">
            Services for Every Occasion
        </h3>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach([
                [
                    'service' => 'Wedding Limousine',
                    'copy'    => 'Make your ceremony and reception arrival as elegant as the day itself. We coordinate bridal party transportation, guest shuttles between venues, and getaway vehicles for weddings across Will County and the wider Chicagoland area. Tell us your timeline and we handle the rest.',
                ],
                [
                    'service' => 'Prom Night',
                    'copy'    => 'We serve prom groups from Lincoln-Way, Joliet, Frankfort, and the southwest suburbs every spring. Our chauffeurs are punctual, professional, and focused on keeping your group safe from the first pickup through the final drop-off.',
                ],
                [
                    'service' => 'Corporate and Executive Travel',
                    'copy'    => 'First impressions matter in business. Our executive sedans and luxury SUVs deliver clients, executives, and teams to meetings, conferences, and airports with reliability and discretion. We handle O\'Hare and Midway transfers daily.',
                ],
                [
                    'service' => 'Airport Transfers',
                    'copy'    => 'Flat-rate pickups and drop-offs at O\'Hare, Midway, and regional airports. We monitor your flight in real time and adjust pickup timing automatically. No waiting at the curb, no metered fare, no surprises when you land.',
                ],
                [
                    'service' => 'Party Bus and Limo Bus',
                    'copy'    => 'Keep the whole group together for a night out, a concert run to the United Center, a Cubs game at Wrigley, or a Bears tailgate at Soldier Field. One vehicle, one flat rate, one professional chauffeur who handles the routing while you enjoy the ride.',
                ],
                [
                    'service' => 'Hourly and VIP Service',
                    'copy'    => 'Need a vehicle for multiple stops or an all-day schedule? Our hourly limo service in New Lenox gives you a dedicated chauffeur and vehicle for as long as you need. Ideal for sightseeing tours, VIP events, and full-day corporate outings.',
                ],
            ] as $svc)
            <div style="background: var(--white); padding: 1.75rem; border-left: 3px solid var(--champagne);">
                <h4 style="font-family: var(--font-head); font-weight: 700; color: var(--navy); font-size: 1rem; letter-spacing: 0.02em;" class="mb-3">{{ $svc['service'] }}</h4>
                <p style="font-family: var(--font-body); color: var(--slate); font-size: 0.95rem; line-height: 1.65;">{{ $svc['copy'] }}</p>
            </div>
            @endforeach
        </div>

        <div class="mt-12 text-center">
            <x-ui.button-champagne-gradient href="/our-services" size="md" radius="soft">
                View All Services
            </x-ui.button-champagne-gradient>
        </div>

    </div>
</section>
