<?php

use App\Http\Controllers\KepegawaianController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KesiswaanController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\AuthController;
use App\Models\Kesiswaan;
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

Route::get('/', [DashboardController::class, 'index']);
Route::get('/prsonalData', [DashboardController::class, 'prsonalData']);
Route::get('/management', [DashboardController::class, 'management']);
Route::get('/keuangan', [DashboardController::class, 'keuangan']);

//kelas
Route::get('/dataKelas', [KelasController::class, 'index']);
Route::get('/tambahKelas', [KelasController::class, 'tambahKelas']);

// Keuangan
Route::get('/dataKeuanganSiswa', [KeuanganController::class, 'dataKeuanganSiswa'])->name('dataKeuanganSiswa');
Route::get('/viewKeuanganSiswa/{id}', [KeuanganController::class, 'viewKeuanganSiswa'])->name('viewKeuanganSiswa');


//guru
Route::get('/dataGuru', [GuruController::class, 'index']);
Route::get('/tambahGuru', [GuruController::class, 'tambahGuru']);
// Login
Route::get('login', [AuthController::class, 'index']);

//siswa
Route::get('/dataSiswa', [SiswaController::class, 'index'])->name('dataSiswa');
Route::get('/tambahSiswa', [SiswaController::class, 'tambahSiswa']);
Route::post('tambahDataSiswa', [SiswaController::class, 'tambahDataSiswa'])->name('tambahDataSiswa');

// ===== lama
Route::get('siswa_aktif',[KesiswaanController::class , 'index'])->name('siswa_aktif');
Route::get('tambah_siswa', [KesiswaanController::class, 'tambahSiswa'])->name('tambah_siswa');
Route::post('tambah_data_siswa', [KesiswaanController::class, 'tambahDataSiswa'])->name('tambah_data_siswa');
Route::get('tampil_data_siswa/{id}', [KesiswaanController::class, 'tampilDataSiswa'])->name('tampil_data_siswa');

Route::get('update_siswa/{id}', [KesiswaanController::class, 'updateSiswa'])->name('update_siswa');
Route::post('update_data_siswa/{id}', [KesiswaanController::class, 'updateDataSiswa'])->name('update_data_siswa');
Route::get('delete_data_siswa/{id}', [KesiswaanController::class, 'deleteDataSiswa'])->name('delete_data_siswa');

//kepegawaian

Route::get('/dataPegawai', [PegawaiController::class, 'index']);
Route::get('/tambahPegawai', [PegawaiController::class, 'tambahPegawai']);

//lama
Route::get('kepegawaian',[KepegawaianController::class , 'index'])->name('kepegawaian');
Route::get('tambah_pegawai', [KepegawaianController::class, 'tambahPegawai'])->name('tambah_pegawai');
Route::post('tambah_data_pegawai', [KepegawaianController::class, 'tambahDataPegawai'])->name('tambah_data_pegawai');
Route::get('tampil_data_pegawai/{id}', [KepegawaianController::class, 'tampilDataSiswa'])->name('tampil_data_pegawai');

Route::get('update_pegawai/{id}', [KepegawaianController::class, 'updatePegawai'])->name('update_pegawai');
Route::post('update_data_pegawai/{id}', [KepegawaianController::class, 'updateDataPegawai'])->name('update_data_pegawai');
Route::get('delete_data_pegawai/{id}', [KepegawaianController::class, 'deleteDataPegawai'])->name('delete_data_pegawai');

Route::get('settings', [SettingsController::class, 'index']);