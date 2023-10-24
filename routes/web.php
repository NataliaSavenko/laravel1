<?php
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ResponceController;
use App\Http\Controllers\MainController;
use App\Models\Category;
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

Route::get('admin', [DashboardController::class, 'index'])->name('admin/dashboard');
Route::resource('admin/categories', CategoryController::class);

Route::get('admin', [ResponceController::class, 'index'])->name('admin/responces');
Route::resource('admin/responces', ResponceController::class);



use App\Http\Controllers\HomeController;
 
Route::get('/home', [HomeController::class, 'index']);

/* Route::get('category/{category}', function(Category $category){
    dd($category);

    //$category = Category::find($id);s
    return view();
}); */