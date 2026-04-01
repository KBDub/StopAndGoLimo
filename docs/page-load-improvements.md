# Page Load Performance Analysis

## Affected Pages

The following pages render a Lunar/Livewire product grid component that fires a Meilisearch
search query via a Livewire AJAX round-trip after the initial page load:

- **Home page** (`/`)
- **Top 5% Merchandise** (`/top-5-merchandise`)

All other pages (service category pages, article pages, design-services sub-pages, etc.) load
in sub-millisecond time under Octane and are not affected by this issue.

---

## What Causes the 7–8 Second Wait

The delay is not in the initial HTML response — Octane serves that in under 1ms. The wait
is entirely in a **Livewire AJAX round-trip** that the browser fires after the HTML arrives.

The sequence on every page load:

1. Browser requests the page → Octane responds with HTML in ~0.15ms.
2. Browser parses HTML and executes Livewire's JS (`livewire.js`).
3. Livewire fires a POST request to `/livewire/update` to hydrate the component.
4. The server processes the Livewire request, which involves:
   - **Meilisearch query** — searches the product index. Takes 1–2s when the index is warm,
     but can take 8–13s if Meilisearch is still loading its index from disk after a cold start
     or hibernation wake (see below).
   - **Lunar product/variant DB queries** — loads the matching products from PostgreSQL.
     Multiple queries are issued for products, variants, prices, and media. On the Reserved VM,
     these are local DB calls but Lunar's query pattern is not optimized for the component's
     use case.
   - **Livewire component re-render** — Blade renders the product grid HTML and Livewire
     computes the diff to send back to the browser.
5. Browser receives the response and renders the product grid.

Everything in step 4 happens serially. The 7–8 second total is dominated by a slow Meilisearch
query, which in turn is caused by the issue described in the next section.

---

## Why DEV Is Fast But PROD Is Slow

This is the critical question. DEV and PROD run on separate machines with different runtime
states. There are three compounding reasons PROD is slow.

### Reason 1: Meilisearch Index State (Primary Cause)

In **DEV**, the developer has Meilisearch running continuously in the Meilisearch workflow.
The index has been resident in memory for hours. A search query completes in 1–2 seconds.

In **PROD**, every deployment or hibernation wake forces Meilisearch to reload its entire
index from disk. Per the cold start analysis (`docs/startup-improvements.md`):

> *"With a growing product catalog (31+ service products, 93+ variants, 11 merchandise
> products, 79 variants), this disk-read phase takes roughly 10–13 seconds on Replit's
> storage layer."*

The startup script waits for Meilisearch's `/health` HTTP endpoint before starting Octane.
**However, `/health` returns 200 as soon as Meilisearch's HTTP server is listening — not
when the index is fully loaded and query-ready.** Meilisearch opens its port within 1–2
seconds of starting, but internally continues loading the index for another 8–12 seconds.

Any Livewire request that hits Meilisearch during that 8–12 second window will queue inside
Meilisearch and take the full index-load time to respond. This is what causes the first
7–8 second response after a fresh deployment or hibernation wake. After the index is fully
loaded (typically ~15 seconds after startup), subsequent queries drop to 1–2 seconds.

### Reason 2: Octane Worker Cold State

In **DEV** with `php artisan serve`, the PHP process is single-threaded and long-lived. The
Lunar service providers, DB connection, and Livewire state are initialized once and stay in
memory. By the time the developer loads the homepage, these have already been warmed by
previous requests during the session.

In **PROD** with Octane + FrankenPHP, multiple worker processes are spawned. Each worker
independently bootstraps Laravel on its first request (service providers, DB connection pool,
Livewire registry). A worker that has never served a request yet pays this bootstrap cost
on its first Livewire POST — adding 0.5–2 seconds on top of the Meilisearch wait.

After the first request per worker, this cost disappears entirely. This is mitigated by the
warm-up curl requests in `scripts/startup.sh` (Solutions F), but those only warm the HTML
GET responses, not the Livewire POST path.

### Reason 3: PHP Version Difference

DEV uses **PHP 8.4** (Nix system PHP). PROD uses **PHP 8.5** (bundled inside FrankenPHP).
These are different runtimes with different JIT behavior and extension implementations. Some
Lunar and Livewire operations may behave at slightly different speeds. This is a minor
contributor, not the primary cause.

### Summary Table

| Factor | DEV | PROD | Impact |
|--------|-----|------|--------|
| Meilisearch index state | Warm (hours old) | Cold after deploy/wake | **HIGH** — 8–12s added |
| Octane worker state | Long-lived single process | Fresh workers per deploy | **MEDIUM** — 1–2s added |
| PHP version | 8.4 (Nix) | 8.5 (FrankenPHP) | **LOW** — marginal |

---

## Steady-State Performance (After Warm-Up)

Once Meilisearch's index is fully loaded (~15s post-startup) and Octane workers have served
at least one request each, the Livewire pages settle to approximately:

- Meilisearch query: 1–2s
- Lunar DB queries: 0.3–0.8s
- Livewire render + network: 0.2–0.5s
- **Total: 2–4 seconds per Livewire round-trip**

This is still slow enough to be noticeable, but it is a fundamentally different problem from
the 7–8 second post-deploy spike.

---

## Improvement Strategies (Not Yet Implemented)

### Strategy 1 — Meilisearch Index Pre-Warm on Startup

**Problem:** `/health` passes before the index is query-ready.

**Fix:** Replace the health gate in `scripts/startup.sh` with a loop that issues an actual
search query against a known index (e.g., `curl .../indexes/products/search -d '{"q":""}'`)
and waits for a successful response before starting Octane. This ensures Meilisearch is
truly ready before real user traffic arrives.

Alternatively, issue a "throw-away" Meilisearch search during the warm-up curl phase (the
three requests fired after Octane starts) so the index-load cost is paid by the startup
script, not by the first real user.

### Strategy 2 — Livewire Worker Warm-Up

**Problem:** The warm-up curl requests in startup.sh hit the HTML GET path but not the
Livewire POST path. Workers handling the first Livewire update from a real user still pay
the full bootstrap cost.

**Fix:** Add a warm-up Livewire POST to the startup warm-up sequence. This requires either
a test Livewire endpoint or constructing a valid `livewire/update` payload for the product
grid component. Complex but effective.

### Strategy 3 — Cache the Lunar Product Query

**Problem:** The Livewire component re-runs the full Lunar product/variant query on every
render, including the initial mount.

**Fix:** Wrap the Meilisearch search result and subsequent Lunar DB lookups in
`Cache::remember()` with a short TTL (60–300 seconds). The first request builds the cache;
all subsequent requests within the TTL window skip both Meilisearch and the DB entirely.
This would reduce the steady-state 2–4 second wait to under 100ms for cached responses.

### Strategy 4 — Skeleton Loader / Deferred Rendering

**Problem:** The user sees nothing until the full 7–8 second Livewire round-trip completes.

**Fix:** Render the page immediately with a skeleton/placeholder where the product grid
will appear. Livewire's `wire:init` (or `lazy` attribute on the component) can defer the
heavy query until after the page is visually interactive. The user sees a loading spinner
for 2–4 seconds instead of a blank/frozen page for 7–8 seconds. This does not reduce
server load but dramatically improves perceived performance.

### Strategy 5 — Server-Side Initial Render

**Problem:** The product grid requires a Livewire AJAX round-trip to populate.

**Fix:** Pass the initial product set to the Blade view as a server-rendered variable
(from the controller), bypassing Livewire for the first render. Livewire only takes over
for subsequent interactions (filtering, pagination). This eliminates the extra round-trip
entirely for the most common case (initial page load with no active filters).
