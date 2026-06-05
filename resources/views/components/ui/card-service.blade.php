@props([
    'title' => '',
    'description' => '',
    'letter' => '',
])

<div {{ $attributes->merge(['class' => 'bg-white p-6 shadow-lg hover:shadow-champagne-lg transition-all hover:-translate-y-1']) }}>
    <div class="w-12 h-1 bg-champagne mb-4"></div>
    <h3 class="font-head font-semibold mb-2 text-navy">{{ $title }}</h3>
    <p class="text-sm text-slate">{{ $description }}</p>
</div>
