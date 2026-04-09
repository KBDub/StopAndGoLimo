{{--
 | Component  : x-ui.modal-gold
 | Wraps      : x-ui.modal variant="gold"
 |
 | Convenience shorthand. Passes all props and slots through to x-ui.modal
 | with variant locked to "gold". All other props behave identically.
 |
 | ── VARIANT TOKENS ─────────────────────────────────────────────────────────
 |   Accent stripe : bg-gold-gradient-horizontal
 |   Header bg     : bg-gold-gradient
 |   Header border : border-sunburst-dark
 |   Panel bg      : bg-linen-light
 |   Body text     : text-charcoal
 |   Icon bg/text  : bg-sunburst/20 · text-charcoal
 |   Footer bg     : bg-linen
 |   Footer border : border-linen-dark
 |
 | ── USAGE ───────────────────────────────────────────────────────────────────
 |   <x-ui.modal-gold name="my-modal" title="Featured Offer" size="md">
 |       <p>Premium content here.</p>
 |       <x-slot:footer>
 |           <x-ui.button-modal-cancel modal="my-modal">Dismiss</x-ui.button-modal-cancel>
 |           <x-ui.button-modal-primary>Shop Now →</x-ui.button-modal-primary>
 |       </x-slot:footer>
 |   </x-ui.modal-gold>
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
    variant="gold"
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
