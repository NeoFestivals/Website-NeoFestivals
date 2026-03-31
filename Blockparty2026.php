<?php

$eventData = [
    'title' => 'Blockparty RAVE',
    'date' => 'Juni 2026',
    'time' => 'Uhrzeit wird noch bekannt gegeben',
    'location' => 'Oberndorf am Neckar',
    'description' => 'Die fetteste Blockparty des Jahres. Massive Bässe und eine unvergessliche Nacht unter freiem Himmel. Sei dabei, wenn wir das Areal in ein leuchtendes Farbenmeer verwandeln.',
    'hero_image' => 'assets/img/BlockParty/Blcokpartyhintergrund1.png', 
    'lineup' => [
        ['name' => 'Kommt Demnächst', 'time' => '00:00 - 00:00', 'genre' => 'RAVE / Techno'],
        //['name' => 'Neon Pulse', 'time' => '20:00 - 22:30', 'genre' => 'Techno / Trance'],
        //['name' => 'Bass Invaders', 'time' => '22:30 - 01:00', 'genre' => 'Drum & Bass'],
        //['name' => 'Luna Eclipse', 'time' => '01:00 - 04:00', 'genre' => 'Hardstyle'],
    ],
    'tickets' => [
        ['tier' => 'Early Bird', 'price' => '5€', 'status' => 'Noch nicht verfügbar'],
        ['tier' => 'Standard', 'price' => '8€', 'status' => 'Noch nicht verfügbar'],
        ['tier' => 'Abendkasse', 'price' => '10€', 'status' => 'Noch nicht verfügbar'],
    ],
    'faqs' => [
        ['question' => 'Ab wie vielen Jahren ist das Event?', 'answer' => 'Der Einlass ist vorraussichtlich ab 16 Jahren.'],//'Der Einlass ist strikt ab 18 Jahren. Bitte bringe ein gültiges Ausweisdokument mit.'],
        ['question' => 'Gibt es Parkmöglichkeiten vor Ort?', 'answer' => 'Ja, es gibt Parkplätze direkt am Veranstaltungsort.'],
        ['question' => 'Gibt es eine Garderobe vor Ort?', 'answer' => 'Vorraussichtlich wird eine Garderobe zur Verfügung stehen.'],
        ['question' => 'Welche Zahlungsmittel werden akzeptiert?', 'answer' => 'Wir akzeptieren derzeit keine Kartenzahlung. Nur Bargeld an allen Bars.'],
    ]
];

include 'header.php';
?>
<!-- Background -->
<section class="relative w-full min-h-[85vh] md:min-h-[75vh] flex items-center justify-center bg-gray-950 overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="<?php echo htmlspecialchars($eventData['hero_image']); ?>" 
             alt="Event Background" 
             class="w-full h-full object-cover object-[center_30%] opacity-40">
        <div class="absolute inset-0 bg-gradient-to-b from-gray-950/20 via-gray-950/60 to-gray-950"></div>
    </div>

