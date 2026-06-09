@props([
    'boxes' => [],
])

<section style="background: var(--cloud-light);" class="py-12 lg:py-[6.25rem]">
    <div class="max-w-7xl mx-auto px-6">

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($boxes as $box)
                <x-ui.rect-box
                    as="info-list"
                    :heading="$box['heading']"
                    :items="$box['items']"
                />
            @endforeach
        </div>

    </div>
</section>
