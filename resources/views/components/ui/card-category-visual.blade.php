@props([
    'title'    => '',
    'subtitle' => '',
    'href'     => '#',
    'image'    => null,
    'featured' => false,
])

<a href="{{ $href }}"
   style="display:block;position:relative;overflow:hidden;aspect-ratio:{{ $featured ? '2/1' : '3/2' }};background:#2c2c2c;text-decoration:none;{{ $featured ? 'grid-column:span 2;' : '' }}"
   onmouseenter="this.querySelector('.ccv-img')&&(this.querySelector('.ccv-img').style.transform='scale(1.05)');this.querySelector('.ccv-title').style.color='#FFC20E';"
   onmouseleave="this.querySelector('.ccv-img')&&(this.querySelector('.ccv-img').style.transform='scale(1)');this.querySelector('.ccv-title').style.color='#ffffff';">

    @if($image)
        <img class="ccv-img" src="{{ $image }}" alt="{{ $title }}"
             loading="lazy"
             style="width:100%;height:100%;object-fit:cover;position:absolute;inset:0;transition:transform 0.4s ease;">
    @endif

    {{-- Gradient overlay from bottom --}}
    <div style="position:absolute;inset:0;background:linear-gradient(to top,rgba(20,20,20,0.85) 0%,rgba(20,20,20,0.2) 60%,transparent 100%);"></div>

    {{-- Text at bottom --}}
    <div style="position:absolute;bottom:0;left:0;right:0;padding:1rem 1.1rem;">
        <p class="ccv-title" style="font-family:var(--font-head,sans-serif);font-size:1rem;font-weight:700;color:#ffffff;margin:0;line-height:1.2;transition:color 0.25s ease;">{{ $title }}</p>
        @if($subtitle)
            <p style="font-family:var(--font-body,sans-serif);font-size:0.75rem;color:rgba(255,255,255,0.7);margin:0.2rem 0 0;">{{ $subtitle }}</p>
        @endif
    </div>
</a>
