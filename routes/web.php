<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

Route::get('/info', function () {
    return view('info', [
        "title" => "Info"
    ]);
});

Route::get('/info', function () {
    return view('pesan', [
        "title" => "pesan"
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index'])->name('login')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

//MITRA
Route::get('/mitra', function () {
    return view('mitra.index');
})->middleware('auth');
Route::get('/profil', [userController::class, 'profil'])->name('profil')->middleware('auth');
Route::get('/produk', [UserController::class, 'buat_produk'])->name('produk')->middleware('auth');
Route::post('/update_profil/{id}', [UserController::class, 'update_profil'])->name('update_profil')->middleware('auth');

//produk
Route::post('/create/{id}', [ProductController::class, 'create'])->name('create')->middleware('auth');
Route::get('/list_product', [ProductController::class, 'list_product'])->name('list')->middleware('auth');
Route::get('/edit_product/{id}', [ProductController::class, 'edit'])->name('edit')->middleware('auth');
Route::post('/update_product/{id}', [ProductController::class, 'update'])->name('update')->middleware('auth');

//PELANGGAN
Route::get('/pelanggan', function () {
    return view('pelanggan.index');
})->middleware('auth');
