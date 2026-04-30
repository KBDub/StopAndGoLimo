@props([
    'vehicleHeading' => 'Visibility That Works for Local Businesses',
    'brandHeading'   => 'Veteran-Owned. Community-First.',
])

<section class="py-10 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid md:grid-cols-2 gap-6 items-start">

            {{-- Left card: vehicle signage / Para 3 --}}
            <div class="bg-white border-t-4 border-sunburst shadow-md p-8 h-full">
                <div class="mb-4">
                    <h3 class="text-olive font-bold text-h3 mb-1">{{ $vehicleHeading }}</h3>
                    <div class="h-0.5 bg-sunburst w-16"></div>
                </div>
                <div
                    class="text-charcoal-light leading-relaxed space-y-4 [&>p]:mb-0"
                    x-data
                    x-init="
                        $el.querySelectorAll('p').forEach(p => {
                            const text = p.innerHTML.trim();
                            const words = text.split(/\s+/);
                            if (words.length >= 4) {
                                p.innerHTML = '<strong>' + words.slice(0, 4).join(' ') + '</strong> ' + words.slice(4).join(' ');
                            }
                        });
                    "
                >
                    {{ $vehicleContent }}
                </div>
            </div>

            {{-- Right card: veteran-owned / community / Para 4 --}}
            <div class="bg-linen border-t-4 border-azure shadow-md p-8 h-full">
                <div class="mb-4">
                    <h3 class="text-olive font-bold text-h3 mb-1">{{ $brandHeading }}</h3>
                    <div class="h-0.5 bg-azure w-16"></div>
                </div>
                <div
                    class="text-charcoal-light leading-relaxed space-y-4 [&>p]:mb-0"
                    x-data
                    x-init="
                        $el.querySelectorAll('p').forEach(p => {
                            const text = p.innerHTML.trim();
                            const words = text.split(/\s+/);
                            if (words.length >= 4) {
                                p.innerHTML = '<strong>' + words.slice(0, 4).join(' ') + '</strong> ' + words.slice(4).join(' ');
                            }
                        });
                    "
                >
                    {{ $brandContent }}
                </div>
            </div>

        </div>
    </div>
</section>
