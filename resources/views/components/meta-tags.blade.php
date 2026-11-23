@props([
    'title' => 'Comunidad de la Construcción AI | Socios, Profesionales y Proveedores',
    'description' => 'Únete gratis a comunidades verificadas de contratistas, consultoras, ingenieros, proveedores y subcontratistas para licitaciones y proyectos de construcción en Perú.',
    'url' => 'https://comunidaddelaconstruccion.ai/',
    'image' => asset('img/branding/logo.png'),
])

<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}">
<link rel="canonical" href="{{ $url }}">
<meta name="robots" content="index,follow,max-image-preview:large">
<meta name="theme-color" content="#050505">

<!-- Open Graph / Redes Sociales -->
<meta property="og:type" content="website">
<meta property="og:locale" content="es_PE">
<meta property="og:site_name" content="Comunidad de la Construcción AI">
<meta property="og:url" content="{{ $url }}">
<meta property="og:title" content="{{ $title }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:image" content="{{ $image }}">

<!-- Favicon -->
<link rel="icon" type="image/png" href="{{ asset('img/branding/logo.png') }}">
<link rel="apple-touch-icon" href="{{ asset('img/branding/logo.png') }}">
