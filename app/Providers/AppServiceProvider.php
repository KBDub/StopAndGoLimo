<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Lunar\Base\TelemetryServiceInterface;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::none();
        });

        RateLimiter::for('web', function (Request $request) {
            return Limit::none();
        });

        RateLimiter::for('login', function (Request $request) {
            return Limit::none();
        });

        if ($this->app->bound(TelemetryServiceInterface::class)) {
            $this->app->make(TelemetryServiceInterface::class)->optOut();
        }
    }
}
