<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes — WONTIME
|--------------------------------------------------------------------------
| Semua request web diarahkan ke Controller yang sesuai.
| Ini adalah pola MVC yang benar: Route → Controller → Model → View
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/testimoni', [HomeController::class, 'storeTestimoni'])->name('testimoni.store');
