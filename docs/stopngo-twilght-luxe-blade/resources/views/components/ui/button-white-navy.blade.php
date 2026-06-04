{{-- x-ui.button-white-navy — alias of <x-ui.button variant="white-navy"> (matches Top 5 Pct x-ui.button-* convention) --}}
@props(['href' => null, 'size' => 'base', 'type' => 'button'])
<x-ui.button variant="white-navy" :href="$href" :size="$size" :type="$type" {{ $attributes }}>
    {{ $slot }}
</x-ui.button>
