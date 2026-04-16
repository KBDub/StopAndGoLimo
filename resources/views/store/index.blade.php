<x-layouts.store>
    @foreach($page->sections ?? ['hero', 'countdown', 'catalog', 'calendar', 'roster'] as $section)
        @switch($section)

            @case('hero')
                <x-store.hero />
                @break

            @case('countdown')
                <x-store.event-countdown />
                @break

            @case('catalog')
                <section id="catalog" class="py-10 bg-white">
                    <div class="max-w-7xl mx-auto px-6">
                        <div class="text-center mb-8">
                            <div class="inline-block mb-4">
                                <h2 class="text-2xl font-bold text-brand-primary mb-2">Shop Our Collection</h2>
                                <div class="h-1 bg-brand-secondary"></div>
                            </div>
                        </div>
                        <livewire:store.catalog />
                    </div>
                </section>
                @break

            @case('calendar')
                <x-store.event-calendar />
                @break

            @case('roster')
                <x-store.roster-grid />
                @break

        @endswitch
    @endforeach
</x-layouts.store>
