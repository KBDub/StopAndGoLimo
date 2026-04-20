@php
    $store  = app('current_store');
    $events = collect($store->events ?? [])
        ->filter(fn ($e) => ! empty($e['name']) && ! empty($e['event_date']))
        ->sortBy('event_date')
        ->values();

    $categoryBadges = [
        'academic'         => ['label' => 'Academic',           'bg' => '#1e3a5f', 'text' => '#fbbf24'],
        'social_formal'    => ['label' => 'Social / Formal',    'bg' => '#4a1d96', 'text' => '#f9a8d4'],
        'spirit_pride'     => ['label' => 'Spirit / Pride',     'bg' => '#92400e', 'text' => '#fef08a'],
        'athletic'         => ['label' => 'Athletic',           'bg' => '#7f1d1d', 'text' => '#fde68a'],
        'creative_arts'    => ['label' => 'Creative Arts',      'bg' => '#78350f', 'text' => '#fef08a'],
        'special_days'     => ['label' => 'Special Days',       'bg' => '#075985', 'text' => '#e0f2fe'],
        'hr_culture'       => ['label' => 'HR / Culture',       'bg' => '#1e3a8a', 'text' => '#bfdbfe'],
        'ext_marketing'    => ['label' => 'Marketing',          'bg' => '#064e3b', 'text' => '#a7f3d0'],
        'internal_ops'     => ['label' => 'Internal Ops',       'bg' => '#1e293b', 'text' => '#cbd5e1'],
        'uniformity'       => ['label' => 'Uniformity',         'bg' => '#374151', 'text' => '#d1d5db'],
        'corp_social'      => ['label' => 'Corp Social',        'bg' => '#134e4a', 'text' => '#99f6e4'],
        'sales_incentives' => ['label' => 'Sales Incentives',   'bg' => '#78350f', 'text' => '#fef9c3'],
        'franchise'        => ['label' => 'Franchise',          'bg' => '#9a3412', 'text' => '#fed7aa'],
        'youth_sports'     => ['label' => 'Youth Sports',       'bg' => '#991b1b', 'text' => '#fef08a'],
        'camp'             => ['label' => 'Camp',               'bg' => '#14532d', 'text' => '#bbf7d0'],
    ];
@endphp

@if($store->hasFeature('calendar') && $events->count())
<section class="py-10 bg-white">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-8">
            <h2 class="text-2xl font-bold text-brand-primary mb-2">Upcoming Events</h2>
            <div class="h-1 w-16 mx-auto bg-brand-secondary"></div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($events as $event)
                @php
                    $date     = \Carbon\Carbon::parse($event['event_date']);
                    $isPast   = $date->isPast();
                    $cat      = $event['category'] ?? null;
                    $badge    = $cat ? ($categoryBadges[$cat] ?? null) : null;
                @endphp

                <div class="border border-gray-200 p-5 transition-opacity {{ $isPast ? 'opacity-40' : '' }}">

                    {{-- Category badge ─────────────────────────────────── --}}
                    @if($badge)
                        <div class="mb-3">
                            <span
                                class="inline-block text-[10px] font-bold uppercase tracking-wider px-2 py-0.5 rounded-sm"
                                style="background-color: {{ $badge['bg'] }}; color: {{ $badge['text'] }};"
                            >{{ $badge['label'] }}</span>
                            @if(!empty($event['event_type']))
                                <span class="ml-1 text-[10px] text-gray-400 uppercase tracking-wider">{{ $event['event_type'] }}</span>
                            @endif
                        </div>
                    @endif

                    <div class="flex items-start gap-4">

                        {{-- Date tile ──────────────────────────────────── --}}
                        <div
                            class="flex-shrink-0 text-white text-center px-3 py-2 min-w-[56px]"
                            style="background-color: {{ $badge ? $badge['bg'] : 'var(--brand-primary)' }};"
                        >
                            <span class="block text-xl font-bold leading-none">{{ $date->format('d') }}</span>
                            <span class="block text-xs uppercase tracking-wider">{{ $date->format('M') }}</span>
                        </div>

                        {{-- Event details ───────────────────────────────── --}}
                        <div class="min-w-0">
                            <h4 class="font-bold text-brand-primary leading-tight">{{ $event['name'] }}</h4>
                            <p class="text-sm text-gray-500 mt-1">{{ $date->format('l, F j') }} &middot; {{ $date->format('g:i A') }}</p>
                            @if(!empty($event['location']))
                                <p class="text-xs text-gray-400 mt-1">📍 {{ $event['location'] }}</p>
                            @endif
                            @if(!empty($event['show_countdown']) && !$isPast)
                                <p class="text-xs mt-2 font-semibold" style="color: var(--brand-accent);">⏱ Countdown active</p>
                            @endif
                        </div>

                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
@endif
