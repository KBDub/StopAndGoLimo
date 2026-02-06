@props([
    'href' => null,
    'type' => 'button',
])

@if($href)
    <a 
        href="{{ $href }}" 
        {{ $attributes->merge(['class' => 'inline-block px-8 py-4 bg-sunburst text-charcoal font-semibold rounded-lg hover:bg-sunburst-dark hover:shadow-gold-lg transition-all hover:-translate-y-0.5']) }}
    >
        {{ $slot }}
    </a>
@else
    <button 
        type="{{ $type }}" 
        {{ $attributes->merge(['class' => 'inline-block px-8 py-4 bg-sunburst text-charcoal font-semibold rounded-lg hover:bg-sunburst-dark hover:shadow-gold-lg transition-all hover:-translate-y-0.5']) }}
    >
        {{ $slot }}
    </button>
@endif
