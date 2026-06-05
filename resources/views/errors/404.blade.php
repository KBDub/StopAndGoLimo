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

    {{-- ─── 404 Section — Navy dark, premium Twilight Luxe ──────────────── --}}
    <section class="min-h-[75vh] bg-navy flex items-center justify-center px-6 py-20">
        <div class="w-full max-w-lg text-center">

            {{-- Section label --}}
            <p class="font-head text-xs font-semibold tracking-widest text-champagne mb-5">
                404 Error
            </p>

            {{-- Countdown Ring --}}
            <div class="flex justify-center mb-8">
                <div class="relative w-32 h-32">
                    <svg class="w-full h-full -rotate-90" viewBox="0 0 100 100" aria-hidden="true">
                        {{-- Track --}}
                        <circle
                            cx="50" cy="50" r="44"
                            fill="none"
                            stroke="var(--navy-light)"
                            stroke-width="5"
                        />
                        {{-- Animated ring --}}
                        <circle
                            id="countdown-ring"
                            cx="50" cy="50" r="44"
                            fill="none"
                            stroke="var(--champagne)"
                            stroke-width="5"
                            stroke-linecap="round"
                            style="stroke-dasharray: 276.46; stroke-dashoffset: 0;"
                        />
                    </svg>
                    {{-- Countdown number --}}
                    <div class="absolute inset-0 flex items-center justify-center">
                        <span id="countdown-number" class="text-white font-bold text-5xl leading-none font-head">7</span>
                    </div>
                </div>
            </div>

            {{-- Champagne divider --}}
            <div class="h-px w-16 mx-auto mb-7" style="background: var(--champagne);"></div>

            {{-- Heading --}}
            <h1 class="font-head font-bold text-white mb-4" style="font-size: 2.375rem; line-height: 1.2;">
                Page Not Found
            </h1>

            {{-- Body copy --}}
            <p class="font-body text-slate mb-2" style="font-size: 1.0625rem; line-height: 1.7;">
                The page you are looking for does not exist or may have been moved.
            </p>
            <p class="font-body mb-8" style="font-size: 1.0625rem; line-height: 1.7;">
                Redirecting to home in
                <span id="countdown-message" class="font-bold text-champagne">7</span>
                seconds&hellip;
            </p>

            {{-- CTA button --}}
            <x-ui.button-champagne-solid id="go-home" href="/">
                Take me home
            </x-ui.button-champagne-solid>

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

            if (homeEl) {
                homeEl.addEventListener('click', function (e) {
                    e.preventDefault();
                    clearInterval(interval);
                    window.location.href = '/';
                });
            }
        })();
    </script>

</x-layouts.page>
