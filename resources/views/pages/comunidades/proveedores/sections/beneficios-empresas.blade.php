@php
    $rubros = [
        ['icon' => 'box',          'text' => 'Materiales y suministros'],
        ['icon' => 'wrench',       'text' => 'Servicios especializados'],
        ['icon' => 'truck',        'text' => 'Alquiler de equipos'],
        ['icon' => 'map-pin',      'text' => 'Transporte y logística'],
        ['icon' => 'hard-hat',     'text' => 'Subcontratistas'],
        ['icon' => 'map',          'text' => 'Proveedores regionales'],
        ['icon' => 'file-text',    'text' => 'Cotizaciones para presupuestos'],
        ['icon' => 'check-square', 'text' => 'Recursos para proyectos'],
    ];
@endphp

<section id="beneficios-empresas" class="w-full py-20 md:py-24 px-6 border-t border-concrete blueprint-grid relative overflow-hidden" aria-labelledby="beneficios-empresas-title">
    <div class="max-w-5xl mx-auto text-center">
        <div class="mb-12 md:mb-16 fade-up">
            <span class="inline-flex items-center px-4 py-1 rounded-full border border-construction text-construction text-xs md:text-sm font-semibold tracking-wide bg-white mb-5 shadow-2xs">
                Para Empresas
            </span>
            <h2 id="beneficios-empresas-title" class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-steel font-heading tracking-tight leading-tight max-w-3xl mx-auto mb-4">
                Conseguir cotizaciones inmediatas puede definir la viabilidad de una propuesta o proyecto.
            </h2>
            <p class="text-sm md:text-base max-w-2xl mx-auto text-carbon/80 font-sans leading-relaxed">
                Contratistas y consultoras necesitan comparar alternativas antes de cerrar un presupuesto, presentar una licitación o ejecutar una obra.
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-10 text-left">
            @foreach ($rubros as $r)
                <div class="relative p-5 metric-card-interactive slide-card-left flex items-center gap-3">
                    <span class="blueprint-corner" aria-hidden="true"></span>

                    <div class="icon-box w-10 h-10 rounded-lg bg-construction/10 border border-construction/30 flex items-center justify-center shrink-0">
                        <i data-lucide="{{ $r['icon'] }}" class="w-5 h-5 text-construction" aria-hidden="true"></i>
                    </div>

                    <span class="text-xs sm:text-sm font-medium text-steel font-sans leading-snug">
                        {{ $r['text'] }}
                    </span>
                </div>
            @endforeach
        </div>

        <blockquote class="security-quote max-w-2xl mx-auto p-6 md:p-8 text-left mb-6">
            <p class="text-sm md:text-base font-semibold text-steel font-heading leading-relaxed">
                La comunidad permite publicar una necesidad específica y recibir respuestas directas de proveedores interesados.
            </p>
        </blockquote>

        <p class="text-xs text-center text-carbon/60 font-sans max-w-2xl mx-auto">
            La disponibilidad depende de los miembros activos y de las respuestas recibidas.
        </p>
    </div>
</section>
