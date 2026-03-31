    

    <!-- Footer -->
    <footer class="bg-zinc-900 border-t border-zinc-800 py-12 px-4 mt-auto">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-12">
            <div class="md:col-span-2">
                <div class="bg-white p-4 rounded-xl inline-block mb-6">
                    <img src="assets\img\NeoFestivals Logo\NeoFestival Logo Schwarz.png" alt="Neo Festivals" class="h-8 w-auto object-contain" />
                </div>
                <p class="text-zinc-400 text-sm max-w-sm mb-6 leading-relaxed">
                    Wir kreieren unvergessliche Festival-Momente. Von Block Partys bis zu Open-Airs – NeoFestivals ist dein Partner für Next-Level Eventmanagement.
                </p>
                <div>
                	<div class="flex items-center gap-6 pt-4">
    <a href="https://instagram.com/neofestivalsnf" target="_blank" class="text-zinc-500 hover:text-fuchsia-400 transition-all duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/></svg>
    </a>
    <a href="https://linkedin.com/company/neo-festivals-jens-köster-laszlo-papesch-gbr" target="_blank" class="text-zinc-500 hover:text-fuchsia-400 transition-all duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect width="4" height="12" x="2" y="9"/><circle cx="4" cy="4" r="2"/></svg>
    </a>
    <a href="https://tiktok.com/@neofestivals" target="_blank" class="text-zinc-500 hover:text-fuchsia-400 transition-all duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18V5l12-2v13"/><circle cx="6" cy="18" r="3"/><circle cx="18" cy="16" r="3"/></svg>
    </a>
</div>
                </div>
            </div>
            
            <div>
                <h4 class="text-white font-bold mb-6 tracking-wider uppercase text-sm">Navigation</h4>
                <ul class="space-y-3 text-sm text-zinc-400">
                    <li><a href="index.php" class="hover:text-fuchsia-400 transition-colors">Startseite</a></li>
                    <li><a href="events.php" class="hover:text-fuchsia-400 transition-colors">Events</a></li>
                    <li><a href="about.php" class="hover:text-fuchsia-400 transition-colors">Über Uns</a></li>
                    <li><a href="contact.php" class="hover:text-fuchsia-400 transition-colors">Kontakt</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-white font-bold mb-6 tracking-wider uppercase text-sm">Rechtliches</h4>
                <ul class="space-y-3 text-sm text-zinc-400">
                    <li><a href="impressum.php" class="hover:text-fuchsia-400 transition-colors">Impressum</a></li>
                    <li><a href="datenschutz.php" class="hover:text-fuchsia-400 transition-colors">Datenschutz</a></li>

                </ul>
            </div>
        </div>
        <div class="max-w-7xl mx-auto border-t border-zinc-800 mt-12 pt-8 text-center text-sm text-zinc-500">
            © <?php echo date("Y"); ?> NeoFestivals Eventmanagement. Alle Rechte vorbehalten.
        </div>
        
    </footer>

    <!-- Native JavaScript -->
    <script>
        // Icons laden
        lucide.createIcons();

        // Mobile Menu Logik
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        
        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
    
    
    

    <!-- ZENTRALES JAVASCRIPT: Steuert das Handy-Menü und zeichnet alle Icons auf einmal -->
<script src="js\script.js"></script>


</body>
</html>