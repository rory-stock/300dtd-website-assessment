@extends('layouts.default')

@section('content')

    @php($eventDate = date('F j, Y', strtotime($eventDate)))

    <h1 class="flex text-2xl sm:text-4xl font-bold mb-4 pt-4 justify-center">
        {{ $eventName }}
    </h1>
    <div class="flex justify-center gap-6 sm:gap-12 pb-4">
    <p class="flex text-xl sm:text-2xl pl-4 pt-4 text-grey-500">Location: {{ $eventLocation }}</p>
        <p class="flex text-xl sm:text-2xl pl-4 pt-4">Date: {{ $eventDate }}</p>
    </div>

{{--  images previously got by {{ $image->display_image_path }} use this when db connection works   --}}

    <div class="sm:grid grid-cols-3 gap-4 pl-4 pr-4 pb-4 hidden">
        <div class="gap-4 flex flex-col">
            @foreach($columnOne as $image)
                <div>
                   {{ view('components.image-modal', ['image' => $image]) }}
                </div>
            @endforeach
        </div>
        <div class="gap-4 flex flex-col">
            @foreach($columnTwo as $image)
                <div>
                    <a>
                        {{ view('components.image-modal', ['image' => $image]) }}
                    </a>
                </div>
            @endforeach
        </div>
        <div class="gap-4 flex flex-col">
            @foreach($columnThree as $image)
                <div>
                    <a>
                        {{ view('components.image-modal', ['image' => $image]) }}
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    <div class="flex flex-col gap-4 sm:hidden pl-4 pr-4 pb-4">
        @foreach($images as $image)
            <div>
                {{ view('components.image-modal', ['image' => $image]) }}
            </div>
    @endforeach

@endsection
