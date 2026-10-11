@extends('layouts.app')

@section('content')

<!-- 1. Hero Section -->
<section class="bg-navy text-white py-20 px-6">
    <div class="max-w-7xl mx-auto">
        <span class="text-xs uppercase tracking-widest text-brandOrange font-bold block mb-3">
            ABOUT US
        </span>
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight leading-tight mb-6 max-w-4xl">
            A silk-screen partner built on precision.
        </h1>
        <p class="text-base sm:text-lg text-slate-300 max-w-2xl leading-relaxed">
            Founded in 2002 and led by Ashok Singh, Om Sai Print decorates plastic bottles for manufacturers and brands — not sell them. We invest in fully automatic technology so our clients get consistency at scale.
        </p>
    </div>
</section>

<!-- 2. Our Story Section -->
<section class="py-24 bg-white px-6 border-b border-slate-200">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
        
        <!-- Left Image Container with Since 2002 Badge Overlay -->
        <div class="lg:col-span-6 relative group">
            <div class="relative rounded-3xl overflow-hidden bg-slate-100 border border-slate-200/80 shadow-md h-[450px] sm:h-[520px] w-full">
                <img src="/images/the-machine.jpg" alt="Om Sai Print Factory" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700">
            </div>

            <!-- "Since 2002" Floating Badge Overlay (Bottom Left) -->
            <div class="absolute bottom-6 left-6 z-10 bg-white text-navy px-6 py-4 rounded-2xl shadow-xl border border-slate-200/80 max-w-[200px] group-hover:-translate-y-1 transition-transform duration-300">
                <span class="text-xl font-extrabold text-navy block leading-none mb-1">Since 2002</span>
                <span class="text-[10px] uppercase tracking-wider text-slate-400 font-bold block">Decorating Bottles</span>
            </div>
        </div>

        <!-- Right Story Content -->
        <div class="lg:col-span-6">
            <span class="text-xs uppercase tracking-widest text-brandOrange font-bold block mb-3">OUR STORY</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-navy tracking-tight leading-tight mb-6">
                Decoration is our craft. Bottles are our canvas.
            </h2>
            
            <p class="text-slate-500 text-base leading-relaxed mb-6">
                Om Sai Print specialises exclusively in silk-screen printing on plastic bottles — round, flat and oval, from 20 ml to 1 L. Our fully automatic Techno Robotics line handles auto-loading, online flame treatment, multi-colour printing, synchronised IR + LED-UV curing and inline leak testing.
            </p>
            
            <p class="text-slate-500 text-base leading-relaxed">
                That end-to-end automation is why manufacturers and brands trust us with high volumes — and why our reject rates stay low.
            </p>
        </div>

    </div>
</section>

<!-- 3. Core Values & Leadership Section -->
<section class="py-20 bg-pageBg px-6">
    <div class="max-w-7xl mx-auto space-y-12">
        
        <!-- 3 Values Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <!-- Value 01 -->
            <div class="bg-white p-8 rounded-3xl border border-slate-200/80 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300">
                <span class="text-2xl font-extrabold text-brandOrange block mb-4">01</span>
                <h3 class="font-bold text-navy text-xl mb-3">Consistency</h3>
                <p class="text-sm text-slate-500 leading-relaxed">
                    Automation delivers the same crisp result on the first bottle and the millionth.
                </p>
            </div>

            <!-- Value 02 -->
            <div class="bg-white p-8 rounded-3xl border border-slate-200/80 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300">
                <span class="text-2xl font-extrabold text-brandOrange block mb-4">02</span>
                <h3 class="font-bold text-navy text-xl mb-3">Partnership</h3>
                <p class="text-sm text-slate-500 leading-relaxed">
                    We work as an extension of your production — flexible to your artwork and timelines.
                </p>
            </div>

            <!-- Value 03 -->
            <div class="bg-white p-8 rounded-3xl border border-slate-200/80 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300">
                <span class="text-2xl font-extrabold text-brandOrange block mb-4">03</span>
                <h3 class="font-bold text-navy text-xl mb-3">Quality</h3>
                <p class="text-sm text-slate-500 leading-relaxed">
                    Flame adhesion, tight registration, UV durability and inline leak testing as standard.
                </p>
            </div>

        </div>

        <!-- Leadership Card (Ashok Singh) -->
        <div class="bg-navy rounded-3xl p-8 sm:p-10 text-white shadow-xl flex flex-col md:flex-row md:items-center justify-between gap-6">
            <div>
                <span class="text-xs uppercase tracking-widest text-brandOrange font-bold block mb-2">LEADERSHIP</span>
                <h3 class="text-2xl font-extrabold text-white mb-1">Ashok Singh</h3>
                <p class="text-xs text-slate-300 font-medium">Founder & Owner, Om Sai Print</p>
            </div>
            
            <div class="text-left md:text-right text-xs text-slate-300 space-y-1 border-t md:border-t-0 border-slate-700/60 pt-4 md:pt-0">
                <p class="font-semibold text-white">+91 98230 86791</p>
                <p class="hover:underline cursor-pointer">ashokimp71@gmail.com</p>
            </div>
        </div>

    </div>
</section>

<!-- 4. Quote Request Banner -->
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