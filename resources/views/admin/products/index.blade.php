<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Products - Admin</title>
    <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
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
                    <p style="font-size: 10px; color: #9ca3af; font-weight: 700; text-transform: uppercase; margin: 2px 0 0 0;">Products Catalog</p>
                </div>
            </div>

            <div style="display: flex; align-items: center; gap: 12px;">
                <a href="{{ route('admin.dashboard') }}" style="font-size: 12px; background-color: #1f2937; color: #ffffff; padding: 8px 16px; border-radius: 10px; font-weight: 700; text-decoration: none; border: 1px solid #374151;">
                    &larr; Dashboard
                </a>
                <a href="{{ route('admin.products.create') }}" style="font-size: 12px; background-color: #ffffff; color: #000000; padding: 8px 16px; border-radius: 10px; font-weight: 900; text-decoration: none;">
                    + Add New Product
                </a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main style="max-width: 1280px; margin: 0 auto; padding: 40px 24px;">

        <!-- Success Notification -->
        @if(session('success'))
            <div style="margin-bottom: 24px; background-color: #f0fdf4; border: 1px solid #bbf7d0; color: #15803d; font-size: 12px; font-weight: 700; padding: 14px 18px; border-radius: 14px; display: flex; align-items: center; gap: 8px;">
                <span>✓</span>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        <!-- Products Table Card -->
        <div style="background-color: #ffffff; border-radius: 24px; border: 1px solid #e5e7eb; overflow: hidden; box-shadow: 0 1px 3px rgba(0,0,0,0.05);">
            <div style="padding: 24px; border-bottom: 1px solid #f3f4f6; display: flex; justify-content: space-between; align-items: center;">
                <div>
                    <h2 style="font-size: 18px; font-weight: 900; color: #000000; margin: 0;">All Catalog Products</h2>
                    <p style="font-size: 12px; color: #6b7280; margin: 4px 0 0 0; font-weight: 500;">Showing active items printed across all industry sectors.</p>
                </div>
                <a href="{{ route('admin.products.create') }}" style="background-color: #000000; color: #ffffff; font-size: 12px; font-weight: 900; padding: 10px 18px; border-radius: 12px; text-decoration: none;">
                    + Create Product
                </a>
            </div>

            <div style="overflow-x: auto;">
                <table style="width: 100%; border-collapse: collapse; text-align: left;">
                    <thead>
                        <tr style="background-color: #f9fafb; border-bottom: 1px solid #e5e7eb; font-size: 10px; font-weight: 800; color: #6b7280; text-transform: uppercase; letter-spacing: 0.05em;">
                            <th style="padding: 16px 24px;">Preview</th>
                            <th style="padding: 16px 24px;">Product Details</th>
                            <th style="padding: 16px 24px;">Sector / Category</th>
                            <th style="padding: 16px 24px;">Tag</th>
                            <th style="padding: 16px 24px; text-align: right;">Actions</th>
                        </tr>
                    </thead>
                    <tbody style="font-size: 12px;">
                        @forelse($products as $product)
                            <tr style="border-bottom: 1px solid #f3f4f6;">
                                <!-- Image Preview -->
                                <td style="padding: 16px 24px;">
                                    <div style="width: 48px; height: 48px; border-radius: 12px; background-color: #f3f4f6; border: 1px solid #e5e7eb; overflow: hidden;">
                                        <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" style="width: 100%; height: 100%; object-fit: cover;">
                                    </div>
                                </td>

                                <!-- Details -->
                                <td style="padding: 16px 24px;">
                                    <div style="font-weight: 900; color: #000000; font-size: 14px;">{{ $product->name }}</div>
                                    <div style="font-size: 11px; color: #6b7280; font-family: monospace; margin-top: 2px;">{{ $product->slug }}</div>
                                </td>

                                <!-- Sector -->
                                <td style="padding: 16px 24px;">
                                    <span style="background-color: #f3f4f6; color: #000000; font-weight: 800; padding: 4px 10px; border-radius: 20px; border: 1px solid #e5e7eb; font-size: 11px; display: inline-block;">
                                        {{ $product->sector->name ?? $product->category }}
                                    </span>
                                </td>

                                <!-- Tag -->
                                <td style="padding: 16px 24px;">
                                    <span style="background-color: #000000; color: #ffffff; font-weight: 800; padding: 4px 10px; border-radius: 20px; font-size: 11px; display: inline-block;">
                                        {{ $product->tag ?? 'Standard' }}
                                    </span>
                                </td>

                                <!-- Actions -->
                                <td style="padding: 16px 24px; text-align: right;">
                                    <div style="display: flex; justify-content: flex-end; align-items: center; gap: 8px;">
                                        <a href="{{ route('admin.products.edit', $product->id) }}" style="display: inline-block; padding: 6px 14px; background-color: #000000; color: #ffffff; font-weight: 800; border-radius: 10px; text-decoration: none; font-size: 11px;">
                                            Edit
                                        </a>
                                        <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" style="margin: 0;" onsubmit="return confirm('Are you sure you want to delete this product?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" style="padding: 6px 14px; background-color: #dc2626; color: #ffffff; font-weight: 800; border-radius: 10px; border: none; font-size: 11px; cursor: pointer;">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" style="padding: 48px; text-align: center; color: #6b7280;">
                                    <p style="font-size: 14px; font-weight: 600; margin: 0 0 8px 0;">No products created yet.</p>
                                    <a href="{{ route('admin.products.create') }}" style="font-size: 12px; color: #000000; font-weight: 900; text-decoration: underline;">
                                        Add your first product &rarr;
                                    </a>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <div style="margin-top: 24px;">
            {{ $products->links() }}
        </div>
    </main>

</body>
</html>