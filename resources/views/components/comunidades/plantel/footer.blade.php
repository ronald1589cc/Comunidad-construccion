{{-- 
    COMPONENTE: FOOTER DE PLANTEL PROFESIONAL TÉCNICO
    Enlaces y créditos específicos de la comunidad de Plantel
--}}
<footer class="footer-blueprint w-full py-12 px-6 bg-carbon font-sans">
    <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8 mb-8">
            <!-- Columna 1: Marca y descripción -->
            <div class="col-span-2 sm:col-span-1">
                <p class="font-bold mb-3 text-white font-heading text-base">Comunidad de la Construcción AI</p>
                <p class="text-xs mb-3 text-concrete/70 leading-relaxed">Conectamos empresas y profesionales del sector ingeniería y construcción.</p>
                <p class="text-xs text-concrete/80 font-mono">
                    <a href="{{ route('home') }}" class="hover:text-construction transition">comunidaddelaconstruccion.ai</a>
                </p>
            </div>

            <!-- Columna 2: Comunidades -->
            <div>
                <p class="footer-title font-semibold text-xs mb-3 uppercase tracking-wider text-white">Comunidades</p>
                <ul class="space-y-2 text-xs list-none p-0 m-0">
                    <li>
                        <a href="{{ route('comunidades.consorcios') }}" class="footer-link text-concrete/80 hover:text-construction">
                            Consorcios para Licitaciones
                        </a>
                    </li>
                    <li>
                        <span class="text-construction font-bold">
                            ✓ Plantel Profesional Técnico
                        </span>
                    </li>
                    <li>
                        <a href="{{ route('comunidades.proveedores') }}" class="footer-link text-concrete/80 hover:text-construction">
                            Proveedores: Materiales, Bienes y Servicios
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Columna 3: Contacto -->
            <div>
                <p class="footer-title font-semibold text-xs mb-3 uppercase tracking-wider text-white">Contacto</p>
                <ul class="space-y-2 text-xs list-none p-0 m-0">
                    <li>
                        <a href="mailto:comunidad@bancodelaconstruccion.com" class="footer-link text-concrete/80 hover:text-construction break-all">
                            comunidad@bancodelaconstruccion.com
                        </a>
                    </li>
                    <li>
                        <a href="https://wa.me/51935447658" target="_blank" rel="noopener noreferrer" class="footer-link text-concrete/80 hover:text-construction">
                            +51 935 447 658
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/robertochavezporras/" target="_blank" rel="noopener noreferrer" class="footer-link text-concrete/80 hover:text-construction">
                            Roberto Chávez
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Columna 4: Redes y Soluciones -->
            <div>
                <p class="footer-title font-semibold text-xs mb-3 uppercase tracking-wider text-white">Redes y Soluciones</p>
                <ul class="space-y-2 text-xs list-none p-0 m-0">
                    <li>
                        <a href="https://www.linkedin.com/company/construction-ai-community/" target="_blank" rel="noopener noreferrer" class="footer-link text-concrete/80 hover:text-construction">
                            LinkedIn
                        </a>
                    </li>
                    <li>
                        <a href="https://substack.com/@robertochavezporras" target="_blank" rel="noopener noreferrer" class="footer-link text-concrete/80 hover:text-construction">
                            Blog
                        </a>
                    </li>
                    <li>
                        <a href="https://bancodelaconstruccion.com/" target="_blank" rel="noopener noreferrer" class="footer-link text-concrete/80 hover:text-construction">
                            Banco de la Construcción
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Copyright -->
        <div class="footer-note pt-6 text-center">
            <p class="text-xs text-concrete/60">
                © 2026 Comunidad de la Construcción AI. Todos los derechos reservados.
            </p>
        </div>
    </div>
</footer>
