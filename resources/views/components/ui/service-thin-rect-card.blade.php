@props([
    'icon'       => '',
    'label'      => 'Service',
    'href'       => '#',
    'target'     => '_self',
    'horizontal' => false,
])

<style>
    .sg-svc-rect {
        display: flex;
        align-items: center;
        gap: 0.875rem;
        padding: 1rem 1.25rem;
        background: var(--navy);
        color: var(--cloud-light);
        text-decoration: none;
        width: 100%;
        box-sizing: border-box;
        transition: background 0.2s ease, box-shadow 0.2s ease;
    }
    .sg-svc-rect:hover {
        background: var(--navy-light);
        box-shadow: inset 3px 0 0 var(--champagne);
    }
    .sg-svc-rect__icon {
        flex-shrink: 0;
        width: 1.25rem;
        height: 1.25rem;
        color: var(--champagne);
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .sg-svc-rect__icon svg {
        width: 1.25rem;
        height: 1.25rem;
        fill: currentColor;
    }
    .sg-svc-rect__label {
        font-family: var(--font-head);
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: var(--cloud-light);
        text-decoration: underline;
        text-underline-offset: 3px;
    }

    .sg-svc-rect.is-horizontal {
        width: auto;
        padding: 0.625rem 1.125rem;
        border-bottom: 3px solid transparent;
        box-shadow: none;
        transition: background 0.2s ease, border-bottom-color 0.2s ease;
    }
    .sg-svc-rect.is-horizontal:hover {
        background: var(--navy-light);
        box-shadow: none;
        border-bottom-color: var(--champagne);
    }
    .sg-svc-rect.is-horizontal .sg-svc-rect__label {
        font-size: 0.875rem;
        text-decoration: none;
        white-space: nowrap;
    }
</style>

<a href="{{ $href }}" target="{{ $target }}" class="sg-svc-rect {{ $horizontal ? 'is-horizontal' : '' }}">

    @if($icon)
    <span class="sg-svc-rect__icon">{!! $icon !!}</span>
    @endif

    <span class="sg-svc-rect__label">{{ $label }}</span>

</a>
