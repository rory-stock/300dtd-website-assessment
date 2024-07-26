<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Resend\Laravel\Facades\Resend;


// Pages -------------------------------------------------------------------------------------------
Route::view('/', 'pages.home', ['active' => 'home']);
Route::view('/portfolio', 'pages.portfolio', ['active' => 'portfolio']);
Route::view('/events', 'pages.events', ['active' => 'events']);
Route::view('/contact', 'pages.contact', ['active' => 'contact']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
// -------------------------------------------------------------------------------------------------


// Controllers -------------------------------------------------------------------------------------
Route::get('/local-image/{imageName}', [ImageController::class, 'displayLocalImage']);

Route::post('/send-mail', [MailController::class, 'sendMail']);

// Route::get('/r2-image/{imageName}', [ImageController::class, 'displayR2Image']);
// -------------------------------------------------------------------------------------------------

// Profile -----------------------------------------------------------------------------------------
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// -------------------------------------------------------------------------------------------------

require __DIR__.'/auth.php';
