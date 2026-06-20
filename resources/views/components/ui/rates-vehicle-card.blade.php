@props([
    'name'     => '',
    'tipLabel' => 'Tip (20%)',
    'rows'     => [],
    'note'     => '',
])

<div style="border-top: 4px solid var(--champagne);">

    {{-- Vehicle name header --}}
    <div style="background: var(--navy); padding: 0.85rem 1.5rem;">
        <h3 class="font-head" style="font-size: 1.1rem; font-weight: 700; color: var(--champagne); letter-spacing: 0.5px; margin: 0;">
            {{ $name }}
        </h3>
    </div>

    {{-- Scrollable table wrapper --}}
    <div style="width: 100%; overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; min-width: 520px; table-layout: fixed;">
            <colgroup>
                <col style="width: 28%;">
                <col style="width: 20%;">
                <col style="width: 26%;">
                <col style="width: 26%;">
            </colgroup>
            <thead>
                <tr style="background: var(--navy-dark);">
                    <th class="font-body" style="padding: 0.6rem 1.25rem; text-align: left;   font-size: 0.78rem; font-weight: 700; color: var(--champagne); letter-spacing: 0.4px; border-bottom: 2px solid var(--champagne);">Person(s)</th>
                    <th class="font-body" style="padding: 0.6rem 1.25rem; text-align: center; font-size: 0.78rem; font-weight: 700; color: var(--champagne); letter-spacing: 0.4px; border-bottom: 2px solid var(--champagne);">Tax</th>
                    <th class="font-body" style="padding: 0.6rem 1.25rem; text-align: center; font-size: 0.78rem; font-weight: 700; color: var(--champagne); letter-spacing: 0.4px; border-bottom: 2px solid var(--champagne);">{{ $tipLabel }}</th>
                    <th class="font-body" style="padding: 0.6rem 1.25rem; text-align: right;  font-size: 0.78rem; font-weight: 700; color: var(--champagne); letter-spacing: 0.4px; border-bottom: 2px solid var(--champagne);">Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rows as $i => $row)
                    <tr style="background: {{ $i % 2 === 0 ? 'var(--white)' : 'var(--cloud-light)' }};">
                        <td class="font-body" style="padding: 0.6rem 1.25rem; font-size: 0.875rem; color: var(--navy); font-weight: 600;">{{ $row['persons'] }}</td>
                        <td class="font-body" style="padding: 0.6rem 1.25rem; font-size: 0.875rem; color: var(--slate); text-align: center;">{{ $row['tax'] }}</td>
                        <td class="font-body" style="padding: 0.6rem 1.25rem; font-size: 0.875rem; color: var(--slate); text-align: center;">{{ $row['tip'] }}</td>
                        <td class="font-body" style="padding: 0.6rem 1.25rem; font-size: 0.875rem; color: var(--navy); font-weight: 700; text-align: right;">{{ $row['total'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @if($note)
        <p class="font-body" style="font-size: 0.78rem; color: var(--slate); padding: 0.5rem 1.25rem 0; margin: 0; background: var(--white);">{{ $note }}</p>
    @endif

    {{-- CTA --}}
    <div style="padding: 1rem 1.25rem 1.25rem; background: var(--white);">
        <a
            href="/bookings-reservations"
            class="font-head"
            style="display: inline-block; background: var(--champagne); color: var(--navy); font-size: 0.8rem; font-weight: 700; padding: 0.55rem 1.5rem; text-decoration: none; letter-spacing: 0.5px;"
        >Book a Ride</a>
    </div>

</div>
