@props(['id' => 'limo-booking-timeline'])

{{--
    x-sections.limo-booking-timeline
    ─────────────────────────────────────────────────────────────────────────────
    Cloud-light background 6-card (3-col desktop) section covering how far in
    advance to book for each occasion type.

    No other page on the site addresses booking lead times. This answers one of
    the most common pre-booking questions and captures informational search intent.

    H2  — "How Far in Advance to Book"
      6 cards: Airport Transfer, Corporate Meeting, Night Out,
               Prom and Graduation, Wedding, Holiday and Large Events
    ─────────────────────────────────────────────────────────────────────────────
    Props
      id  string  Section anchor. Defaults to 'limo-booking-timeline'.
--}}

<section id="{{ $id }}" style="background: var(--cloud-light); scroll-margin-top: 80px;">
    <div class="max-w-7xl mx-auto px-6 py-16 lg:py-24">

        <div class="text-center mb-12">
            <h2 style="font-family: var(--font-head); font-size: var(--font-size-h2); color: var(--navy); letter-spacing: var(--letter-spacing-h2); line-height: 1.2; font-weight: 700;" class="mb-4">
                How Far in Advance <strong>to Book</strong>
            </h2>
            <p style="font-family: var(--font-body); font-size: 1.2rem; color: var(--slate); line-height: 1.6;" class="max-w-2xl mx-auto">
                Every occasion has its own lead time. Book too late and your preferred vehicle or time slot may be gone. Here is the timing that works best for each type of trip.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach([
                [
                    'occasion'  => 'Airport Transfer',
                    'timing'    => '24 hours — same day available',
                    'detail'    => 'Airport runs can often be booked the same day or the night before. We monitor your flight in real time, so late bookings are not a problem as long as we have availability.',
                    'urgency'   => 'low',
                ],
                [
                    'occasion'  => 'Corporate Meeting',
                    'timing'    => '48 hours minimum',
                    'detail'    => 'Business pickups are often confirmed within 48 hours. For recurring accounts or multi-vehicle corporate events, weekly scheduling with your account coordinator works better.',
                    'urgency'   => 'low',
                ],
                [
                    'occasion'  => 'Birthday or Night Out',
                    'timing'    => '1 to 2 weeks ahead',
                    'detail'    => 'Weekend evenings in Chicagoland fill quickly, especially Friday and Saturday nights during spring and summer. Booking one to two weeks out secures your slot.',
                    'urgency'   => 'medium',
                ],
                [
                    'occasion'  => 'Prom and Graduation',
                    'timing'    => '2 to 4 months ahead',
                    'detail'    => 'Prom season runs April through June across Illinois. Every school in the area books the same narrow window. Families who wait until March often find the best vehicles already reserved.',
                    'urgency'   => 'high',
                ],
                [
                    'occasion'  => 'Wedding',
                    'timing'    => '6 to 12 months ahead',
                    'detail'    => 'Saturday weddings from May through October are the highest-demand dates in our calendar. Couples who book a year out have the most options. Spring and fall brides especially — do not wait.',
                    'urgency'   => 'high',
                ],
                [
                    'occasion'  => 'Holiday and Large Events',
                    'timing'    => '4 to 6 weeks ahead',
                    'detail'    => 'New Year\'s Eve, Thanksgiving weekend, and major Chicagoland events like Lollapalooza or large sporting finals see significant demand. Earlier is always better for holiday weekends.',
                    'urgency'   => 'medium',
                ],
            ] as $item)
            @php
                $borderColor = $item['urgency'] === 'high' ? 'var(--champagne)' : ($item['urgency'] === 'medium' ? 'var(--azure)' : 'var(--slate)');
            @endphp
            <div style="background: var(--white); padding: 1.75rem; border-top: 4px solid {{ $borderColor }};">
                <h3 style="font-family: var(--font-head); font-size: 1.1rem; font-weight: 700; color: var(--navy); line-height: 1.3;" class="mb-1">
                    {{ $item['occasion'] }}
                </h3>
                <p style="font-family: var(--font-head); font-size: 0.9rem; font-weight: 600; color: {{ $borderColor }}; letter-spacing: 0.02em; margin-bottom: 0.75rem;">
                    {{ $item['timing'] }}
                </p>
                <p style="font-family: var(--font-body); color: var(--slate); font-size: 0.95rem; line-height: 1.6;">
                    {{ $item['detail'] }}
                </p>
            </div>
            @endforeach
        </div>

        <p style="font-family: var(--font-body); font-size: 0.9rem; color: var(--slate); line-height: 1.5; text-align: center;" class="mt-8">
            Champagne border = book early. Blue = moderate lead time. Slate = flexible.
        </p>

    </div>
</section>
