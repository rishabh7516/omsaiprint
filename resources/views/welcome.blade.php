@extends('layouts.app')

@section('content')

<!-- Hero Section (Full-Bleed Background Image Layout) -->
<section id="home" class="relative min-h-[85vh] flex flex-col justify-between bg-navy text-white py-16 px-6 overflow-hidden">
    <!-- Background Machine Image with Dark Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="/images/hero-machine.jpg" alt="Om Sai Print Machine" class="w-full h-full object-cover object-center opacity-30">
        <div class="absolute inset-0 bg-gradient-to-r from-navy/95 via-navy/80 to-navy/40"></div>
    </div>

    <!-- Main Content Grid -->
    <div class="relative z-10 max-w-7xl mx-auto w-full my-auto py-8">
        <div class="max-w-3xl">
            <span class="text-xs sm:text-sm font-semibold tracking-widest text-brandOrange uppercase">
                ESTABLISHED 2002 • TECHNO ROBOTICS AUTOMATIC LINE
            </span>
            
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight mt-4 mb-6 leading-tight text-white">
                Fully automatic silk-screen printing on plastic bottles.
            </h1>
            
            <p class="text-base sm:text-lg text-slate-300 mb-8 max-w-2xl leading-relaxed">
                The printing partner for bottle manufacturers and brands — consistent multi-colour decoration, leak-tested quality, at high volume with low rejects.
            </p>
            
            <div class="flex flex-col sm:flex-row flex-wrap gap-4">
                <a href="#quote" class="bg-brandOrange hover:opacity-90 text-white px-6 py-3.5 rounded-full font-semibold text-sm transition shadow-lg flex items-center justify-center space-x-2">
                    <span>Configure Your Bottle & Request a Quote</span>
                    <span>&rarr;</span>
                </a>
                
                <a href="https://wa.me/919823086791?text=Hi%20Om%20Sai%20Print%2C%20I%20would%20like%20a%20quote%20for%20bottle%20printing." target="_blank" class="bg-slate-900/60 hover:bg-slate-800 text-white px-6 py-3.5 rounded-full font-semibold text-sm border border-slate-500/60 backdrop-blur-sm transition flex items-center justify-center space-x-2">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                    <span>WhatsApp</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Bottom Feature Badges -->
    <div class="relative z-10 max-w-7xl mx-auto w-full pt-8 border-t border-slate-700/50">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-slate-300">
            <div class="hover:translate-y-[-2px] transition duration-200">
                <span class="block font-bold text-white text-base sm:text-lg">20 ml – 1L</span>
                <span class="text-[11px] sm:text-xs text-slate-400 uppercase tracking-wider font-medium">Bottle Range</span>
            </div>
            <div class="hover:translate-y-[-2px] transition duration-200">
                <span class="block font-bold text-white text-base sm:text-lg">Round • Flat • Oval</span>
                <span class="text-[11px] sm:text-xs text-slate-400 uppercase tracking-wider font-medium">Shapes</span>
            </div>
            <div class="hover:translate-y-[-2px] transition duration-200">
                <span class="block font-bold text-white text-base sm:text-lg">IR + LED-UV Cured</span>
                <span class="text-[11px] sm:text-xs text-slate-400 uppercase tracking-wider font-medium">Print Finish</span>
            </div>
            <div class="hover:translate-y-[-2px] transition duration-200">
                <span class="block font-bold text-white text-base sm:text-lg">100% Inline</span>
                <span class="text-[11px] sm:text-xs text-slate-400 uppercase tracking-wider font-medium">Leak Tested</span>
            </div>
        </div>
    </div>
</section>

