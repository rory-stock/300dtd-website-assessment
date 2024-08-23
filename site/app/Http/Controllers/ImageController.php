<?php

namespace App\Http\Controllers;

// Import the necessary classes
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function downloadR2Image($folder, $fileName)
    {
        $folder = str_replace('%20', ' ', $folder);

        // Get the file from the R2 storage disk
        $disk = Storage::disk('r2');
        $directory = '/'. $folder . '/Low Res/';
        $file = $disk->get($directory . $fileName);

        // Download the file
        return response()->streamDownload(function () use ($file) {
            echo $file;
        }, $fileName, ['Content-Type' => 'image/jpeg']);
    }
}
