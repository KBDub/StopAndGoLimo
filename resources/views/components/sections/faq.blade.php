@props([
    'faqs' => [
        [
            'question' => 'Do you offer group transportation or party bus services?',
            'answer'   => 'Yes, we have a range of party buses and vans suitable for groups of various sizes. Perfect for bachelor/bachelorette parties, corporate outings, or any group event.',
        ],
        [
            'question' => 'What is your cancellation and refund policy?',
            'answer'   => 'We ask for at least 24 hours notice for cancellations. Full refunds apply when canceled within that window. Cancellations made less than 24 hours before your reservation may incur a fee.',
        ],
        [
            'question' => 'How far in advance should I book my limousine?',
            'answer'   => 'We recommend booking at least 24 to 48 hours ahead. For special events like weddings or proms, booking 2 to 4 weeks in advance ensures your preferred vehicle is available.',
        ],
        [
            'question' => 'What happens if my flight is delayed?',
            'answer'   => 'We monitor your flight in real time. If your flight is delayed, your driver adjusts their arrival at no extra charge. We wait up to 60 minutes after landing at no additional cost.',
        ],
        [
            'question' => 'Are your prices all-inclusive or are there hidden fees?',
            'answer'   => 'Our quoted prices include all fees, no surprises. Gratuity is not included but is always appreciated.',
        ],
        [
            'question' => 'Do your chauffeurs have professional training and background checks?',
            'answer'   => 'All of our chauffeurs pass thorough background checks and complete professional driver training. They are licensed, insured, and committed to giving you a safe, comfortable ride.',
        ],
    ],
])

<section id="faq" style="background: var(--cloud-light); scroll-margin-top: 80px;" class="py-12 lg:py-[6.25rem]">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Heading + left-aligned rule --}}
        <div style="width: fit-content; margin-bottom: 2rem;">
            <h2 class="font-head" style="font-size: clamp(1.75rem, 5vw, 3rem); font-weight: 400; color: var(--navy); line-height: 1.2; letter-spacing: 0.5px;">
                Frequently Asked <strong style="font-weight: 700;">Questions</strong>
            </h2>
            <div style="height: 3px; background: var(--champagne); width: 116%; margin-top: 0.85rem;"></div>
        </div>

        {{-- Accordion items --}}
        <div>
            @foreach($faqs as $index => $faq)
                <div x-data="{ open: {{ $index === 0 ? 'true' : 'false' }} }"
                     style="margin-bottom: 3px;">

                    {{-- Question bar --}}
                    <button
                        @click="open = !open"
                        style="width: 100%; text-align: left; background: var(--navy); color: var(--cloud-light); padding: 1rem 1.25rem; cursor: pointer; border: none; font-size: 1rem; line-height: 1.5; display: grid; grid-template-columns: 1fr auto; align-items: center; gap: 1rem;"
                        class="font-head">
                        <span>{{ $faq['question'] }}</span>
                        <span style="font-size: 1.25rem; line-height: 1; color: var(--champagne); transition: transform 0.2s ease;"
                              :style="open ? 'transform: rotate(45deg)' : 'transform: rotate(0deg)'">+</span>
                    </button>

                    {{-- Answer panel --}}
                    <div x-show="open"
                         x-transition:enter="transition-all duration-200 ease-out"
                         x-transition:enter-start="opacity-0"
                         x-transition:enter-end="opacity-100"
                         x-transition:leave="transition-all duration-150 ease-in"
                         x-transition:leave-start="opacity-100"
                         x-transition:leave-end="opacity-0"
                         style="background: var(--cloud); padding: 1.25rem 1.25rem; border-left: 3px solid var(--champagne);">
                        <p class="font-head" style="color: var(--navy); font-size: 1.25rem; line-height: 1.5; margin: 0;">
                            {{ $faq['answer'] }}
                        </p>
                    </div>

                </div>
            @endforeach
        </div>

    </div>
</section>
