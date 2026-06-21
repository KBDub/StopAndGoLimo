@props(['inverted' => false])

@php
$sectionBg    = $inverted ? 'background: var(--white);'  : 'background: var(--navy);';
$headingColor = $inverted ? 'color: var(--navy);'        : 'color: var(--white);';
$btnStyle     = $inverted
    ? 'background: var(--champagne-light); border: 2px solid var(--navy); color: var(--navy);'
    : 'background: transparent; border: 2px solid var(--champagne); color: var(--champagne);';
$btnHoverOn   = $inverted
    ? "this.style.background='var(--navy)'; this.style.borderColor='var(--navy)'; this.style.color='var(--white)';"
    : "this.style.background='var(--champagne)'; this.style.color='var(--navy)';";
$btnHoverOff  = $inverted
    ? "this.style.background='var(--champagne-light)'; this.style.borderColor='var(--champagne-light)'; this.style.color='var(--navy)';"
    : "this.style.background='transparent'; this.style.color='var(--champagne)'";

$realCards = [
    ['name' => 'Tarsha Williams',  'review' => 'This limo company has the best customer service and has all the amenities. The limo driver was friendly and made the experience truly enjoyable. Highly recommend!'],
    ['name' => 'Necole Matlock',   'review' => 'My family and I had a wonderful time using the party bus. It was a great experience. I highly recommend this company to anyone looking for reliable, fun transportation.'],
    ['name' => 'Tisha Krakowski',  'review' => 'We have used Stop & Go Airport Shuttle Service Inc. several times. Our rides always show up on time and the customer service is always top notch. The drivers are all nice and we enjoy talking to them. If you need a ride, call Vince! I always recommend this company.'],
    ['name' => 'Tamika Mcclellan', 'review' => 'I had a 7-day European vacation planned and needed reliable transport. Instantly from the first phone conversation I knew I was in good hands. Friendly, engaging, and professional, and most importantly on time! I scheduled a 10am pick-up and at 9:59 he was at the door. I felt like I was with family. I highly recommend!'],
    ['name' => 'Kevin Walsh',      'review' => 'Vincent could not have been more professional getting our reservation in place for our family of 11 to O\'Hare. Our driver Michael made us feel safe on the busy expressway so we\'d arrive on time for our international flight to Ireland. He was very helpful loading and unloading our luggage. He will be our first choice next time we fly!'],
    ['name' => 'Ivette Nunez',     'review' => 'This company has always been phenomenal about providing transportation for my family and I for over 10 years! Vince provides exceptional service and great, clean vehicles that are always on time.'],
    ['name' => 'Nemmz',            'review' => 'Highly recommended. Vince was fantastic. Always on time. Great conversationalist. Made the time fly by both going and coming back. It was a really positive experience and we are definitely going to be using them again the next time we are in town!'],
    ['name' => 'Angela Crowder',   'review' => 'I recently used Stop & Go Airport Shuttle Service and could not be happier. From the first phone call to the pick-up and drop-off, everything was flawless. The team was incredibly friendly and accommodating and went above and beyond!'],
];

$realCount    = count($realCards);   // 8
$cloneCount   = 3;                   // clones on each end (must be >= visible count)

// Build the extended array: [last 3 real] + [all 8 real] + [first 3 real] = 14 cards
$prepended    = array_slice($realCards, -$cloneCount);
$appended     = array_slice($realCards,  0, $cloneCount);
$extended     = array_merge($prepended, $realCards, $appended);
$extTotal     = count($extended);    // 14
@endphp

