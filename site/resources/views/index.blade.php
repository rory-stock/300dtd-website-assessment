<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-layout._head/>
    <body>

        <div class="flex flex-col h-screen font-league-spartan">
            <div class="sticky top-0 bg-white">
                <x-layout._header/>
            </div>
            <div class="flex-grow">
                <x-page-content/>
            </div>
            <x-layout._footer/>
        </div>
    </body>
</html>
