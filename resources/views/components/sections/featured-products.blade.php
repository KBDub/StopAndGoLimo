<section class="py-10 bg-linen">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-4 text-olive">
            Products &amp; Services for Every Need
        </h2>

        <p class="text-charcoal-light leading-relaxed text-center max-w-4xl mx-auto mb-10">
            From custom apparel to business signage, vehicle graphics, and promotional items &mdash; Top 5 Percent is your one stop shop in Joliet for high-quality, locally produced products.
        </p>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div x-data="{ open: false }">
                <x-ui.card-product
                    title="Custom Shirts"
                    image="/images/place-holder.1x1.jpg"
                >
                    <p class="text-sm text-charcoal-light mb-1">
                        <strong class="text-charcoal">Need custom t-shirts in Joliet?</strong> Whether you are ordering <a href="/custom-apparel/custom-shirts" class="text-azure hover:text-azure-dark font-semibold">screen printed and heat pressed custom shirts</a> for a team, a family reunion, or your business, Top 5 Percent delivers premium quality with fast turnaround.
                    </p>
                    <div x-show="open" x-collapse>
                        <p class="text-sm text-charcoal-light mt-2">
                            We use only premium blanks and the latest printing technology to ensure vibrant, long-lasting prints that won't crack or fade. From single custom shirts to bulk orders of 500+, our expert team handles every detail. Same day service available for select orders. Serving Joliet, Plainfield, Shorewood, and all of Will County. <a href="/custom-apparel" class="text-azure hover:text-azure-dark font-semibold">View all custom apparel options</a>. Looking to design your own? Try our <a href="/design-it-yourself/online-designer" class="text-azure hover:text-azure-dark font-semibold">free online designer</a>.
                        </p>
                    </div>
                    <button @click="open = !open" class="group text-azure hover:text-azure-dark text-sm font-semibold transition-colors mt-2 cursor-pointer inline-flex items-center gap-1">
                        <span x-show="!open">more</span>
                        <span x-show="!open" class="inline-block transition-transform group-hover:translate-x-1">&rarr;</span>
                        <span x-show="open" class="inline-block transition-transform group-hover:-translate-x-1">&larr;</span>
                        <span x-show="open">less</span>
                    </button>
                </x-ui.card-product>
            </div>

            <div x-data="{ open: false }">
                <x-ui.card-product
                    title="Corporate Wear"
                    image="/images/place-holder.1x1.jpg"
                >
                    <p class="text-sm text-charcoal-light mb-1">
                        <strong class="text-charcoal">Looking for professional branded apparel?</strong> Outfit your entire team with <a href="/custom-apparel/corporate-wear" class="text-azure hover:text-azure-dark font-semibold">custom polos, jackets, and dress shirts</a> featuring your company logo. Embroidered or printed to match your brand standards.
                    </p>
                    <div x-show="open" x-collapse>
                        <p class="text-sm text-charcoal-light mt-2">
                            Top 5 Percent works with businesses across Will County to create cohesive, professional uniforms and branded apparel. We offer a wide range of styles, colors, and sizes. Whether you need 10 polos or 200 jackets, we provide competitive pricing and consistent quality. Perfect for restaurants, contractors, offices, and retail teams. <a href="/custom-apparel" class="text-azure hover:text-azure-dark font-semibold">Explore all apparel options</a>. Need it fast? Ask about our <a href="/custom-apparel/custom-shirts" class="text-azure hover:text-azure-dark font-semibold">same day shirt service</a>.
                        </p>
                    </div>
                    <button @click="open = !open" class="group text-azure hover:text-azure-dark text-sm font-semibold transition-colors mt-2 cursor-pointer inline-flex items-center gap-1">
                        <span x-show="!open">more</span>
                        <span x-show="!open" class="inline-block transition-transform group-hover:translate-x-1">&rarr;</span>
                        <span x-show="open" class="inline-block transition-transform group-hover:-translate-x-1">&larr;</span>
                        <span x-show="open">less</span>
                    </button>
                </x-ui.card-product>
            </div>

            <div x-data="{ open: false }">
                <x-ui.card-product
                    title="Business Signs"
                    image="/images/place-holder.1x1.jpg"
                >
                    <p class="text-sm text-charcoal-light mb-1">
                        <strong class="text-charcoal">Want to attract more customers with a new sign?</strong> Our <a href="/signs/business-signs" class="text-azure hover:text-azure-dark font-semibold">custom business signs</a> are designed to maximize visibility and build brand recognition. From storefront signs to building signs, we create signage that makes an impact.
                    </p>
                    <div x-show="open" x-collapse>
                        <p class="text-sm text-charcoal-light mt-2">
                            At Top 5 Percent, we understand that your sign is often the first impression a customer has of your business. We offer a full range of commercial signage solutions including window graphics, A-frame signs, dimensional letters, and illuminated signs. Locally designed and produced right here in Joliet, IL. <a href="/signs" class="text-azure hover:text-azure-dark font-semibold">See all sign types</a>. Need a temporary sign? Check out our <a href="/signs/banners" class="text-azure hover:text-azure-dark font-semibold">custom banners</a>.
                        </p>
                    </div>
                    <button @click="open = !open" class="group text-azure hover:text-azure-dark text-sm font-semibold transition-colors mt-2 cursor-pointer inline-flex items-center gap-1">
                        <span x-show="!open">more</span>
                        <span x-show="!open" class="inline-block transition-transform group-hover:translate-x-1">&rarr;</span>
                        <span x-show="open" class="inline-block transition-transform group-hover:-translate-x-1">&larr;</span>
                        <span x-show="open">less</span>
                    </button>
                </x-ui.card-product>
            </div>

            <div x-data="{ open: false }">
                <x-ui.card-product
                    title="Banners"
                    image="/images/place-holder.1x1.jpg"
                >
                    <p class="text-sm text-charcoal-light mb-1">
                        <strong class="text-charcoal">Need a banner for your next event or promotion?</strong> Durable <a href="/signs/banners" class="text-azure hover:text-azure-dark font-semibold">indoor and outdoor banners</a> with full-color printing on premium vinyl and fabric materials. Perfect for grand openings, trade shows, and seasonal promotions.
                    </p>
                    <div x-show="open" x-collapse>
                        <p class="text-sm text-charcoal-light mt-2">
                            Our banners are printed on heavy-duty 13oz vinyl or premium fabric with vibrant, weather-resistant inks. We offer grommets, pole pockets, and stand options. Whether you need a 3-foot table banner or a 20-foot building banner, Top 5 Percent has you covered. Rush and same day banner service available in the Joliet area. <a href="/signs/table-runners" class="text-azure hover:text-azure-dark font-semibold">See our table runners</a>. Want a portable option? Try our <a href="/signs/sidewalk-signs" class="text-azure hover:text-azure-dark font-semibold">sidewalk signs</a>.
                        </p>
                    </div>
                    <button @click="open = !open" class="group text-azure hover:text-azure-dark text-sm font-semibold transition-colors mt-2 cursor-pointer inline-flex items-center gap-1">
                        <span x-show="!open">more</span>
                        <span x-show="!open" class="inline-block transition-transform group-hover:translate-x-1">&rarr;</span>
                        <span x-show="open" class="inline-block transition-transform group-hover:-translate-x-1">&larr;</span>
                        <span x-show="open">less</span>
                    </button>
                </x-ui.card-product>
            </div>

            <div x-data="{ open: false }">
                <x-ui.card-product
                    title="Vehicle Graphics"
                    image="/images/place-holder.1x1.jpg"
                >
                    <p class="text-sm text-charcoal-light mb-1">
                        <strong class="text-charcoal">Ready to turn your vehicle into a mobile billboard?</strong> <a href="/vehicle-graphics/automobile-graphics" class="text-azure hover:text-azure-dark font-semibold">Custom vehicle wraps and lettering</a> that advertise your business everywhere you drive. Professional design and installation in Joliet.
                    </p>
                    <div x-show="open" x-collapse>
                        <p class="text-sm text-charcoal-light mt-2">
                            Why pay for advertising space when your vehicle can do the work for you? Top 5 Percent specializes in partial wraps, full wraps, fleet graphics, and vinyl lettering for cars, trucks, vans, and trailers. Our vehicle graphics are made with premium 3M and Avery vinyl for lasting durability. We serve businesses throughout Joliet, Bolingbrook, Romeoville, and greater Will County. <a href="/vehicle-graphics/vehicle-magnets" class="text-azure hover:text-azure-dark font-semibold">Try removable vehicle magnets</a>. Need DOT compliance? See our <a href="/vehicle-graphics/dot-decals" class="text-azure hover:text-azure-dark font-semibold">DOT decal options</a>.
                        </p>
                    </div>
                    <button @click="open = !open" class="group text-azure hover:text-azure-dark text-sm font-semibold transition-colors mt-2 cursor-pointer inline-flex items-center gap-1">
                        <span x-show="!open">more</span>
                        <span x-show="!open" class="inline-block transition-transform group-hover:translate-x-1">&rarr;</span>
                        <span x-show="open" class="inline-block transition-transform group-hover:-translate-x-1">&larr;</span>
                        <span x-show="open">less</span>
                    </button>
                </x-ui.card-product>
            </div>

            <div x-data="{ open: false }">
                <x-ui.card-product
                    title="Custom Stickers"
                    image="/images/place-holder.1x1.jpg"
                >
                    <p class="text-sm text-charcoal-light mb-1">
                        <strong class="text-charcoal">Looking for custom stickers or labels?</strong> High-quality <a href="/decals/stickers" class="text-azure hover:text-azure-dark font-semibold">die-cut stickers and labels</a> for branding, packaging, giveaways, and promotions. Available in any shape, size, or finish.
                    </p>
                    <div x-show="open" x-collapse>
                        <p class="text-sm text-charcoal-light mt-2">
                            From laptop stickers and bumper stickers to product labels and packaging seals, Top 5 Percent creates custom stickers that stick around. Choose from glossy, matte, clear, or holographic finishes. We offer individual cut stickers as well as kiss-cut sheets. Great for small businesses, bands, sports teams, and events in the Chicagoland area. <a href="/decals/window-wall-floor-decals" class="text-azure hover:text-azure-dark font-semibold">Explore window and wall decals</a>. See all options on our <a href="/decals" class="text-azure hover:text-azure-dark font-semibold">decals page</a>.
                        </p>
                    </div>
                    <button @click="open = !open" class="group text-azure hover:text-azure-dark text-sm font-semibold transition-colors mt-2 cursor-pointer inline-flex items-center gap-1">
                        <span x-show="!open">more</span>
                        <span x-show="!open" class="inline-block transition-transform group-hover:translate-x-1">&rarr;</span>
                        <span x-show="open" class="inline-block transition-transform group-hover:-translate-x-1">&larr;</span>
                        <span x-show="open">less</span>
                    </button>
                </x-ui.card-product>
            </div>

            <div x-data="{ open: false }">
                <x-ui.card-product
                    title="DTF Transfers"
                    image="/images/place-holder.1x1.jpg"
                >
                    <p class="text-sm text-charcoal-light mb-1">
                        <strong class="text-charcoal">What are DTF transfers and why choose them?</strong> <a href="/custom-apparel/dtf-transfers" class="text-azure hover:text-azure-dark font-semibold">Direct-to-film transfers</a> produce vibrant, photo-quality designs on virtually any fabric. Ideal for small batch orders, complex multi-color artwork, and detailed graphics.
                    </p>
                    <div x-show="open" x-collapse>
                        <p class="text-sm text-charcoal-light mt-2">
                            DTF (Direct to Film) is the latest technology in custom apparel printing. Unlike screen printing, there are no minimum order requirements and no color limitations. Your design is printed onto a special film and heat pressed onto garments for a soft, flexible finish. Top 5 Percent offers gang sheets and custom DTF transfers for DIY crafters and businesses alike. <a href="/design-it-yourself" class="text-azure hover:text-azure-dark font-semibold">Design your own transfer</a>. Browse ideas in our <a href="/design-it-yourself/design-catalogs" class="text-azure hover:text-azure-dark font-semibold">design catalogs</a>.
                        </p>
                    </div>
                    <button @click="open = !open" class="group text-azure hover:text-azure-dark text-sm font-semibold transition-colors mt-2 cursor-pointer inline-flex items-center gap-1">
                        <span x-show="!open">more</span>
                        <span x-show="!open" class="inline-block transition-transform group-hover:translate-x-1">&rarr;</span>
                        <span x-show="open" class="inline-block transition-transform group-hover:-translate-x-1">&larr;</span>
                        <span x-show="open">less</span>
                    </button>
                </x-ui.card-product>
            </div>

            <div x-data="{ open: false }">
                <x-ui.card-product
                    title="Yard Signs"
                    image="/images/place-holder.1x1.jpg"
                >
                    <p class="text-sm text-charcoal-light mb-1">
                        <strong class="text-charcoal">Where can I get yard signs near Joliet?</strong> Corrugated <a href="/signs/yard-signs" class="text-azure hover:text-azure-dark font-semibold">yard signs for real estate, campaigns, and events</a>. Weather-resistant with single or double-sided printing for business promotions and celebrations.
                    </p>
                    <div x-show="open" x-collapse>
                        <p class="text-sm text-charcoal-light mt-2">
                            Our corrugated plastic yard signs are built tough to withstand wind, rain, and sun. Available in standard 18x24 and 24x36 sizes or custom dimensions. Includes H-stake or spider stake options. Popular for open house signs, birthday announcements, graduation celebrations, and contractor job site signs. Fast turnaround available at our Joliet location. <a href="/signs/posters" class="text-azure hover:text-azure-dark font-semibold">Need a poster instead?</a> See all options on our <a href="/signs" class="text-azure hover:text-azure-dark font-semibold">signs page</a>.
                        </p>
                    </div>
                    <button @click="open = !open" class="group text-azure hover:text-azure-dark text-sm font-semibold transition-colors mt-2 cursor-pointer inline-flex items-center gap-1">
                        <span x-show="!open">more</span>
                        <span x-show="!open" class="inline-block transition-transform group-hover:translate-x-1">&rarr;</span>
                        <span x-show="open" class="inline-block transition-transform group-hover:-translate-x-1">&larr;</span>
                        <span x-show="open">less</span>
                    </button>
                </x-ui.card-product>
            </div>

            <div x-data="{ open: false }">
                <x-ui.card-product
                    title="Promotional Items"
                    image="/images/place-holder.1x1.jpg"
                >
                    <p class="text-sm text-charcoal-light mb-1">
                        <strong class="text-charcoal">Want branded merchandise for your next event?</strong> Custom pens, mugs, tote bags, koozies, and hundreds of other <a href="/promotional-items" class="text-azure hover:text-azure-dark font-semibold">promotional products</a> with your logo. Make a lasting impression at trade shows and corporate events.
                    </p>
                    <div x-show="open" x-collapse>
                        <p class="text-sm text-charcoal-light mt-2">
                            Top 5 Percent offers access to thousands of promotional products from trusted suppliers. Whether you need 50 branded pens or 5,000 custom tote bags, we handle the design, production, and delivery. Our team helps you choose the right items to match your budget and marketing goals. Popular with Joliet-area businesses, schools, nonprofits, and event planners. <a href="/contact" class="text-azure hover:text-azure-dark font-semibold">Request a free quote</a>. Visit us at our <a href="/stores" class="text-azure hover:text-azure-dark font-semibold">Joliet store</a>.
                        </p>
                    </div>
                    <button @click="open = !open" class="group text-azure hover:text-azure-dark text-sm font-semibold transition-colors mt-2 cursor-pointer inline-flex items-center gap-1">
                        <span x-show="!open">more</span>
                        <span x-show="!open" class="inline-block transition-transform group-hover:translate-x-1">&rarr;</span>
                        <span x-show="open" class="inline-block transition-transform group-hover:-translate-x-1">&larr;</span>
                        <span x-show="open">less</span>
                    </button>
                </x-ui.card-product>
            </div>
        </div>
    </div>
</section>
