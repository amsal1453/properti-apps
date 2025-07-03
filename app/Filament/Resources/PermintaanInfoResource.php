<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PermintaanInfoResource\Pages;
use App\Filament\Resources\PermintaanInfoResource\RelationManagers;
use App\Models\PermintaanInfo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PermintaanInfoResource extends Resource
{
    protected static ?string $model = PermintaanInfo::class;

    protected static ?string $navigationIcon = 'heroicon-o-inbox';

    protected static ?string $navigationLabel = 'Permintaan Informasi';

    protected static ?string $modelLabel = 'Permintaan Informasi';

    protected static ?string $pluralModelLabel = 'Permintaan Informasi';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->required()
                ->maxLength(255)
                ->label('Nama Lengkap'),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
            Forms\Components\TextInput::make('nomor_telepon')
                ->tel()
                ->label('Nomor Telepon')
                ->maxLength(20),
            Forms\Components\TextInput::make('subjek')
                ->label('Subjek')
                ->maxLength(255),
                Forms\Components\Textarea::make('pesan')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\Select::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'diproses' => 'Sedang Diproses',
                        'selesai' => 'Selesai',
                        'dibatalkan' => 'Dibatalkan'
                    ])
                    ->required()
                ->default('pending'),
                Forms\Components\Select::make('properti_id')
                    ->relationship('properti', 'nama_properti')
                ->nullable()
                    ->searchable()
                    ->preload()
                    ->label('Properti'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                ->label('Nama Lengkap')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable()
                    ->sortable(),
            Tables\Columns\TextColumn::make('nomor_telepon')
                ->label('Nomor Telepon')
                ->searchable(),
            Tables\Columns\TextColumn::make('subjek')
                ->searchable(),
                Tables\Columns\TextColumn::make('properti.nama_properti')
                    ->label('Properti')
                    ->searchable()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\SelectColumn::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'diproses' => 'Sedang Diproses',
                        'selesai' => 'Selesai',
                        'dibatalkan' => 'Dibatalkan'
                    ])
                ->sortable(),
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
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'diproses' => 'Sedang Diproses',
                        'selesai' => 'Selesai',
                        'dibatalkan' => 'Dibatalkan'
                    ]),
            Tables\Filters\Filter::make('created_at')
                    ->form([
                        Forms\Components\DatePicker::make('from'),
                        Forms\Components\DatePicker::make('until'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['from'],
                    fn(Builder $query, $date): Builder => $query->whereDate('created_at', '>=', $date),
                            )
                            ->when(
                                $data['until'],
                    fn(Builder $query, $date): Builder => $query->whereDate('created_at', '<=', $date),
                            );
                    })
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
            'index' => Pages\ListPermintaanInfos::route('/'),
            'create' => Pages\CreatePermintaanInfo::route('/create'),
            'edit' => Pages\EditPermintaanInfo::route('/{record}/edit'),
        ];
    }
}
