<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndustryController extends Controller
{
    private function getSectors()
    {
        return [
            'cosmetic-personal-care' => [
                'name' => 'Cosmetic & Personal Care',
                'description' => 'Premium multi-colour decoration for shampoo, lotion, serum, and beauty containers that must look flawless on the shelf.',
                'image' => '/images/industry-cosmetics.jpg',
                'products' => [
                    'shampoo-conditioner-bottles' => [
                        'name' => 'Shampoo & Conditioner Bottles — Screen Printed',
                        'subtitle' => 'HDPE & PET squeeze bottles · Water & shower-chemical resistant print',
                        'category' => 'Cosmetic & Personal Care',
                        'tag' => 'up to 6 colours',
                        'image' => '/images/cosmetic-shampoo.jpg',
                        'image_caption' => 'product photo (front + back panel)',
                        'what_it_is' => 'High-precision silk-screen printing on HDPE and PET shampoo bottles with full front branding and back-panel usage instructions.',
                        'how_we_printed_it' => 'Flame-treated online for strong surface adhesion on smooth coloured plastic, printed with high-opacity inks, and LED-UV cured for a water and scuff-proof finish.',
                        'callout_text' => 'Planning a personal care range? We deliver sharp, durable front and back branding that stands up to daily shower use.',
                        'specs' => [
                            'Bottle type' => 'Round & Flat Shampoo / Lotion bottle',
                            'Capacity' => '20 ml - 1 L',
                            'Bottle colour' => 'Custom opaque / transparent',
                            'Print colours' => 'Up to 6 colours (multi-colour registration)',
                            'Print method' => 'Fully automatic silk-screen printing',
                            'Print area' => 'Front + Back panels / 360° wrap',
                            'Surface prep' => 'Online flame treatment',
                            'Curing & finish' => 'IR + LED-UV, water & shower resistant',
                            'Quality checks' => 'Inline leak testing, tight registration check',
                            'Best suited for' => 'Shampoo, hair wash, body wash, lotion'
                        ]
                    ],
                    'serum-dropper-bottles' => [
                        'name' => 'Serum & Essential Oil Droppers — Screen Printed',
                        'subtitle' => 'Glass & Acrylic Dropper Bottles · Fine-line precision print',
                        'category' => 'Cosmetic & Personal Care',
                        'tag' => 'up to 6 colours',
                        'image' => '/images/cosmetic-serum.jpg',
                        'image_caption' => 'product photo (cylindrical glass print)',
                        'what_it_is' => 'Luxury screen printing for glass and acrylic serum droppers with fine-line text and elegant metallic or solid opaque branding.',
                        'how_we_printed_it' => 'Printed using high-precision registration controls to guarantee ultra-crisp typography even on tiny 10ml to 50ml cylindrical bottles.',
                        'callout_text' => 'Elevate your skincare brand with ultra-clean, smudge-proof print on glass and acrylic droppers.',
                        'specs' => [
                            'Bottle type' => 'Glass & Acrylic Dropper bottle',
                            'Capacity' => '10 ml - 100 ml',
                            'Bottle colour' => 'Amber / Frosted / Clear Glass',
                            'Print colours' => 'Up to 6 colours',
                            'Print method' => 'Automatic precision screen printing',
                            'Print area' => 'Cylindrical wrap',
                            'Surface prep' => 'Pyrosil / Flame pre-treatment for glass',
                            'Curing & finish' => 'UV cured, chemical & oil resistant',
                            'Quality checks' => '100% visual inspection',
                            'Best suited for' => 'Face serums, essential oils, cosmetic drops'
                        ]
                    ]
                ]
            ],

            'baby-feeding-bottles' => [
                'name' => 'Baby & Feeding Bottles',
                'description' => 'Precise, non-toxic, and ultra-durable printing with accurate measurement and graduation marks.',
                'image' => '/images/industry-baby.jpg',
                'products' => [
                    'graduated-feeding-bottles' => [
                        'name' => 'Graduated Baby Feeding Bottle — Screen Printed',
                        'subtitle' => 'Polypropylene (PP) & Glass · Non-toxic sterilization-proof ink',
                        'category' => 'Baby & Feeding Bottles',
                        'tag' => 'non-toxic & durable',
                        'image' => '/images/baby-feeding.jpg',
                        'image_caption' => 'product photo (volumetric scale)',
                        'what_it_is' => 'Sterilization-safe volume measurement scales and friendly graphics printed directly onto baby feeding bottles.',
                        'how_we_printed_it' => 'Decorated with certified non-toxic inks engineered to withstand repeated boiling water, microwave, and steam sterilizer cycles without fading.',
                        'callout_text' => 'Designing feeding products? Our prints remain 100% clear and safe through hundreds of steam sterilization cycles.',
                        'specs' => [
                            'Bottle type' => 'Ergonomic PP & Glass feeding bottle',
                            'Capacity' => '120 ml - 330 ml',
                            'Bottle colour' => 'Clear / Translucent',
                            'Print colours' => 'Up to 6 colours',
                            'Print method' => 'Fully automatic silk-screen printing',
                            'Print area' => 'Front graphics + Back volumetric scale',
                            'Surface prep' => 'Flame treatment for polypropylene',
                            'Curing & finish' => 'High-temp thermal + UV cured',
                            'Quality checks' => 'Sterilization scratch test, volume scale check',
                            'Best suited for' => 'Baby feeding bottles, nursing bottles'
                        ]
                    ],
                    'sippy-cups-sippers' => [
                        'name' => 'Sippy Cups & Kids Sippers — Screen Printed',
                        'subtitle' => 'Child-safe multi-colour cartoon & logo prints',
                        'category' => 'Baby & Feeding Bottles',
                        'tag' => 'up to 6 colours',
                        'image' => '/images/baby-sippy.jpg',
                        'image_caption' => 'product photo (360° print)',
                        'what_it_is' => 'Vibrant, high-impact cartoon and logo decoration for children’s training cups and sippers.',
                        'how_we_printed_it' => 'High-opacity food-grade inks flame-treated on round plastic surfaces to prevent peeling or scratching from active handling.',
                        'callout_text' => 'Create bright, child-friendly designs with scratch-proof inks made for active daily use.',
                        'specs' => [
                            'Bottle type' => 'Round plastic sippy cup / tumbler',
                            'Capacity' => '150 ml - 500 ml',
                            'Bottle colour' => 'Assorted bright colors',
                            'Print colours' => 'Up to 6 colours',
                            'Print method' => '360° cylindrical silk-screen printing',
                            'Print area' => 'Full cylindrical body',
                            'Surface prep' => 'Online flame treatment',
                            'Curing & finish' => 'LED-UV cured, saliva & dishwashing safe',
                            'Quality checks' => 'Cross-hatch adhesion testing',
                            'Best suited for' => 'Sippy cups, kids drinkware, training cups'
                        ]
                    ]
                ]
            ],

            'paint-stainers-tinting-colourants' => [
                'name' => 'Paint Stainers & Tinting Colourants',
                'description' => 'High-contrast, solvent-resistant printing designed to remain clear and legible in harsh environments.',
                'image' => '/images/industry-paint.jpg',
                'products' => [
                    'tinting-stainer-squeeze-bottles' => [
                        'name' => 'Tinting Stainer Squeeze Bottle — Screen Printed',
                        'subtitle' => 'High-density HDPE squeeze bottle · Chemical-resistant print · Dosing scale',
                        'category' => 'Paint Stainers & Tinting Colourants',
                        'tag' => 'up to 6 colours',
                        'image' => '/images/paint-stainer.jpg',
                        'image_caption' => 'product photo (front + back scale)',
                        'what_it_is' => 'A squeeze HDPE stainer bottle decorated for a leading paint & tinting brand with high-precision volumetric measurement scales and front-panel branding.',
                        'how_we_printed_it' => 'A chemical & solvent-resistant high-opacity print on both front and back panels. Flame-treated online for maximum surface adhesion and LED-UV cured for a scratch-proof finish.',
                        'callout_text' => 'Planning a stainer or universal colorant range? We print squeeze bottles with crisp dosing scales and bold brand typography that survives chemical handling.',
                        'specs' => [
                            'Bottle type' => 'Round HDPE squeeze stainer bottle',
                            'Capacity' => '50 ml - 500 ml',
                            'Bottle colour' => 'White / Translucent HDPE',
                            'Print colours' => 'This piece: 2 · capability: up to 6',
                            'Print method' => 'Fully automatic silk-screen printing',
                            'Print area' => '360° cylindrical / Front + Back panels',
                            'Surface prep' => 'Online flame treatment',
                            'Curing & finish' => 'IR + LED-UV, solvent & chemical resistant',
                            'Quality checks' => 'Inline leak testing, precise volume scale alignment',
                            'Best suited for' => 'Paint stainers, universal colorants, tinting dyes'
                        ]
                    ],
                    'industrial-colorant-containers' => [
                        'name' => 'Industrial Colorant Container — Screen Printed',
                        'subtitle' => 'Heavy-duty container · Chemical hazard markings · Brand typography',
                        'category' => 'Paint Stainers & Tinting Colourants',
                        'tag' => 'up to 6 colours',
                        'image' => '/images/paint-container.jpg',
                        'image_caption' => 'product photo (360° wrap)',
                        'what_it_is' => 'A 1-Litre heavy-duty PET/HDPE container decorated with sharp safety information and vibrant brand identity.',
                        'how_we_printed_it' => 'Direct surface silk-screen printing with high opacity solvent inks, flame-treated and cured with LED-UV for industrial resistance.',
                        'callout_text' => 'Need industrial-grade container printing? We deliver long-lasting direct screen printing that stays clear under harsh factory conditions.',
                        'specs' => [
                            'Bottle type' => 'Heavy-duty PET / HDPE Container',
                            'Capacity' => '500 ml - 1 L',
                            'Bottle colour' => 'Opaque / Natural',
                            'Print colours' => 'This piece: 3 colours · capability: up to 6',
                            'Print method' => 'Fully automatic silk-screen printing',
                            'Print area' => 'Full-wrap body',
                            'Surface prep' => 'Online flame treatment',
                            'Curing & finish' => 'LED-UV cured, chemical resistant',
                            'Quality checks' => 'Inline leak testing, scuff resistance check',
                            'Best suited for' => 'Industrial colorants, chemical dyes, solvents'
                        ]
                    ]
                ]
            ],

            'industrial-lubricants-adhesives' => [
                'name' => 'Industrial, Lubricants & Adhesives',
                'description' => 'Rugged, chemical-proof printing for oil containers, sealants, and adhesive cartridges.',
                'image' => '/images/industry-industrial.jpg',
                'products' => [
                    'engine-oil-lubricant-bottles' => [
                        'name' => 'Engine Oil & Lubricant Bottle — Screen Printed',
                        'subtitle' => 'Oil-proof, scuff-resistant full-wrap container decoration',
                        'category' => 'Industrial, Lubricants & Adhesives',
                        'tag' => 'oil & scuff proof',
                        'image' => '/images/industrial-oil.jpg',
                        'image_caption' => 'product photo (flat & oval bottle)',
                        'what_it_is' => 'High-adhesion printing on motor oil and industrial lubricant containers designed to resist spills, oil contact, and rough transport.',
                        'how_we_printed_it' => 'Surface flame-pretreated on HDPE with specialized heavy-duty inks cured using high-power LED-UV stations.',
                        'callout_text' => 'Ensure your oil packaging branding stays pristine despite grease, friction, and outdoor shelf storage.',
                        'specs' => [
                            'Bottle type' => 'Flat / Oval / Round HDPE oil bottle',
                            'Capacity' => '250 ml - 1 L',
                            'Bottle colour' => 'Black / Grey / Red / Gold HDPE',
                            'Print colours' => 'Up to 6 colours',
                            'Print method' => 'Automatic surface silk-screen',
                            'Print area' => 'Front & Back recessed panels',
                            'Surface prep' => 'Heavy flame pre-treatment',
                            'Curing & finish' => 'UV + IR cured, oil & scratch resistant',
                            'Quality checks' => 'Rub test with motor oil, leak testing',
                            'Best suited for' => 'Engine oils, gear lubes, brake fluids'
                        ]
                    ],
                    'silicone-sealant-cartridges' => [
                        'name' => 'Silicone Sealant Cartridge — Screen Printed',
                        'subtitle' => '360° seamless cylindrical printing on plastic cartridges',
                        'category' => 'Industrial, Lubricants & Adhesives',
                        'tag' => '360° cylindrical print',
                        'image' => '/images/industrial-silicone.jpg',
                        'image_caption' => 'product photo (rigid cartridge)',
                        'what_it_is' => 'Direct cylindrical printing around rigid sealant and adhesive cartridges with fine barcode and technical instructions.',
                        'how_we_printed_it' => 'Seamless 360-degree rotary silk-screen printing with high opacity, fast-drying inks engineered for smooth extrusion cartridge plastic.',
                        'callout_text' => 'Eliminate paper label peeling on sealant tubes with direct 360° screen printing.',
                        'specs' => [
                            'Bottle type' => 'Rigid HDPE Sealant Cartridge',
                            'Capacity' => '300 ml standard cartridge',
                            'Bottle colour' => 'White HDPE',
                            'Print colours' => 'Up to 4 colours',
                            'Print method' => '360° high-speed rotary screen print',
                            'Print area' => 'Full cylindrical body',
                            'Surface prep' => 'Online flame treatment',
                            'Curing & finish' => 'Instant LED-UV cured',
                            'Quality checks' => 'Barcode readability, surface adhesion',
                            'Best suited for' => 'Silicone sealants, acrylic caulk, construction adhesives'
                        ]
                    ]
                ]
            ],

            'food-household' => [
                'name' => 'Food & Household',
                'description' => 'Vibrant, food-safe screen printing for condiments, sauces, and cleaning bottles.',
                'image' => '/images/industry-food.jpg',
                'products' => [
                    'sauce-squeeze-bottles' => [
                        'name' => 'Sauce & Condiment Squeeze Bottle — Screen Printed',
                        'subtitle' => 'Food-grade ink decoration resistant to grease and frequent squeezing',
                        'category' => 'Food & Household',
                        'tag' => 'food safe & flexible',
                        'image' => '/images/food-sauce.jpg',
                        'image_caption' => 'product photo (flexible squeeze bottle)',
                        'what_it_is' => 'Direct surface printing on soft LDPE/HDPE squeeze bottles for ketchup, mustard, mayonnaise, and sauces.',
                        'how_we_printed_it' => 'Printed with flexible, high-opacity food-grade inks that do not crack or flake when squeezed repeatedly.',
                        'callout_text' => 'Looking for flexible bottle decoration? Our food-safe inks bend and flex with the container without cracking.',
                        'specs' => [
                            'Bottle type' => 'Soft LDPE / HDPE Squeeze bottle',
                            'Capacity' => '200 ml - 750 ml',
                            'Bottle colour' => 'Translucent / White',
                            'Print colours' => 'Up to 6 colours',
                            'Print method' => 'Automatic silk-screen printing',
                            'Print area' => 'Front & Back / Cylindrical wrap',
                            'Surface prep' => 'Online flame treatment',
                            'Curing & finish' => 'LED-UV flexible ink curing',
                            'Quality checks' => 'Squeeze-flex adhesion test',
                            'Best suited for' => 'Ketchup, mustard, mayonnaise, food sauces'
                        ]
                    ],
                    'detergent-cleaner-containers' => [
                        'name' => 'Detergent & Cleaner Container — Screen Printed',
                        'subtitle' => 'Direct surface printing resistant to chemical spills and bleach',
                        'category' => 'Food & Household',
                        'tag' => 'up to 6 colours',
                        'image' => '/images/food-detergent.jpg',
                        'image_caption' => 'product photo (handle bottle)',
                        'what_it_is' => 'Bold multi-colour screen printing for liquid detergent, dishwash, and surface cleaner handle bottles.',
                        'how_we_printed_it' => 'Flame-treated HDPE surface printed with chemical-resistant inks that withstand alkaline and acidic cleaner drips.',
                        'callout_text' => 'Ensure your household product branding remains vibrant even when exposed to soap drips and water.',
                        'specs' => [
                            'Bottle type' => 'HDPE Handle Bottle',
                            'Capacity' => '500 ml - 1 L',
                            'Bottle colour' => 'Opaque White / Blue / Yellow',
                            'Print colours' => 'Up to 6 colours',
                            'Print method' => 'Automatic direct-surface screen printing',
                            'Print area' => 'Front & Back recessed panels',
                            'Surface prep' => 'Online flame treatment',
                            'Curing & finish' => 'UV + IR cured, chemical resistant',
                            'Quality checks' => 'Inline leak testing',
                            'Best suited for' => 'Liquid detergents, floor cleaners, dishwash'
                        ]
                    ]
                ]
            ],

            'machine-photos' => [
                'name' => 'Machine Photos',
                'description' => 'Explore our state-of-the-art fully automatic Techno Robotics silk-screen printing line.',
                'image' => '/images/industry-machine.jpg',
                'products' => [
                    'techno-robotics-auto-line' => [
                        'name' => 'Techno Robotics Automatic Printing Line',
                        'subtitle' => 'Flame treatment · 3-Colour screen print · Inline leak testing',
                        'category' => 'Machine Photos',
                        'tag' => 'high speed',
                        'image' => '/images/machine-line.jpg',
                        'image_caption' => 'facility photo (automatic line in action)',
                        'what_it_is' => 'High-speed fully automatic silk-screen printing line capable of decorating up to 3,600 plastic bottles per hour.',
                        'how_we_printed_it' => 'Combines automatic feeding, online surface flame treatment, optical registration, 3-colour printing, LED-UV curing, and 100% inline leak testing.',
                        'callout_text' => 'Need high volume printing with low reject rates? Our automated line delivers consistent quality at scale.',
                        'specs' => [
                            'Machine type' => 'Techno Robotics Automatic Silk-Screen Line',
                            'Speed' => 'Up to 3,600 bottles / hour',
                            'Supported shapes' => 'Round, Flat, Oval bottles',
                            'Bottle range' => '20 ml to 1 Litre',
                            'Station 1' => 'Automatic flame treatment unit',
                            'Station 2' => 'Multi-colour precision optical registration screen print',
                            'Station 3' => 'LED-UV + IR curing modules',
                            'Station 4' => '100% Inline automated leak testing unit',
                            'Quality control' => 'Zero-contact robotic transfer'
                        ]
                    ],
                    'uv-ir-curing-modules' => [
                        'name' => 'LED-UV & IR Curing Stations',
                        'subtitle' => 'High-intensity curing station for instant ink polymerization',
                        'category' => 'Machine Photos',
                        'tag' => 'instant curing',
                        'image' => '/images/machine-curing.jpg',
                        'image_caption' => 'facility photo (UV curing unit)',
                        'what_it_is' => 'Advanced LED-UV and Infrared curing lamps integrated directly into the printing line for instant ink drying.',
                        'how_we_printed_it' => 'Instantly hardens UV inks to lock in colour brightness, crisp edges, and maximum chemical/scratch resistance.',
                        'callout_text' => 'Instant curing ensures zero smudging and allows immediate packing right off the line.',
                        'specs' => [
                            'Module type' => 'High-Intensity LED-UV + IR Curing System',
                            'Curing speed' => 'Instant inline drying',
                            'Wavelength' => '395nm LED-UV technology',
                            'Features' => 'Cool curing for heat-sensitive thin-walled plastic',
                            'Adhesion result' => 'Smudge-proof, scratch-proof, water-resistant'
                        ]
                    ]
                ]
            ]
        ];
    }

    public function index()
    {
        $sectors = $this->getSectors();
        return view('industries.index', compact('sectors'));
    }

    public function show($sectorSlug)
    {
        $sectors = $this->getSectors();
        if (!array_key_exists($sectorSlug, $sectors)) abort(404);

        $sector = $sectors[$sectorSlug];
        return view('industries.show', compact('sector', 'sectorSlug'));
    }

    public function product($sectorSlug, $productSlug)
    {
        $sectors = $this->getSectors();
        if (!array_key_exists($sectorSlug, $sectors)) abort(404);

        $sector = $sectors[$sectorSlug];
        if (!isset($sector['products'][$productSlug])) abort(404);

        $product = $sector['products'][$productSlug];
        return view('industries.product', compact('product', 'sector', 'sectorSlug'));
    }
}