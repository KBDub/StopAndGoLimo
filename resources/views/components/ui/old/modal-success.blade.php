{{--
 | Component  : x-ui.modal-success
 | Wraps      : x-ui.modal variant="success"
 |
 | Convenience shorthand. Passes all props and slots through to x-ui.modal
 | with variant locked to "success". All other props behave identically.
 |
 | ── VARIANT TOKENS ─────────────────────────────────────────────────────────
 |   Accent stripe : bg-success (green)
 |   Header bg     : bg-linen
 |   Header border : border-success
 |   Panel bg      : bg-white
 |   Body text     : text-charcoal
 |   Icon bg/text  : bg-success/15 · text-success
 |   Footer bg     : bg-linen-light
 |   Footer border : border-linen-dark
 |
 | ── USAGE ───────────────────────────────────────────────────────────────────
 |   <x-ui.modal-success name="my-modal" title="Order Received">
 |       <x-slot:icon>
 |           <svg class="w-5 h-5" ...><polyline points="20 6 9 17 4 12"/></svg>
 |       </x-slot:icon>
 |       <p>Your order has been submitted successfully.</p>
 |       <x-slot:footer>
 |           <x-ui.button-modal-cancel modal="my-modal">Done</x-ui.button-modal-cancel>
 |       </x-slot:footer>
 |   </x-ui.modal-success>
--}}

@props([
    'name'        => null,
    'title'       => null,
    'size'        => 'md',
    'dismissible' => true,
    'scrollBody'  => true,
    'maxHeight'   => '92dvh',
    'maxWidth'    => null,
    'headerClass' => '',
    'bodyClass'   => '',
    'footerClass' => '',
    'panelClass'  => '',
])

@php
    $isSlottedTitle = $title instanceof \Illuminate\View\ComponentSlot;
@endphp

<x-ui.modal
    :name="$name"
    :title="$isSlottedTitle ? null : $title"
    :size="$size"
    variant="success"
    :dismissible="$dismissible"
    :scrollBody="$scrollBody"
    :maxHeight="$maxHeight"
    :maxWidth="$maxWidth"
    :headerClass="$headerClass"
    :bodyClass="$bodyClass"
    :footerClass="$footerClass"
    :panelClass="$panelClass"
>
    @if($isSlottedTitle)<x-slot:title>{{ $title }}</x-slot:title>@endif
    @isset($header)<x-slot:header>{{ $header }}</x-slot:header>@endisset
    @isset($icon)<x-slot:icon>{{ $icon }}</x-slot:icon>@endisset
    {{ $slot }}
    @isset($footer)<x-slot:footer>{{ $footer }}</x-slot:footer>@endisset
</x-ui.modal>
