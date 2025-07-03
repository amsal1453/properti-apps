<?php

namespace App\Filament\Widgets;

use App\Models\PermintaanInfo;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;

class RequestStatusChart extends ChartWidget
{
    protected static ?string $heading = 'Tren Status Permintaan';

    protected static ?int $sort = 3;

    protected int | string | array $columnSpan = '1/2';

    protected function getData(): array
    {
        // Get data for the last 6 months
        $months = collect();
        $pendingData = collect();
        $diprosesData = collect();
        $selesaiData = collect();
        $dibatalkanData = collect();

        // Create date objects for the last 6 months
        for ($i = 5; $i >= 0; $i--) {
            $date = Carbon::now()->subMonths($i);
            $months->push($date->format('M Y'));

            // Count pending requests
            $pendingCount = PermintaanInfo::where('status', 'pending')
                ->whereMonth('created_at', $date->month)
                ->whereYear('created_at', $date->year)
                ->count();
            $pendingData->push($pendingCount);

            // Count in-progress requests
            $diprosesCount = PermintaanInfo::where('status', 'diproses')
                ->whereMonth('created_at', $date->month)
                ->whereYear('created_at', $date->year)
                ->count();
            $diprosesData->push($diprosesCount);

            // Count completed requests
            $selesaiCount = PermintaanInfo::where('status', 'selesai')
                ->whereMonth('created_at', $date->month)
                ->whereYear('created_at', $date->year)
                ->count();
            $selesaiData->push($selesaiCount);

            // Count cancelled requests
            $dibatalkanCount = PermintaanInfo::where('status', 'dibatalkan')
                ->whereMonth('created_at', $date->month)
                ->whereYear('created_at', $date->year)
                ->count();
            $dibatalkanData->push($dibatalkanCount);
        }

        return [
            'datasets' => [
                [
                    'label' => 'Pending',
                    'data' => $pendingData->toArray(),
                    'borderColor' => 'rgb(234, 179, 8)', // Yellow
                    'backgroundColor' => 'rgba(234, 179, 8, 0.1)',
                    'tension' => 0.2,
                ],
                [
                    'label' => 'Diproses',
                    'data' => $diprosesData->toArray(),
                    'borderColor' => 'rgb(59, 130, 246)', // Blue
                    'backgroundColor' => 'rgba(59, 130, 246, 0.1)',
                    'tension' => 0.2,
                ],
                [
                    'label' => 'Selesai',
                    'data' => $selesaiData->toArray(),
                    'borderColor' => 'rgb(16, 185, 129)', // Green
                    'backgroundColor' => 'rgba(16, 185, 129, 0.1)',
                    'tension' => 0.2,
                ],
                [
                    'label' => 'Dibatalkan',
                    'data' => $dibatalkanData->toArray(),
                    'borderColor' => 'rgb(239, 68, 68)', // Red
                    'backgroundColor' => 'rgba(239, 68, 68, 0.1)',
                    'tension' => 0.2,
                ],
            ],
            'labels' => $months->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }

    protected function getOptions(): array
    {
        return [
            'plugins' => [
                'legend' => [
                    'position' => 'bottom',
                ],
            ],
            'scales' => [
                'y' => [
                    'beginAtZero' => true,
                    'ticks' => [
                        'precision' => 0,
                    ],
                ],
            ],
        ];
    }
}
