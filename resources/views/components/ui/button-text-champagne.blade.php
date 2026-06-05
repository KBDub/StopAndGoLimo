@props([
    'href' => null,
])

@if($href)
    <a
        href="{{ $href }}"
        {{ $attributes->merge(['class' => 'inline-block bg-transparent text-champagne font-head font-semibold tracking-wide transition-colors hover:text-champagne-light']) }}
    >{{ $slot }} &rarr;</a>
@else
    <button
        type="button"
        {{ $attributes->merge(['class' => 'inline-block bg-transparent text-champagne font-head font-semibold tracking-wide transition-colors hover:text-champagne-light']) }}
    >{{ $slot }} &rarr;</button>
@endif
