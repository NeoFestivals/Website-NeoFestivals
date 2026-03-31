<?php include 'header.php'; ?>

<!-- Hero Section -->
<section class="relative w-full h-[90vh] flex items-center justify-center overflow-hidden bg-black">
    
    <div class="absolute inset-0 z-0 bg-cover bg-[center_top_25%] bg-no-repeat opacity-40 mix-blend-screen scale-105" 
         style="background-image: url('assets/img/BlockParty/Blcokpartyhintergrund1.png')">
    </div>
    
    <div class="absolute inset-0 bg-gradient-to-t from-zinc-950 via-zinc-950/40 to-black/60 z-10"></div>


    <div class="relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <span class="inline-block px-4 py-1.5 rounded-full bg-fuchsia-600/20 border border-fuchsia-500/50 text-fuchsia-400 font-bold tracking-widest text-xs uppercase mb-6">Eventmanagement der Extraklasse</span>
        <h1 class="text-5xl md:text-7xl lg:text-8xl font-black text-white mb-6 uppercase tracking-tighter drop-shadow-2xl">
            We create <br />
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-fuchsia-500 via-pink-500 to-purple-500 animate-pulse">Partys.</span>
        </h1>
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mt-10">
            <a href="events.php" class="bg-fuchsia-600 hover:bg-fuchsia-500 text-white px-8 py-4 rounded-full text-lg font-bold transition-all hover:scale-105 shadow-[0_0_30px_rgba(192,38,211,0.4)] flex items-center gap-2 ">
                Kommende Events <i data-lucide="arrow-right" class="w-5 h-5"></i>
            </a>
        </div>
    </div>
</section>


<!-- Sponsoren Slider via PHP Loop -->
<section class="py-10 bg-zinc-950 border-t border-b border-zinc-900 overflow-hidden relative">
    <div class="absolute left-0 top-0 w-32 h-full bg-gradient-to-r from-zinc-950 to-transparent z-10 pointer-events-none"></div>
    <div class="absolute right-0 top-0 w-32 h-full bg-gradient-to-l from-zinc-950 to-transparent z-10 pointer-events-none"></div>
    
    <div class="animate-marquee">
        <?php 
        // 1. Array anpassen: 'logo' statt 'icon' mit Pfad zu deinen Dateien
        $sponsors = [
            ["name" => "Büffee", "logo" => "assets\img\sponsoren\Logo-Büffee.png"],
            ["name" => "Steinle", "logo" => "assets\img\sponsoren\Steinle.png"],
            ["name" => "barbershop", "logo" => "assets\img\sponsoren\barbershop.png"],
            ["name" => "frankradynski", "logo" => "assets/img/sponsoren/frankradynski.png"],
            ["name" => "gefako", "logo" => "assets\img\sponsoren\gefako.png"],
            ["name" => "Hirsch", "logo" => "assets\img\sponsoren\hirsch.png"],
            ["name" => "mcshape", "logo" => "assets\img\sponsoren\mcshape.png"],
            ["name" => "paardullis", "logo" => "assets\img\sponsoren\paardullis.png"],
            ["name" => "sms", "logo" => "assets\img\sponsoren\sms.png"],
            ["name" => "solution", "logo" => "assets\img\sponsoren\solution.png"],
            ["name" => "sparkasse", "logo" => "assets\img\sponsoren\sparkasse.png"],
            ["name" => "svo", "logo" => "assets\img\sponsoren\svo.png"],
            ["name" => "Lang2Go", "logo" => "assets\img\sponsoren\logo_lang2go.png"],



        ];

        // Zweifache Ausgabe für den Endlos-Effekt
        for($i=0; $i<2; $i++) {
            foreach($sponsors as $sponsor) {
                echo '<div class="flex items-center gap-6 px-12 md:px-24 group cursor-default">';
                
                // 2. Das <img> Tag statt des <i> Tags
                echo '<img src="'.$sponsor['logo'].'" 
                           alt="'.$sponsor['name'].'" 
                           class="h-10 md:h-12 w-auto object-contain grayscale opacity-50 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-500" />';
                
                // Optional: Den Namen ausblenden, wenn das Logo schon den Namen enthält
                // echo '<span class="text-xl font-bold uppercase tracking-widest text-zinc-600 group-hover:text-white transition-colors">'.$sponsor['name'].'</span>';
                
                echo '</div>';
            }
        }
        ?>
    </div>
</section>


