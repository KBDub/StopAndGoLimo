<?php

declare(strict_types=1);

namespace App\Filament\Pages\SuperAdmin;

use App\Jobs\BulkUpdateInventoryJob;
use Filament\Actions\Action;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Lunar\Models\Product;
use Lunar\Models\ProductVariant;

class BulkInventoryPage extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon  = 'heroicon-o-archive-box-x-mark';
    protected static ?string $navigationGroup = 'Storefronts';
    protected static ?string $navigationLabel = 'Bulk Inventory';
    protected static ?int    $navigationSort  = 11;
    protected static string  $view            = 'filament.pages.super-admin.bulk-inventory';

    public ?int    $product_id  = null;
    public ?int    $variant_id  = null;
    public string  $action_type = 'out_of_stock';

    public function form(Form $form): Form
    {
        return $form->schema([
            Select::make('product_id')
                ->label('Product')
                ->options(Product::pluck('attribute_data', 'id')->mapWithKeys(function ($data, $id) {
                    $name = data_get($data, 'name.value.en', "Product #{$id}");
                    return [$id => $name];
                }))
                ->searchable()
                ->reactive()
                ->afterStateUpdated(fn () => $this->variant_id = null),
            Select::make('variant_id')
                ->label('Variant')
                ->options(function () {
                    if (! $this->product_id) {
                        return [];
                    }
                    return ProductVariant::where('product_id', $this->product_id)
                        ->get()
                        ->mapWithKeys(function ($v) {
                            $name = $v->translateAttribute('name') ?: "Variant #{$v->id}";
                            return [$v->id => $name];
                        });
                })
                ->visible(fn () => (bool) $this->product_id)
                ->searchable(),
            Radio::make('action_type')
                ->label('Action')
                ->options([
                    'out_of_stock' => 'Mark Out of Stock (quantity = 0)',
                    'in_stock'     => 'Restore In Stock (quantity = 99)',
                ])
                ->default('out_of_stock')
                ->required(),
        ]);
    }

    public function apply(): void
    {
        if (! $this->variant_id) {
            Notification::make()->title('Please select a variant.')->warning()->send();
            return;
        }

        $quantity = $this->action_type === 'out_of_stock' ? 0 : 99;

        BulkUpdateInventoryJob::dispatch($this->variant_id, $quantity);

        Notification::make()
            ->title('Bulk inventory update queued.')
            ->body("Variant #{$this->variant_id} will be updated across all channels.")
            ->success()
            ->send();
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('apply')
                ->label('Apply to All Stores')
                ->color('danger')
                ->requiresConfirmation()
                ->modalHeading('Confirm Bulk Inventory Update')
                ->modalDescription('This will update stock for the selected variant across every store channel that carries it. This cannot be undone automatically.')
                ->action('apply'),
        ];
    }
}
