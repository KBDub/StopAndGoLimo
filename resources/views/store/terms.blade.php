<x-layouts.store title="Terms &amp; Conditions">
    @php
        $store  = app('current_store');
        $email  = $store->contact_email ?: config('storefront.default_contact_email');
        $lpage  = $store->pages()->where('slug', 'terms')->first();
    @endphp

    @if($lpage && $lpage->custom_html)
        @php $renderedHtml = str_replace('{{contact_email}}', $email, $lpage->custom_html); @endphp
        {!! $renderedHtml !!}
    @else
    <section class="py-12 min-h-screen" style="background: var(--brand-bg, #f9f9f9);">
        <div class="max-w-3xl mx-auto px-6">

            <div class="mb-10">
                <h1 class="text-3xl font-bold mb-2" style="color: var(--brand-primary);">Terms &amp; Conditions</h1>
                <p class="text-sm" style="color: var(--brand-primary); opacity: .6;">Last updated: {{ date('F j, Y') }}</p>
            </div>

            <div class="prose prose-sm max-w-none space-y-8 text-gray-700">

                <div>
                    <h2 class="text-lg font-bold mb-2" style="color: var(--brand-primary);">1. Acceptance of Terms</h2>
                    <p>By placing an order through this storefront you agree to be bound by these Terms &amp; Conditions, our Privacy Policy, and our Refund Policy. If you do not agree, please do not place an order.</p>
                </div>

                <div>
                    <h2 class="text-lg font-bold mb-2" style="color: var(--brand-primary);">2. Custom &amp; Personalized Products</h2>
                    <p>All products sold through this storefront are custom-made or personalized specifically for you. Production begins as soon as your order is confirmed. Because each item is made to order, we are unable to accept returns, exchanges, or issue refunds once production has begun. Please review your order details carefully before submitting.</p>
                </div>

                <div>
                    <h2 class="text-lg font-bold mb-2" style="color: var(--brand-primary);">3. Order Accuracy</h2>
                    <p>You are responsible for ensuring that all artwork files, text, sizing, colors, and other specifications submitted with your order are correct. We reproduce your order exactly as submitted. We are not liable for errors in the information you provide.</p>
                </div>

                <div>
                    <h2 class="text-lg font-bold mb-2" style="color: var(--brand-primary);">4. Pricing &amp; Payment</h2>
                    <p>All prices are listed in US Dollars (USD) and are subject to change without notice. Payment is due in full at the time of order. We accept all major credit and debit cards. Orders are not entered into production until payment is successfully processed.</p>
                </div>

                <div>
                    <h2 class="text-lg font-bold mb-2" style="color: var(--brand-primary);">5. Production &amp; Shipping Times</h2>
                    <p>Production times vary by product and are estimates only. We are not responsible for delays caused by shipping carriers, natural events, or circumstances beyond our control. Shipping charges are calculated at checkout and are non-refundable.</p>
                </div>

                <div>
                    <h2 class="text-lg font-bold mb-2" style="color: var(--brand-primary);">6. Intellectual Property</h2>
                    <p>By submitting artwork or designs with your order, you confirm that you own or have full rights to use those materials. You grant us a limited license to reproduce your submitted artwork solely for the purpose of fulfilling your order. We are not responsible for copyright or trademark infringement resulting from customer-supplied artwork.</p>
                </div>

                <div>
                    <h2 class="text-lg font-bold mb-2" style="color: var(--brand-primary);">7. Limitation of Liability</h2>
                    <p>Our total liability to you for any claim arising from or related to your order shall not exceed the amount paid for that order. We are not liable for indirect, incidental, or consequential damages of any kind.</p>
                </div>

                <div>
                    <h2 class="text-lg font-bold mb-2" style="color: var(--brand-primary);">8. Governing Law</h2>
                    <p>These Terms are governed by the laws of the State of Illinois. Any disputes shall be resolved in the courts located in Will County, Illinois.</p>
                </div>

                <div>
                    <h2 class="text-lg font-bold mb-2" style="color: var(--brand-primary);">9. Changes to These Terms</h2>
                    <p>We reserve the right to update these Terms at any time. Continued use of this storefront after changes are posted constitutes your acceptance of the revised Terms.</p>
                </div>

                <div>
                    <h2 class="text-lg font-bold mb-2" style="color: var(--brand-primary);">10. Contact</h2>
                    <p>Questions about these Terms can be directed to us at <a href="mailto:{{ $email }}" style="color: var(--brand-secondary);">{{ $email }}</a>.</p>
                </div>

            </div>
        </div>
    </section>
    @endif
</x-layouts.store>
