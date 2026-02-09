@props([
    'title' => '',
    'description' => '',
    'linkText' => null,
    'linkHref' => '#',
])

<div {{ $attributes->merge(['class' => 'bg-charcoal text-white p-6 rounded-xl shadow-lg hover:shadow-gold-lg transition-all hover:-translate-y-1']) }}>
    <h3 class="font-semibold mb-2">{{ $title }}</h3>
    <p class="text-sm text-white/70 mb-4">{{ $description }}</p>
    @if($linkText)
        <a href="{{ $linkHref }}" class="text-sunburst hover:text-sunburst-light text-sm font-semibold transition-colors">{{ $linkText }} &rarr;</a>
    @endif
</div>
