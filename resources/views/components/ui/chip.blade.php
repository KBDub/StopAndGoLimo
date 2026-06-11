@props([
    'variant' => 'champagne',
    'size'    => 'sm',
])

@php
$styles = match($variant) {
    'champagne-solid' => 'background: var(--champagne); color: var(--navy);',
    'champagne'       => 'background: color-mix(in srgb, var(--champagne) 14%, transparent); color: var(--champagne);',
    'azure'           => 'background: color-mix(in srgb, var(--azure) 15%, transparent); color: var(--azure);',
    'cloud'           => 'background: color-mix(in srgb, var(--cloud) 12%, transparent); color: var(--cloud);',
    'slate'           => 'background: color-mix(in srgb, var(--slate) 20%, transparent); color: var(--slate);',
    'navy'            => 'background: color-mix(in srgb, var(--white) 8%, transparent); color: var(--cloud);',
    default           => 'background: color-mix(in srgb, var(--champagne) 14%, transparent); color: var(--champagne);',
};

$padding = match($size) {
    'md'    => 'px-3 py-1 text-sm',
    default => 'px-2 py-0.5 text-xs',
};
@endphp

<span class="inline-flex items-center font-medium font-head {{ $padding }}" style="{{ $styles }}">{{ $slot }}</span>
