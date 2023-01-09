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

/**
 * * Route Mahasiswa
 * */
Route::resource('mahasiswa', MahasiswaController::class);

/**
 * * Route Asdos    
 * */
Route::resource('asdos', AsdosController::class);
