<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;

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




// Menampilkan halaman home
Route::get('/home', [HomeController::class, 'home'])->name('home');

// Menampilkan halaman product
Route::prefix('product')->group(function () {
    Route::get('/', [ProductController::class, 'product'])->name('product');
});

// Menampilkan halaman News
Route::get('/news/{topic}', [NewsController::class, 'news'])->name('news');

// Menampilkan halaman program
// Route::prefix('program')->group(function () {
//     Route::get('/', [ProgramController::class, 'program'])->name('program');
// });
Route::prefix('program')->group(function () {
    Route::get('/', [ProgramController::class, 'program'])->name('program');
    // Route::get('/{id}', [ProgramController::class, 'detail'])->name('detail');
});

// Menampilkan halaman about
Route::get('/about', [AboutController::class, 'about'])->name('about');

// Menampilkan halaman contact
Route::resource('/contact', ContactController::class)->only(['index']);
