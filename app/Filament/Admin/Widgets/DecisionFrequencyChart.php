<?php

namespace App\Filament\Admin\Widgets;

use Filament\Widgets\BarChartWidget;
use App\Models\Option;
use Illuminate\Support\Facades\DB;

class DecisionFrequencyChart extends BarChartWidget
{
    protected static ?string $heading = 'Frequency of Decisions with Indigenous People';

    protected function getData(): array
    {
        // Fetch all decision categories
        $categories = Option::select('category')->distinct()->pluck('category')->toArray();

        // Initialize counts
        $counts = [];

        foreach ($categories as $category) {
            $frequency = DB::table('option_vote')
                ->join('options', 'option_vote.option_id', '=', 'options.id')
                ->where('options.category', $category)
                ->count();

            $counts[] = $frequency;
        }

        return [
            'datasets' => [
                [
                    'label' => 'Decision Frequency',
                    'data' => $counts,
                    'backgroundColor' => 'rgba(54, 162, 235, 0.5)',
                    'borderColor' => 'rgba(54, 162, 235, 1)',
                    'borderWidth' => 1,
                ],
            ],
            'labels' => $categories,
        ];
    }

    protected function getOptions(): array
    {
        return [
            'responsive' => true,
            'maintainAspectRatio' => false,
            'plugins' => [
                'legend' => [
                    'position' => 'top',
                ],
                'title' => [
                    'display' => true,
                    'text' => 'Decisions Made with Indigenous People by Category',
                ],
            ],
            'scales' => [
                'y' => [
                    'beginAtZero' => true,
                    'title' => [
                        'display' => true,
                        'text' => 'Number of Decisions',
                    ],
                ],
                'x' => [
                    'title' => [
                        'display' => true,
                        'text' => 'Decision Categories',
                    ],
                ],
            ],
        ];
    }
}
