@props([
    'heading' => 'Explore Our Services',
    'headingAccent' => '',
    'description' => '',
    'items' => [],
])

<section class="py-10 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        @if($heading)
            <div class="text-center mb-10">
                <h2 class="text-3xl md:text-4xl font-bold text-charcoal mb-3">
                    {{ $heading }}
                    @if($headingAccent)
                        <span class="text-sunburst">{{ $headingAccent }}</span>
                    @endif
                </h2>
                @if($description)
                    <p class="text-charcoal-light max-w-2xl mx-auto">{{ $description }}</p>
                @endif
            </div>
        @endif

        <div class="space-y-6">
            @foreach($items as $index => $item)
                <div class="grid md:grid-cols-2 gap-6">
                    @if($index % 2 === 0)
                        <x-ui.card-info-dark
                            :title="$item['title']"
                            :description="$item['description']"
                            :linkText="$item['linkText'] ?? 'Learn more'"
                            :linkHref="$item['linkHref'] ?? '#'"
                        />
                        <x-ui.card-info-light
                            :title="$item['seoTitle'] ?? $item['title']"
                            :description="$item['seoDescription'] ?? ''"
                            :linkText="$item['seoLinkText'] ?? null"
                            :linkHref="$item['linkHref'] ?? '#'"
                        />
                    @else
                        <x-ui.card-info-light
                            :title="$item['seoTitle'] ?? $item['title']"
                            :description="$item['seoDescription'] ?? ''"
                            :linkText="$item['seoLinkText'] ?? null"
                            :linkHref="$item['linkHref'] ?? '#'"
                        />
                        <x-ui.card-info-dark
                            :title="$item['title']"
                            :description="$item['description']"
                            :linkText="$item['linkText'] ?? 'Learn more'"
                            :linkHref="$item['linkHref'] ?? '#'"
                        />
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</section>
