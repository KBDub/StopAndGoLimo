@props([
    'modal' => null,
])
<button
    type="button"
    @click="{{ $modal ? "\$dispatch('close-modal', { name: '{$modal}' })" : 'close()' }}"
    {{ $attributes->class(['px-4 py-2 text-sm font-semibold text-charcoal-light border border-linen-dark hover:bg-linen transition-colors']) }}
>{{ $slot }}</button>