<!-- Brand Trust Marquee (Seamless Infinite Loop) -->
<section class="py-12 bg-white border-b border-slate-200 overflow-hidden">
    <p class="text-center text-[11px] uppercase tracking-widest text-slate-400 font-bold mb-6">TRUSTED BY MANUFACTURERS & BRANDS</p>
    <div class="relative w-full overflow-hidden flex">
        <div class="flex space-x-12 animate-marquee whitespace-nowrap text-slate-300 font-extrabold text-2xl tracking-wider uppercase select-none shrink-0">
            <span>PIDILITE •</span>
            <span>GARNIER •</span>
            <span>HYPHEN •</span>
            <span>JSW •</span>
            <span>BIOTIQUE •</span>
            <span>MYSORE SANDAL •</span>
            <span>NIHAR NATURALS •</span>
            <span>RADISSON •</span>
            <span>PARAGON •</span>
            <span>FIX MY CURLS •</span>
            <span>PIDILITE •</span>
            <span>GARNIER •</span>
            <span>HYPHEN •</span>
            <span>JSW •</span>
            <span>BIOTIQUE •</span>
            <span>MYSORE SANDAL •</span>
            <span>NIHAR NATURALS •</span>
            <span>RADISSON •</span>
            <span>PARAGON •</span>
            <span>FIX MY CURLS •</span>
            <span>PIDILITE •</span>
            <span>GARNIER •</span>
            <span>HYPHEN •</span>
            <span>JSW •</span>
            <span>BIOTIQUE •</span>
            <span>MYSORE SANDAL •</span>
            <span>NIHAR NATURALS •</span>
            <span>RADISSON •</span>
            <span>PARAGON •</span>
            <span>FIX MY CURLS •</span>
        </div>
    </div>
</section>

<!-- Why Om Sai Print / Feature Cards Section (With Hover Effects) -->
<section class="py-20 bg-pageBg px-6">
    <div class="max-w-7xl mx-auto">
        <span class="text-xs uppercase tracking-widest text-brandOrange font-bold">WHY OM SAI PRINT</span>
        <h2 class="text-3xl lg:text-4xl font-extrabold text-navy mt-1 mb-12">Built for consistency at volume.</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div class="bg-white p-8 rounded-2xl border border-slate-200/80 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 group">
                <div class="w-12 h-12 rounded-xl bg-slate-100 group-hover:bg-brandOrange group-hover:text-white flex items-center justify-center text-navy mb-6 transition-colors duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                </div>
                <h3 class="font-bold text-navy text-lg mb-3">Multi-Colour Registration</h3>
                <p class="text-sm text-slate-500 leading-relaxed">Synchronised print heads lay down crisp multi-colour artwork with tight registration on every bottle.</p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white p-8 rounded-2xl border border-slate-200/80 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 group">
                <div class="w-12 h-12 rounded-xl bg-slate-100 group-hover:bg-brandOrange group-hover:text-white flex items-center justify-center text-navy mb-6 transition-colors duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
                <h3 class="font-bold text-navy text-lg mb-3">Leak-Tested Quality</h3>
                <p class="text-sm text-slate-500 leading-relaxed">Inline leak testing removes defects before they ship — high volume, consistently low rejects.</p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white p-8 rounded-2xl border border-slate-200/80 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 group">
                <div class="w-12 h-12 rounded-xl bg-slate-100 group-hover:bg-brandOrange group-hover:text-white flex items-center justify-center text-navy mb-6 transition-colors duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="font-bold text-navy text-lg mb-3">Fully Automatic Line</h3>
                <p class="text-sm text-slate-500 leading-relaxed">Auto-loading Techno Robotics line runs at scale with repeatable, operator-independent results.</p>
            </div>
        </div>
    </div>
</section>

<!-- The Machine Section (With Image & Badge Hover Effects) -->
<section id="machine" class="py-24 bg-white px-6 border-t border-slate-200">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
        
        <!-- Left Image Container with Hover zoom & badge lift -->
        <div class="lg:col-span-5 relative group">
            <div class="relative rounded-3xl overflow-hidden bg-slate-100 border border-slate-200/80 shadow-md h-[520px] sm:h-[580px] w-full flex items-center justify-center text-slate-400">
                <img src="/images/the-machine.jpg" alt="Techno Robotics Line" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700">
            </div>

            <!-- Overlapping Navy Badge "05" -->
            <div class="absolute -bottom-6 left-12 sm:left-16 z-10 bg-navy text-white px-6 py-4 rounded-2xl shadow-xl border border-slate-700/50 max-w-[210px] group-hover:translate-y-[-4px] transition-transform duration-300">
                <span class="text-3xl font-extrabold text-brandOrange block leading-none mb-1">05</span>
                <span class="text-[11px] text-slate-300 font-medium leading-tight block">precision stages, one automatic line</span>
            </div>
        </div>

        <!-- Right Copy Content -->
        <div class="lg:col-span-7 lg:pl-6 pt-4 lg:pt-0">
            <span class="text-xs uppercase tracking-widest text-brandOrange font-bold block mb-3">THE MACHINE</span>
            
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-navy tracking-tight leading-tight mb-6">
                Auto-load to leak-test, without a break.
            </h2>
            
            <p class="text-slate-500 text-base sm:text-lg leading-relaxed mb-8 max-w-2xl">
                Our Techno Robotics line auto-loads bottles, activates the surface with online flame treatment, prints multi-colour artwork in register, cures instantly with synchronised IR + LED-UV, then leak-tests every unit inline.
            </p>
            
            <a href="#quote" class="inline-flex items-center text-xs sm:text-sm font-bold text-navy border border-slate-300 rounded-full px-7 py-3 hover:bg-navy hover:text-white hover:border-navy transition-all duration-300 shadow-sm space-x-2">
                <span>Explore the process</span>
                <span class="text-base">&nearr;</span>
            </a>
        </div>

    </div>
