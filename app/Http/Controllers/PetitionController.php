<?php

namespace App\Http\Controllers;

use App\Models\Signature;
use App\Models\Country;
use Illuminate\Http\Request;

class PetitionController extends Controller
{
    // Display the petition page
    public function index()
    {
        // Hardcoded petition details
        $petition = [
            'title' => 'Decentralized United Nations',
            'description' => 'A petition to decentralize the United Nations using blockchain technology.',
            'goal' => 10000000, // Example: goal of 10 million signatures
        ];

        // Retrieve the number of signatures
        $signatureCount = Signature::count();

        // Calculate the progress percentage based on the goal
        $progress = ($signatureCount / $petition['goal']) * 100;

        // Retrieve the list of countries from the database, excluding the specific country
        $countries = Country::where('code', '!=', 'NIL')->get();

        // Count unique countries that have signed the petition
        $countryCount = Signature::distinct('country_id')->count('country_id');

        // Pass the petition data, signature count, progress, and country count to the view
        return view('dun', compact('petition', 'signatureCount', 'progress', 'countries', 'countryCount'));
    }

    // Handle petition signing
    public function sign(Request $request)
    {

        $messages = [
            'email.unique' => 'You have already signed the petition before.',
        ];
    
        // Validate the request input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:signatures,email',
            'country_id' => 'required|exists:countries,id',
            'receive_updates' => 'nullable|in:on,0',
        ], $messages);

        $validated['receive_updates'] = $request->has('receive_updates') ? true : false;


        // dd($validated);
        // Create a new signature
        Signature::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'country_id' => $validated['country_id'],
            'receive_updates' => $request->has('receive_updates'), // Check if updates checkbox was selected
        ]);
        // Redirect back to the petition page with a success message
        return redirect()->route('petition.index')->with('success', 'Thank you for signing the petition!');
    }
}
