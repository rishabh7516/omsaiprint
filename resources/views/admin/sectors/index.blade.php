<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Industries - Admin</title>
   
</head>
<body style="background-color: #f3f4f6; color: #111827; min-height: 100vh; font-family: ui-sans-serif, system-ui, sans-serif;">

    <!-- Top Navigation Bar -->
    <header style="background-color: #000000; color: #ffffff; border-bottom: 1px solid #374151; padding: 16px 24px;">
        <div style="max-width: 1280px; margin: 0 auto; display: flex; justify-content: space-between; align-items: center;">
            <div style="display: flex; align-items: center; gap: 12px;">
                <a href="{{ route('admin.dashboard') }}" style="text-decoration: none;">
                    <div style="background-color: #ffffff; color: #000000; width: 40px; height: 40px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-weight: 900; font-size: 12px;">
                        OSP
                    </div>
                </a>
                <div>
                    <h1 style="font-weight: 900; font-size: 14px; letter-spacing: 0.05em; color: #ffffff; margin: 0;">OM SAI PRINT</h1>
                    <p style="font-size: 10px; color: #9ca3af; font-weight: 700; text-transform: uppercase; margin: 2px 0 0 0;">Industry Sectors Management</p>
                </div>
            </div>

            <div style="display: flex; align-items: center; gap: 12px;">
                <a href="{{ route('admin.dashboard') }}" style="font-size: 12px; background-color: #1f2937; color: #ffffff; padding: 8px 16px; border-radius: 10px; font-weight: 700; text-decoration: none; border: 1px solid #374151;">
                    &larr; Back to Dashboard
                </a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main style="max-width: 1280px; margin: 0 auto; padding: 40px 24px;">

        <!-- Section Banner Header -->
        <div style="background-color: #ffffff; border-radius: 24px; padding: 32px; border: 1px solid #e5e7eb; margin-bottom: 32px; box-shadow: 0 1px 3px rgba(0,0,0,0.05);">
            <div style="display: flex; items-center; gap: 8px; margin-bottom: 4px;">
                <span style="font-size: 10px; text-transform: uppercase; letter-spacing: 0.1em; color: #4b5563; font-weight: 900;">INDUSTRY CATALOG</span>
            </div>
            <h2 style="font-size: 26px; font-weight: 900; color: #000000; margin: 0;">Target Sectors Overview</h2>
            <p style="font-size: 12px; color: #4b5563; margin: 4px 0 0 0; font-weight: 500;">Manage descriptions, sub-headings, and sector imagery for your 6 core manufacturing sectors.</p>
        </div>

        <!-- Success Notification -->
        @if(session('success'))
            <div style="margin-bottom: 24px; background-color: #f0fdf4; border: 1px solid #bbf7d0; color: #15803d; font-size: 12px; font-weight: 700; padding: 14px 18px; border-radius: 14px; display: flex; align-items: center; gap: 8px;">
                <span>✓</span>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        <!-- Sectors Cards Grid -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(340px, 1fr)); gap: 24px;">
            @foreach($sectors as $sector)
                <div style="background-color: #ffffff; border-radius: 24px; padding: 28px; border: 1px solid #e5e7eb; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 1px 3px rgba(0,0,0,0.05);">
                    <div>
                        <!-- Header with Image & Title -->
                        <div style="display: flex; align-items: center; gap: 16px; margin-bottom: 16px;">
                            <div style="width: 64px; height: 64px; border-radius: 16px; background-color: #f3f4f6; border: 1px solid #e5e7eb; overflow: hidden; flex-shrink: 0;">
                                <img src="{{ asset($sector->image) }}" alt="{{ $sector->name }}" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <div>
                                <h3 style="font-size: 18px; font-weight: 900; color: #000000; margin: 0;">{{ $sector->name }}</h3>
                                <p style="font-size: 11px; color: #6b7280; font-family: monospace; margin: 2px 0 0 0;">slug: {{ $sector->slug }}</p>
                            </div>
                        </div>

                        <!-- Description -->
                        <p style="font-size: 12px; color: #4b5563; line-height: 1.6; font-weight: 500; margin: 0 0 20px 0; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
                            {{ $sector->description }}
                        </p>
                    </div>

                    <!-- Actions -->
                    <div style="display: flex; justify-content: flex-end; align-items: center; border-top: 1px solid #f3f4f6; padding-top: 16px;">
                        <a href="{{ route('admin.sectors.edit', $sector->id) }}" style="background-color: #000000; color: #ffffff; font-size: 12px; font-weight: 900; padding: 10px 20px; border-radius: 12px; text-decoration: none; display: inline-block;">
                            Edit Sector &rarr;
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

    </main>

</body>
</html>