@props(['heading' => 'Ready to Get Started?', 'subheading' => '', 'buttonText' => 'Book Now', 'buttonHref' => '/booking'])
<section style="background:var(--navy-dark);padding:4rem 1.5rem;text-align:center;">
    <h2 class="font-head" style="color:var(--cloud-light);font-size:clamp(1.5rem,3vw,2.25rem);margin:0 0 0.75rem;">{{ $heading }}</h2>
    @if($subheading)<p style="font-family:var(--font-body);color:var(--cloud);margin:0 0 1.75rem;">{{ $subheading }}</p>@endif
    <a href="{{ $buttonHref }}" style="display:inline-block;background:var(--champagne);color:var(--navy-dark);font-family:var(--font-head);font-size:0.95rem;font-weight:700;padding:0.75rem 2.25rem;text-decoration:none;">{{ $buttonText }}</a>
</section>
