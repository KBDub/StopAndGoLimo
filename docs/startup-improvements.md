# Cold Start Analysis & Improvement Strategies

## The Problem

After a period of inactivity, the first visitor to the site experiences a wait of **20–30 seconds or more** before the page loads. After that first request, the site responds in milliseconds.

---

## Why the Site Stops Running

Replit's deployment platform applies **"scale to zero"** to idle containers — even on a single-node (Reserved VM) deployment. After a period with no incoming HTTP traffic (typically 30–60 minutes), Replit hibernates the container to conserve infrastructure resources. The next incoming request wakes the container, which must fully restart before serving a response.

This is a **platform-level behavior**, not a bug in the application. The number of nodes does not affect it — a single node can still be hibernated.

---

## The Full Cold Start Timeline (from production logs, 2026-03-26)

```
09:05:51  Container wakes. Meilisearch begins starting.
           Database path: ./storage/meilisearch
           An incoming HTTP request is already queued at this moment.

09:06:04  Laravel server becomes ready (~13 seconds after wake).
           "Server running on [http://0.0.0.0:5000]"
           Meilisearch is still loading its index from disk.

09:06:13  First HTTP request (to /) begins processing.
           Elapsed since wake: ~22 seconds.
           The request itself takes ~9 additional seconds.
           Total first-user wait: ~22 seconds.

09:06:20  Second request: ~6 seconds.

09:06:20+ All subsequent requests: sub-millisecond to low milliseconds.
```

The queued request was waiting for both the container OS, Meilisearch, and Laravel to be ready before it could even begin processing. The full user-facing wait is measured from the moment Meilisearch (and therefore the container) began starting.

---

## Root Causes in Detail

### 1. Container Hibernation (Platform)

Replit suspends the container process when idle. On the next request:
- The Linux container must resume from a suspended state.
- All processes (Meilisearch, PHP, the webserver) must restart from scratch.
- No in-memory state survives hibernation.

### 2. Meilisearch Index Loading from Disk (~10–13 seconds)

Meilisearch stores its entire search index on disk in `./storage/meilisearch`. On every cold start it must:
- Open and read the LMDB database files.
- Load index metadata and settings into memory.
- Initialize its HTTP server and become ready to accept queries.

With a growing product catalog (31+ service products, 93+ variants, 11 merchandise products, 79 variants), this disk-read phase takes roughly 10–13 seconds on Replit's storage layer. Meilisearch does not serve queries until this is complete, so any Laravel request that touches search during startup will block waiting for Meilisearch.

### 3. PHP OPcache Is Empty After Every Cold Start (~varies, contributes to first-request slowness)

PHP is an interpreted language. Without OPcache, every request requires:
1. Reading each `.php` file from disk.
2. Parsing it into an Abstract Syntax Tree.
3. Compiling it to bytecode (opcodes).
4. Executing the opcodes.

