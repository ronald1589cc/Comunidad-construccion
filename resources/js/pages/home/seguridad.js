/**
 * ==========================================================================
 * SECTIONS / SEGURIDAD.JS
 * Entrada deslizante escalonada de las fichas de Seguridad
 * (corresponde a sections/seguridad.blade.php)
 * ==========================================================================
 */

export function initSeguridad() {
    const section = document.getElementById('seguridad');
    if (!section) return;

    const cards = section.querySelectorAll('.slide-card-left');
    if (!cards.length) return;

    // Escalonado corto: son 6 fichas pequeñas
    cards.forEach((card, i) => card.style.setProperty('--delay', `${i * 80}ms`));

    if (!('IntersectionObserver' in window)) {
        cards.forEach((c) => c.classList.add('visible'));
        return;
    }

    const grid = section.querySelector('[data-seguridad-grid]') ?? section;

    const observer = new IntersectionObserver((entries) => {
        if (!entries.some((e) => e.isIntersecting)) return;
        cards.forEach((c) => c.classList.add('visible'));
        observer.disconnect();
    }, { rootMargin: '0px 0px -15% 0px' });

    observer.observe(grid);
}