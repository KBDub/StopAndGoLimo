<?php

declare(strict_types=1);

namespace App\Filament\Pages\SuperAdmin;

use App\Models\GlobalOverride;
use Filament\Actions\Action;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Cache;

class GlobalOverridesPage extends Page implements HasForms, HasTable
{
    use InteractsWithForms;
    use InteractsWithTable;

    protected static ?string $navigationIcon  = 'heroicon-o-code-bracket';
    protected static ?string $navigationGroup = 'Storefronts';
    protected static ?string $navigationLabel = 'Global CSS Overrides';
    protected static ?int    $navigationSort  = 10;
    protected static string  $view            = 'filament.pages.super-admin.global-overrides';

    public function table(Table $table): Table
    {
        return $table
            ->query(GlobalOverride::query())
            ->columns([
                TextColumn::make('name')->searchable()->sortable(),
                TextColumn::make('component')->label('Target Component')->placeholder('All'),
                IconColumn::make('is_active')->boolean()->label('Active'),
                TextColumn::make('updated_at')->dateTime('M j, Y g:i a')->label('Last Updated'),
            ])
            ->headerActions([
                \Filament\Tables\Actions\CreateAction::make()
                    ->model(GlobalOverride::class)
                    ->form([
                        TextInput::make('name')->required(),
                        TextInput::make('component')->placeholder('e.g. store-nav')->helperText('Optional — for your reference only.'),
                        Textarea::make('css')->required()->rows(8)->label('CSS')->placeholder('.store-nav { ... }'),
                        Toggle::make('is_active')->default(true),
                    ])
                    ->after(fn () => Cache::forget('global_overrides')),
            ])
            ->actions([
                EditAction::make()
                    ->form([
                        TextInput::make('name')->required(),
                        TextInput::make('component'),
                        Textarea::make('css')->required()->rows(8)->label('CSS'),
                        Toggle::make('is_active'),
                    ])
                    ->after(fn () => Cache::forget('global_overrides')),
                DeleteAction::make()
                    ->after(fn () => Cache::forget('global_overrides')),
            ]);
    }
}
