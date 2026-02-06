@props([
    'title' => '',
    'description' => '',
    'letter' => '',
])

<div {{ $attributes->merge(['class' => 'bg-white p-6 rounded-xl shadow-lg hover:shadow-gold-lg transition-all hover:-translate-y-1']) }}>
    <div class="w-12 h-1 bg-sunburst rounded mb-4"></div>
    <h3 class="font-semibold mb-2 text-charcoal">{{ $title }}</h3>
    <p class="text-sm text-charcoal-light">{{ $description }}</p>
</div>
