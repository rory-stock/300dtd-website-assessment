<!-- Meta Tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="title" content="Rory Stock">
<meta name="description" content="Photography portfolio for New Zealand based photographer Rory Stock">
<meta name="keywords" content="photography, mountain bike photography, action photography, portfolio, Rory Stock photography">
<meta name="robots" content="index, follow">
<meta name="author" content="Rory Stock">
<meta name="copyright" content="Rory Stock">

<!-- Title -->
<title>Rory Stock</title>

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">

<!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<!-- HTMX -->
<script src="https://unpkg.com/htmx.org@2.0.2" integrity="sha384-Y7hw+L/jvKeWIRRkqWYfPcvVxHzVzn5REgzbawhxAuQGwX1XWe70vji+VSeHOThJ" crossorigin="anonymous"></script>

<!-- Alpine.js -->
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('storage/icons/apple-touch-icon.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('storage/icons/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('storage/icons/favicon-16x16.png') }}">
<link rel="manifest" href="{{ asset('storage/icons/site.webmanifest') }}">

<!-- Vite -->
@vite('resources/css/app.css')
@vite('resources/js/app.js')
