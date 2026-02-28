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
        <div class="absolute inset-0 w-full h-full bg-charcoal-light flex items-center justify-center">
            <div class="text-center text-white/60">
                <svg class="w-12 h-12 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <span class="text-sm">Video banner coming soon</span>
            </div>
        </div>
    @endif
</section>
