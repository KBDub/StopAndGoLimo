# Page Load Performance Analysis

## Affected Pages

The following pages render a Lunar/Livewire product grid component that performs a
Meilisearch search and Lunar DB queries as part of the **synchronous server-side render**:

- **Home page** (`/`)
- **Top 5% Merchandise** (`/top-5-merchandise`)

All other pages (service category pages, article pages, design-services sub-pages, etc.) load
in sub-millisecond time under Octane and are not affected by this issue.

---

## Measured Data (Confirmed via Browser DevTools — Network Tab)

| Environment | TTFB | Total Page Load | Livewire POSTs |
|-------------|------|-----------------|----------------|
| DEV (riker.replit.dev) | **196 ms** | 454 ms | None |
| PROD (dreamstudiosolutions.com) | **8.21 s** | 8.31 s | None |

Key observations:
- There are **no Livewire POST requests** in either environment. The product grid is rendered
  **server-side** during the initial page request, not via a Livewire AJAX round-trip.
- The entire 8-second delay is **Time to First Byte (TTFB)** — the server does not send a
  single byte of HTML until PHP has finished rendering the full page, which takes 8.21 seconds
  in production.
- Once the server responds, the HTML itself downloads in ~34ms. The problem is 100%
  server-side PHP rendering time.

---

## Root Cause: Remote PostgreSQL (Neon) × High Lunar Query Volume

### Database Connections

| Environment | Database | Location | Latency per query |
|-------------|----------|----------|-------------------|
| DEV | `postgresql://postgres:password@helium/heliumdb` | Local (same machine) | ~0 ms |
| PROD | `postgresql://neondb_owner:...@ep-cold-paper-aj7h1lxg.c-3.us-east-2.aws.neon.tech/neondb` | Remote — AWS us-east-2 | 30–80 ms |

PROD uses **Neon**, a serverless hosted PostgreSQL in AWS us-east-2. Every database query
issued by PHP must travel over the network to Neon and back, paying SSL handshake overhead
on top of the base round-trip latency.

### Lunar's Query Volume

Lunar Commerce is not an optimized read-path framework. Rendering a product grid triggers
a large number of sequential database queries per page request:

- 1 Meilisearch HTTP search (to get matching product IDs from the search index)
- 1 products query (fetch matching rows)
- Per-product queries for: variants, prices, media/images, taxons, attributes

For 11 merchandise products with 79 variants, the total query count for a single page render
is estimated at **40–80 queries**, many of which are issued in sequence (N+1 pattern).

### The Math

```
40 queries × 50 ms avg Neon latency = 2,000 ms from DB alone
+ Meilisearch search query           =   500–1,500 ms
+ PHP/Blade rendering overhead       =   200–500 ms
─────────────────────────────────────────────────────
Total TTFB (estimated)               = 2,700–4,000 ms (conservative)
                                       up to 8,000+ ms under load or cold Neon
```

In DEV, the same 40–80 queries hit a local PostgreSQL socket at ~0ms latency each, so the
entire render completes in ~196ms.

### Neon Cold Start

Neon's serverless architecture scales to zero after a period of inactivity. If the database
has not been queried recently, the first connection attempt takes an additional **500–1,000ms**
for Neon to wake the compute node. This compounds the above estimate for the first request
after a quiet period.

---

## Why the Earlier Livewire Analysis Was Wrong

The initial version of this document attributed the slowness to a Livewire AJAX round-trip
firing a Meilisearch query after page load. This was incorrect.

Browser DevTools (Network tab) confirmed there are **no POST requests to `/livewire/update`**
on either the home page or the Top 5% Merchandise page. The product grid is rendered
server-side in Blade during the initial GET request. The 8-second delay is entirely in the
PHP render phase before a single byte of HTML is sent.

---

## Improvement Strategies (Not Yet Implemented)

Strategies are listed in order of expected impact.

### Strategy 1 — Cache the Full Page Render (Highest Impact)

**Problem:** PHP re-runs the full Meilisearch query + 40–80 Neon queries on every single
page load, by every user.

**Fix:** Cache the fully-rendered HTML output of the affected pages using Laravel's response
cache (e.g., `spatie/laravel-responsecache` or a custom `Cache::remember()` around the
controller response). The first request after cache expiry pays the full 8-second cost;
every subsequent request within the TTL returns instantly from cache (~1ms).

