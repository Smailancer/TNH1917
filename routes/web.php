<?php

use App\Models\Vote;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PetitionController;
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
Route::get('/Results', function () {
    return view('votes.results');
})->name('results');

Route::get('/Story', function () {
    return view('story/before');
})->name('story');

Route::get('/After', function () {
    return view('story/after');
})->name('after');






Route::get('/Fallacies', function () {
    return view('fnf.fallacies');
})->name('fallacies');

Route::get('/Facts', function () {
    return view('fnf.facts');
})->name('facts');






// Route::get('/Numbers', function () {
//     return view('numbers');
// })->name('numbers');


Route::get('/Numbers', function () {
    return view('numbers/support');
})->name('numbers');

// Route::get('/Politics', function () {
//     return view('numbers/politics');
// })->name('politics');

Route::get('/Losses', function () {
    return view('numbers/losses');
})->name('losses');

Route::get('/Media', function () {
    return view('numbers/media');
})->name('media');

Route::get('/Army', function () {
    return view('numbers/army');
})->name('army');




Route::get('/Humans', function () {
    return view('humans/victims');
})->name('humans');

Route::get('/Injured', function () {
    return view('humans/injured');
})->name('injured');

Route::get('/famine', function () {
    return view('humans/famine');
})->name('famine');

Route::get('/Relatives', function () {
    return view('humans/relatives');
})->name('relatives');

Route::get('/Displaced', function () {
    return view('humans/displaced');
})->name('displaced');








Route::get('/Discussions', function () {
    return view('discussions');
})->name('discussions');

// Route::get('/DUN', function () {
//     return view('dun');
// })->name('DUN');

Route::get('/Support', function () {
    return view('support');
})->name('Support');


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

// Route::get('/votes/resultes', [VoteController::class, 'create'])->name('votes.resultes');

Route::post('/votes', [VoteController::class, 'store'])->name('votes.store');

Route::post('/subscribe', [NewsletterController::class, 'store']);

Route::get('/votes/{vote}/download', [VoteController::class, 'downloadPdf'])->name('votes.downloadPdf');

Route::get('/test-pdf-view', function () {
    $vote = App\Models\Vote::find(51); // Replace with an actual vote ID
    return view('votes.pdf', compact('vote'));
});

Route::get('/dun', [PetitionController::class, 'index'])->name('petition.index');
Route::post('/dun/sign', [PetitionController::class, 'sign'])->name('petition.sign');

Route::patch('/votes/{vote}/update-actions', [VoteController::class, 'updateActions'])->name('votes.updateActions');
require __DIR__.'/auth.php';
