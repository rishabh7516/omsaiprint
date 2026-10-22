<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Sector - Admin</title>
    <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
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
                <p style="font-size: 10px; color: #6b7280; font-weight: 700; text-transform: uppercase; margin: 0;">Edit Industry Sector</p>
            </div>
        </div>
        <div>
            <a href="{{ route('admin.sectors.index') }}" style="font-size: 12px; background-color: #ffffff; color: #000000; padding: 8px 16px; border-radius: 10px; font-weight: 800; text-decoration: none; border: 1px solid #d1d5db;">
                &larr; Back to Sectors
            </a>
        </div>
    </header>

    <!-- Main Form Container -->
    <div style="max-width: 800px; margin: 0 auto; background-color: #ffffff; border-radius: 24px; padding: 40px; border: 1px solid #e5e7eb; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);">
        
        <div style="border-bottom: 1px solid #f3f4f6; padding-bottom: 20px; margin-bottom: 28px;">
            <h2 style="font-size: 22px; font-weight: 900; color: #000000; margin: 0;">Edit Sector: {{ $sector->name }}</h2>
            <p style="font-size: 12px; color: #6b7280; margin: 4px 0 0 0; font-weight: 500;">Update sector title, overview narrative, or replace the showcase banner image.</p>
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

        <form action="{{ route('admin.sectors.update', $sector->id) }}" method="POST" enctype="multipart/form-data" style="display: flex; flex-direction: column; gap: 24px;">
            @csrf
            @method('PUT')

            <!-- Sector Name -->
            <div>
                <label for="name" style="display: block; font-size: 11px; font-weight: 800; color: #000000; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 8px;">
                    Sector Name <span style="color: #dc2626;">*</span>
                </label>
                <input type="text" name="name" id="name" value="{{ old('name', $sector->name) }}" required
                       style="width: 100%; padding: 12px 16px; border-radius: 12px; background-color: #f9fafb; border: 1px solid #d1d5db; font-size: 14px; color: #111827; outline: none; box-sizing: border-box;">
            </div>

            <!-- Description -->
            <div>
                <label for="description" style="display: block; font-size: 11px; font-weight: 800; color: #000000; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 8px;">
                    Sector Overview & Description <span style="color: #dc2626;">*</span>
                </label>
                <textarea name="description" id="description" rows="5" required
                          style="width: 100%; padding: 12px 16px; border-radius: 12px; background-color: #f9fafb; border: 1px solid #d1d5db; font-size: 14px; color: #111827; outline: none; box-sizing: border-box; resize: vertical; line-height: 1.6;">{{ old('description', $sector->description) }}</textarea>
            </div>

            <!-- Image Preview & Upload -->
            <div>
                <label style="display: block; font-size: 11px; font-weight: 800; color: #000000; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 8px;">
                    Current Banner Image
                </label>
                <div style="display: flex; align-items: center; gap: 16px; margin-bottom: 12px; padding: 12px; background-color: #f9fafb; border-radius: 14px; border: 1px solid #e5e7eb;">
                    <img src="{{ asset($sector->image) }}" alt="{{ $sector->name }}" style="width: 80px; height: 80px; object-fit: cover; border-radius: 12px; border: 1px solid #d1d5db; background-color: #ffffff;">
                    <div>
                        <p style="font-size: 12px; font-weight: 800; color: #000000; margin: 0;">Active Sector Cover Image</p>
                        <p style="font-size: 10px; color: #6b7280; margin: 2px 0 0 0;">Path: {{ $sector->image }}</p>
                    </div>
                </div>

                <label for="image" style="display: block; font-size: 11px; font-weight: 800; color: #000000; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 8px;">
                    Replace Banner Image (Optional)
                </label>
                <div style="padding: 16px; border-radius: 12px; background-color: #f9fafb; border: 2px dashed #d1d5db; text-align: center;">
                    <input type="file" name="image" id="image" style="font-size: 13px; color: #374151; cursor: pointer;">
                    <p style="font-size: 10px; color: #6b7280; margin: 6px 0 0 0; font-weight: 600;">Leave blank to keep the current banner image. Allowed: JPEG, PNG, JPG, WEBP</p>
                </div>
            </div>

            <!-- Action Buttons -->
            <div style="display: flex; justify-content: flex-end; align-items: center; gap: 12px; padding-top: 16px; border-top: 1px solid #f3f4f6;">
                <a href="{{ route('admin.sectors.index') }}" style="background-color: #dc2626; color: #ffffff; font-size: 12px; font-weight: 800; padding: 12px 24px; border-radius: 12px; text-decoration: none;">
                    Cancel
                </a>
                <button type="submit" style="background-color: #000000; color: #ffffff; font-size: 12px; font-weight: 900; padding: 12px 28px; border-radius: 12px; border: none; cursor: pointer;">
                    Update Sector &rarr;
                </button>
            </div>
        </form>
    </div>

</body>
</html>