@extends('layouts.app')

@section('content')

<!-- Header Section -->
<section class="bg-navy text-white py-16 px-6">
    <div class="max-w-7xl mx-auto">
        <a href="{{ route('industries.index') }}" class="text-xs uppercase tracking-widest text-brandOrange font-bold mb-4 inline-block hover:underline">&larr; Back to All Sectors</a>
        <h1 class="text-4xl sm:text-5xl font-extrabold text-white mb-4">{{ $sector['name'] }}</h1>
        <p class="text-slate-300 text-base max-w-2xl leading-relaxed">{{ $sector['description'] }}</p>
    </div>
</section>

<!-- Products Display Section -->
<section class="py-20 bg-slate-50 px-6">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-2xl font-extrabold text-navy mb-8">Products & Applications</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach($sector['products'] as $product)
                <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-md transition">
                    <div class="h-64 bg-slate-200 relative overflow-hidden">
                        <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <span class="text-[11px] font-bold text-brandOrange uppercase tracking-wider block mb-1">{{ $product['specs'] }}</span>
                        <h3 class="text-xl font-bold text-navy mb-2">{{ $product['name'] }}</h3>
                        <p class="text-slate-600 text-sm leading-relaxed mb-6">{{ $product['description'] }}</p>
                        <a href="{{ url('/#quote') }}" class="inline-flex items-center text-xs font-bold text-navy hover:text-brandOrange transition space-x-1">
                            <span>Request Quote for this Product</span>
                            <span>&rarr;</span>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection