@extends('layouts.default')

@section('content')

    @php

    $homeImages = ['0I0A3785', '0I0A3820', '0I0A3878', '0I0A4125', 'P1003670', 'P1027141', 'R5RS1675', 'R5RS7928', 'R5RS8881', 'R5RS8895'];
    $imageCount = 0;
    @endphp

    <div class="flex gap-4 col">
        <div class="gap-4 flex">
    @foreach($homeImages as $image)
        <div class="row-4">
            <img src="/local-image/{{ $image }}"
                 alt="Image of mountain biker"
                 class="h-auto max-w-2xl object-cover object-center"
            />
        </div>
        @php
        if ($imageCount == 3) {
            echo '</div><div class="grid gap-4">';
            $imageCount = 0;
        } else {
            $imageCount++;
        }
        @endphp
    @endforeach


@endsection
