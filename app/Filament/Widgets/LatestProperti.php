<?php

namespace App\Filament\Widgets;

use App\Models\Properti;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestProperti extends BaseWidget
{
    protected static ?int $sort = 7;

    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->heading('Properti Terbaru')
            ->description('Daftar properti yang baru ditambahkan')
            ->recordUrl(fn(Properti $record): string => route('filament.admin.resources.propertis.edit', $record))
            ->columns([
                Tables\Columns\TextColumn::make('nama_properti')
                    ->label('Nama Properti')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('lokasi')
                    ->label('Lokasi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tipe_properti')
                    ->label('Tipe')
                    ->badge(),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'tersedia' => 'success',
                        'terjual' => 'danger',
                        'tersewa' => 'warning',
                        default => 'gray',
                    }),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Ditambahkan')
                    ->dateTime()
                    ->sortable(),
            ])
            ->actions([
                Tables\Actions\Action::make('view')
                    ->label('Lihat')
                    ->url(fn(Properti $record): string => route('filament.admin.resources.propertis.edit', $record))
                    ->icon('heroicon-m-eye'),
            ])
            ->defaultSort('created_at', 'desc')
            ->paginated([5, 10, 25])
            ->query(Properti::query()->latest()->limit(5));
    }
}
