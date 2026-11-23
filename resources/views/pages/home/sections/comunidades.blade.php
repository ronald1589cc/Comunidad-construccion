<section id="comunidades" class="w-full py-20 md:py-24 px-6 border-t border-concrete blueprint-grid relative overflow-hidden" aria-labelledby="comunidades-title">
    <div class="max-w-5xl mx-auto">
        <div class="text-center mb-12 md:mb-16 fade-up">
            <span class="inline-flex items-center px-4 py-1 rounded-full border border-construction text-construction text-xs md:text-sm font-semibold tracking-wide bg-white mb-5 shadow-2xs">
                Comunidades
            </span>
            <h2 id="comunidades-title" class="text-2xl sm:text-3xl md:text-4xl font-extrabold mb-4 text-steel font-heading tracking-tight leading-tight">
                Un ecosistema. Tres comunidades especializadas.
            </h2>
            <p class="text-lg text-carbon/80 font-sans">
                Selecciona la comunidad que corresponde a tu necesidad o perfil.
            </p>
        </div>

        <div data-resultados-grid class="grid md:grid-cols-3 gap-6">
            <!-- Comunidad 1 -->
            <div class="relative p-7 md:p-8 metric-card-interactive slide-card-left flex flex-col text-left">
                <span class="blueprint-corner" aria-hidden="true"></span>

                <div class="icon-box w-12 h-12 rounded-xl bg-construction/15 border border-construction/30 flex items-center justify-center mb-4">
                    <i data-lucide="users" class="w-6 h-6 text-construction"></i>
                </div>
                <a href="{{ route('comunidades.consorcios') }}">
                    <h3 class="font-bold text-lg text-steel mb-3 font-heading">
                        Consorcios para Licitaciones &amp; Obras por Impuestos
                    </h3>
                </a>
                <p class="text-sm mb-6 flex-1 text-carbon/80 font-sans leading-relaxed">
                    Encuentra contratistas ejecutores, consultoras, inversionistas y socios estratégicos para formar consorcios y participar en licitaciones públicas, privadas y proyectos de OxI.
                </p>
                <p class="text-sm font-semibold whitespace-pre-line leading-relaxed min-h-12 flex items-start mb-6 text-construction">
                    <span class="font-stats font-bold text-lg mr-1.5 tabular-nums" data-count="55" data-prefix="US$" data-suffix="M+">US$55M+</span> en licitaciones ganadas por empresas miembros
                </p>
                <div class="card-action mt-auto">
                    <x-button href="https://wa.link/swivav" target="_blank" rel="noopener noreferrer" fullWidth>
                        Solicitar acceso a Consorcios
                    </x-button>
                </div>
            </div>

            <!-- Comunidad 2 -->
            <div class="relative p-7 md:p-8 metric-card-interactive slide-card-left flex flex-col text-left">
                <span class="blueprint-corner" aria-hidden="true"></span>

                <div class="icon-box w-12 h-12 rounded-xl bg-construction/15 border border-construction/30 flex items-center justify-center mb-4">
                    <i data-lucide="user-check" class="w-6 h-6 text-construction"></i>
                </div>
                <a href="{{ route('comunidades.plantel-profesional') }}">
                    <h3 class="font-bold text-lg text-steel mb-3 font-heading">
                        Plantel Profesional Técnico
                    </h3>
                </a>
                <p class="text-sm mb-6 flex-1 text-carbon/80 font-sans leading-relaxed">
                    Conecta contratistas, reclutadores, ingenieros, arquitectos y especialistas (titulados y colegiados) para completar planteles técnicos y acceder a oportunidades laborales.
                </p>
                <p class="text-xs font-semibold whitespace-pre-line leading-relaxed min-h-12 flex flex-col justify-center mb-6 text-construction font-sans">
                    <span><span class="font-stats font-bold text-sm tabular-nums" data-count="1200" data-suffix="+">1,200+</span> miembros</span>
                    <span><span class="font-stats font-bold text-sm tabular-nums" data-count="1000" data-suffix="+">1,000+</span> oportunidades</span>
                    <span><span class="font-stats font-bold text-sm tabular-nums" data-count="100" data-suffix="+">100+</span> profesionales conectados</span>
                </p>
                <div class="card-action mt-auto">
                    <x-button href="https://wa.link/swivav" target="_blank" rel="noopener noreferrer" fullWidth>
                        Solicitar acceso a Plantel Profesional
                    </x-button>
                </div>
            </div>

            <!-- Comunidad 3 -->
            <div class="relative p-7 md:p-8 metric-card-interactive slide-card-left flex flex-col text-left">
                <span class="blueprint-corner" aria-hidden="true"></span>

                <div class="icon-box w-12 h-12 rounded-xl bg-construction/15 border border-construction/30 flex items-center justify-center mb-4">
                    <i data-lucide="package" class="w-6 h-6 text-construction"></i>
                </div>
                <a href="{{ route('comunidades.proveedores') }}">
                    <h3 class="font-bold text-lg text-steel mb-3 font-heading">
                        Proveedores: Materiales, Bienes, Servicios y Subcontratos
                    </h3>
                </a>
                <p class="text-sm mb-6 flex-1 text-carbon/80 font-sans leading-relaxed">
                    Conecta contratistas con proveedores de materiales y subcontratistas al instante para cotizar, abastecer y ejecutar proyectos de ingeniería y construcción.
                </p>
                <div class="min-h-12 flex items-start mb-6">
                    <span class="inline-block px-3 py-1 rounded-full border border-construction/30 bg-construction/10 text-xs text-construction font-semibold uppercase tracking-wider font-sans">
                        Comunidad en expansión
                    </span>
                </div>
                <div class="card-action mt-auto">
                    <x-button href="https://wa.link/swivav" target="_blank" rel="noopener noreferrer" fullWidth>
                        Solicitar acceso a Proveedores
                    </x-button>
                </div>
            </div>
        </div>
    </div>
</section>