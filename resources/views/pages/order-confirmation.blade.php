<x-layouts.page
    title="Order Confirmed"
    metaDescription="Your order has been placed with Top 5 Percent. Thank you for your purchase!"
    currentPage="order-confirmation"
>
    @livewire('cart.order-confirmation', ['orderId' => $orderId])
</x-layouts.page>
