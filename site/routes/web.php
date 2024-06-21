<?php

use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.layout', ['page' => 'home']);
});

Route::get('/portfolio', function () {
    return view('content.portfolio-page');
});


Route::get('/local-image/{imageName}', [ImageController::class, 'localImage']);

Route::get('/home-pageContent', function () {
    return view('content.home-page');
});
