@php
// Import necessary facades
    use Illuminate\Support\Facades\Request;
    use Illuminate\Support\Facades\DB;

// Get data from the database
    $events =  DB::table('events')->get();
    $images =  DB::table('event_images')->get();
@endphp

<div class="flex justify-between h-full flex-col">
<div>
<p class="flex text-4xl pl-4 pt-4">Events</p>
<div class="space-y-3 max-h-[38rem] overflow-y-scroll">
    <div class="p-4">
        {{-- Check if there are any events --}}
        @if (count($events) > 0)
            <div class="pb-2 flex flex-col gap-2">
                {{-- Loop through the events --}}
                @foreach ($events as $event)
                    {{-- Format the event date --}}
                    @php($eventDate = date('l F j, Y', strtotime($event->event_date)))
                    <div class="relative w-full rounded-lg border bg-white p-4 flex justify-between items-end">
                        <div class="flex flex-col">
                            {{-- Display the event details --}}
                            <p class="text-2xl">{{ $event->event_name }}</p>
                            <p class="text-lg">Date: {{ $eventDate }}</p>
                            <p class="text-lg">Location: {{ $event->event_location }}</p>
                        </div>
                        {{-- Modal to edit the event --}}
                        <x-modal>
                            <x-slot:buttonIcon>
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z"/></svg>
                            </x-slot:buttonIcon>
                            <x-slot:title>
                                Edit Event
                            </x-slot:title>
                            <x-slot:content>
                                <x-edit-event-form :eventID="$event->id"/>
                            </x-slot:content>
                        </x-modal>
                    </div>
                @endforeach
            </div>
        {{-- If there are no events, display a message --}}
        @else
            <p class="text-2xl text-gray-500 pb-4">No events found</p>
        @endif
        {{-- Modal for new event --}}
        <x-modal>
            <x-slot:buttonIcon>
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="M440-440H200v-80h240v-240h80v240h240v80H520v240h-80v-240Z"/></svg>
            </x-slot:buttonIcon>
            <x-slot:title>
                New Event
            </x-slot:title>
            <x-slot:content>
                <x-new-event-form/>
            </x-slot:content>
        </x-modal>
    </div>
</div>
</div>

{{-- Logout button--}}
    <div class="pb-4 pr-4 flex justify-end">
        <a href="/logout" class="inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium text-white transition-colors border border-transparent rounded-md focus:outline-none focus:ring-2 focus:ring-neutral-900 focus:ring-offset-2 bg-black hover:bg-neutral-700 hover:cursor-pointer">Logout</a>
    </div>
</div>
