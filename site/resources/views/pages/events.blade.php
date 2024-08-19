@extends('layouts.default')

@section('content')
    @php
        use Illuminate\Support\Facades\DB;

        $events = DB::table('event')->get();
    @endphp

    <div class="p-4 flex flex-col sm:flex-row gap-2">
            @foreach ($events as $event)
                @php
                if ($event->CoverImage == null) {
                    $coverImage = DB::table('event_images')->get('display_image_path')->where('id', $event->CoverImage);
                } else {
                    $coverImage = false;
                }
                @endphp
            <div class="rounded-lg overflow-hidden border border-neutral-200/60 bg-white text-neutral-700 shadow-sm  sm:w-[380px]">
                @if ($coverImage)
                <div class="relative">
                    <img src="{{ $coverImage }}" class="w-full h-auto" alt=""/>
                </div>
                @endif
                <div class="p-7">
                    <h2 class="mb-2 text-lg font-bold leading-none tracking-tight">{{ $event->EventName }}</h2>
                    <p class="text-neutral-500">Date: {{ $event->EventDate }}</p>
                    <p class="mb-5 text-neutral-500">Location: {{ $event->EventLocation }}</p>
                    <a href="/view-event/{{ $event->id }}" class="inline-flex items-center justify-center w-full h-10 px-4 py-2 text-sm font-medium text-white transition-colors rounded-md focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:opacity-50 disabled:pointer-events-none bg-neutral-950 hover:bg-neutral-800">View Event</a>
                </div>
            </div>
            @endforeach
@endsection
