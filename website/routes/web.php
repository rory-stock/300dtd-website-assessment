<?php

use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/local-image/{imageName}', [ImageController::class, 'localImage']);
