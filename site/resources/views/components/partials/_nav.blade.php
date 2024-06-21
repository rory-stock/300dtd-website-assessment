<nav class="pt-1">
    <ul class="flex flex-row gap-5 justify-end pr-14 text-2xl">
        <li>
            <p  hx-trigger="click"
                hx-get="/home"
                hx-swap="innerHTML"
                hx-target="pageContent"
            >Home</p>
        </li>
        <li>
            <p  hx-trigger="click"
                hx-get="/portfolio"
                hx-swap="innerHTML"
                hx-target="pageContent"
            >Portfolio</p>
        </li>
        <li>
            <a href="/events">Events</a>
        </li>
        <li>
            <a href="/contact">Contact</a>
        </li>
    </ul>
</nav>
