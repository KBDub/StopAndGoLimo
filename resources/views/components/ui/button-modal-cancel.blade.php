@props([
    'modal' => null,
])
<button
    type="button"
    @click="{{ $modal ? "\$dispatch('close-modal', { name: '{$modal}' })" : 'close()' }}"
    {{ $attributes->class(['px-4 py-2 text-sm font-semibold text-slate border border-cloud-dark hover:bg-cloud transition-colors']) }}
>{{ $slot }}</button>
