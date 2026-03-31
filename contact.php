<?php include 'header.php'; ?>

<div class="w-full flex-1 bg-zinc-950 pt-20 pb-32 min-h-screen relative overflow-hidden">
    <!-- Background elements -->
    <div class="absolute top-[-20%] right-[-10%] w-[800px] h-[800px] bg-fuchsia-900/20 blur-[150px] rounded-full mix-blend-screen pointer-events-none"></div>
    <div class="absolute bottom-[-10%] left-[-20%] w-[600px] h-[600px] bg-purple-900/20 blur-[120px] rounded-full mix-blend-screen pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 relative z-10 fade-in-up">
        <div class="text-center mb-16">
            <h1 class="text-5xl md:text-7xl font-black text-white uppercase tracking-tighter mb-6">
                Get In <span class="text-transparent bg-clip-text bg-gradient-to-r from-fuchsia-500 to-purple-500">Touch</span>
            </h1>
            <p class="text-xl text-zinc-400 max-w-2xl mx-auto font-light">
                Bereit für dein nächstes Event? Oder willst du Teil der Neo Family werden? Schreib uns!
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-5xl mx-auto">
            <!-- Contact Info -->
            <div class="bg-zinc-900 p-10 md:p-12 rounded-3xl border border-zinc-800 flex flex-col justify-between h-full fade-in-up">
                <div>
                    <h2 class="text-3xl font-black text-white uppercase mb-8 pb-8 border-b border-zinc-800">
                        Let's Make <br />
                        <span class="text-fuchsia-500">Noise</span>
                    </h2>
                    
                    <div class="space-y-8">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-zinc-800 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i data-lucide="map-pin" class="text-fuchsia-400 w-6 h-6"></i>
                            </div>
                            <div>
                                <h4 class="text-white font-bold mb-1">Sitz</h4>
                                <p class="text-zinc-400 font-light leading-relaxed">NeoFestivals Gbr<br />Wolfsgasse 8/1 <br />78736 Epfendorf</p>
                            </div>
                        </div>

<div class="flex items-start gap-4">
    <div class="w-12 h-12 bg-zinc-800 rounded-xl flex items-center justify-center flex-shrink-0">
        <i data-lucide="mail" class="text-pink-400 w-6 h-6"></i>
    </div>
    <div>
        <h4 class="text-white font-bold mb-1">Email</h4>
        <a href="mailto:nico.volz@neofestivals.de?subject=Anfrage%20via%20Website"
           class="text-zinc-400 font-light hover:text-white transition-colors cursor-pointer block">
           nico.volz@neofestivals.de
        </a>
    </div>
</div>

<div class="flex items-start gap-4 mt-6"> <div class="w-12 h-12 bg-zinc-800 rounded-xl flex items-center justify-center flex-shrink-0">
        <i data-lucide="phone" class="text-pink-400 w-6 h-6"></i>
    </div>
    <div>
        <h4 class="text-white font-bold mb-1">Hotline</h4>
        <a href="tel:+49" 
           class="text-zinc-400 font-light hover:text-white transition-colors cursor-pointer block">
           +49
        </a>
    </div>
</div>
                    </div>
                </div>
            </div>

            <!-- Form Side -->
            <div class="bg-zinc-900 p-10 md:p-12 rounded-3xl border border-zinc-800 shadow-[0_0_50px_rgba(192,38,211,0.05)] fade-in-up">
                <h3 class="text-2xl font-bold text-white mb-8">Drop a message</h3>
                
                <?php if (isset($_GET['status'])): ?>
    <div class="mb-8 p-4 rounded-xl border flex items-center gap-3 fade-in-up">
        <?php if ($_GET['status'] == 'success'): ?>
            <div class="bg-green-500/10 border-green-500/50 text-green-500 w-full p-4 rounded-xl flex items-center gap-3">
                <i data-lucide="check-circle" class="w-6 h-6"></i>
                <p class="font-bold">Deine Nachricht wurde gesendet! Wir melden uns bei dir.</p>
            </div>
        <?php elseif ($_GET['status'] == 'error' || $_GET['status'] == 'server_error'): ?>
            <div class="bg-red-500/10 border-red-500/50 text-red-500 w-full p-4 rounded-xl flex items-center gap-3">
                <i data-lucide="alert-circle" class="w-6 h-6"></i>
                <p class="font-bold">Hoppla! Da lief was schief. Bitte versuch es nochmal.</p>
            </div>
        <?php endif; ?>
    </div>
<?php endif; ?>

                <form action="send_mail.php" method="POST" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label for="firstName" class="text-sm font-bold text-zinc-400 uppercase tracking-widest">Vorname</label>
                            <input type="text" id="firstName" name="firstName" class="w-full bg-zinc-950 border border-zinc-800 text-white rounded-xl px-4 py-3 focus:outline-none focus:border-fuchsia-500 focus:ring-1 focus:ring-fuchsia-500 transition-all placeholder:text-zinc-600" placeholder="Dein Vorname" required>
                        </div>
                        <div class="space-y-2">
                            <label for="lastName" class="text-sm font-bold text-zinc-400 uppercase tracking-widest">Nachname</label>
                            <input type="text" id="lastName" name="lastName" class="w-full bg-zinc-950 border border-zinc-800 text-white rounded-xl px-4 py-3 focus:outline-none focus:border-fuchsia-500 focus:ring-1 focus:ring-fuchsia-500 transition-all placeholder:text-zinc-600" placeholder="Dein Nachname" required>
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label for="email" class="text-sm font-bold text-zinc-400 uppercase tracking-widest">Email</label>
                        <input type="email" id="email" name="email" class="w-full bg-zinc-950 border border-zinc-800 text-white rounded-xl px-4 py-3 focus:outline-none focus:border-fuchsia-500 focus:ring-1 focus:ring-fuchsia-500 transition-all placeholder:text-zinc-600" placeholder="name@example.com" required>
                    </div>

                    <div class="space-y-2">
                        <label for="subject" class="text-sm font-bold text-zinc-400 uppercase tracking-widest">Thema</label>
                        <select id="subject" name="subject" class="w-full bg-zinc-950 border border-zinc-800 text-zinc-400 rounded-xl px-4 py-3 focus:outline-none focus:border-fuchsia-500 focus:ring-1 focus:ring-fuchsia-500 transition-all appearance-none" required>
                            <option value="">Wähle ein Thema</option>
                            <option value="tickets">Ticket-Support</option>
                            <option value="booking">Booking / DJ Anfrage</option>
                            <option value="press">Presse & Medien</option>
                        </select>
                    </div>

                    <div class="space-y-2">
                        <label for="message" class="text-sm font-bold text-zinc-400 uppercase tracking-widest">Nachricht</label>
                        <textarea id="message" name="message" rows="4" class="w-full bg-zinc-950 border border-zinc-800 text-white rounded-xl px-4 py-3 focus:outline-none focus:border-fuchsia-500 focus:ring-1 focus:ring-fuchsia-500 transition-all placeholder:text-zinc-600 resize-none" placeholder="Was gibt's?" required></textarea>
                    </div>

                    <button type="submit" class="w-full bg-fuchsia-600 hover:bg-fuchsia-500 text-white py-4 rounded-xl font-bold uppercase tracking-widest transition-all hover:scale-[1.02] shadow-[0_0_20px_rgba(192,38,211,0.3)] flex items-center justify-center gap-2">
                        Absenden <i data-lucide="send" class="w-5 h-5"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>