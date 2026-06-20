@php
$slides = [
    [
        [
            'name'   => 'Tarsha Williams',
            'review' => 'This limo company has the best customer service and has all the amenities. The limo driver was friendly and made the experience truly enjoyable. Highly recommend!',
        ],
        [
            'name'   => 'Necole Matlock',
            'review' => 'My family and I had a wonderful time using the party bus. It was a great experience. I highly recommend this company to anyone looking for reliable, fun transportation.',
        ],
        [
            'name'   => 'Tisha Krakowski',
            'review' => 'We have used Stop & Go Airport Shuttle Service Inc. several times. Our rides always show up on time and the customer service is always top notch. The drivers are all nice and we enjoy talking to them. If you need a ride, call Vince! I always recommend this company.',
        ],
    ],
    [
        [
            'name'   => 'Tamika Mcclellan',
            'review' => 'I had a 7-day European vacation planned and needed reliable transport. Instantly from the first phone conversation I knew I was in good hands. Friendly, engaging, and professional, and most importantly on time! I scheduled a 10am pick-up and at 9:59 he was at the door. I felt like I was with family. I highly recommend!',
        ],
        [
            'name'   => 'Kevin Walsh',
            'review' => 'Vincent could not have been more professional getting our reservation in place for our family of 11 to O\'Hare. Our driver Michael made us feel safe on the busy expressway so we\'d arrive on time for our international flight to Ireland. He was very helpful loading and unloading our luggage. He will be our first choice next time we fly!',
        ],
        [
            'name'   => 'Ivette Nunez',
            'review' => 'This company has always been phenomenal about providing transportation for my family and I for over 10 years! Vince provides exceptional service and great, clean vehicles that are always on time.',
        ],
    ],
    [
        [
            'name'   => 'Nemmz',
            'review' => 'Highly recommended. Vince was fantastic. Always on time. Great conversationalist. Made the time fly by both going and coming back. It was a really positive experience and we are definitely going to be using them again the next time we are in town!',
        ],
        [
            'name'   => 'Angela Crowder',
            'review' => 'I recently used Stop & Go Airport Shuttle Service and could not be happier. From the first phone call to the pick-up and drop-off, everything was flawless. The team was incredibly friendly and accommodating and went above and beyond!',
        ],
        [
            'name'   => 'Tarsha Williams',
            'review' => 'This limo company has the best customer service and has all the amenities. The limo driver was friendly and made the experience truly enjoyable. Highly recommend!',
        ],
    ],
];
$total = count($slides);
@endphp

<section id="review-slider" style="background: var(--navy); scroll-margin-top: 80px;" class="py-12 lg:py-[5rem]">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Heading --}}
        <div style="width: fit-content; margin: 0 auto 3rem;">
            <h2 class="font-head" style="font-size: clamp(1.75rem, 5vw, 3rem); font-weight: 400; color: var(--white); line-height: 1.2; letter-spacing: 0.5px; text-align: center;">
                What Our <strong style="font-weight: 700; color: var(--champagne);">Clients Say</strong>
            </h2>
            <div style="height: 3px; background: var(--champagne); width: 116%; margin-top: 0.85rem;"></div>
        </div>

        {{-- Slider wrapper --}}
        <div
            x-data="{
                current: 0,
                total: {{ $total }},
                timer: null,
                startAuto() {
                    this.stopAuto();
                    this.timer = setInterval(() => {
                        this.current = (this.current + 1) % this.total;
                    }, 3000);
                },
                stopAuto() {
                    if (this.timer) { clearInterval(this.timer); this.timer = null; }
                },
                next() {
                    this.current = (this.current + 1) % this.total;
                    this.startAuto();
                },
                prev() {
                    this.current = (this.current - 1 + this.total) % this.total;
                    this.startAuto();
                },
                goTo(i) {
                    this.current = i;
                    this.startAuto();
                },
                init() {
                    this.startAuto();
                }
            }"
            @mouseenter="stopAuto()"
            @mouseleave="startAuto()"
        >
            {{-- Track --}}
            <div style="overflow: hidden;">
                <div
                    class="flex"
                    style="transition: transform 2s cubic-bezier(0.45, 0.05, 0.55, 0.95); will-change: transform;"
                    :style="`transform: translateX(-${current * 100}%)`"
                >
                    @foreach ($slides as $cards)
                        <div class="w-full flex-shrink-0 grid grid-cols-1 lg:grid-cols-3 gap-5">
                            @foreach ($cards as $card)
                                <x-ui.review-card
                                    :name="$card['name']"
                                    :review="$card['review']"
                                    :stars="5"
                                />
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Controls: dots + prev / next --}}
            <div style="display: flex; justify-content: center; align-items: center; gap: 1.5rem; margin-top: 2.25rem;">

                {{-- Prev --}}
                <button
                    @click="prev()"
                    class="font-head"
                    style="display: inline-flex; align-items: center; gap: 0.45rem; background: transparent; border: 2px solid var(--champagne); color: var(--champagne); font-size: 0.78rem; font-weight: 700; letter-spacing: 0.6px; padding: 0.45rem 1rem; cursor: pointer; transition: background 0.25s, color 0.25s; line-height: 1;"
                    onmouseover="this.style.background='var(--champagne)'; this.style.color='var(--navy)';"
                    onmouseout="this.style.background='transparent'; this.style.color='var(--champagne)';"
                    aria-label="Previous slide"
                >&#8592; Prev</button>

                {{-- Dots --}}
                <div style="display: flex; align-items: center; gap: 0.55rem;">
                    @for ($d = 0; $d < $total; $d++)
                        <button
                            @click="goTo({{ $d }})"
                            style="width: 11px; height: 11px; border-radius: 50%; border: 2px solid var(--champagne); cursor: pointer; padding: 0; transition: background 0.3s, transform 0.3s;"
                            :style="current === {{ $d }}
                                ? 'background: var(--champagne); transform: scale(1.3);'
                                : 'background: transparent;'"
                            aria-label="Go to slide {{ $d + 1 }}"
                        ></button>
                    @endfor
                </div>

                {{-- Next --}}
                <button
                    @click="next()"
                    class="font-head"
                    style="display: inline-flex; align-items: center; gap: 0.45rem; background: transparent; border: 2px solid var(--champagne); color: var(--champagne); font-size: 0.78rem; font-weight: 700; letter-spacing: 0.6px; padding: 0.45rem 1rem; cursor: pointer; transition: background 0.25s, color 0.25s; line-height: 1;"
                    onmouseover="this.style.background='var(--champagne)'; this.style.color='var(--navy)';"
                    onmouseout="this.style.background='transparent'; this.style.color='var(--champagne)';"
                    aria-label="Next slide"
                >Next &#8594;</button>

            </div>

        </div>

    </div>
</section>
