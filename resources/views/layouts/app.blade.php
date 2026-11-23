<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @hasSection('meta')
        @yield('meta')
    @else
        <x-meta-tags :title="trim($__env->yieldContent('title')) ?: ($title ?? null)" />
    @endif

    <!-- Google Fonts: Montserrat, Inter, Barlow Condensed -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,600;0,700;0,800;0,900;1,700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Vite Styles & Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>
<body class="w-full min-h-screen text-carbon bg-white font-sans selection:bg-construction selection:text-white">
    <a class="skip-link" href="#contenido-principal">Saltar al contenido principal</a>

    <!-- Navbar Global / Específico -->
    @hasSection('navbar')
        @yield('navbar')
    @else
        <x-home.navbar />
    @endif

    <!-- Contenido de la Página -->
    <main id="contenido-principal">
        @yield('content')
    </main>

    <!-- Footer Global / Específico -->
    @hasSection('footer')
        @yield('footer')
    @else
        <x-home.footer />
    @endif

    @stack('scripts')
</body>
</html>
