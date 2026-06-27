@push('structured-data')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Article",
    "headline": "How to Plan a Party Bus Experience",
    "publisher": {
        "@@type": "LocalBusiness",
        "name": "Stop & Go Airport Shuttle Service Inc.",
        "telephone": "(815) 585-6922"
    },
    "description": "A practical guide to planning an unforgettable party bus experience in Chicagoland. Choose the right bus, amenities, timing, and more."
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        { "@@type": "ListItem", "position": 1, "name": "Home",       "item": "https://newlenoxlimoservice.com" },
        { "@@type": "ListItem", "position": 2, "name": "Party Bus",  "item": "https://newlenoxlimoservice.com/party-bus-rental-chicago" },
        { "@@type": "ListItem", "position": 3, "name": "How to Plan a Party Bus Experience", "item": "{{ request()->url() }}" }
    ]
}
</script>
@endpush

<x-layouts.page
    title="How to Plan a Party Bus Experience"
    metaDescription="A practical guide to planning a party bus experience in Chicagoland. Choosing the right vehicle, must-have amenities, booking tips, and safety advice from Stop & Go."
    currentPage="our-services"
    ogImage="/images/heroes/hero-party-bus-interior.png"
    ogImageAlt="Luxury party bus interior, Stop and Go Airport Shuttle Service"
