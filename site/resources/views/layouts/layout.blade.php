<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-partials._head/>
    <body>

        <div class="flex flex-col h-screen font-league-spartan">
            <div class="sticky top-0 bg-white">
                <x-partials._header/>
            </div>
            <div id="pageContent">
            </div>
            <x-partials._footer/>
        </div>
    </body>
</html>
