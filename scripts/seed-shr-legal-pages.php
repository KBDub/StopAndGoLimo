<?php
// Seed school-house-rock (store_id=1) with contact_email and custom_html for legal pages
// Run via: php artisan tinker --execute="require base_path('scripts/seed-shr-legal-pages.php');"

use App\Models\Store;
use App\Models\StorePage;

$store = Store::where('subdomain', 'school-house-rock')->firstOrFail();
$email = 'info@dreamstudiosolutions.com';
$date  = date('F j, Y');

// Set contact email
$store->update(['contact_email' => $email]);
echo "Set contact_email on store {$store->id} ({$store->name})\n";

// ─── Terms ────────────────────────────────────────────────────────────────────
$termsHtml = <<<HTML
<section class="py-12 min-h-screen" style="background: var(--brand-bg, #f9f9f9);">
    <div class="max-w-3xl mx-auto px-6">
        <div class="mb-10">
            <h1 class="text-3xl font-bold mb-2" style="color: var(--brand-primary);">Terms &amp; Conditions</h1>
            <p class="text-sm" style="color: var(--brand-primary); opacity: .6;">Last updated: {$date}</p>
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
                <p>Questions about these Terms can be directed to us at <a href="mailto:{$email}" style="color: var(--brand-secondary);">{$email}</a>.</p>
            </div>
        </div>
    </div>
</section>
HTML;

// ─── Privacy ─────────────────────────────────────────────────────────────────
$privacyHtml = <<<HTML
<section class="py-12 min-h-screen" style="background: var(--brand-bg, #f9f9f9);">
    <div class="max-w-3xl mx-auto px-6">
        <div class="mb-10">
            <h1 class="text-3xl font-bold mb-2" style="color: var(--brand-primary);">Privacy Policy</h1>
            <p class="text-sm" style="color: var(--brand-primary); opacity: .6;">Last updated: {$date}</p>
        </div>
        <div class="prose prose-sm max-w-none space-y-8 text-gray-700">
            <div>
                <h2 class="text-lg font-bold mb-2" style="color: var(--brand-primary);">1. Information We Collect</h2>
                <p>When you place an order we collect the personal information you provide, including your name, shipping and billing address, email address, phone number, and payment details. Payment card data is processed securely by our payment processor and is never stored on our servers.</p>
            </div>
            <div>
                <h2 class="text-lg font-bold mb-2" style="color: var(--brand-primary);">2. How We Use Your Information</h2>
                <p>We use your information exclusively to:</p>
                <ul class="list-disc pl-6 space-y-1 mt-2">
                    <li>Process and fulfill your orders</li>
                    <li>Communicate with you about your order status</li>
                    <li>Send transactional emails (order confirmation, shipping notifications)</li>
                    <li>Comply with applicable legal obligations</li>
                </ul>
            </div>
            <div>
                <h2 class="text-lg font-bold mb-2" style="color: var(--brand-primary);">3. Sharing of Information</h2>
                <p>We do not sell, rent, or share your personal information with third parties for marketing purposes. We may share information with trusted service providers (payment processors, shipping carriers) solely as needed to fulfill your order, under strict confidentiality obligations.</p>
            </div>
            <div>
                <h2 class="text-lg font-bold mb-2" style="color: var(--brand-primary);">4. Cookies &amp; Tracking</h2>
                <p>This site uses cookies to maintain your shopping session and improve your experience. We do not use third-party advertising cookies. You may disable cookies in your browser settings, but some functionality (such as the shopping cart) may not work correctly.</p>
            </div>
            <div>
                <h2 class="text-lg font-bold mb-2" style="color: var(--brand-primary);">5. Data Retention</h2>
                <p>We retain order records for a minimum of seven years as required by applicable tax and business laws. You may request deletion of your personal data at any time, subject to our legal retention obligations.</p>
            </div>
            <div>
                <h2 class="text-lg font-bold mb-2" style="color: var(--brand-primary);">6. Security</h2>
                <p>We use industry-standard SSL/TLS encryption for all data transmitted through this site. While we take reasonable precautions, no internet transmission is 100% secure and we cannot guarantee absolute security.</p>
            </div>
            <div>
                <h2 class="text-lg font-bold mb-2" style="color: var(--brand-primary);">7. Your Rights</h2>
                <p>You have the right to access, correct, or request deletion of your personal information. To exercise these rights, email us at <a href="mailto:{$email}" style="color: var(--brand-secondary);">{$email}</a> with "Privacy Request" in the subject line.</p>
            </div>
            <div>
                <h2 class="text-lg font-bold mb-2" style="color: var(--brand-primary);">8. Children's Privacy</h2>
                <p>This storefront is not directed to children under the age of 13. We do not knowingly collect personal information from children.</p>
            </div>
            <div>
                <h2 class="text-lg font-bold mb-2" style="color: var(--brand-primary);">9. Changes to This Policy</h2>
                <p>We may update this Privacy Policy from time to time. The revised policy will be posted on this page with an updated date.</p>
            </div>
            <div>
                <h2 class="text-lg font-bold mb-2" style="color: var(--brand-primary);">10. Contact</h2>
                <p>Privacy questions can be directed to <a href="mailto:{$email}" style="color: var(--brand-secondary);">{$email}</a>.</p>
            </div>
        </div>
    </div>
