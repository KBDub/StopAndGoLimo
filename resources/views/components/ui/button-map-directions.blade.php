@props([
    'target' => 'map-section',
    'type'   => 'button',
])

<button
    type="{{ $type }}"
    onclick="document.getElementById('{{ $target }}')?.scrollIntoView({ behavior: 'smooth' })"
    {{ $attributes->merge(['class' => 'inline-block px-8 py-4 border-2 border-sunburst text-sunburst font-semibold hover:bg-sunburst hover:text-charcoal transition-all hover:-translate-y-0.5 cursor-pointer']) }}
>
    {{ $slot }}
</button>
