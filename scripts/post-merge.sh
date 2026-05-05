#!/bin/bash
set -e

echo "[post-merge] Installing npm dependencies..."
npm install --silent

echo "[post-merge] Building frontend assets..."
npm run build

echo "[post-merge] Running migrations..."
php artisan migrate --force

echo "[post-merge] Clearing caches..."
php artisan optimize:clear

echo "[post-merge] Done."