A TTL of 5–15 minutes is appropriate for a product catalog that changes infrequently.
Cache should be invalidated when products are updated in the admin panel.

### Strategy 2 — Cache the Lunar Product Query Result

**Problem:** The Meilisearch search + Lunar DB lookups run on every request with no caching.

**Fix:** Wrap the product query in `Cache::remember()` with a short TTL (60–300 seconds).
The cache key should include any relevant filters (category, search term, pagination state).
This skips both the Meilisearch call and all Lunar DB queries for cached keys.

```php
$products = Cache::remember('merchandise-grid', 300, function () {
    return Product::search('')->get(); // or however the component queries
});
```

### Strategy 3 — Reduce Lunar's Query Count (Eager Loading)

**Problem:** Lunar's N+1 query pattern causes 40–80 sequential queries per render. Each
one pays the Neon round-trip tax.

**Fix:** Identify the Livewire component or controller responsible for the product grid
and add eager loading for the relations Lunar queries individually:

```php
Product::with(['variants', 'prices', 'media', 'taxons'])->whereIn('id', $ids)->get();
```

This collapses many per-product queries into a small number of bulk queries, reducing
total Neon round-trips from 40–80 down to 5–10. Even without caching, this could reduce
TTFB from 8s to under 2s.

### Strategy 4 — Neon Connection Pooling (PgBouncer)

**Problem:** Each PHP worker opens a new PostgreSQL connection to Neon, paying SSL
handshake overhead on every cold worker start. Neon also limits the number of simultaneous
connections on lower-tier plans.

**Fix:** Use Neon's built-in PgBouncer connection pooling endpoint (available on all Neon
plans). Change the `DB_HOST` in the production `.env` to the pooler endpoint:

```
# Current (direct)
ep-cold-paper-aj7h1lxg.c-3.us-east-2.aws.neon.tech

# Pooled (PgBouncer, transaction mode)
ep-cold-paper-aj7h1lxg-pooler.c-3.us-east-2.aws.neon.tech
```

This reduces connection overhead and prevents Octane workers from exhausting Neon's
connection limit under concurrent load.

### Strategy 5 — Move to a Local or Same-Region Database

**Problem:** The Reserved VM's geographic location and Neon's us-east-2 region may not
be co-located, adding unnecessary network distance.

**Fix (short-term):** Confirm the Reserved VM is running in us-east-2 and that the Neon
project is in the same region. Replit's Reserved VMs run in specific regions — if the VM
is not in us-east-2, migrating the Neon project to match would reduce latency.

**Fix (longer-term):** Run PostgreSQL locally on the Reserved VM (using the `postgresql-16`
Nix module already present) and mirror/seed it from Neon on startup. Local queries would
return to ~0ms latency, matching DEV performance. Writes would need to replicate back to
Neon or this would need to be a full migration away from Neon.

### Strategy 6 — Meilisearch Result Caching

**Problem:** The Meilisearch search query runs on every request and takes 500ms–1.5s
even after the index is warm.

**Fix:** Cache Meilisearch search results in Laravel's cache (Redis or file) keyed by the
search query string and filters. Meilisearch result sets for a static product catalog
change only when products are added/updated, so a 5–15 minute TTL is safe.

This is complementary to Strategy 2 — caching the Meilisearch response separately from
the Lunar DB result allows finer-grained invalidation.

---

## Implementation Priority

| Strategy | Effort | Impact | Recommended Order |
|----------|--------|--------|-------------------|
| Strategy 1 — Full page response cache | Low | Eliminates problem for all cached requests | **First** |
| Strategy 4 — Neon PgBouncer pooling | Very Low | Reduces connection overhead | **Second** (config change only) |
| Strategy 2 — Lunar query cache | Medium | Eliminates DB + Meilisearch cost | **Third** |
| Strategy 3 — Eager loading | Medium | Reduces query count 8–16× | **Fourth** |
| Strategy 6 — Meilisearch cache | Low | Removes 500ms–1.5s per uncached request | **Alongside 2** |
| Strategy 5 — Local DB | High | Permanent fix, matches DEV performance | **Long-term** |
