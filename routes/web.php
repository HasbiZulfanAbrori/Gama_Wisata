<?php

use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\IndexController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/produk', function () {
    return view('produk');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/promo', function () {
    return view('promo');
});

// Route::get('/news', function () {
//     return view('news');
// });

Route::get('news',[BeritaController::class,'index'])->name('berita');
Route::get('artikel/{id}',[ArtikelController::class,'show'])->name('artikel');

// Route::get('/artikel', function () {
//     return view('artikel');
// });

// Route::get('/news', function () {
//     return view('news');
// });


// // ini punyaku
// // Route::get('/halamanadmin', function () {
// //     return view('admin/indexadmin');
// // });



// Route::get('halamanadmin', [DashboardController::class,'halamanadmin'])->name('halamanadminindex');
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
Route::get('/adminnews', [NewsController::class, 'index'])->name('adminnews');
Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
Route::post('/news/store', [NewsController::class, 'store'])->name('news.store');
Route::get('/news/{id}/edit', [NewsController::class, 'edit'])->name('news.edit');
Route::put('/news/{id}', [NewsController::class, 'update'])->name('news.update');
Route::get('/news/{id}/destroy', [NewsController::class, 'destroy'])->name('news.destroy');

// Route Promo
Route::get('/adminpromo', [PromoController::class, 'index'])->name('adminpromo');
Route::get('/promo/create', [PromoController::class, 'create'])->name('promo.create');
Route::post('/promo/store', [PromoController::class, 'store'])->name('promo.store');
Route::get('/promo/{id}/edit', [PromoController::class, 'edit'])->name('promo.edit');
Route::put('/promo/{id}', [PromoController::class, 'update'])->name('promo.update');
Route::get('/promo/{id}/destroy', [PromoController::class, 'destroy'])->name('promo.destroy');

//Route Index
// Route::get('/', [IndexController::class, 'index'])->name('');
Route::get('/adminindex', [IndexController::class, 'index'])->name('adminindex');
Route::get('/index/create', [IndexController::class, 'create'])->name('index.create');
Route::post('/index/store', [IndexController::class, 'store'])->name('index.store');
Route::get('/index/{id}/edit', [IndexController::class, 'edit'])->name('index.edit');
Route::put('/index/{id}', [IndexController::class, 'update'])->name('index.update');
Route::get('/index/{id}/destroy', [IndexController::class, 'destroy'])->name('index.destroy');