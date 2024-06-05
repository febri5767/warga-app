<?php

use App\Http\Controllers\WargaController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DataAgregatController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('proses_login', [AuthController::class, 'proses_login'])->name('proses_login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function () {

    Route::get('/warga', [WargaController::class, 'index']);
    Route::get('/warga/tambah', [WargaController::class, 'tambah']);
    Route::get('/warga/edit/{id}', [WargaController::class, 'edit']);

    Route::get('/users', [UserController::class, 'index']);
    Route::get('/users/tambah', [UserController::class, 'tambah']);
    Route::get('/users/edit/{id}', [UserController::class, 'edit']);

    Route::get('/biodata', [BiodataController::class, 'index']);
    Route::get('/agregat', [DataAgregatController::class, 'index']);
    Route::get('/', [DataAgregatController::class, 'index']);
});
