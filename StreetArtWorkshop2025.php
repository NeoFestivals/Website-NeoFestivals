<?php
// ==========================================
// KONFIGURATION: RECAP STREET ART FÖRDERPROGRAMM
// ==========================================
$recapData = [
    'title' => 'Street Art Projekt',
    'subtitle' => 'Ein Rückblick auf das kreative Förderprogramm im Landkreis Rottweil.',
    'year' => '2025/2026',
    'location' => 'Landkreis Rottweil',
    'stats' => [
        ['label' => 'Teilnehmer', 'value' => '45+'],
        ['label' => 'Meter Wall', 'value' => '120m²'],
        ['label' => 'Dosen verbraucht', 'value' => '300+'],
        ['label' => 'Workshops', 'value' => '6']
    ],
    'gallery' => [
        ['img' => 'assets/img/StreetArt/recap1.png', 'desc' => 'Die erste Skizze'],
        ['img' => 'assets/img/StreetArt/recap2.png', 'desc' => 'Action an der Wall'],
        ['img' => 'assets/img/StreetArt/recap3.png', 'desc' => 'Das fertige Piece'],
        ['img' => 'assets/img/StreetArt/recap4.png', 'desc' => 'Team-Vibe'],
    ]
];

include 'header.php';
?>

<div class="relative z-10 bg-gray-950 min-h-screen text-white font-sans overflow-x-hidden">

    <header class="relative h-[50vh] flex items-center justify-center overflow-hidden border-b border-white/5">
        <div class="absolute inset-0 z-0">
            <img src="assets/img/StreetArt/Header_Recap.png" 
                 class="w-full h-full object-cover opacity-30 -translate-x-8 translate-y-8 scale-110 grayscale hover:grayscale-0 transition-all duration-[2s]">
            <div class="absolute inset-0 bg-gradient-to-t from-gray-950 via-gray-950/50 to-transparent"></div>
        </div>

        <div class="relative z-10 text-center px-4 -mt-10">
            <span class="inline-block px-3 py-1 rounded-full border border-fuchsia-500/30 bg-fuchsia-500/10 text-fuchsia-400 text-[10px] font-black tracking-[0.4em] uppercase mb-4">
                Förderprojekt LK Rottweil
            </span>
            <h1 class="text-6xl md:text-8xl font-black uppercase italic tracking-tighter leading-none mb-2">
                Urban <span class="text-fuchsia-500">Culture</span>
            </h1>
            <p class="text-zinc-500 font-medium tracking-widest text-xs uppercase"><?php echo $recapData['year']; ?> • Mission accomplished</p>
        </div>
    </header>

    <section class="max-w-5xl mx-auto px-6 -mt-12 relative z-20">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <?php foreach ($recapData['stats'] as $stat): ?>
            <div class="bg-zinc-900/90 backdrop-blur-xl border border-white/10 p-6 rounded-[2rem] text-center shadow-2xl">
                <p class="text-3xl font-black text-white mb-1 tracking-tighter"><?php echo $stat['value']; ?></p>
                <p class="text-[9px] font-black text-fuchsia-500 uppercase tracking-widest"><?php echo $stat['label']; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <main class="max-w-4xl mx-auto px-6 py-24">
        <div class="space-y-12">
            <div class="flex items-center gap-4">
                <div class="h-1.5 w-12 bg-fuchsia-600 rounded-full shadow-[0_0_15px_rgba(192,38,211,0.8)]"></div>
                <h2 class="text-xs font-black uppercase tracking-[0.5em]">Die Story</h2>
            </div>
            
            <div class="prose prose-invert max-w-none">
                <p class="text-2xl md:text-3xl font-bold leading-tight text-white italic">
                    Was als Idee im Landratsamt begann, endete in einer <span class="text-fuchsia-500">Explosion der Kreativität</span> auf den Wänden des Landkreises.
                </p>
                <p class="text-zinc-400 text-lg leading-relaxed mt-6">
                    Durch die Unterstützung des Landkreises Rottweil konnten wir jungen Talenten den Raum geben, sich künstlerisch auszudrücken. In mehreren Workshops wurden nicht nur Techniken vermittelt, sondern auch das Verständnis für Urban Art als Teil unserer Kultur gestärkt. 
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-12">
                <?php foreach ($recapData['gallery'] as $index => $item): ?>
                <div class="group relative aspect-video rounded-[2.5rem] overflow-hidden border border-white/10 hover:border-fuchsia-500/50 transition-all duration-500">
                    <img src="<?php echo $item['img']; ?>" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-8">
                        <p class="text-[10px] font-black uppercase tracking-widest text-white"><?php echo $item['desc']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>

    <section class="bg-zinc-900/30 py-20 border-t border-white/5">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h3 class="text-[10px] font-black text-zinc-500 uppercase tracking-[0.4em] mb-12">Ermöglicht durch</h3>
            <div class="flex flex-wrap justify-center items-center gap-12 opacity-50 hover:opacity-100 transition-opacity">
                <div class="h-12 w-40 bg-zinc-800 rounded-xl flex items-center justify-center font-bold text-xs uppercase tracking-tighter">Landkreis Rottweil</div>
                <div class="h-12 w-32 bg-zinc-800 rounded-xl flex items-center justify-center font-bold text-xs uppercase tracking-tighter">Jugendförderung</div>
                <div class="h-12 w-36 bg-zinc-800 rounded-xl flex items-center justify-center font-bold text-xs uppercase tracking-tighter">Kulturamt</div>
            </div>
        </div>
    </section>

</div>

<script src="https://unpkg.com/lucide@latest"></script>
<script>lucide.createIcons();</script>

<?php include 'footer.php'; ?>