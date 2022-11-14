<?php

use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProdukController;


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


Route::get('/profil', function () {
    return view('frontend.profil');
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

// Route Produk
Route::get('/adminproduk', [ProdukController::class, 'index'])->name('adminproduk');
Route::get('/produk', [ProdukController::class, 'tampil_produk'])->name('produk');
Route::get('/produk/create', [ProdukController::class, 'create'])->name('produk.create');
Route::post('/produk/store', [ProdukController::class, 'store'])->name('produk.store');
Route::get('/produk/{id}/edit', [ProdukController::class, 'edit'])->name('produk.edit');
Route::put('/produk/{id}', [ProdukController::class, 'update'])->name('produk.update');
Route::get('/produk/{id}/destroy', [ProdukController::class, 'destroy'])->name('produk.destroy');

//Route Index
Route::get('/', [IndexController::class, 'index'])->name('');