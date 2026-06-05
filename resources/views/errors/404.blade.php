<x-layouts.page title="Page Not Found" metaDescription="The page you were looking for does not exist. You will be redirected to the Stop & Go Limo homepage." currentPage="404">

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

    <section class="min-h-[70vh] bg-cloud flex items-center justify-center px-6 py-16">
        <div class="w-full max-w-lg bg-white shadow-md p-10 text-center">

            {{-- Accent bar --}}
            <div class="h-1 w-12 bg-champagne mx-auto mb-6"></div>

            {{-- Heading --}}
            <h1 class="text-navy font-bold text-h2 mb-2 font-head">Page Not Found</h1>
            <p class="text-slate text-body-sm mb-8 leading-relaxed">
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
                            stroke="var(--cloud-dark)"
                            stroke-width="6"
                        />
                        {{-- Animated ring --}}
                        <circle
                            id="countdown-ring"
                            cx="50" cy="50" r="44"
                            fill="none"
                            stroke="var(--champagne)"
                            stroke-width="6"
                            stroke-linecap="round"
                            style="stroke-dasharray: 276.46; stroke-dashoffset: 0;"
                        />
                    </svg>
                    {{-- Countdown number --}}
                    <div class="absolute inset-0 flex items-center justify-center">
                        <span id="countdown-number" class="text-navy font-bold text-4xl leading-none font-head">7</span>
                    </div>
                </div>

                <p class="mt-4 text-slate text-body-sm">
                    Redirecting to home in <span id="countdown-message" class="font-bold text-champagne-dark">7</span> seconds&hellip;
                </p>
            </div>

            {{-- CTA --}}
            <a id="go-home" href="/" class="inline-block bg-champagne hover:bg-champagne-dark text-navy font-bold text-sm tracking-widest px-8 py-3 transition-colors cursor-pointer font-head">
                Take me home
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
