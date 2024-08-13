<div class="w-full bg-white">
    <div class="flex justify-between pt-7">
        <div class="flex pl-4">
        @if (Auth::check())
            <x-admin-panel/>
        @endif
        <h1 class="pl-10 w-fit text-5xl">
            Rory Stock
        </h1>
        </div>
        @include('includes.nav')
    </div>
</div>
