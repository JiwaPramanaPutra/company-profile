import Alpine from 'alpinejs';

// Swiper core + modules
import Swiper from 'swiper';
import { EffectFade, Autoplay, Pagination, Navigation, Keyboard, A11y, FreeMode, Mousewheel } from 'swiper/modules';

// Swiper styles
import 'swiper/css';
import 'swiper/css/effect-fade';
import 'swiper/css/pagination';
import 'swiper/css/navigation';
import 'swiper/css/free-mode';

// Expose Swiper to Alpine components
window.Swiper = Swiper;
window.SwiperModules = { EffectFade, Autoplay, Pagination, Navigation, Keyboard, A11y, FreeMode, Mousewheel };

window.Alpine = Alpine;
Alpine.start();

// Intersection Observer for scroll animations
document.addEventListener('DOMContentLoaded', () => {
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.15
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                // Optional: unobserve after animating once
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Select all elements that should animate on scroll
    const revealElements = document.querySelectorAll('.scroll-reveal, .animate-slide-up');
    
    revealElements.forEach(el => {
        // If it's already in viewport on load, add active class immediately
        const rect = el.getBoundingClientRect();
        if (rect.top < window.innerHeight && rect.bottom >= 0) {
            el.classList.add('active');
        } else {
            // Otherwise, observe it
            observer.observe(el);
            // Ensure .animate-slide-up classes are handled by intersection observer
            // by removing the immediate animation if they are below the fold
            if(el.classList.contains('animate-slide-up')) {
                el.classList.remove('animate-slide-up');
                el.classList.add('scroll-reveal');
            }
        }
    });
});
