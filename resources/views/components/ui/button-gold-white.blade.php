@props([
    'href' => null,
    'type' => 'button',
])

@if($href)
    <a 
        href="{{ $href }}" 
        {{ $attributes->merge(['class' => 'inline-flex items-center justify-center px-8 py-4 bg-sunburst text-white font-semibold hover:bg-sunburst-dark hover:text-azure-dark hover:shadow-lg transition-all hover:-translate-y-0.5']) }}
    >
        {{ $slot }}
    </a>
@else
    <button 
        type="{{ $type }}" 
        {{ $attributes->merge(['class' => 'inline-flex items-center justify-center px-8 py-4 bg-sunburst text-white font-semibold hover:bg-sunburst-dark hover:text-azure-dark hover:shadow-lg transition-all hover:-translate-y-0.5']) }}
    >
        {{ $slot }}
    </button>
@endif
