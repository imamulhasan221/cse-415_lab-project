<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

// Home Page
Route::get('/', function () {
    return view('home');
})->name('home');

// Authentication Routes (for guests only)
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.post');
});

// Contact Routes
Route::get('/contact', function () {
    return view('contact');
})->name('contact.show');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Pricing Page
Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');

// Review Routes
Route::get('/review', [ReviewController::class, 'index'])->name('review.index');
Route::post('/review', [ReviewController::class, 'store'])->name('review.store');

// Service Pages
Route::get('/wedding_planning', function () {
    return view('wedding_planning');
})->name('wedding.planning');

Route::get('/corporate', function () {
    return view('corporate');
})->name('corporate.events');

/*
|--------------------------------------------------------------------------
| Authenticated Routes
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});