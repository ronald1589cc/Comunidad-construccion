/**
 * ==========================================================================
 * PAGES / COMUNIDADES / CONSORCIOS / CONSORCIOS.JS
 * Lógica interactiva para la comunidad de Consorcios
 * ==========================================================================
 */

export function initConsorcios() {
    const intentCards = document.querySelectorAll('#rutas .intent-card');
    const display = document.getElementById('intent-selected-display');
    if (!intentCards.length || !display) return;

    intentCards.forEach(card => {
        card.addEventListener('click', () => {
            const title = card.querySelector('h3')?.textContent?.trim();
            if (title) {
                display.textContent = `Interés seleccionado: "${title}"`;
                display.classList.remove('hidden');
            }
        });
    });
}
