<nav class="nav-fixed border-b border-transparent transition-all duration-300" aria-label="Navegación de Plantel Profesional">
    <div class="max-w-6xl mx-auto flex items-center justify-between px-4 py-3 gap-2 font-sans">
        <!-- Logo y Selector de Comunidad -->
        <div class="flex items-center gap-3">
            <a href="{{ route('home') }}" class="shrink-0 flex items-center" title="Comunidad de la Construcción AI">
                <img class="nav-logo-sub shrink-0" width="130" height="60" loading="eager" fetchpriority="high" alt="Logo de Comunidad de la Construcción AI" src="{{ asset('img/branding/logo.png') }}">
            </a>

            <div class="hidden sm:block h-7 w-px bg-concrete"></div>

            <div class="flex flex-col">
                <a href="{{ route('home') }}" class="text-[10px] md:text-xs font-semibold text-steel/70 hover:text-construction uppercase tracking-wider transition leading-tight">
                    Comunidad de la Construcción AI
                </a>
                <div class="relative group">
                    <button type="button" id="community-dropdown-btn" class="community-dropdown-trigger text-left p-0 text-xs md:text-sm font-bold text-carbon hover:text-construction transition flex items-center gap-1.5 cursor-pointer focus:outline-none" aria-haspopup="true" aria-expanded="false" aria-label="Ver otras comunidades">
                        <span id="current-community">Plantel Profesional Técnico</span>
                        <i data-lucide="chevron-down" class="w-4 h-4 text-construction transition-transform duration-200 group-hover:rotate-180"></i>
                    </button>
                    <div id="community-dropdown-menu" class="community-dropdown-content hidden group-hover:block group-focus-within:block absolute top-full left-0 mt-0 bg-white border border-concrete rounded-lg shadow-xl z-50 min-w-max py-1 transition-all duration-200">
                        <a href="{{ route('comunidades.consorcios') }}" class="block px-4 py-2.5 text-xs md:text-sm text-steel hover:text-construction hover:bg-concrete/20 font-medium transition">
                            Consorcios para Licitaciones &amp; Obras x Impuesto
                        </a>
                        <button type="button" class="w-full text-left px-4 py-2.5 text-xs md:text-sm text-construction font-bold bg-concrete/40 flex items-center gap-2 cursor-default" aria-current="page">
                            <span>✓</span> Plantel Profesional Técnico
                        </button>
                        <a href="{{ route('comunidades.proveedores') }}" class="block px-4 py-2.5 text-xs md:text-sm text-steel hover:text-construction hover:bg-concrete/20 font-medium transition">
                            Proveedores: Materiales, Bienes, Servicios y Subcontratos
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Enlaces Desktop de Plantel Profesional -->
        <div class="hidden md:flex items-center gap-6 text-sm font-medium">
            <a href="#rutas" class="nav-link text-steel hover:text-construction transition">Para quién es</a>
            <a href="#como-funciona" class="nav-link text-steel hover:text-construction transition">Cómo funciona</a>
            <a href="#seguridad" class="nav-link text-steel hover:text-construction transition">Seguridad</a>
            <a href="#faq" class="nav-link text-steel hover:text-construction transition">FAQ</a>
        </div>

        <!-- Botón CTA & Menú Mobile Trigger -->
        <div class="flex items-center gap-3">
            <x-button href="https://wa.link/swivav" target="_blank" rel="noopener noreferrer" size="sm" class="hidden md:inline-flex md:px-5 md:text-sm shrink-0">
                Acceder gratis
            </x-button>

            <x-button id="mobile-menu-btn" variant="ghost" size="none" class="md:hidden p-2 text-steel hover:text-construction shrink-0" aria-label="Abrir menú de navegación" aria-expanded="false" aria-controls="mobile-menu">
                <i data-lucide="menu" class="w-6 h-6"></i>
            </x-button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden border-t border-concrete bg-white shadow-xl font-sans max-h-[calc(100dvh-4.5rem)] overflow-y-auto">
        <div class="px-4 py-4 space-y-3">
            <div class="pb-3 border-b border-concrete">
                <a href="{{ route('home') }}" class="block text-xs uppercase font-semibold text-steel/60 hover:text-construction mb-2">
                    ← Volver a Comunidad Principal
                </a>
                <p class="text-xs font-bold text-carbon uppercase tracking-wider mb-2">Comunidades</p>
                <div class="space-y-1 pl-2 border-l-2 border-construction/30">
                    <a href="{{ route('comunidades.consorcios') }}" class="block py-1 text-sm text-steel hover:text-construction transition">
                        Consorcios para Licitaciones
                    </a>
                    <span class="block py-1 text-sm font-bold text-construction">
                        ✓ Plantel Profesional Técnico
                    </span>
                    <a href="{{ route('comunidades.proveedores') }}" class="block py-1 text-sm text-steel hover:text-construction transition">
                        Proveedores: Materiales, Servicios y Subcontratos
                    </a>
                </div>
            </div>

            <a href="#rutas" class="block w-full text-left text-sm text-steel hover:text-construction transition py-2 font-medium">Para quién es</a>
            <a href="#como-funciona" class="block w-full text-left text-sm text-steel hover:text-construction transition py-2 font-medium">Cómo funciona</a>
            <a href="#seguridad" class="block w-full text-left text-sm text-steel hover:text-construction transition py-2 font-medium">Seguridad</a>
            <a href="#faq" class="block w-full text-left text-sm text-steel hover:text-construction transition py-2 font-medium">FAQ</a>

            <x-button href="https://wa.link/swivav" target="_blank" rel="noopener noreferrer" fullWidth size="sm" class="mt-4">
                Acceder gratis
            </x-button>
        </div>
    </div>
</nav>
