window.addEventListener('load', function () {
    const preloader = document.getElementById('preloader');
    if (preloader) {
        preloader.classList.add('opacity-0');
        setTimeout(() => preloader.style.display = 'none', 300); // Espera la transición
    }
});
import './bootstrap';
