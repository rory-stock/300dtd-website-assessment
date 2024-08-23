@extends('layouts.default')

@section('content')
    {{-- Display the login form --}}
    <div class="flex justify-items-start sm:justify-center sm:items-center h-screen pl-6 pr-5 sm:pl-0 sm:pr-0">
        <div class="w-full max-w-md">
            <div class="flex flex-col items-center">
                <h1 class="text-3xl font-bold text-neutral-900">Login</h1>
                <form method="POST" action="/process-login" class="w-full mt-4">
                    @csrf
                    {{-- Display the email input --}}
                    <div class="flex flex-col gap-1">
                        <label for="email" class="text-neutral-900">Email</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus class="w-full p-2 border border-neutral-200 rounded-md focus:outline-none focus:ring-2 focus:ring-neutral-600 focus:border-transparent @error('email') border-red-500 @enderror">
                        {{-- Display the error message if the email is invalid --}}
                        @error('email')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    {{-- Display the password input --}}
                    <div class="flex flex-col gap-1 mt-6">
                        <label for="password" class="text-neutral-900">Password</label>
                        <input id="password" type="password" name="password" required autocomplete="current-password" class="w-full p-2 border border-neutral-200 rounded-md focus:outline-none focus:ring-2 focus:ring-neutral-600 focus:border-transparent @error('password') border-red-500 @enderror">
                        {{-- Display the error message if the password is invalid --}}
                        @error('password')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="w-full h-10 mt-4 text-white bg-neutral-900 rounded-md hover:bg-neutral-700 focus:outline-none focus:ring-2 focus:ring-neutral-600 focus:ring-offset-2">Login</button>
                </form>
            </div>
        </div>
    </div>

@endsection
