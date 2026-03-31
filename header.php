<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neo Festivals</title>
    <link rel="stylesheet" href="css\styles.css">
    	<link rel="icon" href="assets\img\LogoNeoFestivals\favicon.png" type="image/png">

        

    
    <!-- Tailwind CSS über CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <style>
        /* Eigene CSS Animation für den Sponsoren-Slider */
        @keyframes marquee {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        .animate-marquee {
            display: flex;
            width: max-content;
            animation: marquee 30s linear infinite;
        }
        .animate-marquee:hover {
            animation-play-state: paused;
        }
    </style>
    
    
    
    <!-- WICHTIG/ TEILEN ANSICHT -->
    
    <meta name="description" content="NeoFestivals - Wir kreieren unvergessliche Festival-Momente in der Region.">
<meta property="og:title" content="NeoFestivals | We create Partys">
<meta property="og:image" content="./img/blockparty logo.png">



</head>
<body class="min-h-screen bg-zinc-950 text-zinc-50 flex flex-col font-sans selection:bg-fuchsia-500 selection:text-white">

    <!-- Header -->
    <header class="sticky top-0 z-50 w-full bg-white border-b border-zinc-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            <a href="index.php" class="flex-shrink-0 flex items-center gap-2">
                <!-- Pfad zu deinem Logo -->
                <img src="assets\img\NeoFestivals Logo\NeoFestival Logo Schwarz.png" alt="NeoFestivals" class="h-10 w-auto object-contain" />
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center gap-8">
                <a href="index.php" class="text-sm font-semibold tracking-wide text-zinc-600 hover:text-fuchsia-600 transition-colors">Startseite</a>
                <a href="events.php" class="text-sm font-semibold tracking-wide text-zinc-600 hover:text-fuchsia-600 transition-colors">Events</a>
                <a href="about.php" class="text-sm font-semibold tracking-wide text-zinc-600 hover:text-fuchsia-600 transition-colors">Über Uns</a>
                <a href="contact.php" class="text-sm font-semibold tracking-wide text-zinc-600 hover:text-fuchsia-600 transition-colors">Kontakt</a>
                
                <a href="Blockparty2026.php" class="bg-fuchsia-600 hover:bg-fuchsia-700 text-white px-5 py-2.5 rounded-full text-sm font-bold transition-all hover:scale-105 shadow-[0_0_15px_rgba(192,38,211,0.5)] flex items-center gap-2">
                    Tickets Sichern <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
            </nav>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="md:hidden p-2 text-zinc-600 hover:text-fuchsia-600 transition-colors ">
                <i data-lucide="menu" class="w-6 h-6"></i>
            </button>
        </div>





        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="hidden absolute top-20 left-0 w-full bg-white border-b border-zinc-200 shadow-xl py-4 flex flex-col">
            <a href="index.php" class="px-6 py-4 text-lg font-medium text-zinc-600 hover:bg-zinc-50 hover:text-fuchsia-600 border-l-4 border-transparent hover:border-fuchsia-600">Startseite</a>
            <a href="events.php" class="px-6 py-4 text-lg font-medium text-zinc-600 hover:bg-zinc-50 hover:text-fuchsia-600 border-l-4 border-transparent hover:border-fuchsia-600">Events</a>
            <a href="about.php" class="px-6 py-4 text-lg font-medium text-zinc-600 hover:bg-zinc-50 hover:text-fuchsia-600 border-l-4 border-transparent hover:border-fuchsia-600">Über Uns</a>
            <a href="contact.php" class="px-6 py-4 text-lg font-medium text-zinc-600 hover:bg-zinc-50 hover:text-fuchsia-600 border-l-4 border-transparent hover:border-fuchsia-600">Kontakt</a>
        </div>
    </header>

    <main class="flex-grow flex flex-col"></main>