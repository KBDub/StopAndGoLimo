@props(['id' => 'party-bus-niche-occasions'])

{{--
    x-sections.party-bus-niche-occasions
    ─────────────────────────────────────────────────────────────────────────────
    White-background 6-card (3-col desktop) navy-card section covering niche
    party bus occasion types beyond the standard birthday/bachelorette/prom list.

    Designed to complement an existing occasions grid on the same page.
    Contrast: white bg vs. the cloud-light bg of the primary occasions grid.

    H2  — "Even More Reasons to Rent the Bus"
      6 cards: Tailgate Parties, Holiday Celebrations, Milestone Events,
               Festivals & Conventions, Sports Teams, Surprise Parties

    Hyper-local SEO: Soldier Field, United Center, Wrigley, Lollapalooza,
    Taste of Chicago, Rosemont — Chicagoland-specific venue/event callouts.
    ─────────────────────────────────────────────────────────────────────────────
    Props
      id  string  Section anchor. Defaults to 'party-bus-niche-occasions'.
--}}

<section id="{{ $id }}" style="background: var(--white); scroll-margin-top: 80px;">
    <div class="max-w-7xl mx-auto px-6 py-16 lg:py-24">

        <div class="text-center mb-12">
            <h2 style="font-family: var(--font-head); font-size: var(--font-size-h2); color: var(--navy); letter-spacing: var(--letter-spacing-h2); line-height: 1.2; font-weight: 700;" class="mb-4">
                Even More Reasons to <strong>Rent the Bus</strong>
            </h2>
            <p style="font-family: var(--font-body); font-size: 1.2rem; color: var(--slate); line-height: 1.6;" class="max-w-2xl mx-auto">
                Beyond the everyday celebrations, our party buses are a natural fit for these Chicagoland occasions.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach([
                [
                    'title' => 'Tailgate Parties',
                    'desc'  => 'Skip the parking battle at Soldier Field, United Center, Wrigley Field, or Guaranteed Rate. Your group pregames on board, arrives together, and leaves whenever you are ready without splitting up in the lot.',
                ],
                [
                    'title' => 'Holiday Celebrations',
                    'desc'  => 'Halloween party bus routes, New Year\'s Eve countdown rides, Christmas light tours, and Fourth of July outings. Group holiday events are safer and more fun when nobody has to drive.',
                ],
                [
                    'title' => 'Milestone Events',
                    'desc'  => 'Graduations, retirements, promotions, anniversaries — the big moments deserve a ride that feels as special as the occasion. Arrive together, celebrate on the way, and make the transportation part of the memory.',
                ],
                [
                    'title' => 'Festivals and Conventions',
                    'desc'  => 'Lollapalooza, Taste of Chicago, Rosemont convention events, and suburban festival runs. Skip the train scramble and the parking fee. Your group travels together, door to door.',
                ],
                [
                    'title' => 'Sports Team Transport',
                    'desc'  => 'Youth travel teams, adult recreational leagues, and fan groups heading to away games. Everyone on the same bus means everyone arrives on time, energized, and ready to compete or cheer.',
                ],
                [
                    'title' => 'Surprise Parties',
                    'desc'  => 'The ultimate setup: gather guests without giving anything away, then roll up together for the reveal. The bus becomes the first moment of the surprise, and your honoree never sees it coming.',
                ],
            ] as $item)
            <div style="background: var(--navy); padding: 1.75rem;">
                <h3 style="font-family: var(--font-head); font-size: 1.1rem; font-weight: 600; color: var(--champagne); line-height: 1.3;" class="mb-3">
                    {{ $item['title'] }}
                </h3>
                <p style="font-family: var(--font-body); color: var(--cloud); font-size: 1rem; line-height: 1.55;">
                    {{ $item['desc'] }}
                </p>
            </div>
            @endforeach
        </div>

    </div>
</section>
