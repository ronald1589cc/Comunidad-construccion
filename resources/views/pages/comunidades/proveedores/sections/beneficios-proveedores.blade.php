@php
    $beneficios = [
        ['icon' => 'file-search', 'text' => 'Accede a requerimientos del sector construcción.'],
        ['icon' => 'send',        'text' => 'Responde a solicitudes relacionadas con tu oferta.'],
        ['icon' => 'users',       'text' => 'Conecta con contratistas y consultoras.'],
        ['icon' => 'map-pin',     'text' => 'Presenta tu cobertura, especialidad y capacidad.'],
        ['icon' => 'calculator',  'text' => 'Participa en cotizaciones para licitaciones, presupuestos y proyectos.'],
        ['icon' => 'handshake',   'text' => 'Genera relaciones comerciales directas.'],
    ];
@endphp

<section id="beneficios-proveedores" class="w-full py-20 md:py-24 px-6 border-t border-concrete blueprint-grid relative overflow-hidden" aria-labelledby="beneficios-proveedores-title">
    <div class="max-w-4xl mx-auto text-center">
        <div class="mb-12 md:mb-16 fade-up">
            <span class="inline-flex items-center px-4 py-1 rounded-full border border-construction text-construction text-xs md:text-sm font-semibold tracking-wide bg-white mb-5 shadow-2xs">
                Para Proveedores
            </span>
            <h2 id="beneficios-proveedores-title" class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-steel font-heading tracking-tight leading-tight max-w-3xl mx-auto">
                Convierte tus productos y servicios en nuevas oportunidades comerciales.
            </h2>
        </div>

        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-4 mb-10 text-left">
            @foreach ($beneficios as $b)
                <div class="relative p-5 metric-card-interactive slide-card-left flex items-start gap-4">
                    <span class="blueprint-corner" aria-hidden="true"></span>

                    <div class="icon-box w-10 h-10 rounded-lg bg-construction/10 border border-construction/30 flex items-center justify-center shrink-0">
                        <i data-lucide="{{ $b['icon'] }}" class="w-5 h-5 text-construction" aria-hidden="true"></i>
                    </div>

                    <span class="text-sm font-medium text-steel font-sans leading-snug">
                        {{ $b['text'] }}
                    </span>
                </div>
            @endforeach
        </div>

        <blockquote class="security-quote max-w-2xl mx-auto p-6 md:p-8 text-left">
            <p class="text-sm md:text-base font-semibold text-steel font-heading leading-relaxed italic">
                Una solicitud de cotización no constituye una orden de compra ni garantiza una futura contratación.
            </p>
        </blockquote>
    </div>
</section>
