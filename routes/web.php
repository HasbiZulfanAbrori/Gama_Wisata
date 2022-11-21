<?php

use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactUsController;


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


Route::get('/profile', [ProfileController::class, 'profilefrontend'])->name('profile');



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
Route::get('/', [IndexController::class, 'datanews'])->name('');
Route::get('/adminindex', [IndexController::class, 'index'])->name('adminindex');
Route::get('/index/create', [IndexController::class, 'create'])->name('index.create');
Route::post('/index/store', [IndexController::class, 'store'])->name('index.store');
Route::get('/index/{id}/edit', [IndexController::class, 'edit'])->name('index.edit');
Route::put('/index/{id}', [IndexController::class, 'update'])->name('index.update');
Route::get('/index/{id}/destroy', [IndexController::class, 'destroy'])->name('index.destroy');

// Route Download
Route::get('/admindownload', [DownloadController::class, 'index'])->name('admindownload');
Route::get('/download', [DownloadController::class, 'tampil'])->name('download');
Route::get('/download/create', [DownloadController::class, 'create'])->name('download.create');
Route::post('/download/store', [DownloadController::class, 'store'])->name('download.store');
Route::get('/download/{id}/edit', [DownloadController::class, 'edit'])->name('download.edit');
Route::put('/download/{id}', [DownloadController::class, 'update'])->name('download.update');
Route::get('/download/{id}/destroy', [DownloadController::class, 'destroy'])->name('download.destroy');

// Route Profile
Route::get('/adminprofile', [ProfileController::class, 'index'])->name('adminprofile');
Route::get('/profile/create', [ProfileController::class, 'create'])->name('profile.create');
Route::post('/profile/store', [ProfileController::class, 'store'])->name('profile.store');
Route::get('/profile/{id}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');
Route::get('/profile/{id}/destroy', [ProfileController::class, 'destroy'])->name('profile.destroy');

//Route Contact Us
Route::get('/admincontact', [ContactUsController::class, 'index'])->name('admincontact');
Route::get('/contact/create', [ContactUsController::class, 'create'])->name('contact.create');
Route::post('/contact/store', [ContactUsController::class, 'store'])->name('contact.store');
Route::get('/contact/{id}/edit', [ContactUsController::class, 'edit'])->name('contact.edit');
Route::put('/contact/{id}', [ContactUsController::class, 'update'])->name('contact.update');
Route::get('/contact/{id}/destroy', [ContactUsController::class, 'destroy'])->name('contact.destroy');
Route::get('/download/{id}/destroy', [DownloadController::class, 'destroy'])->name('download.destroy');