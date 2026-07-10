@props([
    'banners' => [],
])

@php $count = count($banners); @endphp

<style>
.lp-banner-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 1rem; }
.lp-banner-item { position: relative; overflow: hidden; display: block; text-decoration: none; }
.lp-banner-item:last-child:nth-child(odd) { grid-column: span 1; margin-left: auto; margin-right: auto; width: 50%; }
.lp-banner-item img { width: 100%; height: 100%; object-fit: cover; display: block; transition: transform 0.4s ease; }
.lp-banner-item:hover img { transform: scale(1.05); }
.lp-banner-overlay {
    position: absolute; inset: 0;
    background: rgba(30, 30, 30, 0);
    display: flex; align-items: center; justify-content: center;
    transition: background 0.3s ease;
}
.lp-banner-item:hover .lp-banner-overlay { background: rgba(30, 30, 30, 0.55); }
.lp-banner-label {
    font-family: var(--font-head, sans-serif);
    font-size: 1.25rem; font-weight: 700;
    color: var(--cloud-light, #fff);
    letter-spacing: 0.05em;
    opacity: 0; transform: translateY(6px);
    transition: opacity 0.3s ease, transform 0.3s ease;
    text-align: center; padding: 0 1rem;
}
.lp-banner-item:hover .lp-banner-label { opacity: 1; transform: translateY(0); }
@@media (max-width: 640px) {
    .lp-banner-grid { grid-template-columns: 1fr; }
    .lp-banner-item:last-child:nth-child(odd) { grid-column: auto; width: 100%; }
}
</style>

<div class="lp-banner-grid">
    @foreach($banners as $banner)
        <a href="{{ $banner['href'] ?? '#' }}"
           class="lp-banner-item"
           style="aspect-ratio: 16/7;">
            @if(!empty($banner['image']))
                <img src="{{ $banner['image'] }}" alt="{{ $banner['alt'] ?? '' }}" loading="lazy">
            @else
                <div style="width:100%;height:100%;background:#2c2c2c;"></div>
            @endif
            <div class="lp-banner-overlay">
                <span class="lp-banner-label">{{ $banner['title'] ?? '' }}</span>
            </div>
        </a>
    @endforeach
</div>
