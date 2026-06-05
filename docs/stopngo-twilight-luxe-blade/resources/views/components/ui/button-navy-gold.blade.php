{{-- x-ui.button-navy-gold — alias of <x-ui.button variant="navy-gold"> (matches Top 5 Pct x-ui.button-* convention) --}}
@props(['href' => null, 'size' => 'base', 'radius' => 'rounded', 'type' => 'button'])
<x-ui.button variant="navy-gold" :href="$href" :size="$size" :radius="$radius" :type="$type" {{ $attributes }}>
    {{ $slot }}
</x-ui.button>
