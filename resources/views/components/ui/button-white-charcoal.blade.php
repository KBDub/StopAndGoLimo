@props([
    'href' => null,
    'type' => 'button',
])

@if($href)
    <a 
        href="{{ $href }}" 
        {{ $attributes->merge(['class' => 'inline-block px-8 py-4 bg-white text-charcoal font-semibold rounded-sm border border-charcoal hover:bg-linen hover:text-azure hover:border-azure transition-all hover:-translate-y-0.5']) }}
    >
        {{ $slot }}
    </a>
@else
    <button 
        type="{{ $type }}" 
        {{ $attributes->merge(['class' => 'inline-block px-8 py-4 bg-white text-charcoal font-semibold rounded-sm border border-charcoal hover:bg-linen hover:text-azure hover:border-azure transition-all hover:-translate-y-0.5']) }}
    >
        {{ $slot }}
    </button>
@endif
