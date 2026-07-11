@push('structured-data')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Article",
    "headline": "Renting a Party Bus: The Ultimate Party Guide",
    "publisher": {
        "@@type": "LocalBusiness",
        "name": "Stop & Go Airport Shuttle Service Inc.",
        "telephone": ""
    },
    "description": "Everything you need to know about renting a party bus in Chicagoland. Events, amenities, choosing the right vehicle, and booking tips."
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        { "@@type": "ListItem", "position": 1, "name": "Home",       "item": "https://newlenoxlimoservice.com" },
        { "@@type": "ListItem", "position": 2, "name": "Party Bus",  "item": "https://newlenoxlimoservice.com/party-bus-rental-chicago" },
        { "@@type": "ListItem", "position": 3, "name": "Renting a Party Bus: The Ultimate Party Guide", "item": "{{ request()->url() }}" }
    ]
}
</script>
@endpush

<x-layouts.page
    title="Renting a Party Bus: The Ultimate Party Guide"
    metaDescription="Everything you need to know about renting a party bus in Chicagoland. Events, amenities, how to choose the right vehicle, and booking tips from Stop & Go."
    currentPage="our-services"
    ogImage="/images/heroes/hero-party-bus-interior.png"
    ogImageAlt="Luxury party bus interior, Stop and Go Airport Shuttle Service"
