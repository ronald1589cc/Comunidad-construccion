@php
    $faqs = [
        [
            'q' => '¿El acceso tiene costo?',
            'a' => 'No. El acceso es gratuito. Solo se requiere pasar un proceso de validación de identidad y perfil.'
        ],
        [
            'q' => '¿Qué significa miembro verificado?',
            'a' => 'Significa que revisamos la identidad y relación profesional o empresarial del solicitante. No constituye una validación integral de títulos, experiencia o documentos.'
        ],
        [
            'q' => '¿Todas las publicaciones representan una contratación confirmada?',
            'a' => 'No. Algunas publicaciones pueden corresponder a licitaciones, expresiones de interés o bases de candidatos. El tipo de oportunidad se indica en cada publicación.'
        ],
        [
            'q' => '¿La comunidad garantiza profesionales o empleo?',
            'a' => 'No. La comunidad facilita conexiones, pero no garantiza contratación, empleo, selección o participación en proyectos.'
        ],
        [
            'q' => '¿Qué debe verificar una empresa antes de contratar o incluir a un profesional?',
            'a' => 'La empresa debe verificar directamente títulos, colegiatura, habilitación, certificados, experiencia, referencias y disponibilidad del profesional.'
        ],
    ];
@endphp

<section id="faq" class="w-full py-20 md:py-24 px-6 border-t border-concrete blueprint-grid relative overflow-hidden" aria-labelledby="faq-title">
    <div class="max-w-3xl mx-auto">
        <div class="text-center mb-12 md:mb-16 fade-up">
            <span class="inline-flex items-center px-4 py-1 rounded-full border border-construction text-construction text-xs md:text-sm font-semibold tracking-wide bg-white mb-5 shadow-2xs">
                FAQ
            </span>
            <h2 id="faq-title" class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-steel font-heading tracking-tight leading-tight">
                Preguntas frecuentes
            </h2>
        </div>

        <div class="flex flex-col gap-3" id="faq-list">
            @foreach ($faqs as $faq)
                @php $n = $loop->iteration; @endphp
                <div class="faq-item slide-card-left text-left">
                    <span class="blueprint-corner" aria-hidden="true"></span>

                    <button type="button" id="faq-question-{{ $n }}" aria-expanded="false" aria-controls="faq-answer-{{ $n }}"
                            class="faq-toggle w-full text-left pl-6 pr-14 py-4 flex items-center justify-between gap-4 cursor-pointer relative">
                        <span class="font-semibold text-sm md:text-base text-steel font-sans">{{ $faq['q'] }}</span>
                        <span class="faq-chevron-box absolute right-6 top-1/2 -translate-y-1/2 flex items-center justify-center shrink-0" aria-hidden="true">
                            <i data-lucide="chevron-down" class="faq-chevron w-4 h-4"></i>
                        </span>
                    </button>

                    <div id="faq-answer-{{ $n }}" role="region" aria-labelledby="faq-question-{{ $n }}" class="faq-answer">
                        <div class="faq-answer-inner">
                            <p class="px-6 pb-5 text-sm text-carbon/80 font-sans leading-relaxed">{{ $faq['a'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
