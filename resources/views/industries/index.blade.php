@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="bg-navy text-white py-20 px-6">
    <div class="max-w-7xl mx-auto">
        <span class="text-xs uppercase tracking-widest text-brandOrange font-bold block mb-3">INDUSTRIES SERVED</span>
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight mb-6 max-w-4xl">
            Print that performs in every sector.
        </h1>
        <p class="text-base sm:text-lg text-slate-300 max-w-2xl leading-relaxed">
            Click on any sector below to explore the specialized bottle types, printing capabilities, and products we manufacture for that industry.
        </p>
    </div>
</section>

<!-- Sector Cards Grid -->
<section class="py-20 bg-white px-6">
    <div class="max-w-7xl mx-auto space-y-24">
        @php $counter = 1; @endphp
        @foreach($sectors as $sector)
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                <div class="lg:col-span-6 {{ $counter % 2 == 0 ? 'order-1 lg:order-2' : '' }} relative group">
                    <a href="{{ route('industries.show', $sector->slug) }}" class="block rounded-3xl overflow-hidden bg-slate-100 border border-slate-200 shadow-md h-[380px] relative">
                        <img src="{{ asset($sector->image) }}" alt="{{ $sector->name }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    </a>
                </div>
                <div class="lg:col-span-6 {{ $counter % 2 == 0 ? 'order-2 lg:order-1' : '' }}">
                    <span class="text-xs uppercase tracking-widest text-brandOrange font-bold block mb-2">0{{ $counter }} · SECTOR</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-navy mb-4">
                        <a href="{{ route('industries.show', $sector->slug) }}" class="hover:text-brandOrange transition">{{ $sector->name }}</a>
                    </h2>
                    <p class="text-slate-500 text-base leading-relaxed mb-8">{{ $sector->description }}</p>
                    
                    <a href="{{ route('industries.show', $sector->slug) }}" class="inline-flex items-center text-sm font-bold bg-navy text-white hover:bg-brandOrange px-6 py-3 rounded-full transition space-x-2">
                        <span>View Products in this Sector</span>
                        <span>&rarr;</span>
                    </a>
                </div>
            </div>
            @php $counter++; @endphp
        @endforeach
    </div>
</section>

@endsection