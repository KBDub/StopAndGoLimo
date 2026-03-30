@php
    $image = $image ?? '/images/place-holder.1x1.jpg';
    $alt   = $alt   ?? 'Top 5 Percent custom printing Joliet IL';
    $tag   = $tag   ?? 'Veteran Owned';
    $title = $title ?? 'Top 5 Percent';
    $desc  = $desc  ?? 'Custom signage and apparel in Joliet, IL.';
    $cta   = $cta   ?? 'Learn More';
    $href  = $href  ?? '/contact';
@endphp

<div class="bg-charcoal overflow-hidden flex flex-col">
    <div class="overflow-hidden h-36">
        <img
            src="{{ $image }}"
            alt="{{ $alt }}"
            class="w-full h-full object-cover hover:scale-105 transition-transform duration-500"
            loading="lazy"
        />
    </div>
    <div class="p-5 flex flex-col gap-3" style="background-color: var(--color-charcoal)">
        <span class="inline-block text-xs font-bold uppercase tracking-widest" style="color: var(--color-sunburst)">{{ $tag }}</span>
        <h3 class="text-white font-bold text-base leading-snug">{{ $title }}</h3>
        <p class="text-sm leading-relaxed" style="color: rgba(255,255,255,0.65)">{{ $desc }}</p>
        <a
            href="{{ $href }}"
            class="mt-1 inline-flex items-center gap-2 px-4 py-2 text-sm font-bold text-charcoal transition-opacity hover:opacity-90 self-start"
            style="background-color: var(--color-sunburst)"
        >
            {{ $cta }}
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
        </a>
    </div>
</div>
