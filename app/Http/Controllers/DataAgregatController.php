<?php

namespace App\Http\Controllers;

use App\Models\Warga;
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
        return view('agregat.index',compact('data_agregat_kelamin'));
        // return dd($data_agregat_kelamin);
    }
}
