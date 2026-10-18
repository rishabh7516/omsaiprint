@extends('layouts.app')

@section('content')

<!-- 1. Hero Section -->
<section class="bg-navy text-white py-20 px-6">
    <div class="max-w-7xl mx-auto">
        <span class="text-xs uppercase tracking-widest text-brandOrange font-bold block mb-3">
            OUR MACHINERY
        </span>
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight leading-tight mb-6 max-w-4xl">
            Precision engineering for flawless bottle printing.
        </h1>
        <p class="text-base sm:text-lg text-slate-300 max-w-2xl leading-relaxed">
            Equipped with fully automatic lines, integrated online treatment, UV/IR curing, and inline leak detection for high-volume, zero-defect decoration.
        </p>
    </div>
</section>

<!-- 2. Machine Grid (3 Machines) -->
<section class="py-20 bg-slate-50 px-6">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-2xl sm:text-3xl font-extrabold text-navy mb-12">Featured Printing & Testing Equipment</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Machine 1 -->
            <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                <div>
                    <div class="h-64 bg-white p-6 relative overflow-hidden flex items-center justify-center border-b border-slate-100">
                        <img src="/images/machine-auto-line.jpg" alt="Fully Automatic Silk-Screen Printing Line" class="max-h-full object-contain group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <span class="text-[11px] font-bold text-brandOrange uppercase tracking-wider block mb-2">High Volume Line</span>
                        <h3 class="text-xl font-extrabold text-navy mb-3 leading-snug">Fully Automatic Silk-Screen Printing Line</h3>
                        <p class="text-slate-600 text-sm leading-relaxed mb-4">
                            High-speed fully automated production line for multi-colour screen printing on round, flat, and oval plastic bottles with optical registration.
                        </p>
                    </div>
                </div>
                <div class="p-6 pt-0">
                    <a href="{{ url('/#quote') }}" class="inline-flex items-center text-xs font-bold text-navy group-hover:text-brandOrange transition space-x-1">
                        <span>Inquire About Capability</span>
                        <span>&rarr;</span>
                    </a>
                </div>
            </div>

            <!-- Machine 2 -->
            <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                <div>
                    <div class="h-64 bg-white p-6 relative overflow-hidden flex items-center justify-center border-b border-slate-100">
                        <img src="/images/machine-leak-testing.jpg" alt="Leak Testing Line" class="max-h-full object-contain group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <span class="text-[11px] font-bold text-brandOrange uppercase tracking-wider block mb-2">Inline Quality Control</span>
                        <h3 class="text-xl font-extrabold text-navy mb-3 leading-snug">Leak Testing Line — with online flame, IR/UV and plasma treatment</h3>
                        <p class="text-slate-600 text-sm leading-relaxed mb-4">
                            Integrated line combining surface pre-treatment (flame & plasma), instant IR/UV curing, and 100% inline automated bottle leak testing.
                        </p>
                    </div>
                </div>
                <div class="p-6 pt-0">
                    <a href="{{ url('/#quote') }}" class="inline-flex items-center text-xs font-bold text-navy group-hover:text-brandOrange transition space-x-1">
                        <span>Inquire About Quality Checks</span>
                        <span>&rarr;</span>
                    </a>
                </div>
            </div>

            <!-- Machine 3 -->
            <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                <div>
                    <div class="h-64 bg-white p-6 relative overflow-hidden flex items-center justify-center border-b border-slate-100">
                        <img src="/images/machine-single-color.jpg" alt="Single Color Screen Printing Machine" class="max-h-full object-contain group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <span class="text-[11px] font-bold text-brandOrange uppercase tracking-wider block mb-2">Precision Printing</span>
                        <h3 class="text-xl font-extrabold text-navy mb-3 leading-snug">Single Color Screen Printing Machine</h3>
                        <p class="text-slate-600 text-sm leading-relaxed mb-4">
                            Versatile single-colour screen printing system built for quick setup, high-opacity branding, and precise container decoration.
                        </p>
                    </div>
                </div>
                <div class="p-6 pt-0">
                    <a href="{{ url('/#quote') }}" class="inline-flex items-center text-xs font-bold text-navy group-hover:text-brandOrange transition space-x-1">
                        <span>Inquire About Capability</span>
                        <span>&rarr;</span>
                    </a>
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