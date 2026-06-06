<section class="py-10 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-12">
            <h5 class="text-champagne font-head font-semibold tracking-wide mb-3">
                Common Questions
            </h5>
            <div class="inline-block mb-4">
                <h2 class="text-h2 font-bold text-navy mb-2 font-head">Our Services &amp; How It Works</h2>
                <div class="h-1 bg-champagne"></div>
            </div>
            <p class="text-slate max-w-4xl mx-auto">
                Learn more about what we offer. From airport transfers to corporate travel, we have you covered.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-6">
            <div class="space-y-4">
                <x-ui.card-faq
                    question="What airports do you serve?"
                    answer="We serve O'Hare International Airport (ORD) and Midway International Airport (MDW) as our primary airports. We also cover Rockford (RFD) and Milwaukee (MKE) by request. Call us for long-distance airport pickups."
                    :open="true"
                />

                <x-ui.card-faq
                    question="How far in advance should I book?"
                    answer="We recommend booking at least 24 hours in advance for airport transfers. For weddings, proms, and large group events, booking 2 to 4 weeks ahead ensures vehicle availability. We do accept same-day bookings based on availability."
                />

                <x-ui.card-faq
                    question="What types of vehicles are in your fleet?"
                    answer="Our fleet includes luxury sedans, premium SUVs, stretch limousines, Sprinter vans, and coach buses. Every vehicle is clean, maintained, and inspected before each trip. Let us know your group size and we will recommend the right option."
                />

                <x-ui.card-faq
                    question="Do you offer corporate accounts?"
                    answer="Yes. We offer corporate accounts for businesses that need regular ground transportation. Corporate clients receive priority booking, monthly billing, and a dedicated point of contact. Contact us to set up your account."
                />
            </div>

            <div class="space-y-4">
                <x-ui.card-faq
                    question="Are your drivers licensed and insured?"
                    answer="Absolutely. All of our drivers are fully licensed, background-checked, and insured. They are trained to provide a professional, courteous, and punctual experience on every ride."
                />

                <x-ui.card-faq
                    question="What happens if my flight is delayed?"
                    answer="We monitor all incoming flights in real time. If your flight is delayed, your driver will automatically adjust the pickup time. There is no extra charge for standard flight delays."
                />

                <x-ui.card-faq
                    question="Do you provide service for weddings and special events?"
                    answer="Yes. We love being part of your special day. We offer wedding packages, prom transportation, anniversary rides, and event shuttles. Ask us about multi-vehicle packages for large wedding parties."
                />

                <x-ui.card-faq
                    question="How do I get a price quote?"
                    answer="Click the Book Now button or call us at (815) 585-6922. We will ask for your pickup location, destination, date, and group size, and give you a transparent, upfront price with no hidden fees."
                />
            </div>
        </div>
    </div>
</section>
