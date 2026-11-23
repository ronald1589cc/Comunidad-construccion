<!-- HERO -->
<header class="relative w-full pt-28 sm:pt-32 pb-16 md:pb-24 px-6 overflow-hidden bg-white">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none select-none" aria-hidden="true">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('img/portada/portada-4.webp') }}');"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-white/92 via-white/85 to-white"></div>
        <div class="absolute inset-0 bg-radial from-transparent via-white/50 to-white"></div>
    </div>

    <div class="relative z-10 max-w-4xl mx-auto text-center fade-up visible">
        <span data-template-id="hero-badge" class="inline-block px-3 py-1 md:px-4 md:py-1.5 rounded-full border border-construction/30 bg-white/90 backdrop-blur-sm text-construction text-xs font-semibold uppercase tracking-wider mb-5 font-sans shadow-xs">
            COMUNIDAD B2B DE COMPRAS Y ABASTECIMIENTO PARA CONSTRUCCIÓN
        </span>
        <h1 data-template-id="hero-title" class="font-heading text-2xl md:text-5xl font-extrabold leading-tight mb-5 text-steel">
            Conecta empresas constructoras y consultoras con proveedores y subcontratistas verificados.
        </h1>
        <p data-template-id="hero-subtitle" class="text-sm md:text-xl max-w-3xl mx-auto leading-relaxed mb-8 text-carbon font-sans font-medium">
            Comunidad que reúne contratistas, consultoras, proveedores y subcontratistas para publicar requerimientos, cotizar materiales y servicios, y explorar oportunidades comerciales del sector de ingeniería y construcción.
        </p>
        <div class="flex flex-col sm:flex-row gap-3 justify-center mb-5">
            <x-button href="https://wa.link/swivav" target="_blank" rel="noopener noreferrer" size="xl" data-template-id="hero-cta-primary">
                Acceder gratis
            </x-button>
            <x-button href="https://chat.whatsapp.com/KqhDpRdDFEb1co9fLorzbg" target="_blank" rel="noopener noreferrer" variant="secondary" size="xl" data-template-id="hero-cta-secondary" class="bg-white/80 backdrop-blur-sm">
                Explorar comunidad
            </x-button>
        </div>
        <p data-template-id="hero-microcopy" class="text-xs mb-4 text-carbon/70 font-sans font-medium">
            Acceso gratuito · Comunidad B2B especializada · Sujeto a validación empresarial
        </p>
        <p data-template-id="hero-legal-note" class="text-xs max-w-2xl mx-auto text-carbon/60 font-sans">
            La comunidad facilita conexiones. No garantiza cotizaciones, compras, ventas, crédito, contratos ni adjudicaciones.
        </p>
    </div>
</header>
