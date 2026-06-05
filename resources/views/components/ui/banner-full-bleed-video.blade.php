@props([
    'video' => null,
    'poster' => null,
    'alt' => '',
    'href' => null,
    'height' => '400px',
    'type' => 'video/mp4',
])

<section {{ $attributes->merge(['class' => 'w-full overflow-hidden relative']) }} style="height: {{ $height }};">
    @if($href)
        <a href="{{ $href }}" class="absolute inset-0 z-10 block"></a>
    @endif

    @if($video)
        <video
            class="absolute inset-0 w-full h-full object-cover"
            autoplay
            loop
            muted
            playsinline
            @if($poster) poster="{{ $poster }}" @endif
        >
            <source src="{{ $video }}" type="{{ $type }}">
        </video>
    @elseif($poster)
        <img
            src="{{ $poster }}"
            alt="{{ $alt }}"
            class="absolute inset-0 w-full h-full object-cover object-center"
            loading="lazy"
        >
    @else
        <div class="absolute inset-0 w-full h-full bg-navy flex items-center justify-center">
            <div class="text-center text-white/60">
                <p class="text-sm">Video banner coming soon</p>
            </div>
        </div>
    @endif
</section>
