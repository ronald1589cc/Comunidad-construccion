@php
    $seguridad_items = [
        ['icon' => 'shield-check', 'text' => 'Identidad del representante revisada'],
        ['icon' => 'building',     'text' => 'Relación con la empresa'],
        ['icon' => 'file-text',    'text' => 'Información empresarial básica'],
        ['icon' => 'eye',          'text' => 'Moderación activa de la comunidad'],
    ];
@endphp

<section id="seguridad" class="w-full py-20 md:py-24 px-6 border-t border-concrete blueprint-grid relative overflow-hidden" aria-labelledby="seguridad-title">
    <div class="max-w-4xl mx-auto text-center">
        <div class="mb-12 md:mb-16 fade-up">
            <span class="inline-flex items-center px-4 py-1 rounded-full border border-construction text-construction text-xs md:text-sm font-semibold tracking-wide bg-white mb-5 shadow-2xs">
                Seguridad &amp; Confianza
            </span>
            <h2 id="seguridad-title" class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-steel font-heading tracking-tight leading-tight max-w-3xl mx-auto mb-4">
                Verificación inicial. Evaluación independiente.
            </h2>
            <p class="text-sm max-w-2xl mx-auto text-carbon/80 font-sans leading-relaxed">
                Revisamos la identidad, relación empresarial y datos básicos del solicitante. Esta revisión no constituye una auditoría técnica, financiera, tributaria, legal, comercial ni reputacional.
            </p>
        </div>

        <ul role="list" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 max-w-4xl mx-auto mb-12 list-none p-0 m-0">
            @foreach ($seguridad_items as $item)
                <li class="relative p-5 metric-card-interactive slide-card-left flex flex-col items-center text-center">
                    <span class="blueprint-corner" aria-hidden="true"></span>

                    <div class="icon-box w-12 h-12 rounded-xl bg-construction/15 border border-construction/30 flex items-center justify-center mb-4 shrink-0">
                        <i data-lucide="{{ $item['icon'] }}" class="w-6 h-6 text-construction" aria-hidden="true"></i>
                    </div>

                    <span class="text-sm font-medium text-steel font-sans leading-snug">
                        {{ $item['text'] }}
                    </span>
                </li>
            @endforeach
        </ul>

        <blockquote class="security-quote max-w-2xl mx-auto p-6 md:p-8 text-left">
            <p class="text-sm md:text-base font-semibold text-steel font-heading leading-relaxed">
                Antes de formar un consorcio, establecer una relación comercial o realizar una inversión, cada empresa debe efectuar su propia debida diligencia y contar con asesoría especializada.
            </p>
        </blockquote>
    </div>
</section>
