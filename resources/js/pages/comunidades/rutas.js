/**
 * ==========================================================================
 * SECTIONS / RUTAS.JS
 * Lógica de tarjetas interactivas de rutas/intención (corresponde a sections/rutas.blade.php)
 * ==========================================================================
 */

export function initRutas() {
    document.querySelectorAll('.intent-card').forEach(card => {
        card.addEventListener('click', (e) => {
            if (e.target.tagName !== 'INPUT') {
                const checkbox = card.querySelector('input[type="checkbox"]');
                if (checkbox) {
                    checkbox.checked = !checkbox.checked;
                    checkbox.dispatchEvent(new Event('change'));
                }
            }
        });
    });

    document.querySelectorAll('.intent-card input[type="checkbox"]').forEach(checkbox => {
        checkbox.addEventListener('change', () => {
            const card = checkbox.closest('.intent-card');
            if (card) {
                if (checkbox.checked) {
                    card.classList.add('border-construction', 'bg-construction/5');
                    card.classList.remove('border-concrete');
                } else {
                    card.classList.remove('border-construction', 'bg-construction/5');
                    card.classList.add('border-concrete');
                }
            }
        });
    });
}
