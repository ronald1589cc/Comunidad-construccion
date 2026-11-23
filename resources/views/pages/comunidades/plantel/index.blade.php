@extends('layouts.app')

@section('title', 'Profesionales para Licitaciones y Construcción en Perú | Plantel Técnico')

@section('navbar')
    <x-comunidades.plantel.navbar />
@endsection

@section('content')
    <!-- 1. Hero -->
    @include('pages.comunidades.plantel.sections.hero')

    <!-- 2. Métricas de Actividad -->
    @include('pages.comunidades.plantel.sections.metricas')

    <!-- 3. Rutas de Participación -->
    @include('pages.comunidades.plantel.sections.rutas')

    <!-- 4. Para Empresas -->
    @include('pages.comunidades.plantel.sections.empresas')

    <!-- 5. Para Profesionales -->
    @include('pages.comunidades.plantel.sections.profesionales')

    <!-- 6. Cómo Funciona -->
    @include('pages.comunidades.plantel.sections.como-funciona')

    <!-- 7. Estándar de Publicación -->
    @include('pages.comunidades.plantel.sections.estandar')

    <!-- 8. Seguridad y Confianza -->
    @include('pages.comunidades.plantel.sections.seguridad')

    <!-- 9. Solicitar Acceso -->
    @include('pages.comunidades.plantel.sections.solicitar-acceso')

    <!-- 10. Preguntas Frecuentes -->
    @include('pages.comunidades.plantel.sections.faq')

    <!-- 11. Ecosistema de Soluciones -->
    @include('pages.comunidades.plantel.sections.ecosistema')

    <!-- 12. CTA Final -->
    @include('pages.comunidades.plantel.sections.cta-final')

    <!-- Barra Móvil Fija -->
    @include('pages.comunidades.plantel.sections.mobile-bar')
@endsection

@section('footer')
    <x-comunidades.plantel.footer />
@endsection
