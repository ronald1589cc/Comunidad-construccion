@php
    $canales = [
        [
            'icon' => 'linkedin',
            'title' => 'LinkedIn',
            'text' => 'Sigue las novedades, alianzas y oportunidades de la comunidad.',
            'href' => 'https://www.linkedin.com/company/construction-ai-community/',
            'label' => 'Seguir en LinkedIn',
            'external' => true,
        ],
        [
            'icon' => 'newspaper',
            'title' => 'Substack',
            'text' => 'Lee análisis, recursos y contenido sobre construcción, licitaciones, tecnología e inteligencia artificial.',
            'href' => 'https://substack.com/@robertochavezporras',
            'label' => 'Leer en Substack',
            'external' => true,
        ],
        [
            'icon' => 'mail',
            'title' => 'Email',
            'text' => 'Escríbenos para consultas, alianzas institucionales o información sobre las comunidades.',
            'href' => 'mailto:comunidad@bancodelaconstruccion.com',
            'label' => 'Enviar un email',
            'external' => false,
        ],
        [
            'icon' => 'message-circle',
            'title' => 'WhatsApp',
            'text' => 'Comunícate directamente con nuestro equipo para solicitar más información.',
            'href' => 'https://wa.link/swivav',
            'label' => 'Contactar por WhatsApp',
            'external' => true,
            'aria' => 'Contactar por WhatsApp con la Comunidad de la Construcción AI',
        ],
    ];
@endphp
<section id="contacto" class="w-full py-20 md:py-24 px-6 border-t border-concrete blueprint-grid relative overflow-hidden" aria-labelledby="contacto-title">
    <div class="max-w-3xl mx-auto">
        <div class="text-center mb-12 md:mb-16 fade-up">
            <span class="inline-flex items-center px-4 py-1 rounded-full border border-construction text-construction text-xs md:text-sm font-semibold tracking-wide bg-white mb-5 shadow-2xs">
                Contacto
            </span>
            <h2 id="contacto-title" class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-steel font-heading tracking-tight leading-tight">
                Conecta con nuestra comunidad
            </h2>
        </div>

        <ul role="list" data-contacto-grid
            class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6 max-w-2xl mx-auto list-none p-0 m-0">
            @foreach ($canales as $c)
                <li class="relative p-6 md:p-7 metric-card-interactive slide-card-left flex flex-col text-left">
                    <span class="blueprint-corner" aria-hidden="true"></span>

                    <div class="flex items-center gap-3 mb-3">
                        <div class="icon-box w-10 h-10 rounded-lg bg-construction/15 border border-construction/30 flex items-center justify-center shrink-0">
                            <i data-lucide="{{ $c['icon'] }}" class="w-5 h-5 text-construction" aria-hidden="true"></i>
                        </div>
                        <h3 class="font-bold text-base text-steel font-heading">{{ $c['title'] }}</h3>
                    </div>

                    <p class="text-sm mb-6 flex-1 text-carbon/80 font-sans leading-relaxed">
                        {{ $c['text'] }}
                    </p>

                    <div class="card-action mt-auto">
                        <x-button
                            :href="$c['href']"
                            size="sm"
                            :target="$c['external'] ? '_blank' : null"
                            :rel="$c['external'] ? 'noopener noreferrer' : null"
                            :aria-label="$c['aria'] ?? null"
                        >
                            {{ $c['label'] }}
                        </x-button>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</section>