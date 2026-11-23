@php
    $faqs = [
        [
            'q' => '¿El acceso tiene costo?',
            'a' => 'No. El acceso es gratuito, sujeto a validación de identidad y perfil empresarial.'
        ],
        [
            'q' => '¿Qué significa que una empresa está verificada?',
            'a' => 'Significa que revisamos la identidad del representante y su relación con la empresa. No constituye una auditoría técnica, financiera, legal o comercial.'
        ],
        [
            'q' => '¿Una solicitud de cotización garantiza una compra?',
            'a' => 'No. Una solicitud de cotización permite iniciar una conversación comercial, pero no representa una orden de compra ni garantiza contratación.'
        ],
        [
            'q' => '¿La comunidad garantiza proveedores, precios o crédito?',
            'a' => 'No. La comunidad facilita conexiones. Cada empresa evalúa directamente disponibilidad, precios, calidad, crédito y condiciones comerciales.'
        ],
        [
            'q' => '¿Qué debe verificar una empresa antes de comprar, vender o subcontratar?',
            'a' => 'Debe verificar RUC, experiencia, referencias, capacidad, especificaciones, garantías, condiciones de pago, plazos y documentación aplicable.'
        ],
        [
            'q' => '¿Puedo registrarme como proveedor si solo atiendo algunas regiones?',
            'a' => 'Sí. Puedes indicar las regiones o ciudades donde atiende tu empresa para que los miembros tengan mayor claridad sobre tu cobertura.'
        ],
        [
            'q' => '¿Qué información debe incluir una solicitud de cotización?',
            'a' => 'Debe incluir, cuando corresponda, especificaciones, cantidad, unidad, ubicación, fecha límite para cotizar, fecha requerida, alcance del servicio, condiciones comerciales y canal de contacto.'
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
