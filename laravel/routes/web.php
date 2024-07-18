<?php
use App\Http\Controllers\PemasukanController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('e-dompet', function () {
    return view('e-dompet');
});

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard')->middleware('auth');

Route::get('dataPemasukan',[PemasukanController::class,'dataPemasukan'])->name("dataPemasukan");
Route::get('formPemasukan',[PemasukanController::class,'formPemasukan'])->name("formPemasukan");
Route::post('simpanPemasukan',[PemasukanController::class,'simpanPemasukan'])->name("simpanPemasukan");
Route::get('editPemasukan/{id}', [PemasukanController::class, 'editPemasukan'])->name("editPemasukan");
Route::post('updatePemasukan/{id}', [PemasukanController::class, 'updatePemasukan'])->name("updatePemasukan");
Route::delete('hapusPemasukan/{id}', [PemasukanController::class, 'hapusPemasukan'])->name('hapusPemasukan');


Route::get('dataPengeluaran',[PengeluaranController::class,'dataPengeluaran'])->name("dataPengeluaran");
Route::get('formPengeluaran',[PengeluaranController::class,'formPengeluaran'])->name("formPengeluaran");
Route::post('simpanPengeluaran',[PengeluaranController::class,'simpanPengeluaran'])->name("simpanPengeluaran");
Route::get('editPengeluaran/{id}', [PengeluaranController::class, 'editPengeluaran'])->name("editPengeluaran");
Route::post('updatePengeluaran/{id}', [PengeluaranController::class, 'updatePengeluaran'])->name("updatePengeluaran");
Route::delete('hapusPengeluaran/{id}', [PengeluaranController::class, 'hapusPengeluaran'])->name('hapusPengeluaran');

Route::get('formLaporan', [LaporanController::class, 'formLaporan'])->name('formLaporan');
Route::post('hitungLaporan', [LaporanController::class, 'hitungLaporan'])->name('hitungLaporan');

