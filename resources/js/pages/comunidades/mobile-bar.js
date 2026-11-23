/**
 * ==========================================================================
 * SECTIONS / MOBILE-BAR.JS
 * Lógica de la barra flotante móvil inferior (corresponde a sections/mobile-bar.blade.php)
 * ==========================================================================
 */

export function initMobileBar() {
    const mobileBar = document.querySelector('.mobile-bar');
    const heroSection = document.querySelector('header');

    if (mobileBar && heroSection) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    mobileBar.classList.add('translate-y-full');
                } else {
                    mobileBar.classList.remove('translate-y-full');
                }
            });
        }, { threshold: 0.1 });

        observer.observe(heroSection);
    }
}
