@extends('layouts.app')

@section('content')

<section class="py-12 bg-white px-6">
    <div class="max-w-6xl mx-auto">
        <!-- Top Breadcrumb / Back Link -->
        <a href="{{ route('industries.show', $sectorSlug) }}" class="text-xs font-bold text-slate-500 hover:text-brandOrange uppercase tracking-wider mb-8 block">&larr; Back to {{ $sector['name'] }}</a>

        <!-- Main Product Section -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">
            
            <!-- Left: Product Photo Box -->
            <div class="lg:col-span-5 bg-slate-50 border border-slate-200 rounded-2xl p-8 flex flex-col items-center justify-center min-h-[420px]">
                <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="max-h-72 object-contain mb-4">
                <span class="text-xs text-slate-400 font-medium">{{ $product['image_caption'] }}</span>
            </div>

            <!-- Right: Product Information -->
            <div class="lg:col-span-7 space-y-6">
                <!-- Badges -->
                <div class="flex items-center space-x-3">
                    <span class="bg-blue-50 text-navy font-semibold text-xs px-3 py-1 rounded-full border border-blue-100">{{ $product['category'] }}</span>
                    <span class="bg-orange-50 text-brandOrange font-semibold text-xs px-3 py-1 rounded-full border border-orange-100">🏷 {{ $product['tag'] }}</span>
                </div>

                <!-- Product Name & Subtitle -->
                <div>
                    <h1 class="text-3xl sm:text-4xl font-extrabold text-navy tracking-tight leading-tight">{{ $product['name'] }}</h1>
                    <p class="text-sm text-slate-500 mt-2 font-medium">{{ $product['subtitle'] }}</p>
                </div>

                <!-- Descriptions -->
                <div class="space-y-4 text-slate-700 text-sm leading-relaxed">
                    <p><strong class="text-navy">What it is:</strong> {{ $product['what_it_is'] }}</p>
                    <p><strong class="text-navy">How we printed it:</strong> {{ $product['how_we_printed_it'] }}</p>
                    
                    <!-- Callout Quote Box -->
                    <p class="bg-orange-50/60 border-l-4 border-brandOrange p-4 text-slate-700 italic rounded-r-lg">
                        <strong>Planning a range?</strong> {{ $product['callout_text'] }}
                    </p>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-wrap items-center gap-4 pt-2">
                    <a href="{{ url('/#quote') }}" class="bg-brandOrange hover:opacity-90 text-white px-6 py-3 rounded-xl text-sm font-bold shadow-sm transition">
                        📄 Request a quote
                    </a>
                    <a href="https://wa.me/919823086791?text=Hi%20Om%20Sai%20Print%2C%20I%20am%20interested%20in%20{{ urlencode($product['name']) }}." target="_blank" class="bg-slate-100 hover:bg-slate-200 text-navy px-6 py-3 rounded-xl text-sm font-bold border border-slate-300 transition flex items-center space-x-2">
                        <svg class="w-4 h-4 fill-current text-green-600" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                        <span>WhatsApp us</span>
                    </a>
                </div>
            </div>

        </div>

        <hr class="my-12 border-slate-200">

        <!-- Specifications Table -->
        <div class="max-w-4xl">
            <h2 class="text-xs font-bold text-navy uppercase tracking-widest mb-6">SPECIFICATIONS</h2>
            <div class="divide-y divide-slate-100 text-sm">
                @foreach($product['specs'] as $label => $value)
                    <div class="py-3.5 grid grid-cols-1 sm:grid-cols-12 gap-2">
                        <span class="sm:col-span-4 font-semibold text-slate-500">{{ $label }}</span>
                        <span class="sm:col-span-8 font-medium text-navy">{{ $value }}</span>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</section>

@endsection