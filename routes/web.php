<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FasilitasProduksiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\PermintaanController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

// Route Beranda
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => ['role:super_admin']], function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

// Route Layanan
Route::get('/layanan/toll_murni', [FasilitasProduksiController::class, 'index'])->name('toll_murni');

Route::get('/layanan/toll_beli', function () {
    return view('user.layanan.toll_beli');
})->name('toll_beli');

Route::get('/layanan/kalibrasi', function () {
    return view('user.layanan.kalibrasi');
})->name('kalibrasi');


// Route Untuk Admin (User)
Route::resource('user', 'App\Http\Controllers\UserController');

// Route untuk Admin (Product)
Route::get('/product', [ProductController::class, 'showProduct'])->name('product.show');
Route::post('/product/add', [ProductController::class, 'storeProduct'])->name('product.add');
Route::put('/product/update/{id}', [ProductController::class, 'updateProduct'])->name('product.update');
Route::delete('/product/{id}', [ProductController::class, 'deleteProduct'])->name('product.destroy');

// Route untuk Permintaan
Route::resource('permintaan', PermintaanController::class)->only('index', 'create', 'store');
Route::get('/permintaan/data', [PermintaanController::class, 'getData'])->name('permintaan.data');

// Route untuk export PDF
Route::get('/permintaan/{id}/pdf', [PdfController::class, 'exportPdf'])->name('permintaan.export_pdf');


// Route Untuk Kontak
Route::get('/kontak', [ContactController::class, 'index'])->name('kontak.index');
Route::post('/kontak', [ContactController::class, 'store'])->name('kontak.store');

require __DIR__ . '/auth.php';
