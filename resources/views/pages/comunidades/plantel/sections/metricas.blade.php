@php
    $metrics = [
        ['value' => 1000, 'prefix' => '', 'suffix' => '+', 'display' => '1K+',  'label' => 'Oportunidades laborales compartidas', 'tid' => 'metric-1'],
        ['value' => 100,  'prefix' => '', 'suffix' => '+', 'display' => '100+', 'label' => 'Profesionales conectados con oportunidades', 'tid' => 'metric-2'],
        ['value' => 2500, 'prefix' => '', 'suffix' => '+', 'display' => '2.5K+', 'label' => 'Miembros con identidad y perfil validados', 'tid' => 'metric-3'],
    ];
@endphp

<section id="metricas" class="w-full py-20 md:py-24 px-6 border-t border-concrete blueprint-grid relative overflow-hidden" aria-labelledby="plantel-metrics-title">
    <div class="max-w-5xl mx-auto text-center">
        <!-- Pastilla Actividad -->
        <div class="text-center mb-12 md:mb-16 fade-up">
            <span class="inline-flex items-center px-4 py-1 rounded-full border border-construction text-construction text-xs md:text-sm font-semibold tracking-wide bg-white mb-5 shadow-2xs">
                Actividad
            </span>
            <h2 id="plantel-metrics-title" data-template-id="metrics-title" class="text-2xl sm:text-3xl md:text-5xl font-extrabold text-steel font-heading tracking-tight leading-tight max-w-3xl mx-auto mb-4">
                Actividad reportada en el ecosistema
            </h2>
            <p data-template-id="metrics-subtitle" class="text-sm md:text-base text-carbon/80 font-sans max-w-2xl mx-auto leading-relaxed">
                Números reales de una comunidad activa de profesionales y empresas conectadas.
            </p>
        </div>

        <!-- Fichas métricas tipo blueprint -->
        <ul role="list" data-resultados-grid class="grid grid-cols-1 sm:grid-cols-3 gap-6 max-w-4xl mx-auto list-none p-0 m-0">
            @foreach ($metrics as $i => $m)
                <li class="@container relative p-8 md:p-10 metric-card-interactive slide-card-left flex flex-col justify-between text-left min-h-48 sm:aspect-square">
                    <span class="blueprint-corner" aria-hidden="true"></span>

                    <span class="card-num text-xs md:text-sm font-bold font-stats tracking-wider">
                        {{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}
                    </span>

                    <div>
                        <p class="metric-value font-extrabold text-steel font-heading tracking-tight tabular-nums mb-2 md:mb-3"
                           data-count="{{ $m['value'] }}"
                           data-prefix="{{ $m['prefix'] }}"
                           data-suffix="{{ $m['suffix'] }}"
                           aria-label="{{ $m['display'] }}">
                            {{ $m['display'] }}
                        </p>
                        <p data-template-id="{{ $m['tid'] }}" class="text-xs sm:text-sm text-carbon/80 font-sans leading-relaxed font-medium">
                            {{ $m['label'] }}
                        </p>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</section>
