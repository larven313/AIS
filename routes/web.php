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

Route::resource('products', ProductController::class);

// Route Mahasiswa
Route::get('mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');


/**
 * Route Asdos
 * */
Route::get("asdos", [AsdosController::class, "index"])->name("asdos");
