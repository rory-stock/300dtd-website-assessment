<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    // Display locally stored image
    public function localImage($imageName)
    {
        return response()->file(storage_path('app/public/images/'.$imageName.'.jpg'));
    }
}
