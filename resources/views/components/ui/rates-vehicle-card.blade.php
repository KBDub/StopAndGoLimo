@props([
    'name'     => '',
    'image'    => '',
    'imageAlt' => '',
    'tipLabel' => 'Tip (20%)',
    'rows'     => [],
    'note'     => '',
])

<div style="background: var(--white); border-top: 4px solid var(--champagne); display: flex; flex-direction: column;">

    {{-- Vehicle image --}}
    @if($image)
        <div style="width: 100%; aspect-ratio: 16/9; overflow: hidden;">
            <img
                src="{{ $image }}"
                alt="{{ $imageAlt ?: $name . ' — Stop and Go Airport Shuttle' }}"
                style="width: 100%; height: 100%; object-fit: cover; object-position: center;"
                loading="lazy"
            >
        </div>
    @endif

    {{-- Card header: vehicle name --}}
    <div style="background: var(--navy); padding: 1rem 1.5rem;">
        <h3 class="font-head" style="font-size: clamp(1.1rem, 2.5vw, 1.4rem); font-weight: 700; color: var(--champagne); letter-spacing: 0.5px; margin: 0;">
            {{ $name }}
        </h3>
    </div>

    {{-- Pricing table --}}
    <div style="overflow-x: auto; -webkit-overflow-scrolling: touch;">
        <table style="width: 100%; border-collapse: collapse; min-width: 480px;">
            <thead>
                <tr style="background: var(--cloud-light);">
                    <th class="font-body" style="padding: 0.65rem 1rem; text-align: left; font-size: 0.8rem; font-weight: 700; color: var(--champagne); text-transform: none; letter-spacing: 0.5px; border-bottom: 2px solid var(--champagne); white-space: nowrap;">Person(s)</th>
                    <th class="font-body" style="padding: 0.65rem 1rem; text-align: center; font-size: 0.8rem; font-weight: 700; color: var(--champagne); text-transform: none; letter-spacing: 0.5px; border-bottom: 2px solid var(--champagne); white-space: nowrap;">Tax</th>
                    <th class="font-body" style="padding: 0.65rem 1rem; text-align: center; font-size: 0.8rem; font-weight: 700; color: var(--champagne); text-transform: none; letter-spacing: 0.5px; border-bottom: 2px solid var(--champagne); white-space: nowrap;">{{ $tipLabel }}</th>
                    <th class="font-body" style="padding: 0.65rem 1rem; text-align: right; font-size: 0.8rem; font-weight: 700; color: var(--navy); text-transform: none; letter-spacing: 0.5px; border-bottom: 2px solid var(--champagne); white-space: nowrap; background: var(--navy-dark) !important; color: var(--champagne) !important;">Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rows as $i => $row)
                    <tr style="background: {{ $i % 2 === 0 ? 'var(--white)' : 'var(--cloud-light)' }}; transition: background 0.15s;">
                        <td class="font-body" style="padding: 0.6rem 1rem; font-size: 0.875rem; color: var(--navy); font-weight: 600; white-space: nowrap;">{{ $row['persons'] }}</td>
                        <td class="font-body" style="padding: 0.6rem 1rem; font-size: 0.875rem; color: var(--slate); text-align: center; white-space: nowrap;">{{ $row['tax'] }}</td>
                        <td class="font-body" style="padding: 0.6rem 1rem; font-size: 0.875rem; color: var(--slate); text-align: center; white-space: nowrap;">{{ $row['tip'] }}</td>
                        <td class="font-body" style="padding: 0.6rem 1rem; font-size: 0.875rem; font-weight: 700; color: var(--navy); text-align: right; white-space: nowrap; background: {{ $i % 2 === 0 ? 'var(--cloud)' : 'var(--cloud-light)' }};">{{ $row['total'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- Optional note --}}
    @if($note)
        <p class="font-body" style="font-size: 0.8rem; color: var(--slate); padding: 0.5rem 1rem 0; margin: 0;">{{ $note }}</p>
    @endif

    {{-- Book a Ride button --}}
    <div style="padding: 1.25rem 1.5rem 1.5rem;">
        <a
            href="/bookings-reservations"
            class="font-head"
            style="display: inline-block; background: var(--champagne); color: var(--navy); font-size: 0.875rem; font-weight: 700; padding: 0.65rem 1.75rem; text-decoration: none; letter-spacing: 0.5px; transition: opacity 0.2s;"
            onmouseover="this.style.opacity='0.85'"
            onmouseout="this.style.opacity='1'"
        >
            Book a Ride
        </a>
    </div>

</div>
