@php
    $store = app('current_store');
    $event = $store->nextCountdownEvent();

    /**
     * Category-driven visual themes.
     *   bg    → section background hex
     *   digit → large digit color hex
     *   muted → label beneath digit hex
     *   label → contextual intro phrase
     *   icon  → emoji reinforcing the category
     */
    $themes = [
        // ── School ─────────────────────────────────────────────────────────────
        'academic'         => ['bg' => '#1e3a5f', 'digit' => '#fbbf24', 'muted' => '#93c5fd', 'label' => 'Countdown To',       'icon' => '🎓'],
        'social_formal'    => ['bg' => '#4a1d96', 'digit' => '#f9a8d4', 'muted' => '#e9d5ff', 'label' => 'The Night Arrives In', 'icon' => '✨'],
        'spirit_pride'     => ['bg' => '#92400e', 'digit' => '#fef08a', 'muted' => '#fde68a', 'label' => 'Get Pumped —',        'icon' => '📣'],
        'athletic'         => ['bg' => '#7f1d1d', 'digit' => '#fde68a', 'muted' => '#fca5a5', 'label' => 'Game Day In',         'icon' => '🏆'],
        'creative_arts'    => ['bg' => '#78350f', 'digit' => '#fef08a', 'muted' => '#fcd34d', 'label' => 'Curtain Rises In',    'icon' => '🎭'],
        'special_days'     => ['bg' => '#075985', 'digit' => '#e0f2fe', 'muted' => '#bae6fd', 'label' => 'Happening In',        'icon' => '⭐'],
        // ── Corporate ──────────────────────────────────────────────────────────
        'hr_culture'       => ['bg' => '#1e3a8a', 'digit' => '#bfdbfe', 'muted' => '#93c5fd', 'label' => 'Starting In',         'icon' => '👥'],
        'ext_marketing'    => ['bg' => '#064e3b', 'digit' => '#a7f3d0', 'muted' => '#6ee7b7', 'label' => 'Launching In',        'icon' => '🚀'],
        'internal_ops'     => ['bg' => '#1e293b', 'digit' => '#cbd5e1', 'muted' => '#94a3b8', 'label' => 'Event Starts In',     'icon' => '📋'],
        'uniformity'       => ['bg' => '#374151', 'digit' => '#d1d5db', 'muted' => '#9ca3af', 'label' => 'Deadline In',         'icon' => '👔'],
        'corp_social'      => ['bg' => '#134e4a', 'digit' => '#99f6e4', 'muted' => '#5eead4', 'label' => 'Join Us In',          'icon' => '🤝'],
        'sales_incentives' => ['bg' => '#78350f', 'digit' => '#fef9c3', 'muted' => '#fde68a', 'label' => 'Qualifying Ends In',  'icon' => '🏅'],
        // ── Specialized ────────────────────────────────────────────────────────
        'franchise'        => ['bg' => '#9a3412', 'digit' => '#fed7aa', 'muted' => '#fdba74', 'label' => 'Opens In',            'icon' => '🏪'],
        'youth_sports'     => ['bg' => '#991b1b', 'digit' => '#fef08a', 'muted' => '#fca5a5', 'label' => 'Tip-Off In',          'icon' => '⚽'],
        'camp'             => ['bg' => '#14532d', 'digit' => '#bbf7d0', 'muted' => '#86efac', 'label' => 'Camp Starts In',      'icon' => '🏕️'],
    ];

    $category = $event['category'] ?? null;
    $theme    = $themes[$category] ?? null;
@endphp

@if($store->hasFeature('countdown') && $event)
<section
    class="py-10 text-white text-center"
    style="background-color: {{ $theme ? $theme['bg'] : 'var(--brand-accent)' }};"
    x-data="storeCountdown('{{ $event['event_date'] }}')"
    x-init="start()"
>
    <div class="max-w-7xl mx-auto px-6">

        {{-- Category label & icon ──────────────────────────────────────── --}}
        <p class="text-xs font-semibold uppercase tracking-[0.2em] mb-1" style="opacity: 0.65;">
            @if($theme)
                {{ $theme['icon'] }}&nbsp;&nbsp;{{ $theme['label'] }}
            @else
                Coming Up
            @endif
        </p>

        {{-- Event name ─────────────────────────────────────────────────── --}}
        <h3 class="text-3xl font-bold mb-2 leading-tight">{{ $event['name'] }}</h3>

        {{-- Event type sub-label ───────────────────────────────────────── --}}
        @if(!empty($event['event_type']))
            <p class="text-sm uppercase tracking-wider mb-6" style="opacity: 0.55;">{{ $event['event_type'] }}</p>
        @else
            <div class="mb-6"></div>
        @endif

        {{-- Countdown digits ───────────────────────────────────────────── --}}
        <div class="flex justify-center items-start gap-2 sm:gap-6">
            @foreach([['days', 'Days'], ['hours', 'Hours'], ['minutes', 'Min'], ['seconds', 'Sec']] as $i => [$key, $unitLabel])

            <div class="flex flex-col items-center min-w-[56px]">
                <span
                    class="block text-5xl sm:text-6xl font-bold tabular-nums leading-none"
                    style="{{ $theme ? 'color:' . $theme['digit'] . ';' : '' }}"
                    x-text="{{ $key }}"
                >0</span>
                <span
                    class="mt-1 text-[10px] uppercase tracking-[0.15em] font-semibold"
                    style="{{ $theme ? 'color:' . $theme['muted'] . ';' : 'opacity:0.6;' }}"
                >{{ $unitLabel }}</span>
            </div>

            @if(!$loop->last)
                <span class="text-3xl font-bold mt-1" style="opacity: 0.35;">:</span>
            @endif

            @endforeach
        </div>

        {{-- Location ──────────────────────────────────────────────────── --}}
        @if(!empty($event['location']))
            <p class="mt-6 text-sm" style="opacity: 0.6;">📍 {{ $event['location'] }}</p>
        @endif

    </div>
</section>

<script>
    function storeCountdown(targetDate) {
        return {
            days: 0, hours: 0, minutes: 0, seconds: 0,
            interval: null,
            start() {
                this.tick();
                this.interval = setInterval(() => this.tick(), 1000);
            },
            tick() {
                const diff = new Date(targetDate) - new Date();
                if (diff <= 0) {
                    clearInterval(this.interval);
                    this.days = this.hours = this.minutes = this.seconds = 0;
                    return;
                }
                this.days    = Math.floor(diff / (1000 * 60 * 60 * 24));
                this.hours   = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                this.minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
                this.seconds = Math.floor((diff % (1000 * 60)) / 1000);
            }
        };
    }
</script>
@endif
