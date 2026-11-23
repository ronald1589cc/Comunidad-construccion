@php
    $beneficios = [
        ['icon' => 'search', 'text' => 'Acceder a requerimientos publicados por empresas del sector'],
        ['icon' => 'send',   'text' => 'Responder a publicaciones relacionadas con tu especialidad'],
        ['icon' => 'link-2', 'text' => 'Conectar directamente con empresas y reclutadores'],
        ['icon' => 'eye',    'text' => 'Dar visibilidad a tu experiencia profesional'],
    ];
@endphp

<section id="profesionales" class="w-full py-20 md:py-24 px-6 border-t border-concrete blueprint-grid relative overflow-hidden" aria-labelledby="profesionales-title">
    <div class="max-w-4xl mx-auto text-center">
        <div class="mb-12 md:mb-16 fade-up">
            <span class="inline-flex items-center px-4 py-1 rounded-full border border-construction text-construction text-xs md:text-sm font-semibold tracking-wide bg-white mb-5 shadow-2xs">
                Para Profesionales
            </span>
            <h2 id="profesionales-title" class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-steel font-heading tracking-tight leading-tight max-w-3xl mx-auto">
                Convierte tu experiencia en nuevas oportunidades profesionales
            </h2>
        </div>

        <div class="grid sm:grid-cols-2 gap-4 mb-10 text-left">
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

        <blockquote class="security-quote max-w-3xl mx-auto p-6 md:p-8 text-left space-y-2">
            <p class="text-xs sm:text-sm text-carbon/80 font-sans leading-relaxed">
                • Algunas publicaciones pueden corresponder a licitaciones o expresiones de interés y no representan una contratación confirmada.
            </p>
            <p class="text-xs sm:text-sm text-carbon/80 font-sans leading-relaxed">
                • La empresa responsable realiza su propio proceso de evaluación y selección.
            </p>
            <p class="text-xs sm:text-sm text-carbon/80 font-sans leading-relaxed">
                • Una expresión de interés o solicitud de CV no constituye una oferta laboral ni garantiza una futura contratación.
            </p>
        </blockquote>
    </div>
</section>
