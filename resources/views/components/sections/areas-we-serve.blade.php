@props([
    'heading'     => 'Areas We',
    'headingBold' => 'Proudly Serve',
    'areas'       => [
        ['name' => 'Morris',       'href' => '/morris-il-limo-service'],
        ['name' => 'Minooka',      'href' => '/24-7-minooka-il-limo-service'],
        ['name' => 'Channahon',    'href' => '/24-7-channahon-il-limo-service'],
        ['name' => 'Elwood',       'href' => '/24-7-elwood-il-limo-service'],
        ['name' => 'Joliet',       'href' => '/24-7-joliet-il-limo-services'],
        ['name' => 'Romeoville',   'href' => '/romeoville-airport-shuttle-limo-service'],
        ['name' => 'Lockport',     'href' => '/24-7-lockport-il-limo-service'],
        ['name' => 'Frankfort',    'href' => '/24-7-frankfort-il-limo-service'],
        ['name' => 'Mokena',       'href' => '/24-7-mokena-il-limo-service'],
        ['name' => 'Orland Park',  'href' => '/24-7-orland-park-il-limo-service'],
        ['name' => 'Manhattan',    'href' => '/24-7-manhattan-limo-service'],
        ['name' => 'Homer Glen',   'href' => '/24-7-homer-glen-limo-service'],
        ['name' => 'Lemont',       'href' => '/24-7-lemont-il-limo-service'],
        ['name' => 'Monee',        'href' => '/24-7-monee-il-limo-service'],
        ['name' => 'Naperville',   'href' => '/naperville-airport-shuttle-limo-service'],
        ['name' => 'Aurora',       'href' => '/aurora-limo-service'],
        ['name' => 'North Aurora', 'href' => '/24-7-north-aurora-il-limo-service'],
        ['name' => 'Bolingbrook',  'href' => '/bolingbrook-airport-shuttle-ohare-midway'],
        ['name' => 'Oswego',       'href' => '/oswego-il-limo-service'],
        ['name' => 'Montgomery',   'href' => '/24-7-montgomery-il-limo-service'],
    ],
])

@php
    $columns = array_chunk($areas, (int) ceil(count($areas) / 3));
@endphp

{{-- Scoped hover styles — no Alpine needed --}}
<style>
.sg-area-link {
    color: var(--navy);
    text-decoration: none;
    transition: color 0.2s ease;
    display: grid;
    grid-template-columns: 1.25rem 1fr;
    gap: 0.6rem;
    align-items: center;
    padding: 0.4rem 0;
}
.sg-area-link:hover {
    color: var(--champagne);
}
.sg-area-link svg {
    fill: currentColor;
}
</style>

<section style="background: var(--cloud-light);" class="py-12 lg:py-16">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Heading + rule in a fit-content wrapper so rule is 116% of heading width --}}
        <div style="width: fit-content; margin: 0 auto 2.5rem; text-align: center;">
            <h2 class="font-head" style="font-size: clamp(1.5rem, 3.5vw, 2.375rem); font-weight: 400; color: var(--navy); line-height: 1.25;">
                {{ $heading }} <strong style="font-weight: 700;">{{ $headingBold }}</strong>
            </h2>
            {{-- Champagne rule at 116% heading width, centered via negative margin --}}
            <div style="height: 3px; background: var(--champagne); width: 116%; margin-left: -8%; margin-top: 1rem;"></div>
        </div>

        {{-- Three columns — narrower centered container to match prod spacing --}}
        <div class="max-w-3xl mx-auto">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-12 gap-y-0">
                @foreach($columns as $column)
                    <div>
                        @foreach($column as $area)
                            <a href="{{ $area['href'] }}" class="sg-area-link font-body">
                                <svg aria-hidden="true" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg"
                                     style="width: 0.85rem; height: auto;">
                                    <path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path>
                                </svg>
                                <span style="font-size: 1.125rem;">{{ $area['name'] }}</span>
                            </a>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</section>
