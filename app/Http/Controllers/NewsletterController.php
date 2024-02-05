<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsletterSubscriber;

class NewsletterController extends Controller
{

    public function store(Request $request)
{

    $customMessages = [
        'email.unique' => 'This email is already subscribed to the newsletter.',

    ];


    $validatedData = $request->validate([
        'email' => 'required|email|unique:newsletter_subscribers,email',
        'name' => 'nullable|string'
    ]);

    $subscriber = NewsletterSubscriber::create($validatedData + ['subscribed_at' => now()]);

    // Additional logic like sending a confirmation email

    return redirect()->back()->with('success', 'You have successfully subscribed to the newsletter!');
}

}
