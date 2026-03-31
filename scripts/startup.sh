#!/usr/bin/env bash
#
# Production startup script.
# Handles: Meilisearch (--env production), health gate, Laravel, and OPcache warm-up.
#

# D: Start Meilisearch in background with production mode
echo "[startup] Starting Meilisearch (production mode)..."
meilisearch \
    --http-addr 0.0.0.0:8000 \
    --master-key "$MEILISEARCH_KEY" \
    --db-path ./storage/meilisearch \
    --env production \
    --log-level INFO &
MEILISEARCH_PID=$!

# C: Wait for Meilisearch health endpoint to confirm it is ready
echo "[startup] Waiting for Meilisearch to be ready..."
MAX_WAIT=90
ELAPSED=0
until curl --silent --output /dev/null --max-time 2 http://localhost:8000/health; do
    sleep 1
    ELAPSED=$((ELAPSED + 1))
    if [ "$ELAPSED" -ge "$MAX_WAIT" ]; then
        echo "[startup] Warning: Meilisearch did not become ready within ${MAX_WAIT}s. Proceeding anyway."
        break
    fi
done
echo "[startup] Meilisearch ready after ${ELAPSED}s."

# Download FrankenPHP binary if not present (gitignored, must be fetched at runtime)
if [ ! -f "./frankenphp" ]; then
    echo "[startup] FrankenPHP binary not found. Downloading via Octane installer..."
    php artisan octane:install --server=frankenphp --no-interaction
    echo "[startup] FrankenPHP download complete."
fi

# Start Laravel via Octane + FrankenPHP in background
echo "[startup] Starting Laravel (Octane + FrankenPHP)..."
php artisan octane:start --server=frankenphp --host=0.0.0.0 --port=5000 --admin-port=2019 &
LARAVEL_PID=$!

# F: Wait for Laravel to be accepting requests
echo "[startup] Waiting for Laravel to be ready..."
ELAPSED=0
until curl --silent --output /dev/null --max-time 2 http://localhost:5000; do
    sleep 1
    ELAPSED=$((ELAPSED + 1))
    if [ "$ELAPSED" -ge 120 ]; then
        echo "[startup] Warning: Laravel did not respond within 120s."
        break
    fi
done
echo "[startup] Laravel ready after ${ELAPSED}s. Running warm-up requests..."

# F: Hit key pages to warm OPcache and pre-compile Blade templates.
# These requests happen before real users arrive.
curl --silent --output /dev/null --max-time 10 http://localhost:5000/ &
curl --silent --output /dev/null --max-time 10 http://localhost:5000/custom-apparel &
curl --silent --output /dev/null --max-time 10 http://localhost:5000/signs &
wait

echo "[startup] Warm-up complete. Site is ready."

# Keep the script alive for as long as either service is running.
wait "$LARAVEL_PID" "$MEILISEARCH_PID"
