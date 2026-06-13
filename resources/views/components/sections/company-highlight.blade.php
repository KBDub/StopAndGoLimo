@props([
    'heading'    => '',
    'headingBold'=> '',
    'subheading' => '',
    'inverted'   => false,
    'columns'    => 2,
    'items'      => [],
])

@php
    $bgStyle      = $inverted ? 'background: var(--navy);'       : 'background: var(--cloud-light);';
    $headingColor = $inverted ? 'color: var(--cloud-light);'     : 'color: var(--navy);';
    $boldColor    = 'color: var(--champagne);';
    $subColor     = $inverted ? 'color: var(--cloud-light);'     : 'color: var(--slate);';
    $iconColor    = $inverted ? 'fill: var(--champagne);'        : 'fill: var(--navy);';
    $cardHeadColor= $inverted ? 'color: var(--cloud-light);'     : 'color: var(--navy);';
    $cardBodyColor= $inverted ? 'color: var(--cloud-light);'     : 'color: var(--slate);';
    $colCount     = max(2, (int) $columns);
    $gridClass    = $colCount === 2
                        ? 'grid grid-cols-1 sm:grid-cols-2'
                        : 'grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3';
@endphp

<section id="company-highlight" style="{{ $bgStyle }} scroll-margin-top: 80px;" class="py-12 lg:py-[6.25rem]">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Optional section heading --}}
        @if($heading || $headingBold)
            <div style="width: fit-content; margin: 0 auto 3rem; text-align: center;">
                <h2 class="font-head" style="font-size: clamp(1.75rem, 5vw, 3rem); font-weight: 400; line-height: 1.2; letter-spacing: 0.5px; {{ $headingColor }}">
                    @if($heading)<span>{{ $heading }} </span>@endif<strong style="font-weight: 700; {{ $boldColor }}">{{ $headingBold }}</strong>
                </h2>
                <div style="height: 3px; background: var(--champagne); width: 116%; margin-left: -8%; margin-top: 1rem;"></div>
                @if($subheading)
                    <p class="font-body mt-4" style="font-size: 1.0625rem; {{ $subColor }}">{{ $subheading }}</p>
                @endif
            </div>
        @endif

        {{-- Item grid --}}
        <div class="{{ $gridClass }} gap-10 lg:gap-16">
            @foreach($items as $item)
                <div style="text-align: center;">

                    {{-- Icon --}}
                    <div style="display: flex; justify-content: center; margin-bottom: 1.25rem;">
                        @if(($item['icon'] ?? '') === 'user-tie')
                            <svg aria-hidden="true" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"
                                 style="width: 3rem; height: auto; {{ $iconColor }}">
                                <path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm95.8 32.6L272 480l-32-136 32-56h-96l32 56-32 136-47.8-191.4C56.9 292 0 350.3 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-72.1-56.9-130.4-128.2-133.8z"/>
                            </svg>
                        @elseif(($item['icon'] ?? '') === 'car')
                            <svg aria-hidden="true" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"
                                 style="width: 3rem; height: auto; {{ $iconColor }}">
                                <path d="M499.99 176h-59.87l-16.64-41.6C406.38 91.63 365.57 64 319.5 64h-127c-46.06 0-86.88 27.63-103.99 70.4L71.87 176H12.01C4.63 176-1.31 183.12.74 190.25L20.01 272H512l-12.01-81.75C497.31 183.12 491.37 176 499.99 176zM111.99 192l17.06-42.65C139.54 123.97 165.89 112 192.5 112h127c26.62 0 52.96 11.97 63.45 37.35L399.99 192H111.99zM0 304v160c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32v-32h320v32c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304c0-35.35-28.65-64-64-64H64c-35.35 0-64 28.65-64 64zm96 48c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 32zm320 0c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 32z"/>
                            </svg>
                        @elseif(($item['icon'] ?? '') === 'star')
                            <svg aria-hidden="true" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg"
                                 style="width: 3rem; height: auto; {{ $iconColor }}">
                                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                            </svg>
                        @elseif(($item['icon'] ?? '') === 'shield')
                            <svg aria-hidden="true" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"
                                 style="width: 3rem; height: auto; {{ $iconColor }}">
                                <path d="M256 0c4.6 0 9.2 1 13.4 2.9L457.7 82.8c22 9.3 38.4 31 38.3 57.2c-.5 99.2-41.3 280.7-213.6 363.2c-16.7 8-36.1 8-52.8 0C57.3 420.7 16.5 239.2 16 140c-.1-26.2 16.3-47.9 38.3-57.2L242.7 2.9C246.8 1 251.4 0 256 0z"/>
                            </svg>
                        @elseif(($item['icon'] ?? '') === 'clock')
                            <svg aria-hidden="true" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"
                                 style="width: 3rem; height: auto; {{ $iconColor }}">
                                <path d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/>
                            </svg>
                        @endif
                    </div>

                    {{-- Heading --}}
                    <h3 class="font-head mb-2" style="font-size: clamp(1.125rem, 2vw, 1.375rem); font-weight: 600; line-height: 1.3; {{ $cardHeadColor }}">
                        {{ $item['heading'] ?? '' }}
                    </h3>

                    {{-- Body --}}
                    @if(!empty($item['body']))
                        <p class="font-body" style="font-size: 1rem; font-weight: 400; line-height: 1.6; {{ $cardBodyColor }}">
                            {{ $item['body'] }}
                        </p>
                    @endif

                </div>
            @endforeach
        </div>

    </div>
</section>
