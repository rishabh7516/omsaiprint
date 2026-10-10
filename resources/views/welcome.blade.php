@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section id="home" class="relative bg-slate-900 py-24 px-6 border-b border-slate-800">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <div>
            <span class="text-xs font-semibold tracking-widest text-orange-500 uppercase">ESTABLISHED 2018 • TECHNO ROBOTICS AUTOMATIC LINE</span>
            <h1 class="text-4xl lg:text-6xl font-extrabold tracking-tight mt-4 mb-6 leading-tight">
                Fully automatic silk-screen printing on plastic bottles.
            </h1>
            <p class="text-lg text-slate-400 mb-8">
                The printing partner for bottle manufacturers and brands — consistent multi-colour decoration, leak-tested quality, at high volume with low rejects.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="#quote" class="bg-brand hover:bg-orange-600 text-white px-6 py-3 rounded-md font-semibold transition flex items-center">
                    Configure Your Bottle & Request a Quote &rarr;
                </a>
                <a href="https://wa.me/919823086791" target="_blank" class="bg-slate-800 hover:bg-slate-700 text-slate-200 px-6 py-3 rounded-md font-semibold border border-slate-700 transition">
                    WhatsApp
                </a>
            </div>
        </div>
        <div class="rounded-xl overflow-hidden bg-slate-800 border border-slate-700 shadow-2xl h-80 flex items-center justify-center text-slate-500">
            <!-- Machine Preview Placeholder / Image -->
            <p class="text-sm">[ Machine / Printing Process Video Preview ]</p>
        </div>
    </div>
</section>

<!-- Brand Trust Bar -->
<section class="py-8 bg-slate-950 border-b border-slate-800 text-center">
    <span class="text-xs uppercase tracking-widest text-slate-500 font-semibold">Trusted by Manufacturers & Brands</span>
    <div class="flex flex-wrap justify-center items-center gap-10 mt-4 text-slate-400 font-bold text-xl opacity-75">
        <span>PIDILITE</span>
        <span>GARNIER</span>
        <span>HYPHEN</span>
        <span>JSW</span>
    </div>
</section>

<!-- Machine Feature Section -->
<section id="machine" class="py-20 px-6 max-w-7xl mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <div class="rounded-xl bg-slate-800 h-80 border border-slate-700 flex items-center justify-center text-slate-500">
            [ Techno Robotics Line Image ]
        </div>
        <div>
            <span class="text-xs uppercase tracking-widest text-orange-500 font-semibold">The Machine</span>
            <h2 class="text-3xl font-bold mt-2 mb-4">Auto-load to leak-test, without a break.</h2>
            <p class="text-slate-400 mb-6">
                Our Techno Robotics line auto-loads bottles, activates the surface with online flame treatment, prints multi-colour artwork in register, cures instantly with synchronised IR + LED-UV, then leak-tests every unit inline.
            </p>
            <a href="#quote" class="text-orange-500 font-semibold hover:underline">Explore the process &rarr;</a>
        </div>
    </div>
</section>

<!-- Industries Served -->
<section id="industries" class="py-20 bg-slate-950 border-t border-slate-800 px-6">
    <div class="max-w-7xl mx-auto">
        <span class="text-xs uppercase tracking-widest text-orange-500 font-semibold">Industries Served</span>
        <h2 class="text-3xl font-bold mt-2 mb-10">Decorating bottles across sectors.</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-slate-900 p-6 rounded-lg border border-slate-800">
                <h3 class="font-bold text-lg mb-2">Cosmetics & Personal Care</h3>
                <p class="text-sm text-slate-400">Premium multi-colour decoration for shampoo, lotion, serum and beauty bottles.</p>
            </div>
            <div class="bg-slate-900 p-6 rounded-lg border border-slate-800">
                <h3 class="font-bold text-lg mb-2">Pharma & Feeding Bottles</h3>
                <p class="text-sm text-slate-400">Precise, durable printing and graduation marks for pharmaceutical bottles.</p>
            </div>
            <div class="bg-slate-900 p-6 rounded-lg border border-slate-800">
                <h3 class="font-bold text-lg mb-2">Agrochemical</h3>
                <p class="text-sm text-slate-400">Rugged, chemical-resistant print with clear dosing and safety information.</p>
            </div>
            <div class="bg-slate-900 p-6 rounded-lg border border-slate-800">
                <h3 class="font-bold text-lg mb-2">Adhesives & Silicone</h3>
                <p class="text-sm text-slate-400">High-adhesion decoration for adhesive and sealant containers.</p>
            </div>
        </div>
    </div>
</section>

<!-- Quality Specs Section -->
<section id="quality" class="py-20 px-6 max-w-7xl mx-auto">
    <span class="text-xs uppercase tracking-widest text-orange-500 font-semibold">Quality & Specifications</span>
    <h2 class="text-3xl font-bold mt-2 mb-8">Print specs tailored per bottle category.</h2>
    <div class="bg-slate-800/50 border border-slate-700 rounded-xl p-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div>
                <h4 class="font-semibold text-orange-400 mb-1">Color Layering</h4>
                <p class="text-sm text-slate-300">Multi-layer screen registration with UV instant curing.</p>
            </div>
            <div>
                <h4 class="font-semibold text-orange-400 mb-1">Ink Adhesion</h4>
                <p class="text-sm text-slate-300">Flame-surface treated for chemical and scratch resistance.</p>
            </div>
            <div>
                <h4 class="font-semibold text-orange-400 mb-1">Leak Testing</h4>
                <p class="text-sm text-slate-300">100% inline automatic pressure leak detection.</p>
            </div>
        </div>
    </div>
</section>

<!-- Quote Request Form -->
<section id="quote" class="py-20 bg-slate-950 px-6 border-t border-slate-800">
    <div class="max-w-3xl mx-auto text-center">
        <span class="text-xs uppercase tracking-widest text-orange-500 font-semibold">Ready When You Are</span>
        <h2 class="text-3xl font-bold mt-2 mb-4">Configure your bottle. Request a quote.</h2>
        <p class="text-slate-400 mb-8">Tell us your shape, size, and colours — Ashok Singh will tailor a quote for your run.</p>
        
        <form class="bg-slate-900 p-8 rounded-xl border border-slate-800 text-left space-y-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-semibold uppercase text-slate-400 mb-1">Name</label>
                    <input type="text" placeholder="Your Name" class="w-full bg-slate-800 border border-slate-700 rounded p-3 text-sm focus:outline-none focus:border-orange-500">
                </div>
                <div>
                    <label class="block text-xs font-semibold uppercase text-slate-400 mb-1">Phone Number</label>
                    <input type="text" placeholder="+91 XXXXX XXXXX" class="w-full bg-slate-800 border border-slate-700 rounded p-3 text-sm focus:outline-none focus:border-orange-500">
                </div>
            </div>
            <div>
                <label class="block text-xs font-semibold uppercase text-slate-400 mb-1">Bottle Specifications</label>
                <textarea rows="3" placeholder="Specify size (20ml - 1L), shape, and number of colors required..." class="w-full bg-slate-800 border border-slate-700 rounded p-3 text-sm focus:outline-none focus:border-orange-500"></textarea>
            </div>
            <button type="button" class="w-full bg-brand hover:bg-orange-600 text-white font-semibold py-3 rounded transition">
                Submit Quote Request
            </button>
        </form>
    </div>
</section>

@endsection