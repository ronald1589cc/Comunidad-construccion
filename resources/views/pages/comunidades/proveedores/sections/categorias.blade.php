@php
    $categorias = [
        [
            'num' => '01',
            'icon' => 'box',
            'title' => 'Materiales y bienes',
            'items' => [
                'Cemento, concreto y agregados',
                'Acero y estructuras metálicas',
                'Tuberías y accesorios',
                'Material eléctrico y sanitario',
                'Acabados y revestimientos',
                'Equipos de seguridad y EPP',
                'Herramientas y suministros menores',
            ]
        ],
        [
            'num' => '02',
            'icon' => 'wrench',
            'title' => 'Servicios',
            'items' => [
                'Transporte y logística pesada',
                'Topografía y geodesia',
                'Ensayos y laboratorio de suelos',
                'Alquiler de maquinaria y equipos',
                'Mantenimiento electromecánico',
                'Servicios ambientales y seguridad',
                'Consultoría técnica y supervisión',
            ]
        ],
        [
            'num' => '03',
            'icon' => 'hard-hat',
            'title' => 'Subcontratos',
            'items' => [
                'Movimiento de tierras y excavaciones',
                'Concreto armado y estructuras',
                'Instalaciones eléctricas y sanitarias',
                'Obras viales, pavimentos y pistas',
                'Montaje de estructuras metálicas',
                'Pintura y acabados especializados',
                'Partidas técnicas complementarias',
            ]
        ],
    ];
@endphp

<section id="categorias" class="w-full py-20 md:py-24 px-6 border-t border-concrete blueprint-grid relative overflow-hidden" aria-labelledby="categorias-title">
    <div class="max-w-5xl mx-auto">
        <div class="text-center mb-12 md:mb-16 fade-up">
            <span class="inline-flex items-center px-4 py-1 rounded-full border border-construction text-construction text-xs md:text-sm font-semibold tracking-wide bg-white mb-5 shadow-2xs">
                Categorías de Suministro
            </span>
            <h2 id="categorias-title" class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-steel font-heading tracking-tight leading-tight">
                Categorías de proveedores y subcontratos
            </h2>
            <p class="text-sm md:text-base text-carbon/80 font-sans max-w-2xl mx-auto mt-3 leading-relaxed">
                Publica o responde requerimientos relacionados con materiales, servicios, equipos, transporte y partidas especializadas de construcción.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-6 mb-8">
            @foreach ($categorias as $cat)
                <div class="relative p-7 md:p-8 metric-card-interactive slide-card-left flex flex-col text-left">
                    <span class="blueprint-corner" aria-hidden="true"></span>
                    <span class="card-num text-xs md:text-sm font-bold font-stats tracking-wider mb-2">{{ $cat['num'] }}</span>

                    <div class="icon-box w-12 h-12 rounded-xl bg-construction/15 border border-construction/30 flex items-center justify-center mb-5 shrink-0">
                        <i data-lucide="{{ $cat['icon'] }}" class="w-6 h-6 text-construction"></i>
                    </div>

                    <h3 class="font-heading font-bold text-lg text-steel mb-4 leading-tight">
                        {{ $cat['title'] }}
                    </h3>

                    <ul class="space-y-2 list-none p-0 m-0 flex-1">
                        @foreach ($cat['items'] as $item)
                            <li class="text-xs sm:text-sm text-carbon/80 font-sans leading-relaxed flex items-start gap-2">
                                <span class="text-construction font-bold leading-tight select-none">•</span>
                                <span>{{ $item }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>

        <p class="text-xs text-center text-carbon/60 font-sans max-w-2xl mx-auto">
            Las categorías no representan inventario disponible. La disponibilidad depende de los miembros activos y de las respuestas recibidas.
        </p>
    </div>
</section>
