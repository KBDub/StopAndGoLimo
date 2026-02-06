@props([])

<span {{ $attributes->merge(['class' => 'inline-block px-4 py-1.5 bg-success text-white text-xs font-semibold rounded-full']) }}>{{ $slot }}</span>
