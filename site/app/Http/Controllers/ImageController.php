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
        return response()->file(storage_path('app/public/images/'.$imageName));
    }

    // Download image from R2
    public function downloadR2Image($fileName): StreamedResponse
    {
        if (str_contains($fileName, '.')) {
            $fileName = explode('.', $fileName)[0];
        }

        // when db connection works the file folder can be carried over so that the file can be found
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

    public function homeImages()
    {
        $homeImages = array_filter(Storage::disk('public')->files('images'), function ($item) {
            return strpos($item, '.webp');
        });
        $homeImages = array_map(function ($item) {
            return str_replace('images/', '', $item);
        }, $homeImages);

        $imageCount = 0;
        $columnLength = count($homeImages) / 3;

        foreach ($homeImages as $image) {
            if ($imageCount < $columnLength) {
                $columnOne[] = $image;
            } elseif ($imageCount < $columnLength * 2) {
                $columnTwo[] = $image;
            } else {
                $columnThree[] = $image;
            }
            $imageCount++;
        }
        return view('pages.home', [
            'images'  =>   $homeImages,
            'columnOne'   =>   $columnOne,
            'columnTwo'   =>   $columnTwo,
            'columnThree' =>   $columnThree,
            'active'      =>   'home'
        ]);
    }

}
