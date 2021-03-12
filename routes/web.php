<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//--------------------------PRAKTIKUM 1------------------------
// Route::get('/', [HomeController::class, 'home']);
// Route::prefix('product')->group(function () {
//     Route::get('/halaman1', [HomeController::class, 'product']);
// });
// Route::get('/news/{param}',[HomeController::class,'news']);
// Route::prefix('program')->group(function () {
//     Route::get('/halaman1', [HomeController::class, 'program']);
// });
// Route::get('/about-us', [HomeController::class, 'aboutUs']);
// Route::get('/contact-us', [HomeController::class, 'contactUs']);

//--------------------------PRAKTIKUM 2------------------------
    Route::get('/', [HomeController::class, 'home']);
    Route::get('/about', [HomeController::class, 'about']);
    Route::get('/features', [HomeController::class, 'features']);
    Route::get('/contact', [HomeController::class, 'contact']);
    Route::get('/barang', [HomeController::class, 'barang']);
    Route::get('/pelanggan', [HomeController::class, 'pelanggan']);
    Route::get('/pegawai', [HomeController::class, 'pegawai']);
    Route::get('/supplier', [HomeController::class, 'supplier']);