<!-- Infos -->
<div class="relative z-10 text-center px-6 max-w-4xl mx-auto mt-12 md:mt-20">
        
     

        <div class="mb-6">
            <a href="#foerderung" class="inline-flex items-center gap-2 py-1 px-3 rounded-full bg-white/5 border border-white/10 hover:border-fuchsia-500/40 transition-all group backdrop-blur-sm">
                <span class="w-1.5 h-1.5 rounded-full bg-fuchsia-500 animate-pulse shadow-[0_0_8px_rgba(192,38,211,0.8)]"></span>
                <span class="text-[9px] md:text-[10px] text-gray-500 uppercase tracking-[0.2em] font-bold group-hover:text-white transition-colors">
                    Gefördert durch Aller.Land
                </span>
            </a>
        </div>

   <span class="inline-block py-1 px-3 rounded-full bg-purple-900/50 border border-purple-500/50 text-purple-300 text-[10px] md:text-sm font-semibold tracking-wider mb-3 shadow-[0_0_15px_rgba(168,85,247,0.4)]">
            NÄCHSTES EVENT
        </span>
        
        <h1 class="text-4xl md:text-7xl font-black text-white mb-6 tracking-tight drop-shadow-[0_0_25px_rgba(168,85,247,0.6)] uppercase leading-none">
            <?php echo htmlspecialchars($eventData['title']); ?>
        </h1>
        <p class="text-base md:text-xl text-gray-300 mb-8 md:mb-12 max-w-2xl mx-auto leading-relaxed">
            <?php echo htmlspecialchars($eventData['description']); ?>
        </p>

        <div class="flex flex-col md:flex-row items-center justify-center gap-4 md:gap-10 bg-gray-900/80 backdrop-blur-md border border-purple-500/30 rounded-2xl p-5 md:p-6 shadow-[0_0_30px_rgba(168,85,247,0.2)]">
            <div class="flex items-center gap-3 w-full md:w-auto">
                <svg class="w-5 h-5 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                <div class="text-left">
                    <p class="text-[10px] text-gray-400 uppercase leading-none mb-1">Datum</p>
                    <p class="font-bold text-sm md:text-base text-white"><?php echo htmlspecialchars($eventData['date']); ?></p>
                </div>
            </div>
            <div class="flex items-center gap-3 w-full md:w-auto border-t border-gray-800 md:border-none pt-3 md:pt-0">
                <svg class="w-5 h-5 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <div class="text-left">
                    <p class="text-[10px] text-gray-400 uppercase leading-none mb-1">Zeit</p>
                    <p class="font-bold text-sm md:text-base text-white"><?php echo htmlspecialchars($eventData['time']); ?></p>
                </div>
            </div>
            <div class="flex items-center gap-3 w-full md:w-auto border-t border-gray-800 md:border-none pt-3 md:pt-0">
                <svg class="w-5 h-5 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                <div class="text-left">
                    <p class="text-[10px] text-gray-400 uppercase leading-none mb-1">Location</p>
                    <p class="font-bold text-sm md:text-base text-white"><?php echo htmlspecialchars($eventData['location']); ?></p>
                </div>
            </div>

            <!-- <div class="w-full md:w-auto border-t border-gray-800 md:border-l md:border-t-0 md:pl-6 pt-4 md:pt-0">
                <?php 
                    $googleUrl = "https://www.google.com/calendar/render?action=TEMPLATE" .
                        "&text=" . urlencode($eventData['title']) .
                        "&dates=20260606T160000Z/20260607T030000Z" . 
                        "&details=" . urlencode($eventData['description']) .
                        "&location=" . urlencode($eventData['location']);
                ?>
                <a href="<?php echo $googleUrl; ?>" target="_blank" class="flex items-center justify-center gap-2 bg-purple-600/20 hover:bg-purple-600/40 text-purple-300 text-[10px] font-bold py-2 px-4 rounded-lg border border-purple-500/30 transition-all active:scale-95">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    KALENDER IMPORT
                </a>
            </div> -->
        </div>
    </div>
</section>

<main class="bg-gray-950 text-gray-200 p-0 overflow-x-hidden"> 
    
    <div class="relative w-full h-[1px] block">
        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-fuchsia-500/80 to-transparent"></div>
        <div class="absolute inset-0 blur-[2px] bg-gradient-to-r from-transparent via-purple-600/40 to-transparent"></div>
    </div>

    <div class="max-w-6xl mx-auto px-4 space-y-16 md:space-y-28 py-12">
   
    <!-- Countdown -->
