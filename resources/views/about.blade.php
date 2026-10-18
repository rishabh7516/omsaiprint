@extends('layouts.app')

@section('content')

<!-- Main About Section -->
<section class="py-20 bg-white px-6">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left Column: Copy & Text Content -->
            <div class="lg:col-span-7 space-y-6">
                
                <!-- Eyebrow -->
                <span class="text-xs uppercase tracking-widest text-brandOrange font-bold block">
                    ABOUT OM SAI PRINT
                </span>

                <!-- Heading -->
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-navy tracking-tight leading-tight">
                    Printing on plastic bottles since 2002.
                </h1>

                <!-- Paragraph 1 -->
                <p class="text-slate-700 text-base leading-relaxed">
                    Om Sai Print has been decorating plastic bottles for manufacturers and brands <strong class="text-navy">since 2002</strong>. What began as a single-colour screen printing shop now runs a fully automatic line that handles everything from a one-colour stainer bottle to a six-colour cosmetic range.
                </p>

                <!-- Paragraph 2 -->
                <p class="text-slate-700 text-base leading-relaxed">
                    Everything happens in-house and in one pass: automatic loading, <strong class="text-navy">online flame and plasma surface treatment</strong>, up to six colours printed in tight registration, <strong class="text-navy">IR and LED-UV curing</strong>, and <strong class="text-navy">inline leak testing</strong> on every bottle before it is packed. That is why our print survives oil, water, solvents, sterilisation and daily handling.
                </p>

                <!-- Paragraph 3 -->
                <p class="text-slate-700 text-base leading-relaxed">
                    We print for personal care, hair oil, paint and stainer, silicone sealant, baby care, food and daily-use brands — and we take on both single bottles and full ranges.
                </p>

                <!-- Button -->
                <div class="pt-4">
                    <a href="{{ url('/#contact') }}" class="inline-flex items-center justify-center bg-brandOrange hover:opacity-90 text-white font-bold text-sm px-8 py-4 rounded-xl shadow-md transition space-x-2">
                        <span>Request a Quote</span>
                        <span>&rarr;</span>
                    </a>
                </div>

            </div>

            <!-- Right Column: Machine Photo & 4 Stat Tiles -->
            <div class="lg:col-span-5 space-y-8">
                
                <!-- Photo Box (One of the 3 Machine Photos) -->
                <div class="bg-slate-50 border border-slate-200 rounded-3xl p-6 overflow-hidden shadow-sm flex items-center justify-center min-h-[320px]">
                    <img src="/images/machine-auto-line.jpg" alt="Fully Automatic Silk-Screen Printing Line" class="w-full h-auto object-contain rounded-2xl">
                </div>

                <!-- 4 Stat Tiles Grid -->
                <div class="grid grid-cols-2 gap-4">
                    
                    <!-- Stat Tile 1 -->
                    <div class="bg-slate-50 border border-slate-200 rounded-2xl p-5 text-center">
                        <span class="text-3xl font-extrabold text-navy block mb-1">2002</span>
                        <span class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Printing since</span>
                    </div>

                    <!-- Stat Tile 2 -->
                    <div class="bg-slate-50 border border-slate-200 rounded-2xl p-5 text-center">
                        <span class="text-3xl font-extrabold text-navy block mb-1">6</span>
                        <span class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Colours in one pass</span>
                    </div>

                    <!-- Stat Tile 3 -->
                    <div class="bg-slate-50 border border-slate-200 rounded-2xl p-5 text-center">
                        <span class="text-3xl font-extrabold text-navy block mb-1">100%</span>
                        <span class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Bottles leak tested</span>
                    </div>

                    <!-- Stat Tile 4 -->
                    <div class="bg-slate-50 border border-slate-200 rounded-2xl p-5 text-center">
                        <span class="text-3xl font-extrabold text-navy block mb-1">45+</span>
                        <span class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Brands printed for</span>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>

@endsection