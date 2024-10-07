<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Option;
use Illuminate\Support\Facades\DB;

class DecisionFrequencyChart extends Component
{
    public $labels = [];
    public $data = [];
    public $backgroundColor = [];
    public $borderColor = [];
    public $options = [];

    public function mount()
    {
        $this->fetchData();
    }

    public function fetchData()
    {
        // Fetch all decision categories
        $categories = Option::select('category')->distinct()->pluck('category')->toArray();

        $this->labels = $categories;
        $this->data = [];
        $this->backgroundColor = [];
        $this->borderColor = [];

        // Define colors for categories
        $colorMap = [
            'Economic' => ['background' => 'rgba(255, 99, 132, 0.5)', 'border' => 'rgba(255, 99, 132, 1)'],
            'Social' => ['background' => 'rgba(54, 162, 235, 0.5)', 'border' => 'rgba(54, 162, 235, 1)'],
            'Political' => ['background' => 'rgba(255, 206, 86, 0.5)', 'border' => 'rgba(255, 206, 86, 1)'],
            'Legal' => ['background' => 'rgba(75, 192, 192, 0.5)', 'border' => 'rgba(75, 192, 192, 1)'],
            'Law Enforcement' => ['background' => 'rgba(153, 102, 255, 0.5)', 'border' => 'rgba(153, 102, 255, 1)'],
            'Propaganda' => ['background' => 'rgba(201, 203, 207, 0.5)', 'border' => 'rgba(201, 203, 207, 1)'],
            'Cyber Warfare' => ['background' => 'rgba(255, 159, 64, 0.5)', 'border' => 'rgba(255, 159, 64, 1)'],
            'Military' => ['background' => 'rgba(54, 162, 235, 0.5)', 'border' => 'rgba(54, 162, 235, 1)'],
            // Add more categories and colors as needed
        ];

        foreach ($categories as $category) {
            $frequency = DB::table('option_vote')
                ->join('options', 'option_vote.option_id', '=', 'options.id')
                ->where('options.category', $category)
                ->count();

            $this->data[] = $frequency;
            $this->backgroundColor[] = $colorMap[$category]['background'] ?? 'rgba(0,0,0,0.5)';
            $this->borderColor[] = $colorMap[$category]['border'] ?? 'rgba(0,0,0,1)';
        }

        $this->options = [
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

    public function render()
    {
        return view('livewire.decision-frequency-chart');
    }
}