<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sector;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminProductController extends Controller
{
    public function index()
    {
        $products = Product::with('sector')->latest()->paginate(15);
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $sectors = Sector::all();
        return view('admin.products.create', compact('sectors'));
    }

    public function store(Request $request)
    {
        // 1. Assign validation result to $validated variable
        $validated = $request->validate([
            'sector_id' => 'required|exists:sectors,id',
            'name' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'tag' => 'nullable|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:10240',
            'what_it_is' => 'required|string',
            'how_we_printed_it' => 'required|string',
            'callout_text' => 'nullable|string',
            'specs' => 'required|array',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('products', 'public');
            $validated['image'] = '/storage/' . $path;
        }

        $validated['slug'] = Str::slug($request->name);
        $sector = Sector::find($validated['sector_id']);
        $validated['category'] = $sector->name;

        // Use updateOrCreate safely now that $validated is populated
        Product::updateOrCreate(
            [
                'sector_id' => $validated['sector_id'],
                'slug' => $validated['slug']
            ],
            $validated
        );

        return redirect()->route('admin.products.index')->with('success', 'Product saved successfully!');
    }

    public function edit(Product $product)
    {
        $sectors = Sector::all();
        return view('admin.products.edit', compact('product', 'sectors'));
    }

    public function update(Request $request, Product $product)
    {
        // 2. Assign validation result and make image nullable on update
        $validated = $request->validate([
            'sector_id' => 'required|exists:sectors,id',
            'name' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'tag' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:10240',
            'what_it_is' => 'required|string',
            'how_we_printed_it' => 'required|string',
            'callout_text' => 'nullable|string',
            'specs' => 'required|array',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('products', 'public');
            $validated['image'] = '/storage/' . $path;
        } else {
            unset($validated['image']); // Keep existing image if no new file is uploaded
        }

        $validated['slug'] = Str::slug($request->name);
        $sector = Sector::find($validated['sector_id']);
        $validated['category'] = $sector->name;

        $product->update($validated);

        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully!');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully!');
    }
}