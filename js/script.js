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