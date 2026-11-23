@extends('layouts.app')

@section('title', 'Proveedores y Subcontratistas para Construcción en Perú | Comunidad de la Construcción AI')

@section('navbar')
    <x-comunidades.proveedores.navbar />
@endsection

@section('content')
    <!-- 1. Hero -->
    @include('pages.comunidades.proveedores.sections.hero')

    <!-- 2. Métricas de Actividad -->
    @include('pages.comunidades.proveedores.sections.metricas')

    <!-- 3. Selector de Intención -->
    @include('pages.comunidades.proveedores.sections.intent-selector')

    <!-- 4. Beneficios para Empresas -->
    @include('pages.comunidades.proveedores.sections.beneficios-empresas')

    <!-- 5. Beneficios para Proveedores -->
    @include('pages.comunidades.proveedores.sections.beneficios-proveedores')

    <!-- 6. Qué Puedes Publicar -->
    @include('pages.comunidades.proveedores.sections.que-publicar')

    <!-- 7. Categorías de Proveedores -->
    @include('pages.comunidades.proveedores.sections.categorias')

    <!-- 8. Estándar de Publicación -->
    @include('pages.comunidades.proveedores.sections.estandar')

    <!-- 9. Cómo Funciona -->
    @include('pages.comunidades.proveedores.sections.como-funciona')

    <!-- 10. Seguridad y Verificación -->
    @include('pages.comunidades.proveedores.sections.seguridad')

    <!-- 11. Casos de Uso y Conexiones -->
    @include('pages.comunidades.proveedores.sections.casos-uso')

    <!-- 12. Formulario de Acceso -->
    @include('pages.comunidades.proveedores.sections.formulario')

    <!-- 13. Preguntas Frecuentes -->
    @include('pages.comunidades.proveedores.sections.faq')

    <!-- 14. CTA Final -->
    @include('pages.comunidades.proveedores.sections.cta-final')

    <!-- 15. Ecosistema de Soluciones -->
    @include('pages.comunidades.proveedores.sections.ecosistema')

    <!-- Barra Móvil Fija -->
    @include('pages.comunidades.proveedores.sections.mobile-bar')
@endsection

@section('footer')
    <x-comunidades.proveedores.footer />
@endsection
