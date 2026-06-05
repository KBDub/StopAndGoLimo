{{-- x-ui.button-outline-azure — azure ghost / outline variant --}}
@props(['href' => null, 'size' => 'base', 'radius' => 'rounded', 'type' => 'button'])
<x-ui.button variant="outline-azure" :href="$href" :size="$size" :radius="$radius" :type="$type" {{ $attributes }}>
    {{ $slot }}
</x-ui.button>
