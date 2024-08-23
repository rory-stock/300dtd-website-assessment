<nav class="pt-2 hidden sm:flex" hx-boost="true">

{{-- Highlights which page is currently open  --}}
    <ul class="flex flex-row gap-5 justify-end pr-14 text-xl">
        <li>
            <a href="/"  @if($active=='home') class="text-black hover:text-black" @else class="text-zinc-500 hover:text-black" @endif>Home</a>
        </li>
        <li>
            <a href="/events" @if($active=='events') class="text-black hover:text-black" @else class="text-zinc-500 hover:text-black" @endif>Events</a>
        </li>
        <li>
            <a href="/contact" @if($active=='contact') class="text-black hover:text-black" @else class="text-zinc-500 hover:text-black" @endif>Contact</a>
        </li>
    </ul>
</nav>

{{-- Mobile Navigation  --}}
<nav class="pr-7 sm:hidden" hx-boost="true">
    <div x-data="{
        dropdownOpen: false
    }"
         class="relative">

        <button @click="dropdownOpen=true" class="inline-flex items-center justify-center h-10 py-2 pl-2 pr-2 text-sm font-medium transition-colors bg-white text-neutral-700 active:bg-white focus:bg-white disabled:opacity-50 disabled:pointer-events-none">
            <svg xmlns="http://www.w3.org/2000/svg" height="34px" viewBox="0 -960 960 960" width="34px" fill="#000000"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg>
        </button>

        <div x-show="dropdownOpen"
             @click.away="dropdownOpen=false"
             x-transition:enter="ease-out duration-200"
             x-transition:enter-start="-translate-y-2"
             x-transition:enter-end="translate-y-0"
             class="absolute top-0 z-50 w-56 mt-12 -translate-x-1/5 left-1/5"
             x-cloak>
            {{-- Dropdown Content --}}
            <div class="flex flex-col bg-white h-fit w-fit border rounded-md shadow-md border-neutral-200/70 text-neutral-700">
                <a href="/" class="relative flex select-none hover:cursor-pointer items-center rounded px-2 py-1.5 text-sm outline-none transition-colors">
                    <span>Home</span>
                </a>
                <div class="h-px bg-neutral-200"></div>
                <a href="/events" class="relative flex select-none hover:cursor-pointer items-center rounded px-2 py-1.5 text-sm outline-none transition-colors data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                    <span>Events</span>
                </a>
                <div class="h-px bg-neutral-200"></div>
                <a href="/contact" class="relative flex select-none hover:cursor-pointer items-center rounded px-2 py-1.5 text-sm outline-none transition-colors data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                    <span>Contact</span>
                </a>
            </div>
        </div>
    </div>
</nav>




