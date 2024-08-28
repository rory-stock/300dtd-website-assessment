@extends('layouts.default')

@section('content')

    @php
        use Illuminate\Support\Facades\DB;

        // Get data from the database and chunk into groups of 4
        $events = DB::table('events')->get();
    @endphp

    {{-- Display the events--}}
    <div class="p-4 grid sm:grid-cols-3 gap-2">
        {{-- Loop through the events --}}
        @foreach ($events as $event)
            @php
                // Format the event date
                $eventDate = date('l F j, Y', strtotime($event->event_date));
            @endphp

            {{-- Display the individual event --}}
            <div class="rounded-lg overflow-hidden border border-neutral-200/60 bg-white text-neutral-700 shadow-sm sm:max-w-fit h-auto">
                {{-- Display the cover image if present --}}
                @if ($event->cover_image_path)
                    <div class="relative">
                        <img src="{{ $event->cover_image_path }}" class="w-full h-auto" alt="">
                    </div>
                @endif
                {{-- Display the event details --}}
                <div class="p-7">
                    <h2 class="mb-2 text-lg font-bold leading-none tracking-tight">{{ $event->event_name }}</h2>
                    <p class="text-neutral-500">Date: {{ $eventDate }}</p>
                    <p class="mb-5 text-neutral-500">Location: {{ $event->event_location }}</p>
                    <a href="/view-event/{{ $event->id }}" class="inline-flex items-center justify-center w-full h-10 px-4 py-2 text-sm font-medium text-white transition-colors rounded-md focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:opacity-50 disabled:pointer-events-none bg-neutral-950 hover:bg-neutral-800">View Event</a>
                </div>
            </div>
        @endforeach
    </div>

@endsection
