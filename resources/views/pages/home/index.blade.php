@extends('layouts.app')

@section('navbar')
    <x-home.navbar />
@endsection

@section('content')
    <!-- Hero Principal -->
    @include('pages.home.sections.hero')

    <!-- Resultados y Métricas -->
    @include('pages.home.sections.resultados')

    <!-- Tres Comunidades Especializadas -->
    @include('pages.home.sections.comunidades')

    <!-- Cómo Funciona -->
    @include('pages.home.sections.como-funciona')

    <!-- Seguridad y Verificación -->
    @include('pages.home.sections.seguridad')

    <!-- Ecosistema de Soluciones -->
    @include('pages.home.sections.ecosistema')

    <!-- Inteligencia Artificial (En Desarrollo) -->
    @include('pages.home.sections.ia')

    <!-- Solicitar Acceso -->
    @include('pages.home.sections.solicitar-acceso')

    <!-- Preguntas Frecuentes (FAQ) -->
    @include('pages.home.sections.faq')

    <!-- Canales de Contacto -->
    @include('pages.home.sections.contacto')

    <!-- Legal y Privacidad -->
    @include('pages.home.sections.legal')

    <!-- Llamada a la Acción Final -->
    @include('pages.home.sections.cta-final')
@endsection

@section('footer')
    <x-home.footer />
@endsection
