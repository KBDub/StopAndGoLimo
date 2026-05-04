@php
    $pageTitle       = $page->title ?: ucwords(str_replace('-', ' ', $page->slug));
    $storeName       = $store->name;
    $pageDescription = "Learn about {$storeName}. Custom spirit wear made to order. Powered by Top 5 Percent, veteran-owned in Joliet, IL.";
@endphp

<x-layouts.store :title="$pageTitle" :description="$pageDescription">

    <section class="py-16 bg-brand-primary text-white">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-4">
                {{ $pageTitle }}
            </h1>
            <p class="text-lg text-white/80 max-w-2xl mx-auto">
                {{ $storeName }}
            </p>
        </div>
    </section>

    @if($page->custom_html)
        <section class="py-12 bg-white">
            <div class="max-w-3xl mx-auto px-6">
                {!! $page->custom_html !!}
            </div>
        </section>
    @endif

</x-layouts.store>
