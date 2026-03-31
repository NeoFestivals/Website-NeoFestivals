<?php
// ==========================================
// 1. KONFIGURATION
// ==========================================
$overviewData = [
    'header_title' => 'Events',
    'header_subtitle' => 'Nächste Raves & legendäre Rückblicke.',
    'upcoming_events' => [
        [
            'title' => 'Blockparty RAVE',
            'date' => ' 2026',
            'location' => 'Oberndorf',
            'image' => 'assets/img/BlockParty/Blcokpartyhintergrund1.png',
            'status' => 'Tickets noch nicht verfügbar',
            'link' => 'Blockparty2026.php',
            'featured' => true 
        ],
    ],
    'past_events' => [
        ['title' => 'Blockparty 2023', 'date' => '2023', 'location' => 'Oberndorf', 'image' => 'assets/img/BlockParty/Blockparty2023.png', 'recap_link' => 'CoomingSoon.php', 'gallery_count' => 42],
        ['title' => 'Blockparty 2024', 'date' => '2024', 'location' => 'Oberndorf', 'image' => 'assets/img/BlockParty/Blockparty2024.png', 'recap_link' => 'CoomingSoon.php', 'gallery_count' => 28],
        ['title' => 'Blockparty 2025', 'date' => '2025', 'location' => 'Oberndorf', 'image' => 'assets/img/BlockParty/Blockparty2025.png', 'recap_link' => 'CoomingSoon.php', 'gallery_count' => 55],
    ]
];

include 'header.php';
?>

<div class="fixed inset-0 z-0 pointer-events-none overflow-hidden">
    <div class="absolute -top-24 -left-24 w-[300px] md:w-[600px] h-[300px] md:h-[600px] bg-fuchsia-600/5 rounded-full blur-[120px] animate-pulse"></div>
    <div class="absolute bottom-1/4 right-0 w-[400px] h-[400px] bg-purple-600/5 rounded-full blur-[100px]"></div>
</div>

