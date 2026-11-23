/**
 * ==========================================================================
 * SECTIONS / FORMULARIO.JS
 * Lógica de formularios de registro y pasos (corresponde a sections/formulario.blade.php)
 * ==========================================================================
 */

export function initFormulario() {
    const accessForm = document.getElementById('access-form');
    if (!accessForm) return;

    const step1 = document.getElementById('form-step-1');
    const step2 = document.getElementById('form-step-2');
    const nextBtn = document.getElementById('form-next-btn');
    const prevBtn = document.getElementById('form-prev-btn');
    const progBar1 = document.getElementById('prog-bar-1');
    const progBar2 = document.getElementById('prog-bar-2');
    const progressText = document.getElementById('form-progress-text');

    if (nextBtn && step1 && step2) {
        nextBtn.addEventListener('click', () => {
            const requiredInputs = step1.querySelectorAll('[required]');
            let valid = true;
            requiredInputs.forEach(input => {
                if (!input.checkValidity()) {
                    input.reportValidity();
                    valid = false;
                }
            });

            if (valid) {
                step1.classList.add('hidden');
                step2.classList.remove('hidden');
                if (progBar1 && progBar2) {
                    progBar2.classList.remove('bg-[#2a2a2a]');
                    progBar2.classList.add('bg-construction');
                }
                if (progressText) {
                    progressText.textContent = 'Paso 2 de 2';
                }
            }
        });
    }

    if (prevBtn && step1 && step2) {
        prevBtn.addEventListener('click', () => {
            step2.classList.add('hidden');
            step1.classList.remove('hidden');
            if (progBar1 && progBar2) {
                progBar2.classList.add('bg-[#2a2a2a]');
                progBar2.classList.remove('bg-construction');
            }
            if (progressText) {
                progressText.textContent = 'Paso 1 de 2';
            }
        });
    }
}
