<?php include 'header.php'; ?>

<section class="relative w-full min-h-screen flex items-center justify-center overflow-hidden bg-zinc-950">
    
    <div class="absolute inset-0 z-0">
        <div class="absolute top-1/4 -left-20 w-96 h-96 bg-fuchsia-600/20 rounded-full blur-[120px] animate-pulse"></div>
        <div class="absolute bottom-1/4 -right-20 w-96 h-96 bg-purple-600/20 rounded-full blur-[120px] animate-pulse" style="animation-delay: 2s;"></div>
    </div>

    <div class="relative z-10 max-w-3xl mx-auto px-6 text-center">
        
        <div class="inline-flex items-center justify-center w-20 h-20 rounded-3xl bg-zinc-900 border border-zinc-800 mb-8 shadow-2xl group">
            <i data-lucide="construction" class="w-10 h-10 text-fuchsia-500 group-hover:rotate-12 transition-transform duration-500"></i>
        </div>

        <h1 class="text-5xl md:text-7xl font-black text-white uppercase tracking-tighter mb-6">
            Work in <br />
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-fuchsia-500 via-pink-500 to-purple-500">Progress.</span>
        </h1>

        <div class="w-24 h-1 bg-gradient-to-r from-fuchsia-600 to-purple-600 mx-auto mb-8 rounded-full"></div>

        <p class="text-zinc-400 text-lg md:text-xl leading-relaxed mb-12 max-w-lg mx-auto">
            Hier entsteht gerade etwas Großes. Wir schrauben noch am Sound-System und polieren die Laser. Schau bald wieder vorbei!
        </p>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="index.php" class="group flex items-center gap-2 bg-white text-black px-8 py-4 rounded-full font-black uppercase hover:bg-fuchsia-500 hover:text-white transition-all active:scale-95">
                <i data-lucide="chevron-left" class="w-5 h-5"></i> Zurück zur Startseite
            </a>
            
            <a href="contact.php" class="flex items-center gap-2 bg-zinc-900 border border-zinc-800 text-zinc-300 px-8 py-4 rounded-full font-black uppercase hover:border-zinc-700 transition-all">
                Kontakt aufnehmen
            </a>
        </div>
    </div>

    <div class="absolute bottom-12 left-1/2 -translate-x-1/2 flex items-center gap-3 text-zinc-600 text-[10px] font-bold tracking-[0.3em] uppercase">
        <span class="w-12 h-[1px] bg-zinc-800"></span>
        Status: 99,9% geladen
        <span class="w-12 h-[1px] bg-zinc-800"></span>
    </div>

</section>

<script src="https://unpkg.com/lucide@latest"></script>
<script>
  lucide.createIcons();
</script>

<?php include 'footer.php'; ?>