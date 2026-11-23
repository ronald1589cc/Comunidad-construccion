@php
    $audiencia = [
        [
            'num' => '01',
            'icon' => 'building-2',
            'title' => 'Contratistas ejecutores',
            'bullets' => [
                'Encontrar empresas para consorciar',
                'Complementar experiencia y capacidad financiera',
                'Acceder a proyectos de mayor alcance',
            ]
        ],
        [
            'num' => '02',
            'icon' => 'file-search',
            'title' => 'Empresas consultoras',
            'bullets' => [
                'Formar consorcios para consultorías',
                'Complementar especialidades técnicas',
                'Encontrar socios con presencia regional',
            ]
        ],
        [
            'num' => '03',
            'icon' => 'landmark',
            'title' => 'Ejecutores de Obras por Impuestos',
            'bullets' => [
                'Encontrar nuevas oportunidades OxI',
                'Identificar empresas financiadoras e inversionistas',
                'Conectar con consultoras y proveedores',
            ]
        ],
        [
            'num' => '04',
            'icon' => 'coins',
            'title' => 'Empresas privadas e inversionistas',
            'bullets' => [
                'Identificar potenciales empresas ejecutoras',
                'Encontrar socios técnicos para proyectos OxI',
                'Explorar oportunidades de inversión en infraestructura',
            ]
        ],
    ];
@endphp

<section id="para-quien" class="w-full py-20 md:py-24 px-6 border-t border-concrete blueprint-grid relative overflow-hidden" aria-labelledby="para-quien-title">
    <div class="max-w-6xl mx-auto">
        <div class="text-center mb-12 md:mb-16 fade-up">
            <span class="inline-flex items-center px-4 py-1 rounded-full border border-construction text-construction text-xs md:text-sm font-semibold tracking-wide bg-white mb-5 shadow-2xs">
                Audiencia
            </span>
            <h2 id="para-quien-title" class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-steel font-heading tracking-tight leading-tight">
                ¿Para quién es esta comunidad?
            </h2>
            <p class="text-sm md:text-base text-carbon/80 font-sans max-w-2xl mx-auto mt-3 leading-relaxed">
                Esta comunidad está diseñada para empresas que necesitan complementar capacidades, experiencia, financiamiento o aliados técnicos para competir mejor.
            </p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ($audiencia as $a)
                <div class="relative p-7 md:p-8 metric-card-interactive slide-card-left flex flex-col text-left">
                    <span class="blueprint-corner" aria-hidden="true"></span>
                    <span class="card-num text-xs md:text-sm font-bold font-stats tracking-wider mb-2">{{ $a['num'] }}</span>

                    <div class="icon-box w-12 h-12 rounded-xl bg-construction/15 border border-construction/30 flex items-center justify-center mb-5 shrink-0">
                        <i data-lucide="{{ $a['icon'] }}" class="w-6 h-6 text-construction"></i>
                    </div>

                    <h3 class="font-heading font-bold text-lg text-steel mb-4 leading-tight">
                        {{ $a['title'] }}
                    </h3>

                    <ul class="space-y-2.5 list-none p-0 m-0 flex-1">
                        @foreach ($a['bullets'] as $b)
                            <li class="text-sm text-carbon/80 font-sans leading-relaxed flex items-start gap-2">
                                <span class="text-construction font-bold leading-tight select-none">•</span>
                                <span>{{ $b }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
</section>
