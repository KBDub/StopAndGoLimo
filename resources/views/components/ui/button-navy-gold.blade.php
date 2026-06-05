@props([
    'href' => null,
    'type' => 'button',
])

@php
    $classes = 'inline-block px-8 py-4 bg-navy-dark text-champagne font-head font-semibold border border-champagne/35 tracking-wide transition-all hover:border-champagne hover:text-champagne-light';
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</button>
@endif
