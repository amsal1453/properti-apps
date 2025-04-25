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
                Forms\Components\Card::make()
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
                    ])->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_properti')
                    ->searchable()
                    ->sortable()
                    ->label('Nama Properti'),
                Tables\Columns\TextColumn::make('lokasi')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pemilik')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tipe_properti')
                    ->searchable()
                    ->sortable()
                    ->label('Tipe Properti'),
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
                //
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPropertis::route('/'),
            'create' => Pages\CreateProperti::route('/create'),
            'edit' => Pages\EditProperti::route('/{record}/edit'),
        ];
    }
}