<section id="review-slider" style="{{ $sectionBg }} scroll-margin-top: 80px;" class="py-12 lg:py-[5rem]">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Heading --}}
        <div style="width: fit-content; margin: 0 auto 3rem;">
            <h2 class="font-head" style="font-size: var(--font-size-h2); font-weight: 400; {{ $headingColor }} line-height: 1.2; letter-spacing: var(--letter-spacing-h2); text-align: center;">
                What Our <strong style="font-weight: 700; color: var(--champagne);">Clients Say</strong>
            </h2>
            <div style="height: 3px; background: var(--champagne); width: 116%; margin-top: 0.85rem;"></div>
        </div>

        {{-- Slider --}}
        <div
            x-data="{
                current:      {{ $cloneCount }},
                extTotal:     {{ $extTotal }},
                realCount:    {{ $realCount }},
                cloneCount:   {{ $cloneCount }},
                visible:      3,
                animated:     true,
                snapping:     false,
                timer:        null,

                /* Percentage of track width per card — same formula regardless of visible count */
                get stepPct() {
                    return (100 / this.extTotal).toFixed(8);
                },

                /* Which real-card index (0-based) is currently leftmost */
                get activeReal() {
                    let r = ((this.current - this.cloneCount) % this.realCount + this.realCount) % this.realCount;
                    return r;
                },

                /* Track inline style */
                get trackStyle() {
                    return 'width: calc(100% * ' + this.extTotal + ' / ' + this.visible + '); '
                         + 'transform: translateX(-' + (this.current * this.stepPct) + '%); '
                         + 'transition: ' + (this.animated ? 'transform 1.8s cubic-bezier(0.45,0.05,0.55,0.95)' : 'none') + '; '
                         + 'will-change: transform;';
                },

                /* Instantly reposition without animation, then restore animation */
                snapTo(i) {
                    this.animated = false;
                    this.current  = i;
                    window.requestAnimationFrame(() =>
                        window.requestAnimationFrame(() => { this.animated = true; })
                    );
                },

                /* Run fn after the CSS transition finishes (1.8 s + small buffer) */
                afterTransition(fn) {
                    this.snapping = true;
                    setTimeout(() => { fn(); this.snapping = false; }, 1850);
                },

                next() {
                    if (this.snapping) return;
                    this.animated = true;
                    this.current++;
                    /* Slid into the appended clones — silently jump back to real equivalent */
                    if (this.current >= this.cloneCount + this.realCount) {
                        this.afterTransition(() => this.snapTo(this.current - this.realCount));
                    }
                },

                prev() {
                    if (this.snapping) return;
                    this.animated = true;
                    this.current--;
                    /* Slid into the prepended clones — silently jump forward to real equivalent */
                    if (this.current < this.cloneCount) {
                        this.afterTransition(() => this.snapTo(this.current + this.realCount));
                    }
                },

                goTo(realIndex) {
                    if (this.snapping) return;
                    this.animated = true;
                    this.current  = this.cloneCount + realIndex;
                    this.startAuto();
                },

                startAuto() {
                    this.stopAuto();
                    this.timer = setInterval(() => this.next(), 3000);
                },

                stopAuto() {
                    if (this.timer) { clearInterval(this.timer); this.timer = null; }
                },

                init() {
                    const setVisible = () => {
                        this.visible = window.innerWidth >= 1024 ? 3 : 1;
                        this.snapTo(this.cloneCount);
                    };
                    setVisible();
                    window.addEventListener('resize', setVisible);
                    this.startAuto();
                }
            }"
            @mouseenter="stopAuto()"
            @mouseleave="startAuto()"
        >
            {{-- Clipped viewport --}}
            <div style="overflow: hidden;">
                <div class="flex" :style="trackStyle">
                    @foreach ($extended as $card)
                        <div style="width: calc(100% / {{ $extTotal }}); flex-shrink: 0; padding: 0 0.625rem;">
                            <x-ui.review-card
                                :name="$card['name']"
                                :review="$card['review']"
                                :stars="5"
                                :inverted="$inverted"
                            />
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Controls: prev · dots · next --}}
            <div style="display: flex; justify-content: center; align-items: center; gap: 1.5rem; margin-top: 2.25rem;">

                {{-- Prev --}}
                <button
                    @click="prev(); startAuto();"
                    class="font-head"
                    style="display: inline-flex; align-items: center; gap: 0.4rem; {{ $btnStyle }} font-size: 0.78rem; font-weight: 700; letter-spacing: 0.6px; padding: 0.45rem 1rem; cursor: pointer; line-height: 1; transition: background 0.22s, color 0.22s;"
                    onmouseover="{{ $btnHoverOn }}"
                    onmouseout="{{ $btnHoverOff }}"
                    aria-label="Previous review"
                >&#8592; Prev</button>

                {{-- Dots — one per real card, desktop only --}}
                <div class="hidden lg:flex" style="align-items: center; gap: 0.55rem;">
                    @for ($d = 0; $d < $realCount; $d++)
                        <button
                            @click="goTo({{ $d }})"
                            style="width: 10px; height: 10px; border-radius: 50%; border: 2px solid var(--champagne); padding: 0; cursor: pointer; transition: background 0.25s, transform 0.25s;"
                            :style="activeReal === {{ $d }}
                                ? 'background: var(--champagne); transform: scale(1.35);'
                                : 'background: transparent;'"
                            aria-label="Go to review {{ $d + 1 }}"
                        ></button>
                    @endfor
                </div>

                {{-- Next --}}
                <button
                    @click="next(); startAuto();"
                    class="font-head"
                    style="display: inline-flex; align-items: center; gap: 0.4rem; {{ $btnStyle }} font-size: 0.78rem; font-weight: 700; letter-spacing: 0.6px; padding: 0.45rem 1rem; cursor: pointer; line-height: 1; transition: background 0.22s, color 0.22s;"
                    onmouseover="{{ $btnHoverOn }}"
                    onmouseout="{{ $btnHoverOff }}"
                    aria-label="Next review"
                >Next &#8594;</button>

            </div>

        </div>

    </div>
</section>
