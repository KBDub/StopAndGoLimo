{{--
 | ─────────────────────────────────────────────────────────────────────────
 | Component   : x-ui.modal-trigger
 | Location    : resources/views/components/ui/modal-trigger.blade.php
 |
 | Convenience wrapper that dispatches open-modal / close-modal events.
 | Renders as any HTML element via the `as` prop.
 |
 | ── PROPS ────────────────────────────────────────────────────────────────
 |
 |   modal   (required) — must match the `name` prop of the target x-ui.modal
 |   as       element type: button (default) | a | div | span | close
 |            Use `as="close"` as shorthand for close-modal dispatch.
 |   action   explicit action override: open (default) | close | toggle
 |   href     only used when as="a"; applied as href attribute
 |   class    appended to the element (Blade attribute merging)
 |
 | ── USAGE ────────────────────────────────────────────────────────────────
 |
 |   {{-- Open --}}
 |   <x-ui.modal-trigger modal="confirm">Delete Item</x-ui.modal-trigger>
 |
 |   {{-- Close (e.g. Cancel button inside footer slot) --}}
 |   <x-ui.modal-trigger modal="confirm" as="close">Cancel</x-ui.modal-trigger>
 |
 |   {{-- Render as <a> --}}
 |   <x-ui.modal-trigger modal="gallery" as="a" href="#">View Gallery</x-ui.modal-trigger>
 |
 |   {{-- Toggle --}}
 |   <x-ui.modal-trigger modal="info" action="toggle">Toggle Info</x-ui.modal-trigger>
 |
 | ─────────────────────────────────────────────────────────────────────────
--}}

@props([
    'modal'  => null,
    'as'     => 'button',
    'action' => 'open',
    'href'   => null,
])

@php
    // Resolve element tag
    $tag = match(strtolower($as)) {
        'close' => 'button',
        'a'     => 'a',
        'div'   => 'div',
        'span'  => 'span',
        default => 'button',
    };

    // Resolve Alpine dispatch expression
    $resolvedAction = match(true) {
        $as === 'close'           => 'close',
        $action === 'close'       => 'close',
        $action === 'toggle'      => 'toggle',
        default                   => 'open',
    };

    $dispatchExpr = match($resolvedAction) {
        'close'  => "\$dispatch('close-modal', { name: '{$modal}' })",
        'toggle' => "\$dispatch(isOpen ? 'close-modal' : 'open-modal', { name: '{$modal}' })",
        default  => "\$dispatch('open-modal', { name: '{$modal}' })",
    };

    // Extra attributes for <a>
    $hrefAttr = ($tag === 'a') ? 'href="' . ($href ?? '#') . '"' : '';
    // type for <button>
    $typeAttr = ($tag === 'button') ? 'type="button"' : '';
@endphp

<{{ $tag }}
    {{ $typeAttr }}
    {{ $hrefAttr }}
    @click.prevent="{{ $dispatchExpr }}"
    {{ $attributes }}
>{{ $slot }}</{{ $tag }}>
