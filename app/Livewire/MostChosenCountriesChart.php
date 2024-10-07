<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Country;
use App\Models\Vote;
use Illuminate\Support\Facades\DB;

class MostChosenCountriesChart extends Component
{
    public $labels = [];
    public $data = [];
    public $backgroundColor = [];

    public function mount()
    {
        $this->fetchData();
    }

    public function fetchData()
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

        $this->labels = $countrySelections->map(function ($selection) use ($countries) {
            return $countries[$selection->country_id] ?? 'Unknown';
        })->toArray();

        $this->data = $countrySelections->pluck('total')->toArray();

        // Set colors for the bars
        $this->backgroundColor = array_fill(0, count($this->data), 'rgba(75, 192, 192, 0.5)');
    }

    public function render()
    {
        return view('livewire.most-chosen-countries-chart');
    }
}
