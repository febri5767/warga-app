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

    public function proses_tambah(Request $request)
    {
        $request->validate([
            'id' => 'required|unique:produk',
            'nama' => 'required',
            'tempat_lahir' => 'required|integer',
            'tgl_lahir' => 'required',
            'kelamin_id' => 'required|exists:m_kelamin,id',
            'status_id' => 'required|exists:m_status,id',
            'goldar_id' => 'required|exists:m_goldar,id',
            'pekerjaan' => 'required',
        ]);

        $data = array(
            'id' => $request->id,
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'kelamin_id' => $request->kelamin_id,
            'status_id' => $request->status_id,
            'goldar_id' => $request->goldar_id,
            'pekerjaan' => $request->pekerjaan,
        );
        Warga::create($data);
        return redirect('/produk');
    }
    public function edit(Request $request)
    {
        return view('warga.edit');
    }
}
