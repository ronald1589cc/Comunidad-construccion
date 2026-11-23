/**
 * ==========================================================================
 * SECTIONS / FAQ.JS
 * Acordeón de preguntas frecuentes y entrada escalonada de las fichas
 * (corresponde a sections/faq.blade.php)
 * ==========================================================================
 */

function setOpen(item, open) {
    item.classList.toggle('is-open', open);
    item.querySelector('.faq-toggle')?.setAttribute('aria-expanded', String(open));
}

export function initFaq() {
    const section = document.getElementById('faq');
    if (!section) return;

    const items = section.querySelectorAll('.faq-item');
    if (!items.length) return;

    // Acordeón: una abierta a la vez
    items.forEach((item) => {
        const btn = item.querySelector('.faq-toggle');
        if (!btn) return;

        btn.addEventListener('click', () => {
            const willOpen = btn.getAttribute('aria-expanded') !== 'true';
            items.forEach((other) => setOpen(other, false));
            setOpen(item, willOpen);
        });
    });

    // Entrada escalonada
    items.forEach((item, i) => item.style.setProperty('--delay', `${i * 60}ms`));

    if (!('IntersectionObserver' in window)) {
        items.forEach((i) => i.classList.add('visible'));
        return;
    }

    const list = section.querySelector('#faq-list') ?? section;

    const observer = new IntersectionObserver((entries) => {
        if (!entries.some((e) => e.isIntersecting)) return;
        items.forEach((i) => i.classList.add('visible'));
        observer.disconnect();
    }, { rootMargin: '0px 0px -15% 0px' });

    observer.observe(list);
}