@props([
    'quote' => 'Fast, professional service! Our custom shirts turned out amazing and were ready the same day.',
    'name' => 'Sarah M.',
    'location' => 'Joliet, IL',
    'stars' => 5,
])

<div {{ $attributes->merge(['class' => 'bg-sunburst-light py-4']) }}>
    <div class="max-w-6xl mx-auto px-6 flex flex-col md:flex-row items-center justify-center gap-4 md:gap-8">
        <div class="flex items-center gap-2 shrink-0">
            <div class="flex text-sunburst-dark">
                @for($i = 0; $i < $stars; $i++)
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                @endfor
            </div>
            <span class="font-bold text-charcoal text-lg">{{ $stars }} Stars!</span>
        </div>

        <div class="text-center md:text-left">
            <p class="text-charcoal font-semibold text-sm md:text-base">"{{ $quote }}"</p>
            <p class="text-charcoal-light text-xs mt-1">&mdash; {{ $name }}, {{ $location }}</p>
        </div>
    </div>
</div>
