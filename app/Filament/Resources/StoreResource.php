<?php

declare(strict_types=1);

namespace App\Filament\Resources;

use App\Filament\Resources\StoreResource\Pages\CreateStore;
use App\Filament\Resources\StoreResource\Pages\EditStore;
use App\Filament\Resources\StoreResource\Pages\ListStores;
use App\Models\Store;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class StoreResource extends Resource
{
    protected static ?string $model = Store::class;

    protected static ?string $navigationIcon  = 'heroicon-o-building-storefront';
    protected static ?string $navigationGroup = 'Storefronts';
    protected static ?int    $navigationSort  = 1;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Tabs::make('Store Configuration')
                ->tabs([

                    // ── Identity ────────────────────────────────────
                    Forms\Components\Tabs\Tab::make('Identity')->schema([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('subdomain')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->helperText(fn () => 'e.g. "lincoln-high" → lincoln-high.' . config('storefront.tenant_base_domain'))
                            ->rules(['alpha_dash'])
                            ->maxLength(100),
                        Forms\Components\Select::make('lunar_channel_id')
                            ->label('Lunar Channel')
                            ->options(\Lunar\Models\Channel::pluck('name', 'id'))
                            ->searchable()
                            ->helperText('Products assigned to this channel will appear in the store.'),
                        Forms\Components\Select::make('store_type')
                            ->options([
                                'school'     => 'School / Spirit Wear',
                                'corporate'  => 'Corporate / Business',
                                'fundraiser' => 'Fundraiser / Booster',
                                'general'    => 'General',
                            ])
                            ->default('school')
                            ->required(),
                        Forms\Components\Toggle::make('is_active')
                            ->label('Store is Active')
                            ->default(true),
                    ])->columns(2),

                    // ── Branding ─────────────────────────────────────
                    Forms\Components\Tabs\Tab::make('Branding')->schema([
                        Forms\Components\FileUpload::make('logo_path')
                            ->label('Store Logo')
                            ->image()
                            ->directory('store-logos')
                            ->columnSpanFull(),
                        Forms\Components\Select::make('nav_layout')
                            ->label('Logo Position')
                            ->options([
                                'left'   => 'Logo Left (default)',
                                'center' => 'Logo Centered',
                                'right'  => 'Logo Right',
                            ])
                            ->default('left')
                            ->required(),
                        Forms\Components\ColorPicker::make('colors.primary')
                            ->label('Primary Color')
                            ->default('#2C2C2C'),
                        Forms\Components\ColorPicker::make('colors.secondary')
                            ->label('Secondary Color')
                            ->default('#FFC20E'),
                        Forms\Components\ColorPicker::make('colors.accent')
                            ->label('Accent Color')
                            ->default('#3273DC'),
                        Forms\Components\Select::make('font_family')
                            ->label('Font')
                            ->options([
                                'Inter'            => 'Modern (Inter)',
                                'Roboto'           => 'Professional (Roboto)',
                                'Merriweather'     => 'Authoritative (Merriweather)',
                                'Titillium Web'    => 'Branded (Titillium Web)',
                                'Oswald'           => 'Sporty (Oswald)',
                                'Playfair Display' => 'Elegant (Playfair Display)',
                            ])
                            ->default('Inter'),
                        Forms\Components\TextInput::make('font_custom')
                            ->label('Custom Font Override')
                            ->placeholder('e.g. Nunito')
                            ->helperText('Overrides font selection above. Must be a valid Google Fonts name.'),
                    ])->columns(2),

                    // ── Banner ───────────────────────────────────────
                    Forms\Components\Tabs\Tab::make('Banner')->schema([
                        Forms\Components\Toggle::make('has_banner')
                            ->label('Show Announcement Banner')
                            ->reactive(),
                        Forms\Components\TextInput::make('banner_text')
                            ->label('Banner Message')
                            ->maxLength(255)
                            ->visible(fn ($get) => $get('has_banner'))
                            ->columnSpanFull(),
                    ])->columns(2),

                    // ── Features ─────────────────────────────────────
                    Forms\Components\Tabs\Tab::make('Features')->schema([
                        Forms\Components\CheckboxList::make('features_enabled')
                            ->label('Enabled Features')
                            ->options([
                                'calendar'  => 'Event Calendar',
                                'countdown' => 'Event Countdown Timer',
                                'roster'    => 'Roster / Photo Grid',
                            ])
                            ->columnSpanFull(),
                    ]),

                    // ── Events / Calendar ─────────────────────────────
                    Forms\Components\Tabs\Tab::make('Events')->schema([
                        Forms\Components\Repeater::make('events')
                            ->schema([
                                Forms\Components\TextInput::make('name')
                                    ->required()
                                    ->label('Event Name')
                                    ->columnSpan(2),
                                Forms\Components\Select::make('category')
                                    ->label('Category')
                                    ->options([
                                        'School' => [
                                            'academic'      => 'Academic',
                                            'social_formal' => 'Social / Formal',
                                            'spirit_pride'  => 'Spirit / Pride',
                                            'athletic'      => 'Athletic',
                                            'creative_arts' => 'Creative Arts',
                                            'special_days'  => 'Special Days',
                                        ],
                                        'Corporate' => [
                                            'hr_culture'       => 'HR / Culture',
                                            'ext_marketing'    => 'External Marketing',
                                            'internal_ops'     => 'Internal Ops',
                                            'uniformity'       => 'Uniformity',
                                            'corp_social'      => 'Corporate Social',
                                            'sales_incentives' => 'Sales Incentives',
                                        ],
                                        'Specialized' => [
                                            'franchise'    => 'Franchise',
                                            'youth_sports' => 'Youth Sports',
                                            'camp'         => 'Camp',
                                        ],
                                    ])
                                    ->placeholder('Select a category')
                                    ->nullable()
                                    ->searchable(),
                                Forms\Components\TextInput::make('event_type')
                                    ->label('Event Type')
                                    ->placeholder('e.g. Spirit Week, Trade Show, Graduation')
                                    ->helperText('Specific event name within the category.')
                                    ->nullable(),
                                Forms\Components\DateTimePicker::make('event_date')
                                    ->required()
                                    ->label('Date & Time'),
                                Forms\Components\TextInput::make('location')
                                    ->label('Location'),
                                Forms\Components\Toggle::make('show_countdown')
                                    ->label('Show Countdown')
                                    ->helperText('Only one event should have this enabled at a time.')
                                    ->columnSpan(2),
                            ])
                            ->columns(2)
                            ->addActionLabel('Add Event')
                            ->columnSpanFull(),
                    ]),

                    // ── Roster ───────────────────────────────────────
                    Forms\Components\Tabs\Tab::make('Roster')->schema([
                        Forms\Components\Repeater::make('roster')
                            ->schema([
                                Forms\Components\FileUpload::make('photo')
                                    ->image()
                                    ->directory('store-roster'),
                                Forms\Components\TextInput::make('name')
                                    ->required()
                                    ->label('Name'),
                                Forms\Components\TextInput::make('meta')
                                    ->label('Grade / Department')
                                    ->placeholder('e.g. Grade 5 or Marketing'),
                            ])
                            ->grid(2)
                            ->addActionLabel('Add Person')
                            ->columnSpanFull(),
                    ]),

                ])
                ->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('subdomain')
                    ->formatStateUsing(fn ($state) => $state . '.' . config('storefront.tenant_base_domain'))
                    ->copyable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('store_type')
                    ->badge()
                    ->color(fn ($state) => match ($state) {
                        'school'     => 'info',
                        'corporate'  => 'warning',
                        'fundraiser' => 'success',
                        default      => 'gray',
                    }),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->label('Active'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('M j, Y')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('store_type')
                    ->options([
                        'school'     => 'School',
                        'corporate'  => 'Corporate',
                        'fundraiser' => 'Fundraiser',
                        'general'    => 'General',
                    ]),
                Tables\Filters\TernaryFilter::make('is_active')->label('Active'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('visit')
                    ->label('Visit Store')
                    ->icon('heroicon-o-arrow-top-right-on-square')
                    ->url(fn (Store $record) => "https://{$record->subdomain}." . config('storefront.tenant_base_domain'))
                    ->openUrlInNewTab(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => ListStores::route('/'),
            'create' => CreateStore::route('/create'),
            'edit'   => EditStore::route('/{record}/edit'),
        ];
    }
}