<div class="relative z-10 bg-transparent min-h-screen font-sans antialiased text-white">

    <header class="pt-20 pb-10 md:pt-24 md:pb-12 px-6 text-center max-w-5xl mx-auto -mt-4 md:-mt-8">
        <span class="inline-block px-4 py-1.5 rounded-full border border-fuchsia-500/20 bg-fuchsia-500/5 text-fuchsia-500 text-[10px] font-black uppercase tracking-[0.4em] mb-6 backdrop-blur-md">
            The Sound of Tomorrow
        </span>
        <h1 class="text-6xl md:text-8xl font-black mb-4 tracking-tighter uppercase italic leading-[0.85]">
            <?php echo htmlspecialchars($overviewData['header_title']); ?>
        </h1>
        <p class="text-zinc-500 text-sm md:text-base max-w-lg mx-auto font-medium">
            <?php echo htmlspecialchars($overviewData['header_subtitle']); ?>
        </p>
    </header>

    <main class="max-w-7xl mx-auto px-4 md:px-8 pb-32">

        <section class="mb-20">
            <div class="flex items-center gap-4 mb-8">
                <div class="h-1.5 w-12 bg-fuchsia-600 rounded-full shadow-[0_0_15px_rgba(192,38,211,0.8)]"></div>
                <h2 class="text-[10px] font-black text-white uppercase tracking-[0.5em]">Next Up</h2>
                <div class="h-[1px] flex-1 bg-gradient-to-r from-fuchsia-600/40 to-transparent"></div>
            </div>

            <div class="grid grid-cols-1 gap-8">
                <?php foreach ($overviewData['upcoming_events'] as $event): ?>
                <a href="<?php echo htmlspecialchars($event['link']); ?>" 
                   class="group relative block w-full h-[400px] md:h-[450px] rounded-[3rem] overflow-hidden border border-white/10 bg-black transition-all duration-700 hover:border-fuchsia-500/50 hover:shadow-[0_0_60px_rgba(192,38,211,0.2)]">
                    
                    <div class="absolute inset-0 z-0">
                        <img src="<?php echo htmlspecialchars($event['image']); ?>" 
                             class="w-full h-full object-cover opacity-40 transition-all duration-1000 group-hover:opacity-80 group-hover:scale-105 ">
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>
                    </div>

                    <div class="relative z-10 h-full p-8 md:p-14 flex flex-col justify-end">
                        <div class="mb-6">
                             <div class="inline-flex items-center gap-2 bg-fuchsia-600 text-white px-4 py-2 rounded-full text-[10px] font-black uppercase tracking-widest shadow-2xl">
                                <span class="w-2 h-2 bg-white rounded-full animate-ping"></span>
                                <?php echo htmlspecialchars($event['status']); ?>
                             </div>
                        </div>
                        
                        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6">
                            <div class="space-y-3">
                                <div class="text-[10px] md:text-xs font-bold text-fuchsia-500 uppercase tracking-widest bg-fuchsia-500/10 px-3 py-1 rounded inline-block border border-fuchsia-500/20">
                                    <?php echo $event['date']; ?> • <?php echo $event['location']; ?>
                                </div>
                                <h3 class="text-4xl md:text-7xl font-black uppercase tracking-tighter leading-none">
                                    <?php echo htmlspecialchars($event['title']); ?>
                                </h3>
                            </div>
                            
                            <div class="w-16 h-16 md:w-20 md:h-20 rounded-full border border-white/20 flex items-center justify-center text-white group-hover:bg-fuchsia-600 group-hover:border-fuchsia-600 group-hover:rotate-45 transition-all duration-500 backdrop-blur-sm">
                                <i data-lucide="arrow-up-right" class="w-8 h-8"></i>
                            </div>
                        </div>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </section>

        <section>
            <div class="flex items-center gap-4 mb-10 text-zinc-600">
                <div class="h-1.5 w-12 bg-purple-600 rounded-full shadow-[0_0_15px_rgba(147,51,234,0.6)]"></div>
                <h2 class="text-[10px] font-black uppercase tracking-[0.5em]">Recaps</h2>
                <div class="h-[1px] flex-1 bg-gradient-to-r from-purple-600/30 to-transparent"></div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($overviewData['past_events'] as $event): ?>
                <a href="<?php echo htmlspecialchars($event['recap_link']); ?>" 
                   class="group relative flex flex-col bg-zinc-900/30 border border-white/5 rounded-[2.5rem] overflow-hidden transition-all duration-500 hover:-translate-y-4 hover:bg-zinc-900 hover:border-fuchsia-500/30 hover:shadow-[0_30px_60px_rgba(192,38,211,0.15)]">
                    
                    <div class="relative h-60 overflow-hidden bg-black">
                        <img src="<?php echo htmlspecialchars($event['image']); ?>" 
                             loading="lazy"
                             class="w-full h-full object-cover opacity-90 transition-all duration-1000 group-hover:scale-110 group-hover:opacity-100">
                        <div class="absolute inset-0 bg-gradient-to-t from-zinc-950 via-transparent to-transparent opacity-70"></div>
                    </div>

                    <div class="p-8">
                        <span class="text-[9px] font-black text-fuchsia-600/80 uppercase tracking-widest mb-2 block"><?php echo $event['date']; ?></span>
                        <h4 class="text-2xl font-black uppercase mb-6 group-hover:text-fuchsia-400 transition-colors"><?php echo $event['title']; ?></h4>
                        
                        <div class="flex items-center justify-between pt-5 border-t border-white/5">
                            <span class="text-[10px] font-black text-zinc-500 uppercase tracking-widest group-hover:text-white transition-colors flex items-center gap-2">
                                Review <i data-lucide="chevron-right" class="w-3 h-3 text-fuchsia-500"></i>
                            </span>
                            <div class="px-3 py-1 bg-fuchsia-500/10 border border-fuchsia-500/20 rounded-full text-[9px] font-black text-fuchsia-400">
                                <?php echo $event['gallery_count']; ?> PICS
                            </div>
                        </div>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </section>
    </main>
</div>

<script src="https://unpkg.com/lucide@latest"></script>
<script>lucide.createIcons();</script>

<style>
    * { -webkit-tap-highlight-color: transparent; }
    body { background-color: #09090b; } /* Tiefschwarzer Hintergrund für besseren Kontrast */
</style>

<?php include 'footer.php'; ?>