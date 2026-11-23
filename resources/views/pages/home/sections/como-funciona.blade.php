@php
    $pasos = [
        ['icon' => 'mouse-pointer-click', 'title' => 'Selecciona una comunidad', 'text' => 'Elige la red que corresponde a tu necesidad.'],
        ['icon' => 'file-text',           'title' => 'Completa tu solicitud',    'text' => 'Completa tu solicitud con los detalles necesarios.'],
        ['icon' => 'shield-check',        'title' => 'Validamos tu perfil',      'text' => 'Revisamos tu identidad y relación con el sector.'],
        ['icon' => 'mail-check',          'title' => 'Recibe acceso',            'text' => 'Una vez aprobada tu solicitud, recibirás el enlace correspondiente.'],
        ['icon' => 'message-circle',      'title' => 'Conecta y participa',      'text' => 'Publica oportunidades, encuentra aliados y conversa directamente con otros miembros.'],
    ];
@endphp
<section id="como-funciona" class="w-full py-20 md:py-24 px-6 border-t border-concrete blueprint-grid relative overflow-hidden" aria-labelledby="como-funciona-title">
    <div class="max-w-3xl mx-auto">
        <div class="text-center mb-12 md:mb-16 fade-up">
            <span class="inline-flex items-center px-4 py-1 rounded-full border border-construction text-construction text-xs md:text-sm font-semibold tracking-wide bg-white mb-5 shadow-2xs">
                Cómo funciona
            </span>
            <h2 id="como-funciona-title" class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-steel font-heading tracking-tight leading-tight">
                Conectar 10x más rápido con aliados confiables ahora es simple.
            </h2>
        </div>

        <ol role="list" data-pasos class="flex flex-col gap-4 list-none p-0 m-0">
            @foreach ($pasos as $i => $p)
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
</section>