<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


// Pages -------------------------------------------------------------------------------------------
Route::view('/', 'pages.home', ['active' => 'home']);
Route::view('/portfolio', 'pages.portfolio', ['active' => 'portfolio']);
Route::view('/events', 'pages.events', ['active' => 'events']);
Route::view('/contact', 'pages.contact', ['active' => 'contact']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/view-event/{id}', [EventController::class, 'viewEvent']);
// -------------------------------------------------------------------------------------------------


// Controllers -------------------------------------------------------------------------------------
Route::get('/local-image/{imageName}', [ImageController::class, 'displayLocalImage']);

Route::post('/send-mail', [MailController::class, 'sendMail']);

Route::post('/new-event', [EventController::class, 'createEvent'])->middleware('auth', 'verified');
Route::post('/edit-event', [EventController::class, 'editEvent'])->middleware('auth', 'verified');
Route::post('/delete-event', [EventController::class, 'deleteEvent'])->middleware('auth', 'verified');
// -------------------------------------------------------------------------------------------------

// Profile -----------------------------------------------------------------------------------------
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// -------------------------------------------------------------------------------------------------

require __DIR__.'/auth.php';
