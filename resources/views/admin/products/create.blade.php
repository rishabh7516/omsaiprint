<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product - Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body style="background-color: #f3f4f6; color: #111827; min-height: 100vh; font-family: ui-sans-serif, system-ui, sans-serif; padding: 32px 16px;">

    <!-- Top Navigation Header -->
    <header style="max-width: 800px; margin: 0 auto 24px auto; display: flex; justify-content: space-between; align-items: center;">
        <div style="display: flex; align-items: center; gap: 12px;">
            <div style="background-color: #000000; color: #ffffff; width: 36px; height: 36px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-weight: 900; font-size: 11px;">
                OSP
            </div>
            <div>
                <h1 style="font-size: 14px; font-weight: 900; color: #000000; margin: 0; letter-spacing: 0.05em;">OM SAI PRINT</h1>
                <p style="font-size: 10px; color: #6b7280; font-weight: 700; text-transform: uppercase; margin: 0;">Add New Catalog Product</p>
            </div>
        </div>
        <div>
            <a href="{{ route('admin.products.index') }}" style="font-size: 12px; background-color: #ffffff; color: #000000; padding: 8px 16px; border-radius: 10px; font-weight: 800; text-decoration: none; border: 1px solid #d1d5db;">
                &larr; Back to Products
            </a>
        </div>
    </header>

    <!-- Main Form Container -->
    <div style="max-width: 800px; margin: 0 auto; background-color: #ffffff; border-radius: 24px; padding: 40px; border: 1px solid #e5e7eb; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);">
        
        <div style="border-bottom: 1px solid #f3f4f6; padding-bottom: 20px; margin-bottom: 28px;">
            <h2 style="font-size: 22px; font-weight: 900; color: #000000; margin: 0;">Add New Product</h2>
            <p style="font-size: 12px; color: #6b7280; margin: 4px 0 0 0; font-weight: 500;">Fill in the product details to publish it across industry sector showcase pages.</p>
        </div>

        <!-- Validation Errors -->
        @if ($errors->any())
            <div style="margin-bottom: 24px; background-color: #fef2f2; border: 1px solid #fecaca; color: #dc2626; font-size: 12px; font-weight: 600; padding: 14px 18px; border-radius: 14px;">
                <p style="font-weight: 800; margin: 0 0 6px 0;">Please correct the errors below:</p>
                @foreach ($errors->all() as $error)
                    <p style="margin: 2px 0;">• {{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" style="display: flex; flex-direction: column; gap: 24px;">
            @csrf

            <!-- Industry Sector Select -->
            <div>
                <label for="sector_id" style="display: block; font-size: 11px; font-weight: 800; color: #000000; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 8px;">
                    Industry Sector <span style="color: #dc2626;">*</span>
                </label>
                <select name="sector_id" id="sector_id" required style="width: 100%; padding: 12px 16px; border-radius: 12px; background-color: #f9fafb; border: 1px solid #d1d5db; font-size: 14px; color: #111827; outline: none; box-sizing: border-box; cursor: pointer;">
                    <option value="">-- Select Target Sector --</option>
                    @foreach($sectors as $sector)
                        <option value="{{ $sector->id }}" {{ old('sector_id') == $sector->id ? 'selected' : '' }}>
                            {{ $sector->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Product Name -->
            <div>
                <label for="name" style="display: block; font-size: 11px; font-weight: 800; color: #000000; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 8px;">
                    Product Name <span style="color: #dc2626;">*</span>
                </label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required
                       placeholder="e.g. Shampoo & Conditioner Bottles"
                       style="width: 100%; padding: 12px 16px; border-radius: 12px; background-color: #f9fafb; border: 1px solid #d1d5db; font-size: 14px; color: #111827; outline: none; box-sizing: border-box;">
            </div>

            <!-- Subtitle & Tag Row -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
                <div>
                    <label for="subtitle" style="display: block; font-size: 11px; font-weight: 800; color: #000000; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 8px;">
                        Subtitle / Sub-header
                    </label>
                    <input type="text" name="subtitle" id="subtitle" value="{{ old('subtitle') }}"
                           placeholder="e.g. Premium Hair Care Range"
                           style="width: 100%; padding: 12px 16px; border-radius: 12px; background-color: #f9fafb; border: 1px solid #d1d5db; font-size: 14px; color: #111827; outline: none; box-sizing: border-box;">
                </div>

                <div>
                    <label for="tag" style="display: block; font-size: 11px; font-weight: 800; color: #000000; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 8px;">
                        Category Tag / Badge
                    </label>
                    <input type="text" name="tag" id="tag" value="{{ old('tag') }}"
                           placeholder="e.g. High-Gloss Metallic"
                           style="width: 100%; padding: 12px 16px; border-radius: 12px; background-color: #f9fafb; border: 1px solid #d1d5db; font-size: 14px; color: #111827; outline: none; box-sizing: border-box;">
                </div>
            </div>

            <!-- Product Image Upload -->
            <div>
                <label for="image" style="display: block; font-size: 11px; font-weight: 800; color: #000000; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 8px;">
                    Product High-Res Photo <span style="color: #dc2626;">*</span>
                </label>
                <div style="padding: 16px; border-radius: 12px; background-color: #f9fafb; border: 2px dashed #d1d5db; text-align: center;">
                    <input type="file" name="image" id="image" required style="font-size: 13px; color: #374151; cursor: pointer;">
                    <p style="font-size: 10px; color: #6b7280; margin: 6px 0 0 0; font-weight: 600;">Allowed formats: JPEG, PNG, JPG, WEBP (Max size: 10MB)</p>
                </div>
            </div>

            <!-- What It Is -->
            <div>
                <label for="what_it_is" style="display: block; font-size: 11px; font-weight: 800; color: #000000; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 8px;">
                    What It Is (Overview) <span style="color: #dc2626;">*</span>
                </label>
                <textarea name="what_it_is" id="what_it_is" rows="3" required
                          placeholder="Describe the physical container, material, and substrate..."
                          style="width: 100%; padding: 12px 16px; border-radius: 12px; background-color: #f9fafb; border: 1px solid #d1d5db; font-size: 14px; color: #111827; outline: none; box-sizing: border-box; resize: vertical;">{{ old('what_it_is') }}</textarea>
            </div>

            <!-- How We Printed It -->
            <div>
                <label for="how_we_printed_it" style="display: block; font-size: 11px; font-weight: 800; color: #000000; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 8px;">
                    How We Printed It (Technical Process) <span style="color: #dc2626;">*</span>
                </label>
                <textarea name="how_we_printed_it" id="how_we_printed_it" rows="3" required
                          placeholder="Describe the screen mesh, ink formulations, curing setup, and registration..."
                          style="width: 100%; padding: 12px 16px; border-radius: 12px; background-color: #f9fafb; border: 1px solid #d1d5db; font-size: 14px; color: #111827; outline: none; box-sizing: border-box; resize: vertical;">{{ old('how_we_printed_it') }}</textarea>
            </div>

            <!-- Callout Quote -->
            <div>
                <label for="callout_text" style="display: block; font-size: 11px; font-weight: 800; color: #000000; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 8px;">
                    Callout Highlight Quote (Optional)
                </label>
                <input type="text" name="callout_text" id="callout_text" value="{{ old('callout_text') }}"
                       placeholder="e.g. Ultra-durable print resistant to shower oils and moisture."
                       style="width: 100%; padding: 12px 16px; border-radius: 12px; background-color: #f9fafb; border: 1px solid #d1d5db; font-size: 14px; color: #111827; outline: none; box-sizing: border-box;">
            </div>

            <!-- Dynamic Product Specifications -->
            <div>
                <label style="display: block; font-size: 11px; font-weight: 800; color: #000000; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 8px;">
                    Technical Specifications
                </label>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 12px;">
                    <div>
                        <span style="font-size: 10px; font-weight: 700; color: #6b7280; display: block; margin-bottom: 4px;">Capacity / Size</span>
                        <input type="text" name="specs[Capacity]" value="{{ old('specs.Capacity', '250 ml') }}" placeholder="e.g. 250 ml"
                               style="width: 100%; padding: 10px 14px; border-radius: 10px; background-color: #f9fafb; border: 1px solid #d1d5db; font-size: 13px; color: #111827; outline: none; box-sizing: border-box;">
                    </div>
                    <div>
                        <span style="font-size: 10px; font-weight: 700; color: #6b7280; display: block; margin-bottom: 4px;">Material Substrate</span>
                        <input type="text" name="specs[Material]" value="{{ old('specs.Material', 'HDPE Plastic') }}" placeholder="e.g. HDPE Plastic"
                               style="width: 100%; padding: 10px 14px; border-radius: 10px; background-color: #f9fafb; border: 1px solid #d1d5db; font-size: 13px; color: #111827; outline: none; box-sizing: border-box;">
                    </div>
                    <div>
                        <span style="font-size: 10px; font-weight: 700; color: #6b7280; display: block; margin-bottom: 4px;">Printing Process</span>
                        <input type="text" name="specs[Printing Method]" value="{{ old('specs.Printing Method', 'UV Silk Screen') }}" placeholder="e.g. UV Silk Screen"
                               style="width: 100%; padding: 10px 14px; border-radius: 10px; background-color: #f9fafb; border: 1px solid #d1d5db; font-size: 13px; color: #111827; outline: none; box-sizing: border-box;">
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div style="display: flex; justify-content: flex-end; align-items: center; gap: 12px; padding-top: 16px; border-top: 1px solid #f3f4f6;">
                <a href="{{ route('admin.products.index') }}" style="background-color: #dc2626; color: #ffffff; font-size: 12px; font-weight: 800; padding: 12px 24px; border-radius: 12px; text-decoration: none;">
                    Cancel
                </a>
                <button type="submit" style="background-color: #000000; color: #ffffff; font-size: 12px; font-weight: 900; padding: 12px 28px; border-radius: 12px; border: none; cursor: pointer;">
                    Save & Publish Product &rarr;
                </button>
            </div>
        </form>
    </div>

</body>
</html>