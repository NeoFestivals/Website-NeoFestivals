<?php
// ==========================================
// RECAP KONFIGURATION (Hier Daten anpassen)
// ==========================================
$recapData = [
    'title' => 'Neon Nights - The Aftermath',
    'event_name' => 'Neon Nights Blockparty Vol. 1',
    'date' => '15. August 2025',
    'hero_image' => 'https://images.unsplash.com/photo-1516450360452-9312f5e86fc7?q=80&w=2000&auto=format&fit=crop',
    
    // Mehrere Absätze für den Report-Text
    'report_text' => [
        'Was für eine unvergessliche Nacht! Als die Sonne über dem Industrieareal unterging, verwandelte sich das rohe Betongelände in ein leuchtendes Farbenmeer aus Neonröhren und Schwarzlicht.',
        'DJ Shadowfax hat direkt zu Beginn die Stimmung zum Kochen gebracht, bevor die Bass Invaders das Closing komplett abgerissen haben. Die Energie in der Menge war von der ersten bis zur letzten Minute absolut elektrisierend.',
        'Wir danken allen Ravern, die mit uns bis in die frühen Morgenstunden getanzt haben. Ohne euch wäre das nicht möglich gewesen. Schaut euch unten die besten Momente in der Galerie an – wir sehen uns auf der nächsten Party!'
    ],
    
    // Statistiken / Fakten
    'stats' => [
        ['label' => 'Raver', 'value' => '2.500+', 'icon' => 'Users'],
        ['label' => 'DJs', 'value' => '4', 'icon' => 'Zap'],
        ['label' => 'Stunden Rave', 'value' => '10', 'icon' => 'Clock'],
        ['label' => 'BPM Peak', 'value' => '165', 'icon' => 'Music'],
    ],
    
    // Bilder-Links für die Galerie
    'gallery' => [
        'https://images.unsplash.com/photo-1492684223066-81342ee5ff30?q=80&w=800&auto=format&fit=crop',
        'https://images.unsplash.com/photo-1506157786151-b8491531f063?q=80&w=800&auto=format&fit=crop',
        'https://images.unsplash.com/photo-1524368535928-5b5e00ddc76b?q=80&w=800&auto=format&fit=crop',
        'https://images.unsplash.com/photo-1574169208507-84376144848b?q=80&w=800&auto=format&fit=crop',
        'https://images.unsplash.com/photo-1533174000228-4f59c20ee307?q=80&w=800&auto=format&fit=crop',
        'https://images.unsplash.com/photo-1558317751-bc3ed6f85f72?q=80&w=800&auto=format&fit=crop',
    ]
];

include 'header.php';
?>

<!-- RECAP HERO SECTION -->
<section class="relative w-full h-[50vh] flex items-center justify-center overflow-hidden border-b border-purple-500/30 bg-gray-950">
    <div class="absolute inset-0 z-0">
        <img src="<?php echo htmlspecialchars($recapData['hero_image']); ?>" alt="Recap Background" class="w-full h-full object-cover opacity-30 grayscale-[30%]">
        <div class="absolute inset-0 bg-gradient-to-t from-gray-950 via-gray-950/50 to-transparent"></div>
    </div>

    <div class="relative z-10 text-center px-4 max-w-4xl mx-auto mt-10">
        <span class="inline-block py-1 px-3 rounded-full bg-gray-900 border border-gray-700 text-gray-400 text-sm font-semibold tracking-wider mb-6">
            RÜCKBLICK &bull; <?php echo htmlspecialchars($recapData['date']); ?>
        </span>
        <h1 class="text-4xl md:text-6xl font-black text-white mb-4 tracking-tight drop-shadow-[0_0_20px_rgba(168,85,247,0.6)] uppercase">
            <?php echo htmlspecialchars($recapData['title']); ?>
        </h1>
        <p class="text-xl text-purple-300 font-mono">
            <?php echo htmlspecialchars($recapData['event_name']); ?>
        </p>
    </div>
</section>

