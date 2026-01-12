@props([
    'href' => null,
    'type' => 'button',
])

@if($href)
    <a 
        href="{{ $href }}" 
        {{ $attributes->merge(['class' => 'inline-block px-8 py-4 bg-azure text-white font-semibold rounded-sm hover:bg-azure-dark hover:text-sunburst-dark hover:shadow-lg transition-all hover:-translate-y-0.5']) }}
    >
        {{ $slot }}
    </a>
@else
    <button 
        type="{{ $type }}" 
        {{ $attributes->merge(['class' => 'inline-block px-8 py-4 bg-azure text-white font-semibold rounded-sm hover:bg-azure-dark hover:text-sunburst-dark hover:shadow-lg transition-all hover:-translate-y-0.5']) }}
    >
        {{ $slot }}
    </button>
@endif
