<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TrialController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/first', [HomeController::class, 'first'])->name('first');
Route::get('/plan', [HomeController::class, 'plan'])->name('plan');
Route::get('/class', [HomeController::class, 'class'])->name('class');
Route::get('/instructor', [HomeController::class, 'instructor'])->name('instructor');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');

Route::get('/trial', [TrialController::class, 'index'])->name('trial');
Route::post('/trial', [TrialController::class, 'register']);
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'register']);



require __DIR__.'/auth.php';
