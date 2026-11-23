@php
    $pilares = [
        ['icon' => 'shield-check', 'text' => 'Identidad revisada'],
        ['icon' => 'user',         'text' => 'Perfil profesional o empresarial'],
        ['icon' => 'eye',          'text' => 'Moderación activa y cero SPAM'],
        ['icon' => 'book-open',    'text' => 'Normas de convivencia y transparencia'],
        ['icon' => 'flag',         'text' => 'Reporte de conductas inapropiadas'],
        ['icon' => 'lock',         'text' => 'Protección de la confianza de la red'],
    ];
@endphp
<section id="seguridad" class="w-full py-20 md:py-24 px-6 border-t border-concrete blueprint-grid relative overflow-hidden" aria-labelledby="seguridad-title">
    <div class="max-w-4xl mx-auto text-center">
        <div class="mb-12 fade-up">
            <span class="inline-flex items-center px-4 py-1 rounded-full border border-construction text-construction text-xs md:text-sm font-semibold tracking-wide bg-white mb-5 shadow-2xs">
                Seguridad
            </span>
            <h2 id="seguridad-title" class="text-2xl sm:text-3xl md:text-4xl font-extrabold mb-6 text-steel font-heading tracking-tight leading-tight max-w-3xl mx-auto">
                Una comunidad abierta a oportunidades, pero cerrada a perfiles no identificados.
            </h2>
            <p class="text-sm max-w-2xl mx-auto text-carbon/80 font-sans leading-relaxed">
                Revisamos la identidad y la relación profesional o empresarial de cada solicitante. Esta validación no representa una auditoría técnica, financiera, legal ni comercial. Cada miembro debe realizar su propia evaluación antes de establecer acuerdos.
            </p>
        </div>

        <!-- 6 pilares de seguridad -->
        <ul role="list" data-seguridad-grid
            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 max-w-3xl mx-auto mb-12 list-none p-0 m-0">
            @foreach ($pilares as $p)
                <li class="relative py-4 pl-4 pr-6 metric-card-interactive slide-card-left flex items-center gap-3 text-left">
                    <span class="blueprint-corner" aria-hidden="true"></span>

                    <div class="icon-box w-9 h-9 rounded-lg bg-construction/10 border border-construction/30 flex items-center justify-center shrink-0">
                        <i data-lucide="{{ $p['icon'] }}" class="w-5 h-5 text-construction" aria-hidden="true"></i>
                    </div>
                    <span class="text-sm font-medium text-steel font-sans">
                        {{ $p['text'] }}
                    </span>
                </li>
            @endforeach
        </ul>

        <!-- Cita destacada -->
        <blockquote class="security-quote max-w-2xl mx-auto p-6 md:p-8 text-left">
            <p class="text-base md:text-lg font-semibold italic text-construction font-heading leading-relaxed">
                «Buscamos construir la red más grande, confiable, segura e innovadora de Latinoamérica.»
            </p>
        </blockquote>
    </div>
</section>