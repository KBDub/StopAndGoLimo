@props([])

<span {{ $attributes->merge(['class' => 'inline-block px-4 py-1.5 bg-azure text-white text-xs font-semibold font-head rounded-full']) }}>{{ $slot }}</span>
