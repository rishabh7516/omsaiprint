@extends('layouts.app')

@section('content')

<!-- 1. Hero Section -->
<section class="bg-navy text-white py-20 px-6">
    <div class="max-w-7xl mx-auto">
        <span class="text-xs uppercase tracking-widest text-brandOrange font-bold block mb-3">
            PRODUCT GALLERY
        </span>
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight leading-tight mb-6 max-w-4xl">
            Bottles we've brought to life.
        </h1>
        <p class="text-base sm:text-lg text-slate-300 max-w-2xl leading-relaxed">
            Explore our screen printing work across all 6 industry sectors. Filter by sector or bottle shape to see precise decoration, measurement scales, and high-opacity prints.
        </p>
    </div>
</section>

<!-- 2. Gallery Section with Interactive Filters & Hover Effects -->
<section class="py-16 bg-white px-6 min-h-[700px]" x-data="{ 
    selectedIndustry: 'All', 
    selectedShape: 'All',
    items: [
        // Sector 1: Cosmetic & Personal Care (2 Products)
        { id: 1, title: 'Shampoo & Conditioner Bottles', industry: 'Cosmetics', shape: 'Round', img: '/images/cosmetic-shampoo.jpg', link: '/industries/cosmetic-personal-care/shampoo-conditioner-bottles' },
        { id: 2, title: 'Serum & Essential Oil Droppers', industry: 'Cosmetics', shape: 'Round', img: '/images/cosmetic-serum.jpg', link: '/industries/cosmetic-personal-care/serum-dropper-bottles' },

        // Sector 2: Baby & Feeding Bottles (5 Products)
        { id: 3, title: 'Graduated Feeding Bottle', industry: 'Baby & Feeding', shape: 'Round', img: '/images/baby-feeding.jpg', link: '/industries/baby-feeding-bottles/graduated-feeding-bottles' },
        { id: 4, title: 'Sippy Cups & Sippers', industry: 'Baby & Feeding', shape: 'Round', img: '/images/baby-sippy.jpg', link: '/industries/baby-feeding-bottles/sippy-cups-sippers' },
        { id: 5, title: 'Ergonomic Grip Nursing Bottle', industry: 'Baby & Feeding', shape: 'Oval', img: '/images/gallery-3.jpg', link: '/industries/baby-feeding-bottles' },
        { id: 6, title: 'Wide Neck Glass Baby Bottle', industry: 'Baby & Feeding', shape: 'Round', img: '/images/gallery-7.jpg', link: '/industries/baby-feeding-bottles' },
        { id: 7, title: 'Toddler Training Tumbler', industry: 'Baby & Feeding', shape: 'Flat', img: '/images/gallery-4.jpg', link: '/industries/baby-feeding-bottles' },

        // Sector 3: Paint Stainers & Tinting Colourants (1 Product)
        { id: 8, title: 'Tinting Stainer Squeeze Bottle', industry: 'Paint Stainers', shape: 'Round', img: '/images/paint-stainer.jpg', link: '/industries/paint-stainers-tinting-colourants/tinting-stainer-squeeze-bottles' },

        // Sector 4: Industrial, Lubricants & Adhesives (1 Product)
        { id: 9, title: 'Engine Oil & Lubricant Bottle', industry: 'Industrial & Lubricants', shape: 'Flat', img: '/images/industrial-oil.jpg', link: '/industries/industrial-lubricants-adhesives/engine-oil-lubricant-bottles' },

        // Sector 5: Food & Household (1 Product)
        { id: 10, title: 'Sauce & Condiment Squeeze Bottle', industry: 'Food & Household', shape: 'Round', img: '/images/food-sauce.jpg', link: '/industries/food-household/sauce-squeeze-bottles' },

        // Sector 6: Machine Photos (1 Product)
        { id: 11, title: 'Techno Robotics Automatic Line', industry: 'Machine Photos', shape: 'Round', img: '/images/machine-line.jpg', link: '/industries/machine-photos/techno-robotics-auto-line' }
    ],
    get filteredItems() {
        return this.items.filter(item => {
            let matchIndustry = (this.selectedIndustry === 'All' || item.industry === this.selectedIndustry);
            let matchShape = (this.selectedShape === 'All' || item.shape === this.selectedShape);
            return matchIndustry && matchShape;
        });
    }
}">
    <div class="max-w-7xl mx-auto">
        
        <!-- Filter Controls Container -->
        <div class="space-y-6 mb-12 border-b border-slate-200 pb-8">
            
            <!-- Industry Filter Row (All 6 Sectors) -->
            <div class="flex flex-wrap items-center gap-3">
                <span class="text-xs uppercase tracking-widest text-slate-400 font-bold w-24">Industry</span>
                <template x-for="ind in ['All', 'Cosmetics', 'Baby & Feeding', 'Paint Stainers', 'Industrial & Lubricants', 'Food & Household', 'Machine Photos']">
                    <button @click="selectedIndustry = ind"
                            :class="selectedIndustry === ind ? 'bg-navy text-white shadow-md' : 'bg-white text-slate-600 border border-slate-200 hover:bg-slate-50'"
                            class="px-4 py-2 rounded-full text-xs font-semibold transition duration-200 cursor-pointer"
                            x-text="ind">
                    </button>
                </template>
            </div>

            <!-- Shape Filter Row -->
            <div class="flex flex-wrap items-center gap-3">
                <span class="text-xs uppercase tracking-widest text-slate-400 font-bold w-24">Shape</span>
                <template x-for="shp in ['All', 'Round', 'Flat', 'Oval']">
                    <button @click="selectedShape = shp"
                            :class="selectedShape === shp ? 'bg-navy text-white shadow-md' : 'bg-white text-slate-600 border border-slate-200 hover:bg-slate-50'"
                            class="px-5 py-2 rounded-full text-xs font-semibold transition duration-200 cursor-pointer"
                            x-text="shp">
                    </button>
                </template>
            </div>

        </div>

        <!-- Gallery Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <template x-for="item in filteredItems" :key="item.id">
                <a :href="item.link" class="group relative rounded-3xl overflow-hidden bg-slate-100 border border-slate-200 shadow-sm hover:shadow-2xl transition-all duration-500 h-[380px] flex flex-col justify-end">
                    
                    <!-- Background Product Image with Hover Zoom -->
                    <div class="absolute inset-0 z-0 overflow-hidden bg-slate-200">
                        <img :src="item.img" :alt="item.title" class="w-full h-full object-cover object-center group-hover:scale-110 transition-transform duration-700">
                    </div>

                    <!-- Subtle Overlay Gradient on Hover -->
                    <div class="absolute inset-0 bg-gradient-to-t from-navy/90 via-navy/30 to-transparent opacity-80 group-hover:opacity-95 transition-opacity duration-300 z-10"></div>

                    <!-- Orange Action Badge Top Right -->
                    <div class="absolute top-4 right-4 z-20 w-8 h-8 rounded-full bg-brandOrange text-white flex items-center justify-center font-bold shadow-md transform group-hover:scale-110 group-hover:rotate-90 transition-all duration-300">
                        +
                    </div>

                    <!-- Card Content Details at Bottom -->
                    <div class="relative z-20 p-6 transform group-hover:-translate-y-1 transition-transform duration-300">
                        <h3 class="font-bold text-white text-lg mb-1" x-text="item.title"></h3>
                        <p class="text-xs text-slate-300 font-medium" x-text="item.industry + ' · ' + item.shape"></p>
                    </div>

                </a>
            </template>
        </div>

        <!-- Empty State if no results match -->
        <div x-show="filteredItems.length === 0" class="text-center py-24 text-slate-400">
            <p class="text-base font-medium">No bottle items found matching your selected filter criteria.</p>
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