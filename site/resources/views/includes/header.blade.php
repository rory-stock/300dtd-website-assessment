<div class="w-full bg-white">
    <div class="flex justify-between pt-4 sm:pt-7">
        <div class="flex pl-4">
            @if (Request::segment(1) == 'events' && Auth::check())
                <x-slide-over>
                    <x-slot:buttonIcon>
                        <svg xmlns="http://www.w3.org/2000/svg" height="34px" viewBox="0 -960 960 960" width="34px" fill="#000000"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg>
                    </x-slot:buttonIcon>
                    <x-slot:title>
                        Admin Panel
                    </x-slot:title>
                    <x-slot:content>
                        <x-admin-content/>
                    </x-slot:content>
                </x-slide-over>
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
