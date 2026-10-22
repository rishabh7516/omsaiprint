<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndustryController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\AdminSectorController; // <-- Added missing import


/*
|--------------------------------------------------------------------------
| Public Website Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/the-machine', function () {
    return view('machine');
})->name('machine');

use App\Models\Product; // <-- Make sure Product is imported

Route::get('/gallery', function () {
    $products = Product::with('sector')->latest()->get();
    return view('gallery', compact('products'));
})->name('gallery');

// Dynamic Database-Driven Industries & Products
Route::get('/industries', [IndustryController::class, 'index'])->name('industries.index');
Route::get('/industries/{sectorSlug}', [IndustryController::class, 'show'])->name('industries.show');
Route::get('/industries/{sectorSlug}/{productSlug}', [IndustryController::class, 'product'])->name('industries.product');

Route::get('/quality', function () {
    return view('quality');
})->name('quality');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


/*
|--------------------------------------------------------------------------
| Admin Panel Routes (Custom Authentication)
|--------------------------------------------------------------------------
*/

// Public Admin Login / Auth Routes
Route::get('/admin/login', [AuthController::class, 'showLogin'])->name('admin.login');
// Add this route alias so the auth middleware knows where to redirect
Route::get('/login', fn() => redirect()->route('admin.login'))->name('login');

Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.submit');

// Protected Admin Panel Routes
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    
    // Dashboard & Logout
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    
    // Manage Products (CRUD)
    Route::resource('products', AdminProductController::class);

    // Manage Industry Sectors
    Route::get('/sectors', [AdminSectorController::class, 'index'])->name('sectors.index');
    Route::get('/sectors/{sector}/edit', [AdminSectorController::class, 'edit'])->name('sectors.edit');
    Route::put('/sectors/{sector}', [AdminSectorController::class, 'update'])->name('sectors.update');

});