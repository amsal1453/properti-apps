<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GambarPropertiResource\Pages;
use App\Filament\Resources\GambarPropertiResource\RelationManagers;
use App\Models\GambarProperti;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GambarPropertiResource extends Resource
{
    protected static ?string $model = GambarProperti::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationLabel = 'Galeri Properti';

    protected static ?string $modelLabel = 'Gambar Properti';

    protected static ?string $pluralModelLabel = 'Galeri Properti';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('properti_id')
                    ->relationship('properti', 'nama_properti')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->label('Properti'),
                Forms\Components\FileUpload::make('file_path')
                    ->image()
                    ->imageEditor()
                    ->required()
                    ->directory('properti-images')
                    ->label('Gambar'),
                Forms\Components\Textarea::make('keterangan')
                    ->maxLength(65535)
                    ->columnSpanFull()
                    ->label('Keterangan'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('properti.nama_properti')
                    ->label('Properti')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\ImageColumn::make('file_path')
                    ->label('Gambar')
                    ->square()
                    ->size(100),
                Tables\Columns\TextColumn::make('keterangan')
                    ->searchable()
                    ->limit(50),
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
                Tables\Filters\SelectFilter::make('properti')
                    ->relationship('properti', 'nama_properti')
                    ->searchable()
                    ->preload()
                    ->label('Filter Properti'),
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGambarPropertis::route('/'),
            'create' => Pages\CreateGambarProperti::route('/create'),
            'view' => Pages\ViewGambarProperti::route('/{record}'),
            'edit' => Pages\EditGambarProperti::route('/{record}/edit'),
        ];
    }
}
