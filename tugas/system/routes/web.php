<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

Route::get('home', function () {
    return view('shop.home');
});

Route::get('about', function () {
    return view('shop.about');
});

Route::get('product', function () {
    return view('shop.product');
});

Route::get('contact', function () {
    return view('shop.contact');
});

Route::get('login', function () {
    return view('login');
});




Route::get('kategori', function () {
    return view('kategori');
});




Route::get('dashboard', [HomeController::class, 'showDashboard']);
Route::get('kategori', [HomeController::class, 'showKategori']);
Route::get('registrasi', [AuthController::class, 'showRegistrasi']);

Route::get('test/{produk}/{hargaMin?}/{hargaMax?}', [HomeController::class, 'test']);

Route::prefix('admin')->group(function(){
    Route::post('produk/filter', [ProdukController::class, 'filter']);
    Route::resource('produk', ProdukController::class);
    Route::resource('user', UserController::class);

});

Route::get('login', [AuthController::class, 'showLogin']);
Route::post('login', [AuthController::class,'loginProcess']);
Route::post('logout', [AuthController::class,'logout']);


