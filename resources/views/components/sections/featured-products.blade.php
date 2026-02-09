<section class="py-10 bg-linen">
    <div class="max-w-6xl mx-auto px-6">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-4 text-olive">
            Products &amp; Services for Every Need
        </h2>

        <p class="text-charcoal-light leading-relaxed text-center max-w-3xl mx-auto mb-10">
            From custom apparel to business signage, vehicle graphics, and promotional items &mdash; Top 5 Percent is your one stop shop in Joliet for high-quality, locally produced products.
        </p>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div x-data="{ open: false }">
                <x-ui.card-product
                    title="Custom Shirts"
                    image="/images/place-holder.1x1.jpg"
                >
                    <p class="text-sm text-charcoal-light mb-1">
                        <strong class="text-charcoal">Need custom t-shirts in Joliet?</strong> Whether you are ordering screen printed tees for a team, heat pressed shirts for a family reunion, or branded apparel for your business, Top 5 Percent delivers premium quality with fast turnaround.
                    </p>
                    <div x-show="open" x-collapse>
                        <p class="text-sm text-charcoal-light mt-2">
                            We use only premium blanks and the latest printing technology to ensure vibrant, long-lasting prints that won't crack or fade. From single custom shirts to bulk orders of 500+, our expert team handles every detail. Same day service available for select orders. Serving Joliet, Plainfield, Shorewood, and all of Will County. <a href="/custom-apparel/custom-shirts" class="text-azure hover:text-azure-dark font-semibold">Explore our custom shirt options</a>.
                        </p>
                    </div>
                    <button @click="open = !open" class="text-azure hover:text-azure-dark text-sm font-semibold mt-2 cursor-pointer">
                        <span x-text="open ? '... less' : '... more'"></span>
                    </button>
                </x-ui.card-product>
            </div>

            <div x-data="{ open: false }">
                <x-ui.card-product
                    title="Corporate Wear"
                    image="/images/place-holder.1x1.jpg"
                >
                    <p class="text-sm text-charcoal-light mb-1">
                        <strong class="text-charcoal">Looking for professional branded apparel?</strong> Outfit your entire team with custom polos, jackets, dress shirts, and workwear featuring your company logo. Embroidered or printed to match your brand standards.
                    </p>
                    <div x-show="open" x-collapse>
                        <p class="text-sm text-charcoal-light mt-2">
                            Top 5 Percent works with businesses across Will County to create cohesive, professional uniforms and branded apparel. We offer a wide range of styles, colors, and sizes. Whether you need 10 polos or 200 jackets, we provide competitive pricing and consistent quality. Perfect for restaurants, contractors, offices, and retail teams. <a href="/custom-apparel/corporate-wear" class="text-azure hover:text-azure-dark font-semibold">Browse our corporate wear collection</a>.
                        </p>
                    </div>
                    <button @click="open = !open" class="text-azure hover:text-azure-dark text-sm font-semibold mt-2 cursor-pointer">
                        <span x-text="open ? '... less' : '... more'"></span>
                    </button>
                </x-ui.card-product>
            </div>

            <div x-data="{ open: false }">
                <x-ui.card-product
                    title="Business Signs"
                    image="/images/place-holder.1x1.jpg"
                >
                    <p class="text-sm text-charcoal-light mb-1">
                        <strong class="text-charcoal">Want to attract more customers with a new sign?</strong> Our custom business signs are designed to maximize visibility and build brand recognition. From storefront signs to building signs, we create signage that makes an impact.
                    </p>
                    <div x-show="open" x-collapse>
                        <p class="text-sm text-charcoal-light mt-2">
                            At Top 5 Percent, we understand that your sign is often the first impression a customer has of your business. We offer a full range of commercial signage solutions including window graphics, A-frame signs, dimensional letters, and illuminated signs. Locally designed and produced right here in Joliet, IL. <a href="/signs/business-signs" class="text-azure hover:text-azure-dark font-semibold">See our business sign options</a>.
                        </p>
                    </div>
                    <button @click="open = !open" class="text-azure hover:text-azure-dark text-sm font-semibold mt-2 cursor-pointer">
                        <span x-text="open ? '... less' : '... more'"></span>
                    </button>
                </x-ui.card-product>
            </div>

            <div x-data="{ open: false }">
                <x-ui.card-product
                    title="Banners"
                    image="/images/place-holder.1x1.jpg"
                >
                    <p class="text-sm text-charcoal-light mb-1">
                        <strong class="text-charcoal">Need a banner for your next event or promotion?</strong> Durable indoor and outdoor banners with full-color printing on premium vinyl and fabric materials. Perfect for grand openings, trade shows, and seasonal promotions.
                    </p>
                    <div x-show="open" x-collapse>
                        <p class="text-sm text-charcoal-light mt-2">
                            Our banners are printed on heavy-duty 13oz vinyl or premium fabric with vibrant, weather-resistant inks. We offer grommets, pole pockets, and stand options. Whether you need a 3-foot table banner or a 20-foot building banner, Top 5 Percent has you covered. Rush and same day banner service available in the Joliet area. <a href="/signs/banners" class="text-azure hover:text-azure-dark font-semibold">Order custom banners today</a>.
                        </p>
                    </div>
                    <button @click="open = !open" class="text-azure hover:text-azure-dark text-sm font-semibold mt-2 cursor-pointer">
                        <span x-text="open ? '... less' : '... more'"></span>
                    </button>
                </x-ui.card-product>
            </div>

            <div x-data="{ open: false }">
                <x-ui.card-product
                    title="Vehicle Graphics"
                    image="/images/place-holder.1x1.jpg"
                >
                    <p class="text-sm text-charcoal-light mb-1">
                        <strong class="text-charcoal">Ready to turn your vehicle into a mobile billboard?</strong> Custom vehicle wraps, lettering, and graphics that advertise your business everywhere you drive. Professional design and installation in Joliet.
                    </p>
                    <div x-show="open" x-collapse>
                        <p class="text-sm text-charcoal-light mt-2">
                            Why pay for advertising space when your vehicle can do the work for you? Top 5 Percent specializes in partial wraps, full wraps, fleet graphics, and vinyl lettering for cars, trucks, vans, and trailers. Our vehicle graphics are made with premium 3M and Avery vinyl for lasting durability. We serve businesses throughout Joliet, Bolingbrook, Romeoville, and greater Will County. <a href="/vehicle-graphics/automobile-graphics" class="text-azure hover:text-azure-dark font-semibold">Learn about our vehicle graphics</a>.
                        </p>
                    </div>
                    <button @click="open = !open" class="text-azure hover:text-azure-dark text-sm font-semibold mt-2 cursor-pointer">
                        <span x-text="open ? '... less' : '... more'"></span>
                    </button>
                </x-ui.card-product>
            </div>

            <div x-data="{ open: false }">
                <x-ui.card-product
                    title="Custom Stickers"
                    image="/images/place-holder.1x1.jpg"
                >
                    <p class="text-sm text-charcoal-light mb-1">
                        <strong class="text-charcoal">Looking for custom stickers or labels?</strong> High-quality die-cut stickers and labels for branding, packaging, giveaways, and promotions. Available in any shape, size, or finish.
                    </p>
                    <div x-show="open" x-collapse>
                        <p class="text-sm text-charcoal-light mt-2">
                            From laptop stickers and bumper stickers to product labels and packaging seals, Top 5 Percent creates custom stickers that stick around. Choose from glossy, matte, clear, or holographic finishes. We offer individual cut stickers as well as kiss-cut sheets. Great for small businesses, bands, sports teams, and events in the Chicagoland area. <a href="/decals/stickers" class="text-azure hover:text-azure-dark font-semibold">View our custom sticker options</a>.
                        </p>
                    </div>
                    <button @click="open = !open" class="text-azure hover:text-azure-dark text-sm font-semibold mt-2 cursor-pointer">
                        <span x-text="open ? '... less' : '... more'"></span>
                    </button>
                </x-ui.card-product>
            </div>

            <div x-data="{ open: false }">
                <x-ui.card-product
                    title="DTF Transfers"
                    image="/images/place-holder.1x1.jpg"
                >
                    <p class="text-sm text-charcoal-light mb-1">
                        <strong class="text-charcoal">What are DTF transfers and why choose them?</strong> Direct-to-film transfers produce vibrant, photo-quality designs on virtually any fabric. Ideal for small batch orders, complex multi-color artwork, and detailed graphics.
                    </p>
                    <div x-show="open" x-collapse>
                        <p class="text-sm text-charcoal-light mt-2">
                            DTF (Direct to Film) is the latest technology in custom apparel printing. Unlike screen printing, there are no minimum order requirements and no color limitations. Your design is printed onto a special film and heat pressed onto garments for a soft, flexible finish. Top 5 Percent offers gang sheets and custom DTF transfers for DIY crafters and businesses alike. <a href="/custom-apparel/dtf-transfers" class="text-azure hover:text-azure-dark font-semibold">Discover DTF transfer printing</a>.
                        </p>
                    </div>
                    <button @click="open = !open" class="text-azure hover:text-azure-dark text-sm font-semibold mt-2 cursor-pointer">
                        <span x-text="open ? '... less' : '... more'"></span>
                    </button>
                </x-ui.card-product>
            </div>

            <div x-data="{ open: false }">
                <x-ui.card-product
                    title="Yard Signs"
                    image="/images/place-holder.1x1.jpg"
                >
                    <p class="text-sm text-charcoal-light mb-1">
                        <strong class="text-charcoal">Where can I get yard signs near Joliet?</strong> Corrugated yard signs for real estate, political campaigns, events, church functions, and business promotions. Weather-resistant with single or double-sided printing.
                    </p>
                    <div x-show="open" x-collapse>
                        <p class="text-sm text-charcoal-light mt-2">
                            Our corrugated plastic yard signs are built tough to withstand wind, rain, and sun. Available in standard 18x24 and 24x36 sizes or custom dimensions. Includes H-stake or spider stake options. Popular for open house signs, birthday announcements, graduation celebrations, and contractor job site signs. Fast turnaround available at our Joliet location. <a href="/signs/yard-signs" class="text-azure hover:text-azure-dark font-semibold">Get a quote on yard signs</a>.
                        </p>
                    </div>
                    <button @click="open = !open" class="text-azure hover:text-azure-dark text-sm font-semibold mt-2 cursor-pointer">
                        <span x-text="open ? '... less' : '... more'"></span>
                    </button>
                </x-ui.card-product>
            </div>

            <div x-data="{ open: false }">
                <x-ui.card-product
                    title="Promotional Items"
                    image="/images/place-holder.1x1.jpg"
                >
                    <p class="text-sm text-charcoal-light mb-1">
                        <strong class="text-charcoal">Want branded merchandise for your next event?</strong> Custom pens, mugs, tote bags, koozies, lanyards, and hundreds of other promotional products with your logo. Make a lasting impression at trade shows and corporate events.
                    </p>
                    <div x-show="open" x-collapse>
                        <p class="text-sm text-charcoal-light mt-2">
                            Top 5 Percent offers access to thousands of promotional products from trusted suppliers. Whether you need 50 branded pens or 5,000 custom tote bags, we handle the design, production, and delivery. Our team helps you choose the right items to match your budget and marketing goals. Popular with Joliet-area businesses, schools, nonprofits, and event planners. <a href="/promotional-items" class="text-azure hover:text-azure-dark font-semibold">Browse promotional products</a>.
                        </p>
                    </div>
                    <button @click="open = !open" class="text-azure hover:text-azure-dark text-sm font-semibold mt-2 cursor-pointer">
                        <span x-text="open ? '... less' : '... more'"></span>
                    </button>
                </x-ui.card-product>
            </div>
        </div>
    </div>
</section>
