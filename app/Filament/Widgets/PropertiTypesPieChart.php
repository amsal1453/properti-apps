<?php

namespace App\Filament\Widgets;

use App\Models\Properti;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class PropertiTypesPieChart extends ChartWidget
{
    protected static ?string $heading = 'Distribusi Tipe Properti';

    protected static ?int $sort = 2;

    protected int | string | array $columnSpan = '1/2';

    protected function getData(): array
    {
        $propertiTypes = Properti::select('tipe_properti', DB::raw('count(*) as total'))
            ->groupBy('tipe_properti')
            ->get();

        $labels = $propertiTypes->pluck('tipe_properti')->toArray();
        $data = $propertiTypes->pluck('total')->toArray();

        // Generate colors programmatically
        $backgroundColor = [];
        $borderColor = [];

        foreach ($labels as $index => $label) {
            // Create different colors for each type
            $hue = ($index * 137) % 360; // Golden angle to get visually distinct colors
            $backgroundColor[] = "hsla({$hue}, 70%, 60%, 0.7)";
            $borderColor[] = "hsl({$hue}, 70%, 50%)";
        }

        return [
            'datasets' => [
                [
                    'label' => 'Tipe Properti',
                    'data' => $data,
                    'backgroundColor' => $backgroundColor,
                    'borderColor' => $borderColor,
                    'borderWidth' => 1,
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }

    protected function getOptions(): array
    {
        return [
            'plugins' => [
                'legend' => [
                    'position' => 'bottom',
                ],
            ],
        ];
    }
}
