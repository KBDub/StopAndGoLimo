<?php

declare(strict_types=1);

namespace App\Providers\Filament;

use App\Filament\Pages\SuperAdmin\BulkInventoryPage;
use App\Filament\Pages\SuperAdmin\GlobalOverridesPage;
use App\Filament\Resources\StoreResource;
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
                    ->path('hub')
                    ->resources([
                        StoreResource::class,
                    ])
                    ->pages([
                        GlobalOverridesPage::class,
                        BulkInventoryPage::class,
                    ]);
            })->register();
        });
    }

    public function boot(): void
    {
        //
    }
}