**OPcache** (PHP's built-in bytecode cache) stores the compiled opcodes in shared memory so steps 1–3 are skipped on subsequent requests.

After hibernation, OPcache is completely empty. Laravel's application involves **hundreds of PHP files** — the framework core, all vendor packages (Lunar, Livewire, Alpine, etc.), and application files. The **first request forces PHP to read, parse, and compile all of these from disk simultaneously**. This is the primary reason the first request is dramatically slower than all subsequent ones.

Once OPcache is warm, the compiled bytecode lives in shared memory. Subsequent requests skip disk I/O entirely for PHP file loading, which is why response times drop to milliseconds after the first hit.

### 4. Laravel First-Request Bootstrap Work

Even with OPcache, Laravel performs one-time bootstrap work on its first request:

- **Config loading:** If `config:cache` has been run, Laravel reads a single compiled `bootstrap/cache/config.php`. Without it, Laravel reads and merges 20+ individual config files. Either way, these files must be compiled by OPcache on the first load.
- **Route compilation:** If `route:cache` has been run, routes are loaded from a single serialized file. Without it, all route closures must be resolved and the router built.
- **Blade view compilation:** If a Blade template has never been rendered (or the cache was cleared), Blade compiles the `.blade.php` template to a plain PHP file on first access and writes it to `storage/framework/views/`. This involves disk reads and writes.
- **Service provider boot:** Laravel's IoC container boots all registered service providers in sequence. Providers for Lunar, Livewire, Scout (Meilisearch), and others each perform initialization work.
- **Database connection:** The first database query establishes a connection to PostgreSQL. This involves a TCP handshake and authentication round-trip.
- **Autoloader resolution:** Even with Composer's optimized class map, the first time a class is referenced, its file path must be resolved and the file loaded.

All of this happens on the **first request** only. Everything is cached in memory (OPcache, database connection pool, service container singletons) and reused for all subsequent requests.

### 5. Meilisearch Running in Development Mode

The current startup command does not include `--env production`:

```bash
meilisearch --http-addr 0.0.0.0:8000 --master-key <key> --db-path ./storage/meilisearch
```

Meilisearch defaults to `"development"` mode, as shown in the logs:
```
Environment: "development"
```

In development mode, Meilisearch enables additional logging overhead and disables certain production optimizations (including analytics data collection that phones home). This does not directly cause the long startup time but adds unnecessary overhead in a production context.

---

## Solutions

### Solution A — Prevent Hibernation (Eliminates the Problem Entirely)

**Replit Reserved VM with "Always On"**

Ensure the deployment is configured as a **Reserved VM** (not Autoscale) in Replit's deployment settings, and that the VM reservation is active. Reserved VM deployments are intended to stay running, but Replit may still apply idle hibernation depending on the plan tier. Check the deployment configuration to confirm the instance is never suspended.

If Replit's platform continues to hibernate despite a Reserved VM reservation, the most reliable workaround is an **external uptime monitor** (UptimeRobot, BetterStack, etc.) configured to send a GET request to the site every 5–10 minutes. This keeps the container warm by simulating traffic and prevents the idle timeout from triggering.

Cost: Zero for the monitor service (free tier covers this). No code changes.

---

### Solution B — OPcache Preload Script (Reduces First-Request PHP Compile Time)

PHP 7.4+ supports `opcache.preload` — a PHP script that runs **once at server startup** and uses `opcache_compile_file()` to pre-compile all application PHP files into OPcache before the first request arrives.

A preload script would:
1. Walk the `vendor/` directory and `app/` directory.
2. Call `opcache_compile_file()` on each `.php` file.
3. Complete before the webserver begins accepting requests.

This moves the OPcache compilation cost from the first user request to the server startup phase. The first user still waits for startup, but the PHP portion of their request is immediately fast because OPcache is already warm.

Requires: A `preload.php` file and a `php.ini` directive (`opcache.preload=/path/to/preload.php`). The Replit PHP environment would need to support the `opcache.preload` ini setting.

---

### Solution C — Meilisearch Health Gate (Prevents First-Request Search Failures)

Currently, Laravel starts accepting requests immediately after the webserver is ready at `09:06:04`, but Meilisearch is still loading its index. If the first requests touch search functionality (catalog pages, product grids using Scout/Meilisearch), they will either fail or wait on a slow Meilisearch connection.

A startup gate would:
1. After Meilisearch starts, run a polling loop that calls the Meilisearch health endpoint (`GET /health`) every second.
2. Only start the Laravel webserver once Meilisearch responds with `{"status":"available"}`.

This ensures users never hit a partially-ready state where Meilisearch is still loading. It increases the total startup time slightly on paper but eliminates slow/broken search on the first few requests.

Implementation: A small shell script (`startup.sh`) wrapping the two workflow commands with a health check between them.

---

### Solution D — Meilisearch Production Mode (Minor, Low Effort)

Add `--env production` to the Meilisearch startup command:

```bash
meilisearch --http-addr 0.0.0.0:8000 --master-key <key> --db-path ./storage/meilisearch --env production
```

This removes development-mode overhead (verbose logging, analytics calls) and is the correct configuration for a live site. It will not meaningfully reduce startup time but eliminates unnecessary behavior in production.

---

### Solution E — Laravel Caches Pre-Warmed at Deploy Time (Low-Hanging Fruit)

Confirm that the following Artisan commands are run as part of every deployment:

```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan event:cache
php artisan icons:cache
```

These write compiled output to disk before the server starts. On cold start, Laravel reads a single compiled file instead of hundreds of individual ones. This reduces the Laravel bootstrap portion of the first-request delay and should already be in place — but worth verifying in the deployment process.

---

### Solution F — Startup Warming Request (Simple, No Infrastructure Change)

After the container starts and both Meilisearch and Laravel are ready, automatically send one or more HTTP requests to the most expensive pages (homepage, a catalog page) as part of the startup script.

This warms OPcache, warms the Blade cache, establishes the database connection, and primes any in-memory caches — all before the first real user arrives. The first real user sees a warm site.

This can be done with a `curl` call inside a startup shell script after both services are confirmed healthy.

---

## Summary Table

| Solution | Eliminates Cold Start? | Effort | Requires Code Change? |
|---|---|---|---|
| A — Uptime monitor / prevent hibernation | Yes (if successful) | Very Low | No |
| B — OPcache preload script | No (reduces PHP portion) | Medium | Yes (preload.php + php.ini) |
| C — Meilisearch health gate | No (prevents broken state) | Low | Yes (startup shell script) |
| D — Meilisearch `--env production` | No (minor improvement) | Very Low | Yes (workflow command) |
| E — Confirm Laravel caches pre-warmed | No (reduces Laravel portion) | Very Low | Maybe (deployment script) |
| F — Startup warming request | No (warms OPcache before users) | Low | Yes (startup shell script) |

**Recommended approach:** A (uptime monitor) prevents the problem. C + D + E + F reduce the impact when a cold start does occur. B is a deeper optimization worth considering if startup time remains a pain point after A is in place.

---

### Solution G — Meilisearch Log Level: INFO (Deployed 2026-03-28)

**Status: Implemented**

By default, Meilisearch in `--env production` mode runs at a reduced log verbosity. Individual search operations, index tasks, and health events are not printed to output. In Replit's deployment log viewer, this means Meilisearch appears nearly silent after startup — making it impossible to diagnose slow queries or indexing problems in production.

The fix is to pass `--log-level INFO` to both the production startup script and the dev workflow:

**`scripts/startup.sh` (production):**
```bash
meilisearch \
    --http-addr 0.0.0.0:8000 \
    --master-key "$MEILISEARCH_KEY" \
    --db-path ./storage/meilisearch \
    --env production \
    --log-level INFO &
```

**Dev workflow command:**
```bash
meilisearch --http-addr 0.0.0.0:8000 --master-key <key> --db-path ./storage/meilisearch --env production --log-level INFO
```

**Note on how Meilisearch logs appear in Replit:** Meilisearch writes all of its output — including the startup ASCII banner, server info, and operational log lines — to **stderr** rather than stdout. Replit's deployment log collector labels all stderr as `[Error]` regardless of actual severity. Meilisearch startup messages appearing as `[Error]` entries in the deployment log viewer are **not actual errors** — they are informational output routed through the wrong stream. This is a Meilisearch behavior, not a Replit misconfiguration, and cannot be changed without patching Meilisearch itself.

**Available log levels (lowest to highest verbosity):** `OFF`, `ERROR`, `WARN`, `INFO`, `DEBUG`, `TRACE`

- `INFO` is the right balance for production: shows task processing, search operations, indexing, and health checks without overwhelming the log stream with internal trace data.
- `DEBUG` or `TRACE` should only be used during active debugging — they produce very high log volume.

---

## Production Web Server Problem

### The Problem: `php artisan serve` in Production

The current startup script runs Laravel using:

```bash
php artisan serve --host=0.0.0.0 --port=5000
```

`php artisan serve` is Laravel's built-in development server. It wraps PHP's built-in web server (`php -S`) and is **not designed for production use**. Its critical limitation in production is **poor concurrency handling** — when one request is processing, additional requests block and queue behind it rather than being handled in parallel.

**Evidence from production logs (2026-03-28):**
```
~ 15s
~ 15s  (request logged 8 seconds after the previous)
~ 16s  (8 seconds later again)
~ 16s  (repeating for ~90 straight seconds)
```

Each page serving the Livewire product grid fires a Meilisearch search query, which takes 1-2 seconds on its own. With a single-threaded dev server, that 1-2 second query becomes a 15-16 second wait because every subsequent request queues behind it. The 8-second gap between logged completions is the approximate processing time per request in the queue.

Static assets (CSS, JS, images served directly from `public/`) respond in sub-milliseconds because they bypass PHP entirely. Pages without the Livewire product grid component respond in ~1 second. Only pages with the Meilisearch-backed product grid hit 15-16 seconds under any load.

This is **not a Meilisearch performance problem** — Meilisearch itself is fast. It is a web server concurrency problem.

---

### Option A — Laravel Octane (Recommended Long-Term Fix)

**Laravel Octane** keeps the Laravel application bootstrapped in memory between requests. Instead of running the full Laravel startup sequence (service providers, config loading, route compilation, database connection establishment) on every single request, the app boots once and stays resident in memory. Requests are dispatched to the already-running application, dramatically cutting per-request overhead.

Octane supports two drivers:

**FrankenPHP (preferred for Replit VM):**
- A single binary that acts as both the web server and PHP runtime.
- Built on top of Caddy (a modern Go-based web server).
- No separate nginx or php-fpm processes to manage.
- Excellent performance, HTTP/2 and HTTP/3 support built in.
- Install via a single binary download or `composer require laravel/octane` + `php artisan octane:install --server=frankenphp`.

**RoadRunner:**
- A Go-based PHP application server.
- Also a single binary, but requires a separate `.rr.yaml` config file.
- Very high performance, commonly used in high-traffic Laravel apps.
- Install via `composer require laravel/octane spiral/roadrunner`.

**Expected improvement:** Response times for warm requests should drop from 1-2 seconds to under 100ms. Concurrency handling improves dramatically — Octane processes requests in parallel workers.

**Startup script change needed:** Replace `php artisan serve` with `php artisan octane:start --host=0.0.0.0 --port=5000`.

**Caveats:**
- Octane holds application state in memory between requests. Code that stores state in static properties or global variables can bleed between requests. Lunar, Livewire, and most well-written packages handle this correctly, but it requires testing.
- Blade view caching and route caching must be valid — stale caches can cause issues. These are already cleared and rebuilt on every deploy.

---

### Option B — Nginx + PHP-FPM (Traditional Production Stack)

The classic production PHP stack: Nginx acts as the web server and reverse proxy, PHP-FPM manages a pool of PHP worker processes that handle requests in parallel.

**How it works:**
- Nginx serves static files directly (no PHP involved — already near-zero latency).
- PHP requests are proxied by Nginx to PHP-FPM via a Unix socket or TCP port.
- PHP-FPM maintains a pool of pre-forked PHP workers (e.g., 4-8 workers). Requests are dispatched to any available worker in parallel.
- Each worker still runs the full Laravel bootstrap per request (unlike Octane), but multiple requests are processed simultaneously.

**On Replit Reserved VM:** Both `nginx` and `php8.4-fpm` (or `php-fpm`) are available as Nix packages and can be added to `replit.nix`. A minimal nginx config and php-fpm pool config would need to be written. The startup script would need to start both services and wait for them to be ready before warm-up requests.

**Expected improvement:** Concurrency is fully resolved — 8 parallel workers means 8 simultaneous requests can process without queuing. Response times per request remain similar to the current dev server for a single request, but throughput under load improves enormously.

**Effort:** Medium. Requires nginx config, php-fpm pool config, nix package additions, and startup script changes.

---

### Option C — PHP Built-in Server with `-S` (Quick Stopgap)

Replace `php artisan serve` with PHP's raw built-in web server pointed directly at the `public/` directory:

```bash
php -S 0.0.0.0:5000 -t public/
```

This is still not a production-grade server, but PHP 8's built-in server does handle a small degree of concurrency better than `php artisan serve`'s wrapper around it. It eliminates the extra artisan bootstrap overhead on top of the server itself.

**Expected improvement:** Marginal. Still single-threaded in practice for PHP requests. Not recommended as anything other than a temporary diagnostic step to isolate whether the bottleneck is artisan serve itself or something deeper.

**Effort:** Trivial. One line change in `scripts/startup.sh`.

---

### Production Server Recommendation

| Option | Concurrency | Per-Request Speed | Effort | Production-Grade |
|---|---|---|---|---|
| Current (`php artisan serve`) | Poor | ~1-2s (queues to 15s+) | — | No |
| C — `php -S` direct | Poor | ~1-2s | Trivial | No |
| B — Nginx + PHP-FPM | Excellent | ~1-2s | Medium | Yes |
| A — Laravel Octane | Excellent | <100ms | Low-Medium | Yes |

**Recommended path:** Option A (Octane + FrankenPHP). It solves both concurrency and per-request speed in one change, requires no additional services to manage, and is the direction Laravel itself recommends for production performance.
