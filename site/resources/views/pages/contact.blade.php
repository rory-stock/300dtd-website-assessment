@extends('layouts.default')

@section('content')

    <div class="flex flex-col gap-6">
    <x-contact-form/>

    <div class="flex flex-col bottom-28 pl-12 sm:top-24 sm:left-96 sm:mt-4 sm:absolute">
        <p class="mb-3 font-bold">
            Contact Details:
        </p>
        <p class="mb-1">
            Email: contact@rorystock.com
        </p>
    </div>
    </div>




@endsection
