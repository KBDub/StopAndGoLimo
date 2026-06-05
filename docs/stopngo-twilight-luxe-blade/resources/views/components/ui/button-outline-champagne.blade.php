{{-- x-ui.button-outline-champagne — alias of <x-ui.button variant="outline-champagne"> (matches Top 5 Pct x-ui.button-* convention) --}}
@props(['href' => null, 'size' => 'base', 'radius' => 'rounded', 'type' => 'button'])
<x-ui.button variant="outline-champagne" :href="$href" :size="$size" :radius="$radius" :type="$type" {{ $attributes }}>
    {{ $slot }}
</x-ui.button>
