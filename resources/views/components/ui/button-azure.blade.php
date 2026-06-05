{{-- x-ui.button-azure — azure secondary CTA --}}
@props(['href' => null, 'size' => 'base', 'radius' => 'rounded', 'type' => 'button'])
<x-ui.button variant="azure" :href="$href" :size="$size" :radius="$radius" :type="$type" {{ $attributes }}>
    {{ $slot }}
</x-ui.button>
