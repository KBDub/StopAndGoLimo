@props([
    'title' => '',
    'description' => '',
    'image' => null,
    'imageAlt' => '',
    'minHeight' => 'min-h-[300px]',
])

<div {{ $attributes->merge(['class' => "bg-linen p-8 $minHeight flex items-center justify-center relative overflow-hidden"]) }}>
    <div class="absolute top-0 right-0 w-32 h-32 bg-sunburst/10 rounded-full -translate-y-1/2 translate-x-1/2"></div>
    <div class="absolute bottom-0 left-0 w-24 h-24 bg-azure/10 rounded-full translate-y-1/2 -translate-x-1/2"></div>
    <div class="text-center relative z-10">
        @if($image)
            <img
                src="{{ $image }}"
                alt="{{ $imageAlt }}"
                class="w-full sm:w-48 mx-auto mb-6"
            />
        @endif
        @if($title)
            <h3 class="text-lg font-bold text-charcoal mb-2">{{ $title }}</h3>
        @endif
        @if($description)
            <p class="text-charcoal-light text-sm">{{ $description }}</p>
        @endif
        {{ $slot }}
    </div>
</div>