>
    <x-sections.category-hero
        heading="Renting a Party Bus:"
        headingBold="The Ultimate Guide"
        :headingTwoLines="false"
        subtitle="Everything your group needs to know before the celebration starts"
        description="Renting a party bus is one of the most exciting ways to celebrate with friends or family. Stop & Go Airport Shuttle Service, Inc. serves New Lenox, Aurora, Naperville, Joliet, and all of Chicagoland with a fleet of luxury party buses ready for every type of event. Prom nights, birthday parties, bachelorette celebrations, wedding parties, corporate events, and concert trips all become more memorable when your entire group rides together. Our buses come equipped with premium sound systems, LED lighting, leather seating, and room to move. Every chauffeur is background-checked, uniformed, and dedicated to a safe, professional experience. No one needs to drive. No one needs to worry about parking. The celebration starts the moment your group steps on board and continues until we drop you off at the end of the night. We also offer flat-rate airport transfers to O'Hare and Midway for groups arriving from out of town. Book online or call anytime."
        buttonText="Get a Quote"
        buttonHref="/get-a-quote"
        image="/images/heroes/hero-party-bus-interior.png"
        imagePosition="center center"
    />

    <section id="ultimate-guide" style="background: var(--cloud-light); scroll-margin-top: 80px;">
        <div class="max-w-7xl mx-auto px-6 py-12 lg:py-[6.25rem]">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

                <div class="lg:col-span-2">

                    <h2 style="font-family: var(--font-head); font-size: var(--font-size-h2); color: var(--navy); letter-spacing: var(--letter-spacing-h2); line-height: 1.2;" class="mb-6">
                        Five Events Where a Party Bus <strong>Makes the Night</strong>
                    </h2>
                    <div class="grid grid-cols-1 sm:grid-cols-1 gap-4 mb-10">
                        @foreach([
                            ['num' => '01', 'title' => 'Prom Night',                'desc' => 'Make the school dance extra special with a safe, stylish ride your group will talk about for years. Parents love the peace of mind. Students love the experience.'],
                            ['num' => '02', 'title' => 'Bachelor and Bachelorette', 'desc' => 'Celebrate together. No splitting into multiple cars. No one has to be the designated driver. The whole group enjoys the night from pickup to drop-off.'],
                            ['num' => '03', 'title' => 'Birthday Celebrations',     'desc' => 'Bring your friends and family along for a mobile celebration. Surprise the birthday person or let them ride in style from stop to stop.'],
                            ['num' => '04', 'title' => 'Corporate Events',          'desc' => 'Reward your team or impress clients with polished, organized group transportation. A party bus signals attention to detail and elevates the experience.'],
                            ['num' => '05', 'title' => 'Concerts and Games',        'desc' => 'Skip the parking deck and the traffic stress. Travel together, build excitement on the ride, and leave without the post-event lot headache.'],
                        ] as $e)
                        <div style="background: var(--white); border-left: 4px solid var(--champagne); padding: 1.25rem 1.5rem; display: flex; gap: 1.25rem; align-items: flex-start;">
                            <span style="font-family: var(--font-head); font-size: 2rem; font-weight: 700; color: var(--champagne); line-height: 1; min-width: 2.5rem;">{{ $e['num'] }}</span>
                            <div>
                                <h3 style="font-family: var(--font-head); font-size: 1.1rem; font-weight: 600; color: var(--navy); line-height: 1.3;" class="mb-1">{{ $e['title'] }}</h3>
                                <p style="font-family: var(--font-body); color: var(--slate); font-size: 1rem; line-height: 1.5;">{{ $e['desc'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <h2 style="font-family: var(--font-head); font-size: var(--font-size-h2); color: var(--navy); letter-spacing: var(--letter-spacing-h2); line-height: 1.2;" class="mb-6">
                        How to Choose the <strong>Right Vehicle</strong>
                    </h2>
                    <p style="font-family: var(--font-body); font-size: 1.1rem; color: var(--slate); line-height: 1.5;" class="mb-6">
                        Matching the vehicle to your group size is the single most important booking decision. Use this guide before you call:
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-10">
                        @foreach([
                            ['size' => '10 to 15 guests',   'vehicle' => 'Small party bus or stretch limousine'],
                            ['size' => '16 to 24 guests',   'vehicle' => 'Mid-size party bus with full amenity setup'],
                            ['size' => '25 to 40 guests',   'vehicle' => 'Large party bus with dance area options'],
                            ['size' => '40 or more guests', 'vehicle' => 'Coach bus configured for celebration travel'],
                        ] as $v)
                        <div style="background: var(--navy); padding: 1.25rem 1.5rem;">
                            <p style="font-family: var(--font-head); font-weight: 600; color: var(--champagne); font-size: 0.9rem;" class="mb-1">{{ $v['size'] }}</p>
                            <p style="font-family: var(--font-body); color: var(--cloud); font-size: 1rem; line-height: 1.4;">{{ $v['vehicle'] }}</p>
                        </div>
                        @endforeach
                    </div>

                    <h2 style="font-family: var(--font-head); font-size: var(--font-size-h2); color: var(--navy); letter-spacing: var(--letter-spacing-h2); line-height: 1.2;" class="mb-6">
                        Top Three Amenities That <strong>Set the Tone</strong>
                    </h2>
                    <ul style="list-style: none; padding: 0;" class="mb-10">
                        @foreach([
                            ['title' => 'Premium Sound System',    'desc' => 'Bluetooth audio that lets your group control the music from their phones. The right soundtrack makes every moment better.'],
                            ['title' => 'LED Cabin Lighting',      'desc' => 'Color-changing lights that create the atmosphere you want, whether that is a dance-party vibe or an elegant wedding ride.'],
                            ['title' => 'Comfortable Seating',     'desc' => 'Plush leather seating arranged so your group can face each other, move around, and actually enjoy the company.'],
                        ] as $a)
                        <li style="padding: 1.25rem 0; border-bottom: 1px solid var(--cloud);">
                            <h3 style="font-family: var(--font-head); font-size: 1.1rem; font-weight: 600; color: var(--navy); line-height: 1.3;" class="mb-1">{{ $a['title'] }}</h3>
                            <p style="font-family: var(--font-body); color: var(--slate); font-size: 1rem; line-height: 1.5;">{{ $a['desc'] }}</p>
                        </li>
                        @endforeach
                    </ul>

                    <h2 style="font-family: var(--font-head); font-size: var(--font-size-h2); color: var(--navy); letter-spacing: var(--letter-spacing-h2); line-height: 1.2;" class="mb-4">
                        Tips for a <strong>Smooth Booking</strong>
                    </h2>
                    <ul style="list-style: none; padding: 0;">
                        @foreach([
                            'Book at least two to four weeks in advance for weekend events.',
                            'Confirm the total headcount before selecting a vehicle size.',
                            'Share a planned itinerary with pickup times and stop locations.',
                            'Ask about flat-rate versus hourly pricing before you commit.',
                            'Confirm that all chauffeurs are background-checked and licensed.',
                        ] as $tip)
                        <li style="font-family: var(--font-body); color: var(--slate); font-size: 1.1rem; line-height: 1.5; padding: 0.5rem 0; border-bottom: 1px solid var(--cloud);">
                            <span style="color: var(--champagne); font-weight: 700; margin-right: 0.5rem;">+</span>{{ $tip }}
                        </li>
                        @endforeach
                    </ul>

                </div>

                <div>
                    <div style="background: var(--navy); padding: 2rem; position: sticky; top: 100px;">
                        <h3 style="font-family: var(--font-head); font-size: 1.4rem; font-weight: 600; color: var(--champagne); line-height: 1.3;" class="mb-4">
                            Ready to Reserve?
                        </h3>
                        <p style="font-family: var(--font-body); color: var(--cloud); font-size: 1rem; line-height: 1.5;" class="mb-6">
                            Our team is available 24 hours a day to help you find the right bus for your group and your occasion.
                        </p>
                        <x-ui.button-champagne-gradient href="/get-a-quote" size="md" radius="soft">
                            Get a Free Quote
                        </x-ui.button-champagne-gradient>
                        <p style="font-family: var(--font-body); color: var(--slate); font-size: 0.9rem; line-height: 1.5;" class="mt-4 text-center">
                            or call <a href="tel:+17083154445" style="color: var(--champagne); text-decoration: underline; text-decoration-color: var(--champagne); text-underline-offset: 3px;"></a>
                        </p>
                        <hr style="border-color: var(--champagne); opacity: 0.2; margin: 1.5rem 0;">
                        <h4 style="font-family: var(--font-head); font-size: 1rem; font-weight: 600; color: var(--cloud); line-height: 1.3;" class="mb-3">
                            Service Area
                        </h4>
                        <ul style="list-style: none; padding: 0;">
                            @foreach(['New Lenox', 'Aurora', 'Naperville', 'Joliet', 'Frankfort', 'Mokena', 'Orland Park', 'Downers Grove', 'Chicago and suburbs'] as $city)
                            <li style="font-family: var(--font-body); color: var(--cloud); font-size: 0.95rem; padding: 0.35rem 0; border-bottom: 1px solid rgba(255,255,255,0.08);">
                                {{ $city }}
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
