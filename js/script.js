document.addEventListener('DOMContentLoaded', () => {
    // 1. Initialize Lucide icons safely
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    } else {
        console.error('Lucide library not loaded.');
    }

    // 2. Mobile Menu Logic
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');

    if (btn && menu) {
        btn.addEventListener('click', (e) => {
            e.preventDefault(); // Prevent default touch/click behavior
            
            // Toggle the menu visibility
            menu.classList.toggle('hidden');
            
            // Toggle icon safely
            if (typeof lucide !== 'undefined') {
                if (menu.classList.contains('hidden')) {
                    btn.innerHTML = '<i data-lucide="menu" class="w-6 h-6"></i>';
                } else {
                    btn.innerHTML = '<i data-lucide="x" class="w-6 h-6"></i>';
                }
                lucide.createIcons();
            }
        });
    } else {
        console.error('Mobile menu button or menu container not found in DOM.');
    }

    // 3. Scroll Animations
    const animatedElements = document.querySelectorAll('.fade-in-up');
    if (animatedElements.length > 0) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.1 });

        animatedElements.forEach(el => observer.observe(el));
    }
});



// Floating ticket button visibility toggle
    const sliderSection = document.querySelector('.marquee-mask');
    const floatingBtn = document.getElementById('floating-ticket-btn');

    if (sliderSection && floatingBtn) {
        window.addEventListener('scroll', () => {
            // Calculate the bottom position of the slider
            const sliderBottom = sliderSection.offsetTop + sliderSection.offsetHeight;
            
            // Show button if scrolled past the slider, otherwise hide it
            if (window.scrollY > sliderBottom) {
                floatingBtn.classList.remove('translate-y-24', 'opacity-0', 'pointer-events-none');
                floatingBtn.classList.add('translate-y-0', 'opacity-100', 'pointer-events-auto');
            } else {
                floatingBtn.classList.add('translate-y-24', 'opacity-0', 'pointer-events-none');
                floatingBtn.classList.remove('translate-y-0', 'opacity-100', 'pointer-events-auto');
            }
        });
    } else {
        console.warn('Slider section or floating button not found for scroll logic.');
    }