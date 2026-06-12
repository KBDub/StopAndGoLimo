@props([
    'heading'     => 'Points of',
    'headingBold' => 'Interest',
    'background'  => 'light',
    'points'      => [],
])

@php
    $isDark      = $background === 'dark' || $background === 'navy';
    $sectionBg   = $isDark ? 'var(--navy)'        : 'var(--cloud-light)';
    $headingColor= $isDark ? 'var(--cloud-light)'  : 'var(--navy)';
    $boldColor   = $isDark ? 'var(--champagne)'    : 'var(--navy)';
    $linkBase    = $isDark ? 'var(--cloud-light)'  : 'var(--navy)';
    $iconColor   = $isDark ? 'var(--champagne)'    : 'var(--navy)';
    $linkClass   = $isDark ? 'sg-poi-link-dark'    : 'sg-poi-link';
    $columns     = array_chunk($points, (int) ceil(count($points) / 3));
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

<section style="background: {{ $sectionBg }};" class="py-12 lg:py-[6.25rem]">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Heading + champagne rule --}}
        <div style="width: fit-content; margin: 0 auto 2.5rem; text-align: center;">
            <h2 class="font-head" style="font-size: clamp(1.75rem, 5vw, 3rem); font-weight: 400; color: {{ $headingColor }}; line-height: 1.2; letter-spacing: 0.5px;">
                {{ $heading }} <strong style="font-weight: 700; color: {{ $boldColor }};">{{ $headingBold }}</strong>
            </h2>
            <div style="height: 3px; background: var(--champagne); width: 116%; margin-left: -8%; margin-top: 1rem;"></div>
        </div>

        {{-- Point of interest link grid --}}
        <div class="max-w-6xl mx-auto" style="margin-top: 6rem;">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-0">
                @foreach($columns as $column)
                    <div style="width: fit-content; margin: 0 auto;">
                        @foreach($column as $point)
                            <a href="{{ $point['href'] }}" class="{{ $linkClass }}">
                                <svg aria-hidden="true" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg"
                                     style="width: 1.2rem; height: auto;">
                                    <path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path>
                                </svg>
                                <span style="font-size: 1.5625rem; font-family: var(--font-head); line-height: 1.5;">{{ $point['name'] }}</span>
                            </a>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</section>
