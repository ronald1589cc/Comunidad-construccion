<nav class="nav-fixed border-b border-transparent" aria-label="Navegación principal">
    <div class="max-w-6xl mx-auto flex items-center justify-between px-4 py-3 gap-2 font-sans">
        <a href="{{ route('home') }}" class="shrink-0 flex items-center">
            <img class="nav-logo shrink-0" width="160" height="80" loading="eager" fetchpriority="high" alt="Logo de Comunidad de la Construcción AI" src="{{ asset('img/branding/logo.png') }}">
        </a>
        
        <div class="hidden md:flex items-center gap-6 text-sm font-medium">
            <div class="relative group">
                <button class="text-steel hover:text-construction transition flex items-center gap-1 cursor-pointer font-medium" aria-haspopup="true" aria-expanded="false">
                    Comunidades 
                    <i data-lucide="chevron-down" class="w-4 h-4 text-construction"></i>
                </button>
                <div class="absolute left-0 mt-0 w-64 bg-white border border-concrete rounded-lg shadow-xl opacity-0 invisible -translate-y-1 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 group-focus-within:opacity-100 group-focus-within:visible group-focus-within:translate-y-0 transition-all duration-200 z-50">
                    <a href="{{ route('comunidades.consorcios') }}" class="block px-4 py-3 text-sm text-steel hover:text-construction hover:bg-concrete/50 transition first:rounded-t-lg">
                        Consorcios para Licitaciones
                    </a>
                    <a href="{{ route('comunidades.plantel-profesional') }}" class="block px-4 py-3 text-sm text-steel hover:text-construction hover:bg-concrete/50 transition">
                        Plantel Profesional Técnico
                    </a>
                    <a href="{{ route('comunidades.proveedores') }}" class="block px-4 py-3 text-sm text-steel hover:text-construction hover:bg-concrete/50 transition last:rounded-b-lg">
                        Proveedores: Materiales, Bienes, Servicios y Subcontratos
                    </a>
                </div>
            </div>
            <a href="{{ request()->routeIs('home') ? '#resultados' : route('home') . '#resultados' }}" class="nav-link text-steel hover:text-construction transition">Resultados</a>
            <a href="{{ request()->routeIs('home') ? '#como-funciona' : route('home') . '#como-funciona' }}" class="nav-link text-steel hover:text-construction transition">Cómo funciona</a>
            <a href="{{ request()->routeIs('home') ? '#seguridad' : route('home') . '#seguridad' }}" class="nav-link text-steel hover:text-construction transition">Seguridad</a>
            <a href="{{ request()->routeIs('home') ? '#faq' : route('home') . '#faq' }}" class="nav-link text-steel hover:text-construction transition">FAQ</a>
            <a href="{{ request()->routeIs('home') ? '#contacto' : route('home') . '#contacto' }}" class="nav-link text-steel hover:text-construction transition">Contacto</a>
        </div>

        <x-button id="mobile-menu-btn" variant="ghost" size="none" class="md:hidden p-2 text-steel hover:text-construction shrink-0" aria-label="Abrir menú de navegación" aria-expanded="false" aria-controls="mobile-menu">
            <i data-lucide="menu" class="w-6 h-6"></i>
        </x-button>

        <x-button href="https://wa.link/swivav" target="_blank" rel="noopener noreferrer" size="sm" class="hidden md:inline-flex md:px-5 md:text-sm shrink-0">
            Acceder gratis
        </x-button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden border-t border-concrete bg-white shadow-xl font-sans max-h-[calc(100dvh-4.5rem)] overflow-y-auto">
        <div class="px-4 py-4 space-y-3">
            
            <div class="relative">
                <button type="button" id="mobile-communities-toggle" class="w-full text-left text-sm text-steel hover:text-construction transition py-2 flex items-center justify-between cursor-pointer">
                    Comunidades 
                    <i data-lucide="chevron-down" class="w-4 h-4 text-construction transition-transform duration-300"></i>
                </button>
                <div id="mobile-communities-submenu" class="hidden pl-4 space-y-2 mt-2 border-l border-concrete">
                    <a href="{{ route('comunidades.consorcios') }}" class="block w-full text-left text-sm text-steel hover:text-construction transition py-2">
                        Consorcios para Licitaciones
                    </a>
                    <a href="{{ route('comunidades.plantel-profesional') }}" class="block w-full text-left text-sm text-steel hover:text-construction transition py-2">
                        Plantel Profesional Técnico
                    </a>
                    <a href="{{ route('comunidades.proveedores') }}" class="block w-full text-left text-sm text-steel hover:text-construction transition py-2">
                        Proveedores: Materiales, Bienes, Servicios y Subcontratos
                    </a>
                </div>
            </div>
            
            <a href="{{ request()->routeIs('home') ? '#resultados' : route('home') . '#resultados' }}" class="block w-full text-left text-sm text-steel hover:text-construction transition py-2">Resultados</a>
            <a href="{{ request()->routeIs('home') ? '#como-funciona' : route('home') . '#como-funciona' }}" class="block w-full text-left text-sm text-steel hover:text-construction transition py-2">Cómo funciona</a>
            <a href="{{ request()->routeIs('home') ? '#seguridad' : route('home') . '#seguridad' }}" class="block w-full text-left text-sm text-steel hover:text-construction transition py-2">Seguridad</a>
            <a href="{{ request()->routeIs('home') ? '#faq' : route('home') . '#faq' }}" class="block w-full text-left text-sm text-steel hover:text-construction transition py-2">FAQ</a>
            <a href="{{ request()->routeIs('home') ? '#contacto' : route('home') . '#contacto' }}" class="block w-full text-left text-sm text-steel hover:text-construction transition py-2">Contacto</a>
            
            <x-button href="https://wa.link/swivav" target="_blank" rel="noopener noreferrer" fullWidth size="sm" class="mt-4">
                Acceder gratis
            </x-button>
        </div>
    </div>
</nav>
