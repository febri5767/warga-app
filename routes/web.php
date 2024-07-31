<?php

use App\Http\Controllers\WargaController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DataAgregatController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'index']);
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('proses_login', [AuthController::class, 'proses_login'])->name('proses_login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function () {

    //Warga
    Route::get('/warga', [WargaController::class, 'index'])->name('warga.index');
    Route::get('/warga/tambah', [WargaController::class, 'tambah']);
    Route::post('/warga/proses_tambah', [WargaController::class, 'proses_tambah'])->name('warga.proses_tambah');
    Route::delete('warga/delete/{id}', [WargaController::class, 'proses_delete'])->name('warga.delete');
    //Route::get('searchNama/{nama}', [WargaController::class, 'searchNama']);
    Route::get('/warga/edit/{id}', [WargaController::class, 'edit']);
    Route::post('/warga/proses_edit', [WargaController::class, 'proses_edit'])->name('warga.proses_edit');

    Route::get('/biodata', [BiodataController::class, 'index']);
    Route::get('/agregat', [DataAgregatController::class, 'index']);
    Route::get('/', [DataAgregatController::class, 'index']);

    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::get('/users', [UserController::class, 'index']);
        Route::get('/users/tambah', [UserController::class, 'tambah']);
        Route::post('/users/proses_tambah', [UserController::class, 'proses_tambah'])->name('users.proses_tambah');
        Route::get('/users/edit/{id}', [UserController::class, 'edit']);
        Route::post('/users/proses_edit', [UserController::class, 'proses_edit'])->name('users.proses_edit');
        Route::delete('users/delete/{id}', [UserController::class, 'proses_delete'])->name('users.delete');
    });
});
