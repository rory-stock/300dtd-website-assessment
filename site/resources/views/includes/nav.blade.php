<nav class="pt-2" hx-boost="true">
    <ul class="flex flex-row gap-5 justify-end pr-14 text-xl">
        <li>
            <a href="/"  @if($active=='home') class="text-black hover:text-black" @else class="text-zinc-500 hover:text-black" @endif>Home</a>
        </li>
{{--        <li>--}}
{{--            <a href="/portfolio" @if($active=='portfolio') class="text-black hover:text-black" @else class="text-zinc-500 hover:text-black" @endif>Portfolio</a>--}}
{{--        </li>--}}
        <li>
            <a href="/events" @if($active=='events') class="text-black hover:text-black" @else class="text-zinc-500 hover:text-black" @endif>Events</a>
        </li>
        <li>
            <a href="/contact" @if($active=='contact') class="text-black hover:text-black" @else class="text-zinc-500 hover:text-black" @endif>Contact</a>
        </li>
    </ul>
</nav>
