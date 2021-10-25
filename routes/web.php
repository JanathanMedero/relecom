<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('nosotros', [HomeController::class, 'us'])->name('us');
Route::get('servicios', [HomeController::class, 'services'])->name('services');
Route::get('contacto', [HomeController::class, 'contact'])->name('contact');