<!--

        <div id="countdown-container" class="grid grid-cols-2 md:flex md:flex-wrap items-center justify-center gap-3 md:gap-6 px-2">
            <div class="flex flex-col items-center bg-gray-900/80 backdrop-blur-md border border-purple-500/30 rounded-2xl p-4 shadow-[0_0_20px_rgba(168,85,247,0.1)]">
                <span id="days" class="text-3xl md:text-4xl font-black text-white">00</span>
                <span class="text-[10px] uppercase text-purple-400 font-bold tracking-widest mt-1">Tage</span>
            </div>
            <div class="flex flex-col items-center bg-gray-900/80 backdrop-blur-md border border-purple-500/30 rounded-2xl p-4 shadow-[0_0_20px_rgba(168,85,247,0.1)]">
                <span id="hours" class="text-3xl md:text-4xl font-black text-white">00</span>
                <span class="text-[10px] uppercase text-purple-400 font-bold tracking-widest mt-1">Std</span>
            </div>
            <div class="flex flex-col items-center bg-gray-900/80 backdrop-blur-md border border-purple-500/30 rounded-2xl p-4 shadow-[0_0_20px_rgba(168,85,247,0.1)]">
                <span id="minutes" class="text-3xl md:text-4xl font-black text-white">00</span>
                <span class="text-[10px] uppercase text-purple-400 font-bold tracking-widest mt-1">Min</span>
            </div>
            <div class="flex flex-col items-center bg-gray-900/80 backdrop-blur-md border border-purple-500/30 rounded-2xl p-4 shadow-[0_0_20px_rgba(168,85,247,0.1)]">
                <span id="seconds" class="text-3xl md:text-4xl font-black text-fuchsia-500">00</span>
                <span class="text-[10px] uppercase text-purple-400 font-bold tracking-widest mt-1">Sek</span>
            </div>
        </div>

-->

        <!-- Tickets -->
        <section id="tickets" class="scroll-mt-24">
            <div class="flex items-center gap-4 mb-12">
                <div class="h-px flex-1 bg-gradient-to-l from-purple-500 to-transparent opacity-50"></div>
                <h2 class="text-2xl md:text-4xl font-bold text-white uppercase tracking-wider px-2">Tickets</h2>
                <div class="h-px flex-1 bg-gradient-to-r from-purple-500 to-transparent opacity-50"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8 max-w-5xl mx-auto">
                <?php foreach ($eventData['tickets'] as $index => $ticket): ?>
                <?php 
                    $isAvailable = $ticket['status'] === 'Verfügbar'; 
                    $isUpcoming = $ticket['status'] === 'Noch nicht verfügbar';
                    $isSoldOut = $ticket['status'] === 'Ausverkauft';
                    $isMiddle = $index === 1;

                    $cardClasses = "relative bg-gray-900/50 backdrop-blur-sm rounded-2xl p-8 border flex flex-col items-center text-center transition-all duration-300 ";
                    if ($isSoldOut) $cardClasses .= "border-gray-800 opacity-50 grayscale";
                    elseif ($isUpcoming) $cardClasses .= "border-dashed border-gray-700 opacity-80";
                    elseif ($isMiddle) $cardClasses .= "border-purple-500 shadow-[0_0_30px_rgba(168,85,247,0.2)] md:scale-105 z-10 bg-gray-900";
                    else $cardClasses .= "border-gray-800 hover:border-purple-500/40";
                ?>
                <div class="<?php echo $cardClasses; ?>">
                    <?php if ($isMiddle && $isAvailable): ?>
                        <div class="absolute -top-4 bg-purple-600 text-white text-[10px] font-bold px-4 py-1 rounded-full uppercase tracking-widest shadow-lg">Bestseller</div>
                    <?php endif; ?>
                    <h3 class="text-lg font-medium mb-2 text-gray-400"><?php echo htmlspecialchars($ticket['tier']); ?></h3>
                    <div class="text-5xl font-black mb-8 text-white"><?php echo htmlspecialchars($ticket['price']); ?></div>
                    <button class="w-full py-4 rounded-xl font-bold transition-all <?php echo $isAvailable ? 'bg-purple-600 hover:bg-purple-500 text-white shadow-lg' : 'bg-gray-800 text-gray-500 cursor-not-allowed'; ?>">
                        <?php echo $isAvailable ? 'Ticket kaufen' : $ticket['status']; ?>
                    </button>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
