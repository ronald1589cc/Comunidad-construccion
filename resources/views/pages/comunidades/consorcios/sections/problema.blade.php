@php
    $problemas = [
        ['icon' => 'briefcase', 'text' => 'Experiencia en proyectos y obras similares'],
        ['icon' => 'award',     'text' => 'Especialidades y acreditaciones técnicas requeridas (ISOS, etc.)'],
        ['icon' => 'truck',     'text' => 'Capacidad operativa suficiente'],
        ['icon' => 'map-pin',   'text' => 'Presencia regional específica'],
        ['icon' => 'wallet',    'text' => 'Capacidad financiera y acceso a cartas fianzas'],
        ['icon' => 'users',     'text' => 'Profesionales clave y experiencia en OxI'],
    ];
@endphp

<section id="problema" class="w-full py-20 md:py-24 px-6 border-t border-concrete blueprint-grid relative overflow-hidden" aria-labelledby="problema-title">
    <div class="max-w-4xl mx-auto text-center">
        <div class="mb-12 md:mb-16 fade-up">
            <span class="inline-flex items-center px-4 py-1 rounded-full border border-construction text-construction text-xs md:text-sm font-semibold tracking-wide bg-white mb-5 shadow-2xs">
                El Desafío
            </span>
            <h2 id="problema-title" class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-steel font-heading tracking-tight leading-tight max-w-3xl mx-auto">
                Una empresa no siempre puede cumplir sola todos los requisitos de una licitación.
            </h2>
        </div>

        <ul role="list" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 max-w-3xl mx-auto mb-12 list-none p-0 m-0">
            @foreach ($problemas as $p)
                <li class="relative py-4 pl-4 pr-6 metric-card-interactive slide-card-left flex items-center gap-3 text-left">
                    <span class="blueprint-corner" aria-hidden="true"></span>

                    <div class="icon-box w-10 h-10 rounded-lg bg-construction/10 border border-construction/30 flex items-center justify-center shrink-0">
                        <i data-lucide="{{ $p['icon'] }}" class="w-5 h-5 text-construction" aria-hidden="true"></i>
                    </div>
                    <span class="text-sm font-medium text-steel font-sans">
                        {{ $p['text'] }}
                    </span>
                </li>
            @endforeach
        </ul>

        <blockquote class="security-quote max-w-2xl mx-auto p-6 md:p-8 text-left">
            <p class="text-sm md:text-base font-semibold text-steel font-heading leading-relaxed">
                La comunidad permite publicar una necesidad específica y conectar de forma directa con empresas interesadas en evaluar una alianza.
            </p>
        </blockquote>
    </div>
</section>
