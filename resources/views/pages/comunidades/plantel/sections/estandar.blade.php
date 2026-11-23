@php
    $requisitos = [
        'Tipo de oportunidad',
        'Profesión requerida',
        'Tipo de proyecto',
        'Ubicación',
        'Experiencia solicitada',
        'Fecha límite',
    ];
@endphp

<section id="estandar" class="w-full py-16 md:py-20 px-6 border-t border-concrete blueprint-grid relative overflow-hidden" aria-labelledby="standard-title">
    <div class="max-w-4xl mx-auto text-center">
        <div class="mb-10 md:mb-12 fade-up">
            <span class="inline-flex items-center px-4 py-1 rounded-full border border-construction text-construction text-xs md:text-sm font-semibold tracking-wide bg-white mb-5 shadow-2xs">
                Estándar de Publicación
            </span>
            <h2 id="standard-title" data-template-id="standard-title" class="text-xl sm:text-2xl md:text-3xl font-extrabold text-steel font-heading tracking-tight leading-tight max-w-2xl mx-auto">
                Toda publicación empresarial debe incluir información clara
            </h2>
        </div>

        <!-- 6 Etiquetas / Requisitos clave -->
        <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 max-w-2xl mx-auto mb-8">
            @foreach ($requisitos as $req)
                <div class="relative py-3.5 px-4 metric-card-interactive slide-card-left flex items-center justify-center text-center">
                    <span class="blueprint-corner" style="width: 8px; height: 8px; top: 4px; right: 4px;" aria-hidden="true"></span>
                    <span class="text-xs sm:text-sm font-medium text-steel font-sans">
                        {{ $req }}
                    </span>
                </div>
            @endforeach
        </div>

        <!-- Nota de confidencialidad -->
        <blockquote class="security-quote max-w-3xl mx-auto p-6 md:p-8 text-left">
            <p data-template-id="standard-note" class="text-xs sm:text-sm text-carbon/80 font-sans leading-relaxed">
                Las empresas deben utilizar los datos de los profesionales únicamente para la oportunidad comunicada y respetar la confidencialidad de los documentos recibidos.
            </p>
        </blockquote>
    </div>
</section>
