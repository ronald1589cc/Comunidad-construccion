@php
    $anchor = fn ($id) => (request()->routeIs('home') ? '' : route('home')) . '#' . $id;

    $enlaces = [
        ['Comunidades', 'comunidades'],
        ['Cómo funciona', 'como-funciona'],
        ['Seguridad', 'seguridad'],
        ['FAQ', 'faq'],
        ['Contacto', 'contacto'],
        ['Privacidad', 'privacidad'],
        ['Términos', 'terminos'],
        ['Normas', 'normas'],
    ];
@endphp
<footer class="footer-blueprint w-full py-12 px-6 bg-carbon font-sans">
    <div class="max-w-5xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-10">
            <div>
                <p class="font-bold mb-3 text-white font-heading">Comunidad de la Construcción AI</p>
                <p class="text-xs mb-4 text-concrete/70">Conectamos empresas y profesionales para licitar y ejecutar mejores proyectos.</p>
                <p class="text-xs text-concrete/80">
                    <a href="{{ route('home') }}" class="hover:text-construction transition">comunidaddelaconstruccion.ai</a>
                </p>
            </div>

            <div>
                <p class="footer-title font-semibold text-xs mb-3 uppercase tracking-wider text-white">Contacto</p>
                <ul class="space-y-2 text-xs list-none p-0 m-0">
                    <li><a href="mailto:comunidad@bancodelaconstruccion.com" class="footer-link text-concrete/80 hover:text-construction break-all">comunidad@bancodelaconstruccion.com</a></li>
                    <li><a href="https://wa.me/51935447658" target="_blank" rel="noopener noreferrer" class="footer-link text-concrete/80 hover:text-construction">+51 935 447 658</a></li>
                    <li><a href="https://www.linkedin.com/in/robertochavezporras/" target="_blank" rel="noopener noreferrer" class="footer-link text-concrete/80 hover:text-construction">Roberto Chávez</a></li>
                </ul>
            </div>

            <div>
                <p class="footer-title font-semibold text-xs mb-3 uppercase tracking-wider text-white">Comunidades</p>
                <ul class="space-y-2 text-xs list-none p-0 m-0 mb-6">
                    <li><a href="{{ route('comunidades.consorcios') }}" class="footer-link text-concrete/80 hover:text-construction">Consorcios para Licitaciones</a></li>
                    <li><a href="{{ route('comunidades.plantel-profesional') }}" class="footer-link text-concrete/80 hover:text-construction">Plantel Profesional Técnico</a></li>
                    <li><a href="{{ route('comunidades.proveedores') }}" class="footer-link text-concrete/80 hover:text-construction">Proveedores: Materiales, Bienes y Servicios</a></li>
                </ul>

                <p class="footer-title font-semibold text-xs mb-3 uppercase tracking-wider text-white">Redes y Soluciones</p>
                <ul class="space-y-2 text-xs list-none p-0 m-0">
                    <li><a href="https://www.linkedin.com/company/construction-ai-community/" target="_blank" rel="noopener noreferrer" class="footer-link text-concrete/80 hover:text-construction">LinkedIn</a></li>
                    <li><a href="https://substack.com/@robertochavezporras" target="_blank" rel="noopener noreferrer" class="footer-link text-concrete/80 hover:text-construction">Blog</a></li>
                    <li><a href="https://bancodelaconstruccion.com/" target="_blank" rel="noopener noreferrer" class="footer-link text-concrete/80 hover:text-construction">Banco de la Construcción</a></li>
                </ul>
            </div>

            <div>
                <p class="footer-title font-semibold text-xs mb-3 uppercase tracking-wider text-white">Enlaces</p>
                <ul class="space-y-2 text-xs list-none p-0 m-0">
                    @foreach ($enlaces as [$texto, $id])
                        <li><a href="{{ $anchor($id) }}" class="footer-link text-concrete/80 hover:text-construction">{{ $texto }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="footer-note pt-6">
            <p class="text-xs mb-4 text-concrete/70 leading-relaxed">
                La comunidad facilita conexiones y oportunidades, pero no garantiza contratos, empleos, adjudicaciones, asociaciones ni resultados comerciales. Cada usuario es responsable de evaluar a terceros antes de establecer acuerdos.
            </p>
            <p class="text-xs text-concrete/60">
                © 2026 Comunidad de la Construcción AI. Todos los derechos reservados.
            </p>
        </div>
    </div>
</footer>
