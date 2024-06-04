<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
		return view('users.index',compact('users'));
	}
    public function tambah(){
		return view('users.tambah');
	}
    public function edit(Request $request){
		return view('users.edit');
	}
}
