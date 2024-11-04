<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\ContactController;

// Home route
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/products', function () {
    return view('product'); // This points to resources/views/product.blade.php
})->name('products');


// Contact route using a controller
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');

// Upload form route
Route::get('/upload', function () {
    return view('upload');
})->name('upload.form');

// Image upload route
Route::post('/upload', [ImageUploadController::class, 'store'])->name('upload.image');

// Authentication routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Dashboard route with middleware
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile management routes protected by authentication
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Include authentication routes
require __DIR__.'/auth.php';
