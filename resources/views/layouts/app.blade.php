<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OM SAI PRINT - Silk-Screen Bottle Printing</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        navy: '#1F3A5F',
                        brandOrange: '#CE5A15',
                        pageBg: '#F8FAFC',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-pageBg text-slate-700 font-sans antialiased" x-data="{ quoteModalOpen: false }">

<!-- Header Navigation Bar -->
<header class="sticky top-0 z-50 bg-white border-b border-slate-200 shadow-sm" x-data="{ mobileMenuOpen: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            
            <!-- Logo & Brand Name -->
            <a href="{{ url('/') }}" class="flex items-center space-x-3">
                <div class="w-10 h-10 rounded-full bg-brandOrange flex items-center justify-center font-black text-white text-xs shadow-md">
                    OSP
                </div>
                <div>
                    <span class="font-black text-lg text-navy tracking-wide block leading-none">OM SAI PRINT</span>
                    <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest block mt-0.5">Silk-Screen Bottle Printing</span>
                </div>
            </a>

            <!-- Desktop Navigation Links (hidden on mobile) -->
            <nav class="hidden md:flex items-center space-x-8">
                <a href="{{ url('/') }}" 
                   class="relative py-2 text-sm font-semibold transition {{ request()->is('/') ? 'text-brandOrange' : 'text-slate-600 hover:text-navy' }}">
                    Home
                    @if(request()->is('/'))
                        <span class="absolute bottom-0 left-0 w-full h-[2px] bg-brandOrange rounded-full"></span>
                    @endif
                </a>

                <a href="{{ url('/the-machine') }}" 
                   class="relative py-2 text-sm font-semibold transition {{ request()->is('the-machine') ? 'text-brandOrange' : 'text-slate-600 hover:text-navy' }}">
                    The Machine
                    @if(request()->is('the-machine'))
                        <span class="absolute bottom-0 left-0 w-full h-[2px] bg-brandOrange rounded-full"></span>
                    @endif
                </a>

                <a href="{{ url('/gallery') }}" 
                   class="relative py-2 text-sm font-semibold transition {{ request()->is('gallery') ? 'text-brandOrange' : 'text-slate-600 hover:text-navy' }}">
                    Gallery
                    @if(request()->is('gallery'))
                        <span class="absolute bottom-0 left-0 w-full h-[2px] bg-brandOrange rounded-full"></span>
                    @endif
                </a>

                <a href="{{ route('industries.index') }}" 
                   class="relative py-2 text-sm font-semibold transition {{ request()->is('industries*') ? 'text-brandOrange' : 'text-slate-600 hover:text-navy' }}">
                    Industries
                    @if(request()->is('industries*'))
                        <span class="absolute bottom-0 left-0 w-full h-[2px] bg-brandOrange rounded-full"></span>
                    @endif
                </a>

                <a href="{{ url('/quality') }}" 
                   class="relative py-2 text-sm font-semibold transition {{ request()->is('quality') ? 'text-brandOrange' : 'text-slate-600 hover:text-navy' }}">
                    Quality
                    @if(request()->is('quality'))
                        <span class="absolute bottom-0 left-0 w-full h-[2px] bg-brandOrange rounded-full"></span>
                    @endif
                </a>

                <a href="{{ url('/about') }}" 
                   class="relative py-2 text-sm font-semibold transition {{ request()->is('about') ? 'text-brandOrange' : 'text-slate-600 hover:text-navy' }}">
                    About
                    @if(request()->is('about'))
                        <span class="absolute bottom-0 left-0 w-full h-[2px] bg-brandOrange rounded-full"></span>
                    @endif
                </a>

                <a href="{{ url('/contact') }}" 
                   class="relative py-2 text-sm font-semibold transition {{ request()->is('contact') ? 'text-brandOrange' : 'text-slate-600 hover:text-navy' }}">
                    Contact
                    @if(request()->is('contact'))
                        <span class="absolute bottom-0 left-0 w-full h-[2px] bg-brandOrange rounded-full"></span>
                    @endif
                </a>
            </nav>

            <!-- Right Desktop Action Button -->
            <div class="hidden lg:flex items-center">
                <a href="{{ url('/#contact') }}" class="bg-brandOrange hover:opacity-90 text-white text-xs font-bold px-5 py-2.5 rounded-full transition shadow-md">
                    Request a Quote
                </a>
            </div>

            <!-- Mobile Hamburger Button -->
            <div class="flex items-center md:hidden">
                <button @click="mobileMenuOpen = !mobileMenuOpen" 
                        type="button" 
                        class="p-2.5 rounded-xl text-slate-700 hover:text-navy hover:bg-slate-100 focus:outline-none transition" 
                        aria-label="Toggle Navigation Menu">
                    <!-- Hamburger Icon -->
                    <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <!-- Close (X) Icon -->
                    <svg x-show="mobileMenuOpen" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

        </div>
    </div>

    <!-- Mobile Dropdown Menu -->
    <div x-show="mobileMenuOpen" 
         x-cloak
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         @click.away="mobileMenuOpen = false"
         class="md:hidden bg-white border-b border-slate-200 px-4 pt-3 pb-6 space-y-3 shadow-xl">
        
        <a href="{{ url('/') }}" 
           class="block px-4 py-2.5 rounded-xl text-sm font-bold {{ request()->is('/') ? 'bg-orange-50 text-brandOrange' : 'text-slate-700 hover:bg-slate-50' }}">
            Home
        </a>

        <a href="{{ url('/the-machine') }}" 
           class="block px-4 py-2.5 rounded-xl text-sm font-bold {{ request()->is('the-machine') ? 'bg-orange-50 text-brandOrange' : 'text-slate-700 hover:bg-slate-50' }}">
            The Machine
        </a>

        <a href="{{ url('/gallery') }}" 
           class="block px-4 py-2.5 rounded-xl text-sm font-bold {{ request()->is('gallery') ? 'bg-orange-50 text-brandOrange' : 'text-slate-700 hover:bg-slate-50' }}">
            Gallery
        </a>

        <a href="{{ route('industries.index') }}" 
           class="block px-4 py-2.5 rounded-xl text-sm font-bold {{ request()->is('industries*') ? 'bg-orange-50 text-brandOrange' : 'text-slate-700 hover:bg-slate-50' }}">
            Industries
        </a>

        <a href="{{ url('/quality') }}" 
           class="block px-4 py-2.5 rounded-xl text-sm font-bold {{ request()->is('quality') ? 'bg-orange-50 text-brandOrange' : 'text-slate-700 hover:bg-slate-50' }}">
            Quality
        </a>

        <a href="{{ url('/about') }}" 
           class="block px-4 py-2.5 rounded-xl text-sm font-bold {{ request()->is('about') ? 'bg-orange-50 text-brandOrange' : 'text-slate-700 hover:bg-slate-50' }}">
            About Us
        </a>

        <a href="{{ url('/contact') }}" 
           class="block px-4 py-2.5 rounded-xl text-sm font-bold {{ request()->is('contact') ? 'bg-orange-50 text-brandOrange' : 'text-slate-700 hover:bg-slate-50' }}">
            Contact
        </a>

        <div class="pt-2">
            <a href="{{ url('/#contact') }}" class="block text-center bg-brandOrange text-white text-sm font-bold py-3 rounded-xl shadow-md">
                Request a Quote
            </a>
        </div>
    </div>
