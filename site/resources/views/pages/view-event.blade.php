@extends('layouts.default')

@section('content')

    <h1 class="flex text-4xl font-bold mb-4 pt-4 justify-center">
        {{ $eventName }}
    </h1>
    <div class="flex justify-center gap-12 pb-4">
    <p class="flex text-2xl pl-4 pt-4 text-grey-500">Location: {{ $eventLocation }}</p>
        <p class="flex text-2xl pl-4 pt-4">Date: {{ $eventDate }}</p>
    </div>

    <div class="grid grid-rows-2 md:grid-rows-3 gap-4 pl-4 pr-4">
        <div class="gap-4 flex">
@php($imageCount = 0)
@foreach($images as $image)
            <div>
                <img class="max-h-full w-auto" src="{{ $image->display_image_path }}" alt="">
                @php($imageCount++)
            </div>
            @if($imageCount == 3)
            </div>
            <div class="gap-4 flex">
            @php($imageCount = 0)
            @endif
                @if($imageCount > 3) @php($imageCount = 0) @endif
@endforeach
    </div>

@endsection
