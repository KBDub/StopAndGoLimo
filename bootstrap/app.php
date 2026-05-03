<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->trustProxies(at: '*');
        $middleware->prependToGroup('web', \App\Http\Middleware\ForceWww::class);
        $middleware->alias([
            'throttle'            => \App\Http\Middleware\DisableThrottle::class,
            'cacheResponse'       => \Spatie\ResponseCache\Middlewares\CacheResponse::class,
            'doNotCacheResponse'  => \Spatie\ResponseCache\Middlewares\DoNotCacheResponse::class,
            'identify.store'      => \App\Http\Middleware\IdentifyStore::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
