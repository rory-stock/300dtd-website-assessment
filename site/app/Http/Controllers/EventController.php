<?php

namespace App\Http\Controllers;

// Import the necessary classes
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function createEvent(Request $request)
    {
        // Validate the request
        $request->validate([
            'eventName' => 'required',
            'eventDate' => 'required',
            'eventLocation' => 'required',
            'eventFolder' => 'required'
        ]);

        // Get the event details from the request
        $eventName = $request['eventName'];
        $eventDate = $request['eventDate'];
        $eventLocation = $request['eventLocation'];
        $eventFolder = $request['eventFolder'];

        // Replace the spaces in the event folder with '%20' for the cloudflare link
        $cloudflareEventFolder = str_replace(' ', '%20', $eventFolder);

        // Get all the images from the event folder in cloudflare
        $images = Storage::disk('r2')->Files($eventFolder . '/Low Res/');

        // Insert the event details into the database
        DB::table('events')->insert([
            'created_at' => now(),
            'event_name' => $eventName,
            'event_date' => $eventDate,
            'event_location' => $eventLocation,
            'event_folder' => $eventFolder
        ]);

        // Get the ID of the event that was just inserted
        $eventID = DB::getPdo()->lastInsertId();

        // Insert the image details and R2 links into the database
        foreach($images as $image) {
            // Remove the file extension from the image name
            $imageName = $this->removeFileExtension($image);
            DB::table('event_images')->insert([
                'created_at' => now(),
                'event_id' => $eventID,
                'display_image_path' => 'https://pub-68dfe631ac364c6997d8133c90843c81.r2.dev/' . $cloudflareEventFolder . '/Web%20Res/' . $imageName . '.webp',
                'download_image_path' => 'https://pub-68dfe631ac364c6997d8133c90843c81.r2.dev/' . $cloudflareEventFolder . '/Low%20Res/' . $imageName . '.jpg',
                'image_name' => $imageName
            ]);
        }
        return redirect('/events');
    }

    public function editEvent(Request $request)
    {
        // Validate the request
        $request->validate([
            'eventID' => 'required'
        ]);

        // Get the event details from the request
        $eventID = $request['eventID'];
        $eventName = $request['eventName'];
        $eventDate = $request['eventDate'];
        $eventLocation = $request['eventLocation'];
        $coverImageID = $request['coverImage'];

        // Update the event details that were changed
        if ($eventName != null) {
            DB::table('events')
                ->where('id', $eventID)
                ->update([
                    'updated_at' => now(),
                    'event_name' => $eventName
                ]);
        }
        if ($eventDate != null) {
            DB::table('events')
                ->where('id', $eventID)
                ->update([
                    'updated_at' => now(),
                    'event_date' => $eventDate
                ]);
        }
        if ($eventLocation != null) {
            DB::table('events')
                ->where('id', $eventID)
                ->update([
                    'updated_at' => now(),
                    'event_location' => $eventLocation
                ]);
        }
        if ($coverImageID != null) {
            // Get the cover image display path
            $coverImage = DB::table('event_images')
                ->where('id', $coverImageID)
                ->value('display_image_path');

            // Update the cover image path in the events table
            DB::table('events')
                ->where('id', $eventID)
                ->update([
                    'updated_at' => now(),
                    'cover_image_path' => $coverImage
                ]);
        }

        return redirect('/events');
    }

    public function deleteEvent($eventID)
    {
        // Delete the event and all the images associated with it
        DB::table('events')
            ->where('id', $eventID)
            ->delete();

        DB::table('event_images')
            ->where('event_id', $eventID)
            ->delete();

        return redirect('/events');
    }

    // Remove the file extension from the image name
    private function removeFileExtension(mixed $image)
    {
        return pathinfo($image, PATHINFO_FILENAME);
    }
}
