/**
 * ==========================================================================
 * APP.JS - Entrada Principal y Funciones Generales
 * Comunidad de la Construcción AI
 * ==========================================================================
 */

import { createIcons, icons } from 'lucide';

// ==========================================================================
// IMPORTACIÓN DE COMPONENTES Y PÁGINAS (Reflejo 1:1 con resources/views/)
// ==========================================================================

// 1. Componentes Globales (resources/views/components/)
import { initNavbar } from './components/navbar';

// 2. Páginas: Home (resources/views/pages/home/)
import { initHero } from './pages/home/hero';
import { initResultados } from './pages/home/resultados';
import { initComunidades } from './pages/home/comunidades';
import { initComoFunciona } from './pages/home/como-funciona';
import { initSeguridad } from './pages/home/seguridad';
import { initEcosistema } from './pages/home/ecosistema';
import { initIA } from './pages/home/ia';
import { initSolicitarAcceso } from './pages/home/solicitar-acceso';
import { initFaq } from './pages/home/faq';
import { initContacto } from './pages/home/contacto';
import { initLegal } from './pages/home/legal';
import { initCtaFinal } from './pages/home/cta-final';

// 3. Páginas: Comunidades (resources/views/pages/comunidades/)
import { initRutas } from './pages/comunidades/rutas';
import { initMobileBar } from './pages/comunidades/mobile-bar';
import { initFormulario } from './pages/comunidades/proveedores/formulario';
import { initConsorcios } from './pages/comunidades/consorcios/consorcios';
import { initPlantel } from './pages/comunidades/plantel/plantel';
import { initProveedores } from './pages/comunidades/proveedores/proveedores';

// ==========================================================================
// FUNCIONES GENERALES DE LA APLICACIÓN
// ==========================================================================

/**
 * 1. Inicialización general de iconos Lucide
 */
function initIcons() {
    createIcons({ icons });
}

/**
 * 2. Animaciones generales de scroll (.fade-up)
 */
function initGeneralAnimations() {
    try {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.08 });

        document.querySelectorAll('.fade-up, .slide-card-left').forEach(el => observer.observe(el));
    } catch (e) {
        document.querySelectorAll('.fade-up, .slide-card-left').forEach(el => el.classList.add('visible'));
    }
}

// ==========================================================================
// INICIALIZACIÓN AL CARGAR EL DOM
// ==========================================================================

document.addEventListener('DOMContentLoaded', () => {
    // 1. Funciones generales
    initIcons();
    initGeneralAnimations();

    // 2. Componentes globales
    initNavbar();

    // 3. Páginas: Home
    initHero();
    initComoFunciona();
    initFaq();
    initResultados();
    initComunidades();
    initSeguridad();
    initEcosistema();
    initIA();
    initSolicitarAcceso();
    initContacto();
    initLegal();
    initCtaFinal();

    // 4. Páginas: Comunidades
    initRutas();
    initMobileBar();
    initFormulario();
    initConsorcios();
    initPlantel();
    initProveedores();
});
