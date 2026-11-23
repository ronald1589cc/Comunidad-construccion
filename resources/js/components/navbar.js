/**
 * ==========================================================================
 * COMPONENTS / NAVBAR.JS
 * Lógica y configuración del Navbar (corresponde a components/navbar.blade.php)
 * ==========================================================================
 */

export function initNavbar() {
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const navbar = document.querySelector('.nav-fixed');

    // 1. Cerrar menú móvil
    function closeMobileMenu() {
        if (mobileMenu && mobileMenuBtn) {
            mobileMenu.classList.add('hidden');
            mobileMenuBtn.setAttribute('aria-expanded', 'false');
            if (navbar && window.scrollY <= 20) {
                navbar.classList.remove('nav-scrolled');
            }
        }
    }
    window.closeMobileMenu = closeMobileMenu;

    // 2. Alternar menú móvil
    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', () => {
            const isHidden = mobileMenu.classList.toggle('hidden');
            mobileMenuBtn.setAttribute('aria-expanded', String(!isHidden));
            if (navbar) {
                if (!isHidden) {
                    navbar.classList.add('nav-scrolled');
                } else if (window.scrollY <= 20) {
                    navbar.classList.remove('nav-scrolled');
                }
            }
        });
    }

    // 3. Submenú móvil de comunidades
    const mobileCommunitiesToggle = document.getElementById('mobile-communities-toggle');
    const mobileCommunitiesSubmenu = document.getElementById('mobile-communities-submenu');
    if (mobileCommunitiesToggle && mobileCommunitiesSubmenu) {
        mobileCommunitiesToggle.addEventListener('click', () => {
            const isHidden = mobileCommunitiesSubmenu.classList.toggle('hidden');
            const icon = mobileCommunitiesToggle.querySelector('svg, i');
            if (icon) {
                icon.style.transform = isHidden ? '' : 'rotate(180deg)';
            }
        });
    }

    // 4. Selector de comunidades en navbar (clic / tap)
    const communityDropdownBtn = document.getElementById('community-dropdown-btn') || document.querySelector('.community-dropdown-trigger');
    const communityDropdownMenu = document.getElementById('community-dropdown-menu') || document.querySelector('.community-dropdown-content');

    if (communityDropdownBtn && communityDropdownMenu) {
        communityDropdownBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            const isHidden = communityDropdownMenu.classList.toggle('hidden');
            communityDropdownBtn.setAttribute('aria-expanded', String(!isHidden));
        });

        document.addEventListener('click', (e) => {
            if (!communityDropdownBtn.contains(e.target) && !communityDropdownMenu.contains(e.target)) {
                communityDropdownMenu.classList.add('hidden');
                communityDropdownBtn.setAttribute('aria-expanded', 'false');
            }
        });
    }

    // 5. Cerrar menú móvil al hacer clic en enlaces
    if (mobileMenu) {
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', closeMobileMenu);
        });
    }

    // 5. Scroll: navbar transparente en la portada, fondo blanco al scrollear
    function handleNavbarScroll() {
        if (!navbar) return;
        const isMenuOpen = mobileMenu && !mobileMenu.classList.contains('hidden');
        if (window.scrollY > 20 || isMenuOpen) {
            navbar.classList.add('nav-scrolled');
        } else {
            navbar.classList.remove('nav-scrolled');
        }
    }

    let ticking = false;
    window.addEventListener('scroll', () => {
        if (ticking) return;
        ticking = true;
        requestAnimationFrame(() => {
            handleNavbarScroll();
            ticking = false;
        });
    }, { passive: true });

    // Cerrar con Escape y al pasar a escritorio
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeMobileMenu();
    });
    window.matchMedia('(min-width: 768px)').addEventListener('change', (e) => {
        if (e.matches) closeMobileMenu();
    });

    handleNavbarScroll(); // Comprobar estado inicial
}
