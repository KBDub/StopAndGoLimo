@props([
    'heading'      => 'Points of',
    'headingBold'  => 'Interest',
    'headingTail'  => '',
    'headingBold2' => '',
    'background'   => 'light',
    'columns'      => 3,
    'icon'         => 'pin',
    'points'       => [],
])

@php
    $isDark      = $background === 'dark' || $background === 'navy';
    $sectionBg   = $isDark ? 'var(--navy)'        : 'var(--cloud-light)';
    $headingColor= $isDark ? 'var(--cloud-light)'  : 'var(--navy)';
    $boldColor   = $isDark ? 'var(--champagne)'    : 'var(--navy)';
    $linkClass   = $isDark ? 'sg-poi-link-dark'    : 'sg-poi-link';
    $colCount    = max(1, (int) $columns);
    $chunks      = count($points) > 0
                    ? array_chunk($points, (int) ceil(count($points) / $colCount))
                    : [];
    $gridClass   = $colCount === 2
                    ? 'grid grid-cols-1 sm:grid-cols-2'
                    : 'grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3';
@endphp

{{-- Scoped hover styles --}}
<style>
.sg-poi-link {
    color: var(--navy);
    text-decoration: none;
    transition: color 0.2s ease;
    display: grid;
    grid-template-columns: 1.2rem 1fr;
    gap: 0.6rem;
    align-items: center;
    padding: 0.3rem 0;
}
.sg-poi-link:hover {
    color: var(--champagne);
}
.sg-poi-link svg {
    fill: currentColor;
}
.sg-poi-link-dark {
    color: var(--cloud-light);
    text-decoration: none;
    transition: color 0.2s ease;
    display: grid;
    grid-template-columns: 1.2rem 1fr;
    gap: 0.6rem;
    align-items: center;
    padding: 0.3rem 0;
}
.sg-poi-link-dark:hover {
    color: var(--champagne);
}
.sg-poi-link-dark svg {
    fill: var(--champagne);
    transition: fill 0.2s ease;
}
</style>

<section id="points-of-interest" style="background: {{ $sectionBg }}; scroll-margin-top: 80px;" class="py-12 lg:py-[6.25rem]">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Heading + champagne rule --}}
        <div style="width: fit-content; margin: 0 auto 2.5rem; text-align: center;">
            <h2 class="font-head" style="font-size: clamp(1.75rem, 5vw, 3rem); font-weight: 400; color: {{ $headingColor }}; line-height: 1.2; letter-spacing: 0.5px;">
                {{ $heading }} <strong style="font-weight: 700; color: {{ $boldColor }};">{{ $headingBold }}</strong>@if($headingTail){{ $headingTail }}@endif@if($headingBold2) <strong style="font-weight: 700; color: {{ $boldColor }};">{{ $headingBold2 }}</strong>@endif
            </h2>
            <div style="height: 3px; background: var(--champagne); width: 116%; margin-left: -8%; margin-top: 1rem;"></div>
        </div>

        {{-- Point of interest link grid --}}
        <div class="max-w-6xl mx-auto" style="margin-top: 6rem;">
            <div class="{{ $gridClass }} gap-x-8 gap-y-0">
                @foreach($chunks as $chunk)
                    <div style="width: fit-content; margin: 0 auto;">
                        @foreach($chunk as $point)
                            <a href="{{ $point['href'] }}" class="{{ $linkClass }}">
                                @if($icon === 'plane')
                                    <svg aria-hidden="true" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg"
                                         style="width: 1.2rem; height: auto;">
                                        <path d="M480 192H365.71L260.61 8.06A16.014 16.014 0 0 0 246.71 0h-65.5c-10.63 0-18.3 10.17-15.38 20.39L214.86 192H112l-43.2-57.6c-3.02-4.03-7.77-6.4-12.8-6.4H16.01C5.6 128-2.04 137.78.49 147.88L32 256 .49 364.12C-2.04 374.22 5.6 384 16.01 384H56c5.04 0 9.78-2.37 12.8-6.4L112 320h102.86l-49.03 171.6c-2.92 10.22 4.75 20.4 15.38 20.4h65.5c5.74 0 11.04-3.08 13.89-8.06L365.71 320H480c35.35 0 96-28.65 96-64s-60.65-64-96-64z"></path>
                                    </svg>
                                @else
                                    <svg aria-hidden="true" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg"
                                         style="width: 1.2rem; height: auto;">
                                        <path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path>
                                    </svg>
                                @endif
                                <span style="font-size: 1.5625rem; font-family: var(--font-head); line-height: 1.5;">{{ $point['name'] }}</span>
                            </a>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</section>
