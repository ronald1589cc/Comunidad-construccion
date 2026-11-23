@php
    $metrics = [
        ['value' => 2500, 'prefix' => '',    'suffix' => '+',  'label' => 'Miembros verificados en el ecosistema'],
        ['value' => 55,   'prefix' => 'US$', 'suffix' => 'M+', 'label' => 'En adjudicaciones reportadas por empresas miembros'],
        ['value' => 1000, 'prefix' => '',    'suffix' => '+',  'label' => 'Oportunidades compartidas en el ecosistema'],
        ['value' => 3,    'prefix' => '',    'suffix' => '',   'label' => 'Comunidades conectando empresas, profesionales y proveedores'],
    ];
@endphp

<section id="metricas" class="w-full py-20 md:py-24 px-6 border-t border-concrete blueprint-grid relative overflow-hidden" aria-labelledby="metricas-title">
    <div class="max-w-6xl mx-auto text-center">
        <div class="text-center mb-12 md:mb-16 fade-up">
            <span class="inline-flex items-center px-4 py-1 rounded-full border border-construction text-construction text-xs md:text-sm font-semibold tracking-wide bg-white mb-5 shadow-2xs">
                Resultados
            </span>
            <h2 id="metricas-title" class="text-2xl sm:text-3xl md:text-5xl font-extrabold text-steel font-heading tracking-tight leading-tight max-w-3xl mx-auto">
                Una red con actividad real en el sector construcción.
            </h2>
        </div>

        <!-- Fichas métricas tipo blueprint -->
        <ul role="list" data-resultados-grid class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 max-w-6xl mx-auto list-none p-0 m-0">
            @foreach ($metrics as $i => $m)
                <li class="@container relative p-7 md:p-8 metric-card-interactive slide-card-left flex flex-col justify-between text-left min-h-48 sm:aspect-square">
                    <span class="blueprint-corner" aria-hidden="true"></span>

                    <span class="card-num text-xs md:text-sm font-bold font-stats tracking-wider">
                        {{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}
                    </span>

                    <div>
                        <p class="metric-value font-extrabold text-steel font-heading tracking-tight tabular-nums mb-2 md:mb-3"
                           data-count="{{ $m['value'] }}"
                           data-prefix="{{ $m['prefix'] }}"
                           data-suffix="{{ $m['suffix'] }}"
                           aria-label="{{ $m['prefix'] }}{{ number_format($m['value']) }}{{ $m['suffix'] }}">
                            {{ $m['prefix'] }}{{ number_format($m['value']) }}{{ $m['suffix'] }}
                        </p>
                        <p class="text-xs sm:text-sm text-carbon/80 font-sans leading-relaxed font-medium sm:min-h-[3.25em]">
                            {{ $m['label'] }}
                        </p>
                    </div>
                </li>
            @endforeach
        </ul>

        <!-- Nota al pie -->
        <p class="text-xs mt-12 max-w-2xl mx-auto text-carbon/60 font-sans leading-relaxed">
            Las métricas corresponden a actividad reportada dentro del ecosistema. La comunidad facilita conexiones, pero no garantiza cotizaciones, compras, ventas, crédito, contratos ni adjudicaciones.
        </p>
    </div>
</section>
