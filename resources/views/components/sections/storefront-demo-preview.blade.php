<section class="py-10 bg-linen">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-8">
            <div class="inline-block mb-4">
                <h2 class="text-h2 font-bold text-charcoal mb-2">See a Live Demo Storefront</h2>
                <div class="h-1 bg-sunburst"></div>
            </div>
            <p class="text-charcoal-light max-w-3xl mx-auto">School House Rock is one of our real demo stores, a fully branded spirit wear shop built the same way we would build yours. Browse it, explore the layout, and imagine your logo in place of theirs.</p>
        </div>

        <div class="max-w-5xl mx-auto">

            {{-- Browser chrome --}}
            <div class="bg-charcoal rounded-t-lg px-4 py-3 flex items-center gap-3">
                <div class="flex gap-1.5 shrink-0">
                    <div class="w-3 h-3 rounded-full" style="background-color: rgba(255,95,87,0.7)"></div>
                    <div class="w-3 h-3 rounded-full" style="background-color: rgba(255,189,68,0.7)"></div>
                    <div class="w-3 h-3 rounded-full" style="background-color: rgba(40,201,64,0.7)"></div>
                </div>
                <div class="flex-1 rounded px-3 py-1 text-xs font-mono truncate" style="background-color: rgba(255,255,255,0.1); color: rgba(255,255,255,0.55)">
                    top5percent.com/storefront-preview/school-house-rock
                </div>
            </div>

            {{-- Scaled iframe container --}}
            <div class="overflow-hidden border-x border-b border-charcoal/30 shadow-gold-xl" style="height: 520px;">
                <div style="width: 142.86%; transform: scale(0.7); transform-origin: top left;">
                    <iframe
                        src="/storefront-preview/school-house-rock"
                        title="School House Rock demo storefront built by Top 5 Percent in Joliet IL"
                        loading="lazy"
                        style="width: 100%; height: 743px; border: none; display: block; pointer-events: none;"
                    ></iframe>
                </div>
            </div>

            {{-- CTA --}}
            <div class="mt-6 text-center">
                <a
                    href="/storefront-preview/school-house-rock"
                    target="_blank"
                    rel="noopener"
                    class="inline-flex items-center gap-2 px-8 py-3 font-bold text-charcoal transition-opacity hover:opacity-90"
                    style="background-color: var(--color-sunburst)"
                >
                    Open Demo Store
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                    </svg>
                </a>
            </div>

        </div>
    </div>
</section>
