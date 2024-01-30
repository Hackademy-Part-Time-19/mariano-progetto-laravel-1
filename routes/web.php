<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [MainController::class, 'index'])->name('home');

Route::get('/articoli', [MainController::class, 'articles'])->name("articoli");

Route::get('/chisono', [MainController::class, 'contacts'])->name("chisono");

Route::get("/articolo/{id}", [MainController::class, 'article'])-> name("articolo");