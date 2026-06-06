@props([
    'locations' => [
        [
            'city'        => 'Naperville',
            'address'     => '3420 Lacrosse Ln, Suite 116,',
            'addressLine2'=> 'Naperville, IL 60564',
            'phone'       => '(815) 585-6922',
            'reviewHref'  => '#',
        ],
        [
            'city'        => 'New Lenox',
            'address'     => '400 E. Lincoln Hwy,',
            'addressLine2'=> 'New Lenox, IL 60451',
            'phone'       => '(708) 315-4445',
            'reviewHref'  => '#',
        ],
    ],
])

<section style="background: var(--cloud-light);" class="py-14">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Heading + champagne rule in fit-content wrapper --}}
        <div style="width: fit-content; margin: 0 auto 1.5rem; text-align: center;">
            <h2 class="font-head" style="font-size: clamp(1.6rem, 3.5vw, 2.5rem); font-weight: 400; color: var(--navy); line-height: 1.2;">
                Share <strong style="font-weight: 700;">Your Experience</strong> With Us
            </h2>
            <div style="height: 3px; background: var(--champagne); width: 116%; margin-left: -8%; margin-top: 0.85rem;"></div>
        </div>

        {{-- Body copy --}}
        <p class="font-body" style="text-align: center; color: var(--navy); font-size: 1rem; line-height: 1.75; max-width: 56rem; margin: 0 auto 2.5rem;">
            We'd love to hear about your journey! Leave a review and let us know how we can make your future trips even better.
            Your feedback helps us improve and ensures we keep delivering exceptional service.
        </p>

        {{-- Inner dark card: two location columns --}}
        <div style="background: var(--navy); padding: 2.5rem 3rem;">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-8 gap-y-12">
                @foreach($locations as $location)
                    <div style="text-align: center;">

                        {{-- Map pin icon (approved FA6 location use) --}}
                        <div style="margin-bottom: 1rem;">
                            <i class="fa-solid fa-location-dot" style="font-size: 3rem; color: var(--champagne);"></i>
                        </div>

                        {{-- City name --}}
                        <h3 class="font-head" style="font-size: 1.375rem; font-weight: 600; color: var(--champagne); margin-bottom: 1rem;">
                            {{ $location['city'] }}
                        </h3>

                        {{-- Address --}}
                        <p class="font-body" style="color: var(--cloud-light); font-size: 1rem; line-height: 1.85; margin-bottom: 1.5rem;">
                            {{ $location['address'] }}<br>
                            {{ $location['addressLine2'] }}<br>
                            Phone: {{ $location['phone'] }}
                        </p>

                        {{-- Review button --}}
                        <a href="{{ $location['reviewHref'] }}"
                           class="font-head"
                           style="display: inline-block; background: var(--champagne); color: var(--navy); font-size: 0.9rem; font-weight: 700; letter-spacing: 0.08em; padding: 0.75rem 2rem; text-decoration: none; transition: background 0.2s ease;"
                           onmouseover="this.style.background='var(--champagne-dark)'"
                           onmouseout="this.style.background='var(--champagne)'">
                            Leave a Review
                        </a>

                    </div>
                @endforeach
            </div>
        </div>

    </div>
</section>
