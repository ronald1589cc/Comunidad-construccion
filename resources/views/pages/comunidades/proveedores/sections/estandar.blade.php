@php
    $puntos = [
        'Material, servicio o subcontrato requerido',
        'Especificaciones principales',
        'Unidad y cantidad requerida',
        'Alcance del servicio',
        'Ubicación del proyecto',
        'Estado del proyecto: licitación, presupuesto, adjudicado o ejecución',
        'Fecha límite para cotizar',
        'Fecha requerida de entrega o ejecución',
        'Necesidad de transporte, instalación o garantía',
        'Condiciones comerciales relevantes',
        'Canal de contacto directo',
    ];
@endphp

<section id="estandar" class="w-full py-20 md:py-24 px-6 border-t border-concrete blueprint-grid relative overflow-hidden" aria-labelledby="estandar-title">
    <div class="max-w-4xl mx-auto">
        <div class="text-center mb-12 md:mb-16 fade-up">
            <span class="inline-flex items-center px-4 py-1 rounded-full border border-construction text-construction text-xs md:text-sm font-semibold tracking-wide bg-white mb-5 shadow-2xs">
                Estándar de Publicación
            </span>
            <h2 id="estandar-title" class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-steel font-heading tracking-tight leading-tight">
                Requerimientos claros generan mejores respuestas.
            </h2>
            <p class="text-sm md:text-base text-carbon/80 font-sans max-w-2xl mx-auto mt-3 leading-relaxed">
                Para asegurar cotizaciones precisas y oportunas, incluye los datos clave de tu necesidad.
            </p>
        </div>

        <div class="relative p-7 md:p-10 metric-card-interactive slide-card-left mb-8 text-left">
            <span class="blueprint-corner" aria-hidden="true"></span>

            <ul class="grid sm:grid-cols-2 gap-3 list-none p-0 m-0">
                @foreach ($puntos as $pt)
                    <li class="flex items-start gap-3">
                        <i data-lucide="check" class="w-4.5 h-4.5 text-construction shrink-0 mt-0.5"></i>
                        <span class="text-sm text-carbon/80 font-sans leading-relaxed">
                            {{ $pt }}
                        </span>
                    </li>
                @endforeach
            </ul>
        </div>

        <blockquote class="security-quote max-w-3xl mx-auto p-6 md:p-8 text-left">
            <p class="text-xs sm:text-sm text-carbon/80 font-sans leading-relaxed italic">
                Los requerimientos incompletos, engañosos o sin relación con construcción pueden ser observados o retirados por la moderación.
            </p>
        </blockquote>
    </div>
</section>
