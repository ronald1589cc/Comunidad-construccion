<section id="ecosistema" class="w-full py-20 md:py-24 px-6 border-t border-concrete blueprint-grid relative overflow-hidden" aria-labelledby="proveedores-eco-title">
    <div class="max-w-4xl mx-auto text-center">
        <div class="mb-12 md:mb-16 fade-up">
            <span class="inline-flex items-center px-4 py-1 rounded-full border border-construction text-construction text-xs md:text-sm font-semibold tracking-wide bg-white mb-5 shadow-2xs">
                Ecosistema Integrado
            </span>
            <h2 id="proveedores-eco-title" data-template-id="eco-title" class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-steel font-heading tracking-tight leading-tight">
                Más recursos dentro de la Comunidad de la Construcción AI
            </h2>
        </div>

        <div class="grid sm:grid-cols-3 gap-6 text-left mb-8">
            <!-- Recurso 1: Consorcios -->
            <a href="{{ route('comunidades.consorcios') }}" class="relative p-7 md:p-8 metric-card-interactive slide-card-left flex flex-col no-underline group">
                <span class="blueprint-corner" aria-hidden="true"></span>

                <div class="icon-box w-12 h-12 rounded-xl bg-construction/15 border border-construction/30 flex items-center justify-center mb-5 shrink-0">
                    <i data-lucide="users" class="w-6 h-6 text-construction"></i>
                </div>

                <h3 data-template-id="eco-1" class="font-heading font-bold text-base text-steel mb-2 leading-tight">
                    Consorcios para Licitaciones y Obras por Impuestos
                </h3>
                <p class="text-xs sm:text-sm text-carbon/80 font-sans leading-relaxed mb-4 flex-1">
                    Encuentra socios estratégicos y complementa capacidades para licitar.
                </p>

                <div class="card-action mt-auto">
                    <span class="inline-flex items-center text-xs font-semibold text-construction group-hover:text-steel transition-colors">
                        Explorar comunidad &rarr;
                    </span>
                </div>
            </a>

            <!-- Recurso 2: Plantel -->
            <a href="{{ route('comunidades.plantel-profesional') }}" class="relative p-7 md:p-8 metric-card-interactive slide-card-left flex flex-col no-underline group">
                <span class="blueprint-corner" aria-hidden="true"></span>

                <div class="icon-box w-12 h-12 rounded-xl bg-construction/15 border border-construction/30 flex items-center justify-center mb-5 shrink-0">
                    <i data-lucide="user-check" class="w-6 h-6 text-construction"></i>
                </div>

                <h3 data-template-id="eco-2" class="font-heading font-bold text-base text-steel mb-2 leading-tight">
                    Plantel Profesional Técnico
                </h3>
                <p class="text-xs sm:text-sm text-carbon/80 font-sans leading-relaxed mb-4 flex-1">
                    Conecta con ingenieros, arquitectos y especialistas colegiados.
                </p>

                <div class="card-action mt-auto">
                    <span class="inline-flex items-center text-xs font-semibold text-construction group-hover:text-steel transition-colors">
                        Explorar comunidad &rarr;
                    </span>
                </div>
            </a>

            <!-- Recurso 3: Banco de la Construcción -->
            <a href="https://bancodelaconstruccion.com/" target="_blank" rel="noopener noreferrer" class="relative p-7 md:p-8 metric-card-interactive slide-card-left flex flex-col no-underline group">
                <span class="blueprint-corner" aria-hidden="true"></span>

                <div class="icon-box w-12 h-12 rounded-xl bg-construction/15 border border-construction/30 flex items-center justify-center mb-5 shrink-0">
                    <i data-lucide="calculator" class="w-6 h-6 text-construction"></i>
                </div>

                <h3 data-template-id="eco-3" class="font-heading font-bold text-base text-steel mb-2 leading-tight">
                    Banco de la Construcción
                </h3>
                <p class="text-xs sm:text-sm text-carbon/80 font-sans leading-relaxed mb-4 flex-1">
                    Herramientas para presupuestos, APUs y cotizaciones rápidas.
                </p>

                <div class="card-action mt-auto">
                    <span class="inline-flex items-center text-xs font-semibold text-construction group-hover:text-steel transition-colors">
                        Visitar plataforma &rarr;
                    </span>
                </div>
            </a>
        </div>

        <p data-template-id="eco-note" class="text-xs text-center text-carbon/60 font-sans max-w-2xl mx-auto">
            Mientras la comunidad conecta empresas con proveedores, Banco de la Construcción ayuda a procesar presupuestos y organizar información para APUs y propuestas.
        </p>
    </div>
</section>
