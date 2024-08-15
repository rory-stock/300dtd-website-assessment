<div class="w-full bg-white">
    <div class="flex justify-between pt-4 sm:pt-7">
        <div class="flex pl-4">
        @if (Auth::check() && \Illuminate\Support\Facades\Request::segment(1) == 'events')
            <x-admin-panel/>
        @endif
        <h1 class=" w-fit pl-2 hidden sm:flex sm:text-3xl md:text-5xl">
            Rory Stock
        </h1>
            <h1 class="pl-2 w-fit text-3xl sm:hidden">
                Rory<br>Stock
            </h1>
        </div>
        @include('includes.nav')
    </div>
</div>
