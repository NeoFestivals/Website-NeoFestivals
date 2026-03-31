document.addEventListener('DOMContentLoaded', () => {
    // Initialize Lucide icons
    lucide.createIcons();

    // Mobile menu toggle logic
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');
    
    // Find the icon element inside the button without relying on a missing ID
    const icon = btn ? btn.querySelector('i') : null;

    if (btn && menu) {
        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
            
            // Swap icon based on menu state
            if (icon) {
                if (menu.classList.contains('hidden')) {
                    icon.setAttribute('data-lucide', 'menu');
                } else {
                    icon.setAttribute('data-lucide', 'x');
                }
                // Re-render icons after changing the attribute
                lucide.createIcons();
            }
        });
    }

    // Scroll animations using IntersectionObserver
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