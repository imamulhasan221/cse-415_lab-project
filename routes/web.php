<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ReviewController;

Route::get('/', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/pricing', function () {
    return view('pricing');
});
Route::get('/review', function () {
    return view('review');
});
Route::post('/review', [ReviewController::class, 'store'])->name('review.store');


Route::get('/review', [ReviewController::class, 'index'])->name('review');
Route::post('/review', [ReviewController::class, 'store'])->name('review.submit');

Route::post('/review/store', [ReviewController::class, 'store'])->name('review.store');