</section>

<!-- Industries Served (With Card Hover Effects) -->
<section id="industries" class="py-20 bg-pageBg px-6 border-t border-slate-200">
    <div class="max-w-7xl mx-auto">
        <div class="flex justify-between items-end mb-10">
            <div>
                <span class="text-xs uppercase tracking-widest text-brandOrange font-bold">INDUSTRIES SERVED</span>
                <h2 class="text-3xl font-extrabold text-navy mt-1">Decorating bottles across sectors.</h2>
            </div>
            <a href="#gallery" class="hidden md:inline-flex items-center text-xs font-bold text-navy hover:text-brandOrange transition">
                View all industries &rarr;
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                <div class="text-brandOrange mb-3 text-lg">✨</div>
                <h3 class="font-bold text-navy text-base mb-2">Cosmetics & Personal Care</h3>
                <p class="text-xs text-slate-500 leading-relaxed">Premium multi-colour decoration for shampoo, lotion, serum and beauty bottles that must look flawless on shelf.</p>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                <div class="text-brandOrange mb-3 text-lg">✚</div>
                <h3 class="font-bold text-navy text-base mb-2">Pharma & Feeding Bottles</h3>
                <p class="text-xs text-slate-500 leading-relaxed">Precise, durable printing and graduation marks for pharmaceutical and baby feeding bottles.</p>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                <div class="text-brandOrange mb-3 text-lg">🍃</div>
                <h3 class="font-bold text-navy text-base mb-2">Agrochemical</h3>
                <p class="text-xs text-slate-500 leading-relaxed">Rugged, chemical-resistant print with clear dosing and safety information for agro packaging.</p>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                <div class="text-brandOrange mb-3 text-lg">🥛</div>
                <h3 class="font-bold text-navy text-base mb-2">Adhesives & Silicone</h3>
                <p class="text-xs text-slate-500 leading-relaxed">High-adhesion decoration for adhesive, sealant and silicone containers that endure handling.</p>
            </div>
        </div>
    </div>
</section>

<!-- Quote Section Banner -->
<section id="quote" class="py-20 bg-navy text-white text-center px-6">
    <div class="max-w-3xl mx-auto">
        <span class="text-xs uppercase tracking-widest text-brandOrange font-bold">READY WHEN YOU ARE</span>
        <h2 class="text-3xl lg:text-4xl font-extrabold mt-2 mb-3">Configure your bottle. <br><span class="text-brandOrange">Request a quote.</span></h2>
        <p class="text-xs text-slate-300 mb-8">Tell us your shape, size, and colours — Ashok Singh will tailor a quote for your run.</p>

        <div class="flex justify-center space-x-4">
            <a href="#contact" class="bg-brandOrange hover:opacity-90 text-white px-6 py-3 rounded-full text-xs font-semibold transition flex items-center space-x-2 shadow-md">
                <span>Request a Quote</span>
                <span>&rarr;</span>
            </a>
            <a href="https://wa.me/919823086791" target="_blank" class="bg-transparent hover:bg-white/10 text-white px-6 py-3 rounded-full text-xs font-semibold border border-slate-400 transition flex items-center space-x-2">
                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                <span>WhatsApp</span>
            </a>
        </div>
    </div>
</section>

@endsection