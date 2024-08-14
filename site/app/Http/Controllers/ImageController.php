<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ImageController extends Controller
{
    // Display locally stored image
    public function displayLocalImage($imageName)
    {
        return response()->file(storage_path('app/public/images/'.$imageName.'.webp'));
    }

    // Download image from R2
    public function downloadR2Image(Request $request): StreamedResponse
    {
        $fileName = $request->input('imageName');

        $disk = Storage::disk('r2');
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
