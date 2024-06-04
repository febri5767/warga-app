<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataAgregatController extends Controller
{
    public function index()
    {
        return view('agregat.index');
    }
}
