{{-- x-ui.button-champagne-gradient — alias of <x-ui.button variant="champagne-gradient"> (matches Top 5 Pct x-ui.button-* convention) --}}
@props(['href' => null, 'size' => 'base', 'type' => 'button'])
<x-ui.button variant="champagne-gradient" :href="$href" :size="$size" :type="$type" {{ $attributes }}>
    {{ $slot }}
</x-ui.button>
