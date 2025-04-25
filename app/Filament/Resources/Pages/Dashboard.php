<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\PropertiRequestsChart;
use App\Filament\Widgets\PropertiTypesPieChart;
use App\Filament\Widgets\RequestStatusChart;
use App\Filament\Widgets\RequestStatusDonutChart;
use App\Filament\Widgets\LatestProperti;
use App\Filament\Widgets\LatestPermintaanInfo;
use Filament\Pages\Dashboard as BaseDashboard;

class Dashboard extends BaseDashboard
{
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static ?string $navigationLabel = 'Dashboard';

    protected static ?string $title = 'Dashboard Properti';

    protected function getHeaderWidgets(): array
    {
        return [
            // PropertiRequestsChart::class,
        ];
    }

    protected function getFooterWidgets(): array
    {
        return [
            PropertiTypesPieChart::class,
            RequestStatusChart::class,
            // RequestStatusDonutChart::class,
            LatestProperti::class,
            LatestPermintaanInfo::class,
        ];
    }
}
