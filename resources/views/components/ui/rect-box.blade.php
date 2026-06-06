@props([
    'label' => '',
    'href'  => '#',
])

<a
    href="{{ $href }}"
    target="_blank"
    rel="noopener noreferrer"
    style="
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background: var(--navy);
        min-height: 9rem;
        padding: 1.75rem 1.25rem;
        border-radius: 0;
        text-decoration: none;
        gap: 1.1rem;
    "
>
    {{-- Map-marker-alt SVG (FA fa-map-marker-alt path, viewBox 0 0 384 512) --}}
    <svg
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 384 512"
        aria-hidden="true"
        style="width: 2.75rem; flex-shrink: 0; fill: var(--champagne);"
    >
        <path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"/>
    </svg>

    <span style="
        font-family: var(--font-head);
        font-size: 25px;
        font-weight: 500;
        line-height: 30px;
        color: var(--cloud-light);
        text-align: center;
        display: block;
    ">{{ $label }}</span>
</a>
