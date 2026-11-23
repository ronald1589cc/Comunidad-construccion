@php
    $faqs = [
        [
            'q' => '¿El acceso tiene costo?',
            'a' => 'No. El acceso a la comunidad es gratuito. Solo se requiere pasar un proceso de validación de identidad y perfil empresarial.'
        ],
        [
            'q' => '¿Qué significa que una empresa o miembro está verificado?',
            'a' => 'Significa que revisamos la identidad del representante y su relación con la empresa. No constituye una auditoría técnica, financiera o legal.'
        ],
        [
            'q' => '¿La comunidad garantiza encontrar un socio o ganar una licitación?',
            'a' => 'No. La comunidad facilita conexiones con potenciales aliados. La formación de un consorcio depende de la evaluación mutua entre las partes. La adjudicación depende del proceso de selección y la calidad de la propuesta.'
        ],
        [
            'q' => '¿Puedo ofrecer mi experiencia como consorciado?',
            'a' => 'Sí. Puedes registrar tu empresa indicando tus especialidades y tipos de proyectos ejecutados para que otras empresas te contacten.'
        ],
        [
            'q' => '¿Puedo buscar aliados para Obras por Impuestos?',
            'a' => 'Sí. La comunidad conecta ejecutores, empresas privadas financiadoras, inversionistas y aliados técnicos para proyectos OxI.'
        ],
        [
            'q' => '¿Qué debo revisar antes de formar un consorcio?',
            'a' => 'Cada empresa debe efectuar su propia debida diligencia: verificar experiencia, situación legal, financiera y reputacional del potencial socio.'
        ],
        [
            'q' => '¿Qué es Obras por Impuestos?',
            'a' => 'Obras por Impuestos, también conocido como OxI, es un mecanismo que permite que empresas privadas financien y ejecuten proyectos públicos usando parte de su impuesto a la renta. En la comunidad puedes conectar con empresas financiadoras, ejecutores, consultoras y aliados técnicos interesados en proyectos OxI.'
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
