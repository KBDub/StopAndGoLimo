@props(['heading' => 'Preview', 'storefront' => ''])
<section style="background:var(--navy-dark);padding:3rem 1.5rem;text-align:center;">
    <h2 class="font-head" style="color:var(--cloud-light);font-size:clamp(1.25rem,2.5vw,1.75rem);margin:0 0 1rem;">{{ $heading }}</h2>
    {{ $slot }}
</section>
