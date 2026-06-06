{{--
 | Repurposed from "Shirt Types FAQ" → Stop & Go Limo booking FAQ section.
 | Uses @push('structured-data') for JSON-LD FAQ schema.
--}}

@push('structured-data')
@verbatim
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "How do I book a ride with Stop and Go Limo?",
            "acceptedAnswer": { "@type": "Answer", "text": "You can book online by filling out the contact form, or call us at (815) 585-6922. We recommend booking at least 24 hours in advance for airport transfers and 48 hours for special events." }
        },
        {
            "@type": "Question",
            "name": "Do you track flights for airport pickups?",
            "acceptedAnswer": { "@type": "Answer", "text": "Yes. For all airport pickup reservations, we monitor your flight in real time and adjust your driver's arrival based on your actual landing time. You will not be charged extra if your flight is delayed." }
        },
        {
            "@type": "Question",
            "name": "What airports do you serve?",
            "acceptedAnswer": { "@type": "Answer", "text": "We primarily serve O'Hare International Airport (ORD) and Chicago Midway International Airport (MDW). We can also arrange transportation to and from other regional airports. Contact us for details." }
        },
        {
            "@type": "Question",
            "name": "Are your rates flat or metered?",
            "acceptedAnswer": { "@type": "Answer", "text": "All Stop and Go Limo rates are flat. There is no meter running and no surge pricing. You receive your quoted price before you book, and that is the price you pay." }
        },
        {
            "@type": "Question",
            "name": "Do you offer group transportation?",
            "acceptedAnswer": { "@type": "Answer", "text": "Yes. We have Sprinter vans, party buses, and full-size coach buses for groups of any size. We service corporate outings, weddings, proms, sporting events, and reunions." }
        },
        {
            "@type": "Question",
            "name": "How far in advance should I book?",
            "acceptedAnswer": { "@type": "Answer", "text": "For airport transfers, we recommend at least 24 hours in advance. For weddings and special events, earlier is always better. We do accept last-minute bookings when vehicles are available." }
        }
    ]
}
</script>
@endverbatim
@endpush

<section class="py-10 bg-cloud">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-10">
            <h5 class="text-champagne font-head font-semibold tracking-wide mb-3">
                Common Questions
            </h5>
            <div class="inline-block">
                <h2 class="text-navy font-bold text-h2 mb-2 font-head">Booking &amp; Ride FAQ</h2>
                <div class="h-1 bg-champagne"></div>
            </div>
            <p class="text-slate max-w-4xl mx-auto mt-4">
                Everything you need to know before booking with Stop &amp; Go Limo. Still have a question? <a href="tel:+18155856922" class="text-azure hover:text-azure-dark transition-colors">Call us at (815) 585-6922</a>.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-6 items-start">
            <div class="space-y-3">
                <x-ui.card-faq question="How do I book a ride?" :open="true">
                    <p class="text-slate">You can book online using our contact form, or call us at <a href="tel:+18155856922" class="text-azure hover:text-azure-dark transition-colors">(815) 585-6922</a>. We recommend at least 24 hours in advance for airport transfers.</p>
                </x-ui.card-faq>
                <x-ui.card-faq question="Do you track flights for airport pickups?">
                    <p class="text-slate">Yes. We monitor your flight in real time and adjust your driver's arrival based on your actual landing. No extra charge if your flight is delayed.</p>
                </x-ui.card-faq>
                <x-ui.card-faq question="What airports do you serve?">
                    <p class="text-slate">We primarily serve O'Hare (ORD) and Midway (MDW). We can also arrange service to regional airports. Contact us for details.</p>
                </x-ui.card-faq>
            </div>
            <div class="space-y-3">
                <x-ui.card-faq question="Are your rates flat or metered?">
                    <p class="text-slate">All rates are flat. No meter, no surge pricing. You know the cost before you confirm your booking.</p>
                </x-ui.card-faq>
                <x-ui.card-faq question="Do you offer group transportation?">
                    <p class="text-slate">Yes. We have Sprinter vans, party buses, and full-size coach buses for groups of any size, including weddings, proms, and corporate events.</p>
                </x-ui.card-faq>
                <x-ui.card-faq question="How far in advance should I book?">
                    <p class="text-slate">For airport transfers, 24 hours in advance is ideal. For weddings and special events, book early. We do accept last-minute requests when vehicles are available.</p>
                </x-ui.card-faq>
            </div>
        </div>
    </div>
</section>