<section class="py-24 bg-zinc-950">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="group p-8 rounded-3xl bg-zinc-900/50 border border-zinc-800 hover:border-fuchsia-500/50 transition-all duration-500">
                <div class="w-12 h-12 bg-fuchsia-600/10 rounded-2xl flex items-center justify-center text-fuchsia-500 mb-6 group-hover:scale-110 transition-transform">
                    <i data-lucide="layers" class="w-6 h-6"></i>
                </div>
                <h3 class="text-xl font-bold text-white mb-4 uppercase">Event Konzepte</h3>
                <p class="text-zinc-500 text-sm leading-relaxed">Von der ersten Skizze bis zur Laser-Show. Wir entwickeln Welten, in die eure Gäste eintauchen.</p>
            </div>

            <div class="group p-8 rounded-3xl bg-zinc-900/50 border border-zinc-800 hover:border-purple-500/50 transition-all duration-500">
                <div class="w-12 h-12 bg-purple-600/10 rounded-2xl flex items-center justify-center text-purple-500 mb-6 group-hover:scale-110 transition-transform">
                    <i data-lucide="zap" class="w-6 h-6"></i>
                </div>
                <h3 class="text-xl font-bold text-white mb-4 uppercase">High-End Produktion</h3>
                <p class="text-zinc-500 text-sm leading-relaxed">Modernste Sound-Systeme und Lichttechnik. Wir bringen Club-Vibes an jeden beliebigen Ort.</p>
            </div>

            <div class="group p-8 rounded-3xl bg-zinc-900/50 border border-zinc-800 hover:border-fuchsia-500/50 transition-all duration-500">
                <div class="w-12 h-12 bg-fuchsia-600/10 rounded-2xl flex items-center justify-center text-fuchsia-500 mb-6 group-hover:scale-110 transition-transform">
                    <i data-lucide="users" class="w-6 h-6"></i>
                </div>
                <h3 class="text-xl font-bold text-white mb-4 uppercase">Full Management</h3>
                <p class="text-zinc-500 text-sm leading-relaxed">Orga, Security, Bar und Sponsoring. Ihr feiert, wir kümmern uns um den kompletten Rest.</p>
            </div>
        </div>
    </div>
</section>


<!-- Throwback Section (Rückblick 21 - 25) -->
<section class="py-24 bg-black border-t border-zinc-900">
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-16 flex flex-col md:flex-row md:items-end justify-between gap-6">
            <div>
                <h2 class="text-3xl md:text-5xl font-black text-white uppercase tracking-tight mb-4">
                    Hall of <span class="text-transparent bg-clip-text bg-gradient-to-r from-fuchsia-500 to-purple-500">Fame</span>
                </h2>
                <p class="text-zinc-400 max-w-xl text-lg">Ein Rückblick auf die legendärsten Block Partys der letzten Jahre.</p>
            </div>
            <div class="text-fuchsia-500 font-black text-2xl tracking-tighter hidden md:block opacity-30">'23 — '26</div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php
            $throwbacks = [
                ["year" => "2023", "category" => "NeoFestivals", "img" => "assets/img/BlockParty/blockparty2023.png", "desc" => "Neon Nights Takeover", "position" => "object-[20%_50%]", "link" => "CoomingSoon.php"],
                ["year" => "2024", "category" => "NeoFestivals", "img" => "assets/img/BlockParty/blockparty2024.png", "desc" => "Neon Nights Takeover", "position" => "object-center", "link" => "Blockparty2024.php"],
                ["year" => "2025", "category" => "NeoFestivals", "img" => "assets/img/BlockParty/blockparty2025.png", "desc" => "The New Era of Open Air", "position" => "object-[50%_40%]", "link" => "CoomingSoon.php"],
                ["year" => "2026", "category" => "Public Funding", "img" => "assets/img/BlockParty/BlockpartyRAVEmitFoerderung.png", "desc" => "Laser & Techno Revolution", "position" => "object-[55%_50%]", "link" => "Blockparty2026.php"]
            ];

            foreach($throwbacks as $tb): ?>
                <a href="<?php echo $tb['link']; ?>" class="group relative rounded-3xl overflow-hidden aspect-[4/5] bg-zinc-900 cursor-pointer block">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/20 to-transparent z-10 opacity-80 group-hover:opacity-100 transition-opacity"></div>
                    
                    <div class="absolute top-6 left-6 z-30 transform -translate-y-2 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500">
                        <span class="bg-fuchsia-600 text-white text-[9px] font-black uppercase tracking-[0.2em] px-3 py-1.5 rounded-full shadow-xl border border-white/10">
                            <?php echo $tb['category']; ?>
                        </span>
                    </div>

                    <img src="<?php echo $tb['img']; ?>" 
                         class="w-full h-full object-cover <?php echo $tb['position']; ?> transform transition-transform duration-1000 group-hover:scale-110 grayscale group-hover:grayscale-0" />
                    
                    <div class="absolute inset-0 z-20 flex flex-col justify-end p-8">
                        <div class="text-fuchsia-400 font-bold uppercase tracking-wider text-xs mb-2 opacity-0 transform translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">
                            <?php echo $tb['desc']; ?>
                        </div>
                        <h3 class="text-4xl md:text-5xl font-black text-white italic transform group-hover:-translate-y-2 transition-transform duration-300">
                            '<?php echo substr($tb['year'], 2); ?>
                        </h3>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Throwback Section (Rückblick Projekte) -->

