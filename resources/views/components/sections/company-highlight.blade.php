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
                                <path d="M135.2 117.4L109.1 192H402.9l-26.1-74.6C372.3 104.6 360.2 96 346.6 96H165.4c-13.6 0-25.7 8.6-30.2 21.4zM39.6 196.8L74.8 96.3C88.3 57.8 124.6 32 165.4 32H346.6c40.8 0 77.1 25.8 90.6 64.3l35.2 100.5c23.2 9.6 39.6 32.5 39.6 59.2V400v48c0 17.7-14.3 32-32 32H448c-17.7 0-32-14.3-32-32V400H96v48c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V400 256c0-26.7 16.4-49.6 39.6-59.2zM128 288a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm288 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/>
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
                        <p class="font-body" style="font-size: 1.25rem; font-weight: 400; line-height: 1.6; {{ $cardBodyColor }}">
                            {{ $item['body'] }}
                        </p>
                    @endif

                </div>
            @endforeach
        </div>

    </div>
</section>
