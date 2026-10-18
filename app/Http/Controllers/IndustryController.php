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
                    [
                        'name' => 'Shampoo & Conditioner Bottles',
                        'description' => 'High-precision silk-screen printing on HDPE, PET, and squeeze bottles resistant to water and shower chemicals.',
                        'image' => '/images/cosmetic-shampoo.jpg',
                        'specs' => '20ml - 1L | Round & Flat'
                    ],
                    [
                        'name' => 'Serum & Essential Oil Droppers',
                        'description' => 'Fine-line accurate printing for luxury cosmetic glass and acrylic dropper bottles.',
                        'image' => '/images/cosmetic-serum.jpg',
                        'specs' => '10ml - 100ml | Cylindrical'
                    ]
                ]
            ],
            'baby-feeding-bottles' => [
                'name' => 'Baby & Feeding Bottles',
                'description' => 'Precise, non-toxic, and ultra-durable printing with accurate measurement and graduation marks.',
                'image' => '/images/industry-baby.jpg',
                'products' => [
                    [
                        'name' => 'Graduated Feeding Bottles',
                        'description' => 'Non-toxic, sterilisation-proof volume markings on polypropylene (PP) and glass feeding bottles.',
                        'image' => '/images/baby-feeding.jpg',
                        'specs' => '120ml - 330ml | Ergonomic'
                    ],
                    [
                        'name' => 'Sippy Cups & Sippers',
                        'description' => 'Vibrant, child-safe multi-colour cartoon and logo prints with high scratch resistance.',
                        'image' => '/images/baby-sippy.jpg',
                        'specs' => '150ml - 500ml | Round'
                    ]
                ]
            ],
            'paint-stainers-tinting-colourants' => [
                'name' => 'Paint Stainers & Tinting Colourants',
                'description' => 'High-contrast, solvent-resistant printing designed to remain clear and legible in harsh environments.',
                'image' => '/images/industry-paint.jpg',
                'products' => [
                    [
                        'name' => 'Tinting Stainer Squeeze Bottles',
                        'description' => 'Chemical and solvent resistant printed dosing scales for precise colorant dispensing.',
                        'image' => '/images/paint-stainer.jpg',
                        'specs' => '50ml - 500ml | Squeeze HDPE'
                    ],
                    [
                        'name' => 'Industrial Colorant Containers',
                        'description' => 'Heavy-duty screen printing with chemical hazard warnings and brand details.',
                        'image' => '/images/paint-container.jpg',
                        'specs' => '500ml - 1L | Heavy-duty PET/HDPE'
                    ]
                ]
            ],
            'industrial-lubricants-adhesives' => [
                'name' => 'Industrial, Lubricants & Adhesives',
                'description' => 'Rugged, chemical-proof printing for oil containers, sealants, and adhesive cartridges.',
                'image' => '/images/industry-industrial.jpg',
                'products' => [
                    [
                        'name' => 'Engine Oil & Lubricant Bottles',
                        'description' => 'Oil-proof, scuff-resistant full-wrap container decoration.',
                        'image' => '/images/industrial-oil.jpg',
                        'specs' => '250ml - 1L | Flat & Oval'
                    ],
                    [
                        'name' => 'Silicone Sealant Cartridges',
                        'description' => '360-degree seamless cylindrical printing on standard rigid plastic sealant cartridges.',
                        'image' => '/images/industrial-silicone.jpg',
                        'specs' => '300ml | Standard Cartridge'
                    ]
                ]
            ],
            'food-household' => [
                'name' => 'Food & Household',
                'description' => 'Vibrant, food-safe screen printing for condiments, sauces, and cleaning bottles.',
                'image' => '/images/industry-food.jpg',
                'products' => [
                    [
                        'name' => 'Sauce & Squeeze Mustard Bottles',
                        'description' => 'Food-grade ink decoration resistant to grease, oil, and frequent squeezing.',
                        'image' => '/images/food-sauce.jpg',
                        'specs' => '200ml - 750ml | Squeeze'
                    ],
                    [
                        'name' => 'Detergent & Cleaner Containers',
                        'description' => 'Bold 2-colour and 3-colour direct surface screen printing for household chemicals.',
                        'image' => '/images/food-detergent.jpg',
                        'specs' => '500ml - 1L | Handle Bottles'
                    ]
                ]
            ],
            'machine-photos' => [
                'name' => 'Machine Photos',
                'description' => 'Explore our state-of-the-art fully automatic Techno Robotics silk-screen printing line.',
                'image' => '/images/industry-machine.jpg',
                'products' => [
                    [
                        'name' => 'Techno Robotics Auto Line',
                        'description' => 'Integrated Flame Treatment, 3-Colour Screen Print, and Inline Leak Testing system.',
                        'image' => '/images/machine-line.jpg',
                        'specs' => 'Up to 3,600 bottles/hr'
                    ],
                    [
                        'name' => 'UV & IR Curing Modules',
                        'description' => 'High-intensity LED-UV curing station ensuring instant ink drying and scratch resistance.',
                        'image' => '/images/machine-curing.jpg',
                        'specs' => 'Inline LED-UV + IR'
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

    public function show($slug)
    {
        $sectors = $this->getSectors();

        if (!array_key_exists($slug, $sectors)) {
            abort(404);
        }

        $sector = $sectors[$slug];
        return view('industries.show', compact('sector', 'slug'));
    }
}