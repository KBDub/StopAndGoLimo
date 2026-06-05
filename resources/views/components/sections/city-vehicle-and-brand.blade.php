@props([
    'vehicleHeading' => 'First-Class Transportation for Every Occasion',
    'brandHeading'   => 'Trusted. Professional. On Time.',
])

<section class="py-10 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid md:grid-cols-2 gap-6 items-start">

            {{-- Left card: vehicle / service offerings --}}
            <div class="bg-white border-t-4 border-champagne shadow-md p-8 h-full">
                <div class="mb-4">
                    <h3 class="text-champagne font-bold text-h3 mb-1 font-head">{{ $vehicleHeading }}</h3>
                    <div class="h-0.5 bg-champagne w-16"></div>
                </div>
                <div
                    class="text-slate leading-relaxed space-y-4 [&>p]:mb-0"
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

            {{-- Right card: brand story / trust signals --}}
            <div class="bg-cloud border-t-4 border-navy shadow-md p-8 h-full">
                <div class="mb-4">
                    <h3 class="text-navy font-bold text-h3 mb-1 font-head">{{ $brandHeading }}</h3>
                    <div class="h-0.5 bg-navy w-16"></div>
                </div>
                <div
                    class="text-slate leading-relaxed space-y-4 [&>p]:mb-0"
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
