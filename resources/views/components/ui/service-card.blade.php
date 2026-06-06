@props([
    'label'    => '',
    'href'     => '#',
    'image'    => '',
    'imageAlt' => '',
])

<style>
    .sg-service-card {
        transition: box-shadow 0.3s ease;
    }
    .sg-service-card:hover {
        box-shadow: inset 0 0 0 2px var(--champagne-light);
    }
    .sg-service-card:hover .sg-service-card__overlay {
        background: rgba(10, 14, 35, 0.38);
    }
    .sg-service-card__overlay {
        transition: background 0.3s ease;
    }
</style>

<a
    href="{{ $href }}"
    class="sg-service-card"
    style="
        display: block;
        position: relative;
        aspect-ratio: 1/1;
        overflow: hidden;
        text-decoration: none;
        background: var(--navy);
        padding: 6px;
    "
>
    {{-- Background photo --}}
    @if($image)
    <img
        src="{{ $image }}"
        alt="{{ $imageAlt ?: $label }}"
        style="position: absolute; inset: 6px; width: calc(100% - 12px); height: calc(100% - 12px); object-fit: cover; display: block;"
    >
    @endif

    {{-- Dark overlay --}}
    <div class="sg-service-card__overlay" style="position: absolute; inset: 6px; background: rgba(10, 14, 35, 0.55);"></div>

    {{-- Label + underbar, anchored to bottom-center --}}
    <div style="
        position: absolute;
        bottom: 1.5rem;
        left: 0;
        right: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
    ">
        {{-- fit-content wrapper so underbar is 116% of text width --}}
        <div style="width: fit-content; text-align: center;">
            <span style="
                font-family: var(--font-head);
                font-size: clamp(0.85rem, 1.4vw, 1.1rem);
                font-weight: 700;
                color: var(--cloud-light);
                line-height: 1.3;
                display: block;
                letter-spacing: 0.02em;
            ">{{ $label }}</span>
            <div style="height: 2px; background: var(--champagne); width: 116%; margin-left: -8%; margin-top: 0.5rem;"></div>
        </div>
    </div>
</a>
