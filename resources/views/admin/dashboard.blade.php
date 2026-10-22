<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Om Sai Print</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body style="background-color: #f3f4f6; color: #111827; min-height: 100vh; font-family: ui-sans-serif, system-ui, sans-serif;">

    <!-- Top Navigation Bar -->
    <header style="background-color: #000000; color: #ffffff; border-bottom: 1px solid #374151; padding: 16px 24px;">
        <div style="max-width: 1280px; margin: 0 auto; display: flex; justify-content: space-between; align-items: center;">
            
            <!-- Branding -->
            <div style="display: flex; align-items: center; gap: 12px;">
                <div style="background-color: #ffffff; color: #000000; width: 40px; height: 40px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-weight: 900; font-size: 12px;">
                    OSP
                </div>
                <div>
                    <div style="display: flex; align-items: center; gap: 8px;">
                        <h1 style="font-weight: 900; font-size: 14px; letter-spacing: 0.05em; color: #ffffff; margin: 0;">OM SAI PRINT</h1>
                        <span style="font-size: 9px; font-weight: 800; background-color: #374151; color: #d1d5db; padding: 2px 6px; border-radius: 4px;">ADMIN</span>
                    </div>
                    <p style="font-size: 10px; color: #9ca3af; font-weight: 600; text-transform: uppercase; margin: 2px 0 0 0;">Silk-Screen Printing Management</p>
                </div>
            </div>

            <!-- Header Actions -->
            <div style="display: flex; align-items: center; gap: 12px;">
                <a href="{{ route('home') }}" target="_blank" style="font-size: 12px; background-color: #1f2937; color: #ffffff; padding: 8px 16px; border-radius: 10px; font-weight: 700; text-decoration: none; border: 1px solid #374151;">
                    View Website &rarr;
                </a>
                
                <form action="{{ route('admin.logout') }}" method="POST" style="margin: 0;">
                    @csrf
                    <button type="submit" style="font-size: 12px; background-color: #dc2626; color: #ffffff; padding: 8px 16px; border-radius: 10px; font-weight: 800; border: none; cursor: pointer;">
                        Log Out
                    </button>
                </form>
            </div>
        </div>
    </header>

    <!-- Main Content Area -->
    <main style="max-width: 1280px; margin: 0 auto; padding: 40px 24px;">
        
        <!-- Welcome Banner -->
        <div style="background-color: #ffffff; border-radius: 24px; padding: 32px; border: 1px solid #e5e7eb; margin-bottom: 32px; display: flex; justify-content: space-between; align-items: center; box-shadow: 0 1px 3px rgba(0,0,0,0.05);">
            <div>
                <span style="font-size: 10px; text-transform: uppercase; letter-spacing: 0.1em; color: #4b5563; font-weight: 900; display: block; margin-bottom: 4px;">CONTROL CENTER</span>
                <h2 style="font-size: 28px; font-weight: 900; color: #000000; margin: 0;">Dashboard Overview</h2>
                <p style="font-size: 12px; color: #4b5563; margin: 4px 0 0 0; font-weight: 500;">Manage catalog products, edit sector descriptions, and publish visual updates.</p>
            </div>
            
            <div>
                <a href="{{ route('admin.products.create') }}" style="background-color: #000000; color: #ffffff; font-size: 12px; font-weight: 900; padding: 14px 24px; border-radius: 16px; text-decoration: none; display: inline-block; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                    + Add New Product
                </a>
            </div>
        </div>

        <!-- Cards Grid -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 32px;">
            
            <!-- Products Card -->
            <div style="background-color: #ffffff; border-radius: 24px; padding: 32px; border: 1px solid #e5e7eb; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 1px 3px rgba(0,0,0,0.05);">
                <div>
                    <div style="font-size: 24px; width: 48px; height: 48px; border-radius: 14px; background-color: #000000; color: #ffffff; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                        📦
                    </div>
                    <h3 style="font-size: 20px; font-weight: 900; color: #000000; margin: 0 0 8px 0;">Products Management</h3>
                    <p style="font-size: 12px; color: #4b5563; line-height: 1.6; font-weight: 500; margin: 0 0 24px 0;">
                        Add, edit, or remove custom screen-printed bottles across all 6 industry sectors. Products automatically sync across sector pages and public catalog views.
                    </p>
                </div>
                <div>
                    <a href="{{ route('admin.products.index') }}" style="background-color: #000000; color: #ffffff; font-size: 12px; font-weight: 900; padding: 12px 20px; border-radius: 12px; text-decoration: none; display: inline-block;">
                        Manage Products &rarr;
                    </a>
                </div>
            </div>

            <!-- Sectors Card -->
            <div style="background-color: #ffffff; border-radius: 24px; padding: 32px; border: 1px solid #e5e7eb; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 1px 3px rgba(0,0,0,0.05);">
                <div>
                    <div style="font-size: 24px; width: 48px; height: 48px; border-radius: 14px; background-color: #000000; color: #ffffff; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                        🏭
                    </div>
                    <h3 style="font-size: 20px; font-weight: 900; color: #000000; margin: 0 0 8px 0;">Industry Sectors</h3>
                    <p style="font-size: 12px; color: #4b5563; line-height: 1.6; font-weight: 500; margin: 0 0 24px 0;">
                        Update sector titles, sub-descriptions, banner imagery, and operational capacity overviews for all 6 target industries.
                    </p>
                </div>
                <div>
                    <a href="{{ route('admin.sectors.index') }}" style="background-color: #000000; color: #ffffff; font-size: 12px; font-weight: 900; padding: 12px 20px; border-radius: 12px; text-decoration: none; display: inline-block;">
                        Manage Sectors &rarr;
                    </a>
                </div>
            </div>

        </div>

    </main>

</body>
</html>