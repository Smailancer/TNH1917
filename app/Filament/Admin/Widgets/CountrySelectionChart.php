<?php

namespace App\Filament\Admin\Widgets;

use Filament\Widgets\BarChartWidget;
use App\Models\Country;
use Illuminate\Support\Facades\DB;

class CountrySelectionChart extends BarChartWidget
{
    protected static ?string $heading = 'Most Chosen Countries';

    protected function getData(): array
    {
        // Fetch top 10 countries based on vote counts
        $countrySelections = DB::table('votes')
            ->select('country_id', DB::raw('count(*) as total'))
            ->groupBy('country_id')
            ->orderByDesc('total')
            ->limit(10)
            ->get();

        // Retrieve country names
        $countries = Country::whereIn('id', $countrySelections->pluck('country_id'))
            ->pluck('name', 'id');

        return [
            'datasets' => [
                [
                    'label' => 'Number of Selections',
                    'data' => $countrySelections->pluck('total'),
                    'backgroundColor' => 'rgba(75, 192, 192, 0.5)',
                    'borderColor' => 'rgba(75, 192, 192, 1)',
                    'borderWidth' => 1,
                ],
            ],
            'labels' => $countrySelections->map(function ($selection) use ($countries) {
                return $countries[$selection->country_id] ?? 'Unknown';
            })->toArray(),
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
                    'text' => 'Top 10 Countries Recognizing the Zionist Entity',
                ],
            ],
            'scales' => [
                'y' => [
                    'beginAtZero' => true,
                    'title' => [
                        'display' => true,
                        'text' => 'Number of Selections',
                    ],
                ],
                'x' => [
                    'title' => [
                        'display' => true,
                        'text' => 'Countries',
                    ],
                ],
            ],
        ];
    }
}
