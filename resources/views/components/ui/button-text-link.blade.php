@props([
    'href' => null,
])

@if($href)
    <a 
        href="{{ $href }}" 
        {{ $attributes->merge(['class' => 'text-azure hover:text-azure-dark font-semibold transition-colors']) }}
    >
        {{ $slot }} &rarr;
    </a>
@else
    <button 
        type="button" 
        {{ $attributes->merge(['class' => 'text-azure hover:text-azure-dark font-semibold transition-colors']) }}
    >
        {{ $slot }} &rarr;
    </button>
@endif
