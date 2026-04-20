<?php

declare(strict_types=1);

namespace App\Filament\Resources\StoreResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class PagesRelationManager extends RelationManager
{
    protected static string $relationship = 'pages';

    protected static ?string $title = 'Pages';

    public function form(Form $form): Form
    {
        return $form->schema([

            Forms\Components\TextInput::make('title')
                ->required()
                ->maxLength(255)
                ->columnSpanFull(),

            Forms\Components\TextInput::make('slug')
                ->label('URL Slug')
                ->helperText('Leave blank for the homepage. Legal pages use slugs like "terms", "privacy", "refund-policy".')
                ->maxLength(100)
                ->nullable()
                ->alphaDash()
                ->unique(table: 'store_pages', column: 'slug', ignoreRecord: true),

            Forms\Components\TextInput::make('sort_order')
                ->label('Sort Order')
                ->numeric()
                ->default(10)
                ->helperText('Values below 50 appear in the main nav. 50+ are legal/footer-only pages.'),

            Forms\Components\Toggle::make('is_active')
                ->label('Active')
                ->default(true)
                ->columnSpanFull(),

            Forms\Components\Textarea::make('custom_html')
                ->label('Custom HTML Content')
                ->helperText('When set, this raw HTML is rendered on the page instead of the default branded template. Leave blank to use the auto-generated branded layout.')
                ->rows(20)
                ->columnSpanFull(),

        ])->columns(2);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('title')
            ->defaultSort('sort_order')
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('slug')
                    ->label('Slug')
                    ->formatStateUsing(fn ($state) => $state === '' || $state === null ? '(home)' : $state)
                    ->sortable(),
                Tables\Columns\TextColumn::make('sort_order')
                    ->label('Order')
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->label('Active'),
                Tables\Columns\IconColumn::make('custom_html')
                    ->label('Custom HTML')
                    ->boolean()
                    ->getStateUsing(fn ($record) => filled($record->custom_html))
                    ->trueIcon('heroicon-o-code-bracket')
                    ->falseIcon('heroicon-o-minus'),
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
