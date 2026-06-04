{{-- x-ui.button-light-outline-navy — alias of <x-ui.button variant="light-outline-navy"> (matches Top 5 Pct x-ui.button-* convention) --}}
@props(['href' => null, 'size' => 'base', 'type' => 'button'])
<x-ui.button variant="light-outline-navy" :href="$href" :size="$size" :type="$type" {{ $attributes }}>
    {{ $slot }}
</x-ui.button>
