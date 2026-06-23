#!/usr/bin/env bash
#
# Development startup script for the Laravel Server workflow.
# Starts Laravel and warms up OPcache after the server is ready.
#

# Sync APP_URL so media/storage URLs are correct.
# In production (REPLIT_DEPLOYMENT=1) use APP_URL from the environment (set via
# Replit secrets/env vars to the canonical domain).
# In dev use the current Replit dev tunnel domain so the preview works locally.
if [ -n "${REPLIT_DEPLOYMENT}" ]; then
    # Production — APP_URL must already be set as a Replit env var
    if [ -n "${APP_URL}" ]; then
        echo "[startup] Production: writing APP_URL=${APP_URL} to .env"
        sed -i "s|^APP_URL=.*|APP_URL=${APP_URL}|" .env
    else
        echo "[startup] WARNING: REPLIT_DEPLOYMENT set but APP_URL env var is empty. Assets may use wrong domain."
    fi
elif [ -n "${REPLIT_DEV_DOMAIN}" ]; then
    NEW_APP_URL="https://${REPLIT_DEV_DOMAIN}"
    echo "[startup] Dev: Setting APP_URL=${NEW_APP_URL}"
    sed -i "s|^APP_URL=.*|APP_URL=${NEW_APP_URL}|" .env
fi

# Ensure the public/storage symlink exists (needed for Spatie Media Library).
if [ ! -L public/storage ]; then
    echo "[startup] Creating storage symlink..."
    php artisan storage:link
fi

# One-time staff password reset — runs only when STAFF_ADMIN_HASH is set.
if [ -n "${STAFF_ADMIN_HASH}" ]; then
    echo "[startup] Applying staff password reset..."
    php artisan staff:reset-passwords
fi

# Inject Replit env vars that must be visible to PHP web-request workers.
# PHP's built-in server workers only see env vars that Dotenv loaded from
# .env — OS-level env vars (Replit shared vars / secrets) are present in
# /proc/PID/environ but are invisible to $_ENV / getenv() in web context.
# Writing them into .env here ensures Dotenv picks them up on every request.

sg_inject_env() {
    local KEY="$1"
    local VAL="$2"
    if [ -z "$VAL" ]; then return; fi
    if grep -q "^${KEY}=" .env; then
        sed -i "s|^${KEY}=.*|${KEY}=${VAL}|" .env
    else
        echo "${KEY}=${VAL}" >> .env
    fi
}

if [ -n "${QUOTE_NOTIFY_EMAIL}" ]; then
    sg_inject_env "QUOTE_NOTIFY_EMAIL" "${QUOTE_NOTIFY_EMAIL}"
    echo "[startup] QUOTE_NOTIFY_EMAIL injected into .env"
fi

# Mail — non-sensitive values are hard-coded here to bypass the
# Replit secrets vs shared-env-var precedence ambiguity (secrets win
# over .env via Dotenv createImmutable, so stale secret values would
# silently override the correct ones if we relied on $MAIL_HOST etc.).
# MAIL_PASSWORD is read from the Replit secret and written to .env.
# All MAIL_* OS env vars are then unset so PHP reads exclusively from .env.
sg_inject_env "MAIL_MAILER"       "smtp"
sg_inject_env "MAIL_HOST"         "smtp.gmail.com"
sg_inject_env "MAIL_PORT"         "587"
sg_inject_env "MAIL_ENCRYPTION"   "tls"
sg_inject_env "MAIL_USERNAME"     "stopngovr@gmail.com"
sg_inject_env "MAIL_FROM_ADDRESS" "stopngovr@gmail.com"
sg_inject_env "MAIL_FROM_NAME"    "Stop and Go Airport Shuttle"
echo "[startup] MAIL_* (non-sensitive) written to .env"

if [ -n "${MAIL_PASSWORD}" ]; then
    sg_inject_env "MAIL_PASSWORD" "${MAIL_PASSWORD}"
    echo "[startup] MAIL_PASSWORD injected into .env"
else
    echo "[startup] WARNING: MAIL_PASSWORD secret is not set — mail will fail."
fi

# Unset all MAIL_* OS env vars so Dotenv reads the .env values above,
# not stale values baked into Replit secrets or shared env vars.
unset MAIL_MAILER MAIL_HOST MAIL_PORT MAIL_ENCRYPTION \
      MAIL_USERNAME MAIL_FROM_ADDRESS MAIL_FROM_NAME MAIL_PASSWORD

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
wait

echo "[startup] Warm-up complete. Site is ready."

# Keep alive
wait "$LARAVEL_PID"
