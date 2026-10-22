<?php

namespace App\Http\Controllers;

use App\Models\Sector;
use App\Models\Product;

class IndustryController extends Controller
{
    // 1. Show all industry sectors
    public function index()
    {
        $sectors = Sector::all();
        return view('industries.index', compact('sectors'));
    }

    // 2. Show products inside a specific sector
    public function show($sectorSlug)
    {
        $sector = Sector::where('slug', $sectorSlug)->firstOrFail();
        $products = Product::where('sector_id', $sector->id)->get();
        
        return view('industries.show', compact('sector', 'products', 'sectorSlug'));
    }

    // 3. Show detailed view of a single product
    public function product($sectorSlug, $productSlug)
    {
        $sector = Sector::where('slug', $sectorSlug)->firstOrFail();
        $product = Product::where('sector_id', $sector->id)
                          ->where('slug', $productSlug)
                          ->firstOrFail();

        // Ensure specs array is formatted properly
        $specs = is_array($product->specs) ? $product->specs : (json_decode($product->specs, true) ?? []);

        return view('industries.product', compact('sector', 'product', 'sectorSlug', 'specs'));
    }
}