<section class="py-24 bg-zinc-950 border-t border-zinc-900">
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-16">
            <h2 class="text-3xl md:text-5xl font-black text-white uppercase tracking-tight mb-4">
                Unsere <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-500 to-fuchsia-500">Projekte</span>
            </h2>
            <p class="text-zinc-400 max-w-xl text-lg">Hinter den Kulissen: Konzepte, Förderung und Realisierung.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <?php
            $projects = [
                [
                    "title" => "SVO Rundenabschluss",
                    "category" => "Public",
                    "img" => "assets/img/rundenabschluss/svorundenabschluss.png", 
                    "desc" => "Feierlicher Abschluss der Saison mit dem gesamten SVO.",
                    "pos" => "object-[70%_10%]",
                    "link" => "CoomingSoon.php"
                ],
                [
                    "title" => "Street Art Workshop",
                    "category" => "Public Funding",
                    "img" => "assets/img/StreetArt/streetartthumbnail.png", 
                    "desc" => "Zusammenarbeit mit dem Landkreis zur Förderung kreativer Generationen.",
                    "pos" => "object-center",
                    "link" => "StreetArtWorkshop2025.php"
                ]
            ];

            foreach($projects as $project): ?>
                <a href="<?php echo $project['link']; ?>" class="group relative rounded-[2.5rem] overflow-hidden bg-zinc-900 border border-zinc-800 transition-all duration-500 cursor-pointer block">
                    <div class="aspect-[16/9] overflow-hidden relative">
                        <img src="<?php echo $project['img']; ?>" 
                             class="w-full h-full object-cover <?php echo $project['pos']; ?> grayscale group-hover:grayscale-0 transition-all duration-700 group-hover:scale-110" 
                             alt="<?php echo $project['title']; ?>">
                    </div>

                    <div class="absolute inset-0 p-6 md:p-10 z-20 flex flex-col justify-end items-start opacity-0 group-hover:opacity-100 transition-all duration-500">
                        <span class="bg-fuchsia-600/80 backdrop-blur-sm text-white text-[10px] font-black uppercase tracking-[0.2em] px-4 py-1.5 rounded-full mb-4 shadow-lg transform translate-y-4 group-hover:translate-y-0 transition-all duration-500 delay-75">
                            <?php echo $project['category']; ?>
                        </span>

                        <div class="bg-black/80 backdrop-blur-md px-6 py-5 rounded-2xl border border-white/5 shadow-2xl transform translate-y-8 group-hover:translate-y-0 transition-all duration-500">
                            <h3 class="text-2xl md:text-3xl font-black text-white uppercase leading-tight mb-2">
                                <?php echo $project['title']; ?>
                            </h3>
                            <p class="text-zinc-300 text-sm leading-relaxed">
                                <?php echo $project['desc']; ?>
                            </p>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="py-20 bg-gradient-to-br from-fuchsia-900/20 to-purple-900/20 border-y border-white/5">
    <div class="max-w-4xl mx-auto text-center px-4">
        <h2 class="text-4xl md:text-6xl font-black text-white mb-8 uppercase tracking-tighter">Bereit für den <span class="text-fuchsia-500">nächsten</span> Rave?</h2>
        <p class="text-zinc-400 text-lg mb-10">Egal ob Kooperation, Sponsoring oder Booking – lass uns gemeinsam Geschichte schreiben.</p>
        <a href="contact.php" class="inline-block bg-white text-black px-10 py-4 rounded-full font-black uppercase hover:bg-fuchsia-500 hover:text-white transition-all">Jetzt Kontakt aufnehmen</a>
    </div>
</section>



<?php include 'footer.php'; ?>