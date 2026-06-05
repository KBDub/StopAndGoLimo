{{-- x-ui.button-text-link — alias of <x-ui.button variant="text-link"> (matches Top 5 Pct x-ui.button-* convention) --}}
@props(['href' => null, 'size' => 'base', 'radius' => 'rounded', 'type' => 'button'])
<x-ui.button variant="text-link" :href="$href" :size="$size" :radius="$radius" :type="$type" {{ $attributes }}>
    {{ $slot }}
</x-ui.button>
