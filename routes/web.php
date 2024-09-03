<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\ProductController;
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

Route::get('/about', function () {
    return view('about', [
        "title" => "Tentang Kami"
    ]);
});
Route::get('/produk', [ProductController::class, 'index']);
Route::get('/bantuan', function () {
    return view('bantuan', [
        "title" => "Pusat Bantuan"
    ]);
});
Route::get('/pesanan', [PesanController::class, 'index']);
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

Route::get('/auth/google', [App\Http\Controllers\GoogleController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/auth/google/callback', [App\Http\Controllers\GoogleController::class, 'handleGoogleCallback'])->name('auth.google.callback');

Route::middleware(['admin'])->group(function() {
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/users', [AdminController::class, 'users']);
    Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');
    route::put('/users/{id}', [AdminController::class, 'update'])->name('users.update');
    Route::put('/users/{id}/make-admin', [AdminController::class, 'makeAdmin'])->name('users.makeAdmin');
});
