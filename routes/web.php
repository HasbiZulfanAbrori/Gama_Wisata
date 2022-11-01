<?php

use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ArtikelController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/profil', function () {
    return view('profil');
});

// Route::get('/news', function () {
//     return view('news');
// });

Route::get('news',[BeritaController::class,'index'])->name('berita');
Route::get('artikel',[ArtikelController::class,'index'])->name('artikel');

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


// // Route::get('/inputadminnews', function () {
// //     return view('admin/adminnews/inputadminnews');
// // });

// Route::get('halamanadmin', [DashboardController::class,'halamanadmin'])->name('halamanadminindex');
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
Route::get('/adminnews', [NewsController::class, 'index'])->name('adminnews');
Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
Route::post('/news/store', [NewsController::class, 'store'])->name('news.store');