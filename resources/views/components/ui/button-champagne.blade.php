@props([
    'href' => null,
    'type' => 'button',
])

@php
    $classes = 'inline-block px-8 py-4 bg-champagne-dark text-navy font-head font-semibold tracking-wide transition-all hover:bg-champagne hover:-translate-y-0.5 hover:shadow-champagne';
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</button>
@endif
