@php
    $pasos_empresas = [
        ['icon' => 'file-text',      'title' => 'Solicita acceso',          'text' => 'Completa tu solicitud indicando tus datos y requerimientos.'],
        ['icon' => 'shield-check',   'title' => 'Validamos identidad',      'text' => 'Revisamos la identidad de tu representante y relación con la empresa.'],
        ['icon' => 'send',           'title' => 'Publica una oportunidad',  'text' => 'Comparte el perfil técnico requerido y condiciones de participación.'],
        ['icon' => 'message-square', 'title' => 'Recibe respuestas',        'text' => 'Profesionales cualificados interesados te contactan directamente.'],
        ['icon' => 'handshake',      'title' => 'Conecta directamente',     'text' => 'Coordina entrevistas, evalúa CVs y selecciona a los candidatos.'],
    ];

    $pasos_profesionales = [
        ['icon' => 'file-text',      'title' => 'Solicita acceso',          'text' => 'Indica tus datos de contacto y especialidad técnica.'],
        ['icon' => 'shield-check',   'title' => 'Validamos tu perfil',      'text' => 'Comprobamos tu identidad y trayectoria profesional básica.'],
        ['icon' => 'search',         'title' => 'Explora oportunidades',    'text' => 'Accede a convocatorias técnicas publicadas por empresas socias.'],
        ['icon' => 'send',           'title' => 'Postula tu experiencia',   'text' => 'Responde a los requerimientos que coincidan con tu perfil.'],
        ['icon' => 'briefcase',      'title' => 'Participa en proyectos',   'text' => 'Coordina directamente con las empresas contratantes.'],
    ];
@endphp

<section id="como-funciona" class="w-full py-20 md:py-24 px-6 border-t border-concrete blueprint-grid relative overflow-hidden" aria-labelledby="como-funciona-title">
    <div class="max-w-3xl mx-auto tabs-container">
        <div class="text-center mb-10 md:mb-14 fade-up">
            <span class="inline-flex items-center px-4 py-1 rounded-full border border-construction text-construction text-xs md:text-sm font-semibold tracking-wide bg-white mb-5 shadow-2xs">
                Cómo funciona
            </span>
            <h2 id="como-funciona-title" class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-steel font-heading tracking-tight leading-tight mb-8">
                El proceso paso a paso para conectar
            </h2>

            <!-- Botones de Pestañas -->
            <div class="inline-flex p-1 bg-concrete/60 rounded-xl border border-concrete">
                <button type="button" class="tab-btn active px-6 py-2.5 rounded-lg text-sm font-semibold transition" data-tab="empresas">
                    Para empresas
                </button>
                <button type="button" class="tab-btn px-6 py-2.5 rounded-lg text-sm font-semibold transition" data-tab="profesionales">
                    Para profesionales
                </button>
            </div>
        </div>

        <!-- Panel Empresas -->
        <div class="tab-panel" data-panel="empresas">
            <ol role="list" data-pasos class="flex flex-col gap-4 list-none p-0 m-0">
                @foreach ($pasos_empresas as $i => $p)
                    <li class="relative p-5 metric-card-interactive slide-card-left flex items-center gap-5 text-left">
                        <span class="blueprint-corner" aria-hidden="true"></span>

                        <span class="step-num shrink-0 w-10 h-10 bg-construction text-white flex items-center justify-center font-bold text-base font-stats">
                            {{ $i + 1 }}
                        </span>

                        <div class="flex-1 pr-5 sm:pr-0">
                            <h3 class="font-bold text-lg mb-1 text-steel font-heading">
                                {{ $p['title'] }}
                            </h3>
                            <p class="text-sm text-carbon/80 font-sans leading-relaxed">
                                {{ $p['text'] }}
                            </p>
                        </div>

                        <i data-lucide="{{ $p['icon'] }}" class="step-icon w-6 h-6 shrink-0 hidden sm:block" aria-hidden="true"></i>
                    </li>
                @endforeach
            </ol>
        </div>

        <!-- Panel Profesionales -->
        <div class="tab-panel hidden" data-panel="profesionales">
            <ol role="list" data-pasos class="flex flex-col gap-4 list-none p-0 m-0">
                @foreach ($pasos_profesionales as $i => $p)
                    <li class="relative p-5 metric-card-interactive slide-card-left flex items-center gap-5 text-left">
                        <span class="blueprint-corner" aria-hidden="true"></span>

                        <span class="step-num shrink-0 w-10 h-10 bg-construction text-white flex items-center justify-center font-bold text-base font-stats">
                            {{ $i + 1 }}
                        </span>

                        <div class="flex-1 pr-5 sm:pr-0">
                            <h3 class="font-bold text-lg mb-1 text-steel font-heading">
                                {{ $p['title'] }}
                            </h3>
                            <p class="text-sm text-carbon/80 font-sans leading-relaxed">
                                {{ $p['text'] }}
                            </p>
                        </div>

                        <i data-lucide="{{ $p['icon'] }}" class="step-icon w-6 h-6 shrink-0 hidden sm:block" aria-hidden="true"></i>
                    </li>
                @endforeach
            </ol>
        </div>
    </div>
</section>
