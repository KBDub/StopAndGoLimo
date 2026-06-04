{{-- x-ui.button-text-link — alias of <x-ui.button variant="text-link"> (matches Top 5 Pct x-ui.button-* convention) --}}
@props(['href' => null, 'size' => 'base', 'type' => 'button'])
<x-ui.button variant="text-link" :href="$href" :size="$size" :type="$type" {{ $attributes }}>
    {{ $slot }}
</x-ui.button>
