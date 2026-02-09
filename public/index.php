<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

require __DIR__.'/../vendor/autoload.php';

$logFile = __DIR__.'/../storage/logs/db-trace.log';
$timestamp = date('Y-m-d H:i:s');

$envFile = __DIR__.'/../.env';
$envExists = file_exists($envFile) ? 'YES' : 'NO';
$envDbHost = 'NOT IN FILE';
if (file_exists($envFile)) {
    $envContent = file_get_contents($envFile);
    if (preg_match('/^DB_HOST=(.*)$/m', $envContent, $m)) $envDbHost = trim($m[1]);
}

file_put_contents($logFile, "[$timestamp] REQUEST: {$_SERVER['REQUEST_METHOD']} {$_SERVER['REQUEST_URI']}\n", FILE_APPEND);
file_put_contents($logFile, "[$timestamp] .env exists: $envExists | DB_HOST in .env: $envDbHost\n", FILE_APPEND);
file_put_contents($logFile, "[$timestamp] getenv DATABASE_URL: " . (getenv('DATABASE_URL') ?: 'NOT SET') . "\n", FILE_APPEND);
file_put_contents($logFile, "[$timestamp] getenv PGHOST: " . (getenv('PGHOST') ?: 'NOT SET') . "\n", FILE_APPEND);
file_put_contents($logFile, "[$timestamp] getenv DB_HOST: " . (getenv('DB_HOST') ?: 'NOT SET') . "\n", FILE_APPEND);
file_put_contents($logFile, "[$timestamp] \$_ENV DB_HOST: " . ($_ENV['DB_HOST'] ?? 'NOT SET') . "\n", FILE_APPEND);
file_put_contents($logFile, "[$timestamp] \$_SERVER DB_HOST: " . ($_SERVER['DB_HOST'] ?? 'NOT SET') . "\n", FILE_APPEND);
file_put_contents($logFile, "[$timestamp] ---\n", FILE_APPEND);

(require_once __DIR__.'/../bootstrap/app.php')
    ->handleRequest(Request::capture());
