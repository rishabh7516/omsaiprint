@extends('layouts.app')

@section('content')

<!-- 1. Hero Section -->
<section class="bg-navy text-white py-20 px-6">
    <div class="max-w-7xl mx-auto">
        <span class="text-xs uppercase tracking-widest text-brandOrange font-bold block mb-3">
            CAPABILITIES • THE MACHINE[cite: 29]
        </span>
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight leading-tight mb-6 max-w-4xl">
            One automatic line. Five precision stages.[cite: 29]
        </h1>
        <p class="text-base sm:text-lg text-slate-300 max-w-2xl leading-relaxed">
            Our fully automatic Techno Robotics silk-screen line takes a bare bottle from feeding to ship-ready in a single, uninterrupted flow — engineered for high volume and low rejects[cite: 29].
        </p>
    </div>
</section>

<!-- 2. 5-Stage Process Cards Section (Interactive Hover State) -->
<section class="py-20 bg-pageBg px-6" x-data="{ activeCard: 2 }">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-0 rounded-3xl overflow-hidden border border-slate-200/80 bg-white shadow-sm">
            
            <!-- Stage 01 -->
            <div @mouseenter="activeCard = 1" 
                 :class="activeCard === 1 ? 'bg-navy text-white shadow-lg z-10' : 'bg-white text-slate-700 hover:bg-slate-50'"
                 class="p-8 border-b md:border-b-0 md:border-r border-slate-200/80 transition-all duration-300 cursor-pointer">
                <div class="flex justify-between items-center mb-6">
                    <span class="text-3xl font-extrabold" :class="activeCard === 1 ? 'text-brandOrange' : 'text-slate-300'">01</span>
                    <div class="text-brandOrange transform transition-transform duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    </div>
                </div>
                <h3 class="font-bold text-lg mb-3" :class="activeCard === 1 ? 'text-white' : 'text-navy'">Auto-Loading[cite: 30]</h3>
                <p class="text-xs leading-relaxed mb-6" :class="activeCard === 1 ? 'text-slate-300' : 'text-slate-500'">
                    Bottles are fed and oriented automatically for continuous, high-throughput production[cite: 30].
                </p>
                <ul class="space-y-2 text-xs font-medium" :class="activeCard === 1 ? 'text-slate-300' : 'text-slate-600'">
                    <li class="flex items-center space-x-2"><span class="text-brandOrange">✓</span><span>Hands-free feeding[cite: 30]</span></li>
                    <li class="flex items-center space-x-2"><span class="text-brandOrange">✓</span><span>Consistent orientation[cite: 30]</span></li>
                    <li class="flex items-center space-x-2"><span class="text-brandOrange">✓</span><span>High-volume ready[cite: 30]</span></li>
                </ul>
            </div>

            <!-- Stage 02 -->
            <div @mouseenter="activeCard = 2" 
                 :class="activeCard === 2 ? 'bg-navy text-white shadow-lg z-10' : 'bg-white text-slate-700 hover:bg-slate-50'"
                 class="p-8 border-b md:border-b-0 md:border-r border-slate-200/80 transition-all duration-300 cursor-pointer">
                <div class="flex justify-between items-center mb-6">
                    <span class="text-3xl font-extrabold" :class="activeCard === 2 ? 'text-brandOrange' : 'text-slate-300'">02</span>
                    <div class="text-brandOrange transform transition-transform duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"></path></svg>
                    </div>
                </div>
                <h3 class="font-bold text-lg mb-3" :class="activeCard === 2 ? 'text-white' : 'text-navy'">Online Flame Treatment[cite: 30]</h3>
                <p class="text-xs leading-relaxed mb-6" :class="activeCard === 2 ? 'text-slate-300' : 'text-slate-500'">
                    In-line flame treatment raises surface energy so ink bonds permanently to plastic[cite: 30].
                </p>
                <ul class="space-y-2 text-xs font-medium" :class="activeCard === 2 ? 'text-slate-300' : 'text-slate-600'">
                    <li class="flex items-center space-x-2"><span class="text-brandOrange">✓</span><span>Surface activation[cite: 30]</span></li>
                    <li class="flex items-center space-x-2"><span class="text-brandOrange">✓</span><span>Superior adhesion[cite: 30]</span></li>
                    <li class="flex items-center space-x-2"><span class="text-brandOrange">✓</span><span>Even pre-treatment[cite: 30]</span></li>
                </ul>
            </div>

            <!-- Stage 03 -->
            <div @mouseenter="activeCard = 3" 
                 :class="activeCard === 3 ? 'bg-navy text-white shadow-lg z-10' : 'bg-white text-slate-700 hover:bg-slate-50'"
                 class="p-8 border-b md:border-b-0 md:border-r border-slate-200/80 transition-all duration-300 cursor-pointer">
                <div class="flex justify-between items-center mb-6">
                    <span class="text-3xl font-extrabold" :class="activeCard === 3 ? 'text-brandOrange' : 'text-slate-300'">03</span>
                    <div class="text-brandOrange transform transition-transform duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path></svg>
                    </div>
                </div>
                <h3 class="font-bold text-lg mb-3" :class="activeCard === 3 ? 'text-white' : 'text-navy'">Multi-Colour Printing[cite: 30]</h3>
                <p class="text-xs leading-relaxed mb-6" :class="activeCard === 3 ? 'text-slate-300' : 'text-slate-500'">
                    Multiple synchronised stations print rich multi-colour artwork in perfect register[cite: 30].
                </p>
                <ul class="space-y-2 text-xs font-medium" :class="activeCard === 3 ? 'text-slate-300' : 'text-slate-600'">
                    <li class="flex items-center space-x-2"><span class="text-brandOrange">✓</span><span>Multi-station[cite: 30]</span></li>
                    <li class="flex items-center space-x-2"><span class="text-brandOrange">✓</span><span>Tight registration[cite: 30]</span></li>
                    <li class="flex items-center space-x-2"><span class="text-brandOrange">✓</span><span>Round / flat / oval[cite: 30]</span></li>
                </ul>
            </div>

            <!-- Stage 04 -->
            <div @mouseenter="activeCard = 4" 
                 :class="activeCard === 4 ? 'bg-navy text-white shadow-lg z-10' : 'bg-white text-slate-700 hover:bg-slate-50'"
                 class="p-8 border-b md:border-b-0 md:border-r border-slate-200/80 transition-all duration-300 cursor-pointer">
                <div class="flex justify-between items-center mb-6">
                    <span class="text-3xl font-extrabold" :class="activeCard === 4 ? 'text-brandOrange' : 'text-slate-300'">04</span>
                    <div class="text-brandOrange transform transition-transform duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    </div>
                </div>
                <h3 class="font-bold text-lg mb-3" :class="activeCard === 4 ? 'text-white' : 'text-navy'">IR + LED-UV Curing[cite: 30]</h3>
                <p class="text-xs leading-relaxed mb-6" :class="activeCard === 4 ? 'text-slate-300' : 'text-slate-500'">
                    Synchronised infra-red and LED-UV curing locks in colour instantly for a durable finish[cite: 30].
                </p>
                <ul class="space-y-2 text-xs font-medium" :class="activeCard === 4 ? 'text-slate-300' : 'text-slate-600'">
                    <li class="flex items-center space-x-2"><span class="text-brandOrange">✓</span><span>Instant cure[cite: 30]</span></li>
                    <li class="flex items-center space-x-2"><span class="text-brandOrange">✓</span><span>Scratch resistant[cite: 30]</span></li>
                    <li class="flex items-center space-x-2"><span class="text-brandOrange">✓</span><span>UV-durable[cite: 30]</span></li>
                </ul>
            </div>

            <!-- Stage 05 -->
            <div @mouseenter="activeCard = 5" 
                 :class="activeCard === 5 ? 'bg-navy text-white shadow-lg z-10' : 'bg-white text-slate-700 hover:bg-slate-50'"
                 class="p-8 transition-all duration-300 cursor-pointer">
                <div class="flex justify-between items-center mb-6">
                    <span class="text-3xl font-extrabold" :class="activeCard === 5 ? 'text-brandOrange' : 'text-slate-300'">05</span>
                    <div class="text-brandOrange transform transition-transform duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    </div>
                </div>
                <h3 class="font-bold text-lg mb-3" :class="activeCard === 5 ? 'text-white' : 'text-navy'">Inline Leak Testing[cite: 30]</h3>
                <p class="text-xs leading-relaxed mb-6" :class="activeCard === 5 ? 'text-slate-300' : 'text-slate-500'">
                    Every unit passes an inline leak check, ensuring only sound bottles leave the line[cite: 30].
                </p>
                <ul class="space-y-2 text-xs font-medium" :class="activeCard === 5 ? 'text-slate-300' : 'text-slate-600'">
                    <li class="flex items-center space-x-2"><span class="text-brandOrange">✓</span><span>100% inline check[cite: 30]</span></li>
                    <li class="flex items-center space-x-2"><span class="text-brandOrange">✓</span><span>Low rejects[cite: 30]</span></li>
                    <li class="flex items-center space-x-2"><span class="text-brandOrange">✓</span><span>Ship-ready quality[cite: 30]</span></li>
                </ul>
            </div>

        </div>
    </div>
