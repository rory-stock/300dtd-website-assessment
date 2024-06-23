<?php

use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/portfolio', function () {
    return view('pages.portfolio');
});

Route::get('/events', function () {
    return view('pages.events');
});

Route::get('/contact', function () {
    return view('pages.contact');
});


Route::get('/local-image/{imageName}', [ImageController::class, 'localImage']);
