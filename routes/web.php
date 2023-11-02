<?php
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ResponceController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ShopController;
use App\Models\Category;
use App\Http\Controllers\Auth\LoginController;
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


//Route::get('/category/{slug}',[ShopController::class, 'category'])->name('category');
Route::get('/category/{category:slug}',[ShopController::class, 'category'])->name('category');

Route::get('/product/{product:slug}', [ShopController::class, 'product'])->name('product');

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function()
{
    Route::get('/', [DashboardController::class, 'index'])->name('admin/dashboard');
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::resource('responces', ResponceController::class);
});


//Route::get('/product/{slug}', [ProductController::class, 'productDetails'])->where('product', '\d+')->name('product');


Auth::routes();


