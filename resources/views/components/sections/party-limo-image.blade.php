@props([
    'heading'             => 'Party Limousine Services for',
    'headingBold'         => 'Special Events',
    'headingTail'         => '',
    'body'                => 'Celebrate in style with our spacious, fully equipped party limousines. We keep the energy high from pickup to drop off. Whether it\'s a birthday bash, prom night, bachelor or bachelorette party, or a night out with friends, our limos bring the perfect mix of comfort, fun, and head-turning appeal to every special occasion.',
    'image'               => '/images/sections/limousine-comfort.jpg',
    'imageAlt'            => 'Group enjoying a party limousine, Stop and Go Airport Shuttle in New Lenox, Illinois',
    'imageAspect'         => '4/3',
    'imageObjectPosition' => 'center',
])

<section id="party-limo-image" style="background: var(--cloud-light); scroll-margin-top: 80px;" class="py-12 lg:py-[6.25rem]">
    <div class="max-w-7xl mx-auto px-6">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">

            {{-- Image column (left) --}}
            <div class="w-full order-first">
                <div class="w-full overflow-hidden" style="aspect-ratio: {{ $imageAspect }}; box-shadow: var(--shadow-card);">
                    <img
                        src="{{ $image }}"
                        alt="{{ $imageAlt }}"
                        class="w-full h-full object-cover"
                        style="object-position: {{ $imageObjectPosition }};"
                        loading="lazy"
                    >
                </div>
            </div>

            {{-- Text column (right) --}}
            <div class="w-full order-last">

                {{-- H2 + champagne underbar (fit-content wrapper, left-aligned) --}}
                <div style="width: fit-content; margin-bottom: 2rem;">
                    <h2 class="font-head" style="font-size: var(--font-size-h2); font-weight: 400; color: var(--navy); line-height: 1.2; letter-spacing: var(--letter-spacing-h2);">
                        {{ $heading }}@if($heading) @endif<strong style="font-weight: 700; color: var(--champagne);">{{ $headingBold }}</strong>@if($headingTail) {{ $headingTail }}@endif
                    </h2>
                    <div style="height: 3px; background: var(--champagne); width: 116%; margin-top: 0.85rem;"></div>
                </div>

                {{-- Body --}}
                <p class="font-body" style="font-size: 1.25rem; font-weight: 400; color: var(--slate); line-height: 1.5;">
                    {{ $body }}
                </p>

            </div>

        </div>
    </div>
</section>
