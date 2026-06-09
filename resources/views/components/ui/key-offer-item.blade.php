@props([
    'icon'    => '',
    'label'   => 'Feature',
    'divider' => true,
])

<style>
    .sg-key-offer {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.875rem 1.5rem;
        flex: 1;
        position: relative;
    }
    .sg-key-offer__icon {
        flex-shrink: 0;
        width: 1.75rem;
        height: 1.75rem;
        color: var(--champagne);
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .sg-key-offer__icon svg {
        width: 1.75rem;
        height: 1.75rem;
        fill: currentColor;
    }
    .sg-key-offer__label {
        font-family: var(--font-head);
        font-size: 0.8rem;
        font-weight: 700;
        letter-spacing: 0.1em;
        color: var(--slate);
        line-height: 1.2;
        white-space: nowrap;
    }
    .sg-key-offer__divider {
        position: absolute;
        right: 0;
        top: 50%;
        transform: translateY(-50%);
        width: 1px;
        height: 1.5rem;
        background: var(--champagne);
        opacity: 0.4;
    }
</style>

<div class="sg-key-offer">

    @if($icon)
    <span class="sg-key-offer__icon">{!! $icon !!}</span>
    @endif

    <span class="sg-key-offer__label">{{ $label }}</span>

    @if($divider)
    <span class="sg-key-offer__divider" aria-hidden="true"></span>
    @endif

</div>
