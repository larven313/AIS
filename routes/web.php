<?php

use App\Http\Controllers\AsdosController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
    Route::get('/', function () {
        return view('index');
    });
    /**
     * * Route Mahasiswa
     * */
    Route::get('mahasiswa', [MahasiswaController::class, "index"])->name('mahasiswa');
    /**
     * * Route Asdos    
     * */
    // Route::resource('asdos', AsdosController::class);

    /**
     * * Route Users    
     * */
    Route::get('/users', [UsersController::class, 'index'])->name('users');

    Route::get('/users/create', [UsersController::class, 'create'])->name('users.create');
    Route::post('/users/store', [UsersController::class, 'store'])->name('users.store');

    Route::get('/users/update/{id}', [UsersController::class, 'update'])->name('users.update');
    Route::post('/users/edit/{id}', [UsersController::class, 'edit'])->name('users.edit');

    Route::get('/users/destroy/{id}', [UsersController::class, 'destroy'])->name('users.destroy');

    Route::get('/users/detail/{id}', [UsersController::class, 'show'])->name('users.detail');


    /**
     * * Route Presensi    
     * */
    Route::get('/presensi', [PresensiController::class, 'index'])->name('presensi');

    Route::get('/presensi/create', [PresensiController::class, 'create'])->name('presensi.create');
    Route::post('/presensi/store', [PresensiController::class, 'store'])->name('presensi.store');

    Route::get('/presensi/update/{id}', [PresensiController::class, 'update'])->name('presensi.update');
    Route::post('/presensi/edit/{id}', [PresensiController::class, 'edit'])->name('presensi.edit');

    Route::get('/presensi/destroy/{id}', [PresensiController::class, 'destroy'])->name('presensi.destroy');

    Route::get('/presensi/detail/{id}', [PresensiController::class, 'show'])->name('presensi.detail');

    /**
     * * Route Auth    
     * */
    // Route::get('dashboard', [AuthController::class, 'dashboard']);

    Route::get('signout', [AuthController::class, 'signOut'])->name('signout');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
