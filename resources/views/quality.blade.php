@extends('layouts.app')

@section('content')

<!-- 1. Hero Section -->
<section class="bg-navy text-white py-20 px-6">
    <div class="max-w-7xl mx-auto">
        <span class="text-xs uppercase tracking-widest text-brandOrange font-bold block mb-3">
            QUALITY & PROCESS
        </span>
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight leading-tight mb-6 max-w-4xl">
            Quality engineered into every stage.
        </h1>
        <p class="text-base sm:text-lg text-slate-300 max-w-2xl leading-relaxed">
            We don't inspect quality in at the end — it's built into every step, from surface activation to inline leak testing, so what leaves the line is consistent and shelf-ready.
        </p>
    </div>
</section>

<!-- 2. Quality Cards Grid Section -->
<section class="py-20 bg-pageBg px-6">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Card 01: Flame Adhesion -->
            <div class="bg-white p-8 rounded-3xl border border-slate-200/80 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 group">
                <div class="flex items-center space-x-4 mb-6">
                    <div class="w-12 h-12 rounded-2xl bg-navy text-white flex items-center justify-center font-bold group-hover:bg-brandOrange transition-colors duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"></path></svg>
                    </div>
                    <span class="text-2xl font-extrabold text-navy">01</span>
                </div>
                <h3 class="font-bold text-navy text-xl mb-3">Flame Adhesion</h3>
                <p class="text-sm text-slate-500 leading-relaxed">
                    Online flame treatment guarantees ink bonds that survive handling, filling and transport.
                </p>
            </div>

            <!-- Card 02: Print Registration -->
            <div class="bg-white p-8 rounded-3xl border border-slate-200/80 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 group">
                <div class="flex items-center space-x-4 mb-6">
                    <div class="w-12 h-12 rounded-2xl bg-navy text-white flex items-center justify-center font-bold group-hover:bg-brandOrange transition-colors duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                    </div>
                    <span class="text-2xl font-extrabold text-navy">02</span>
                </div>
                <h3 class="font-bold text-navy text-xl mb-3">Print Registration</h3>
                <p class="text-sm text-slate-500 leading-relaxed">
                    Synchronised stations hold tight registration so multi-colour artwork lines up perfectly.
                </p>
            </div>

            <!-- Card 03: UV Durability -->
            <div class="bg-white p-8 rounded-3xl border border-slate-200/80 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 group">
                <div class="flex items-center space-x-4 mb-6">
                    <div class="w-12 h-12 rounded-2xl bg-navy text-white flex items-center justify-center font-bold group-hover:bg-brandOrange transition-colors duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    </div>
                    <span class="text-2xl font-extrabold text-navy">03</span>
                </div>
                <h3 class="font-bold text-navy text-xl mb-3">UV Durability</h3>
                <p class="text-sm text-slate-500 leading-relaxed">
                    LED-UV curing produces a scratch- and fade-resistant finish that lasts on shelf.
                </p>
            </div>

            <!-- Card 04: Leak Testing -->
            <div class="bg-white p-8 rounded-3xl border border-slate-200/80 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 group">
                <div class="flex items-center space-x-4 mb-6">
                    <div class="w-12 h-12 rounded-2xl bg-navy text-white flex items-center justify-center font-bold group-hover:bg-brandOrange transition-colors duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                    </div>
                    <span class="text-2xl font-extrabold text-navy">04</span>
                </div>
                <h3 class="font-bold text-navy text-xl mb-3">Leak Testing</h3>
                <p class="text-sm text-slate-500 leading-relaxed">
                    Inline leak detection catches defects early, keeping reject rates consistently low.
                </p>
            </div>

            <!-- Card 05: rPET Ready -->
            <div class="bg-white p-8 rounded-3xl border border-slate-200/80 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 group">
                <div class="flex items-center space-x-4 mb-6">
                    <div class="w-12 h-12 rounded-2xl bg-navy text-white flex items-center justify-center font-bold group-hover:bg-brandOrange transition-colors duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                    </div>
                    <span class="text-2xl font-extrabold text-navy">05</span>
                </div>
                <h3 class="font-bold text-navy text-xl mb-3">rPET Ready</h3>
                <p class="text-sm text-slate-500 leading-relaxed">
                    Optimised for recycled PET substrates to support sustainable packaging goals.
                </p>
            </div>

            <!-- Card 06: Low Reject Rates Image Card -->
            <div class="relative rounded-3xl overflow-hidden shadow-md group border border-slate-700 h-full min-h-[260px] flex flex-col justify-end p-8">
                <img src="/images/the-machine.jpg" alt="Low reject rates" class="absolute inset-0 w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700">
                <div class="absolute inset-0 bg-navy/80 backdrop-blur-[2px]"></div>
                
                <div class="relative z-10">
                    <h3 class="text-2xl font-extrabold text-brandOrange mb-1">Low</h3>
                    <p class="text-xl font-bold text-white mb-2 leading-tight">reject rates, by design</p>
                    <p class="text-xs text-slate-300 leading-relaxed">
                        Automation removes operator variability at high volume.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 3. Quote Request Banner -->
<section id="quote" class="py-20 bg-navy text-white text-center px-6">
    <div class="max-w-3xl mx-auto">
        <span class="text-xs uppercase tracking-widest text-brandOrange font-bold">READY WHEN YOU ARE</span>
        <h2 class="text-3xl lg:text-4xl font-extrabold mt-2 mb-3">
            Configure your bottle. <br><span class="text-brandOrange">Request a quote.</span>
        </h2>
        <p class="text-xs text-slate-300 mb-8">
            Tell us your shape, size, and colours — Ashok Singh will tailor a quote for your run.
        </p>

        <div class="flex justify-center space-x-4">
            <a href="{{ url('/#contact') }}" class="bg-brandOrange hover:opacity-90 text-white px-6 py-3 rounded-full text-xs font-semibold transition flex items-center space-x-2 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                <span>Request a Quote</span>
                <span>&rarr;</span>
            </a>
            <a href="https://wa.me/919823086791?text=Hi%20Om%20Sai%20Print%2C%20I%20would%20like%20a%20quote%20for%20bottle%20printing." target="_blank" class="bg-transparent hover:bg-white/10 text-white px-6 py-3 rounded-full text-xs font-semibold border border-slate-400 transition flex items-center space-x-2">
                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                <span>WhatsApp</span>
            </a>
        </div>
    </div>
</section>

@endsection