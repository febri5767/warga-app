<?php

use App\Http\Controllers\WargaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WargaController::class, 'index']);
Route::get('/warga/tambah', [WargaController::class, 'tambah']);
Route::get('/warga/edit/{id}', [WargaController::class, 'edit']);
