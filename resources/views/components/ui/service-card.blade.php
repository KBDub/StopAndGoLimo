@props([
    'label' => '',
    'href'  => '#',
    'image' => '',
    'imageAlt' => '',
])

<a
    href="{{ $href }}"
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
    <div style="position: absolute; inset: 6px; background: rgba(10, 14, 35, 0.55);"></div>

    {{-- Label + underbar, vertically and horizontally centered --}}
    <div style="
        position: absolute;
        inset: 6px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
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
