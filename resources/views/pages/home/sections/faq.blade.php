@php
    $faqs = [
        ['q' => '¿El acceso tiene costo?', 'a' => 'No. El acceso es gratuito, previa validación.'],
        ['q' => '¿Puedo solicitar acceso a más de una comunidad?', 'a' => 'Sí, cuando las comunidades estén relacionadas con tu actividad.'],
        ['q' => '¿Qué significa miembro verificado?', 'a' => 'Significa que hemos revisado su identidad y relación profesional o empresarial. No significa que la comunidad garantice su capacidad técnica, financiera, legal o comercial.'],
        ['q' => '¿La comunidad garantiza contratos o empleos?', 'a' => 'No. La comunidad facilita conexiones y oportunidades. Los acuerdos dependen de las partes.'],
        ['q' => '¿Dónde funciona la comunidad?', 'a' => 'Principalmente en WhatsApp y enfocada inicialmente en el mercado peruano.'],
        ['q' => '¿Puedo publicar oportunidades?', 'a' => 'Sí, respetando las normas y el propósito de cada comunidad.'],
        ['q' => '¿Cómo recibo el enlace de WhatsApp?', 'a' => 'Después de que la solicitud sea revisada y aprobada.'],
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