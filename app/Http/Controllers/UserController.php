<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
	public function index()
	{
		$users = User::all();
		return view('users.index', compact('users'));
	}
	public function tambah()
	{
		return view('users.tambah');
	}

	public function proses_tambah(Request $request)
	{
		$request->validate([
			'name' => 'required',
			'email' => 'required|unique:users',
			'username' => 'required|unique:users',
			'level' => 'required',
			'nomer_hp' => 'required',
			'password' => 'required',
		]);

		$data = array(
			'name' => $request->name,
			'email' => $request->email,
			'username' => $request->username,
			'level' => $request->level,
			'nomer_hp' => $request->nomer_hp,
			'password' => bcrypt($request->password)
		);
		User::create($data);
		return redirect('/users');
	}

	public function edit(Request $request)
	{
		$data['user'] = User::where('id',$request->id)->first();
        return view('users.edit',$data);
	}

	public function proses_edit(Request $request)
	{
		$request->validate([
			'name' => 'required',
			'email' => 'required',
			'username' => 'required',
			'level' => 'required',
			'nomer_hp' => 'required',
		]);

		$data = array(
			'name' => $request->name,
			'email' => $request->email,
			'level' => $request->level,
			'username' => $request->username
		);

		if ($request->password != "") {
			$data['password'] = bcrypt($request->password);
		}
		User::where('id', $request->id)->update($data);
		return redirect('/users');
	}

	public function proses_delete($id)
    {
        User::find($id)->delete();
        return response()->json(['success' => 'Delete Berhasil!']);
    }
}
