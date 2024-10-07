<?php

namespace App\Livewire;

use Livewire\Component;

class TestChart extends Component
{
    public $labels = [];
    public $data = [];
    public $backgroundColor = [];
    public $borderColor = [];
    public $options = [];

    public function mount()
    {
        // Hardcoded data for testing
        $this->labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July'];
        $this->data = [65, 59, 80, 81, 56, 55, 40];
        $this->backgroundColor = [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(199, 199, 199, 0.2)',
        ];
        $this->borderColor = [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)',
            'rgba(159, 159, 159, 1)',
        ];
        $this->options = [
            'responsive' => true,
            'maintainAspectRatio' => false,
            'plugins' => [
                'legend' => [
                    'position' => 'top',
                ],
                'title' => [
                    'display' => true,
                    'text' => 'Sample Bar Chart',
                ],
            ],
            'scales' => [
                'y' => [
                    'beginAtZero' => true,
                    'title' => [
                        'display' => true,
                        'text' => 'Values',
                    ],
                ],
                'x' => [
                    'title' => [
                        'display' => true,
                        'text' => 'Months',
                    ],
                ],
            ],
        ];
    }

    public function render()
    {
        return view('livewire.test-chart');
    }
}
