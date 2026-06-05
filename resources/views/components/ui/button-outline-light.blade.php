@props([
    'href' => null,
    'type' => 'button',
])

@php
    $classes = 'inline-block px-8 py-4 bg-transparent text-white font-head font-semibold border border-white/35 tracking-wide transition-all hover:border-white hover:bg-white/10';
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</button>
@endif
