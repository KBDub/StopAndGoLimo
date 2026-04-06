{{--
 | Component  : x-ui.modal-trigger
 | Location   : resources/views/components/ui/modal-trigger.blade.php
 |
 | Convenience trigger that dispatches open-modal / close-modal events.
 | Renders as any HTML element via the `as` prop.
 |
 | ── PROPS ───────────────────────────────────────────────────────────────────
 |   modal    required — must match the `name` prop of the target x-ui.modal
 |   as       button (default) | a | div | span | close
 |            `as="close"` is shorthand for dispatching close-modal
 |   action   open (default) | close | toggle
 |   href     only used when as="a"
 |
 | ── USAGE ───────────────────────────────────────────────────────────────────
 |   <x-ui.modal-trigger modal="confirm">Open</x-ui.modal-trigger>
 |   <x-ui.modal-trigger modal="confirm" as="close">Cancel</x-ui.modal-trigger>
 |   <x-ui.modal-trigger modal="gallery" as="a" href="#">View Gallery</x-ui.modal-trigger>
 |   <x-ui.modal-trigger modal="info" action="toggle">Toggle</x-ui.modal-trigger>
--}}

@props([
    'modal'  => null,
    'as'     => 'button',
    'action' => 'open',
    'href'   => null,
])

@php
    $tag = match(strtolower($as)) {
        'a'    => 'a',
        'div'  => 'div',
        'span' => 'span',
        default => 'button',
    };

    $resolvedAction = match(true) {
        $as === 'close'      => 'close',
        $action === 'close'  => 'close',
        $action === 'toggle' => 'toggle',
        default              => 'open',
    };

    $dispatchExpr = match($resolvedAction) {
        'close'  => "\$dispatch('close-modal', { name: '{$modal}' })",
        'toggle' => "\$dispatch(isOpen ? 'close-modal' : 'open-modal', { name: '{$modal}' })",
        default  => "\$dispatch('open-modal', { name: '{$modal}' })",
    };

    $hrefAttr = ($tag === 'a') ? 'href="' . ($href ?? '#') . '"' : '';
    $typeAttr = ($tag === 'button') ? 'type="button"' : '';
@endphp

<{{ $tag }}
    x-data="{}"
    {!! $typeAttr !!}
    {!! $hrefAttr !!}
    @click.prevent="{!! $dispatchExpr !!}"
    {{ $attributes }}
>{{ $slot }}</{{ $tag }}>
