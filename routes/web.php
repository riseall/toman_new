<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DokumentasiController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KalibrasiController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\PermintaanController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TollController;
use App\Http\Controllers\UserController;
use App\Models\FasilitasProduksi;
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
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/entities/search', [CompanyController::class, 'search'])->name('entities.search');
Route::post('/profile/identity', [HomeController::class, 'saveIdentity'])->name('profile.identity.save');

Route::group(['middleware' => ['auth', 'role:super_admin|admin_toti']], function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

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
    Route::get('/admPermintaan', [TollController::class, 'indexPermintaan'])->name('companies.index');
    Route::get('/admPermintaan/{entity_code}/show', [TollController::class, 'showPermintaan'])->name('companies.show');
    Route::get('/admPermintaan/{entity_code}/data', [TollController::class, 'getPermintaans'])->name('companies.data');
    Route::get('/admKalibrasi', [TollController::class, 'indexKalibrasi'])->name('kalibrasi.index');
    Route::get('/admKalibrasi/{entity_code}/show', [TollController::class, 'showKalibrasi'])->name('kalibrasi.show');
    Route::get('/admKalibrasi/{entity_code}/data', [TollController::class, 'getKalibrasis'])->name('kalibrasi.data');

    // Route Untuk Admin (Pesan)
    Route::get('/pesan', [ContactController::class, 'indexPesan'])->name('pesan.index');

    // Route Untuk Admin (Portofolio)
    Route::resource('porto', PortofolioController::class)->only('store', 'edit', 'update');
    Route::get('/porto', [PortofolioController::class, 'admIndex'])->name('porto.index');
    Route::get('/porto/data', [PortofolioController::class, 'getPorto'])->name('porto.data');

    // Route Untuk Admin (Dokumentasi)
    Route::resource('dok', DokumentasiController::class)->only('index', 'store', 'edit', 'update');
    Route::get('/dok/data', [DokumentasiController::class, 'getDok'])->name('dok.data');
});

// Route Layanan
Route::get('/layanan/toll_murni', [LayananController::class, 'getTollMurni'])->name('toll_murni');
Route::get('/layanan/toll_beli', [LayananController::class, 'getTollBeli'])->name('toll_beli');
Route::get('/layanan/kalibrasi', [LayananController::class, 'getKalibrasi'])->name('kalibrasi');
Route::post('/layanan/kalibrasi/add', [LayananController::class, 'storeKalibrasi'])->name('kalibrasi.store');

Route::group(['middleware' => ['auth']], function () {
    // Route untuk Permintaan
    Route::resource('permintaan', PermintaanController::class)->only('index', 'create', 'store');
    Route::get('/permintaan/data', [PermintaanController::class, 'getData'])->name('permintaan.data');
    Route::get('/monitoring/data', [MonitoringController::class, 'data'])->name('monitoring.data');
});

// Route untuk Kalibrasi
Route::resource('cal', KalibrasiController::class)->only('index', 'create', 'store');
Route::get('/cal/data', [KalibrasiController::class, 'getData'])->name('cal.data');

// Route untuk export PDF
Route::get('/permintaan/{id}/pdf', [PdfController::class, 'exportPdf'])->name('permintaan.export_pdf');
Route::get('/admKalibrasi/{id}/pdf', [PdfController::class, 'exportKali'])->name('kalibrasi.export_pdf');

// Route Untuk Kontak
Route::get('/kontak', [ContactController::class, 'index'])->name('kontak.index');
Route::post('/kontak', [ContactController::class, 'store'])->name('kontak.store');

// Route Untuk Portofolio
Route::get('/portofolio', [PortofolioController::class, 'index'])->name('portofolio.index');

// Route untuk Alur Maklon
Route::get('/alur', function () {
    $fasilitas = FasilitasProduksi::all();
    return view('user.alur.index', compact('fasilitas'));
})->name('alur.index');


require __DIR__ . '/auth.php';
