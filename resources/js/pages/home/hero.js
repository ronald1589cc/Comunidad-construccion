/**
 * ==========================================================================
 * SECTIONS / HERO.JS
 * Lógica y carrusel de fondo de la Portada (corresponde a sections/hero.blade.php)
 * ==========================================================================
 */

export function initHero() {
    const heroSlides = document.querySelectorAll('.hero-slide');
    const heroDots = document.querySelectorAll('.hero-dot');

    if (heroSlides.length <= 1) return;

    let currentSlide = 0;
    let slideTimer = null;

    function showSlide(index) {
        ensureLoaded(heroSlides[index]);
        heroSlides.forEach((slide, i) => {
            if (i === index) {
                slide.classList.remove('opacity-0');
                slide.classList.add('opacity-100');
            } else {
                slide.classList.remove('opacity-100');
                slide.classList.add('opacity-0');
            }
        });

        heroDots.forEach((dot, i) => {
            if (i === index) {
                dot.classList.remove('w-2', 'bg-steel/30');
                dot.classList.add('w-7', 'bg-construction');
            } else {
                dot.classList.remove('w-7', 'bg-construction');
                dot.classList.add('w-2', 'bg-steel/30');
            }
            dot.setAttribute('aria-current', String(i === index));
        });

        currentSlide = index;
    }

    function nextSlide() {
        const next = (currentSlide + 1) % heroSlides.length;
        showSlide(next);
    }

    const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    function start() {
        if (reduceMotion || slideTimer) return;
        slideTimer = setInterval(nextSlide, 5000);
    }
    function stop() {
        clearInterval(slideTimer);
        slideTimer = null;
    }

    // Carga diferida de las fotos 2-4 cuando el navegador está libre
    function ensureLoaded(slide) {
        if (slide && slide.dataset.src) {
            slide.src = slide.dataset.src;
            delete slide.dataset.src;
        }
    }
    const preloadRest = () => heroSlides.forEach(ensureLoaded);
    if ('requestIdleCallback' in window) {
        window.addEventListener('load', () => requestIdleCallback(preloadRest, { timeout: 3000 }));
    } else {
        window.addEventListener('load', () => setTimeout(preloadRest, 1500));
    }

    // Pausar cuando el hero no se ve o la pestaña está oculta
    const hero = document.getElementById('hero-slideshow');
    if (hero && 'IntersectionObserver' in window) {
        new IntersectionObserver(([entry]) => {
            entry.isIntersecting ? start() : stop();
        }).observe(hero);
    } else {
        start();
    }
    document.addEventListener('visibilitychange', () => {
        document.hidden ? stop() : start();
    });

    heroDots.forEach((dot) => {
        dot.addEventListener('click', () => {
            const target = parseInt(dot.getAttribute('data-slide'), 10);
            if (!isNaN(target)) {
                showSlide(target);
                stop();
                start();
            }
        });
    });
}
