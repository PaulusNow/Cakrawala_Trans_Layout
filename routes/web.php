<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\RegisterController;
use Illuminate\Routing\Route as RoutingRoute;

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

// Route::get('/', function () {
//     return view('index', [
//         "title" => "Beranda"
//     ]);
// });

Route::get('/about', function () {
    return view('about', [
        "title" => "Tentang Kami"
    ]);
});
// Route::get('/login', function () {
//     return view('login', [
//         "title" => "Login"
//     ]);
// });
Route::get('/produk', function () {
    return view('produk', [
        "title" => "Produk"
    ]);
});
Route::get('/bantuan', function () {
    return view('bantuan', [
        "title" => "Pusat Bantuan"
    ]);
});
Route::get('/pesan', [PesanController::class, 'index'])->middleware('auth');
Route::get('/pesan-konfirmasi', [PesanController::class, 'pesan'])->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'auth']);
Route::post('logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/admin', function() {
    return view('admin.index');
});

Route::get('/', [HomeController::class, 'index']);