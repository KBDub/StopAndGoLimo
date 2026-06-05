@php
    $image = $image ?? '/images/place-holder.1x1.jpg';
    $alt   = $alt   ?? 'Stop & Go Limo — premium airport shuttle service';
    $tag   = $tag   ?? 'Available 24/7';
    $title = $title ?? 'Stop & Go Limo';
    $desc  = $desc  ?? 'Premium airport shuttle and limousine service in Illinois.';
    $cta   = $cta   ?? 'Learn More';
    $href  = $href  ?? '/booking';
    $width = $width ?? '200px';
@endphp

<div class="bg-navy overflow-hidden flex flex-col shrink-0" style="width: {{ $width }}">
    <div class="overflow-hidden h-24">
        <img
            src="{{ $image }}"
            alt="{{ $alt }}"
            class="w-full h-full object-cover hover:scale-105 transition-transform duration-500"
            loading="lazy"
        />
    </div>
    <div class="p-4 flex flex-col gap-2 flex-1" style="background-color: var(--navy)">
        <span class="inline-block text-xs font-semibold tracking-widest" style="color: var(--champagne)">{{ $tag }}</span>
        <h3 class="text-white font-bold text-base leading-snug font-head">{{ $title }}</h3>
        <p class="text-sm leading-relaxed" style="color: rgba(255,255,255,0.75)">{{ $desc }}</p>
        <a
            href="{{ $href }}"
            class="mt-auto inline-flex items-center gap-1.5 px-4 py-2 text-sm font-bold text-navy transition-opacity hover:opacity-90 self-start font-head"
            style="background-color: var(--champagne)"
        >
            {{ $cta }}
        </a>
    </div>
</div>
