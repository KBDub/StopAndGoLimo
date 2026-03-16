<section class="py-10 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-12">
            <h5 class="text-azure font-semibold tracking-wide mb-3">
                Frequently Asked Questions
            </h5>
            <div class="inline-block mb-4">
                <h2 class="text-h2 font-bold text-charcoal mb-2">Our Products &amp; Services</h2>
                <div class="h-1 bg-sunburst"></div>
            </div>
            <p class="text-charcoal-light max-w-4xl mx-auto">
                Learn more about what we offer. From custom apparel to vehicle graphics,
                we have you covered.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-6">
            <div class="space-y-4">
                <x-ui.card-faq
                    question="What custom apparel options do you offer?"
                    answer="We offer custom t-shirts, hoodies, hats, polos, and more with a variety of decoration methods including vinyl, rhinestone, glitter, screen printing, and embroidery. Whether you need reunion shirts, corporate wear, spirit wear, or DTF transfers, we can bring your design to life."
                    :open="true"
                />

                <x-ui.card-faq
                    question="How does the Design It Yourself tool work?"
                    answer="Our free online designer lets you create your own custom products in minutes. Use our drag-and-drop interface to add text, upload your own artwork, or browse our design idea catalogs with thousands of templates and clipart. See instant pricing as you design."
                />

                <x-ui.card-faq
                    question="What types of signs do you make?"
                    answer="We produce a wide range of signage including business signs, banners, posters, table runners, sidewalk signs, and yard signs. Whether you need professional storefront signage or event banners, we deliver high-quality results with fast turnaround."
                />

                <x-ui.card-faq
                    question="What decal and sticker options are available?"
                    answer="We create custom stickers, window decals, wall decals, and floor decals for both personal and commercial use. Our decals are made with durable vinyl that withstands weather and wear, perfect for storefronts, vehicles, or interior decoration."
                />
            </div>

            <div class="space-y-4">
                <x-ui.card-faq
                    question="What vehicle graphic services do you provide?"
                    answer="We specialize in automobile graphics, vehicle magnets, and DOT number decals. From simple door lettering to full vehicle wraps, we help your business get noticed on the road. All our vehicle graphics use premium materials designed to last."
                />

                <x-ui.card-faq
                    question="What promotional items can you customize?"
                    answer="We offer a huge selection of promotional items including mugs, pens, tumblers, koozies, lanyards, bags, and more. Perfect for trade shows, corporate events, or everyday brand visibility. All items can be customized with your logo or design."
                />

                <x-ui.card-faq
                    question="Do you have a physical store I can visit?"
                    answer="Yes! We are proudly located in Joliet, IL. Visit our shop to see samples, discuss your project in person, and pick up orders. We also offer online ordering with shipping available for your convenience."
                />

                <x-ui.card-faq
                    question="Can I see examples of your past work?"
                    answer="Absolutely! Visit our Portfolio page to browse examples of custom apparel, signage, vehicle graphics, and more. We are proud of every project and love showcasing the work we have done for our customers and community."
                />
            </div>
        </div>
    </div>
</section>
