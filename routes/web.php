<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

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
Route::get('contacts', [MainController::class, 'contacts'])->name('contacts');
Route::post('contacts', [MainController::class, 'sendEmail'])->name('sendEmail');

Route::get('zajava', [MainController::class, 'zajava'])->name('zajava');
Route::post('zajava', [MainController::class, 'sendZajava'])->name('sendZajava');

Route::get('reviews', [MainController::class, 'reviews'])->name('reviews');
Route::post('reviews', [MainController::class, 'responseS'])->name('responseS');

//Route::get('admin', [Dush::class, 'reviews'])->name('reviews');
//Route::post('reviews', [MainController::class, 'responseS'])->name('responseS');