<!-- Line-Up -->
        <section id="lineup" class="scroll-mt-24 pb-12">
            <div class="flex items-center gap-4 mb-10">
                <h2 class="text-2xl md:text-4xl font-bold text-white uppercase tracking-wider">Line-Up</h2>
                <div class="h-px flex-1 bg-gradient-to-r from-purple-500 to-transparent"></div>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">
                <?php foreach ($eventData['lineup'] as $artist): ?>
                <div class="group relative bg-gray-900/50 backdrop-blur-sm border border-gray-800 hover:border-purple-500/50 rounded-2xl p-6 md:p-7 transition-all duration-300 hover:-translate-y-2 overflow-hidden hover:shadow-[0_10px_40px_rgba(168,85,247,0.2)]">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-purple-600 to-fuchsia-500 transform origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></div>
                    
                    <p class="text-purple-400 font-mono text-xs md:text-sm mb-1.5 group-hover:text-fuchsia-400 transition-colors"><?php echo htmlspecialchars($artist['time']); ?></p>
                    <h3 class="text-xl md:text-2xl font-bold text-white mb-1 uppercase group-hover:tracking-wider transition-all duration-300"><?php echo htmlspecialchars($artist['name']); ?></h3>
                    <p class="text-gray-500 group-hover:text-gray-300 text-[11px] md:text-xs tracking-widest uppercase transition-colors"><?php echo htmlspecialchars($artist['genre']); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
<!-- FAQ -->
        <section id="faq" class="scroll-mt-24 max-w-3xl mx-auto pb-20">
            <div class="flex items-center gap-4 mb-10">
                <h2 class="text-2xl md:text-4xl font-bold text-white uppercase tracking-wider">FAQ</h2>
                <div class="h-px flex-1 bg-gradient-to-r from-purple-500 to-transparent"></div>
            </div>

            <div class="space-y-4">
                <?php foreach ($eventData['faqs'] as $faq): ?>
                <div class="bg-gray-900/50 border border-gray-800 rounded-xl overflow-hidden">
                    <button class="faq-button w-full flex items-center justify-between p-5 md:p-6 text-left">
                        <span class="font-medium text-gray-200"><?php echo htmlspecialchars($faq['question']); ?></span>
                        <svg class="faq-icon w-5 h-5 text-purple-500 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 text-gray-400 text-sm leading-relaxed">
                        <?php echo htmlspecialchars($faq['answer']); ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

    </div>
</main>
<!-- Tickets -->
<div class="fixed bottom-0 left-0 w-full p-4 z-50 md:hidden bg-gradient-to-t from-gray-950 via-gray-950/90 to-transparent">
    <a href="#tickets" class="block w-full bg-purple-600 text-white text-center py-4 rounded-2xl font-black tracking-widest shadow-[0_-5px_25px_rgba(168,85,247,0.4)] active:scale-95 transition-all uppercase">
        Ticket sichern
    </a>
</div>

<script>
// FAQ & Accordion Logik (Auto-Close)
document.addEventListener('DOMContentLoaded', () => {
    const setupAccordion = (buttonClass, contentClass, iconClass) => {
        const buttons = document.querySelectorAll(buttonClass);
        
        buttons.forEach(button => {
            button.addEventListener('click', () => {
                const item = button.parentElement;
                const content = item.querySelector(contentClass);
                const icon = button.querySelector(iconClass);
                const isOpen = !content.classList.contains('hidden');

                // Alle anderen in der Gruppe schließen
                document.querySelectorAll(contentClass).forEach(c => {
                    if (c !== content) {
                        c.classList.add('hidden');
                        const otherIcon = c.parentElement.querySelector(iconClass);
                        if (otherIcon) otherIcon.style.transform = 'rotate(0deg)';
                        c.parentElement.classList.remove('border-purple-500/50', 'shadow-[0_0_15px_rgba(168,85,247,0.1)]');
                    }
                });

                // Den geklickten Kasten umschalten
                if (!isOpen) {
                    content.classList.remove('hidden');
                    if (icon) icon.style.transform = 'rotate(180deg)';
                    item.classList.add('border-purple-500/50', 'shadow-[0_0_15px_rgba(168,85,247,0.1)]');
                } else {
                    content.classList.add('hidden');
                    if (icon) icon.style.transform = 'rotate(0deg)';
                    item.classList.remove('border-purple-500/50', 'shadow-[0_0_15px_rgba(168,85,247,0.1)]');
                }
            });
        });
    };

    // FAQ Initialisierung
    setupAccordion('.faq-button', '.faq-content', '.faq-icon');
});

