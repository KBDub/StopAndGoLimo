@props([
    'type' => 'button',
    'modal' => null,
])
<button
    type="{{ $type }}"
    @if($modal) @click="$dispatch('close-modal', { name: '{{ $modal }}' })" @endif
    {{ $attributes->class(['px-5 py-2 text-sm font-semibold text-charcoal bg-gold-gradient hover:shadow-gold transition-all']) }}
>{{ $slot }}</button>
