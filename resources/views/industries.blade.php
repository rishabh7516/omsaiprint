@extends('layouts.app')

@section('content')

<!-- 1. Hero Section -->
<section class="bg-navy text-white py-20 px-6">
    <div class="max-w-7xl mx-auto">
        <span class="text-xs uppercase tracking-widest text-brandOrange font-bold block mb-3">
            INDUSTRIES SERVED
        </span>
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight leading-tight mb-6 max-w-4xl">
            Print that performs in every sector.
        </h1>
        <p class="text-base sm:text-lg text-slate-300 max-w-2xl leading-relaxed">
            From cosmetic bottles to industrial containers, we tailor surface treatment, ink and curing to the demands of each industry — ensuring decoration lasts through filling, handling, and shelf life.
        </p>
    </div>
</section>

<!-- 2. Sector Detail Blocks (Alternating Layout Grid) -->
<section class="py-20 bg-white px-6">
    <div class="max-w-7xl mx-auto space-y-24">
        
        <!-- 01. Cosmetic & Personal Care (Image Left, Text Right) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            <div class="lg:col-span-6 relative group">
                <div class="rounded-3xl overflow-hidden bg-slate-100 border border-slate-200 shadow-md h-[400px] sm:h-[460px] relative">
                    <img src="/images/industry-cosmetics.jpg" alt="Cosmetic & Personal Care" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700">
                    <!-- Icon Badge -->
                    <div class="absolute top-6 left-6 bg-navy/90 backdrop-blur-md text-brandOrange p-3 rounded-xl shadow-lg border border-slate-700/50">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-6">
                <span class="text-xs uppercase tracking-widest text-brandOrange font-bold block mb-2">01 · SECTOR</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-navy mb-4">Cosmetic & Personal Care</h2>
                <p class="text-slate-500 text-base leading-relaxed mb-8">
                    Premium multi-colour decoration for shampoo, lotion, serum, and beauty containers that must look flawless on the shelf.
                </p>
                <a href="{{ url('/#quote') }}" class="inline-flex items-center text-sm font-bold text-navy hover:text-brandOrange transition space-x-2 group">
                    <span>Request a quote for this sector</span>
                    <span class="transform group-hover:translate-x-1 transition-transform">&rarr;</span>
                </a>
            </div>
        </div>

        <!-- 02. Baby & Feeding Bottles (Text Left, Image Right) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            <div class="lg:col-span-6 order-2 lg:order-1">
                <span class="text-xs uppercase tracking-widest text-brandOrange font-bold block mb-2">02 · SECTOR</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-navy mb-4">Baby & Feeding Bottles</h2>
                <p class="text-slate-500 text-base leading-relaxed mb-8">
                    Precise, non-toxic, and ultra-durable printing with accurate measurement and graduation marks for baby feeding bottles.
                </p>
                <a href="{{ url('/#quote') }}" class="inline-flex items-center text-sm font-bold text-navy hover:text-brandOrange transition space-x-2 group">
                    <span>Request a quote for this sector</span>
                    <span class="transform group-hover:translate-x-1 transition-transform">&rarr;</span>
                </a>
            </div>
            <div class="lg:col-span-6 order-1 lg:order-2 relative group">
                <div class="rounded-3xl overflow-hidden bg-slate-100 border border-slate-200 shadow-md h-[400px] sm:h-[460px] relative">
                    <img src="/images/industry-baby.jpg" alt="Baby & Feeding Bottles" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700">
                    <!-- Icon Badge -->
                    <div class="absolute top-6 left-6 bg-navy/90 backdrop-blur-md text-brandOrange p-3 rounded-xl shadow-lg border border-slate-700/50">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- 03. Paint Stainers & Tinting Colourants (Image Left, Text Right) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            <div class="lg:col-span-6 relative group">
                <div class="rounded-3xl overflow-hidden bg-slate-100 border border-slate-200 shadow-md h-[400px] sm:h-[460px] relative">
                    <img src="/images/industry-paint.jpg" alt="Paint Stainers & Tinting Colourants" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700">
                    <!-- Icon Badge -->
                    <div class="absolute top-6 left-6 bg-navy/90 backdrop-blur-md text-brandOrange p-3 rounded-xl shadow-lg border border-slate-700/50">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path></svg>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-6">
                <span class="text-xs uppercase tracking-widest text-brandOrange font-bold block mb-2">03 · SECTOR</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-navy mb-4">Paint Stainers & Tinting Colourants</h2>
                <p class="text-slate-500 text-base leading-relaxed mb-8">
                    High-contrast, solvent-resistant printing designed to remain clear and legible even in harsh factory and retail environments.
                </p>
                <a href="{{ url('/#quote') }}" class="inline-flex items-center text-sm font-bold text-navy hover:text-brandOrange transition space-x-2 group">
                    <span>Request a quote for this sector</span>
                    <span class="transform group-hover:translate-x-1 transition-transform">&rarr;</span>
                </a>
            </div>
        </div>

        <!-- 04. Industrial, Lubricants & Adhesives (Text Left, Image Right) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            <div class="lg:col-span-6 order-2 lg:order-1">
                <span class="text-xs uppercase tracking-widest text-brandOrange font-bold block mb-2">04 · SECTOR</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-navy mb-4">Industrial, Lubricants & Adhesives</h2>
                <p class="text-slate-500 text-base leading-relaxed mb-8">
                    Rugged, chemical-proof printing for industrial containers, oil bottles, sealants, and adhesive cartridges built for tough handling.
                </p>
                <a href="{{ url('/#quote') }}" class="inline-flex items-center text-sm font-bold text-navy hover:text-brandOrange transition space-x-2 group">
                    <span>Request a quote for this sector</span>
                    <span class="transform group-hover:translate-x-1 transition-transform">&rarr;</span>
                </a>
            </div>
            <div class="lg:col-span-6 order-1 lg:order-2 relative group">
                <div class="rounded-3xl overflow-hidden bg-slate-100 border border-slate-200 shadow-md h-[400px] sm:h-[460px] relative">
                    <img src="/images/industry-industrial.jpg" alt="Industrial, Lubricants & Adhesives" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700">
                    <!-- Icon Badge -->
                    <div class="absolute top-6 left-6 bg-navy/90 backdrop-blur-md text-brandOrange p-3 rounded-xl shadow-lg border border-slate-700/50">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- 05. Food & Household (Image Left, Text Right) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            <div class="lg:col-span-6 relative group">
                <div class="rounded-3xl overflow-hidden bg-slate-100 border border-slate-200 shadow-md h-[400px] sm:h-[460px] relative">
                    <img src="/images/industry-food.jpg" alt="Food & Household" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700">
                    <!-- Icon Badge -->
                    <div class="absolute top-6 left-6 bg-navy/90 backdrop-blur-md text-brandOrange p-3 rounded-xl shadow-lg border border-slate-700/50">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-6">
                <span class="text-xs uppercase tracking-widest text-brandOrange font-bold block mb-2">05 · SECTOR</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-navy mb-4">Food & Household</h2>
                <p class="text-slate-500 text-base leading-relaxed mb-8">
                    Vibrant, food-safe screen printing for condiments, sauces, household cleaners, and detergent bottles.
                </p>
                <a href="{{ url('/#quote') }}" class="inline-flex items-center text-sm font-bold text-navy hover:text-brandOrange transition space-x-2 group">
                    <span>Request a quote for this sector</span>
                    <span class="transform group-hover:translate-x-1 transition-transform">&rarr;</span>
                </a>
            </div>
        </div>

        <!-- 06. Machine Photos (Text Left, Image Right) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            <div class="lg:col-span-6 order-2 lg:order-1">
                <span class="text-xs uppercase tracking-widest text-brandOrange font-bold block mb-2">06 · SECTOR</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-navy mb-4">Machine Photos</h2>
                <p class="text-slate-500 text-base leading-relaxed mb-8">
                    Explore our state-of-the-art fully automatic Techno Robotics silk-screen printing line and high-speed machinery in action.
                </p>
                <a href="{{ url('/#quote') }}" class="inline-flex items-center text-sm font-bold text-navy hover:text-brandOrange transition space-x-2 group">
                    <span>Request a quote for this sector</span>
                    <span class="transform group-hover:translate-x-1 transition-transform">&rarr;</span>
                </a>
            </div>
            <div class="lg:col-span-6 order-1 lg:order-2 relative group">
                <div class="rounded-3xl overflow-hidden bg-slate-100 border border-slate-200 shadow-md h-[400px] sm:h-[460px] relative">
                    <img src="/images/industry-machine.jpg" alt="Machine Photos" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700">
                    <!-- Icon Badge -->
                    <div class="absolute top-6 left-6 bg-navy/90 backdrop-blur-md text-brandOrange p-3 rounded-xl shadow-lg border border-slate-700/50">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
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
            <a href="{{ url('/#contact') }}" class="bg-brandOrange hover:opacity-90 text-white px-6 py-3 rounded-full text-xs font-semibold transition flex items-center space-x-2 shadow-md">
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