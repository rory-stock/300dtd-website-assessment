<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ImageController extends Controller
{
    // Display locally stored image
    public function displayLocalImage($imageName)
    {
        return response()->file(storage_path('app/public/images/'.$imageName.'.jpg'));
    }

//    // Display image from R2
//    public function displayR2Image($imageName)
//    {
//        $disk = Storage::disk('r2');
//        return response()->file($disk->get($imageName.'.jpg'));
//    }


    // Download image from R2
    public function downloadR2Image(): StreamedResponse
    {
        $disk = Storage::disk('r2');
        $fileName = '3.jpg';
        $file = $disk->get($fileName);
        return response()->streamDownload(function () use ($file) {
            echo $file;
        }, $fileName, ['Content-Type' => 'image/jpeg']);
    }

    // Download image from local storage
    public function downloadLocalImage($imageName): StreamedResponse
    {
        $fileName = $imageName.'.jpg';
        $file = storage_path('app/public/images/'.$fileName.'.jpg');
        return response()->streamDownload(function () use ($file) {
            echo $file;
        }, $fileName, ['Content-Type' => 'image/jpeg']);
    }

}
