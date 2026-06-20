@props([
    'surcharges' => [],
])

<div style="background: var(--navy-dark); padding: 2rem 1.5rem;">

    <h3 class="font-head" style="font-size: clamp(1rem, 2.5vw, 1.25rem); font-weight: 400; color: var(--cloud-light); text-align: center; margin: 0 0 0.5rem; letter-spacing: 0.5px;">
        Peak Rate <strong style="font-weight: 700; color: var(--champagne);">Surcharges</strong>
    </h3>
    <div style="height: 2px; background: var(--champagne); width: 3rem; margin: 0 auto 1.5rem;"></div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(160px, 1fr)); gap: 1rem;">
        @foreach($surcharges as $s)
            <div style="text-align: center; padding: 1rem; background: var(--navy); border-top: 3px solid var(--champagne);">
                <p class="font-body" style="font-size: 0.75rem; font-weight: 600; color: var(--cloud-light); margin: 0 0 0.4rem; letter-spacing: 0.5px;">{{ $s['label'] }}</p>
                <p class="font-head" style="font-size: 1.5rem; font-weight: 700; color: var(--champagne); margin: 0 0 0.25rem; line-height: 1;">{{ $s['amount'] }}</p>
                <p class="font-body" style="font-size: 0.75rem; color: var(--slate); margin: 0;">{{ $s['hours'] }}</p>
            </div>
        @endforeach
    </div>

</div>
