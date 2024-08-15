@php use Illuminate\Support\Facades\Storage; @endphp
@extends('layouts.default')

@section('content')
    <div class="flex p-4">
        <img class="object-cover w-max h-auto aspect-video" src="{{ asset('storage/images/coverImage/R5RS7928.webp') }}" alt="">
    </div>

    <div class="sm:grid grid-cols-3 gap-4 pl-4 pr-4 pb-4 hidden">
        <div class="gap-4 flex flex-col">
            @foreach($columnOne as $image)
            <div>
                <img class="max-h-full w-auto" src="{{ asset('storage/images/' . $image) }}" alt="">
            </div>
            @endforeach
        </div>
        <div class="gap-4 flex flex-col">
            @foreach($columnTwo as $image)
            <div>
                <img class="max-h-full w-auto" src="{{ asset('storage/images/' . $image) }}" alt="">
            </div>
            @endforeach
        </div>
        <div class="gap-4 flex flex-col">
            @foreach($columnThree as $image)
            <div>
                <img class="max-h-full
                w-auto" src="{{ asset('storage/images/' . $image) }}" alt="">
            </div>
            @endforeach
        </div>
    </div>

    <div class="flex flex-col gap-4 sm:hidden pl-4 pr-4 pb-4">
        @foreach($images as $image)
        <div>
            <img class="w-auto" src="{{ asset('storage/images/' . $image) }}" alt="">
        </div>
        @endforeach





@endsection
