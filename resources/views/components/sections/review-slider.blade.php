@php
$cards = [
    ['name' => 'Tarsha Williams',   'review' => 'This limo company has the best customer service and has all the amenities. The limo driver was friendly and made the experience truly enjoyable. Highly recommend!'],
    ['name' => 'Necole Matlock',    'review' => 'My family and I had a wonderful time using the party bus. It was a great experience. I highly recommend this company to anyone looking for reliable, fun transportation.'],
    ['name' => 'Tisha Krakowski',   'review' => 'We have used Stop & Go Airport Shuttle Service Inc. several times. Our rides always show up on time and the customer service is always top notch. The drivers are all nice and we enjoy talking to them. If you need a ride, call Vince! I always recommend this company.'],
    ['name' => 'Tamika Mcclellan',  'review' => 'I had a 7-day European vacation planned and needed reliable transport. Instantly from the first phone conversation I knew I was in good hands. Friendly, engaging, and professional, and most importantly on time! I scheduled a 10am pick-up and at 9:59 he was at the door. I felt like I was with family. I highly recommend!'],
    ['name' => 'Kevin Walsh',       'review' => 'Vincent could not have been more professional getting our reservation in place for our family of 11 to O\'Hare. Our driver Michael made us feel safe on the busy expressway so we\'d arrive on time for our international flight to Ireland. He was very helpful loading and unloading our luggage. He will be our first choice next time we fly!'],
    ['name' => 'Ivette Nunez',      'review' => 'This company has always been phenomenal about providing transportation for my family and I for over 10 years! Vince provides exceptional service and great, clean vehicles that are always on time.'],
    ['name' => 'Nemmz',             'review' => 'Highly recommended. Vince was fantastic. Always on time. Great conversationalist. Made the time fly by both going and coming back. It was a really positive experience and we are definitely going to be using them again the next time we are in town!'],
    ['name' => 'Angela Crowder',    'review' => 'I recently used Stop & Go Airport Shuttle Service and could not be happier. From the first phone call to the pick-up and drop-off, everything was flawless. The team was incredibly friendly and accommodating and went above and beyond!'],
];
$total = count($cards);
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

        {{-- Slider --}}
        <div
            x-data="{
                current:  0,
                total:    {{ $total }},
                visible:  3,
                animated: true,
                timer:    null,

                get maxCurrent()     { return this.total - this.visible; },
                get stepPct()        { return (100 / this.total).toFixed(6); },
                get trackWidthCss()  { return 'calc(100% * ' + this.total + ' / ' + this.visible + ')'; },
                get trackStyle() {
                    return 'width:'      + this.trackWidthCss
                         + '; transform: translateX(-' + (this.current * this.stepPct) + '%)'
                         + '; transition: ' + (this.animated ? 'transform 1.8s cubic-bezier(0.45,0.05,0.55,0.95)' : 'none') + ';'
                         + ' will-change: transform;';
                },

                snapTo(i) {
                    this.animated = false;
                    this.current  = i;
                    window.requestAnimationFrame(() =>
                        window.requestAnimationFrame(() => { this.animated = true; })
                    );
                },

                next() {
                    if (this.current >= this.maxCurrent) {
                        this.snapTo(0);
                    } else {
                        this.animated = true;
                        this.current++;
                    }
                    this.resetAuto();
                },

                prev() {
                    if (this.current <= 0) {
                        this.snapTo(this.maxCurrent);
                    } else {
                        this.animated = true;
                        this.current--;
                    }
                    this.resetAuto();
                },

                goTo(i) {
                    this.animated = true;
                    this.current  = i;
                    this.resetAuto();
                },

                startAuto() {
                    this.stopAuto();
                    this.timer = setInterval(() => {
                        if (this.current >= this.maxCurrent) {
                            this.snapTo(0);
                        } else {
                            this.animated = true;
                            this.current++;
                        }
                    }, 3000);
                },

                stopAuto() {
                    if (this.timer) { clearInterval(this.timer); this.timer = null; }
                },

                resetAuto() {
                    this.startAuto();
                },

                init() {
                    const setVisible = () => {
                        const lg = window.innerWidth >= 1024;
                        this.visible = lg ? 3 : 1;
                        this.snapTo(0);
                    };
                    setVisible();
                    window.addEventListener('resize', setVisible);
                    this.startAuto();
                }
            }"
            @mouseenter="stopAuto()"
            @mouseleave="startAuto()"
        >
            {{-- Track (overflow clipped by parent) --}}
            <div style="overflow: hidden;">
                <div class="flex" :style="trackStyle">
                    @foreach ($cards as $card)
                        <div style="width: calc(100% / {{ $total }}); flex-shrink: 0; padding: 0 0.625rem;">
                            <x-ui.review-card
                                :name="$card['name']"
                                :review="$card['review']"
                                :stars="5"
                            />
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Controls: prev · dots · next --}}
            <div style="display: flex; justify-content: center; align-items: center; gap: 1.5rem; margin-top: 2.25rem;">

                <button
                    @click="prev()"
                    class="font-head"
                    style="display: inline-flex; align-items: center; gap: 0.4rem; background: transparent; border: 2px solid var(--champagne); color: var(--champagne); font-size: 0.78rem; font-weight: 700; letter-spacing: 0.6px; padding: 0.45rem 1rem; cursor: pointer; line-height: 1; transition: background 0.22s, color 0.22s;"
                    onmouseover="this.style.background='var(--champagne)'; this.style.color='var(--navy)';"
                    onmouseout="this.style.background='transparent'; this.style.color='var(--champagne)';"
                    aria-label="Previous"
                >&#8592; Prev</button>

                {{-- Dots — one per card, hidden on mobile for compactness --}}
                <div class="hidden lg:flex" style="align-items: center; gap: 0.55rem;">
                    @for ($d = 0; $d < $total; $d++)
                        <button
                            @click="goTo({{ $d }})"
                            style="width: 10px; height: 10px; border-radius: 50%; border: 2px solid var(--champagne); padding: 0; cursor: pointer; transition: background 0.25s, transform 0.25s;"
                            :style="current === {{ $d }}
                                ? 'background: var(--champagne); transform: scale(1.35);'
                                : 'background: transparent;'"
                            aria-label="Go to review {{ $d + 1 }}"
                        ></button>
                    @endfor
                </div>

                <button
                    @click="next()"
                    class="font-head"
                    style="display: inline-flex; align-items: center; gap: 0.4rem; background: transparent; border: 2px solid var(--champagne); color: var(--champagne); font-size: 0.78rem; font-weight: 700; letter-spacing: 0.6px; padding: 0.45rem 1rem; cursor: pointer; line-height: 1; transition: background 0.22s, color 0.22s;"
                    onmouseover="this.style.background='var(--champagne)'; this.style.color='var(--navy)';"
                    onmouseout="this.style.background='transparent'; this.style.color='var(--champagne)';"
                    aria-label="Next"
                >Next &#8594;</button>

            </div>

        </div>

    </div>
</section>
