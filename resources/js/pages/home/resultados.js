/**
 * ==========================================================================
 * SECTIONS / RESULTADOS.JS
 * Lógica de animación de entrada deslizante para las fichas de Resultados
 * (corresponde a sections/resultados.blade.php)
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

export function initResultados() {
    const section = document.getElementById('resultados');
    if (!section) return;

    const cards = section.querySelectorAll('.slide-card-left');
    if (!cards.length) return;

    const counters = section.querySelectorAll('[data-count]');
    const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const canObserve = 'IntersectionObserver' in window;

    // Escalonado de entrada (ya no va inline en el HTML)
    cards.forEach((card, i) => card.style.setProperty('--delay', `${i * 120}ms`));

    // Sin observer: mostrar todo con las cifras finales
    if (!canObserve) {
        cards.forEach((c) => c.classList.add('visible'));
        return;
    }

    // Las fichas aún son invisibles: arrancamos los contadores en 0
    if (!reduceMotion) counters.forEach((el) => render(el, 0));

    const grid = section.querySelector('[data-resultados-grid]') ?? section;

    const observer = new IntersectionObserver((entries) => {
        if (!entries.some((e) => e.isIntersecting)) return;

        cards.forEach((c) => c.classList.add('visible'));
        if (!reduceMotion) {
            counters.forEach((el, i) => setTimeout(() => animateCount(el), i * 120 + 200));
        } else {
            counters.forEach((el) => render(el, parseFloat(el.dataset.count)));
        }
        observer.disconnect();
    }, { rootMargin: '0px 0px -15% 0px' });

    observer.observe(grid);
}