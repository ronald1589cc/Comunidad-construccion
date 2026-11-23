@php
    $pasos = [
        ['icon' => 'file-text',      'title' => 'Solicitas acceso',      'text' => 'Compartes tus datos de contacto y necesidad principal.'],
        ['icon' => 'shield-check',   'title' => 'Validamos tu perfil',   'text' => 'Revisamos tu identidad, relación con la empresa y datos básicos.'],
        ['icon' => 'send',           'title' => 'Publicas tu necesidad', 'text' => 'Indicas el tipo de proyecto, experiencia o aliado que buscas.'],
        ['icon' => 'message-square', 'title' => 'Recibes respuestas',    'text' => 'Las empresas interesadas se comunican directamente contigo.'],
        ['icon' => 'check-circle-2', 'title' => 'Evalúas y decides',     'text' => 'Cada empresa realiza su propia debida diligencia.'],
    ];
@endphp

<section id="como-funciona" class="w-full py-20 md:py-24 px-6 border-t border-concrete blueprint-grid relative overflow-hidden" aria-labelledby="como-funciona-title">
    <div class="max-w-3xl mx-auto">
        <div class="text-center mb-12 md:mb-16 fade-up">
            <span class="inline-flex items-center px-4 py-1 rounded-full border border-construction text-construction text-xs md:text-sm font-semibold tracking-wide bg-white mb-5 shadow-2xs">
                Cómo funciona
            </span>
            <h2 id="como-funciona-title" class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-steel font-heading tracking-tight leading-tight">
                El proceso paso a paso para formar consorcios
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