<!-- MAIN CONTENT -->
<main class="bg-gray-950 text-gray-200 py-20 px-4">
    <div class="max-w-5xl mx-auto space-y-24">

        <!-- REPORT & STATS GRID -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            
            <!-- Text Report -->
            <div class="lg:col-span-7 space-y-6">
                <h2 class="text-3xl font-bold text-white uppercase tracking-wider mb-8 flex items-center gap-3">
                    <span class="w-8 h-1 bg-purple-500 rounded-full shadow-[0_0_8px_rgba(168,85,247,0.8)]"></span>
                    Der Report
                </h2>
                <?php foreach ($recapData['report_text'] as $paragraph): ?>
                <p class="text-lg text-gray-300 leading-relaxed">
                    <?php echo htmlspecialchars($paragraph); ?>
                </p>
                <?php endforeach; ?>
            </div>

            <!-- Stats Sidebar -->
            <div class="lg:col-span-5 grid grid-cols-2 gap-4">
                <?php foreach ($recapData['stats'] as $stat): ?>
                <div class="bg-gray-900 border border-gray-800 rounded-xl p-6 flex flex-col items-center text-center hover:border-purple-500/50 transition-colors duration-300 group">
                    <!-- Stat Number -->
                    <div class="text-3xl font-black text-white mb-2 group-hover:drop-shadow-[0_0_10px_rgba(168,85,247,0.6)] transition-all">
                        <?php echo htmlspecialchars($stat['value']); ?>
                    </div>
                    <!-- Stat Label -->
                    <div class="text-sm text-gray-500 uppercase tracking-wider">
                        <?php echo htmlspecialchars($stat['label']); ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- GALLERY SECTION -->
        <section id="gallery">
            <div class="flex items-center gap-4 mb-10">
                <h2 class="text-3xl md:text-4xl font-bold text-white uppercase tracking-wider">Galerie</h2>
                <div class="h-px flex-1 bg-gradient-to-r from-purple-500 to-transparent"></div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                <?php foreach ($recapData['gallery'] as $index => $imgSrc): ?>
                <div class="aspect-square overflow-hidden rounded-xl cursor-pointer group relative bg-gray-900" onclick="openLightbox('<?php echo htmlspecialchars($imgSrc); ?>')">
                    <div class="absolute inset-0 bg-purple-900/20 opacity-0 group-hover:opacity-100 transition-opacity z-10 duration-300"></div>
                    <img src="<?php echo htmlspecialchars($imgSrc); ?>" alt="Gallery Image <?php echo $index + 1; ?>" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <?php endforeach; ?>
            </div>
        </section>

    </div>
</main>



<!-- LIGHTBOX MODAL (Versteckt bis es angeklickt wird) -->
<div id="lightbox" class="fixed inset-0 z-[100] hidden bg-black/95 flex items-center justify-center p-4 backdrop-blur-sm opacity-0 transition-opacity duration-300">
    <button onclick="closeLightbox()" class="absolute top-6 right-6 text-gray-400 hover:text-white transition-colors z-[110] bg-gray-900/50 rounded-full p-2">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
    </button>
    <img id="lightbox-img" src="" alt="Enlarged view" class="max-w-full max-h-[90vh] object-contain rounded-lg shadow-[0_0_30px_rgba(168,85,247,0.3)] transition-transform duration-300 scale-95">
</div>

<!-- VANILLA JS FÜR DIE LIGHTBOX -->
<script>
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-img');

    function openLightbox(src) {
        lightboxImg.src = src;
        lightbox.classList.remove('hidden');
        document.body.style.overflow = 'hidden'; // Scrollen der Webseite stoppen
        
        // Timeout für sanfte Fade-In Animation
        setTimeout(() => {
            lightbox.classList.remove('opacity-0');
            lightboxImg.classList.remove('scale-95');
            lightboxImg.classList.add('scale-100');
        }, 10);
    }

    function closeLightbox() {
        lightbox.classList.add('opacity-0');
        lightboxImg.classList.remove('scale-100');
        lightboxImg.classList.add('scale-95');
        
        // Timeout warten bis Animation fertig ist, dann ausblenden
        setTimeout(() => {
            lightbox.classList.add('hidden');
            lightboxImg.src = '';
            document.body.style.overflow = ''; // Scrollen wieder erlauben
        }, 300);
    }

    // Lightbox schließen wenn man in den Hintergrund klickt
    lightbox.addEventListener('click', (e) => {
        if (e.target === lightbox) {
            closeLightbox();
        }
    });

    // Lightbox schließen wenn man "ESC" auf der Tastatur drückt
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && !lightbox.classList.contains('hidden')) {
            closeLightbox();
        }
    });
</script>

<?php 
 include 'footer.php';
?>