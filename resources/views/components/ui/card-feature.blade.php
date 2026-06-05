@props([
    'step' => '',
    'title' => '',
    'description' => '',
])

<div {{ $attributes->merge(['class' => 'bg-white p-6 shadow-lg hover:shadow-champagne-lg transition-all hover:-translate-y-1 relative']) }}>
    @if($step)
        <span class="text-4xl font-bold text-champagne/20 absolute top-4 right-5 select-none font-head">{{ $step }}</span>
    @endif
    <div class="w-10 h-1 bg-champagne mb-4"></div>
    <h3 class="font-head font-semibold mb-2 text-navy">{{ $title }}</h3>
    <p class="text-sm text-slate">{{ $description }}</p>
</div>
