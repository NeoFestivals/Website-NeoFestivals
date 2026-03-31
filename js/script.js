document.addEventListener('DOMContentLoaded', () => {
	// 1. Lucide Icons initialisieren
	lucide.createIcons();

	// 2. Mobile Menu Toggle
	const btn = document.getElementById('mobile-menu-btn');
	const menu = document.getElementById('mobile-menu');

	if (btn && menu) {
		btn.addEventListener('click', () => {
			menu.classList.toggle('hidden');
		});
	}

	// 3. Scroll-Animationen (Elemente einblenden)
	const observer = new IntersectionObserver((entries) => {
		entries.forEach(entry => {
			if (entry.isIntersecting) {
				entry.target.classList.add('visible');
				// Optional: observer.unobserve(entry.target) wenn es nur 1x animieren soll
			}
		});
	}, {
		threshold: 0.1
	});

	document.querySelectorAll('.fade-in-up').forEach(el => observer.observe(el));
});


// footer 
// footer Teil 2
document.addEventListener('DOMContentLoaded', function() {
	// 1. Alle Lucide Icons initialisieren (Wichtig für den Slider!)
	lucide.createIcons();

	// 2. Handy-Menü Logik
	const btn = document.getElementById('mobile-menu-btn');
	const menu = document.getElementById('mobile-menu');
	const icon = document.getElementById('menu-icon');

	if (btn && menu && icon) {
		btn.addEventListener('click', () => {
			// Menü auf/zu klappen
			menu.classList.toggle('hidden');

			// Icon tauschen (menu = 3 Striche, x = Schließen)
			if (menu.classList.contains('hidden')) {
				icon.setAttribute('data-lucide', 'menu');
			} else {
				icon.setAttribute('data-lucide', 'x');
			}

			// Neue Icons sofort neu zeichnen
			lucide.createIcons();
		});
	}
});

