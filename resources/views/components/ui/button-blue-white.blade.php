{{-- x-ui.button-blue-white — T5P legacy; proxies to champagne-solid (azure not used for buttons) --}}
@props(['href' => null, 'size' => 'base', 'radius' => 'rounded', 'type' => 'button'])
<x-ui.button variant="champagne-solid" :href="$href" :size="$size" :radius="$radius" :type="$type" {{ $attributes }}>
    {{ $slot }}
</x-ui.button>
