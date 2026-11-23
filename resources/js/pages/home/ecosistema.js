/**
 * ==========================================================================
 * SECTIONS / ECOSISTEMA.JS
 * Entrada deslizante escalonada de las fichas del Ecosistema
 * (corresponde a sections/ecosistema.blade.php)
 * ==========================================================================
 */

export function initEcosistema() {
    const section = document.getElementById('ecosistema');
    if (!section) return;

    const cards = section.querySelectorAll('.slide-card-left');
    if (!cards.length) return;

    // Escalonado corto: son 8 fichas pequeñas más el flujo
    cards.forEach((card, i) => card.style.setProperty('--delay', `${i * 60}ms`));

    if (!('IntersectionObserver' in window)) {
        cards.forEach((c) => c.classList.add('visible'));
        return;
    }

    const grid = section.querySelector('[data-ecosistema-grid]') ?? section;

    const observer = new IntersectionObserver((entries) => {
        if (!entries.some((e) => e.isIntersecting)) return;
        cards.forEach((c) => c.classList.add('visible'));
        observer.disconnect();
    }, { rootMargin: '0px 0px -15% 0px' });

    observer.observe(grid);
}