<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        // kita ambil data user lalu simpan pada variable $user
        $user = Auth::user();
        // kondisi jika user nya ada
        if ($user) {
            // jika user nya memiliki level admin
            if ($user->level == 'admin') {
                // arahkan ke halaman admin ya
                return redirect()->intended('agregat');
            }
            // jika user nya memiliki level user
            else if ($user->level == 'user') {
                // arahkan ke halaman user
                return redirect()->intended('agregat');
            }
        }
        return view('auth.login');
    }
    //
    public function proses_login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $credential = $request->only('username', 'password');

        if (Auth::attempt($credential)) {
            $user = Auth::user();

            if ($user->level == 'admin') {
                return redirect()->intended('agregat');
            }

            else if ($user->level == 'user') {
                return redirect()->intended('agregat');
            }

            return redirect()->intended('/');
        }

        return redirect('login')
            ->withInput()
            ->withErrors(['login_gagal' => 'These credentials does not match our records']);
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        
        Auth::logout();
        
        return Redirect('login');
    }
}
