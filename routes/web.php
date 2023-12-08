<?php

use App\Http\Controllers\KasirController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\Pegawai;
use App\Http\Controllers\HomeController;
use App\Livewire\Kasir\Keranjang;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


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
Route::middleware('guest')->group(function () {
});


Route::get('/', function () {
    return view('welcome');
});
Route::get('/outlet', function () {
    return view('outlet/show');
});
Route::get('/outlet/tambah', [OutletController::class, 'store'])->name('outlet.store');
Route::get('/outlet/{id}/edit', [OutletController::class, 'edit'])->name('outlet.edit');

Route::get('/user/{id}', [Pegawai::class, 'show'])->name('user.show');
Route::get('/user/{id}/tambah', [Pegawai::class, 'store'])->name('user.store');
Route::get('/user/{id}/edit', [Pegawai::class, 'edit'])->name('user.edit');

Route::get('/paket/{id}', [PaketController::class, 'show'])->name('paket_outlet.show');
Route::get('/paket/{id}/store', [PaketController::class, 'store'])->name('paket_outlet.store');
Route::get('/paket/{id}/edit', [PaketController::class, 'edit'])->name('paket_outlet.edit');

Route::get('/dashboard', [KasirController::class, 'index'])->name('dashboard.show');
Route::get('/keranjang', [KasirController::class, 'keranjang'])->name('keranjang');
Route::get('/checkout', [KasirController::class, 'checkout'])->name('checkout');

Auth::routes();

Route::middleware('guest')->group(function () {
    Route::post('/login', [LoginController::class, 'login'])->name('login');
});
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


