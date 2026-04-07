@props([
    'modal' => null,
])
<button
    type="button"
    @if($modal) @click="$dispatch('close-modal', { name: '{{ $modal }}' })" @endif
    {{ $attributes->class(['px-4 py-2 text-sm font-semibold text-charcoal-light border border-linen-dark hover:bg-linen transition-colors']) }}
>{{ $slot }}</button>
