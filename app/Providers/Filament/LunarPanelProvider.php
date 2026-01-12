<?php

declare(strict_types=1);

namespace App\Providers\Filament;

use Illuminate\Support\ServiceProvider;
use Lunar\Admin\Support\Facades\LunarPanel;

class LunarPanelProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->booting(function () {
            LunarPanel::panel(function ($panel) {
                return $panel
                    ->default()
                    ->path('hub');
            })->register();
        });
    }

    public function boot(): void
    {
        //
    }
}
