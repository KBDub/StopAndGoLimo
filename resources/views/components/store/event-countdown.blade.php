@php
    $store = app('current_store');
    $event = $store->nextCountdownEvent();
@endphp

@if($store->hasFeature('countdown') && $event)
<section
    class="py-8 bg-brand-accent text-white text-center"
    x-data="storeCountdown('{{ $event['event_date'] }}')"
    x-init="start()"
>
    <div class="max-w-7xl mx-auto px-6">
        <p class="text-sm font-semibold uppercase tracking-widest text-white/70 mb-2">Coming Up</p>
        <h3 class="text-2xl font-bold mb-6">{{ $event['name'] }}</h3>
        <div class="flex justify-center gap-6 sm:gap-10">
            <div class="text-center">
                <span class="block text-4xl font-bold" x-text="days">0</span>
                <span class="text-xs uppercase tracking-widest text-white/70">Days</span>
            </div>
            <div class="text-center">
                <span class="block text-4xl font-bold" x-text="hours">0</span>
                <span class="text-xs uppercase tracking-widest text-white/70">Hours</span>
            </div>
            <div class="text-center">
                <span class="block text-4xl font-bold" x-text="minutes">0</span>
                <span class="text-xs uppercase tracking-widest text-white/70">Min</span>
            </div>
            <div class="text-center">
                <span class="block text-4xl font-bold" x-text="seconds">0</span>
                <span class="text-xs uppercase tracking-widest text-white/70">Sec</span>
            </div>
        </div>
        @if(!empty($event['location']))
            <p class="mt-4 text-sm text-white/70">{{ $event['location'] }}</p>
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