>
    <x-sections.category-hero
        heading="How to Plan a"
        headingBold="Party Bus Experience"
        :headingTwoLines="false"
        subtitle="Everything your group needs to know before you book"
        description="Planning a party bus experience does not have to be complicated. Stop & Go Airport Shuttle Service, Inc. makes it easy for groups in New Lenox, Naperville, Aurora, and all of Chicagoland to book the right vehicle for any occasion. Whether you are organizing a birthday, a bachelorette, a prom, a wedding party, or a corporate outing, the right party bus turns your group ride into part of the celebration itself. This guide covers everything you need to know before you book: how to pick the right vehicle for your group size, which amenities matter most, how to time your trip, and what to ask before you commit. Our chauffeurs are background-checked, uniformed, and trained professionals. Every bus in our fleet is maintained to strict safety standards. We also serve airport transfers from O'Hare and Midway for groups arriving together. Call us or book online anytime. Let us handle the drive so your group can enjoy every moment."
        buttonText="Get a Quote"
        buttonHref="/get-a-quote"
        image="/images/heroes/hero-party-bus-interior.png"
        imagePosition="center center"
    />

    <section id="planning-guide" style="background: var(--cloud-light); scroll-margin-top: 80px;">
        <div class="max-w-7xl mx-auto px-6 py-12 lg:py-[6.25rem]">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

                <div class="lg:col-span-2">
                    <h2 style="font-family: var(--font-head); font-size: var(--font-size-h2); color: var(--navy); letter-spacing: var(--letter-spacing-h2); line-height: 1.2;" class="mb-6">
                        Step 1: Choose the <strong>Right Bus</strong>
                    </h2>
                    <p style="font-family: var(--font-body); font-size: 1.25rem; color: var(--slate); line-height: 1.5;" class="mb-6">
                        The most important decision is matching the vehicle to your group. Start with a headcount. A party bus that is too small cramps the experience. One that is too large feels empty.
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
                        @foreach([
                            ['size' => '10 to 15 guests',  'vehicle' => 'Small party bus or stretch limo'],
                            ['size' => '16 to 24 guests',  'vehicle' => 'Mid-size party bus'],
                            ['size' => '25 to 40 guests',  'vehicle' => 'Large party bus'],
                            ['size' => '40 or more guests','vehicle' => 'Coach bus with event setup'],
                        ] as $row)
                        <div style="background: var(--white); border: 1px solid var(--cloud); padding: 1.25rem;">
                            <p style="font-family: var(--font-head); font-weight: 600; color: var(--champagne); font-size: 0.9rem;" class="mb-1">{{ $row['size'] }}</p>
                            <p style="font-family: var(--font-body); color: var(--navy); font-size: 1rem; line-height: 1.4;">{{ $row['vehicle'] }}</p>
                        </div>
                        @endforeach
                    </div>

                    <h2 style="font-family: var(--font-head); font-size: var(--font-size-h2); color: var(--navy); letter-spacing: var(--letter-spacing-h2); line-height: 1.2;" class="mb-6">
                        Step 2: Know Your <strong>Must-Have Amenities</strong>
                    </h2>
                    <p style="font-family: var(--font-body); font-size: 1.25rem; color: var(--slate); line-height: 1.5;" class="mb-4">
                        Not all party buses are built the same. Before you book, confirm the features that matter most to your group.
                    </p>
                    <ul class="mb-8" style="list-style: none; padding: 0;">
                        @foreach([
                            'Premium sound system with Bluetooth connectivity',
                            'LED and mood lighting throughout the interior',
                            'Comfortable leather seating with room to move',
                            'Climate control for year-round comfort',
                            'USB charging ports at every seat',
                            'Cooler or bar setup for beverages',
                        ] as $item)
                        <li style="font-family: var(--font-body); color: var(--slate); font-size: 1.1rem; line-height: 1.5; padding: 0.5rem 0; border-bottom: 1px solid var(--cloud);">
                            <span style="color: var(--champagne); font-weight: 700; margin-right: 0.5rem;">+</span>{{ $item }}
                        </li>
                        @endforeach
                    </ul>

                    <h2 style="font-family: var(--font-head); font-size: var(--font-size-h2); color: var(--navy); letter-spacing: var(--letter-spacing-h2); line-height: 1.2;" class="mb-6">
                        Step 3: Book Early and <strong>Ask the Right Questions</strong>
                    </h2>
                    <p style="font-family: var(--font-body); font-size: 1.25rem; color: var(--slate); line-height: 1.5;" class="mb-4">
                        Party buses book up fast, especially on weekends and around major holidays. Reserve your vehicle as early as possible. When you call, ask these questions:
                    </p>
                    <ul class="mb-8" style="list-style: none; padding: 0;">
                        @foreach([
                            'Is the price a flat rate or does it vary by mileage?',
                            'How long is the minimum rental period?',
                            'Are chauffeurs background-checked and licensed?',
                            'What happens if the bus breaks down?',
                            'Is gratuity included or separate?',
                            'What is the cancellation and rescheduling policy?',
                        ] as $item)
                        <li style="font-family: var(--font-body); color: var(--slate); font-size: 1.1rem; line-height: 1.5; padding: 0.5rem 0; border-bottom: 1px solid var(--cloud);">
                            <span style="color: var(--champagne); font-weight: 700; margin-right: 0.5rem;">?</span>{{ $item }}
                        </li>
                        @endforeach
                    </ul>

                    <h2 style="font-family: var(--font-head); font-size: var(--font-size-h2); color: var(--navy); letter-spacing: var(--letter-spacing-h2); line-height: 1.2;" class="mb-6">
                        Step 4: Plan the <strong>Route and Timing</strong>
                    </h2>
                    <p style="font-family: var(--font-body); font-size: 1.25rem; color: var(--slate); line-height: 1.5;" class="mb-4">
                        Give your chauffeur a planned itinerary before the event. Share your pickup location, any stops along the way, and your final destination. Build in extra time between stops for traffic. Our local chauffeurs know Chicagoland routes and can suggest timing adjustments to keep your night on track.
                    </p>
                    <p style="font-family: var(--font-body); font-size: 1.1rem; color: var(--slate); line-height: 1.5;">
                        Typical party bus rental periods run three to five hours. For longer events, ask about extended hourly rates. For airport pickups or drop-offs as part of the trip, let us know in advance so we can plan around flight times.
                    </p>
                </div>

                <div>
                    <div style="background: var(--navy); padding: 2rem; position: sticky; top: 100px;">
                        <h3 style="font-family: var(--font-head); font-size: 1.4rem; font-weight: 600; color: var(--champagne); line-height: 1.3;" class="mb-4">
                            Ready to Book?
                        </h3>
                        <p style="font-family: var(--font-body); color: var(--cloud); font-size: 1rem; line-height: 1.5;" class="mb-6">
                            Our team is available 24 hours a day to help you plan the perfect party bus experience for any occasion.
                        </p>
                        <x-ui.button-champagne-gradient href="/get-a-quote" size="md" radius="soft">
                            Get a Free Quote
                        </x-ui.button-champagne-gradient>
                        <p style="font-family: var(--font-body); color: var(--slate); font-size: 0.9rem; line-height: 1.5;" class="mt-4 text-center">
                            or call <a href="tel:+18155856922" style="color: var(--champagne); text-decoration: underline; text-decoration-color: var(--champagne); text-underline-offset: 3px;">(815) 585-6922</a>
                        </p>
                        <hr style="border-color: var(--champagne); opacity: 0.2; margin: 1.5rem 0;">
                        <h4 style="font-family: var(--font-head); font-size: 1rem; font-weight: 600; color: var(--cloud); line-height: 1.3;" class="mb-3">
                            Popular Occasions
                        </h4>
                        <ul style="list-style: none; padding: 0;">
                            @foreach(['Birthdays', 'Bachelorette Parties', 'Proms', 'Weddings', 'Concerts', 'Sporting Events', 'Corporate Outings', 'Holiday Parties'] as $occ)
                            <li style="font-family: var(--font-body); color: var(--cloud); font-size: 0.95rem; padding: 0.35rem 0; border-bottom: 1px solid rgba(255,255,255,0.08);">
                                {{ $occ }}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <x-sections.three-steps />

    <x-sections.review-slider />

    <x-sections.faq preset="general" />

    <x-sections.share-your-experience />

    <x-sections.map-contact-section />

    <x-ui.banner-thin-cloud />

    <x-sections.base-footer />

</x-layouts.page>
