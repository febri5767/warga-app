<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Console\View\Components\Warn;
use Illuminate\Http\Request;

class DataAgregatController extends Controller
{
    public function index()
    {
        // $data_ag_kelamin = Warga::all();
        $data_agregat_kelamin = [
            "laki-laki" => Warga::where('kelamin_id', 1)->count(),
            "perempuan" => Warga::where('kelamin_id', 2)->count(),
            "total" => Warga::whereIn('kelamin_id', [1,2])->count(),
        ];

        $data_agregat_status = [
            "belum_kawin" => Warga::where('status_id', 1)->count(),
            "kawin" => Warga::where('status_id', 2)->count(),
            "cerai_hidup" => Warga::where('status_id', 3)->count(),
            "cerai_mati" => Warga::where('status_id', 4)->count(),
        ];

        $data_agregat_goldar = [
            "goldar_a" => Warga::where('goldar_id', 1)->count(),
            "goldar_b" => Warga::where('goldar_id', 2)->count(),
            "goldar_ab" => Warga::where('goldar_id', 3)->count(),
            "goldar_o" => Warga::where('goldar_id', 4)->count(),
            "tidak_tahu" => Warga::where('goldar_id', 5)->count(),
        ];

        return view('agregat.index',compact('data_agregat_kelamin','data_agregat_status','data_agregat_goldar'));
    }
}
