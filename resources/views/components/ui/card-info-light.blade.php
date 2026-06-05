@props([
    'title' => '',
    'description' => '',
    'linkText' => null,
    'linkHref' => '#',
])

<div {{ $attributes->merge(['class' => 'bg-cloud p-6 shadow-lg border border-champagne/30 hover:shadow-champagne-lg transition-all hover:-translate-y-1']) }}>
    <h3 class="font-head font-semibold mb-2 text-navy">{{ $title }}</h3>
    <p class="text-sm text-slate mb-4">{{ $description }}</p>
    @if($linkText)
        <a href="{{ $linkHref }}" class="text-azure hover:text-azure-dark text-sm font-semibold transition-colors">{{ $linkText }} &rarr;</a>
    @endif
</div>
