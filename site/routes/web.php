<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

// Pages -------------------------------------------------------------------------------------------
Route::view('/', 'pages.home', ['active' => 'home']);
Route::view('/portfolio', 'pages.portfolio', ['active' => 'portfolio']);
Route::view('/events', 'pages.events', ['active' => 'events']);
Route::view('/contact', 'pages.contact', ['active' => 'contact']);
// --------------------------------------------------------------------------------------------------


// Controllers -------------------------------------------------------------------------------------
Route::get('/local-image/{imageName}', [ImageController::class, 'localImage']);
Route::post('/send-mail', [MailController::class, 'sendMail']);
// --------------------------------------------------------------------------------------------------
