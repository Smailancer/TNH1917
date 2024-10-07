<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;
use App\Filament\Widgets\LandAllocationChart;
use App\Filament\Widgets\CountrySelectionChart;


class Dashboard extends BaseDashboard
{
    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static ?string $title = 'Dashboard';
    protected static bool $shouldRegisterNavigation = false;

    protected function getWidgets(): array
    {
        return [
            // Widgets will be listed here
            CountrySelectionChart::class,
            LandAllocationChart::class,

        ];
    }
}
