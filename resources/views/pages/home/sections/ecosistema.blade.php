@php
    $soluciones = [
        ['icon' => 'search',      'text' => 'Encontrar socio para licitación'],
        ['icon' => 'users',       'text' => 'Completar plantel profesional'],
        ['icon' => 'briefcase',   'text' => 'Identificar inversionista'],
        ['icon' => 'truck',       'text' => 'Solicitar cotizaciones'],
        ['icon' => 'file-text',   'text' => 'Buscar proveedores'],
        ['icon' => 'link',        'text' => 'Encontrar subcontratistas'],
        ['icon' => 'dollar-sign', 'text' => 'Compartir oportunidades'],
        ['icon' => 'target',      'text' => 'Formar alianzas'],
    ];

    $flujo = [
        'Licitación identificada',
        'Socio encontrado',
        'Equipo técnico completado',
        'Proveedores cotizados',
        'Propuesta presentada',
        'Proyecto ejecutado',
    ];
@endphp
<section id="ecosistema" class="w-full py-20 md:py-24 px-6 border-t border-concrete blueprint-grid relative overflow-hidden" aria-labelledby="ecosistema-title">
    <div class="max-w-4xl mx-auto text-center">
        <div class="mb-12 fade-up">
            <span class="inline-flex items-center px-4 py-1 rounded-full border border-construction text-construction text-xs md:text-sm font-semibold tracking-wide bg-white mb-5 shadow-2xs">
                Ecosistema
            </span>
            <h2 id="ecosistema-title" class="text-2xl sm:text-3xl md:text-4xl font-extrabold mb-4 text-steel font-heading tracking-tight leading-tight max-w-3xl mx-auto">
                Todo lo que una empresa necesita para competir y ejecutar un proyecto.
            </h2>
            <p class="text-sm max-w-2xl mx-auto text-carbon/80 font-sans leading-relaxed">
                Una empresa puede encontrar, dentro del mismo ecosistema, el socio, el profesional y el proveedor que necesita en menos de 1 hora.
            </p>
        </div>

        <!-- 8 soluciones del ecosistema -->
        <ul role="list" data-ecosistema-grid
            class="grid grid-cols-2 md:grid-cols-4 gap-4 max-w-3xl mx-auto mb-10 list-none p-0 m-0">
            @foreach ($soluciones as $s)
                <li class="relative p-5 metric-card-interactive slide-card-left flex flex-col items-center justify-center text-center min-h-32">
                    <span class="blueprint-corner" aria-hidden="true"></span>

                    <div class="icon-box w-10 h-10 rounded-lg bg-construction/10 border border-construction/30 flex items-center justify-center mb-3">
                        <i data-lucide="{{ $s['icon'] }}" class="w-5 h-5 text-construction" aria-hidden="true"></i>
                    </div>
                    <p class="text-xs sm:text-sm font-medium text-steel font-sans leading-snug">
                        {{ $s['text'] }}
                    </p>
                </li>
            @endforeach
        </ul>

        <!-- Flujo del proyecto -->
        <div class="flow-card slide-card-left max-w-4xl mx-auto p-5 md:p-6 text-left">
            <p class="text-xs font-bold font-stats tracking-wider uppercase text-construction mb-4">
                Flujo del proyecto
            </p>
            <ol role="list" class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3 lg:gap-6 list-none p-0 m-0">
                @foreach ($flujo as $i => $paso)
                    <li class="flow-step {{ $loop->last ? 'flow-step--final' : '' }} p-3 flex flex-col gap-1">
                        <span class="flow-num text-xs font-bold font-stats text-construction">
                            {{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}
                        </span>
                        <span class="flow-text text-xs sm:text-sm font-medium text-steel font-sans leading-snug">
                            {{ $paso }}
                        </span>
                    </li>
                @endforeach
            </ol>
        </div>
    </div>
</section>