@props([
    'title' => '',
    'subtitle' => null,
    'image' => null,
    'href' => '#',
    'featured' => false,
])

<a
    href="{{ $href }}"
    {{ $attributes->merge(['class' => 'group relative block overflow-hidden ' . ($featured ? 'md:col-span-2' : '')]) }}
>
    <div class="relative w-full {{ $featured ? 'aspect-[2/1] md:aspect-[3/1]' : 'aspect-[3/4] sm:aspect-square' }}">
        @if($image)
            <img
                src="{{ $image }}"
                alt="{{ $title }}"
                loading="lazy"
                class="absolute inset-0 w-full h-full object-cover object-center transition-transform duration-500 group-hover:scale-105"
            >
        @else
            <div class="absolute inset-0 w-full h-full bg-slate"></div>
        @endif

        <div class="absolute inset-0 bg-gradient-to-t from-navy-dark/80 via-navy-dark/20 to-transparent group-hover:from-navy-dark/70 transition-all duration-300"></div>

        <div class="absolute bottom-0 left-0 right-0 p-5">
            <h3 class="text-lg font-bold text-white mb-0.5 group-hover:text-champagne transition-colors font-head">{{ $title }}</h3>
            @if($subtitle)
                <p class="text-sm text-white/75">{{ $subtitle }}</p>
            @endif
        </div>
    </div>
</a>
