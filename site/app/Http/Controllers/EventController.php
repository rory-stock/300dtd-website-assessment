<?php

namespace App\Http\Controllers;

use http\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use function Laravel\Prompts\error;

class EventController extends Controller
{
    public function createEvent(Request $request)
    {
        $eventName = $request['eventName'];
        $eventDate = $request['eventDate'];
        $eventLocation = $request['eventLocation'];
        $eventFolder = $request['eventFolder'];

        $cloudflareEventFolder = str_replace(' ', '%20', $eventFolder);

        $images = Storage::disk('r2')->Files($eventFolder . '/Low Res/');

        DB::table('event')->insert([
            'EventName' => $eventName,
            'EventDate' => $eventDate,
            'EventLocation' => $eventLocation,
            'EventFolder' => $eventFolder
        ]);
        $eventID = DB::getPdo()->lastInsertId();

        foreach ($images as $image) {
            $imageName = $this->removeFileExtension($image);
            DB::table('event_images')->insert([
                'event_id' => $eventID,
                'display_image_path' => 'https://pub-68dfe631ac364c6997d8133c90843c81.r2.dev/' . $cloudflareEventFolder . '/Web%20Res/'. $image.'.webp',
                'download_image_path' => 'https://pub-68dfe631ac364c6997d8133c90843c81.r2.dev/' . $cloudflareEventFolder . '/High%20Res/'. $image.'.jpg',
                'image_name' => $imageName
            ]);
        }
        return redirect('/events');
    }

    public function viewEvent($id)
    {
        $eventID = $id;
        $eventName = DB::table('event')->where('id', $eventID)->value('EventName');
        $eventDate = DB::table('event')->where('id', $eventID)->value('EventDate');
        $eventLocation = DB::table('event')->where('id', $eventID)->value('EventLocation');

        $images = DB::table('event_images')->where('event_id', $eventID)->get();

        return view('pages.view-event')
            ->with(['eventName' => $eventName,
                    'eventDate' => $eventDate,
                    'eventLocation' => $eventLocation,
                    'images' => $images,
                    'active' => 'events'
            ]);
    }

    public function editEvent(Request $request)
    {
        $eventName = $request['eventName'];
        $eventDate = $request['eventDate'];
        $eventLocation = $request['eventLocation'];
        $eventFolder = $request['eventFolder'];
        $eventID = $request['id'];

        $cloudflareEventFolder = str_replace(' ', '%20', $eventFolder);

        $images = Storage::disk('r2')->Files($eventFolder . '/Low Res/');

        DB::table('event')->where('id', $eventID)->update([
            'EventName' => $eventName,
            'EventDate' => $eventDate,
            'EventLocation' => $eventLocation,
            'EventFolder' => $eventFolder
        ]);

        foreach ($images as $image) {
            $imageName = $this->removeFileExtension($image);
            DB::table('event_images')->where('event_id', $eventID)->update([
                'display_image_path' => 'https://pub-68dfe631ac364c6997d8133c90843c81.r2.dev/' . $cloudflareEventFolder . '/Web%20Res/'. $image.'.webp',
                'download_image_path' => 'https://pub-68dfe631ac364c6997d8133c90843c81.r2.dev/' . $cloudflareEventFolder . '/High%20Res/'. $image.'.jpg',
                'image_name' => $imageName
            ]);
        }
        return redirect('/events');
    }
    private function removeFileExtension(mixed $image)
    {
        return pathinfo($image, PATHINFO_FILENAME);
    }
}
