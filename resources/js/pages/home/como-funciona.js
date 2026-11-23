/**
 * ==========================================================================
 * SECTIONS / COMO-FUNCIONA.JS
 * Lógica de pestañas interactivas (corresponde a sections/como-funciona.blade.php)
 * ==========================================================================
 */

function initPasos() {
    const section = document.getElementById('como-funciona');
    if (!section) return;

    const cards = section.querySelectorAll('.slide-card-left');
    if (!cards.length) return;

    // Escalonado de entrada
    cards.forEach((card, i) => card.style.setProperty('--delay', `${i * 100}ms`));

    if (!('IntersectionObserver' in window)) {
        cards.forEach((c) => c.classList.add('visible'));
        return;
    }

    const list = section.querySelector('[data-pasos]') ?? section;

    const observer = new IntersectionObserver((entries) => {
        if (!entries.some((e) => e.isIntersecting)) return;
        cards.forEach((c) => c.classList.add('visible'));
        observer.disconnect();
    }, { rootMargin: '0px 0px -15% 0px' });

    observer.observe(list);
}

export function initComoFunciona() {
    document.querySelectorAll('.tab-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            const tabGroup = btn.closest('.tabs-container') || btn.parentElement.parentElement;
            const targetTab = btn.getAttribute('data-tab');

            // Desactivar todos los botones del grupo
            tabGroup.querySelectorAll('.tab-btn').forEach(b => {
                b.classList.remove('border-construction', 'text-construction', 'font-semibold', 'active');
                b.classList.add('border-transparent', 'text-steel');
            });

            // Activar botón pulsado
            btn.classList.add('border-construction', 'text-construction', 'font-semibold', 'active');
            btn.classList.remove('border-transparent', 'text-steel');

            // Mostrar el panel correspondiente
            tabGroup.querySelectorAll('.tab-panel').forEach(panel => {
                if (panel.getAttribute('data-panel') === targetTab) {
                    panel.classList.remove('hidden');
                } else {
                    panel.classList.add('hidden');
                }
            });
        });
    });
    
    initPasos();
}
