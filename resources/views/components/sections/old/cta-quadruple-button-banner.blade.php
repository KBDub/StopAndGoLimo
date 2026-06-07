@props(['heading' => 'Ready to Ride?', 'buttons' => []])
<section style="background:var(--champagne);padding:3rem 1.5rem;text-align:center;">
    <h2 class="font-head" style="color:var(--navy-dark);font-size:clamp(1.25rem,2.5vw,1.75rem);margin:0 0 1.5rem;">{{ $heading }}</h2>
    <div style="display:flex;flex-wrap:wrap;gap:1rem;justify-content:center;">
        {{ $slot }}
    </div>
</section>
