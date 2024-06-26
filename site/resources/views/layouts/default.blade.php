<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('includes.head')
</head>

<body>

<div class="flex flex-col h-screen justify-between">
<header class="h-24">
    @include('includes.header')
</header>

<main class="mb-auto h-10">
    @yield('content')
</main>

<footer class="h-10">
    @include('includes.footer')
</footer>
</div>

</body>

</html>
