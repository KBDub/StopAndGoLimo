@props([
    'href' => null,
    'type' => 'button',
])

@if($href)
    <a 
        href="{{ $href }}" 
        {{ $attributes->merge(['class' => 'inline-block px-8 py-4 border-2 border-sunburst text-sunburst font-semibold hover:bg-sunburst hover:text-charcoal transition-all']) }}
    >
        {{ $slot }}
    </a>
@else
    <button 
        type="{{ $type }}" 
        {{ $attributes->merge(['class' => 'inline-block px-8 py-4 border-2 border-sunburst text-sunburst font-semibold hover:bg-sunburst hover:text-charcoal transition-all']) }}
    >
        {{ $slot }}
    </button>
@endif
