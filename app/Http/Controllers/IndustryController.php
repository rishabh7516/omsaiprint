<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndustryController extends Controller
{
    private function getSectors()
    {
        return [
            'paint-stainers-tinting-colourants' => [
                'name' => 'Paint Stainers & Tinting Colourants',
                'description' => 'High-contrast, solvent-resistant printing designed to remain clear and legible in harsh environments.',
                'image' => '/images/industry-paint.jpg',
                'products' => [
                    'tinting-stainer-squeeze-bottles' => [
                        'name' => 'Tinting Stainer Squeeze Bottle — Screen Printed',
                        'subtitle' => 'High-density HDPE squeeze bottle · Chemical-resistant print · Dosing scale & front branding',
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
                            'Print colours' => 'This piece: 2 (Black + Orange) · capability: up to 6 (multi-colour)',
                            'Print method' => 'Fully automatic silk-screen printing',
                            'Print area' => '360° cylindrical / Front + Back panels',
                            'Surface prep' => 'Online flame treatment',
                            'Curing & finish' => 'IR + LED-UV, solvent- & chemical-resistant',
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
            // ... (keep other sectors as structured above)
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