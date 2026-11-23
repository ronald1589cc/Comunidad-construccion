@php
    $metrics = [
        ['value' => 55,   'prefix' => 'US$', 'suffix' => 'M+', 'label' => 'Licitaciones ganadas en nuestra comunidad.'],
        ['value' => 2500, 'prefix' => '',    'suffix' => '+',  'label' => 'Miembros verificados.'],
        ['value' => 1000, 'prefix' => '',    'suffix' => '+',  'label' => 'Oportunidades comerciales compartidas.'],
        ['value' => 100,  'prefix' => '',    'suffix' => '+',  'label' => 'Profesionales conectados con oportunidades laborales.'],
    ];
@endphp
<section id="resultados" class="w-full py-20 md:py-24 px-6 border-t border-concrete blueprint-grid relative overflow-hidden" aria-labelledby="resultados-title">
    <div class="max-w-6xl mx-auto text-center">
        <!-- Pastilla Resultados -->
        <span class="inline-flex items-center px-4 py-1 rounded-full border border-construction text-construction text-xs md:text-sm font-semibold tracking-wide bg-white mb-5 shadow-2xs">
            Resultados
        </span>

        <!-- Título principal -->
        <h2 class="text-2xl sm:text-3xl md:text-5xl font-extrabold mb-12 md:mb-16 text-steel font-heading tracking-tight leading-tight max-w-3xl mx-auto" id="resultados-title">
            Una red que genera acceso,<br class="hidden sm:inline"> conexiones y resultados reales.
        </h2>

        <!-- Fichas métricas idénticas a la imagen -->
         <ul role="list" data-resultados-grid
            class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 max-w-6xl mx-auto list-none p-0 m-0">
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
            Las métricas corresponden a resultados y actividad reportados dentro de las comunidades. La comunidad facilita conexiones, pero no garantiza adjudicaciones, contratos o empleos.
        </p>
    </div>
</section>
