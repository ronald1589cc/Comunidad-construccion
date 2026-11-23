@extends('layouts.app')

@section('title', 'Consorcios para Licitaciones y Obras por Impuestos en Perú | Comunidad de la Construcción AI')

@section('navbar')
    <x-comunidades.consorcios.navbar />
@endsection

@section('content')
    <!-- 1. Hero -->
    @include('pages.comunidades.consorcios.sections.hero')

    <!-- 2. Métricas de Actividad -->
    @include('pages.comunidades.consorcios.sections.metricas')

    <!-- 3. Rutas y Necesidades -->
    @include('pages.comunidades.consorcios.sections.rutas')

    <!-- 4. El Problema -->
    @include('pages.comunidades.consorcios.sections.problema')

    <!-- 5. Para Quién es -->
    @include('pages.comunidades.consorcios.sections.para-quien')

    <!-- 6. Qué Publicar -->
    @include('pages.comunidades.consorcios.sections.publicar')

    <!-- 7. Cómo Funciona -->
    @include('pages.comunidades.consorcios.sections.como-funciona')

    <!-- 8. Seguridad y Verificación -->
    @include('pages.comunidades.consorcios.sections.seguridad')

    <!-- 9. Casos de Conexión -->
    @include('pages.comunidades.consorcios.sections.casos')

    <!-- 10. Formulario de Acceso -->
    @include('pages.comunidades.consorcios.sections.solicitar-acceso')

    <!-- 11. Preguntas Frecuentes -->
    @include('pages.comunidades.consorcios.sections.faq')

    <!-- 12. CTA Final -->
    @include('pages.comunidades.consorcios.sections.cta-final')

    <!-- 13. Solución Complementaria: Banco de la Construcción -->
    @include('pages.comunidades.consorcios.sections.banco')

    <!-- Barra Móvil Fija -->
    @include('pages.comunidades.consorcios.sections.mobile-bar')
@endsection

@section('footer')
    <x-comunidades.consorcios.footer />
@endsection
