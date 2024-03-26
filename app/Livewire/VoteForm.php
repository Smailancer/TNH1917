<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Vote;
use App\Models\Country;
use App\Models\Option;
use Illuminate\Support\Facades\Auth;

class VoteForm extends Component
{
    public $countries;
    public $options;
    public $country_id;
    public $percentage = 50; // Default percentage
    public $selectedOptions = [];
    public $notes;
    public $countryCode;


    public function mount()
    {
        $this->countries = Country::all();
        $this->options = Option::all();
    }

    public function render()
    {
        return view('livewire.vote-form');
    }

        public function updatedCountryId($country_id)
    {
        $country = Country::find($country_id);
        $this->countryCode = $country ? $country->code : null;
    }

    public function submit()
    {
        $this->validate([
            'country_id' => 'required|exists:countries,id',
            'percentage' => 'required|numeric|min:0|max:100',
            'selectedOptions' => 'required|array',
            'notes' => 'nullable|string',
        ]);

        if (!auth()->check()) {
            // Add an error message to be displayed on the current page
            session()->flash('error', 'You must be logged in to vote.');
            // Redirect to the login page
            $this->redirect(route('login'));
            return; // Ensure no further code execution after redirect
        }
        if (Auth::user()->hasVoted()) {
            // Using flash message or another method to notify user they've already voted
            session()->flash('error', 'You have already voted. You cannot vote again.');
            return;
        }

        $vote = Vote::create([
            'user_id' => Auth::id(),
            'country_id' => $this->country_id,
            'percentage' => $this->percentage,
            'notes' => $this->notes,
        ]);

        $vote->options()->attach($this->selectedOptions);

        session()->flash('success', 'Vote submitted successfully!');
        $this->resetForm();
    }

    private function resetForm()
    {
        $this->country_id = null;
        $this->percentage = 50;
        $this->selectedOptions = [];
        $this->notes = null;
    }
}
