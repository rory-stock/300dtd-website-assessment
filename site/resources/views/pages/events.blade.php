@extends('layouts.default')

@section('content')

    <div class="flex justify-center">
        <div class="flex flex-col h-full w-1/2 overflow-hidden bg-white border rounded shadow-md">
            <div class="flex items-center px-3 border-b">
                <svg class="w-4 h-4 mr-0 text-neutral-400 shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" x2="16.65" y1="21" y2="16.65"></line></svg>
                <input type="text" class="flex w-full px-2 py-3 text-sm bg-transparent border-0 rounded-md outline-none focus:outline-none focus:ring-0 focus:border-0 placeholder:text-neutral-400 h-11 disabled:cursor-not-allowed disabled:opacity-50" placeholder="Search for your race plate...">
            </div>
        </div>
    </div>
@endsection
