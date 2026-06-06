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

<section style="background: var(--navy);">

    {{-- Top: heading + subtitle --}}
    <div class="max-w-7xl mx-auto px-6 pt-14 pb-10">
        <h2 class="font-head" style="font-size: clamp(2.2rem, 5vw, 3.5rem); font-weight: 400; color: var(--cloud-light); line-height: 1.2; margin-bottom: 1rem;">
            Why <strong style="color: var(--champagne); font-weight: 700;">Choose Us?</strong>
        </h2>
        <p class="font-body text-center" style="font-size: clamp(1rem, 2vw, 1.25rem); color: var(--cloud-light);">
            Explore our <strong>first class</strong> limousine &amp; car rental services
        </p>
    </div>

    {{-- Full-width champagne rule --}}
    <div style="height: 2px; background: var(--champagne); width: 100%;"></div>

    {{-- Bottom: 3 feature columns --}}
    <div class="max-w-7xl mx-auto px-6 py-14">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-x-10 gap-y-12">
            @foreach($features as $feature)
                <div style="text-align: center;">

                    {{-- Icon --}}
                    <div style="margin-bottom: 1.25rem;">
                        @if($feature['icon'] === 'thumbs-up')
                            <svg aria-hidden="true" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"
                                 style="width: 4rem; height: auto; fill: var(--champagne); display: inline-block;">
                                <path d="M104 224H24c-13.255 0-24 10.745-24 24v240c0 13.255 10.745 24 24 24h80c13.255 0 24-10.745 24-24V248c0-13.255-10.745-24-24-24zM64 472c-13.255 0-24-10.745-24-24s10.745-24 24-24 24 10.745 24 24-10.745 24-24 24zM384 81.452c0 42.416-25.97 66.208-33.467 105.21h44.8c52.2 0 81.667 37.504 81.667 74.98 0 22.906-11.379 37.504-37.99 66.844l-1.208 1.504c9.816 23.31 15.169 46.435 15.169 73.049 0 24.10-5.954 47.124-17.398 67.038 3.275 22.888-.939 46.136-11.489 66.502C440.196 507.587 418.06 512 396 512H218c-61.58 0-110.5-25.665-148.745-37.678V227.209c86.996 0 149.836-134.755 149.836-134.755 11.207-20.854 16.79-44.025 16.79-67.593V48c0-17.673 14.327-32 32-32 62.644 0 95.349 44.587 95.349 95.452z"/>
                            </svg>
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

                    {{-- Title --}}
                    <h3 class="font-head" style="font-size: clamp(1.1rem, 2vw, 1.4rem); font-weight: 400; margin-bottom: 0.85rem; line-height: 1.3;">
                        <strong style="color: var(--champagne); font-weight: 700;">{{ $feature['titleBold'] }}</strong>
                        <span style="color: var(--cloud-light);"> {{ $feature['title'] }}</span>
                    </h3>

                    {{-- Body --}}
                    <p class="font-body" style="color: var(--cloud-light); font-size: 1rem; line-height: 1.7;">
                        {!! $feature['body'] !!}
                    </p>

                </div>
            @endforeach
        </div>
    </div>

</section>
