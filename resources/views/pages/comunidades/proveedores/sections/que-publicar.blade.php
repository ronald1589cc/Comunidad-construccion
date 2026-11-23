@php
    $publicaciones = [
        ['icon' => 'box',         'text' => 'Solicitudes de cotización para materiales'],
        ['icon' => 'map-pin',     'text' => 'Búsqueda de proveedores regionales'],
        ['icon' => 'truck',       'text' => 'Alquiler de maquinaria y equipos'],
        ['icon' => 'wrench',      'text' => 'Servicios especializados'],
        ['icon' => 'hard-hat',    'text' => 'Subcontratistas por partida'],
        ['icon' => 'file-text',   'text' => 'Cotizaciones para presupuestos y licitaciones'],
        ['icon' => 'navigation',  'text' => 'Transporte, logística e instalación'],
        ['icon' => 'building-2',  'text' => 'Proveedores para ejecución de obra'],
    ];
@endphp

<section id="que-publicar" class="w-full py-20 md:py-24 px-6 border-t border-concrete blueprint-grid relative overflow-hidden" aria-labelledby="que-publicar-title">
    <div class="max-w-5xl mx-auto">
        <div class="text-center mb-12 md:mb-16 fade-up">
            <span class="inline-flex items-center px-4 py-1 rounded-full border border-construction text-construction text-xs md:text-sm font-semibold tracking-wide bg-white mb-5 shadow-2xs">
                Publicaciones
            </span>
            <h2 id="que-publicar-title" class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-steel font-heading tracking-tight leading-tight">
                Qué puedes publicar o encontrar dentro de la comunidad
            </h2>
            <p class="text-sm md:text-base text-carbon/80 font-sans max-w-2xl mx-auto mt-3 leading-relaxed">
                Publica requerimientos concretos o identifica oportunidades relacionadas con abastecimiento, cotizaciones y ejecución de proyectos de construcción.
            </p>
        </div>

        <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-4 mb-8">
            @foreach ($publicaciones as $pub)
                <div class="relative p-5 metric-card-interactive slide-card-left flex items-center gap-3 text-left">
                    <span class="blueprint-corner" aria-hidden="true"></span>

                    <div class="icon-box w-10 h-10 rounded-lg bg-construction/10 border border-construction/30 flex items-center justify-center shrink-0">
                        <i data-lucide="{{ $pub['icon'] }}" class="w-5 h-5 text-construction" aria-hidden="true"></i>
                    </div>

                    <span class="text-sm font-medium text-steel font-sans leading-snug">
                        {{ $pub['text'] }}
                    </span>
                </div>
            @endforeach
        </div>

        <p class="text-xs text-center text-carbon/60 font-sans max-w-2xl mx-auto">
            Sujeto a disponibilidad, interés y evaluación independiente de los miembros.
        </p>
    </div>
</section>
