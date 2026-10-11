@extends('layouts.app')

@section('content')

<!-- 1. Hero Section -->
<section class="bg-navy text-white py-20 px-6">
    <div class="max-w-7xl mx-auto">
        <span class="text-xs uppercase tracking-widest text-brandOrange font-bold block mb-3">
            CONTACT
        </span>
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight leading-tight mb-6 max-w-4xl">
            Let's talk about your bottles.
        </h1>
        <p class="text-base sm:text-lg text-slate-300 max-w-2xl leading-relaxed">
            Reach Ashok Singh directly, or send a message below — every inquiry lands straight in our inbox.
        </p>
    </div>
</section>

<!-- 2. Main Contact Grid Section -->
<section class="py-20 bg-pageBg px-6">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
        
        <!-- Left Column: Info Cards & Quote Banner -->
        <div class="lg:col-span-5 space-y-6">
            
            <!-- 2x2 Contact Info Cards Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                
                <!-- Phone -->
                <a href="tel:+919823086791" class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300 block group">
                    <div class="text-brandOrange mb-4 transform group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    </div>
                    <span class="text-[10px] uppercase tracking-wider text-slate-400 font-bold block mb-1">PHONE</span>
                    <span class="text-sm font-extrabold text-navy">+91 98230 86791</span>
                </a>

                <!-- WhatsApp -->
                <a href="https://wa.me/919823086791?text=Hi%20Om%20Sai%20Print%2C%20I%20would%20like%20to%20inquire%20about%20bottle%20printing." target="_blank" class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300 block group">
                    <div class="text-brandOrange mb-4 transform group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                    </div>
                    <span class="text-[10px] uppercase tracking-wider text-slate-400 font-bold block mb-1">WHATSAPP</span>
                    <span class="text-sm font-extrabold text-navy">Chat with us</span>
                </a>

                <!-- Email -->
                <a href="mailto:ashokimp71@gmail.com" class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm hover:shadow-md hover:-translate-y-1 transition-all duration-300 block group">
                    <div class="text-brandOrange mb-4 transform group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <span class="text-[10px] uppercase tracking-wider text-slate-400 font-bold block mb-1">EMAIL</span>
                    <span class="text-xs font-extrabold text-navy break-all">ashokimp71@gmail.com</span>
                </a>

                <!-- Owner -->
                <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm hover:shadow-md transition-all duration-300 block">
                    <div class="text-brandOrange mb-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    </div>
                    <span class="text-[10px] uppercase tracking-wider text-slate-400 font-bold block mb-1">OWNER</span>
                    <span class="text-sm font-extrabold text-navy">Ashok Singh</span>
                </div>

            </div>

            <!-- Prefer to Configure a Quote Card -->
            <div class="bg-navy p-8 rounded-3xl text-white shadow-lg space-y-4">
                <h3 class="text-lg font-extrabold text-white">Prefer to configure a quote?</h3>
                <p class="text-xs text-slate-300 leading-relaxed">
                    Pick your shape, size and colours and we will tailor it.
                </p>
                <a href="{{ url('/#quote') }}" class="inline-block bg-brandOrange hover:opacity-90 text-white px-6 py-2.5 rounded-full text-xs font-semibold transition shadow-md">
                    Request a Quote
                </a>
            </div>

        </div>

        <!-- Right Column: Send Us a Message Form -->
        <div class="lg:col-span-7 bg-white p-8 sm:p-10 rounded-3xl border border-slate-200/80 shadow-sm">
            <h2 class="text-2xl font-extrabold text-navy mb-6">Send us a message</h2>
            
            <form action="#" method="POST" class="space-y-6">
                @csrf
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs font-bold text-navy mb-2">Name *</label>
                        <input type="text" required placeholder="Your name" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-brandOrange transition">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-navy mb-2">Company</label>
                        <input type="text" placeholder="Company" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-brandOrange transition">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs font-bold text-navy mb-2">Email *</label>
                        <input type="email" required placeholder="you@company.com" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-brandOrange transition">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-navy mb-2">Phone</label>
                        <input type="tel" placeholder="+91..." class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-brandOrange transition">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-navy mb-2">Message</label>
                    <textarea rows="4" placeholder="How can we help?" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-brandOrange transition"></textarea>
                </div>

                <button type="submit" class="bg-brandOrange hover:opacity-90 text-white font-semibold px-8 py-3.5 rounded-full text-xs transition shadow-md flex items-center space-x-2">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/></svg>
                    <span>Send Message</span>
                </button>
            </form>
        </div>

    </div>
</section>

@endsection