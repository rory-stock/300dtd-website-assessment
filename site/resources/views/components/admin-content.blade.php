@php
    use Illuminate\Support\Facades\Request;
    use Illuminate\Support\Facades\DB;

    $segment = Request::segment(1);
    $events =  DB::table('event')->get();
    $images =  DB::table('event_images')->get();
@endphp


    <p class="flex text-4xl pl-4 pt-4">Events</p>
    <div class="p-4">
        @if (count($events) > 0)
        <div class="pb-2 flex flex-col gap-2">
        @foreach ($events as $event)
            <div class="relative w-full rounded-lg border bg-white p-4 flex justify-between items-end">
                <div class="flex flex-col">
                <p class="text-2xl">{{ $event->EventName }}</p>
                <p class="text-lg">{{ $event->EventDate }}</p>
                <p class="text-lg">{{ $event->EventLocation }}</p>
                </div>
                {{ view('components.edit-event', ['eventName' => $event->EventName, 'eventDate' => $event->EventDate, 'eventLocation' => $event->EventLocation, 'eventFolder' => $event->EventFolder, 'eventID' => $event->id]) }}
            </div>
        @endforeach
        </div>
        @else
            <p class="text-2xl text-gray-500 pb-4">No events found</p>
        @endif
        <x-new-event/>
    </div>
