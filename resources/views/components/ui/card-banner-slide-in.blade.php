@props([
    'image'     => '',
    'alt'       => '',
    'title'     => '',
    'href'      => '#',
    'direction' => 'left',
])

@php $uid = 'slide-' . md5($title . $direction . $href); @endphp

<style>
.sg-slide-banner {
    position: relative; overflow: hidden; display: block; text-decoration: none;
    aspect-ratio: 16/7; width: 100%;
}
#{{ $uid }} {
    transform: translateX({{ $direction === 'right' ? '100%' : '-100%' }});
    opacity: 0; transition: transform 1.1s ease-out, opacity 1.1s ease-out;
}
#{{ $uid }}.is-visible { transform: translateX(0); opacity: 1; }
.sg-slide-banner img { width:100%; height:100%; object-fit:cover; display:block; transition: transform 0.4s ease; }
.sg-slide-banner:hover img { transform: scale(1.05); }
.sg-slide-banner-overlay {
    position: absolute; inset: 0;
    background: rgba(30,30,30,0);
    display: flex; align-items: center; justify-content: center;
    transition: background 0.3s ease;
}
.sg-slide-banner:hover .sg-slide-banner-overlay { background: rgba(30,30,30,0.55); }
.sg-slide-banner-label {
    font-family: var(--font-head, sans-serif);
    font-size: 1.5rem; font-weight: 700;
    color: var(--cloud-light, #fff);
    letter-spacing: 0.05em;
    opacity: 0; transform: translateY(6px);
    transition: opacity 0.3s ease, transform 0.3s ease;
}
.sg-slide-banner:hover .sg-slide-banner-label { opacity: 1; transform: translateY(0); }
</style>

<a href="{{ $href }}" class="sg-slide-banner" id="{{ $uid }}">
    @if($image)
        <img src="{{ $image }}" alt="{{ $alt }}" width="1600" height="900" fetchpriority="high" loading="eager">
    @else
        <div style="width:100%;height:100%;background:#2c2c2c;"></div>
    @endif
    <div class="sg-slide-banner-overlay">
        <span class="sg-slide-banner-label">{{ $title }}</span>
    </div>
</a>

<script>
(function() {
    var el = document.getElementById('{{ $uid }}');
    if (!el) return;
    function reveal() { el.classList.add('is-visible'); }
    // offsetTop is layout-based and unaffected by CSS transform.
    // IntersectionObserver uses the visual (transformed) rect in most browsers,
    // so a translateX(-100%) element is never seen as intersecting. We bypass
    // that by checking the layout position directly.
    function isInLayoutViewport() {
        return el.offsetTop < (window.pageYOffset + window.innerHeight);
    }
    if (isInLayoutViewport()) {
        setTimeout(reveal, 80);
        return;
    }
    // For elements far below the fold, use observer with a wide horizontal
    // rootMargin so the transform offset doesn't prevent detection.
    var obs = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) { reveal(); obs.disconnect(); }
        });
    }, { threshold: 0.05, rootMargin: '0px 200% 0px 200%' });
    obs.observe(el);
})();
</script>
