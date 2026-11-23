/**
 * ==========================================================================
 * SECTIONS / COMUNIDADES.JS
 * Entrada deslizante de las fichas y contadores animados de Comunidades
 * (corresponde a sections/comunidades.blade.php)
 * ==========================================================================
 */

const DURATION = 1600;
const easeOutCubic = (t) => 1 - Math.pow(1 - t, 3);
const fmt = new Intl.NumberFormat('en-US');

function render(el, value) {
    el.textContent = `${el.dataset.prefix ?? ''}${fmt.format(value)}${el.dataset.suffix ?? ''}`;
}

function animateCount(el) {
    const target = parseFloat(el.dataset.count);
    const start = performance.now();

    const tick = (now) => {
        const p = Math.min((now - start) / DURATION, 1);
        render(el, Math.round(target * easeOutCubic(p)));
        if (p < 1) requestAnimationFrame(tick);
    };
    requestAnimationFrame(tick);
}

export function initComunidades() {
    const section = document.getElementById('comunidades');
    if (!section) return;

    const cards = section.querySelectorAll('.slide-card-left');
    if (!cards.length) return;

    const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // Escalonado de entrada por tarjeta
    cards.forEach((card, i) => card.style.setProperty('--delay', `${i * 120}ms`));

    if (!('IntersectionObserver' in window)) {
        cards.forEach((c) => c.classList.add('visible'));
        return;
    }

    // Contadores por tarjeta: arrancan en 0 y siguen el retraso de su ficha
    const cardCounters = [...cards].map((card) => [...card.querySelectorAll('[data-count]')]);
    if (!reduceMotion) cardCounters.flat().forEach((el) => render(el, 0));

    const grid = section.querySelector('[data-resultados-grid]') ?? section;

    const observer = new IntersectionObserver((entries) => {
        if (!entries.some((e) => e.isIntersecting)) return;

        cards.forEach((c) => c.classList.add('visible'));

        cardCounters.forEach((counters, cardIndex) => {
            counters.forEach((el) => {
                if (reduceMotion) {
                    render(el, parseFloat(el.dataset.count));
                } else {
                    setTimeout(() => animateCount(el), cardIndex * 120 + 200);
                }
            });
        });

        observer.disconnect();
    }, { rootMargin: '0px 0px -15% 0px' });

    observer.observe(grid);
}