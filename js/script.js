document.addEventListener('DOMContentLoaded', () => {
    // 1. Initial load of all icons
    lucide.createIcons();

    // 2. Mobile Menu Toggle
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');

    if (btn && menu) {
        btn.addEventListener('click', () => {
            // Toggle the menu visibility
            menu.classList.toggle('hidden');
            
            // Hard-replace the inner HTML to ensure Lucide finds a fresh <i> tag
            if (menu.classList.contains('hidden')) {
                btn.innerHTML = '<i data-lucide="menu" class="w-6 h-6"></i>';
            } else {
                btn.innerHTML = '<i data-lucide="x" class="w-6 h-6"></i>';
            }
            
            // Re-render the newly injected icon
            lucide.createIcons();
        });
    }

    // 3. Scroll Animations
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, {
        threshold: 0.1
    });

    document.querySelectorAll('.fade-in-up').forEach(el => observer.observe(el));
});