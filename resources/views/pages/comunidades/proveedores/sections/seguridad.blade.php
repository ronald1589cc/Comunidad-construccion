@php
    $pilares = [
        ['icon' => 'shield-check', 'text' => 'Identidad del representante revisada'],
        ['icon' => 'user',         'text' => 'Relación verificada con la empresa'],
        ['icon' => 'building',     'text' => 'Información empresarial y RUC básica'],
        ['icon' => 'eye',          'text' => 'Moderación activa permanente'],
        ['icon' => 'book-open',    'text' => 'Normas estrictas de convivencia y respeto'],
        ['icon' => 'flag',         'text' => 'Mecanismo de reporte contra spam'],
    ];
@endphp

<section id="seguridad" class="w-full py-20 md:py-24 px-6 border-t border-concrete blueprint-grid relative overflow-hidden" aria-labelledby="seguridad-title">
    <div class="max-w-4xl mx-auto text-center">
        <div class="mb-12 md:mb-16 fade-up">
            <span class="inline-flex items-center px-4 py-1 rounded-full border border-construction text-construction text-xs md:text-sm font-semibold tracking-wide bg-white mb-5 shadow-2xs">
                Seguridad Comercial
            </span>
            <h2 id="seguridad-title" class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-steel font-heading tracking-tight leading-tight max-w-3xl mx-auto mb-4">
                Identidad revisada. Evaluación comercial a cargo de las partes.
            </h2>
            <p class="text-sm max-w-2xl mx-auto text-carbon/80 font-sans leading-relaxed">
                Revisamos la identidad, relación empresarial e información básica del solicitante. Esta revisión no constituye una auditoría técnica, financiera, tributaria, legal, comercial o reputacional.
            </p>
        </div>

        <ul role="list" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 max-w-3xl mx-auto mb-10 list-none p-0 m-0">
            @foreach ($pilares as $p)
                <li class="relative py-4 pl-4 pr-6 metric-card-interactive slide-card-left flex items-center gap-3 text-left">
                    <span class="blueprint-corner" aria-hidden="true"></span>

                    <div class="icon-box w-10 h-10 rounded-lg bg-construction/10 border border-construction/30 flex items-center justify-center shrink-0">
                        <i data-lucide="{{ $p['icon'] }}" class="w-5 h-5 text-construction" aria-hidden="true"></i>
                    </div>
                    <span class="text-sm font-medium text-steel font-sans">
                        {{ $p['text'] }}
                    </span>
                </li>
            @endforeach
        </ul>

        <blockquote class="security-quote max-w-3xl mx-auto p-6 md:p-8 text-left mb-6">
            <p class="text-xs sm:text-sm text-carbon/80 font-sans leading-relaxed">
                Antes de comprar, vender, contratar, otorgar crédito o realizar pagos, cada empresa debe verificar directamente RUC, experiencia, capacidad, referencias, garantías, condiciones comerciales y documentación del potencial aliado. No se permite el spam, la recolección masiva de contactos ni el uso indebido de cotizaciones o información comercial.
            </p>
        </blockquote>

        <p class="text-xs text-center text-carbon/60 font-sans max-w-2xl mx-auto">
            Los datos y cotizaciones recibidos deben utilizarse únicamente para el requerimiento comunicado.
        </p>
    </div>
</section>
