/**
 * ==========================================================================
 * SECTIONS / CONTACTO.JS
 * Entrada deslizante escalonada de las fichas de Contacto
 * (corresponde a sections/contacto.blade.php)
 * ==========================================================================
 */

export function initContacto() {
    const section = document.getElementById('contacto');
    if (!section) return;

    const cards = section.querySelectorAll('.slide-card-left');
    if (!cards.length) return;

    cards.forEach((card, i) => card.style.setProperty('--delay', `${i * 100}ms`));

    if (!('IntersectionObserver' in window)) {
        cards.forEach((c) => c.classList.add('visible'));
        return;
    }

    const grid = section.querySelector('[data-contacto-grid]') ?? section;

    const observer = new IntersectionObserver((entries) => {
        if (!entries.some((e) => e.isIntersecting)) return;
        cards.forEach((c) => c.classList.add('visible'));
        observer.disconnect();
    }, { rootMargin: '0px 0px -15% 0px' });

    observer.observe(grid);
}