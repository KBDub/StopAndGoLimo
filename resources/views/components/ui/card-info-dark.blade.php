@props([
    'title' => '',
    'description' => '',
    'linkText' => null,
    'linkHref' => '#',
])

<div {{ $attributes->merge(['class' => 'bg-navy text-white p-6 shadow-lg hover:shadow-champagne-lg transition-all hover:-translate-y-1']) }}>
    <h3 class="font-head font-semibold mb-2">{{ $title }}</h3>
    <p class="text-sm text-white/70 mb-4">{{ $description }}</p>
    @if($linkText)
        <a href="{{ $linkHref }}" class="text-champagne hover:text-champagne-light text-sm font-semibold transition-colors">{{ $linkText }} &rarr;</a>
    @endif
</div>
