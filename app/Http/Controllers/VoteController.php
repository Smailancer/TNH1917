<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use App\Models\User;
use App\Models\Option;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Barryvdh\DomPDF\Facade\Pdf;


class VoteController extends Controller
{

    public function show(Vote $vote): View
{
    // Additional logic to check if the user can view this vote, e.g., ownership check
    if (!$this->canUserViewVote($vote)) {
        return redirect()->back()->withErrors('You are not allowed to view this vote.');
    }

    return view('votes.show', compact('vote'));
}

//     public function resultes()
// {

//     return view('votes.resultes');
// }


    public function create()
    {
        $countries = Country::all();
        $options = Option::all();

        return view('vote', compact('options', 'countries'));
    }

    public function store(Request $request)
    {
        if (!auth()->check()) {
            return redirect()->route('login')->with([
                'message' => 'You must be a balfour to vote, log in to be one of them.',
                'messageType' => 'error'
            ]);
        }

        $validated = $request->validate([
            'country_id' => 'required|exists:countries,id',
            'percentage' => 'required|numeric|min:0|max:100',
            'options' => 'required|array',
            'notes' => 'nullable|string',
        ]);

        if (auth()->user()->hasVoted()) {
            return redirect()->back()->with([
                'message' => 'You have already voted. You cannot vote again, check your vote details in you profile.',
                'messageType' => 'info' // Ensure this matches the types your component expects
            ]);
        }


        $vote = new Vote([
            'user_id' => auth()->id(),
            'country_id' => $validated['country_id'],
            'percentage' => $validated['percentage'],
            'notes' => $validated['notes'],
        ]);

        $vote->save();

        // Attach selected options to the vote
        $vote->options()->attach($validated['options']);

        return redirect()->back()->with([
            'message' => 'Your Vote has been submitted successfully!',
            'messageType' => 'success' // Ensure this matches the types your component expects
        ]);
    }

    /**
     * Show the form for editing the specified vote.
     *
     * @param  \App\Models\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function edit(Vote $vote): View
    {
        // Assuming you want to use the same view as 'create' for editing
        $countries = Country::all();
        $options = Option::all();

        return view('profile.EditVote', compact('vote', 'options', 'countries'));
    }

    /**
     * Update the specified vote in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vote $vote)
    {
        $validated = $request->validate([
            'country_id' => 'required|exists:countries,id|numeric|min:0',
            'percentage' => 'required|numeric|min:0|max:100',
            'options' => 'required|array',
            'notes' => 'nullable|string',
        ]);

        // Additional logic to check if the user can update this vote, e.g., ownership check
        if (!$this->canUserUpdateVote($vote)) {
            return redirect()->back()->withErrors('You are not allowed to update this vote.');
        }

        $vote->update([
            'country_id' => $validated['country_id'],
            'percentage' => $validated['percentage'],
            'notes' => $validated['notes'],
        ]);

        // Sync the options
        $vote->options()->sync($validated['options']);

        return redirect()->back()->withSuccess('Vote updated successfully!');
    }

    /**
     * Remove the specified vote from storage.
     *
     * @param  \App\Models\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vote $vote)
    {
        // Additional logic to check if the user can delete this vote, e.g., ownership check
        if (!$this->canUserDeleteVote($vote)) {
            return redirect()->back()->withErrors('You are not allowed to delete this vote.');
        }

        $vote->delete();

        return redirect()->back()->withSuccess('Vote deleted successfully!');
    }



        /**
     * Check if the user can view the vote.
     *
     * @param  \App\Models\Vote  $vote
     * @return bool
     */
    protected function canUserViewVote(Vote $vote)
    {
        // Implement your logic here, e.g., check if the user owns the vote
        return auth()->user()->id === $vote->user_id;
    }
    /**
     * Check if the user can update the vote.
     *
     * @param  \App\Models\Vote  $vote
     * @return bool
     */
    protected function canUserUpdateVote(Vote $vote)
    {
        // Implement your logic here, e.g., check if the user owns the vote
        return auth()->user()->id === $vote->user_id;
    }

    /**
     * Check if the user can delete the vote.
     *
     * @param  \App\Models\Vote  $vote
     * @return bool
     */
    protected function canUserDeleteVote(Vote $vote)
    {
        // Implement your logic here, e.g., check if the user owns the vote
        return auth()->user()->id === $vote->user_id;
    }


    public function downloadPdf(Vote $vote)
{
    // Check if the user is authorized to download the vote details
    if (!$this->canUserViewVote($vote)) {
        return redirect()->back()->withErrors('You are not allowed to download this vote.');
    }

    // Load a view into PDF
    $pdf = PDF::loadView('votes.pdf', compact('vote'));
    return $pdf->download('vote-details-' . $vote->id . '.pdf');
}

}
