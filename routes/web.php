<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortoController;
use App\Http\Controllers\DinamisController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\TransaksiController;
use App\Models\Transaksi;
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

Route :: get ('home',[PortoController::class, 'index']);

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/postregister',[AuthController::class, 'postregister']);

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/postlogin',[AuthController::class, 'postlogin']);

Route::get('web/beranda', [DinamisController::class,'beranda']);
Route::get('web/profil', [DinamisController::class,'profil']);
Route::get('web/kontak', [DinamisController::class,'kontak']);

Route::get('/login',[AuthController::class,'login'])->name('login');
Route::get('/register',[AuthController::class,'register'])->name('register');
Route::get('/logout',[AuthController::class,'logout']);

Route::get('/dashboard',[AdminController::class,'dashboard'])->name('dashboard');

//Report PDF
Route::get('/downloadpdf',[TransaksiController::class,'downloadpdf']);
Route::get('/transaksipdf', function(){
    $transaksi = Transaski::with('pelanggan', 'kasir', 'kategori')->get();
    return view('admin.transaksi.export', compact('transaksi'));
});
Route::get('transaksi/{transaksi}/cetakstruk', [TransaksiController::class, 'cetakstruk']);
//cetakstruk

Route::get('/pelanggan',[PelangganController::class,'index']);
Route::get('/pelanggan/create',[PelangganController::class,'create']);
Route::post('/pelanggan/store',[PelangganController::class,'store']);
Route::get('/pelanggan/{id}/edit',[PelangganController::class,'edit']);
Route::post('/pelanggan/{id}/update',[PelangganController::class,'update']);
Route::get('/pelanggan/{id}/delete',[PelangganController::class,'destroy']);
Route::get('/pelanggan/search',[PelangganController::class,'search']);

Route::get('/pelanggan/kasir',[PelangganController::class,'kasir']);


Route::get('/kasir',[KasirController::class,'index']);
Route::get('/kasir/create',[KasirController::class,'create']);
Route::post('/kasir/store',[KasirController::class,'store']);
Route::get('/kasir/{id}/edit',[KasirController::class,'edit']);
Route::post('/kasir/{id}/update',[KasirController::class,'update']);
Route::get('/kasir/{id}/delete',[KasirController::class,'destroy']);
Route::get('/kasir/search',[KasirController::class,'search']);

Route::get('/kategori',[KategoriController::class,'index']);
Route::get('/kategori/create',[KategoriController::class, ('create')]);
Route::post('/kategori/store',[KategoriController::class,'store']);
Route::get('/kategori/{id}/edit',[KategoriController::class,'edit']);
Route::post('/kategori/{id}/update',[KategoriController::class,'update']);
Route::get('/kategori/{id}/delete',[KategoriController::class,'destroy']);
Route::get('/kategori/search',[KategoriController::class,'search']);

Route::get('/transaksi',[TransaksiController::class,'index']);
Route::get('/transaksi/create',[TransaksiController::class, ('create')]);
Route::post('/transaksi/store',[TransaksiController::class,'store']);
Route::get('/transaksi/{id}/edit',[TransaksiController::class,'edit']);
Route::post('/transaksi/{id}/update',[TransaksiController::class,'update']);
Route::get('/transaksi/{id}/delete',[TransaksiController::class,'destroy']);
Route::get('/transaksi/search',[TransaksiController::class,'search']);

//Route::get('/pembayaran/pelanggan',[PembayaranController::class,'pelanggan']);