@extends('layouts.app')

@section('content')

<!-- 1. Hero Section -->
<section class="bg-navy text-white py-20 px-6 border-b border-slate-800">
    <div class="max-w-7xl mx-auto">
        <span class="text-xs uppercase tracking-widest text-brandOrange font-bold block mb-3">
            CONTACT US
        </span>
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight leading-tight mb-6 max-w-4xl">
            Let's talk about your bottles.
        </h1>
        <p class="text-base sm:text-lg text-slate-300 max-w-2xl leading-relaxed">
            Reach Ashok Singh or our team directly through phone, WhatsApp, or any of our dedicated departments below.
        </p>
    </div>
</section>

<!-- 2. Main Contact Grid Section -->
<section class="py-20 bg-pageBg px-6">
    <div class="max-w-7xl mx-auto space-y-10">
        
        <!-- Top Row: Phone, WhatsApp, Owner Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            
            <!-- Phone Card -->
            <a href="tel:+919823086791" class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300 block group">
                <div class="text-brandOrange mb-4 transform group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                </div>
                <span class="text-[10px] uppercase tracking-wider text-slate-400 font-bold block mb-1">PHONE</span>
                <span class="text-sm font-extrabold text-navy">+91 98230 86791</span>
            </a>

            <!-- WhatsApp Card -->
            <a href="https://wa.me/919823086791?text=Hi%20Om%20Sai%20Print%2C%20I%20would%20like%20to%20inquire%20about%20bottle%20printing." target="_blank" class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300 block group">
                <div class="text-brandOrange mb-4 transform group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                </div>
                <span class="text-[10px] uppercase tracking-wider text-slate-400 font-bold block mb-1">WHATSAPP</span>
                <span class="text-sm font-extrabold text-navy">Chat with us instantly</span>
            </a>

            <!-- Owner Card -->
            <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm hover:shadow-md transition-all duration-300 block">
                <div class="text-brandOrange mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                </div>
                <span class="text-[10px] uppercase tracking-wider text-slate-400 font-bold block mb-1">FOUNDER & OWNER</span>
                <span class="text-sm font-extrabold text-navy">Ashok Singh</span>
            </div>

        </div>

        <!-- Middle Row: 3 Email Department Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            
            <!-- Email 1: Owner -->
            <a href="mailto:ashok@omsaiprint.com" class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300 block group">
                <div class="text-brandOrange mb-4 transform group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                </div>
                <span class="text-[10px] uppercase tracking-wider text-slate-400 font-bold block mb-1">DIRECT / OWNER</span>
                <span class="text-xs font-extrabold text-navy break-all">ashok@omsaiprint.com</span>
            </a>

            <!-- Email 2: Sales -->
            <a href="mailto:sales@omsaiprint.com" class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300 block group">
                <div class="text-brandOrange mb-4 transform group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                </div>
                <span class="text-[10px] uppercase tracking-wider text-slate-400 font-bold block mb-1">SALES & QUOTES</span>
                <span class="text-xs font-extrabold text-navy break-all">sales@omsaiprint.com</span>
            </a>

            <!-- Email 3: Info -->
            <a href="mailto:info@omsaiprint.com" class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300 block group">
                <div class="text-brandOrange mb-4 transform group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                </div>
                <span class="text-[10px] uppercase tracking-wider text-slate-400 font-bold block mb-1">GENERAL INFO</span>
                <span class="text-xs font-extrabold text-navy break-all">info@omsaiprint.com</span>
            </a>

        </div>

        <!-- Bottom Row: Configure Quote Banner -->
        <div class="bg-navy p-8 sm:p-10 rounded-3xl text-white shadow-xl flex flex-col sm:flex-row items-center justify-between gap-6">
            <div class="space-y-2">
                <h3 class="text-xl font-extrabold text-white">Prefer to configure a custom quote?</h3>
                <p class="text-xs sm:text-sm text-slate-300 leading-relaxed max-w-xl">
                    Pick your bottle shape, size, and print colours, and Ashok Singh will tailor a precise quote for your run.
                </p>
            </div>
            <a href="mailto:ashok@omsaiprint.com?subject=Quote%20Request%20-%20Bottle%20Silk-Screen%20Printing&body=Hi%20Om%20Sai%20Print%20Team%2C%0A%0AI%20would%20like%20to%20request%20a%20quote%20for%20bottle%20printing.%20Here%20are%20my%20requirements%3A%0A-%20Bottle%20Capacity%20(ml%2FL)%3A%20%0A-%20Bottle%20Shape%20(Round%2FFlat%2FOval)%3A%20%0A-%20Material%20(HDPE%2FPET%2FPP)%3A%20%0A-%20Number%20of%20Print%20Colours%3A%20%0A-%20Estimated%20Order%20Quantity%3A%20%0A%0AThank%20you." class="bg-brandOrange hover:opacity-90 text-white px-8 py-4 rounded-full font-bold text-xs sm:text-sm transition shadow-lg shrink-0 flex items-center space-x-2 text-center">
                <span>Configure Your Bottle & Request a Quote</span>
                <span>&rarr;</span>
            </a>
        </div>

    </div>
</section>

@endsection