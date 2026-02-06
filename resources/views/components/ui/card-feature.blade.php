@props([
    'step' => '',
    'title' => '',
    'description' => '',
])

<div {{ $attributes->merge(['class' => 'bg-white p-6 rounded-xl shadow-lg hover:shadow-gold-lg transition-all hover:-translate-y-1 relative']) }}>
    @if($step)
        <span class="text-4xl font-bold text-sunburst/20 absolute top-4 right-5 select-none">{{ $step }}</span>
    @endif
    <div class="w-10 h-1 bg-sunburst rounded mb-4"></div>
    <h3 class="font-semibold mb-2 text-charcoal">{{ $title }}</h3>
    <p class="text-sm text-charcoal-light">{{ $description }}</p>
</div>
