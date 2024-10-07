<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Vote;
use Illuminate\Support\Facades\DB;
use App\Models\Country;

class LandAllocationChart extends Component
{
    public $labels = [];
    public $averagePercentages = [];
    public $declarationCounts = [];

    public function mount()
    {
        $this->fetchData();
    }

    public function fetchData()
    {
        // Fetch data for average percentages and declaration counts
        $countryData = Vote::select('country_id', DB::raw('AVG(percentage) as average_percentage'), DB::raw('COUNT(*) as declaration_count'))
            ->groupBy('country_id')
            ->get();

        // Get country names
        $countryIds = $countryData->pluck('country_id');
        $countries = Country::whereIn('id', $countryIds)->pluck('name', 'id');

        $this->labels = $countryData->map(function ($data) use ($countries) {
            return $countries[$data->country_id] ?? 'Unknown';
        })->toArray();

        $this->averagePercentages = $countryData->pluck('average_percentage')->map(function($val){
            return round($val, 2);
        })->toArray();

        $this->declarationCounts = $countryData->pluck('declaration_count')->toArray();


    }

    public function render()
    {
        return view('livewire.land-allocation-chart');
    }
}