</section>

<!-- 3. Specifications & Machine Split Section -->
<section class="py-20 bg-white px-6 border-t border-slate-200">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        
        <!-- Specs Grid (Left) with Hover States on Tiles -->
        <div class="lg:col-span-6">
            <span class="text-xs uppercase tracking-widest text-brandOrange font-bold block mb-2">SPECIFICATIONS[cite: 31]</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-navy mb-8">
                Engineered for repeatable results[cite: 31].
            </h2>

            <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden">
                <div class="grid grid-cols-1 sm:grid-cols-2 divide-y sm:divide-y-0 sm:divide-x border-b border-slate-200/80">
                    <div class="p-6 hover:bg-slate-50 transition-colors duration-200">
                        <span class="block font-bold text-navy text-xl mb-1">20 ml – 1 L[cite: 31]</span>
                        <span class="text-[11px] text-slate-400 font-bold uppercase tracking-wider">Bottle Capacity[cite: 31]</span>
                    </div>
                    <div class="p-6 hover:bg-slate-50 transition-colors duration-200">
                        <span class="block font-bold text-navy text-xl mb-1">Round • Flat • Oval[cite: 31]</span>
                        <span class="text-[11px] text-slate-400 font-bold uppercase tracking-wider">Supported Shapes[cite: 31]</span>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 divide-y sm:divide-y-0 sm:divide-x border-b border-slate-200/80">
                    <div class="p-6 hover:bg-slate-50 transition-colors duration-200">
                        <span class="block font-bold text-navy text-xl mb-1">Multi-station[cite: 31]</span>
                        <span class="text-[11px] text-slate-400 font-bold uppercase tracking-wider">Colour Printing[cite: 31]</span>
                    </div>
                    <div class="p-6 hover:bg-slate-50 transition-colors duration-200">
                        <span class="block font-bold text-navy text-xl mb-1">IR + LED-UV[cite: 31]</span>
                        <span class="text-[11px] text-slate-400 font-bold uppercase tracking-wider">Synchronised Curing[cite: 31]</span>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 divide-y sm:divide-y-0 sm:divide-x">
                    <div class="p-6 hover:bg-slate-50 transition-colors duration-200">
                        <span class="block font-bold text-navy text-xl mb-1">Online flame[cite: 31]</span>
                        <span class="text-[11px] text-slate-400 font-bold uppercase tracking-wider">Surface Treatment[cite: 31]</span>
                    </div>
                    <div class="p-6 hover:bg-slate-50 transition-colors duration-200">
                        <span class="block font-bold text-navy text-xl mb-1">100% inline[cite: 31]</span>
                        <span class="text-[11px] text-slate-400 font-bold uppercase tracking-wider">Leak Testing[cite: 31]</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Machine Image (Right) with Hover Zoom -->
        <div class="lg:col-span-6">
            <div class="rounded-3xl overflow-hidden bg-slate-100 border border-slate-200 shadow-md h-[420px] sm:h-[480px]">
                <img src="/images/the-machine.jpg" alt="Techno Robotics Printing Line" class="w-full h-full object-cover object-center hover:scale-105 transition-transform duration-700">
            </div>
        </div>

    </div>
