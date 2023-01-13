<?php

use App\Http\Controllers\AsdosController;
use App\Http\Controllers\MahasiswaController;
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

Route::get('/', function () {
    return view('index');
});

// Route Mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::post('/mahasiswa/store', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
Route::get('/mahasiswa/edit{idmhs}', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::post('/mahasiswa/update{idmhs}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
Route::get('/mahasiswa/destroy{idmhs}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');

Route::get('mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');

// Route Asdos
Route::get("asdos", [AsdosController::class, "index"])->name("asdos");
