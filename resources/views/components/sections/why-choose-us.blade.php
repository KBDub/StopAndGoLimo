@props([
    'features' => [
        [
            'icon'      => 'thumbs-up',
            'titleBold' => 'Best Rate',
            'title'     => 'Guarantee',
            'body'      => 'We promise competitive pricing while delivering unmatched <strong>luxury</strong> and service, ensuring you get the <strong>best value</strong> for your transportation needs.',
        ],
        [
            'icon'      => 'car',
            'titleBold' => 'Variety',
            'title'     => 'Of Car Brands',
            'body'      => 'Discover our <strong>luxury</strong> fleet with options like Bentley, Maserati, and Audi. Choose the perfect car for a <strong>stylish</strong> and <strong>comfortable</strong> journey.',
        ],
        [
            'icon'      => 'clock',
            'titleBold' => '24/7',
            'title'     => 'In Your Services',
            'body'      => 'We\'re here for you, offering <strong>24/7</strong> service to meet your transportation <strong>needs</strong> anytime. Count on us for <strong>reliable</strong> and <strong>convenient</strong> travel whenever you need it.',
        ],
    ],
])

{{-- Outer wrapper: Midnight Navy visible as decorative side and top/bottom bands --}}
<section id="why-choose-us" style="background: var(--navy); padding: 6.25rem 2rem; scroll-margin-top: 80px;">

    {{-- Inner inlay: Navy Light — the content box --}}
    <div style="background: var(--navy-light); padding: 35px 35px;">

        {{-- Heading + subtitle --}}
        <div class="max-w-7xl mx-auto px-6 pt-6 pb-8">
            <h2 class="font-head" style="font-size: clamp(1.75rem, 5vw, 3rem); font-weight: 400; letter-spacing: 0.5px; color: var(--cloud-light); line-height: 1.2; margin-bottom: 1rem;">
                Why <strong style="color: var(--champagne); font-weight: 700;">Choose Us?</strong>
            </h2>
            <p class="font-body" style="font-size: 30px; line-height: 1.5; color: var(--cloud-light); text-align: right;">
                Explore our <strong>first class</strong> limousine &amp; car rental services
            </p>
        </div>

        {{-- Full-width champagne rule --}}
        <div style="height: 2px; background: var(--champagne); width: 100%; margin-bottom: 2.5rem;"></div>

        {{-- 3 feature columns --}}
        <div class="max-w-7xl mx-auto px-6 pb-6">
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-x-10 gap-y-12">
                @foreach($features as $feature)
                    <div style="text-align: center;">

                        {{-- Icon --}}
                        <div style="margin-bottom: 1.25rem; color: var(--champagne);">
                            @if($feature['icon'] === 'thumbs-up')
                                <i class="fa-solid fa-thumbs-up" style="font-size: 4rem; color: var(--champagne);"></i>
                            @elseif($feature['icon'] === 'car')
                                <svg aria-hidden="true" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"
                                     style="width: 4rem; height: auto; fill: var(--champagne); display: inline-block;">
                                    <path d="M499.99 176h-59.87l-16.64-41.6C406.38 91.63 365.57 64 319.5 64h-127c-46.06 0-86.88 27.63-103.99 70.4L71.87 176H12.01C4.2 176-1.53 183.34.37 190.91l6 24C7.7 220.25 12.5 224 18.01 224h20.07C24.65 235.73 16 252.78 16 272v48c0 16.12 6.16 30.67 16 41.93V416c0 17.67 14.32 32 32 32h32c17.67 0 32-14.33 32-32v-32h256v32c0 17.67 14.32 32 32 32h32c17.67 0 32-14.33 32-32v-54.07c9.84-11.25 16-25.8 16-41.93v-48c0-19.22-8.65-36.27-22.07-48H494c5.51 0 10.31-3.75 11.64-9.09l6-24c1.89-7.57-3.84-14.91-11.65-14.91zm-352.06-17.83c7.29-18.22 24.94-30.17 44.57-30.17h127c19.63 0 37.28 11.95 44.57 30.17L384 208H128l19.93-49.83zM96 319.8c-19.2 0-32-12.76-32-31.9S76.8 256 96 256s48 28.71 48 47.85-28.8 15.95-48 15.95zm320 0c-19.2 0-48 3.19-48-15.95S396.8 256 416 256s32 12.76 32 31.9-12.8 31.9-32 31.9z"/>
                                </svg>
                            @elseif($feature['icon'] === 'clock')
                                <svg aria-hidden="true" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"
                                     style="width: 4rem; height: auto; fill: var(--champagne); display: inline-block;">
                                    <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"/>
                                </svg>
                            @endif
                        </div>

                        {{-- Card H3: Montserrat 25px per card typography spec --}}
                        <h3 class="font-body" style="font-size: 1.5625rem; font-weight: 400; margin-bottom: 0.85rem; line-height: 1.3;">
                            <strong style="color: var(--champagne); font-weight: 700;">{{ $feature['titleBold'] }}</strong>
                            <span style="color: var(--cloud-light);"> {{ $feature['title'] }}</span>
                        </h3>

                        {{-- Card body: 17px per card typography override --}}
                        <p class="font-body" style="color: var(--cloud-light); font-size: 1.0625rem; line-height: 1.7;">
                            {!! $feature['body'] !!}
                        </p>

                    </div>
                @endforeach
            </div>
        </div>

    </div>{{-- /navy-light inlay --}}

</section>
