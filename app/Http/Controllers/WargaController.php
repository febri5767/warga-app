<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    public function index()
    {
        $warga = Warga::all();
        return view('warga.index', compact('warga'));
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
