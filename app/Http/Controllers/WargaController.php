<?php

namespace App\Http\Controllers;

use App\Models\M_goldar;
use App\Models\M_kelamin;
use App\Models\M_status;
use App\Models\Warga;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    public function index()
    {
        $warga = Warga::all();
        $data_kelamin = M_kelamin::all();
        $data_status = M_status::all();
        $data_goldar = M_goldar::all();
        return view('warga.index', compact('warga','data_kelamin','data_status','data_goldar'));
    }

    public function searchNama(Request $request)
    {
        $output ="";
        // $data=Warga::where('name', 'like', '%'.$request->nama.'%')->get();
        
        // foreach($data as $data)
        // {
        //     $output.=
        //     '<tr>
        //     <td>'.$data->nama.'</td>
        //     </tr>';
        // }
        // if ($data) {
        //     $resp = array(
        //         'status' =>true,
        //         'message' => 'Sukses',
        //         'data' => $data,
        //     );
        // }else {
        //     $resp = array(
        //         'status' =>false,
        //         'message' => 'Data tidak ditemukan',
        //     );
        // }
        // return response()->json($resp, 200);
        return response($output);
    }

    public function tambah()
    {
        $data_kelamin = M_kelamin::all();
        $data_status = M_status::all();
        $data_goldar = M_goldar::all();
        return view('warga.tambah', compact('data_kelamin','data_status','data_goldar'));
    }

    public function proses_tambah(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'kelamin_id' => 'required|exists:m_kelamin,id',
            'status_id' => 'required|exists:m_status,id',
            'goldar_id' => 'required|exists:m_goldar,id',
            'pekerjaan' => 'required',
        ]);

        $data = array(
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'kelamin_id' => $request->kelamin_id,
            'status_id' => $request->status_id,
            'goldar_id' => $request->goldar_id,
            'pekerjaan' => $request->pekerjaan,
        );
        Warga::create($data);
        return redirect('/warga');
    }
    public function edit(Request $request)
    {
        $id = $request->id;
        $data = [
            "warga" => Warga::where('id', $id)->first(),
            "data_kelamin" => M_kelamin::all(),
            "data_status" => M_status::all(),
            "data_goldar" => M_goldar::all(),
        ];
        return view('warga.edit',compact('data'));
    }

    public function proses_edit(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'kelamin_id' => 'required|exists:m_kelamin,id',
            'status_id' => 'required|exists:m_status,id',
            'goldar_id' => 'required|exists:m_goldar,id',
            'pekerjaan' => 'required',
        ]);
        $id = $request->id;
        $data = array(
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'kelamin_id' => $request->kelamin_id,
            'status_id' => $request->status_id,
            'goldar_id' => $request->goldar_id,
            'pekerjaan' => $request->pekerjaan,
        );
        Warga::where('id',$id)->update($data);
        return redirect('/warga');
    }
}