</section>
HTML;

// ─── Refund Policy ────────────────────────────────────────────────────────────
$refundHtml = <<<HTML
<section class="py-12 min-h-screen" style="background: var(--brand-bg, #f9f9f9);">
    <div class="max-w-3xl mx-auto px-6">
        <div class="mb-10">
            <h1 class="text-3xl font-bold mb-2" style="color: var(--brand-primary);">Refund Policy</h1>
            <p class="text-sm" style="color: var(--brand-primary); opacity: .6;">Last updated: {$date}</p>
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
                <p class="mt-3">Once you click &ldquo;Place Order,&rdquo; production begins and no changes can be made.</p>
            </div>
            <div>
                <h2 class="text-lg font-bold mb-2" style="color: var(--brand-primary);">Exceptions — Our Error</h2>
                <p>We stand behind the quality of our work. If we made a production error (printed the wrong design, shipped the wrong item, or delivered a product with a manufacturing defect), we will reprint or replace your order at no charge. To initiate a claim:</p>
                <ol class="list-decimal pl-6 space-y-1 mt-2">
                    <li>Email <a href="mailto:{$email}" style="color: var(--brand-secondary);">{$email}</a> within <strong>5 business days</strong> of delivery</li>
                    <li>Include your order number and clear photos of the issue</li>
                    <li>Our team will review and respond within 2 business days</li>
                </ol>
                <p class="mt-3">Claims made after 5 business days of confirmed delivery cannot be honored.</p>
            </div>
            <div>
                <h2 class="text-lg font-bold mb-2" style="color: var(--brand-primary);">Cancellations</h2>
                <p>Order cancellations may be requested within <strong>24 hours</strong> of placing the order, provided production has not yet started. Email us immediately at <a href="mailto:{$email}" style="color: var(--brand-secondary);">{$email}</a> with your order number. We cannot guarantee cancellation once production has begun. If a cancellation is approved, a store credit (not a cash refund) may be issued at our discretion.</p>
            </div>
            <div>
                <h2 class="text-lg font-bold mb-2" style="color: var(--brand-primary);">Shipping Issues</h2>
                <p>We are not responsible for packages lost or delayed by the carrier once a tracking number has been issued. If a package is lost in transit, please contact the carrier directly. If a package is returned to us due to an incorrect address provided at checkout, the customer is responsible for reshipping costs.</p>
            </div>
            <div>
                <h2 class="text-lg font-bold mb-2" style="color: var(--brand-primary);">Contact Us</h2>
                <p>Questions about your order or this policy? Email us at <a href="mailto:{$email}" style="color: var(--brand-secondary);">{$email}</a> — we&rsquo;re happy to help.</p>
            </div>
        </div>
    </div>
</section>
HTML;

$updates = [
    'terms'         => $termsHtml,
    'privacy'       => $privacyHtml,
    'refund-policy' => $refundHtml,
];

foreach ($updates as $slug => $html) {
    $page = StorePage::where('store_id', $store->id)->where('slug', $slug)->first();
    if ($page) {
        $page->update(['custom_html' => $html]);
        echo "Updated custom_html for: {$slug}\n";
    } else {
        echo "Page not found for slug: {$slug}\n";
    }
}

echo "Done.\n";