</header>

    <!-- Main Page Content -->
    <main>
        @yield('content')
    </main>

<!-- Footer Section -->
<footer class="bg-navy text-white pt-16 pb-8 border-t border-slate-800 px-6">
    <div class="max-w-7xl mx-auto">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 lg:gap-12 pb-12 border-b border-slate-800/80">
            
            <!-- Column 1: Brand Info -->
            <div class="lg:col-span-4 space-y-4">
                <div class="flex items-center space-x-3">
                    <div class="w-8 h-8 rounded-full bg-brandOrange flex items-center justify-center font-black text-white text-xs">
                        OSP
                    </div>
                    <span class="font-extrabold text-lg text-white tracking-wide">OM SAI PRINT</span>
                </div>
                <p class="text-xs text-slate-300 leading-relaxed max-w-sm">
                    The fully automatic silk-screen printing partner for bottle manufacturers and brands. Decorating plastic bottles with precision since 2002.
                </p>
                <div class="pt-2">
                    <span class="inline-flex items-center text-[11px] font-semibold text-brandOrange bg-brandOrange/10 border border-brandOrange/20 px-3 py-1 rounded-full">
                        Techno Robotics Automatic Line
                    </span>
                </div>
            </div>

            <!-- Column 2: Navigation Links -->
            <div class="lg:col-span-3 space-y-3">
                <h3 class="text-xs font-bold uppercase tracking-widest text-brandOrange">EXPLORE</h3>
                <ul class="space-y-2 text-xs font-medium text-slate-300">
                    <li><a href="{{ url('/') }}" class="hover:text-white transition">Home</a></li>
                    <li><a href="{{ url('/the-machine') }}" class="hover:text-white transition">The Machine</a></li>
                    <li><a href="{{ url('/gallery') }}" class="hover:text-white transition">Gallery</a></li>
                    <li><a href="{{ route('industries.index') }}" class="hover:text-white transition">Industries</a></li>
                    <li><a href="{{ url('/quality') }}" class="hover:text-white transition">Quality</a></li>
                    <li><a href="{{ url('/about') }}" class="hover:text-white transition">About Us</a></li>
                    <li><a href="{{ url('/contact') }}" class="hover:text-white transition">Contact Us</a></li>
                </ul>
            </div>

            <!-- Column 3: Direct Contact Details -->
            <div class="lg:col-span-3 space-y-3">
                <h3 class="text-xs font-bold uppercase tracking-widest text-brandOrange">CONTACT</h3>
                <div class="text-xs space-y-2 text-slate-300 leading-relaxed">
                    <p class="text-white font-semibold">Ashok Singh <span class="text-slate-400 font-normal">(Owner)</span></p>
                    <p>
                        <a href="tel:+919823086791" class="hover:text-brandOrange transition flex items-center space-x-2">
                            <span>📞 +91 98230 86791</span>
                        </a>
                    </p>
                    <p>
                        <a href="mailto:ashokimp71@gmail.com" class="hover:text-brandOrange transition flex items-center space-x-2">
                            <span>✉️ ashokimp71@gmail.com</span>
                        </a>
                    </p>
                    <p>
                        <a href="https://wa.me/919823086791?text=Hi%20Om%20Sai%20Print%2C%20I%20would%20like%20to%20discuss%20bottle%20printing." target="_blank" class="text-brandOrange font-semibold hover:underline flex items-center space-x-1">
                            <span>💬 Chat on WhatsApp</span>
                        </a>
                    </p>
                </div>
            </div>

            <!-- Column 4: Quick Action -->
            <div class="lg:col-span-2 space-y-3">
                <h3 class="text-xs font-bold uppercase tracking-widest text-brandOrange">GET STARTED</h3>
                <p class="text-xs text-slate-300 leading-relaxed">
                    Configure your bottle parameters and request a custom quote.
                </p>
                <div class="pt-1">
                    <a href="{{ url('/#contact') }}" class="inline-flex items-center justify-center bg-brandOrange hover:opacity-90 text-white text-xs font-bold px-5 py-2.5 rounded-full transition shadow-md space-x-1">
                        <span>Request a Quote</span>
                        <span>&rarr;</span>
                    </a>
                </div>
            </div>

        </div>

        <!-- Bottom Copyright Row -->
        <div class="pt-8 flex flex-col sm:flex-row items-center justify-between text-[11px] text-slate-400 gap-4">
            <p>&copy; {{ date('Y') }} Om Sai Print. All rights reserved.</p>
            <p class="text-slate-500">Established 2002 &middot; Automatic Techno Robotics Silk-Screen Line</p>
        </div>

    </div>
