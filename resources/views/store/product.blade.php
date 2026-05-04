@php $productTitle = ucwords(str_replace('-', ' ', $slug)); @endphp
<x-layouts.store
    :title="$productTitle"
    :description="'Order ' . $productTitle . ' from the ' . $store->name . ' store. Custom apparel made to order. Powered by Top 5 Percent, veteran-owned in Joliet, IL.'">
    <section class="py-10 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <livewire:store.product-detail :slug="$slug" />
        </div>
    </section>
</x-layouts.store>
