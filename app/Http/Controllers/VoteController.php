<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vote;
use App\Models\Option;
use App\Models\Country;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class VoteController extends Controller
{

    public function show(Vote $vote): View
    {
        // Check if the user can view this vote
        if (!$this->canUserViewVote($vote)) {
            // Instead of redirecting, you can throw an exception or return a specific view
            abort(403, 'You are not allowed to view this vote.');
        }

        return view('votes.show', compact('vote'));
    }

    //     public function resultes()
    // {

    //     return view('votes.resultes');
    // }


    public function create()
    {
        $vetoCountries = ['United States', 'United Kingdom', 'France', 'Russia', 'China']; // List of veto power countries
        $supportiveCountries = Country::where('supportive', true)->get();
        $options = Option::all();

        // Separate veto countries from the supportive countries
        $vetoCountriesList = $supportiveCountries->filter(function ($country) use ($vetoCountries) {
            return in_array($country->name, $vetoCountries);
        });

        $otherSupportiveCountriesList = $supportiveCountries->filter(function ($country) use ($vetoCountries) {
            return !in_array($country->name, $vetoCountries);
        });

        // Merge the lists, with veto countries on top
        $sortedCountries = $vetoCountriesList->merge($otherSupportiveCountriesList);

        return view('vote', compact('options', 'sortedCountries'));
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
                'messageType' => 'error' 
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

        return redirect()->route('votes.show', $vote->id)->with([
            'message' => 'Your vote has been submitted successfully! Continue to step 5: download and send your declaration to the embassy.',
            'messageType' => 'success'
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
        $supportiveCountries = Country::where('supportive', true)->get();
        $options = Option::all();

        return view('profile.EditVote', compact('vote', 'options', 'supportiveCountries'));
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
        // Cast both IDs to integers for comparison
        return auth()->user()->id == $vote->user_id;
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

        // Render the view to HTML
        $html = view('votes.pdf', compact('vote'))->render();

        // Save the HTML to a file for debugging
        file_put_contents(storage_path('app/public/vote-details.html'), $html);

        // Set options to enable remote assets
        $options = [
            'isRemoteEnabled' => true,
        ];

        // Load a view into PDF
        $pdf = \PDF::setOptions($options)->loadHTML($html);
        return $pdf->download('vote-details-' . $vote->id . '.pdf');
    }

    public function updateActions(Request $request, Vote $vote)
    {
        \Log::info('Before Update:', $vote->toArray());
        \Log::info('Request Data:', $request->all());

        // Validate with updated rules
        $request->validate([
            'downloaded' => 'nullable|in:on',
            'sent_to_embassy' => 'nullable|in:on',
            'published_on_social_media' => 'nullable|in:on',
        ]);

        // Update the vote with proper handling of checkboxes
        $vote->update([
            'downloaded' => $request->has('downloaded'),
            'sent_to_embassy' => $request->has('sent_to_embassy'),
            'published_on_social_media' => $request->has('published_on_social_media'),
        ]);

        \Log::info('After Update:', $vote->fresh()->toArray());

        return redirect()->back()->with('success', 'Actions updated successfully!');
    }

}
