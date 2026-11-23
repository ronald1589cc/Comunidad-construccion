@php
    $casos = [
        [
            'num' => '01',
            'title' => 'Contratista que busca experiencia complementaria',
            'desc' => 'Una empresa identifica una licitación para la cual necesita complementar experiencia en una especialidad. Publica su requerimiento y recibe contactos de empresas interesadas en evaluar un consorcio.',
        ],
        [
            'num' => '02',
            'title' => 'Consultora que busca socio regional',
            'desc' => 'Una consultora encuentra una oportunidad de supervisión o expediente técnico y busca una empresa con presencia regional o experiencia específica para evaluar una postulación conjunta.',
        ],
        [
            'num' => '03',
            'title' => 'Empresa que explora Obras por Impuestos',
            'desc' => 'Una empresa privada, inversionista o ejecutor busca aliados técnicos, consultoras o empresas ejecutoras para evaluar proyectos bajo el mecanismo de Obras por Impuestos.',
        ],
    ];
@endphp

<section id="casos" class="w-full py-20 md:py-24 px-6 border-t border-concrete blueprint-grid relative overflow-hidden" aria-labelledby="casos-title">
    <div class="max-w-5xl mx-auto">
        <div class="text-center mb-12 md:mb-16 fade-up">
            <span class="inline-flex items-center px-4 py-1 rounded-full border border-construction text-construction text-xs md:text-sm font-semibold tracking-wide bg-white mb-5 shadow-2xs">
                Casos de Conexión
            </span>
            <h2 id="casos-title" class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-steel font-heading tracking-tight leading-tight">
                Ejemplos de conexiones que pueden generarse
            </h2>
            <p class="text-sm md:text-base text-carbon/80 font-sans max-w-2xl mx-auto mt-3 leading-relaxed">
                Estos son escenarios ilustrativos de cómo una empresa puede usar la comunidad.
            </p>
        </div>

        <div class="grid sm:grid-cols-3 gap-6 mb-8">
            @foreach ($casos as $caso)
                <div class="relative p-7 md:p-8 metric-card-interactive slide-card-left flex flex-col text-left">
                    <span class="blueprint-corner" aria-hidden="true"></span>
                    <span class="card-num text-xs md:text-sm font-bold font-stats tracking-wider mb-4">{{ $caso['num'] }}</span>

                    <h3 class="font-heading font-bold text-lg text-steel mb-3 leading-tight">
                        {{ $caso['title'] }}
                    </h3>

                    <p class="text-sm text-carbon/80 font-sans leading-relaxed flex-1">
                        {{ $caso['desc'] }}
                    </p>
                </div>
            @endforeach
        </div>

        <p class="text-xs text-center text-carbon/60 font-sans max-w-2xl mx-auto">
            Los ejemplos son ilustrativos. Cada alianza depende de la evaluación independiente entre las partes.
        </p>
    </div>
</section>
