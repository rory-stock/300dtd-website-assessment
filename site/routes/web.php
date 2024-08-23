<?php

// Importing the controllers
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\RouteController;

use Illuminate\Support\Facades\Route;

// Pages -------------------------------------------------------------------------------------------
Route::get('/', [RouteController::class, 'home']);
Route::get('/events', function () {
    return view('pages.events')
        ->with('active', 'events');
});
Route::get('/contact', function () {
    return view('pages.contact')
        ->with('active', 'contact');
});
Route::get('/view-event/{id}', [RouteController::class, 'viewEvent']);
// -------------------------------------------------------------------------------------------------

// Auth ---------------------------------------------------------------------------------------------
Route::get('/login', function () {
    return view('auth.login')
        ->with('active', '');
})->name('login');


// -------------------------------------------------------------------------------------------------

// Controllers --------------------------------------------------------------------------------------
    // Mail controller route(s)
Route::post('/send-mail', [MailController::class, 'sendMail']);

    // Event controller route(s)
Route::post('/new-event', [EventController::class, 'createEvent'])->middleware('auth.basic');
Route::post('/edit-event', [EventController::class, 'editEvent'])->middleware('auth.basic');
Route::get('/delete-event/{eventID}', [EventController::class, 'deleteEvent'])->middleware('auth.basic');

    // Image controller route(s)
Route::get('/download-r2-image/{folder}/{fileName}', [ImageController::class, 'downloadR2Image']);

    // Auth controller route(s)
Route::post('/process-login', [AdminController::class, 'processLogin']);
Route::get('/logout', [AdminController::class, 'logout']);
// -------------------------------------------------------------------------------------------------
