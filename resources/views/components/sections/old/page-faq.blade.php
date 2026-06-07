@props(['heading' => 'Frequently Asked Questions', 'faqs' => []])
<section style="background:var(--navy);padding:4rem 1.5rem;">
    <div style="max-width:56rem;margin:0 auto;">
        <h2 class="font-head" style="color:var(--cloud-light);font-size:clamp(1.5rem,3vw,2rem);margin:0 0 2rem;text-align:center;">{{ $heading }}</h2>
        {{ $slot }}
    </div>
</section>
