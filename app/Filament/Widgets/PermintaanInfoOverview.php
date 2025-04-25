<?php

namespace App\Filament\Widgets;

use App\Models\PermintaanInfo;
use App\Models\Properti;
use App\Models\Article;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PermintaanInfoOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Properti', Properti::count())
                ->description('Jumlah seluruh properti')
                ->descriptionIcon('heroicon-m-home')
                ->color('success'),

            Stat::make('Total Article', Article::count())
                ->description('Jumlah seluruh artikel')
                ->descriptionIcon('heroicon-m-document-text')
                ->color('primary'),

            Stat::make('Total Permintaan', PermintaanInfo::count())
                ->description('Jumlah seluruh permintaan informasi')
                ->descriptionIcon('heroicon-m-envelope')
                ->color('warning'),
        ];
    }
}
