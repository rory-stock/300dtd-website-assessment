<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('includes.head')
</head>

<body>

<div class="flex flex-col h-screen">
<header class="h-24">
    @include('includes.header')
</header>

<main class="grow">
    @yield('content')
</main>

<footer class="h-10">
    @include('includes.footer')
</footer>
</div>

</body>

</html>
