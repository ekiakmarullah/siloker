<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\LowonganPekerjaanController;
use App\Http\Controllers\PemberiKerjaController;
use App\Http\Controllers\ProfilAdminController;
use App\Http\Controllers\TipePekerjaanController;
use App\Http\Controllers\InstgramAuthController;

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

// LOGIN REGISTER ROUTE
Auth::routes();

// DASHBOARD ROUTE

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

// LOWONGAN PEKERJAAN ROUTE

Route::get('/dashboard/lowongan-pekerjaan', [LowonganPekerjaanController::class, 'index'])->name('lowongan_pekerjaan')->middleware('auth');

Route::get('/dashboard/lowongan-pekerjaan/data', [LowonganPekerjaanController::class, 'getDataLowonganPekerjaan'])->name('lowongan_pekerjaan.data')->middleware('auth');

Route::get('/dashboard/lowongan-pekerjaan/tambah', [LowonganPekerjaanController::class, 'create'])->name('lowongan_pekerjaan.tambah')->middleware('auth');

Route::post('/dashboard/lowongan-pekerjaan/store', [LowonganPekerjaanController::class, 'store'])->name('lowongan_pekerjaan.store')->middleware('auth');

Route::get('/dashboard/lowongan-pekerjaan/{slug}/edit', [LowonganPekerjaanController::class, 'edit'])->name('lowongan_pekerjaan.edit')->middleware('auth');

Route::post('/dashboard/lowongan-pekerjaan/update/{id}', [LowonganPekerjaanController::class, 'update'])->name('lowongan_pekerjaan.update')->middleware('auth');

Route::delete('/dashboard/lowongan-pekerjaan/delete/{id}',[LowonganPekerjaanController::class, 'delete'])->name("lowongan_pekerjaan.delete")->middleware('auth');

// PEMBERI KERJA

Route::get('/dashboard/pemberi-kerja/data', [PemberiKerjaController::class, 'getDataPemberiKerja'])->name('pemberi_kerja.data')->middleware('auth');

Route::get('/dashboard/pemberi-kerja', [PemberiKerjaController::class, 'index'])->name('pemberi_kerja')->middleware('auth');

Route::get('/dashboard/pemberi-kerja/tambah', [PemberiKerjaController::class, 'create'])->name('tambah_pemberi_kerja')->middleware('auth');

Route::get('/dashboard/pemberi-kerja/{slug}/edit', [PemberiKerjaController::class, 'edit'])->name('pemberi_kerja.edit')->middleware('auth');

Route::post('/dashboard/pemberi-kerja/update/{id}', [PemberiKerjaController::class, 'update'])->middleware('auth');

Route::delete('/dashboard/pemberi-kerja/delete/{id}',[PemberiKerjaController::class, 'delete'])->name("pemberi_kerja.delete")->middleware('auth');

Route::post('/dashboard/pemberi-kerja/store', [PemberiKerjaController::class, 'store'])->middleware('auth')->middleware('auth');

// LOKASI ROUTE
Route::get('/dashboard/lokasi', [LokasiController::class, 'index'])->name('lokasi.index')->middleware('auth');

Route::get('/dashboard/lokasi/data', [LokasiController::class, 'getDataLokasi'])->name('lokasi.data')->middleware('auth');

Route::get('/dashboard/lokasi/create', [LokasiController::class, 'create'])->name('lokasi.create')->middleware('auth');

Route::post('/dashboard/lokasi/store', [LokasiController::class, 'store'])->name('lokasi.store')->middleware('auth');

Route::get('/dashboard/lokasi/{slug}/edit', [LokasiController::class, 'edit'])->name('lokasi.edit')->middleware('auth');

Route::post('/dashboard/lokasi/update/{id}', [LokasiController::class, 'update'])->name('lokasi.update')->middleware('auth');

Route::delete('/dashboard/lokasi/delete/{id}', [LokasiController::class, 'delete'])->name('lokasi.delete')->middleware('auth');

// TIPE PEKERJAAN ROUTE
Route::get('/dashboard/tipe-pekerjaan', [TipePekerjaanController::class, 'index'])->name('tipe_pekerjaan.index')->middleware('auth');

Route::get('/dashboard/tipe-pekerjaan/data', [TipePekerjaanController::class, 'getDataTipePekerjaan'])->name('tipe_pekerjaan.data')->middleware('auth');

Route::get('/dashboard/tipe-pekerjaan/create', [TipePekerjaanController::class, 'create'])->name('tipe_pekerjaan.create')->middleware('auth');

Route::post('/dashboard/tipe-pekerjaan/store', [TipePekerjaanController::class, 'store'])->name('tipe_pekerjaan.store')->middleware('auth');

Route::get('/dashboard/tipe-pekerjaan/{slug}/edit', [TipePekerjaanController::class, 'edit'])->name('tipe_pekerjaan.edit')->middleware('auth');

Route::post('/dashboard/tipe-pekerjaan/update/{id}', [TipePekerjaanController::class, 'update'])->name('tipe_pekerjaan.update')->middleware('auth');

Route::delete('/dashboard/tipe-pekerjaan/delete/{id}', [TipePekerjaanController::class, 'delete'])->name('tipe_pekerjaan.delete')->middleware('auth');


// ADMIN ROUTE
Route::get('/dashboard/profil-admin', [ProfilAdminController::class, 'create'])->name('profil_admin.create')->middleware('auth');

Route::post('/dashboard/profil-admin/store', [ProfilAdminController::class, 'store'])->name('profil_admin.store')->middleware('auth');

// FRONTEND ROUTE
Route::get('/', [HomeController::class, 'index'])->name('home.index');

