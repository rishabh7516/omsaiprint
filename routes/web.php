<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/the-machine', function () {
    return view('machine');
});

Route::get('/gallery', function () {
    return view('gallery');
});

use App\Http\Controllers\IndustryController;

Route::get('/industries', [IndustryController::class, 'index'])->name('industries.index');
Route::get('/industries/{slug}', [IndustryController::class, 'show'])->name('industries.show');

Route::get('/quality', function () {
    return view('quality');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});