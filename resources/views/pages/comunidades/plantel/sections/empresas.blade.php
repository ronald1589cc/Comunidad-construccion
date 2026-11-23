@php
    $necesidades = [
        ['icon' => 'graduation-cap', 'text' => 'Profesionales titulados con colegiatura y habilitación vigente'],
        ['icon' => 'award',          'text' => 'Experiencia general y específica en proyectos similares'],
        ['icon' => 'briefcase',      'text' => 'Disponibilidad inmediata y ubicación regional requerida'],
        ['icon' => 'map-pin',        'text' => 'Especialistas para ejecución, supervisión o consultoría'],
    ];

    $especialidades = [
        'Ingeniería civil y estructuras',
        'Arquitectura',
        'Residencia y supervisión',
        'Costos, presupuestos y programación',
        'Seguridad, salud y medio ambiente',
        'Calidad',
        'Obras viales',
        'Saneamiento e hidráulica',
        'Electricidad y mecánica',
        'Geotecnia',
        'Gestión de proyectos',
    ];
@endphp

<section id="empresas" class="w-full py-20 md:py-24 px-6 border-t border-concrete blueprint-grid relative overflow-hidden" aria-labelledby="empresas-title">
    <div class="max-w-4xl mx-auto text-center">
        <div class="mb-12 md:mb-16 fade-up">
            <span class="inline-flex items-center px-4 py-1 rounded-full border border-construction text-construction text-xs md:text-sm font-semibold tracking-wide bg-white mb-5 shadow-2xs">
                Para Empresas
            </span>
            <h2 id="empresas-title" class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-steel font-heading tracking-tight leading-tight max-w-3xl mx-auto">
                Completar un plantel profesional técnico puede definir si una empresa participa o no en una licitación.
            </h2>
        </div>

        <!-- 4 Requerimientos Clave -->
        <div class="grid sm:grid-cols-2 gap-4 mb-10 text-left">
            @foreach ($necesidades as $n)
                <div class="relative p-5 metric-card-interactive slide-card-left flex items-start gap-4">
                    <span class="blueprint-corner" aria-hidden="true"></span>

                    <div class="icon-box w-10 h-10 rounded-lg bg-construction/10 border border-construction/30 flex items-center justify-center shrink-0">
                        <i data-lucide="{{ $n['icon'] }}" class="w-5 h-5 text-construction" aria-hidden="true"></i>
                    </div>

                    <span class="text-sm font-medium text-steel font-sans leading-snug">
                        {{ $n['text'] }}
                    </span>
                </div>
            @endforeach
        </div>

        <blockquote class="security-quote max-w-2xl mx-auto p-6 md:p-8 text-left mb-12">
            <p class="text-sm md:text-base font-semibold text-steel font-heading leading-relaxed">
                La comunidad permite publicar un requerimiento y recibir respuestas directas de profesionales interesados.
            </p>
        </blockquote>

        <!-- Áreas y especialidades -->
        <div class="max-w-3xl mx-auto fade-up">
            <h3 class="font-heading font-bold text-lg text-steel mb-5">
                Áreas y especialidades
            </h3>
            <div class="flex flex-wrap justify-center gap-2 mb-4">
                @foreach ($especialidades as $esp)
                    <span class="px-3.5 py-1.5 border border-concrete bg-white text-xs font-medium text-carbon/80 rounded-full shadow-2xs">
                        {{ $esp }}
                    </span>
                @endforeach
            </div>
            <p class="text-xs text-carbon/60 font-sans">
                La disponibilidad de perfiles depende de los miembros activos y de las respuestas recibidas.
            </p>
        </div>
    </div>
</section>
