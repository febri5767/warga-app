<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WargaController extends Controller
{
    public function index()
    {
        return view('warga.index');
    }
    public function tambah()
    {
        return view('warga.tambah');
    }
    public function edit(Request $request)
    {
        return view('warga.edit');
    }
}
