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
                        brand: '#ea580c',
                        darkBg: '#0f172a',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-slate-900 text-slate-100 font-sans antialiased">

    <!-- Header Navigation -->
    <header class="sticky top-0 z-50 bg-slate-900/90 backdrop-blur border-b border-slate-800">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <div class="w-8 h-8 rounded-full bg-slate-700 flex items-center justify-center text-xs font-bold">3D</div>
                <div>
                    <h1 class="font-bold tracking-wide uppercase text-sm">Om Sai Print</h1>
                    <p class="text-xs text-slate-400">Silk-Screen Bottle Printing</p>
                </div>
            </div>
            
            <nav class="hidden md:flex space-x-8 text-sm font-medium text-slate-300">
                <a href="#home" class="hover:text-white transition">Home</a>
                <a href="#machine" class="hover:text-white transition">The Machine</a>
                <a href="#gallery" class="hover:text-white transition">Gallery</a>
                <a href="#industries" class="hover:text-white transition">Industries</a>
                <a href="#quality" class="hover:text-white transition">Quality</a>
                <a href="#about" class="hover:text-white transition">About</a>
                <a href="#contact" class="hover:text-white transition">Contact</a>
            </nav>

            <a href="#quote" class="bg-brand hover:bg-orange-600 text-white px-5 py-2.5 rounded-full text-sm font-semibold transition">
                Request a Quote
            </a>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-slate-950 border-t border-slate-800 py-12">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <h3 class="font-bold text-lg mb-2">OM SAI PRINT</h3>
                <p class="text-sm text-slate-400">The fully automatic silk-screen printing partner for bottle manufacturers and brands. Decorating plastic bottles since 2018.</p>
            </div>
            <div>
                <h4 class="text-xs uppercase tracking-wider text-slate-400 mb-3">Contact</h4>
                <p class="text-sm text-slate-300">Owner: Ashok Singh</p>
                <p class="text-sm text-slate-300">+91 98230 86791</p>
                <p class="text-sm text-slate-300">ashokimp71@gmail.com</p>
            </div>
            <div>
                <h4 class="text-xs uppercase tracking-wider text-slate-400 mb-3">Get Started</h4>
                <a href="#quote" class="inline-block bg-brand hover:bg-orange-600 text-white px-6 py-2.5 rounded-md text-sm font-semibold transition">
                    Request a Quote
                </a>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-6 mt-8 pt-6 border-t border-slate-900 text-xs text-slate-500 flex justify-between">
            <p>© 2026 Om Sai Print. All rights reserved.</p>
            <p>Established 2018 • Automatic Techno Robotics line</p>
        </div>
    </footer>

</body>
</html>