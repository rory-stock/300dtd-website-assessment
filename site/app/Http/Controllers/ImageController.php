<?php

namespace App\Http\Controllers;

// Import the necessary classes
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function downloadR2Image($folder, $fileName)
    {
        // Get the file from the R2 storage disk
        $disk = Storage::disk('r2');
        $directory = '/'. $folder . '/Low Res/';
        $file = $disk->get($directory . $fileName . '.jpg');

        // Download the file
        return response()->streamDownload(function () use ($file) {
            echo $file;
        }, $fileName . '.jpg', ['Content-Type' => 'image/jpeg']);
    }
}