</footer>

    <!-- Fixed Floating WhatsApp Button (Bottom Right) -->
    <a href="https://wa.me/919823086791?text=Hi%20Om%20Sai%20Print%2C%20I%20would%20like%20to%20inquire%20about%20bottle%20printing." target="_blank" class="fixed bottom-6 right-6 z-40 bg-emerald-500 hover:bg-emerald-600 text-white px-4 py-2.5 rounded-full font-semibold text-xs shadow-xl flex items-center space-x-2 transition">
        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
        <span>WhatsApp us</span>
    </a>

    <!-- ========================================== -->
    <!-- REQUEST A QUOTE MODAL (Exact Matching UI)  -->
    <!-- ========================================== -->
    <div x-show="quoteModalOpen" 
         x-cloak
         class="fixed inset-0 z-50 overflow-y-auto flex items-center justify-center p-4 bg-navy/80 backdrop-blur-sm"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0">

        <div class="relative w-full max-w-2xl bg-white rounded-2xl shadow-2xl overflow-hidden border border-slate-200 my-8"
             @click.away="quoteModalOpen = false">
            
            <!-- Modal Header -->
            <div class="bg-navy text-white px-8 py-6 flex justify-between items-center">
                <div>
                    <span class="text-[10px] uppercase tracking-widest text-brandOrange font-bold block">CONFIGURE YOUR BOTTLE</span>
                    <h2 class="text-xl font-extrabold text-white">Request a Quote</h2>
                </div>
                <button @click="quoteModalOpen = false" class="text-slate-400 hover:text-white transition text-2xl font-light cursor-pointer">
                    &times;
                </button>
            </div>

            <!-- Modal Form Body -->
            <form action="#" method="POST" class="p-8 space-y-5">
                @csrf

                <!-- Row 1: Name & Company -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-navy mb-1.5">Name *</label>
                        <input type="text" required placeholder="Your name" class="w-full bg-slate-50 border border-slate-200 rounded-lg px-3.5 py-2.5 text-xs text-slate-700 focus:outline-none focus:border-brandOrange transition">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-navy mb-1.5">Company</label>
                        <input type="text" placeholder="Company / brand" class="w-full bg-slate-50 border border-slate-200 rounded-lg px-3.5 py-2.5 text-xs text-slate-700 focus:outline-none focus:border-brandOrange transition">
                    </div>
                </div>

                <!-- Row 2: Email & Phone -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-navy mb-1.5">Email *</label>
                        <input type="email" required placeholder="you@company.com" class="w-full bg-slate-50 border border-slate-200 rounded-lg px-3.5 py-2.5 text-xs text-slate-700 focus:outline-none focus:border-brandOrange transition">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-navy mb-1.5">Phone</label>
                        <input type="tel" placeholder="+91..." class="w-full bg-slate-50 border border-slate-200 rounded-lg px-3.5 py-2.5 text-xs text-slate-700 focus:outline-none focus:border-brandOrange transition">
                    </div>
                </div>

                <!-- Row 3: Bottle Shape & Bottle Size -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-navy mb-1.5">Bottle shape</label>
                        <select class="w-full bg-slate-50 border border-slate-200 rounded-lg px-3.5 py-2.5 text-xs text-slate-600 focus:outline-none focus:border-brandOrange transition">
                            <option value="">Select shape</option>
                            <option value="Round">Round</option>
                            <option value="Flat">Flat</option>
                            <option value="Oval">Oval</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-navy mb-1.5">Bottle size</label>
                        <select class="w-full bg-slate-50 border border-slate-200 rounded-lg px-3.5 py-2.5 text-xs text-slate-600 focus:outline-none focus:border-brandOrange transition">
                            <option value="">20 ml – 1 L</option>
                            <option value="20ml-100ml">20 ml – 100 ml</option>
                            <option value="100ml-500ml">100 ml – 500 ml</option>
                            <option value="500ml-1L">500 ml – 1 L</option>
                        </select>
                    </div>
                </div>

                <!-- Row 4: Industry & No. of Colours -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-navy mb-1.5">Industry</label>
                        <select class="w-full bg-slate-50 border border-slate-200 rounded-lg px-3.5 py-2.5 text-xs text-slate-600 focus:outline-none focus:border-brandOrange transition">
                            <option value="">Select industry</option>
                            <option value="Cosmetics">Cosmetics & Personal Care</option>
                            <option value="Pharma">Pharma & Feeding Bottles</option>
                            <option value="Agrochemical">Agrochemical</option>
                            <option value="Adhesives">Adhesives & Silicone</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-navy mb-1.5">No. of colours</label>
                        <select class="w-full bg-slate-50 border border-slate-200 rounded-lg px-3.5 py-2.5 text-xs text-slate-600 focus:outline-none focus:border-brandOrange transition">
                            <option value="">Colours</option>
                            <option value="1">1 Colour</option>
                            <option value="2">2 Colours</option>
                            <option value="3">3 Colours</option>
                            <option value="4+">4+ Colours</option>
                        </select>
                    </div>
                </div>

                <!-- Row 5: Estimated Quantity -->
                <div>
                    <label class="block text-xs font-bold text-navy mb-1.5">Estimated quantity / run</label>
                    <input type="text" placeholder="e.g. 50,000 units / month" class="w-full bg-slate-50 border border-slate-200 rounded-lg px-3.5 py-2.5 text-xs text-slate-700 focus:outline-none focus:border-brandOrange transition">
                </div>

                <!-- Row 6: Message -->
                <div>
                    <label class="block text-xs font-bold text-navy mb-1.5">Message</label>
                    <textarea rows="3" placeholder="Tell us about your artwork, timeline or samples." class="w-full bg-slate-50 border border-slate-200 rounded-lg px-3.5 py-2.5 text-xs text-slate-700 focus:outline-none focus:border-brandOrange transition"></textarea>
                </div>

                <!-- Row 7: Action Buttons -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
                    <button type="submit" class="bg-brandOrange hover:opacity-90 text-white font-semibold py-3 rounded-full text-xs transition shadow-md flex items-center justify-center space-x-2">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/></svg>
                        <span>Send Request</span>
                    </button>
                    <a href="https://wa.me/919823086791?text=Hi%20Om%20Sai%20Print%2C%20I%20would%20like%20a%20quote%20for%20bottle%20printing." target="_blank" class="bg-white hover:bg-slate-50 text-slate-700 font-semibold py-3 rounded-full text-xs border border-slate-300 transition shadow-sm flex items-center justify-center space-x-2">
                        <svg class="w-4 h-4 fill-emerald-500" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                        <span>WhatsApp</span>
                    </a>
                </div>

                <!-- Footer disclaimer -->
                <p class="text-center text-[10px] text-slate-400 font-medium pt-1">
                    No pricing shown online — we tailor every quote to your run.
                </p>

            </form>

        </div>
    </div>

</body>
</html>