<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OM SAI PRINT - Silk-Screen Bottle Printing</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        navy: '#1F3A5F',
                        brandOrange: '#CE5A15',
                        pageBg: '#F8FAFC',
                    },
                    animation: {
                        marquee: 'marquee 25s linear infinite',
                    },
                    keyframes: {
                        marquee: {
                            '0%': { transform: 'translateX(0%)' },
                            '100%': { transform: 'translateX(-50%)' },
                        }
                    }
                }
            }
        }
    </script>
    <script defer src="[https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js](https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js)"></script>
    <style>
        .marquee-container {
            display: flex;
            width: 200%;
        }
    </style>
</head>
<body class="bg-pageBg text-slate-700 font-sans antialiased">

    <!-- Header Navigation -->
    <header class="sticky top-0 z-50 bg-white border-b border-slate-200 shadow-sm">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <div class="w-9 h-9 rounded-full bg-slate-200 flex items-center justify-center font-bold text-navy text-xs">OSP</div>
                <div>
                    <a href="{{ url('/') }}" class="font-extrabold tracking-wide uppercase text-navy text-sm block">Om Sai Print</a>
                    <p class="text-[10px] tracking-wider uppercase text-slate-500 font-semibold">Silk-Screen Bottle Printing</p>
                </div>
            </div>
            
<nav class="hidden md:flex space-x-8 text-sm font-semibold text-slate-600">
    <a href="{{ url('/') }}" 
       class="hover:text-navy transition pb-1 {{ Request::is('/') ? 'text-navy border-b-2 border-brandOrange' : '' }}">
        Home
    </a>
    <a href="{{ url('/the-machine') }}" 
       class="hover:text-navy transition pb-1 {{ Request::is('the-machine') ? 'text-navy border-b-2 border-brandOrange' : '' }}">
        The Machine
    </a>
    <a href="{{ url('/#gallery') }}" class="hover:text-navy transition pb-1">Gallery</a>
    <a href="{{ url('/#industries') }}" class="hover:text-navy transition pb-1">Industries</a>
    <a href="{{ url('/#quality') }}" class="hover:text-navy transition pb-1">Quality</a>
    <a href="{{ url('/#about') }}" class="hover:text-navy transition pb-1">About</a>
    <a href="{{ url('/#quote') }}" class="hover:text-navy transition pb-1">Contact</a>
</nav>

            <a href="{{ url('/#quote') }}" class="bg-brandOrange hover:opacity-90 text-white px-5 py-2.5 rounded-full text-sm font-semibold transition shadow-sm">
                Request a Quote
            </a>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-navy text-white py-16 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-10">
            <div>
                <h3 class="font-extrabold text-lg mb-3 tracking-wide">OM SAI PRINT</h3>
                <p class="text-xs text-slate-300 leading-relaxed">The fully automatic silk-screen printing partner for bottle manufacturers and brands. Decorating plastic bottles since 2002.</p>
            </div>
            <div>
                <h4 class="text-xs uppercase tracking-widest text-brandOrange font-bold mb-4">EXPLORE</h4>
                <ul class="space-y-2 text-xs text-slate-300">
                    <li><a href="{{ url('/') }}" class="hover:underline">Home</a></li>
                    <li><a href="{{ url('/the-machine') }}" class="hover:underline">The Machine</a></li>
                    <li><a href="{{ url('/#gallery') }}" class="hover:underline">Gallery</a></li>
                    <li><a href="{{ url('/#industries') }}" class="hover:underline">Industries</a></li>
                    <li><a href="{{ url('/#quality') }}" class="hover:underline">Quality</a></li>
                    <li><a href="{{ url('/#about') }}" class="hover:underline">About</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-xs uppercase tracking-widest text-brandOrange font-bold mb-4">CONTACT</h4>
                <p class="text-xs text-slate-300 font-medium">Owner</p>
                <p class="text-sm font-bold text-white mb-2">Ashok Singh</p>
                <p class="text-xs text-slate-300 mb-1">+91 98230 86791</p>
                <p class="text-xs text-slate-300 mb-1">ashokimp71@gmail.com</p>
                <p class="text-xs text-slate-300">WhatsApp us</p>
            </div>
            <div>
                <h4 class="text-xs uppercase tracking-widest text-brandOrange font-bold mb-4">GET STARTED</h4>
                <p class="text-xs text-slate-300 mb-4">Configure your bottle and request a tailored quote.</p>
                <a href="{{ url('/#quote') }}" class="inline-block bg-brandOrange hover:opacity-90 text-white px-5 py-2.5 rounded-full text-xs font-semibold transition">
                    Request a Quote &rarr;
                </a>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-6 mt-12 pt-6 border-t border-slate-700/60 text-[11px] text-slate-400 flex flex-col md:flex-row justify-between">
            <p>© 2026 Om Sai Print. All rights reserved.</p>
            <p>Established 2002 • Automatic Techno Robotics silk-screen line</p>
        </div>
    </footer>

    <!-- Fixed Floating WhatsApp Button (Bottom Right) -->
    <a href="https://wa.me/919823086791?text=Hi%20Om%20Sai%20Print%2C%20I%20would%20like%20to%20inquire%20about%20bottle%20printing." target="_blank" class="fixed bottom-6 right-6 z-50 bg-emerald-500 hover:bg-emerald-600 text-white px-4 py-2.5 rounded-full font-semibold text-xs shadow-xl flex items-center space-x-2 transition">
        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
        <span>WhatsApp us</span>
    </a>

</body>
</html>