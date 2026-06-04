{{-- x-ui.button-champagne-solid — alias of <x-ui.button variant="champagne-solid"> (matches Top 5 Pct x-ui.button-* convention) --}}
@props(['href' => null, 'size' => 'base', 'type' => 'button'])
<x-ui.button variant="champagne-solid" :href="$href" :size="$size" :type="$type" {{ $attributes }}>
    {{ $slot }}
</x-ui.button>
