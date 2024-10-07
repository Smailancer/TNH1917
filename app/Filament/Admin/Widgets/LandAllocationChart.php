<?php

namespace App\Filament\Admin\Widgets;

use Filament\Widgets\PieChartWidget;
use App\Models\Vote;
use Illuminate\Support\Facades\DB;

class LandAllocationChart extends PieChartWidget
{
    protected static ?string $heading = 'Land Allocation Distribution';

    protected function getData(): array
    {
        // Define bins for land percentage ranges
        $bins = [
            '0-10%',
            '11-20%',
            '21-30%',
            '31-40%',
            '41-50%',
            '51-60%',
            '61-70%',
            '71-80%',
            '81-90%',
            '91-100%',
        ];

        // Initialize counts
        $counts = array_fill(0, count($bins), 0);

        // Fetch land allocation percentages
        $allocations = Vote::pluck('percentage')->toArray();

        // Assign allocations to bins
        foreach ($allocations as $percentage) {
            $index = floor($percentage / 10);
            if ($index >= count($bins)) {
                $index = count($bins) - 1;
            }
            $counts[$index]++;
        }

        return [
            'datasets' => [
                [
                    'data' => $counts,
                    'backgroundColor' => [
                        '#FF6384',
                        '#36A2EB',
                        '#FFCE56',
                        '#4BC0C0',
                        '#9966FF',
                        '#FF9F40',
                        '#C9CBCF',
                        '#FFCD56',
                        '#4BC0C0',
                        '#36A2EB',
                    ],
                ],
            ],
            'labels' => $bins,
        ];
    }

    protected function getOptions(): array
    {
        return [
            'responsive' => true,
            'maintainAspectRatio' => false,
            'plugins' => [
                'legend' => [
                    'position' => 'right',
                ],
                'title' => [
                    'display' => true,
                    'text' => 'Distribution of Land Percentages Allocated to Israel',
                ],
            ],
        ];
    }
}
