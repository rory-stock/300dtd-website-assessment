@extends('layouts.default')

@section('content')
{{-- Show the cover image --}}
    <div class="flex p-4">
        <img class="object-cover w-max h-auto aspect-video" src="{{ asset($coverImage) }}" alt="">
    </div>

{{-- Show the main images in a grid --}}
    <div class="sm:grid grid-cols-3 gap-4 pl-4 pr-4 pb-4 hidden">
        <div class="gap-4 flex flex-col">
            {{-- Loop through the first column of images --}}
            @foreach($columnOne as $image)
                <div>
                    <img class="max-h-full w-auto" src="{{ asset($directory . $image) }}" alt="">
                </div>
            @endforeach
        </div>

        {{-- Loop through the second column of images --}}
        <div class="gap-4 flex flex-col">
            @foreach($columnTwo as $image)
                <div>
                    <img class="max-h-full w-auto" src="{{ asset($directory . $image) }}" alt="">
                </div>
            @endforeach
        </div>

        {{-- Loop through the third column of images --}}
        <div class="gap-4 flex flex-col">
            @foreach($columnThree as $image)
                <div>
                    <img class="max-h-full
                w-auto" src="{{ asset($directory . $image) }}" alt="">
                </div>
            @endforeach
        </div>
    </div>

{{-- Show the all images in a column on mobile --}}
    <div class="flex flex-col gap-4 sm:hidden pl-4 pr-4 pb-4">
        @foreach($images as $image)
            <div>
                <img class="w-auto" src="{{ asset($directory . $image) }}" alt="">
            </div>
        @endforeach
    </div>

@endsection
