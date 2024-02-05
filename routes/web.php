<?php

use App\Models\Vote;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NewsletterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/Story', function () {
    return view('story');
})->name('story');

Route::get('/Numbers', function () {
    return view('numbers');
})->name('numbers');

Route::get('/Not_Numbers', function () {
    return view('not numbers');
})->name('not_numbers');

Route::get('/Fallacies', function () {
    return view('fallacies');
})->name('fallacies');

Route::get('/Discussions', function () {
    return view('discussions');
})->name('discussions');

Route::get('/DUN', function () {
    return view('DUN');
})->name('DUN');

Route::get('/Support', function () {
    return view('Support');
})->name('Support');

// Route::get('/vote', function () {
//     return view('vote');
// })->name('vote');

// Route::get('/', function () {
//     return view('vote');
// })->name('vote');

// Route::get('/', function () {
//     return view('vote');
// })->middleware(['auth', 'verified'])->name('vote');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/votes/{vote}', [VoteController::class, 'show'])->name('votes.show');
    // Route::get('/votes/{vote}', 'VoteController@show')->name('votes.show');
    Route::put('/editVote/{vote}', [VoteController::class, 'update'])->name('vote.update');
    Route::delete('/editVote/{vote}', [VoteController::class, 'destroy'])->name('vote.destroy');
});

Route::get('/', [VoteController::class, 'create'])->name('/');
Route::post('/votes', [VoteController::class, 'store'])->name('votes.store');

Route::post('/subscribe', [NewsletterController::class, 'store']);

require __DIR__.'/auth.php';
