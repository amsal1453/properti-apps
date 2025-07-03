<?php

namespace App\Filament\Widgets;

use App\Models\PermintaanInfo;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestPermintaanInfo extends BaseWidget
{
    protected static ?int $sort = 8;

    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->heading('Permintaan Informasi Terbaru')
            ->description('Daftar permintaan informasi yang baru masuk')
            ->recordUrl(fn(PermintaanInfo $record): string => route('filament.admin.resources.permintaan-infos.edit', $record))
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('properti.nama_properti')
                    ->label('Properti')
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'pending' => 'warning',
                        'diproses' => 'info',
                        'selesai' => 'success',
                        'dibatalkan' => 'danger',
                        default => 'gray',
                    }),
            Tables\Columns\TextColumn::make('created_at')
                    ->label('Tanggal Kirim')
                    ->dateTime()
                    ->sortable(),
            ])
            ->actions([
                Tables\Actions\Action::make('view')
                    ->label('Lihat')
                    ->url(fn(PermintaanInfo $record): string => route('filament.admin.resources.permintaan-infos.edit', $record))
                    ->icon('heroicon-m-eye'),
            ])
            ->defaultSort('created_at', 'desc')
            ->paginated([5, 10, 25])
            ->query(PermintaanInfo::query()->latest('created_at')->limit(5));
    }
}
