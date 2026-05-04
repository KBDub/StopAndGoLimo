<x-layouts.store title="Refund Policy" description="Review the refund policy for this store. All sales are final on custom made-to-order products. Contact us within 5 days if we made a production error.">
    @php
        $store  = app('current_store');
        $email  = $store->contact_email ?: config('storefront.default_contact_email');
        $lpage  = $store->pages()->where('slug', 'refund-policy')->first();
    @endphp

    @if($lpage && $lpage->custom_html)
        @php $renderedHtml = str_replace('{{contact_email}}', $email, $lpage->custom_html); @endphp
        {!! $renderedHtml !!}
    @else
    <section class="py-12 min-h-screen" style="background: var(--brand-bg, #f9f9f9);">
        <div class="max-w-3xl mx-auto px-6">

            <div class="mb-10">
                <h1 class="text-3xl font-bold mb-2" style="color: var(--brand-primary);">Refund Policy</h1>
                <p class="text-sm" style="color: var(--brand-primary); opacity: .6;">Last updated: {{ date('F j, Y') }}</p>
            </div>

            <div class="prose prose-sm max-w-none space-y-8 text-gray-700">

                <div class="rounded-lg p-5 border-l-4" style="background: var(--brand-primary); border-color: var(--brand-secondary);">
                    <p class="font-bold text-white text-base">All Sales Are Final — No Refunds or Exchanges</p>
                    <p class="text-white/80 text-sm mt-1">Because every product we sell is custom-made or personalized to your specifications, we cannot accept returns, process exchanges, or issue refunds once your order enters production.</p>
                </div>

                <div>
                    <h2 class="text-lg font-bold mb-2" style="color: var(--brand-primary);">Why We Have a No-Refund Policy</h2>
                    <p>Custom signage and personalized apparel are produced specifically for each customer. The materials, labor, and setup costs are incurred the moment production begins. Unlike mass-produced goods, a personalized item cannot be restocked or resold to another customer. For this reason, all sales are final.</p>
                </div>

                <div>
                    <h2 class="text-lg font-bold mb-2" style="color: var(--brand-primary);">Before You Order — Please Review Carefully</h2>
                    <p>We strongly encourage you to review every detail of your order before submitting:</p>
                    <ul class="list-disc pl-6 space-y-1 mt-2">
                        <li>Verify names, dates, quantities, sizes, and colors</li>
                        <li>Confirm artwork files are the correct version and resolution</li>
                        <li>Double-check your shipping address</li>
                    </ul>
                    <p class="mt-3">Once you click "Place Order," production begins and no changes can be made.</p>
                </div>

                <div>
                    <h2 class="text-lg font-bold mb-2" style="color: var(--brand-primary);">Exceptions — Our Error</h2>
                    <p>We stand behind the quality of our work. If we made a production error (printed the wrong design, shipped the wrong item, or delivered a product with a manufacturing defect), we will reprint or replace your order at no charge. To initiate a claim:</p>
                    <ol class="list-decimal pl-6 space-y-1 mt-2">
                        <li>Email <a href="mailto:{{ $email }}" style="color: var(--brand-secondary);">{{ $email }}</a> within <strong>5 business days</strong> of delivery</li>
                        <li>Include your order number and clear photos of the issue</li>
                        <li>Our team will review and respond within 2 business days</li>
                    </ol>
                    <p class="mt-3">Claims made after 5 business days of confirmed delivery cannot be honored.</p>
                </div>

                <div>
                    <h2 class="text-lg font-bold mb-2" style="color: var(--brand-primary);">Cancellations</h2>
                    <p>Order cancellations may be requested within <strong>24 hours</strong> of placing the order, provided production has not yet started. Email us immediately at <a href="mailto:{{ $email }}" style="color: var(--brand-secondary);">{{ $email }}</a> with your order number. We cannot guarantee cancellation once production has begun. If a cancellation is approved, a store credit (not a cash refund) may be issued at our discretion.</p>
                </div>

                <div>
                    <h2 class="text-lg font-bold mb-2" style="color: var(--brand-primary);">Shipping Issues</h2>
                    <p>We are not responsible for packages lost or delayed by the carrier once a tracking number has been issued. If a package is lost in transit, please contact the carrier directly. If a package is returned to us due to an incorrect address provided at checkout, the customer is responsible for reshipping costs.</p>
                </div>

                <div>
                    <h2 class="text-lg font-bold mb-2" style="color: var(--brand-primary);">Contact Us</h2>
                    <p>Questions about your order or this policy? Email us at <a href="mailto:{{ $email }}" style="color: var(--brand-secondary);">{{ $email }}</a> — we're happy to help.</p>
                </div>

            </div>
        </div>
    </section>
    @endif
</x-layouts.store>
