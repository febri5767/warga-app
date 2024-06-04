<?php

use App\Http\Controllers\WargaController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DataAgregatController;
use Illuminate\Support\Facades\Route;

Route::get('/warga', [WargaController::class, 'index']);
Route::get('/warga/tambah', [WargaController::class, 'tambah']);
Route::get('/warga/edit/{id}', [WargaController::class, 'edit']);

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/tambah', [UserController::class, 'tambah']);
Route::get('/users/edit/{id}', [UserController::class, 'edit']);

Route::get('/biodata', [BiodataController::class, 'index']);
Route::get('/agregat', [DataAgregatController::class, 'index']);