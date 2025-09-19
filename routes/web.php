<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\FasilitasProduksiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\PermintaanController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TollController;
use App\Http\Controllers\UserController;
use App\Models\FasilitasProduksi;
use App\Models\User;
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

Route::group(['middleware' => ['role:super_admin|admin_toti']], function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

// Route Layanan
Route::get('/layanan/toll_murni', [LayananController::class, 'getTollMurni'])->name('toll_murni');
Route::get('/layanan/toll_beli', [LayananController::class, 'getTollBeli'])->name('toll_beli');
Route::get('/layanan/kalibrasi', [LayananController::class, 'getKalibrasi'])->name('kalibrasi');
Route::post('/layanan/kalibrasi/add', [LayananController::class, 'storeKalibrasi'])->name('kalibrasi.store');

// Route Untuk Admin (User)
Route::resource('user', UserController::class)->except('show', 'destroy');
Route::get('/user/data', [UserController::class, 'getUser'])->name('user.data');

// Route Untuk Admin (Company)
Route::resource('company', CompanyController::class)->only('index', 'store');
Route::get('/company/{entity_code}/edit', [CompanyController::class, 'edit'])->name('company.edit');
Route::put('/company/{entity_code}', [CompanyController::class, 'update'])->name('company.update');
Route::get('/company/data', [CompanyController::class, 'getCompany'])->name('company.data');

// Route untuk Admin (Product)
Route::resource('product', ProductController::class)->only('index', 'store', 'edit', 'update');
Route::get('/product/data', [ProductController::class, 'getProduct'])->name('product.data');

// Route untuk Admin (Fasilitas Produksi)
Route::resource('fasilitas', FasilitasController::class)->only('index', 'store');
Route::get('/fasilitas/{id}/edit', [FasilitasController::class, 'edit'])->name('fasilitas.edit');
Route::put('/fasilitas/{id}', [FasilitasController::class, 'update'])->name('fasilitas.update');
Route::get('/fasilitas/data', [FasilitasController::class, 'getFasilitas'])->name('fasilitas.data');

// Route Untuk Admin (Permintaan)
Route::get('/admPermintaan', [TollController::class, 'index'])->name('companies.index');
Route::get('/admPermintaan/{entity_code}/show', [TollController::class, 'show'])->name('companies.show');
Route::get('/admPermintaan/{entity_code}/data', [TollController::class, 'getPermintaans'])->name('companies.data');

// Route untuk Permintaan
Route::resource('permintaan', PermintaanController::class)->only('index', 'create', 'store');
Route::get('/permintaan/data', [PermintaanController::class, 'getData'])->name('permintaan.data');

// Route untuk export PDF
Route::get('/permintaan/{id}/pdf', [PdfController::class, 'exportPdf'])->name('permintaan.export_pdf');

// Route Untuk Kontak
Route::get('/kontak', [ContactController::class, 'index'])->name('kontak.index');
Route::post('/kontak', [ContactController::class, 'store'])->name('kontak.store');

// Route Untuk Portofolio
Route::get('/portofolio', function () {
    return view('user.portofolio.porto');
})->name('portofolio.index');

// Route untuk Alur Maklon
Route::get('/alur', function () {
    return view('user.alur.index');
})->name('alur.index');

require __DIR__ . '/auth.php';
