@php
    $pasos_empresas = [
        ['icon' => 'file-text',      'title' => 'Solicitas acceso como empresa compradora',   'text' => 'Indica los datos de tu empresa y el tipo de compras o subcontratos habituales.'],
        ['icon' => 'shield-check',   'title' => 'Validamos tu identidad y relación empresarial', 'text' => 'Comprobamos la identidad de tu representante y los datos del RUC de la empresa.'],
        ['icon' => 'send',           'title' => 'Publicas un requerimiento claro',             'text' => 'Detalla las especificaciones técnicas, cantidad, plazos y lugar de entrega.'],
        ['icon' => 'message-square', 'title' => 'Recibes respuestas de proveedores',          'text' => 'Proveedores y subcontratistas calificados te envían sus propuestas directas.'],
        ['icon' => 'handshake',      'title' => 'Comparas, verificas y negocias',             'text' => 'Evalúas cotizaciones, coordinas términos y cierras acuerdos independientes.'],
    ];

    $pasos_proveedores = [
        ['icon' => 'file-text',      'title' => 'Registras tu empresa como proveedor',         'text' => 'Indica tu rubro, catálogo de productos o servicios y cobertura geográfica.'],
        ['icon' => 'shield-check',   'title' => 'Validamos tu identidad y relación empresarial', 'text' => 'Revisamos tu representación legal e información comercial básica.'],
        ['icon' => 'search',         'title' => 'Accedes a requerimientos comerciales',        'text' => 'Revisa en tiempo real las solicitudes de materiales, equipos o subcontratos.'],
        ['icon' => 'send',           'title' => 'Envías tu cotización o presentación',         'text' => 'Contacta de inmediato a las empresas que buscan lo que ofreces.'],
        ['icon' => 'handshake',      'title' => 'Coordinas directamente con la empresa',       'text' => 'Negocia condiciones comerciales, plazos de entrega y forma de pago.'],
    ];
@endphp

<section id="como-funciona" class="w-full py-20 md:py-24 px-6 border-t border-concrete blueprint-grid relative overflow-hidden" aria-labelledby="como-funciona-title">
    <div class="max-w-3xl mx-auto tabs-container">
        <div class="text-center mb-10 md:mb-14 fade-up">
            <span class="inline-flex items-center px-4 py-1 rounded-full border border-construction text-construction text-xs md:text-sm font-semibold tracking-wide bg-white mb-5 shadow-2xs">
                Cómo funciona
            </span>
            <h2 id="como-funciona-title" class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-steel font-heading tracking-tight leading-tight mb-8">
                El proceso paso a paso para cotizar y suministrar
            </h2>

            <!-- Botones de Pestañas -->
            <div class="inline-flex p-1 bg-concrete/60 rounded-xl border border-concrete">
                <button type="button" class="tab-btn active px-6 py-2.5 rounded-lg text-sm font-semibold transition" data-tab="empresas">
                    Para empresas
                </button>
                <button type="button" class="tab-btn px-6 py-2.5 rounded-lg text-sm font-semibold transition" data-tab="proveedores">
                    Para proveedores
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

        <!-- Panel Proveedores -->
        <div class="tab-panel hidden" data-panel="proveedores">
            <ol role="list" data-pasos class="flex flex-col gap-4 list-none p-0 m-0">
                @foreach ($pasos_proveedores as $i => $p)
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
