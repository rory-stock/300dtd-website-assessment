<?php

namespace App\Http\Controllers;

// Import the necessary classes
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class RouteController extends Controller
{
    // Return the home view with the images and columns
    public function home()
    {
        // Get all images from the homeImages folder
        $homeImages = array_filter(Storage::disk('public')->files('images/homeImages/main'), function ($item) {
            return strpos($item, '.webp');
        });
        // Remove the 'images/' from the file path
        $homeImages = array_map(function ($item) {
            return str_replace('images/', '', $item);
        }, $homeImages);

        // Split the images into three columns
        $columns = $this->columnSplitter($homeImages);

        // Return the home view with the images and columns
        return view('pages.home', [
            'images'      =>   $homeImages,
            'columnOne'   =>   $columns['columnOne'],
            'columnTwo'   =>   $columns['columnTwo'],
            'columnThree' =>   $columns['columnThree'],
            'active'      =>   'home',
        ]);
    }

    // Return the view-event view with the event details and images
    public function viewEvent($id)
    {
        // Get the event details from the database
        $eventID = $id;
        $eventName = DB::table('events')->where('id', $eventID)->value('event_name');
        $eventDate = DB::table('events')->where('id', $eventID)->value('event_date');
        $eventLocation = DB::table('events')->where('id', $eventID)->value('event_location');
        $eventFolder = DB::table('events')->where('id', $eventID)->value('event_folder');

        // Get the images from the event folder
        $images = DB::table('event_images')->where('event_id', $eventID)->get();

        // Split the images into three columns
        $columns = $this->columnSplitter($images);

        // Return the view-event view with the event details and images
        return view('pages.view-event', [
            'eventName'    =>   $eventName,
            'eventDate'    =>   $eventDate,
            'eventLocation'=>   $eventLocation,
            'eventFolder'  =>   $eventFolder,
            'images'       =>   $images,
            'columnOne'    =>   $columns['columnOne'],
            'columnTwo'    =>   $columns['columnTwo'],
            'columnThree'  =>   $columns['columnThree'],
            'active'       =>   'events',
        ]);
    }

    // Split images into three columns
    public function columnSplitter($images)
    {
        $imageCount = 0;
        $columnLength = count($images) / 3;

        $columnOne = [];
        $columnTwo = [];
        $columnThree = [];

        foreach ($images as $image) {
            if ($imageCount < $columnLength) {
                $columnOne[] = $image;
            } elseif ($imageCount < $columnLength * 2) {
                $columnTwo[] = $image;
            } else {
                $columnThree[] = $image;
            }
            $imageCount++;
        }

        return [
            'columnOne'   =>   $columnOne,
            'columnTwo'   =>   $columnTwo,
            'columnThree' =>   $columnThree,
        ];
    }
}
