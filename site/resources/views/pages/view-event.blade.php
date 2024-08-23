@extends('layouts.default')

@section('content')

    {{-- Display the event details --}}
    @php($eventDate = date('l F j, Y', strtotime($eventDate)))

    <h1 class="flex text-2xl sm:text-4xl font-bold sm:mb-4 pt-4 justify-center">
        {{ $eventName }}
    </h1>
    <div class="flex justify-center gap-6 sm:gap-12 pb-4">
        <p class="flex text-xl sm:text-2xl pl-4 pt-4 text-grey-500">Location: {{ $eventLocation }}</p>
        <p class="flex text-xl sm:text-2xl pl-4 pt-4">Date: {{ $eventDate }}</p>
    </div>

    {{-- Display the event images --}}
    <div class="sm:grid grid-cols-3 gap-4 pl-4 pr-4 pb-4 hidden">
        <div class="gap-4 flex flex-col">
            {{-- Loop through the images in column one --}}
            @foreach($columnOne as $image)
                <div>
                    {{-- Display the image modal --}}
                    {{ view('components.image-modal', ['image' => $image, 'folder' => $eventFolder]) }}
                </div>
            @endforeach
        </div>
        <div class="gap-4 flex flex-col">
            {{-- Loop through the images in column two --}}
            @foreach($columnTwo as $image)
                <div>
                    <a>
                        {{-- Display the image modal --}}
                        {{ view('components.image-modal', ['image' => $image, 'folder' => $eventFolder]) }}
                    </a>
                </div>
            @endforeach
        </div>
        <div class="gap-4 flex flex-col">
            {{-- Loop through the images in column three --}}
            @foreach($columnThree as $image)
                <div>
                    <a>
                        {{-- Display the image modal --}}
                        {{ view('components.image-modal', ['image' => $image, 'folder' => $eventFolder]) }}
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    {{-- Display the event images for mobile --}}
    <div class="flex flex-col gap-4 sm:hidden pl-4 pr-4 pb-4">
        {{-- Loop through the images --}}
        @foreach($images as $image)
            <div>
                {{-- Display the image modal --}}
                {{ view('components.image-modal', ['image' => $image, 'folder' => $eventFolder]) }}
            </div>
        @endforeach
    </div>

@endsection
