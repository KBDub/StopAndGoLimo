@props([
    'title' => '',
    'titleAccent' => null,
    'subtitle' => null,
    'image' => null,
    'primaryCta' => null,
    'primaryHref' => '#',
    'secondaryCta' => null,
    'secondaryHref' => '#',
    'layout' => 'center',
    'minHeight' => 'min-h-[40vh] md:min-h-[60vh]',
    'overlay' => 'bg-gradient-to-t from-charcoal-dark/80 via-charcoal-dark/40 to-charcoal-dark/10',
])

<section {{ $attributes->merge(['class' => 'relative w-full overflow-hidden ' . $minHeight]) }}>
    @if($image)
        <img
            src="{{ $image }}"
            alt="{{ $title }}"
            class="absolute inset-0 w-full h-full object-cover object-center"
        >
    @else
        <div class="absolute inset-0 w-full h-full bg-charcoal"></div>
    @endif

    <div class="absolute inset-0 {{ $overlay }}"></div>

    <div class="relative z-10 flex items-center {{ $minHeight }} w-full">
        <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8
            @if($layout === 'center') text-center
            @elseif($layout === 'left') text-left
            @elseif($layout === 'right') text-right
            @endif
        ">
            @if($layout === 'split')
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                    <div class="text-left">
                        @include('components.sections.partials.hero-content', [
                            'title' => $title,
                            'titleAccent' => $titleAccent,
                            'subtitle' => $subtitle,
                            'primaryCta' => $primaryCta,
                            'primaryHref' => $primaryHref,
                            'secondaryCta' => $secondaryCta,
                            'secondaryHref' => $secondaryHref,
                        ])
                    </div>
                    <div></div>
                </div>
            @else
                <div class="{{ $layout === 'center' ? 'max-w-3xl mx-auto' : 'max-w-xl' }}">
                    <h2 class="text-2xl sm:text-3xl md:text-5xl font-bold text-white leading-tight mb-4">
                        {{ $title }}
                        @if($titleAccent)
                            <span class="text-sunburst">{{ $titleAccent }}</span>
                        @endif
                    </h2>

                    @if($subtitle)
                        <p class="text-base md:text-lg text-white/85 mb-8 max-w-2xl {{ $layout === 'center' ? 'mx-auto' : '' }}">{{ $subtitle }}</p>
                    @endif

                    @if($primaryCta || $secondaryCta)
                        <div class="flex flex-wrap gap-4 {{ $layout === 'center' ? 'justify-center' : '' }}">
                            @if($primaryCta)
                                <x-ui.button-gold-gradient href="{{ $primaryHref }}">{{ $primaryCta }}</x-ui.button-gold-gradient>
                            @endif
                            @if($secondaryCta)
                                <a href="{{ $secondaryHref }}" class="inline-flex items-center gap-2 px-6 py-3 text-base font-semibold border-2 border-white text-white hover:bg-white hover:text-charcoal transition-all">
                                    {{ $secondaryCta }}
                                </a>
                            @endif
                        </div>
                    @endif
                </div>
            @endif
        </div>
    </div>
</section>
