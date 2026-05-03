@push('structured-data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "What should I know before ordering custom t-shirts?",
            "acceptedAnswer": { "@type": "Answer", "text": "Before ordering, create a checklist covering quantity, printing technique, apparel type, turnaround time, sizes, and delivery policy. Being specific about these factors helps you find a printing company that can meet all your needs." }
        },
        {
            "@type": "Question",
            "name": "How many custom t-shirts do I need to order?",
            "acceptedAnswer": { "@type": "Answer", "text": "Consider whether shirts are for employees, promotional giveaways, team uniforms, or a family reunion. Top 5 Percent has no minimums, so you can order as few or as many as you need." }
        },
        {
            "@type": "Question",
            "name": "Can you print my logo or graphic on a custom t-shirt?",
            "acceptedAnswer": { "@type": "Answer", "text": "Yes. We specialize in complex logos, photographs, and custom graphics. We recommend asking to see samples to confirm the company can handle your specific design before placing an order." }
        },
        {
            "@type": "Question",
            "name": "What is the turnaround time for custom t-shirts in Joliet?",
            "acceptedAnswer": { "@type": "Answer", "text": "Turnaround varies by printing technique and quantity. Many products at Top 5 Percent are available with same-day service. Always confirm lead times when placing your order." }
        },
        {
            "@type": "Question",
            "name": "How much do custom t-shirts cost?",
            "acceptedAnswer": { "@type": "Answer", "text": "Pricing depends on quantity, technique, and design complexity. Top 5 Percent balances reasonable pricing with professional quality. Contact us for a free no-obligation quote." }
        },
        {
            "@type": "Question",
            "name": "How do I evaluate a custom t-shirt company?",
            "acceptedAnswer": { "@type": "Answer", "text": "Read at least 10 reviews and ask to see samples of their work. Top 5 Percent has hundreds of five-star reviews and a portfolio of custom shirts, signs, and vehicle graphics available for review before ordering." }
        }
    ]
}
</script>
@endpush
<section class="py-10 bg-white">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Header: centered label + H2 + gold bar, then image alongside paragraph --}}
        <div class="mb-12">
            <div class="text-center mb-8">
                <p class="text-olive font-semibold mb-2">Buyer's guide</p>
                <div class="inline-block">
                    <h2 class="text-charcoal mb-2">7 Tips for Choosing a Custom T-Shirt Maker</h2>
                    <div class="h-1 bg-sunburst"></div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row gap-8 items-center max-w-4xl mx-auto">
                <img
                    src="/images/top5pct-t-shirt-maker-7-tips.jpg"
                    alt="Custom t-shirt printing at Top 5 Percent, Joliet IL"
                    class="w-[280px] h-[373px] object-cover shadow-lg flex-shrink-0"
                >
                <p class="text-charcoal-light leading-relaxed">Custom t-shirt printing has become more popular over the years. Individuals and businesses enjoy having the freedom to express themselves using their choice of graphics, words, and photography. There are a lot of different custom t-shirt makers to choose from, so finding the best company can be a challenge. Use these seven useful tips to help you choose the best custom t-shirt maker for your needs.</p>
            </div>
        </div>

        {{-- FAQ 2-column grid --}}
        <div class="grid md:grid-cols-2 gap-6 items-start">

            {{-- Left column: tips 1-3 --}}
            <div class="space-y-3">
                <x-ui.card-faq question="1. Know What You Want" :open="true">
                    <p class="text-charcoal-light mb-3">Before you can find the perfect custom t-shirt maker, you need to know what you want. Create a checklist to help you decide what you need. Be as specific as possible so you can determine what requirements you need from the printing company. The list should include different factors, including:</p>
                    <ul class="grid grid-cols-2 list-disc list-inside text-charcoal-light gap-x-6 gap-y-1 mb-3">
                        <li>Quantity</li>
                        <li>Printing techniques</li>
                        <li>Apparel type</li>
                        <li>Turnaround time</li>
                        <li>Sizes</li>
                        <li>Delivery policy</li>
                    </ul>
                    <p class="text-charcoal-light">There are a variety of other factors you can consider when choosing a custom printing company, but the factors mentioned above will help point you in the right direction.</p>
                </x-ui.card-faq>

                <x-ui.card-faq question="2. How Many T-Shirts Do You Need">
                    <p class="text-charcoal-light">Considering the number of t-shirts you need seems like an easy task, but considering the number of shirts you need involves more than you may realize. Are these custom shirts only for your employees to wear while at work or during company events? Are you purchasing these shirts to include them in a promotional giveaway or other special bonus? Are you hosting a family reunion? Keep in mind most printing companies offer custom print jobs in bulk quantities. Make sure the company you choose offers a variety of printing options. The more printing options that are available, the more likely the company can meet your needs.</p>
                </x-ui.card-faq>

                <x-ui.card-faq question="3. Designs and Graphics">
                    <p class="text-charcoal-light">Graphics and designs are essential when it comes to custom t-shirts. It is no secret that printing certain logos, photographs, and designs can be difficult, so you need to make sure the printing company you choose is capable of completing the job. Ask to view samples of their work to determine if the company is a good fit.</p>
                </x-ui.card-faq>
            </div>

            {{-- Right column: tips 4-7 --}}
            <div class="space-y-3">
                <x-ui.card-faq question="4. Turnaround Time">
                    <p class="text-charcoal-light">Time is a crucial factor when printing custom t-shirts. Do not wait until the last minute to find a shirt printing company. Many custom shirt printing companies require a minimum number of days to complete your order, so a 24 to 72-hour turnaround time may be unrealistic. Always check the company's lead times.</p>
                </x-ui.card-faq>

                <x-ui.card-faq question="5. Pricing">
                    <p class="text-charcoal-light">You need to speak about pricing upfront, including refunds and similar terms. "You get what you pay for" is a phrase that is true in this situation. The least expensive rate is not always going to be the best option. In retrospect, the most expensive option does not mean the products and services are professional. Find a custom printing company that has a balance of reasonable pricing and quality.</p>
                </x-ui.card-faq>

                <x-ui.card-faq question="6. Customer Service">
                    <p class="text-charcoal-light">Customer service is a part of your overall experience with a company. A remarkable custom printing company will be helpful, whether online, over the phone, or through a support form. The company should be willing to help you through every aspect of the buying process.</p>
                </x-ui.card-faq>

                <x-ui.card-faq question="7. Rates and Reviews">
                    <p class="text-charcoal-light mb-3">Rates and reviews are essential when you are looking for a custom t-shirt company. Reading the rates and reviews gives you insight into the company and how they conduct business. Read at least 10 reviews for the company, whether they are positive or negative. Positive and negative reviews help you determine which custom printing company will best suit your needs.</p>
                    <p class="text-charcoal-light">Here at Top 5 Percent, we specialize in custom signs and apparel. We are here to bring your designs to life through <a href="/signs">signs</a>, <a href="/decals">decals</a>, <a href="/custom-apparel">custom apparel</a>, and <a href="/vehicle-graphics">vehicle graphics</a>. <a href="/contact">Contact us</a> now to inquire about our custom designs and other products. We look forward to helping you!</p>
                </x-ui.card-faq>
            </div>

        </div>
    </div>
</section>
