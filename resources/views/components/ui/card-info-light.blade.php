@props([
    'title' => '',
    'description' => '',
    'linkText' => null,
    'linkHref' => '#',
])

<div {{ $attributes->merge(['class' => 'bg-white p-6 rounded-xl shadow-lg border-l-4 border-sunburst hover:shadow-gold-lg transition-all hover:-translate-y-1']) }}>
    <h3 class="font-semibold mb-2 text-charcoal">{{ $title }}</h3>
    <p class="text-sm text-charcoal-light mb-4">{{ $description }}</p>
    @if($linkText)
        <a href="{{ $linkHref }}" class="text-azure hover:text-azure-dark text-sm font-semibold transition-colors">{{ $linkText }} &rarr;</a>
    @endif
</div>
