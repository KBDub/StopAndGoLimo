@props([
    'image' => null,
    'alt' => '',
    'href' => null,
    'height' => 'auto',
])

<section {{ $attributes->merge(['class' => 'w-full overflow-hidden']) }}>
    @if($href)
        <a href="{{ $href }}" class="block">
    @endif

    @if($image)
        <img
            src="{{ $image }}"
            alt="{{ $alt }}"
            class="w-full block"
            style="height: {{ $height }}; object-fit: cover; object-position: center;"
            loading="lazy"
        >
    @else
        <div class="w-full bg-slate flex items-center justify-center" style="height: {{ $height === 'auto' ? '200px' : $height }};">
            <span class="text-white/60 text-sm">Banner image coming soon</span>
        </div>
    @endif

    @if($href)
        </a>
    @endif
</section>
