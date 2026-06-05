@props([
    'type' => 'button',
    'modal' => null,
])
<button
    type="{{ $type }}"
    @if($modal) @click="$dispatch('close-modal', { name: '{{ $modal }}' })" @endif
    {{ $attributes->class(['px-5 py-2 text-sm font-semibold text-navy bg-champagne hover:bg-champagne-dark hover:shadow-champagne transition-all']) }}
>{{ $slot }}</button>
