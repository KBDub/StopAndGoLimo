#!/bin/bash
export PGHOST="${PGHOST}"
export PGPORT="${PGPORT}"
export PGDATABASE="${PGDATABASE}"
export PGUSER="${PGUSER}"
export PGPASSWORD="${PGPASSWORD}"
export DATABASE_URL="${DATABASE_URL}"
export DB_HOST="${PGHOST}"
export DB_PORT="${PGPORT}"
export DB_DATABASE="${PGDATABASE}"
export DB_USERNAME="${PGUSER}"
export DB_PASSWORD="${PGPASSWORD}"
export PHP_CLI_SERVER_WORKERS=4
exec php artisan serve --host=0.0.0.0 --port=5000
