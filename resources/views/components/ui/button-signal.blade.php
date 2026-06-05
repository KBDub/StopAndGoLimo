{{-- x-ui.button-signal — signal color retired; maps to champagne-solid --}}
@props(['href' => null, 'size' => 'base', 'radius' => 'rounded', 'type' => 'button'])
<x-ui.button variant="champagne-solid" :href="$href" :size="$size" :radius="$radius" :type="$type" {{ $attributes }}>
    {{ $slot }}
</x-ui.button>
