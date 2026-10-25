@extends('layouts.app')

@section('content')

<!-- 1. Navy Hero Band -->
<section class="bg-navy text-white py-20 px-6">
    <div class="max-w-7xl mx-auto">
        <!-- Eyebrow -->
        <span class="text-xs uppercase tracking-widest text-brandOrange font-bold block mb-3">
            QUALITY & PROCESS
        </span>

        <!-- Heading -->
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight leading-tight mb-6 max-w-4xl">
            Quality engineered into every stage.
        </h1>

        <!-- Paragraph -->
        <p class="text-base sm:text-lg text-slate-300 max-w-2xl leading-relaxed">
            We don't inspect quality in at the end — it's built into every step, from surface activation to inline leak testing, so what leaves the line is consistent and shelf-ready.
        </p>
    </div>
</section>

<!-- 2. Six Numbered Cards Grid -->
<section class="py-20 bg-slate-50 px-6">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Card 01 -->
            <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                <div>
                    <div class="p-6 pb-0 flex items-center justify-between">
                        <span class="text-3xl font-extrabold text-brandOrange">01</span>
                    </div>
                    <div class="h-60 bg-white p-6 relative overflow-hidden flex items-center justify-center border-b border-slate-100">
                        <img src="/images/Flame Adhesion.jpg" alt="Flame Adhesion" class="max-h-full object-contain group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-extrabold text-navy mb-3">Flame Adhesion</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Online flame or plasma treatment activates the surface before printing, so the ink bonds to the bottle and survives handling, filling and transport.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 02 -->
            <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                <div>
                    <div class="p-6 pb-0 flex items-center justify-between">
                        <span class="text-3xl font-extrabold text-brandOrange">02</span>
                    </div>
                    <div class="h-60 bg-white p-6 relative overflow-hidden flex items-center justify-center border-b border-slate-100">
                        <img src="/images/Print Registration.jpg" alt="Print Registration" class="max-h-full object-contain group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-extrabold text-navy mb-3">Print Registration</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Up to six colours land in register on every piece, so multi-colour artwork stays sharp from the first bottle to the last.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 03 -->
            <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                <div>
                    <div class="p-6 pb-0 flex items-center justify-between">
                        <span class="text-3xl font-extrabold text-brandOrange">03</span>
                    </div>
                    <div class="h-60 bg-white p-6 relative overflow-hidden flex items-center justify-center border-b border-slate-100">
                        <img src="/images/UV Durability.jpg" alt="UV Durability" class="max-h-full object-contain group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-extrabold text-navy mb-3">UV Durability</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            IR and LED-UV curing produces a scratch- and fade-resistant finish, and every bottle in a range carries the same print in the same place.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 04 -->
            <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                <div>
                    <div class="p-6 pb-0 flex items-center justify-between">
                        <span class="text-3xl font-extrabold text-brandOrange">04</span>
                    </div>
                    <div class="h-60 bg-white p-6 relative overflow-hidden flex items-center justify-center border-b border-slate-100">
                        <img src="/images/Fine Text Stays Legible.jpg" alt="Fine Text Stays Legible" class="max-h-full object-contain group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-extrabold text-navy mb-3">Fine Text Stays Legible</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Shade codes, dosage tables and back-panel directions stay sharp and legible, even in small sizes and high-contrast colours.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 05 -->
            <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                <div>
                    <div class="p-6 pb-0 flex items-center justify-between">
                        <span class="text-3xl font-extrabold text-brandOrange">05</span>
                    </div>
                    <div class="h-60 bg-white p-6 relative overflow-hidden flex items-center justify-center border-b border-slate-100">
                        <img src="/images/Non-Toxic & Wash Safe.jpg" alt="Non-Toxic & Wash Safe" class="max-h-full object-contain group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-extrabold text-navy mb-3">Non-Toxic & Wash Safe</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Food-safe and non-toxic inks used for feeding bottles and kitchenware withstand washing, sterilisation and daily handling without degrading.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 06 -->
            <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                <div>
                    <div class="p-6 pb-0 flex items-center justify-between">
                        <span class="text-3xl font-extrabold text-brandOrange">06</span>
                    </div>
                    <div class="h-60 bg-white p-6 relative overflow-hidden flex items-center justify-center border-b border-slate-100">
                        <img src="/images/100% Inline Leak Testing.jpg" alt="100% Inline Leak Testing" class="max-h-full object-contain group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-extrabold text-navy mb-3">100% Inline Leak Testing</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Automated leak testing on the line checks every bottle so defective containers never make it to packing or store shelves.
                        </p>
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