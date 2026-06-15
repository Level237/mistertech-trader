<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('app.name', 'MrTech Academy'))</title>

     <meta name="title" content="MrTech Academy -L'academie du Trading">
    <meta name="description" content="MrTech Academy est une plateforme de formation en trading qui offre des cours complets, des signaux de trading et un accompagnement personnalisé pour aider les traders à atteindre leurs objectifs financiers.">
    <meta name="keywords" content="trading,mr tech,formation en trading,signaux de trading,accompagnement personnalisé,plateforme de trading,éducation financière,analyse technique,analyse fondamentale,gestion des risques,trading pour débutants,trading avancé">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="MrTech Academy -L'academie du Trading">
    <meta property="og:description" content="MrTech Academy est une plateforme de formation en trading qui offre des cours complets, des signaux de trading et un accompagnement personnalisé pour aider les traders à atteindre leurs objectifs financiers.">
    <meta property="og:image" content="{{ asset('images/modal-formation.jpg') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="MrTech Academy -L'academie du Trading">
    <meta property="twitter:description" content="MrTech Academy est une plateforme de formation en trading qui offre des cours complets, des signaux de trading et un accompagnement personnalisé pour aider les traders à atteindre leurs objectifs financiers.">
    <meta property="twitter:image" content="{{ asset('images/modal-formation.jpg') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="antialiased bg-black text-white selection:bg-primary selection:text-white">
    <x-header />

    <main>
        {{ $slot }}
    </main>

    <x-footer />
</body>

</html>
