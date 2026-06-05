{{-- x-ui.button-outline-charcoal — T5P legacy; proxies to outline-champagne --}}
@props(['href' => null, 'size' => 'base', 'radius' => 'rounded', 'type' => 'button'])
<x-ui.button variant="outline-champagne" :href="$href" :size="$size" :radius="$radius" :type="$type" {{ $attributes }}>
    {{ $slot }}
</x-ui.button>
