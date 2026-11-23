/**
 * ==========================================================================
 * SECTIONS / IA.JS
 * Entrada deslizante de la ficha de IA (corresponde a sections/ia.blade.php)
 * ==========================================================================
 */

export function initIA() {
    const section = document.getElementById('ia');
    if (!section) return;

    const card = section.querySelector('.slide-card-left');
    if (!card) return;

    if (!('IntersectionObserver' in window)) {
        card.classList.add('visible');
        return;
    }

    const observer = new IntersectionObserver((entries) => {
        if (!entries.some((e) => e.isIntersecting)) return;
        card.classList.add('visible');
        observer.disconnect();
    }, { rootMargin: '0px 0px -15% 0px' });

    observer.observe(card);
}