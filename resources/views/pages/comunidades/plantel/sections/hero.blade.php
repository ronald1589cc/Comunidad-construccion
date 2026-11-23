<!-- HERO -->
<header class="relative w-full pt-28 sm:pt-32 pb-16 px-4 sm:px-6 overflow-hidden bg-white">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none select-none" aria-hidden="true">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('img/portada/portada-3.webp') }}');"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-white/92 via-white/85 to-white"></div>
        <div class="absolute inset-0 bg-radial from-transparent via-white/50 to-white"></div>
    </div>

    <div class="relative z-10 max-w-4xl mx-auto text-center fade-up visible">
        <span data-template-id="hero-badge" class="inline-block px-4 py-1.5 rounded-full border border-construction/30 bg-white/90 backdrop-blur-sm text-construction text-xs font-semibold uppercase tracking-wider mb-6 font-sans shadow-xs">
            COMUNIDAD VERIFICADA DE PROFESIONALES EN INGENIERÍA Y CONSTRUCCIÓN
        </span>
        <h1 data-template-id="hero-title" class="font-heading text-2xl sm:text-3xl md:text-5xl font-extrabold leading-tight mb-6 text-steel">
            Conecta al instante empresas con profesionales titulados y verificados para licitaciones, proyectos y obras.
        </h1>
        <p data-template-id="hero-subtitle" class="text-base sm:text-lg md:text-xl max-w-3xl mx-auto leading-relaxed mb-8 text-carbon font-sans font-medium">
            Comunidad que reúne constructoras, consultoras, reclutadores, ingenieros, arquitectos y profesionales titulados y colegiados para publicar requerimientos, completar equipos técnicos y acceder a oportunidades del sector de ingeniería y construcción.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-4">
            <x-button href="https://wa.link/swivav" target="_blank" rel="noopener noreferrer" size="xl" data-template-id="hero-cta" data-cta-location="hero" class="w-full sm:w-auto">
                Acceder gratis
            </x-button>
            <x-button href="https://chat.whatsapp.com/Chr0sJktKB35GyQPsgHxEf" target="_blank" rel="noopener noreferrer" variant="secondary" size="xl" data-template-id="hero-cta-secondary" data-cta-location="hero_secondary" class="w-full sm:w-auto border-concrete hover:border-construction/50 text-carbon bg-white/80 backdrop-blur-sm">
                Explorar Comunidad
            </x-button>
        </div>
        <p data-template-id="hero-prof-line" class="text-sm mt-3 text-carbon/80 font-sans">
            ¿Eres profesional? Registra tu experiencia para acceder a oportunidades profesionales y laborales.
        </p>
        <p data-template-id="hero-microcopy" class="text-xs mt-3 text-carbon/70 font-sans font-medium">
            Acceso gratuito · Sujeto a validación
        </p>
    </div>
</header>
