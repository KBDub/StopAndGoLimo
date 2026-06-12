@props([
    'image'    => '/images/heroes/hero-party-bus-aurora.png',
    'imageAlt' => 'Stop and Go team committed to delivering safe, unforgettable party bus experiences',
])

<section id="our-mission" style="background: var(--navy); scroll-margin-top: 80px;" class="py-12 lg:py-[6.25rem] overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">

            {{-- Image column — right on desktop, top on mobile --}}
            <div class="order-first lg:order-last w-full sg-om-slide-in"
                 style="opacity: 0; transform: translateX(-4rem); transition: opacity 0.7s ease, transform 0.7s ease;">
                <div class="overflow-hidden w-full aspect-[4/3]"
                     style="background: var(--navy-dark); box-shadow: var(--shadow-card);">
                    <img
                        src="{{ $image }}"
                        alt="{{ $imageAlt }}"
                        class="w-full h-full object-cover"
                        loading="lazy"
                    >
                </div>
            </div>

            {{-- Text column — left on desktop, bottom on mobile --}}
            <div class="order-last lg:order-first w-full sg-om-slide-in"
                 style="background: var(--navy); padding: 2.5rem; opacity: 0; transform: translateX(-4rem); transition: opacity 0.7s ease 150ms, transform 0.7s ease 150ms;">

                {{-- Heading --}}
                <h2 class="font-head mb-5"
                    style="font-size: clamp(1.75rem, 5vw, 3rem); line-height: 1.2; letter-spacing: 0.5px; color: var(--white);">
                    <span style="font-weight: 400;">Our Mission </span><span style="font-weight: 700; color: var(--champagne);">and Values</span>
                </h2>

                {{-- Subtitle --}}
                <p class="font-head mb-4"
                   style="font-size: 1.25rem; font-weight: 600; line-height: 1.4; color: var(--white);">
                    Core Values
                </p>

                {{-- Body with inline champagne underbar link --}}
                <p class="font-body mb-7"
                   style="font-size: 1.25rem; line-height: 1.5; color: var(--cloud);">
                    At Stop and Go, we are committed to delivering safe, unforgettable, and fun experiences on every party bus ride. Our focus is on making your celebration seamless, <a href="/bookings-reservations" style="color: var(--champagne); text-decoration: underline; text-decoration-color: var(--champagne); text-underline-offset: 3px;">memorable, and full of energy,</a> while ensuring your satisfaction and trust every step of the way.
                </p>

                {{-- Safety First block --}}
                <p class="font-head mb-3"
                   style="font-size: 1.0625rem; font-weight: 600; color: var(--cloud-light);">
                    Safety First
                </p>
                <ul style="list-style: none; padding: 0; margin: 0 0 1.75rem;">
                    @foreach(['Reliability', 'Customer Satisfaction', 'Fun and Celebration'] as $item)
                        <li class="font-body flex items-center gap-3 mb-2"
                            style="font-size: 1.0625rem; font-weight: 600; color: var(--cloud-light);">
                            <svg style="flex-shrink: 0; color: var(--white);"
                                 width="18" height="18" viewBox="0 0 24 24"
                                 fill="currentColor" aria-hidden="true">
                                <path d="M1 21h4V9H1v12zm22-11c0-1.1-.9-2-2-2h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 1 7.59 7.59C7.22 7.95 7 8.45 7 9v10c0 1.1.9 2 2 2h9c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73v-2z"/>
                            </svg>
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>

                {{-- CTA button --}}
                <div class="mb-6">
                    <x-ui.button-outline-champagne href="/bookings-reservations">
                        Rent a Party Bus
                    </x-ui.button-outline-champagne>
                </div>

                {{-- Decorative rule --}}
                <x-ui.banner-thin-champagne />

            </div>

        </div>
    </div>
</section>

<script>
(function () {
    var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateX(0)';
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.15 });

    document.querySelectorAll('.sg-om-slide-in').forEach(function (el) {
        observer.observe(el);
    });
})();
</script>
