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
