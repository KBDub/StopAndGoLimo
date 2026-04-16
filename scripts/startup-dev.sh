#!/usr/bin/env bash
#
# Development startup script for the Laravel Server workflow.
# Meilisearch is started by its own separate workflow.
# This script: waits for Meilisearch (C), starts Laravel, then warms up OPcache (F).
#

# One-time staff password reset — runs only when STAFF_ADMIN_HASH is set.
# After confirming the password change took effect in production, delete
# STAFF_ADMIN_HASH from the environment secrets to disable this step.
if [ -n "${STAFF_ADMIN_HASH}" ]; then
    echo "[startup] Applying staff password reset..."
    php artisan staff:reset-passwords
fi

# C: Wait for Meilisearch health endpoint before serving any requests
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

# Start Laravel server in background
echo "[startup] Starting Laravel..."
php artisan serve --host=0.0.0.0 --port=5000 &
LARAVEL_PID=$!

# F: Wait for Laravel to accept requests, then warm up
echo "[startup] Waiting for Laravel to be ready..."
ELAPSED=0
until curl --silent --output /dev/null --max-time 2 http://localhost:5000; do
    sleep 1
    ELAPSED=$((ELAPSED + 1))
    if [ "$ELAPSED" -ge 30 ]; then
        echo "[startup] Warning: Laravel did not respond within 30s."
        break
    fi
done
echo "[startup] Laravel ready after ${ELAPSED}s. Running warm-up requests..."

# F: Warm up OPcache and Blade template cache before real users arrive
curl --silent --output /dev/null --max-time 10 http://localhost:5000/ &
curl --silent --output /dev/null --max-time 10 http://localhost:5000/custom-apparel &
curl --silent --output /dev/null --max-time 10 http://localhost:5000/signs &
wait

echo "[startup] Warm-up complete. Site is ready."

# Keep alive
wait "$LARAVEL_PID"
