<x-layouts.page title="Page Not Found | Top 5 Percent, LLC" metaDescription="The page you were looking for does not exist. You will be redirected to the Top 5 Percent homepage." currentPage="404">

    @push('structured-data')
@verbatim
    <style>
        @keyframes ring-drain {
            from { stroke-dashoffset: 0; }
            to   { stroke-dashoffset: 276.46; }
        }
        #countdown-ring {
            animation: ring-drain 7s linear forwards;
        }
    </style>
    @endverbatim
@endpush

    <section class="min-h-[70vh] bg-linen flex items-center justify-center px-6 py-16">
        <div class="w-full max-w-lg bg-white shadow-md p-10 text-center">

            {{-- Icon --}}
            <div class="flex justify-center mb-6">
                <div class="w-16 h-16 rounded-full border-4 border-sunburst flex items-center justify-center">
                    <svg class="w-7 h-7 text-sunburst" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v4m0 4h.01M12 3a9 9 0 100 18A9 9 0 0012 3z" />
                    </svg>
                </div>
            </div>

            {{-- Heading --}}
            <h1 class="text-charcoal font-bold text-h2 mb-2">Page Not Found</h1>
            <div class="h-1 w-12 bg-sunburst mx-auto mb-5"></div>
            <p class="text-charcoal-light text-body-sm mb-8 leading-relaxed">
                The page you are looking for does not exist or may have been moved.<br>
                You will be redirected to the homepage automatically.
            </p>

            {{-- Countdown Ring --}}
            <div class="flex flex-col items-center mb-8">
                <div class="relative w-28 h-28">
                    <svg class="w-full h-full -rotate-90" viewBox="0 0 100 100" aria-hidden="true">
                        {{-- Track --}}
                        <circle
                            cx="50" cy="50" r="44"
                            fill="none"
                            stroke="#E8E5D8"
                            stroke-width="6"
                        />
                        {{-- Animated ring --}}
                        <circle
                            id="countdown-ring"
                            cx="50" cy="50" r="44"
                            fill="none"
                            stroke="#FFC20E"
                            stroke-width="6"
                            stroke-linecap="round"
                            style="stroke-dasharray: 276.46; stroke-dashoffset: 0;"
                        />
                    </svg>
                    {{-- Countdown number --}}
                    <div class="absolute inset-0 flex items-center justify-center">
                        <span id="countdown-number" class="text-charcoal font-bold text-4xl leading-none">7</span>
                    </div>
                </div>

                <p class="mt-4 text-charcoal-light text-body-sm">
                    Redirecting to home in <span id="countdown-message" class="font-bold text-sunburst-dark">7</span> seconds&hellip;
                </p>
            </div>

            {{-- CTA --}}
            <a id="go-home" href="/" class="inline-block bg-sunburst hover:bg-sunburst-dark text-charcoal-dark font-bold text-sm uppercase tracking-widest px-8 py-3 transition-colors cursor-pointer">
                Take Me Home Now
            </a>

        </div>
    </section>

    <script>
        (function () {
            var remaining = 7;
            var numEl  = document.getElementById('countdown-number');
            var msgEl  = document.getElementById('countdown-message');
            var homeEl = document.getElementById('go-home');

            var interval = setInterval(function () {
                remaining -= 1;
                numEl.textContent = remaining;
                msgEl.textContent = remaining;
                if (remaining <= 0) {
                    clearInterval(interval);
                    window.location.href = '/';
                }
            }, 1000);

            homeEl.addEventListener('click', function (e) {
                e.preventDefault();
                clearInterval(interval);
                window.location.href = '/';
            });
        })();
    </script>

</x-layouts.page>
