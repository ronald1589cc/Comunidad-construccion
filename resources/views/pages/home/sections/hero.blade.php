<header class="relative w-full pt-28 md:pt-36 pb-20 md:pb-28 px-6 overflow-hidden bg-white">
    <!-- Background Slideshow Images -->
    <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none select-none" aria-hidden="true">
        <div id="hero-slideshow" class="relative w-full h-full">
            <img src="{{ asset('img/portada/portada-1.webp') }}" alt=""
                width="1920" height="1080" fetchpriority="high" decoding="async"
                class="hero-slide opacity-100">
            @foreach ([2, 3, 4] as $n)
                <img data-src="{{ asset('img/portada/portada-' . $n . '.webp') }}" alt=""
                    width="1920" height="1080" decoding="async"
                    class="hero-slide opacity-0">
            @endforeach
        </div>

        <!-- Translucent gradient overlay for high contrast, white dominance & readability -->
        <div class="absolute inset-0 hero-overlay-light"></div>
    </div>

    <!-- Content on top of background -->
    <div class="relative z-10 max-w-4xl mx-auto text-center">
        <span class="inline-block px-4 py-1.5 rounded-full border border-construction/40 bg-white text-construction text-sm font-semibold mb-5 md:mb-6 font-sans">
            Ecosistema verificado de la construcción en Latinoamérica
        </span>
        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold leading-[1.1] tracking-tight text-balance mb-5 md:mb-6 text-steel font-heading">
            Encuentra socios, profesionales y proveedores verificados para ganar licitaciones
        </h1>
        <p class="text-base md:text-xl max-w-2xl mx-auto leading-relaxed mb-8 md:mb-10 text-carbon font-sans font-medium">
            Conectamos constructoras, consultoras, profesionales titulados, inversionistas y proveedores en tres comunidades para el sector construcción en Perú.
        </p>
        <div class="flex flex-col sm:flex-row gap-3 justify-center mb-6">
            <x-button href="https://wa.link/swivav" target="_blank" rel="noopener noreferrer" size="xl">
                Acceder gratis
            </x-button>
            <x-button href="https://chat.whatsapp.com/KNEJCZ3kjupHhvEIl6mK8z" target="_blank" rel="noopener noreferrer" variant="secondary" size="xl" class="bg-white/80 backdrop-blur-sm">
                Explorar comunidades
            </x-button>
        </div>
        <p class="text-xs md:text-sm text-carbon/75 font-sans font-medium">
            <span class="font-stats font-bold text-construction text-base md:text-lg">US$55M+</span> en proyectos, <span class="font-stats font-bold text-construction text-base md:text-lg">2,500+</span> miembros verificados.
        </p>

        <!-- Slide Indicators -->
            <div role="group" class="flex items-center justify-center gap-2 mt-8 z-10 pointer-events-auto" id="hero-slide-dots" aria-label="Controles del carrusel de portada">
            <button type="button" class="hero-dot w-7 h-2 rounded-full bg-construction transition-all cursor-pointer" aria-label="Foto 1" aria-current="true" data-slide="0"></button>
            <button type="button" class="hero-dot w-2 h-2 rounded-full bg-steel/30 hover:bg-construction/60 transition-all cursor-pointer" aria-label="Foto 2" data-slide="1"></button>
            <button type="button" class="hero-dot w-2 h-2 rounded-full bg-steel/30 hover:bg-construction/60 transition-all cursor-pointer" aria-label="Foto 3" data-slide="2"></button>
            <button type="button" class="hero-dot w-2 h-2 rounded-full bg-steel/30 hover:bg-construction/60 transition-all cursor-pointer" aria-label="Foto 4" data-slide="3"></button>
        </div>
    </div>
</header>