// Countdown Timer Logik
document.addEventListener('DOMContentLoaded', function() {
    const countDownDate = new Date("June 6, 2026 18:00:00").getTime();
    const x = setInterval(function() {
        const now = new Date().getTime();
        const distance = countDownDate - now;

        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        if(document.getElementById("days")) {
            document.getElementById("days").innerHTML = days;
            document.getElementById("hours").innerHTML = hours < 10 ? "0" + hours : hours;
            document.getElementById("minutes").innerHTML = minutes < 10 ? "0" + minutes : minutes;
            document.getElementById("seconds").innerHTML = seconds < 10 ? "0" + seconds : seconds;
        }

        if (distance < 0) {
            clearInterval(x);
            if(document.getElementById("countdown-container")) {
                document.getElementById("countdown-container").innerHTML = "<div class='text-xl font-black text-fuchsia-500 uppercase animate-pulse'>Live Now!</div>";
            }
        }
    }, 1000);
});
</script>

                <!-- Sponsoring -->
<section id="foerderung" class="scroll-mt-24 pb-24 px-4 md:px-0">
            <div class="flex items-center gap-4 mb-10 md:mx-[10rem]">
                <h2 class="text-2xl md:text-4xl font-bold text-white uppercase tracking-wider shrink-0">Förderung</h2>
                <div class="h-px flex-1 bg-gradient-to-r from-purple-500 to-transparent"></div>
            </div>

            <div class="md:mx-[10rem]">
                <div class="bg-gray-900/50 backdrop-blur-sm border border-gray-800 rounded-2xl p-6 md:p-12 transition-all duration-300 hover:border-purple-500/30">
                    
                    <div class="flex flex-col items-center text-center space-y-8 md:space-y-10">
                        
                        <div class="max-w-2xl">
                            <span class="inline-block px-3 py-1 rounded-full border border-purple-500/30 bg-purple-500/10 text-purple-400 text-[9px] font-black uppercase tracking-[0.3em] mb-4">
                                Projektunterstützung
                            </span>
                            <p class="text-[11px] md:text-sm text-gray-400 leading-relaxed italic px-2">
                                Dieses Projekt ist Teil des Programms <span class="text-white font-bold">„Kultur.verbindet“</span> 
                                im Förderprogramm <span class="text-white font-bold">Aller.Land – zusammen gestalten. Strukturen stärken.</span> 
                                Gefördert durch den <span class="text-fuchsia-500 font-bold">Landkreis Rottweil</span> und die <span class="text-white font-bold">OEW</span>.
                            </p>
                        </div>

                        <div class="w-full pt-8 border-t border-white/5 flex flex-wrap items-center justify-center gap-8 md:gap-16 opacity-100">
                            <div class="h-10 md:h-16 transition-all duration-500">
                                <img src="assets\img\Förderungen\FörderungBP2026\240626_Logo kultur_verbindet.png" alt="Aller.Land" class="h-full w-auto object-contain">
                            </div>
                            
                            <div class="h-10 md:h-16 transition-all duration-500">
                                <img src="assets\img\Förderungen\FörderungBP2026\BAKV_AllerLand_Logo_Orange_RGB_Voll_mitClaim_V1.png" alt="Kultur.verbindet" class="h-full w-auto object-contain">
                            </div>

                            <div class="h-8 md:h-12 transition-all duration-500">
                            <img src="assets\img\Förderungen\FörderungBP2026\OEWLOGO.png" alt="OEW" class="h-full w-auto object-contain">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
<?php include 'footer.php'; ?>