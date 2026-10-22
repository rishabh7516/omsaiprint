<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Om Sai Print</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body style="background-color: #f3f4f6; color: #111827; min-height: 100vh; font-family: ui-sans-serif, system-ui, sans-serif; display: flex; align-items: center; justify-content: center; padding: 24px;">

    <div style="max-width: 420px; width: 100%; background-color: #ffffff; border-radius: 24px; box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1); padding: 40px; border: 1px solid #e5e7eb;">
        
        <!-- Logo & Header -->
        <div style="text-align: center; margin-bottom: 32px;">
            <a href="{{ route('home') }}" style="display: inline-block; text-decoration: none; margin-bottom: 16px;">
                <div style="width: 48px; height: 48px; border-radius: 14px; background-color: #000000; color: #ffffff; font-weight: 900; font-size: 14px; display: flex; align-items: center; justify-content: center; margin: 0 auto; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                    OSP
                </div>
            </a>
            <h1 style="font-size: 22px; font-weight: 900; color: #000000; letter-spacing: 0.025em; margin: 0;">OM SAI PRINT</h1>
            <p style="font-size: 10px; color: #6b7280; font-weight: 800; text-transform: uppercase; letter-spacing: 0.1em; margin-top: 4px;">Admin Management Portal</p>
        </div>

        <!-- Status Notification -->
        @if (session('status'))
            <div style="margin-bottom: 20px; background-color: #f0fdf4; border: 1px solid #bbf7d0; color: #15803d; font-size: 12px; font-weight: 600; padding: 12px 16px; border-radius: 12px; display: flex; align-items: center; gap: 8px;">
                <span>✓</span>
                <span>{{ session('status') }}</span>
            </div>
        @endif

        <!-- Error Notifications -->
        @if ($errors->any())
            <div style="margin-bottom: 20px; background-color: #fef2f2; border: 1px solid #fecaca; color: #dc2626; font-size: 12px; font-weight: 600; padding: 12px 16px; border-radius: 12px;">
                @foreach ($errors->all() as $error)
                    <p style="margin: 2px 0;">• {{ $error }}</p>
                @endforeach
            </div>
        @endif

        <!-- Form -->
        <form action="{{ route('admin.login.submit') }}" method="POST" style="display: flex; flex-direction: column; gap: 20px;">
            @csrf

            <div>
                <label for="email" style="display: block; font-size: 11px; font-weight: 800; color: #000000; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 6px;">Email Address</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus
                       placeholder="ashokimp71@gmail.com"
                       style="width: 100%; padding: 12px 16px; border-radius: 12px; background-color: #f9fafb; border: 1px solid #d1d5db; font-size: 14px; color: #111827; outline: none; box-sizing: border-box;">
            </div>

            <div>
                <label for="password" style="display: block; font-size: 11px; font-weight: 800; color: #000000; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 6px;">Password</label>
                <input type="password" name="password" id="password" required
                       placeholder="••••••••"
                       style="width: 100%; padding: 12px 16px; border-radius: 12px; background-color: #f9fafb; border: 1px solid #d1d5db; font-size: 14px; color: #111827; outline: none; box-sizing: border-box;">
            </div>

            <div style="display: flex; align-items: center; justify-content: space-between; font-size: 12px;">
                <label style="display: flex; align-items: center; color: #4b5563; gap: 8px; cursor: pointer; font-weight: 600;">
                    <input type="checkbox" name="remember" style="width: 16px; height: 16px; accent-color: #000000; cursor: pointer;">
                    <span>Keep me logged in</span>
                </label>
            </div>

            <button type="submit" 
                    style="width: 100%; background-color: #000000; color: #ffffff; font-weight: 900; padding: 14px; border-radius: 14px; font-size: 14px; border: none; cursor: pointer; transition: background-color 0.2s ease; margin-top: 8px;">
                Log In to Dashboard &rarr;
            </button>
        </form>

        <!-- Public Website Link -->
        <div style="margin-top: 32px; padding-top: 20px; border-top: 1px solid #f3f4f6; text-align: center;">
            <a href="{{ route('home') }}" style="font-size: 12px; font-weight: 800; color: #6b7280; text-decoration: none;">
                &larr; Back to Public Website
            </a>
        </div>

    </div>

</body>
</html>