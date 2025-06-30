<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PropertiResource\Pages;
use App\Filament\Resources\PropertiResource\RelationManagers;
use App\Models\Properti;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Cheesegrits\FilamentGoogleMaps\Fields\Map;
use Filament\Infolists;
use Filament\Infolists\Infolist;
use Cheesegrits\FilamentGoogleMaps\Infolists\MapEntry;
use Filament\Support\Enums\FontWeight;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\SpatieMediaLibraryImageEntry;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class PropertiResource extends Resource
{
    protected static ?string $model = Properti::class;

    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static ?string $navigationLabel = 'Properti';

    protected static ?string $modelLabel = 'Properti';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Forms\Components\Tabs::make('Properti')
                ->tabs([
                    Forms\Components\Tabs\Tab::make('Informasi Dasar')
                        ->schema([
                            Forms\Components\TextInput::make('nama_properti')
                                ->required()
                                ->maxLength(255)
                                ->label('Nama Properti'),
                            Forms\Components\Textarea::make('deskripsi')
                                ->required()
                                ->maxLength(65535)
                                ->label('Deskripsi'),
                            Forms\Components\TextInput::make('lokasi')
                                ->required()
                                ->maxLength(255),
                            Forms\Components\TextInput::make('whatsapp_pemilik')
                                ->required()
                                ->maxLength(255)
                                ->label('WhatsApp Pemilik'),
                            Forms\Components\TextInput::make('pemilik')
                                ->required()
                                ->maxLength(255),
                            Forms\Components\Select::make('tipe_properti')
                                ->required()
                                ->options([
                                    'rumah' => 'Rumah',
                                    'apartemen' => 'Apartemen',
                                    'ruko' => 'Ruko',
                                    'tanah' => 'Tanah',
                                    'gudang' => 'Gudang',
                                    'villa' => 'Villa',
                                ]),
                            Forms\Components\Select::make('status')
                                ->required()
                                ->options([
                                    'tersedia' => 'Tersedia',
                                    'terjual' => 'Terjual',
                                    'disewa' => 'Disewa',
                                    'tersewa' => 'Tersewa',
                                ])
                                ->default('tersedia'),
                            Forms\Components\TextInput::make('harga')
                                ->numeric()
                                ->required(),
                            Forms\Components\Select::make('satuan_harga')
                                ->options([
                                    'juta' => 'Juta',
                                    'miliar' => 'Miliar',
                                    'perbulan' => 'Per Bulan',
                                    'pertahun' => 'Per Tahun',
                                ])
                                ->required(),
                            Forms\Components\Toggle::make('is_promo')
                                ->label('Properti Promo')
                                ->default(false),
                        ])->columns(2),
                    Forms\Components\Tabs\Tab::make('Detail Properti')
                        ->schema([
                            Forms\Components\TextInput::make('jumlah_kamar')
                                ->numeric()
                                ->label('Jumlah Kamar')
                                ->default(0),
                            Forms\Components\TextInput::make('jumlah_kamar_mandi')
                                ->numeric()
                                ->label('Jumlah Kamar Mandi')
                                ->default(0),
                            Forms\Components\TextInput::make('jumlah_parkir')
                                ->numeric()
                                ->label('Jumlah Parkir')
                                ->default(0),
                            Forms\Components\TextInput::make('luas_bangunan')
                                ->numeric()
                                ->label('Luas Bangunan (m²)')
                                ->suffix('m²'),
                            Forms\Components\Section::make('Lokasi di Peta')
                                ->schema([
                                    Map::make('peta')
                                        ->defaultLocation([5.5480, 95.3222]) // Default to Banda Aceh
                                        ->defaultZoom(13)
                                        ->mapControls([
                                            'mapTypeControl' => true,
                                            'scaleControl' => true,
                                            'streetViewControl' => true,
                                            'rotateControl' => true,
                                            'fullscreenControl' => true,
                                            'searchBoxControl' => true, // requires Places API
                                            'zoomControl' => true,
                                        ])
                                        ->height('400px')
                                        ->reactive()
                                        ->afterStateUpdated(function ($state, callable $set) {
                                            if (is_array($state) && isset($state['lat']) && isset($state['lng'])) {
                                                $set('latitude', $state['lat']);
                                                $set('longitude', $state['lng']);
                                            }
                                        })
                                        ->afterStateHydrated(function ($state, callable $set, callable $get) {
                                            // Load existing coordinates when editing
                                            $latitude = $get('latitude');
                                            $longitude = $get('longitude');

                                            if ($latitude && $longitude) {
                                                $set('peta', [
                                                    'lat' => (float) $latitude,
                                                    'lng' => (float) $longitude,
                                                ]);
                                            }
                                        })
                                        ->columnSpanFull(),
                                ]),
                            Forms\Components\TextInput::make('latitude')
                                ->numeric()
                                ->label('Latitude')
                                ->visible(),
                            Forms\Components\TextInput::make('longitude')
                                ->numeric()
                                ->label('Longitude')
                                ->visible(),
                        ])->columns(2),
                    Forms\Components\Tabs\Tab::make('Gambar Properti')
                        ->schema([
                            SpatieMediaLibraryFileUpload::make('gambar_properti')
                                ->collection('gambar_properti')
                                ->multiple()
                                ->maxFiles(10)
                                ->disk('public')
                                ->image()
                                ->imageEditor()
                                ->imageEditorAspectRatios([
                                    '16:9',
                                    '4:3',
                                    '1:1',
                                ])
                                ->openable()
                                ->downloadable()
                                ->previewable()
                                ->required()
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
            Tables\Columns\SpatieMediaLibraryImageColumn::make('gambar_properti')
                ->collection('gambar_properti')
                ->label('Foto')
                ->conversion('thumb')
                ->square()
                ->size(60),
                Tables\Columns\TextColumn::make('nama_properti')
                    ->searchable()
                    ->sortable()
                    ->label('Nama Properti'),
                Tables\Columns\TextColumn::make('lokasi')
                    ->searchable()
                    ->sortable(),
            Tables\Columns\TextColumn::make('harga')
                ->numeric()
                ->sortable()
                ->money('IDR')
                ->suffix(fn($record) => match ($record->satuan_harga) {
                    'juta' => ' Juta',
                    'miliar' => ' Miliar',
                    'perbulan' => '/bulan',
                    'pertahun' => '/tahun',
                    default => '',
                }),
                Tables\Columns\TextColumn::make('tipe_properti')
                    ->searchable()
                    ->sortable()
                    ->label('Tipe Properti'),
            Tables\Columns\IconColumn::make('is_promo')
                ->boolean()
                ->label('Promo'),
                Tables\Columns\TextColumn::make('status')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'tersedia' => 'success',
                        'terjual' => 'danger',
                        'disewa' => 'warning',
                        'tersewa' => 'warning',
                    }),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
            Tables\Filters\SelectFilter::make('tipe_properti')
                ->options([
                    'rumah' => 'Rumah',
                    'apartemen' => 'Apartemen',
                    'ruko' => 'Ruko',
                    'tanah' => 'Tanah',
                    'gudang' => 'Gudang',
                    'villa' => 'Villa',
                ])
                ->label('Tipe Properti'),
            Tables\Filters\SelectFilter::make('status')
                ->options([
                    'tersedia' => 'Tersedia',
                    'terjual' => 'Terjual',
                    'disewa' => 'Disewa',
                    'tersewa' => 'Tersewa',
                ])
                ->label('Status'),
            Tables\Filters\TernaryFilter::make('is_promo')
                ->label('Properti Promo'),
            ])
            ->actions([
            Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    // public static function getRelations(): array
    // {
    //     return [
    //         RelationManagers\GambarRelationManager::class,
    //     ];
    // }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPropertis::route('/'),
            'create' => Pages\CreateProperti::route('/create'),
            'edit' => Pages\EditProperti::route('/{record}/edit'),
            'view' => Pages\ViewProperti::route('/{record}'),
        ];
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Manajemen Properti';
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Infolists\Components\Section::make('Informasi Properti')
                    ->schema([
                        SpatieMediaLibraryImageEntry::make('gambar_properti')
                            ->label('Foto Utama')
                            ->collection('gambar_properti')
                            ->conversion('thumb')
                            ->height(300)
                            ->columnSpanFull(),
                        Infolists\Components\TextEntry::make('nama_properti')
                            ->label('Nama Properti'),
                        Infolists\Components\TextEntry::make('pemilik')
                            ->label('Pemilik'),
                        Infolists\Components\TextEntry::make('whatsapp_pemilik')
                            ->label('WhatsApp Pemilik')
                            ->url(fn($record) => "https://wa.me/{$record->whatsapp_pemilik}")
                            ->openUrlInNewTab(),
                        Infolists\Components\TextEntry::make('tipe_properti')
                            ->label('Tipe Properti')
                            ->formatStateUsing(fn(string $state): string => match ($state) {
                                'rumah' => 'Rumah',
                                'apartemen' => 'Apartemen',
                                'ruko' => 'Ruko',
                                'tanah' => 'Tanah',
                                'gudang' => 'Gudang',
                                'villa' => 'Villa',
                                default => $state,
                            }),
                        Infolists\Components\TextEntry::make('status')
                            ->badge()
                            ->color(fn(string $state): string => match ($state) {
                                'tersedia' => 'success',
                                'terjual' => 'danger',
                                'disewa' => 'warning',
                                'tersewa' => 'warning',
                                default => 'gray',
                            }),
                        Infolists\Components\TextEntry::make('harga')
                            ->label('Harga')
                            ->money('IDR')
                            ->suffix(fn($record) => match ($record->satuan_harga) {
                                'juta' => ' Juta',
                                'miliar' => ' Miliar',
                                'perbulan' => '/bulan',
                                'pertahun' => '/tahun',
                                default => '',
                            }),
                        Infolists\Components\IconEntry::make('is_promo')
                            ->boolean()
                            ->label('Promo'),
                    ])
                    ->columns(2),

                Infolists\Components\Section::make('Detail Properti')
                    ->schema([
                        Infolists\Components\TextEntry::make('deskripsi')
                            ->label('Deskripsi')
                            ->markdown()
                            ->columnSpanFull(),
                        Infolists\Components\TextEntry::make('lokasi')
                            ->label('Alamat')
                            ->columnSpanFull(),
                        Infolists\Components\TextEntry::make('jumlah_kamar')
                            ->label('Jumlah Kamar')
                            ->hidden(fn($record) => $record->tipe_properti === 'tanah'),
                        Infolists\Components\TextEntry::make('jumlah_kamar_mandi')
                            ->label('Jumlah Kamar Mandi')
                            ->hidden(fn($record) => $record->tipe_properti === 'tanah'),
                        Infolists\Components\TextEntry::make('jumlah_parkir')
                            ->label('Jumlah Parkir')
                            ->hidden(fn($record) => $record->tipe_properti === 'tanah'),
                        Infolists\Components\TextEntry::make('luas_bangunan')
                            ->label('Luas Bangunan')
                            ->suffix(' m²'),
                    ])
                    ->columns(2),

                Infolists\Components\Section::make('Galeri Properti')
                    ->schema([
                        SpatieMediaLibraryImageEntry::make('galeri')
                            ->collection('gambar_properti')
                            ->label('')
                            ->height(120)
                            ->columnSpanFull()
                            ->extraImgAttributes(['class' => 'grid grid-cols-3 gap-2']),
                    ]),

                Infolists\Components\Section::make('Lokasi di Peta')
                    ->schema([
                        MapEntry::make('location')
                            ->height('400px')
                            ->defaultLocation(function ($record) {
                                if ($record->latitude && $record->longitude) {
                                    return [$record->latitude, $record->longitude];
                                }
                                return [5.5480, 95.3222]; // Default to Banda Aceh
                            })
                            ->defaultZoom(15)
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
