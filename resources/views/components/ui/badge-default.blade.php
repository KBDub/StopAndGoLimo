@props([])

<span {{ $attributes->merge(['class' => 'inline-block px-4 py-1.5 border border-charcoal-light text-charcoal-light text-xs font-semibold rounded-full']) }}>{{ $slot }}</span>