</section>

<!-- 4. Quote Request Banner -->
<section id="quote" class="py-20 bg-navy text-white text-center px-6">
    <div class="max-w-3xl mx-auto">
        <span class="text-xs uppercase tracking-widest text-brandOrange font-bold">READY WHEN YOU ARE[cite: 32]</span>
        <h2 class="text-3xl lg:text-4xl font-extrabold mt-2 mb-3">
            Configure your bottle. <br><span class="text-brandOrange">Request a quote[cite: 32].</span>
        </h2>
        <p class="text-xs text-slate-300 mb-8">
            Tell us your shape, size, and colours — Ashok Singh will tailor a quote for your run[cite: 32].
        </p>

        <div class="flex justify-center space-x-4">
            <a href="#contact" class="bg-brandOrange hover:opacity-90 text-white px-6 py-3 rounded-full text-xs font-semibold transition flex items-center space-x-2 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                <span>Request a Quote[cite: 32]</span>
                <span>&rarr;</span>
            </a>
            <a href="https://wa.me/919823086791?text=Hi%20Om%20Sai%20Print%2C%20I%20would%20like%20a%20quote%20for%20bottle%20printing." target="_blank" class="bg-transparent hover:bg-white/10 text-white px-6 py-3 rounded-full text-xs font-semibold border border-slate-400 transition flex items-center space-x-2">
                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                <span>WhatsApp[cite: 32]</span>
            </a>
        </div>
    </div>
</section>

@endsection